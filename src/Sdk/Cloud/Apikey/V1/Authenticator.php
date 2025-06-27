<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Apikey\V1;

use Cerbos\Sdk\Cloud\Apikey\V1\ApiKeyClient;
use Cerbos\Sdk\Cloud\Credentials;
use Cerbos\Sdk\UnauthenticatedException;
use Cerbos\Sdk\Utility\Metadata;

const AUTH_TOKEN_HEADER = "x-cerbos-auth";
const EARLY_EXPIRE_IN_SECONDS = 300;

final class Authenticator {
    private ApiKeyClient $apiKeyClient;
    private Credentials $credentials;

    private static string $accessToken = "";
    private static int $expiresAt = 0;
    private static bool $unauthenticated = false;

    /**
     * @param ApiKeyClient $apiKeyClient
     * @param Credentials $credentials
     */
    public function __construct(ApiKeyClient $apiKeyClient, Credentials $credentials) {
        $this->apiKeyClient = $apiKeyClient;
        $this->credentials = $credentials;
    }

    /**
     * @param array|null $metadata
     * @return array
     */
    public function authenticate(
        ?array $metadata
    ) {
        $this->throwIfUnauthenticated();

        if ($this->expired()) {
            $this->issueToken();
        }

        return Metadata::merge(
            $metadata,
            [
                AUTH_TOKEN_HEADER => [ Authenticator::$accessToken ]
            ]
        );
    }

    private function issueToken() : void {
        try {
            $response = $this->apiKeyClient->issueAccessToken($this->credentials->toIssueAccessTokenRequest());
        } 
        catch(UnauthenticatedException $e) {
            $this->unauthenticated = true;
            throw $e;
        }

        Authenticator::$accessToken = $response->getAccessToken();
        Authenticator::$expiresAt = time() + (int)$response->getExpiresIn()->getSeconds();
    }

    private function throwIfUnauthenticated() : void {
        if ($this->unauthenticated) {
            throw new UnauthenticatedException('gRPC request failed: RpcException: Unauthenticated');
        }
    }

    private function expired() : bool {
        if (Authenticator::$expiresAt == 0) {
            return true;
        }
        

        return time() > (Authenticator::$expiresAt - EARLY_EXPIRE_IN_SECONDS);
    }
}
