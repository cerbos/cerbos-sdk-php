<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud;

use Cerbos\Sdk\Cloud\Apikey\V1\IssueAccessTokenRequest;

final class Credentials {
    private string $clientId;
    private string $clientSecret;

    /**
     * @param string $clientId
     * @param string $clientSecret
     */
    public function __construct(string $clientId, string $clientSecret) {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
    }

    /**
     * @return IssueAccessTokenRequest
     * @throws Exception
     */
    public function toIssueAccessTokenRequest(): IssueAccessTokenRequest {
        $request = IssueAccessTokenRequest::newInstance([
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret
        ]);

        return $request;
    }
}
