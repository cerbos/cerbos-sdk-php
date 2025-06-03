<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud;

use Cerbos\Sdk\Cloud\Apikey\V1\ApiKeyClient;

const authTokenHeader = "x-cerbos-auth";

final class AuthInterceptor extends \Grpc\Interceptor {
    private ApiKeyClient $apiKeyClient;
    private Credentials $credentials;
    private string $accessToken;

    /**
     * @param ApiKeyClient $apiKeyClient
     * @param Credentials $credentials
     */
    private function __construct(ApiKeyClient $apiKeyClient, Credentials $credentials) {
        $this->accessToken = "";
        $this->apiKeyClient = $apiKeyClient;
        $this->credentials = $credentials;
    }

    public function interceptUnaryUnary(
        mixed $method,
        mixed $argument,
        mixed $deserialize,
        mixed $continuation,
        array $metadata = [],
        array $options = []
    ) : mixed {
        $this->issueAccessToken();
        $metadata[authTokenHeader] = $this->accessToken;
        return $continuation($method, $argument, $metadata, $options);
    }

    private function issueAccessToken() : void {
        // TODO(oguzhan): Check expiresIn to decide

        $response = $this->apiKeyClient->issueAccessToken(
            $this->credentials->toIssueAccessTokenRequest()
        );

        $this->accessToken = $response->getAccessToken();
    }
}
