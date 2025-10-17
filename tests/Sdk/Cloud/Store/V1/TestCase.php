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

        $envApiEndpoint = getenv("CERBOS_HUB_API_ENDPOINT");
        $envClientId = getenv("CERBOS_HUB_CLIENT_ID");
        $envClientSecret = getenv("CERBOS_HUB_CLIENT_SECRET");

        if (
            !is_string($envApiEndpoint)
            || !is_string($envClientId)
            || !is_string($envClientSecret)
        ) {
            $this->markTestSkipped("Skipping the test because CERBOS_HUB_API_ENDPOINT, CERBOS_HUB_CLIENT_ID or CERBOS_HUB_CLIENT_SECRET environment variables must be specified.");
        }

        if (
            empty($envApiEndpoint)
            || empty($envClientId)
            || empty($envClientSecret)
        ) {
            $this->markTestSkipped("Skipping the test because value of the CERBOS_HUB_API_ENDPOINT, CERBOS_HUB_CLIENT_ID or CERBOS_HUB_CLIENT_SECRET environment variables length must be greater than zero.");
        }

        $this->hubClient = HubClientBuilder::fromEnv()->build();

        $storeId = getenv("CERBOS_HUB_STORE_ID");
        if (!is_string($storeId)) {
            $this->markTestSkipped("Skipping the test because CERBOS_HUB_STORE_ID environment variable must be specified.");
        }

        if (empty($storeId)) {
            $this->markTestSkipped("Skipping the test because value of the CERBOS_HUB_STORE_ID environment variable must be greater than zero.");
        }

        $this->storeId = $storeId;
    }
}
