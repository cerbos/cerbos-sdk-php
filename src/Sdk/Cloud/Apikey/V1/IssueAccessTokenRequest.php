<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Apikey\V1;

use Exception;

final class IssueAccessTokenRequest
{
    private ?string $clientId;
    private ?string $clientSecret;

    private function __construct() {
        $this->clientId = null;
        $this->clientSecret = null;
    }

    /**
     * @return IssueAccessTokenRequest
     */
    public static function newInstance(): IssueAccessTokenRequest {
        return new IssueAccessTokenRequest();
    }

    /**
     * @param string $clientId
     * @return $this
     */
    public function withClientId(string $clientId): IssueAccessTokenRequest {
        $this->clientId = $clientId;
        return $this;
    }

    /**
     * @param string $clientSecret
     * @return $this
     */
    public function withClientSecret(string $clientSecret): IssueAccessTokenRequest {
        $this->clientSecret = $clientSecret;
        return $this;
    }

    /**
     * @return \Cerbos\Cloud\Apikey\V1\IssueAccessTokenRequest
     * @throws Exception
     */
    public function toIssueAccessTokenRequest(): \Cerbos\Cloud\Apikey\V1\IssueAccessTokenRequest {
        if (!isset($this->clientId)) {
            throw new Exception("client id is not set");
        }

        if (!isset($this->clientSecret)) {
            throw new Exception("client secret is not set");
        }

        $request = (new \Cerbos\Cloud\Apikey\V1\IssueAccessTokenRequest())
            ->setClientId($this->clientId)
            ->setClientSecret($this->clientSecret);

        return $request;
    }
}
