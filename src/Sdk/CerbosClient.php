<?php

// Copyright 2021-2026 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk;

use Cerbos\Sdk\Builder\CheckResourcesRequest;
use Cerbos\Sdk\Builder\HealthCheckRequest;
use Cerbos\Sdk\Builder\HealthCheckRequest\Service;
use Cerbos\Sdk\Builder\PlanResourcesRequest;
use Cerbos\Sdk\Response\V1\CheckResourcesResponse\CheckResourcesResponse;
use Cerbos\Sdk\Response\V1\HealthCheckResponse\HealthCheckResponse;
use Cerbos\Sdk\Response\V1\PlanResourcesResponse\PlanResourcesResponse;
use Cerbos\Sdk\Utility\Metadata;
use Cerbos\Svc\V1\CerbosServiceClient;
use Grpc\Health\V1\HealthClient;

final class CerbosClient
{
    private CerbosServiceClient $csc;
    private HealthClient $hc;
    private ?array $metadata;

    /**
     * @param CerbosServiceClient $csc
     * @param array<string, array> $headers
     */
    public function __construct(CerbosServiceClient $csc, HealthClient $hc, $headers = null)
    {
        $this->csc = $csc;
        $this->hc = $hc;
        $this->metadata = $headers;
    }

    /**
     * @param HealthCheckRequest $request
     * @param array<string, array> $headers
     * @return HealthCheckResponse
     * @psalm-suppress ArgumentTypeCoercion
     * @psalm-suppress PossiblyNullArgument
     */
    public function checkHealth(HealthCheckRequest $request, $headers = null): HealthCheckResponse
    {
        list($healthCheckResponse, $status) = $this->hc->Check($request->toHealthCheckRequest(), Metadata::merge($this->metadata, $headers))->wait();
        try {
            RpcException::fromStatus($status);
        } catch (RpcException $e) {
            if ($request->getService() == Service::ADMIN && $e->getGrpcStatus() == GrpcStatus::STATUS_NOT_FOUND) {
                return HealthCheckResponse::disabled();
            }

            throw $e;
        }
        NullResponseException::fromResponse($healthCheckResponse);

        return new HealthCheckResponse($healthCheckResponse);
    }

    /**
     * @param CheckResourcesRequest $request
     * @param array<string, array> $headers
     * @return CheckResourcesResponse
     * @psalm-suppress ArgumentTypeCoercion
     * @psalm-suppress PossiblyNullArgument
     */
    public function checkResources(CheckResourcesRequest $request, $headers = null): CheckResourcesResponse
    {
        list($checkResourcesResponse, $status) = $this->csc->CheckResources($request->toCheckResourcesRequest(), Metadata::merge($this->metadata, $headers))->wait();
        RpcException::fromStatus($status);
        NullResponseException::fromResponse($checkResourcesResponse);

        return new CheckResourcesResponse($checkResourcesResponse);
    }

    /**
     * @param PlanResourcesRequest $request
     * @param array<string, array> $headers
     * @return PlanResourcesResponse
     * @psalm-suppress ArgumentTypeCoercion
     * @psalm-suppress PossiblyNullArgument
     */
    public function planResources(PlanResourcesRequest $request, $headers = null): PlanResourcesResponse
    {
        list($planResourcesResponse, $status) = $this->csc->PlanResources($request->toPlanResourcesRequest(), Metadata::merge($this->metadata, $headers))->wait();
        RpcException::fromStatus($status);
        NullResponseException::fromResponse($planResourcesResponse);

        return new PlanResourcesResponse($planResourcesResponse);
    }
}
