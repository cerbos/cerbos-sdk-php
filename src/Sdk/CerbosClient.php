<?php

// Copyright 2021-2023 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk;

use Cerbos\Sdk\Builder\CheckResourcesRequest;
use Cerbos\Sdk\Builder\PlanResourcesRequest;
use Cerbos\Sdk\Response\V1\CheckResourcesResponse\CheckResourcesResponse;
use Cerbos\Sdk\Response\V1\PlanResourcesResponse\PlanResourcesResponse;
use Cerbos\Svc\V1\CerbosServiceClient;
use Exception;

class CerbosClient
{
    private CerbosServiceClient $csc;

    private string $playgroundInstanceId;
    private string $playgroundInstanceHeader = "playground-instance";

    /**
     * @param CerbosServiceClient $csc
     * @param string $playgroundInstanceId
     */
    public function __construct(CerbosServiceClient $csc, string $playgroundInstanceId) {
        $this->csc = $csc;
        $this->playgroundInstanceId = $playgroundInstanceId;
    }

    /**
     * @param CheckResourcesRequest $request
     * @return CheckResourcesResponse
     * @throws Exception
     */
    public function checkResources(CheckResourcesRequest $request): CheckResourcesResponse {
        list($checkResourcesResponse, $status) = $this->csc->CheckResources($request->toCheckResourcesRequest(), $this->getMetadata())->wait();
        $this->handleError($status);

        return new CheckResourcesResponse($checkResourcesResponse);
    }

    /**
     * @param PlanResourcesRequest $request
     * @return PlanResourcesResponse
     * @throws Exception
     */
    public function planResources(PlanResourcesRequest $request): PlanResourcesResponse {
        list($planResourcesResponse, $status) = $this->csc->PlanResources($request->toPlanResourcesRequest(), $this->getMetadata())->wait();
        $this->handleError($status);

        return new PlanResourcesResponse($planResourcesResponse);
    }

    /**
     * @return array<string, array>
     */
    private function getMetadata(): array {
        return array(
            $this->playgroundInstanceHeader => [$this->playgroundInstanceId]
        );
    }

    /**
     * @param object $status
     * @throws Exception
     */
    private function handleError(object $status): void
    {
        if ($status->code != 0) {
            throw new Exception(
                sprintf(
                    'gRPC request failed: error code: %s, details: %s',
                    $status->code,
                    $status->details
                )
            );
        }
    }
}
