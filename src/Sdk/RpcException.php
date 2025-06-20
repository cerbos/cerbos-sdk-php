<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk;

use Exception;
use Throwable;

class RpcException extends Exception
{
    public function __construct($message, $code = 0, ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

    /**
     * @param object $status
     * @throws RpcException
     * @throws Exception
     */
    public static function fromStatus(object $status) {
        switch ($status->code) {
            case \Grpc\STATUS_OK:
                return;
            case \Grpc\STATUS_RESOURCE_EXHAUSTED:
                throw new ResourceExhaustedException(
                    sprintf(
                        'gRPC request failed: RpcException: Resource_Exhausted: details: %s',
                        $status->details
                    )
                );
            case \Grpc\STATUS_UNAUTHENTICATED:
                throw new UnauthenticatedException(
                    sprintf(
                        'gRPC request failed: RpcException: Unauthenticated: details: %s',
                        $status->details
                    )
                );
            case \Grpc\STATUS_CANCELLED:
            case \Grpc\STATUS_UNKNOWN:
            case \Grpc\STATUS_INVALID_ARGUMENT:
            case \Grpc\STATUS_DEADLINE_EXCEEDED:
            case \Grpc\STATUS_NOT_FOUND:
            case \Grpc\STATUS_ALREADY_EXISTS:
            case \Grpc\STATUS_PERMISSION_DENIED:
            case \Grpc\STATUS_FAILED_PRECONDITION:
            case \Grpc\STATUS_ABORTED:
            case \Grpc\STATUS_OUT_OF_RANGE:
            case \Grpc\STATUS_UNIMPLEMENTED:
            case \Grpc\STATUS_INTERNAL:
            case \Grpc\STATUS_UNAVAILABLE:
            case \Grpc\STATUS_DATA_LOSS:
                throw new RpcException(
                    sprintf(
                        'gRPC request failed: RpcException: error code: %s, details: %s',
                        $status->code,
                        $status->details
                    )
                );
        }

        throw new Exception(
            sprintf(
                'gRPC request failed: Exception: error code: %s, details: %s',
                $status->code,
                $status->details
            )
        );
    }
}

final class UnauthenticatedException extends RpcException {
    public function __construct($message, $code = 0, ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}

final class ResourceExhaustedException extends RpcException {
    public function __construct($message, $code = 0, ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
