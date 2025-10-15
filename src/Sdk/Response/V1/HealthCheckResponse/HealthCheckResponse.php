<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Response\V1\HealthCheckResponse;

use Cerbos\Sdk\Response\V1\HealthCheckResponse\ServiceStatus;

final class HealthCheckResponse
{
    private ServiceStatus $status;

    /**
     * @param \Grpc\Health\V1\HealthCheckResponse $response
     */
    public function __construct(\Grpc\Health\V1\HealthCheckResponse $response)
    {
        switch ($response->getStatus()) {
            case \Grpc\Health\V1\HealthCheckResponse\ServingStatus::SERVING:
                $this->status = ServiceStatus::SERVING;
                break;
            case \Grpc\Health\V1\HealthCheckResponse\ServingStatus::NOT_SERVING:
                $this->status = ServiceStatus::NOT_SERVING;
                break;
            default:
                $this->status = ServiceStatus::NOT_SERVING;
                break;
        }
    }

    /**
     * @return HealthCheckResponse
     */
    public static function disabled(): HealthCheckResponse
    {
        $response = new HealthCheckResponse(new \Grpc\Health\V1\HealthCheckResponse());
        $response->status = ServiceStatus::DISABLED;
        return $response;
    }

    /**
     * @return ServiceStatus
     */
    public function getServiceStatus(): ServiceStatus
    {
        return $this->status;
    }
}
