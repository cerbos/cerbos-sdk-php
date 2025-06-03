<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Apikey\V1;

use Exception;

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
     * @throws Exception
     */
    public function issueAccessToken(IssueAccessTokenRequest $request): IssueAccessTokenResponse {
        list($response, $status) = $this->client->IssueAccessToken($request->toIssueAccessTokenRequest())->wait();
        $this->handleError($status);

        return new IssueAccessTokenResponse($response);
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
