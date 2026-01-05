<?php

// Copyright 2021-2026 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk;

use Exception;
use ValueError;

final class RpcException extends Exception
{
    private GrpcStatus $grpcStatus;

    /**
     * @param string $message
     * @param GrpcStatus $grpcStatus
     * @throws ValueError
     */
    public function __construct(string $message, GrpcStatus $grpcStatus)
    {
        if ($grpcStatus == GrpcStatus::STATUS_OK) {
            throw new ValueError("STATUS_OK is not an exception");
        }

        parent::__construct($message, $grpcStatus->value, null);
        $this->grpcStatus = $grpcStatus;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        $status = GrpcStatus::toString($this->grpcStatus);
        return __CLASS__ . ": {$status} (Code: {$this->grpcStatus->value}): {$this->message}\n";
    }

    /**
     * @return GrpcStatus
     */
    public function getGrpcStatus(): GrpcStatus
    {
        return $this->grpcStatus;
    }

    /**
     * @param object $status
     * @throws RpcException
     */
    public static function fromStatus(object $status): void
    {
        $grpcStatus = GrpcStatus::from($status->code);
        if ($grpcStatus == GrpcStatus::STATUS_OK) {
            return;
        }

        throw new RpcException(
            RpcException::message($grpcStatus, $status->details),
            $grpcStatus
        );
    }

    /**
     * @throws RpcException
     */
    public static function unauthenticated(): RpcException
    {
        throw new RpcException(
            RpcException::message(GrpcStatus::STATUS_UNAUTHENTICATED, null),
            GrpcStatus::STATUS_UNAUTHENTICATED
        );
    }

    /**
     * @param GrpcStatus $grpcStatus
     * @param string|null $details
     * @return string
     */
    private static function message(GrpcStatus $grpcStatus, ?string $details): string
    {
        if (isset($details)) {
            return sprintf('RpcException: %s: code: %d, details: %s', GrpcStatus::toString($grpcStatus), $grpcStatus->value, $details);
        }

        return sprintf('RpcException: %s: code: %d', GrpcStatus::toString($grpcStatus), $grpcStatus->value);
    }
}

enum GrpcStatus: int
{
    case STATUS_OK = 0;
    case STATUS_CANCELLED = 1;
    case STATUS_UNKNOWN = 2;
    case STATUS_INVALID_ARGUMENT = 3;
    case STATUS_DEADLINE_EXCEEDED = 4;
    case STATUS_NOT_FOUND = 5;
    case STATUS_ALREADY_EXISTS = 6;
    case STATUS_PERMISSION_DENIED = 7;
    case STATUS_RESOURCE_EXHAUSTED = 8;
    case STATUS_FAILED_PRECONDITION = 9;
    case STATUS_ABORTED = 10;
    case STATUS_OUT_OF_RANGE = 11;
    case STATUS_UNIMPLEMENTED = 12;
    case STATUS_INTERNAL = 13;
    case STATUS_UNAVAILABLE = 14;
    case STATUS_DATA_LOSS = 15;
    case STATUS_UNAUTHENTICATED = 16;

    /**
     * @param GrpcStatus $grpcStatus
     * @return string
     * @throws ValueError
     */
    public static function toString($grpcStatus): string
    {
        switch ($grpcStatus) {
            case GrpcStatus::STATUS_OK:
                return "STATUS_OK";
            case GrpcStatus::STATUS_CANCELLED:
                return "STATUS_CANCELLED";
            case GrpcStatus::STATUS_UNKNOWN:
                return "STATUS_UNKNOWN";
            case GrpcStatus::STATUS_INVALID_ARGUMENT:
                return "STATUS_INVALID_ARGUMENT";
            case GrpcStatus::STATUS_DEADLINE_EXCEEDED:
                return "STATUS_DEADLINE_EXCEEDED";
            case GrpcStatus::STATUS_NOT_FOUND:
                return "STATUS_NOT_FOUND";
            case GrpcStatus::STATUS_ALREADY_EXISTS:
                return "STATUS_ALREADY_EXISTS";
            case GrpcStatus::STATUS_PERMISSION_DENIED:
                return "STATUS_PERMISSION_DENIED";
            case GrpcStatus::STATUS_RESOURCE_EXHAUSTED:
                return "STATUS_RESOURCE_EXHAUSTED";
            case GrpcStatus::STATUS_FAILED_PRECONDITION:
                return "STATUS_FAILED_PRECONDITION";
            case GrpcStatus::STATUS_ABORTED:
                return "STATUS_ABORTED";
            case GrpcStatus::STATUS_OUT_OF_RANGE:
                return "STATUS_OUT_OF_RANGE";
            case GrpcStatus::STATUS_UNIMPLEMENTED:
                return "STATUS_UNIMPLEMENTED";
            case GrpcStatus::STATUS_INTERNAL:
                return "STATUS_INTERNAL";
            case GrpcStatus::STATUS_UNAVAILABLE:
                return "STATUS_UNAVAILABLE";
            case GrpcStatus::STATUS_DATA_LOSS:
                return "STATUS_DATA_LOSS";
            case GrpcStatus::STATUS_UNAUTHENTICATED:
                return "STATUS_UNAUTHENTICATED";
            default:
                throw new ValueError("Unknown GrpcStatus value");
        }
    }
}
