<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

use Cerbos\Sdk\Cloud\Store\V1\GetFilesRequest;
use Cerbos\Sdk\Cloud\Store\V1\GetFilesResponse;
use Cerbos\Sdk\Cloud\Store\V1\ListFilesRequest;
use Cerbos\Sdk\Cloud\Store\V1\ListFilesResponse;
use Cerbos\Sdk\Cloud\Store\V1\ModifyFilesRequest;
use Cerbos\Sdk\Cloud\Store\V1\ModifyFilesResponse;
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
     * @param ListFilesRequest $request
     * @return ListFilesResponse
     * @throws Exception
     */
    public function listFiles(ListFilesRequest $request): ListFilesResponse {
        list($response, $status) = $this->client->ListFiles($request->toListFilesRequest())->wait();
        $this->handleError($status);

        return new ListFilesResponse($response);
    }

    /**
     * @param ModifyFilesRequest $request
     * @return ModifyFilesResponse
     * @throws Exception
     */
    public function modifyFiles(ModifyFilesRequest $request): ModifyFilesResponse {
        list($response, $status) = $this->client->ModifyFiles($request->toModifyFilesRequest())->wait();
        $this->handleError($status);

        return new ModifyFilesResponse($response);
    }

    /**
     * @param ReplaceFilesRequest $request
     * @return ReplaceFilesResponse
     * @throws Exception
     */
    public function replaceFiles(ReplaceFilesRequest $request): ReplaceFilesResponse {
        list($response, $status) = $this->client->ReplaceFiles($request->toReplaceFilesRequest())->wait();
        $this->handleError($status);

        return new ReplaceFilesResponse($response);
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
