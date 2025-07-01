<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Apikey\V1;

use Cerbos\Sdk\RpcException;

/**
 * @internal
 */
final class ApiKeyClient
{
    private \Cerbos\Cloud\Apikey\V1\ApiKeyServiceClient $client;

    /**
     * @param \Cerbos\Cloud\Apikey\V1\ApiKeyServiceClient $client
     */
    public function __construct(\Cerbos\Cloud\Apikey\V1\ApiKeyServiceClient $client) {
        $this->client = $client;
    }

    /**
     * @param IssueAccessTokenRequest $request
     * @return IssueAccessTokenResponse
     */
    public function issueAccessToken(IssueAccessTokenRequest $request): IssueAccessTokenResponse {
        list($response, $status) = $this->client->IssueAccessToken($request->toIssueAccessTokenRequest())->wait();
        RpcException::fromStatus($status);

        return new IssueAccessTokenResponse($response);
    }
}
