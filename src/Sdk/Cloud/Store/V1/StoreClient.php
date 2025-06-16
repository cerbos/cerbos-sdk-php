<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

use Cerbos\Sdk\Cloud\Store\V1\GetFilesRequest;
use Cerbos\Sdk\Cloud\Store\V1\GetFilesResponse;
use Exception;

final class StoreClient
{
    private \Cerbos\Cloud\Store\V1\CerbosStoreServiceClient $client;

    /**
     * @param \Cerbos\Cloud\Store\V1\CerbosStoreServiceClient $client
     */
    public function __construct(\Cerbos\Cloud\Store\V1\CerbosStoreServiceClient $client) {
        $this->client = $client;
    }

    /**
     * @param GetFilesRequest $request
     * @return GetFilesResponse
     * @throws Exception
     */
    public function getFiles(GetFilesRequest $request): GetFilesResponse {
        list($response, $status) = $this->client->GetFiles($request->toGetFilesRequest())->wait();
        $this->handleError($status);

        return new GetFilesResponse($response);
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
