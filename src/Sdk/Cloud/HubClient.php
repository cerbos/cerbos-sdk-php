<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud;

use Cerbos\Sdk\Cloud\Apikey\V1\ApiKeyClient;
use Exception;

final class HubClient
{
    private ApiKeyClient $apiKeyClient;

    /**
     * @param ApiKeyClient $apiKeyClient
     */
    public function __construct(ApiKeyClient $apiKeyClient) {
        $this->apiKeyClient = $apiKeyClient;
    }

    /**
     * @return ApiKeyClient
     * @throws Exception
     */
    public function ApiKeyClient(): ApiKeyClient {
        return $this->apiKeyClient;
    }
}
