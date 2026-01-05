<?php

// Copyright 2021-2026 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Builder;

use Exception;
use \Cerbos\Sdk\Builder\HealthCheckRequest\Service;

final class HealthCheckRequest
{
    private Service $service;

    private function __construct(Service $service)
    {
        $this->service = $service;
    }

    /**
     * @param Service $service
     * @return $this
     */
    public static function newInstance(Service $service): HealthCheckRequest
    {
        return new HealthCheckRequest($service);
    }

    /**
     * @return Service
     */
    public function getService(): Service
    {
        return $this->service;
    }

    /**
     * @return \Grpc\Health\V1\HealthCheckRequest
     * @throws Exception
     */
    public function toHealthCheckRequest(): \Grpc\Health\V1\HealthCheckRequest
    {
        if ($this->service == Service::UNSPECIFIED) {
            throw new Exception("Service must be specified");
        }

        $request = (new \Grpc\Health\V1\HealthCheckRequest())
            ->setService($this->service->value);

        return $request;
    }
}
