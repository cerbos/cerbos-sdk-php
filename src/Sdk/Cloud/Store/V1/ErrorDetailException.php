<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

use Cerbos\Cloud\Store\V1\ErrDetailCannotModifyGitConnectedStore;
use Cerbos\Cloud\Store\V1\ErrDetailConditionUnsatisfied;
use Cerbos\Cloud\Store\V1\ErrDetailNoUsableFiles;
use Cerbos\Cloud\Store\V1\ErrDetailOperationDiscarded;
use Cerbos\Cloud\Store\V1\ErrDetailValidationFailure;
use Cerbos\Cloud\Store\V1\FileError;
use Exception;
use Google\Rpc\Status;
use GPBMetadata\Google\Rpc\ErrorDetails;

final class ErrorDetailException {
    private const GRPC_STATUS_DETAILS_BIN_HEADER = "grpc-status-details-bin";

    /**
     * @param object $status
     * @throws CannotModifyGitConnectedStoreException
     * @throws ConditionUnsatisfiedException
     * @throws NoUsableFilesException
     * @throws OperationDiscardedException
     * @throws ValidationFailureException
     */
    public static function fromStatus($status) : void {
        ErrorDetails::initOnce();

        $message = $status->details;
        $metadata = $status->metadata;

        if (is_null($metadata)) {
            return;
        }

        if(!array_key_exists(self::GRPC_STATUS_DETAILS_BIN_HEADER, $metadata)) {
            return;
        }

        if(!array_key_exists(0, $metadata[self::GRPC_STATUS_DETAILS_BIN_HEADER])) {
            return;
        }

        $rpcStatus = new Status();
        $rpcStatus->mergeFromString($metadata[self::GRPC_STATUS_DETAILS_BIN_HEADER][0]);
        
        /** @psalm-suppress UnnecessaryVarAnnotation */
        /** @var \Google\Protobuf\RepeatedField */
        $details = $rpcStatus->getDetails();

        if(is_null($details[0])) {
            return;
        }

        $errorDetail = $details[0]->unpack();
        $errorDetail->discardUnknownFields();

        switch(true) {
            case $errorDetail instanceof ErrDetailCannotModifyGitConnectedStore:
                throw new CannotModifyGitConnectedStoreException(
                    $message
                );
            case $errorDetail instanceof ErrDetailConditionUnsatisfied:
                throw new ConditionUnsatisfiedException(
                    $message,
                    $errorDetail
                );
            case $errorDetail instanceof ErrDetailNoUsableFiles:
                throw new NoUsableFilesException(
                    $message,
                    $errorDetail
                );
            case $errorDetail instanceof ErrDetailOperationDiscarded:
                throw new OperationDiscardedException(
                    $message,
                    $errorDetail
                );
            case $errorDetail instanceof ErrDetailValidationFailure:
                throw new ValidationFailureException(
                    $message,
                    $errorDetail
                );
            default:
                return;
        }
    }
}

final class CannotModifyGitConnectedStoreException extends Exception {
    /**
     * @param string $message
     */
    public function __construct(
        string $message
    ) {
        parent::__construct($message);
    }

    /**
     * @return string
     */
    public function __toString() : string {
        return __CLASS__ . ': ' . $this->message;
    }
}

final class ConditionUnsatisfiedException extends Exception {
    private ErrDetailConditionUnsatisfied $detail;

    /**
     * @param string $message
     * @param ErrDetailConditionUnsatisfied $detail
     */
    public function __construct(
        string $message,
        ErrDetailConditionUnsatisfied $detail
    ) {
        parent::__construct($message);
        $this->detail = $detail;
    }

    /**
     * @return int
     */
    public function getCurrentStoreVersion() : int {
        return (int)$this->detail->getCurrentStoreVersion();
    }

    /**
     * @return string
     */
    public function __toString() : string {
        return __CLASS__ . ': ' . $this->message;
    }
}

final class NoUsableFilesException extends Exception {
    private ErrDetailNoUsableFiles $detail;

    /**
     * @param string $message
     * @param ErrDetailNoUsableFiles $detail
     */
    public function __construct(
        string $message,
        ErrDetailNoUsableFiles $detail
    ) {
        parent::__construct($message);
        $this->detail = $detail;
    }

    /**
     * @return string[]
     */
    public function getIgnoredFiles() : array {
        return iterator_to_array($this->detail->getIgnoredFiles());
    }

    /**
     * @return string
     */
    public function __toString() : string {
        return __CLASS__ . ': ' . $this->message;
    }
}

final class OperationDiscardedException extends Exception {
    private ErrDetailOperationDiscarded $detail;

    /**
     * @param string $message
     * @param ErrDetailOperationDiscarded $detail
     */
    public function __construct(
        string $message,
        ErrDetailOperationDiscarded $detail
    ) {
        parent::__construct($message);
        $this->detail = $detail;
    }

    /**
     * @return int
     */
    public function getCurrentStoreVersion() : int {
        return (int)$this->detail->getCurrentStoreVersion();
    }

    /**
     * @return string
     */
    public function __toString() : string {
        return __CLASS__ . ': ' . $this->message;
    }
}

final class ValidationFailureException extends Exception {
    private ErrDetailValidationFailure $detail;

    /**
     * @param string $message
     * @param ErrDetailValidationFailure $detail
     */
    public function __construct(
        string $message,
        ErrDetailValidationFailure $detail
    ) {
        parent::__construct($message);
        $this->detail = $detail;
    }

    /**
     * @return FileError[]
     */
    public function getCurrentStoreVersion() : array {
        return iterator_to_array($this->detail->getErrors());
    }

    /**
     * @return string
     */
    public function __toString() : string {
        return __CLASS__ . ': ' . $this->message;
    }
}
