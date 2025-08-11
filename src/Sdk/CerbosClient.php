<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk;

use Cerbos\Sdk\Builder\CheckResourcesRequest;
use Cerbos\Sdk\Builder\PlanResourcesRequest;
use Cerbos\Sdk\Response\V1\CheckResourcesResponse\CheckResourcesResponse;
use Cerbos\Sdk\Response\V1\PlanResourcesResponse\PlanResourcesResponse;
use Cerbos\Sdk\Utility\Metadata;
use Cerbos\Svc\V1\CerbosServiceClient;

final class CerbosClient
{
    private CerbosServiceClient $csc;
    private ?array $metadata;

    /**
     * @param CerbosServiceClient $csc
     * @param array<string, array> $headers
     */
    public function __construct(CerbosServiceClient $csc, $headers = null) {
        $this->csc = $csc;
        $this->metadata = $headers;
    }

    /**
     * @param CheckResourcesRequest $request
     * @param array<string, array> $headers
     * @return CheckResourcesResponse
     * @psalm-suppress ArgumentTypeCoercion
     * @psalm-suppress PossiblyNullArgument
     */
    public function checkResources(CheckResourcesRequest $request, $headers = null): CheckResourcesResponse {
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
    public function planResources(PlanResourcesRequest $request, $headers = null): PlanResourcesResponse {
        list($planResourcesResponse, $status) = $this->csc->PlanResources($request->toPlanResourcesRequest(), Metadata::merge($this->metadata, $headers))->wait();
        RpcException::fromStatus($status);
        NullResponseException::fromResponse($planResourcesResponse);

        return new PlanResourcesResponse($planResourcesResponse);
    }
}
