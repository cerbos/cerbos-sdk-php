<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk;

use Exception;
use Throwable;

const STATUS_OK = 0;
const STATUS_CANCELLED = 1;
const STATUS_UNKNOWN = 2;
const STATUS_INVALID_ARGUMENT = 3;
const STATUS_DEADLINE_EXCEEDED = 4;
const STATUS_NOT_FOUND = 5;
const STATUS_ALREADY_EXISTS = 6;
const STATUS_PERMISSION_DENIED = 7;
const STATUS_RESOURCE_EXHAUSTED = 8;
const STATUS_FAILED_PRECONDITION = 9;
const STATUS_ABORTED = 10;
const STATUS_OUT_OF_RANGE = 11;
const STATUS_UNIMPLEMENTED = 12;
const STATUS_INTERNAL = 13;
const STATUS_UNAVAILABLE = 14;
const STATUS_DATA_LOSS = 15;
const STATUS_UNAUTHENTICATED = 16;

class RpcException extends Exception
{
    public function __construct(string $message, int $code = 0, ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

    public function __toString() : string {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

    /**
     * @param object $status
     * @throws RpcException
     * @throws Exception
     */
    public static function fromStatus(object $status) : void {
        switch ($status->code) {
            case STATUS_OK:
                return;
            case STATUS_RESOURCE_EXHAUSTED:
                throw new ResourceExhaustedException(
                    sprintf(
                        'gRPC request failed: RpcException: Resource_Exhausted: details: %s',
                        $status->details
                    )
                );
            case STATUS_UNAUTHENTICATED:
                throw new UnauthenticatedException(
                    sprintf(
                        'gRPC request failed: RpcException: Unauthenticated: details: %s',
                        $status->details
                    )
                );
            default:
                throw new RpcException(
                    sprintf(
                        'gRPC request failed: RpcException: error code: %s, details: %s',
                        $status->code,
                        $status->details
                    )
                );
        }
    }
}

final class UnauthenticatedException extends RpcException {
    public function __construct(string $message, int $code = 0, ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}

final class ResourceExhaustedException extends RpcException {
    public function __construct(string $message, int $code = 0, ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
