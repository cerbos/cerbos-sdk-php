<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Apikey\V1;

/**
 * @internal
 */
final class IssueAccessTokenResponse
{
    private \Cerbos\Cloud\Apikey\V1\IssueAccessTokenResponse $response;

    /**
     * @param \Cerbos\Cloud\Apikey\V1\IssueAccessTokenResponse $response
     */
    public function __construct(\Cerbos\Cloud\Apikey\V1\IssueAccessTokenResponse $response) {
        $this->response = $response;
    }

    /**
     * @return string
     */
    public function getAccessToken(): string {
        return $this->response->getAccessToken();
    }

    /**
     * @return \Google\Protobuf\Duration
     */
    public function getExpiresIn(): \Google\Protobuf\Duration {
        $expiresIn = $this->response->getExpiresIn();
        if(!isset($expiresIn)) {
            throw new \Exception("expiresIn is not set");
        }

        return $expiresIn;
    }

    /**
     * @return \Cerbos\Cloud\Apikey\V1\IssueAccessTokenResponse
     */
    public function toIssueAccessTokenResponse(): \Cerbos\Cloud\Apikey\V1\IssueAccessTokenResponse {
        return $this->response;
    }
}
