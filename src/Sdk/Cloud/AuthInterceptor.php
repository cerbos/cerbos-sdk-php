<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud;

use Cerbos\Sdk\Cloud\Apikey\V1\ApiKeyClient;

const AUTH_TOKEN_HEADER = "x-cerbos-auth";

/**
* @psalm-suppress MissingParamType
* @psalm-suppress MissingReturnType
*/
final class AuthInterceptor extends \Grpc\Interceptor {
    private ApiKeyClient $apiKeyClient;
    private Credentials $credentials;
    private string $accessToken;

    /**
     * @param ApiKeyClient $apiKeyClient
     * @param Credentials $credentials
     */
    public function __construct(ApiKeyClient $apiKeyClient, Credentials $credentials) {
        $this->accessToken = "";
        $this->apiKeyClient = $apiKeyClient;
        $this->credentials = $credentials;
    }

    public function interceptUnaryUnary(
        $method,
        $argument,
        $deserialize,
        $continuation,
        array $metadata = [],
        array $options = []
    ) {
        $this->issueAccessToken();
        $metadata[AUTH_TOKEN_HEADER] = [$this->accessToken];
        return $continuation($method, $argument, $metadata, $options);
    }

    public function interceptStreamUnary(
        $method,
        $deserialize,
        $continuation,
        array $metadata = [],
        array $options = []
    ) {
        $this->issueAccessToken();
        $metadata[AUTH_TOKEN_HEADER] = [$this->accessToken];
        return $continuation($method, $deserialize, $metadata, $options);
    }

    public function interceptUnaryStream(
        $method,
        $argument,
        $deserialize,
        $continuation,
        array $metadata = [],
        array $options = []
    ) {
        $this->issueAccessToken();
        $metadata[AUTH_TOKEN_HEADER] = [$this->accessToken];
        return $continuation($method, $argument, $deserialize, $metadata, $options);
    }

    public function interceptStreamStream(
        $method,
        $deserialize,
        $continuation,
        array $metadata = [],
        array $options = []
    ) {
        $this->issueAccessToken();
        $metadata[AUTH_TOKEN_HEADER] = [$this->accessToken];
        return $continuation($method, $deserialize, $metadata, $options);
    }

    private function issueAccessToken() : void {
        // TODO(oguzhan): Check expiresIn to decide

        $response = $this->apiKeyClient->issueAccessToken(
            $this->credentials->toIssueAccessTokenRequest()
        );

        $this->accessToken = $response->getAccessToken();
    }
}
