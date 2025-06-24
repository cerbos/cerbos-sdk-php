<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Interceptor;

use Cerbos\Sdk\Cloud\Apikey\V1\ApiKeyClient;
use Cerbos\Sdk\Cloud\Credentials;
use Cerbos\Sdk\ResourceExhaustedException;
use Cerbos\Sdk\RpcException;
use Cerbos\Sdk\UnauthenticatedException;
use Cerbos\Sdk\Utility\Metadata;

const AUTH_TOKEN_HEADER = "x-cerbos-auth";

/**
* @psalm-suppress MissingParamType
* @psalm-suppress MissingReturnType
*/
final class AuthInterceptor extends \Grpc\Interceptor {
    private ApiKeyClient $apiKeyClient;
    private Credentials $credentials;
    private string $accessToken;
    private int $expiresAt;
    private ?RpcException $lastException;
    
    private const earlyExpireInSeconds = 300;

    /**
     * @param ApiKeyClient $apiKeyClient
     * @param Credentials $credentials
     */
    public function __construct(ApiKeyClient $apiKeyClient, Credentials $credentials) {
        $this->accessToken = "";
        $this->apiKeyClient = $apiKeyClient;
        $this->credentials = $credentials;
        $this->expiresAt = 0;
        $this->lastException = null;
    }

    public function interceptUnaryUnary(
        $method,
        $argument,
        $deserialize,
        $continuation,
        array $metadata = [],
        array $options = []
    ) {
        $this->throwIfUnauthenticated();

        if ($this->expired()) {
            $this->issueToken();
        }

        $combinedMetadata = Metadata::merge(
            $metadata,
            [
                AUTH_TOKEN_HEADER => [ $this->accessToken ]
            ]
        );

        return $continuation($method, $argument, $combinedMetadata, $options);
    }

    public function interceptStreamUnary(
        $method,
        $deserialize,
        $continuation,
        array $metadata = [],
        array $options = []
    ) {
        $this->throwIfUnauthenticated();

        if ($this->expired()) {
            $this->issueToken();
        }

        $combinedMetadata = Metadata::merge(
            $metadata,
            [
                AUTH_TOKEN_HEADER => [ $this->accessToken ]
            ]
        );

        return $continuation($method, $deserialize, $combinedMetadata, $options);
    }

    public function interceptUnaryStream(
        $method,
        $argument,
        $deserialize,
        $continuation,
        array $metadata = [],
        array $options = []
    ) {
        $this->throwIfUnauthenticated();

        if ($this->expired()) {
            $this->issueToken();
        }

        $combinedMetadata = Metadata::merge(
            $metadata,
            [
                AUTH_TOKEN_HEADER => [ $this->accessToken ]
            ]
        );

        return $continuation($method, $argument, $deserialize, $combinedMetadata, $options);
    }

    public function interceptStreamStream(
        $method,
        $deserialize,
        $continuation,
        array $metadata = [],
        array $options = []
    ) {
        $this->throwIfUnauthenticated();

        if ($this->expired()) {
            $this->issueToken();
        }

        $combinedMetadata = Metadata::merge(
            $metadata,
            [
                AUTH_TOKEN_HEADER => [ $this->accessToken ]
            ]
        );

        return $continuation($method, $deserialize, $combinedMetadata, $options);
    }

    private function issueToken() : void {
         try {
            $response = $this->apiKeyClient->issueAccessToken($this->credentials->toIssueAccessTokenRequest());
        } 
        catch(ResourceExhaustedException $e) {
            // TODO: Backoff
            $this->lastException = $e;
            throw $e;
        } 
        catch(UnauthenticatedException $e) {
            $this->lastException = $e;
            throw $e;
        }

        $this->accessToken = $response->getAccessToken();
        $this->expiresAt = time() + (int)$response->getExpiresIn()->getSeconds();
    }

    private function throwIfUnauthenticated() : void {
        if ($this->lastException instanceof UnauthenticatedException) {
            throw $this->lastException;
        }
    }

    private function expired() : bool {
        if ($this->expiresAt == 0) {
            return true;
        }

        return time() > ($this->expiresAt - self::earlyExpireInSeconds);
    }
}
