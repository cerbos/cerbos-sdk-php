<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

use Cerbos\Sdk\Cloud\Apikey\V1\Authenticator;
use Cerbos\Sdk\Cloud\Store\V1\GetFilesRequest;
use Cerbos\Sdk\Cloud\Store\V1\GetFilesResponse;
use Cerbos\Sdk\Cloud\Store\V1\ListFilesRequest;
use Cerbos\Sdk\Cloud\Store\V1\ListFilesResponse;
use Cerbos\Sdk\Cloud\Store\V1\ModifyFilesRequest;
use Cerbos\Sdk\Cloud\Store\V1\ModifyFilesResponse;
use Cerbos\Sdk\NullResponseException;
use Cerbos\Sdk\RpcException;

final class StoreClient
{
    private \Cerbos\Cloud\Store\V1\CerbosStoreServiceClient $client;
    private Authenticator $authenticator;

    /**
     * @param \Cerbos\Cloud\Store\V1\CerbosStoreServiceClient $client
     * @param Authenticator $authenticator
     */
    public function __construct(\Cerbos\Cloud\Store\V1\CerbosStoreServiceClient $client, Authenticator $authenticator) {
        $this->client = $client;
        $this->authenticator = $authenticator;
    }

    /**
     * @param GetFilesRequest $request
     * @return GetFilesResponse
     * @psalm-suppress ArgumentTypeCoercion
     * @psalm-suppress PossiblyNullArgument
     */
    public function getFiles(GetFilesRequest $request): GetFilesResponse {
        list($response, $status) = $this->client->GetFiles($request->toGetFilesRequest(), $this->authenticator->authenticate(null))->wait();
        ErrorDetailException::fromStatus($status);
        RpcException::fromStatus($status);
        NullResponseException::fromResponse($response);

        return new GetFilesResponse($response);
    }

    /**
     * @param ListFilesRequest $request
     * @return ListFilesResponse
     * @psalm-suppress ArgumentTypeCoercion
     * @psalm-suppress PossiblyNullArgument
     */
    public function listFiles(ListFilesRequest $request): ListFilesResponse {
        list($response, $status) = $this->client->ListFiles($request->toListFilesRequest(), $this->authenticator->authenticate(null))->wait();
        ErrorDetailException::fromStatus($status);
        RpcException::fromStatus($status);
        NullResponseException::fromResponse($response);

        return new ListFilesResponse($response);
    }

    /**
     * @param ModifyFilesRequest $request
     * @return ModifyFilesResponse
     * @psalm-suppress ArgumentTypeCoercion
     * @psalm-suppress PossiblyNullArgument
     */
    public function modifyFiles(ModifyFilesRequest $request): ModifyFilesResponse {
        list($response, $status) = $this->client->ModifyFiles($request->toModifyFilesRequest(), $this->authenticator->authenticate(null))->wait();
        ErrorDetailException::fromStatus($status);
        RpcException::fromStatus($status);
        NullResponseException::fromResponse($response);

        return new ModifyFilesResponse($response);
    }

    /**
     * @param ReplaceFilesRequest $request
     * @return ReplaceFilesResponse
     * @psalm-suppress ArgumentTypeCoercion
     * @psalm-suppress PossiblyNullArgument
     */
    public function replaceFiles(ReplaceFilesRequest $request): ReplaceFilesResponse {
        list($response, $status) = $this->client->ReplaceFiles($request->toReplaceFilesRequest(), $this->authenticator->authenticate(null))->wait();
        ErrorDetailException::fromStatus($status);
        RpcException::fromStatus($status);
        NullResponseException::fromResponse($response);

        return new ReplaceFilesResponse($response);
    }
}
