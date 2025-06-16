<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Test\Sdk\Cloud\Store\V1;

use Cerbos\Sdk\Cloud\HubClient;
use Cerbos\Sdk\Cloud\HubClientBuilder;
use Exception;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    protected HubClient $hubClient;
    protected string $storeId;

    /**
     * @return void
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $apiEndpoint = getenv("CERBOS_HUB_API_ENDPOINT");
        $clientId = getenv("CERBOS_HUB_CLIENT_ID");
        $clientSecret = getenv("CERBOS_HUB_CLIENT_SECRET");
        $storeId = getenv("CERBOS_HUB_STORE_ID");

        if (!is_string($apiEndpoint))
        {
            $this->markTestSkipped("Skipping the test, CERBOS_HUB_API_ENDPOINT environment variable is not set!");
        }

        if (!is_string($clientId))
        {
            $this->markTestSkipped("Skipping the test, CERBOS_HUB_CLIENT_ID environment variable is not set!");
        }

        if (!is_string($clientSecret))
        {
            $this->markTestSkipped("Skipping the test, CERBOS_HUB_CLIENT_SECRET environment variable is not set!");
        }

        if (!is_string($storeId))
        {
            $this->markTestSkipped("Skipping the test, CERBOS_HUB_STORE_ID environment variable is not set!");
        }
        $this->storeId = $storeId;

        $this->hubClient = HubClientBuilder::newInstance($apiEndpoint)
            ->withCredentials($clientId, $clientSecret)
            ->build();
    }
}
