<?php

declare(strict_types=1);

namespace Cerbos\Test;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

use Cerbos\Sdk\Builder\CerbosClientBuilder;
use Cerbos\Sdk\CerbosClient;
use Symfony\Component\HttpClient\HttplugClient;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    private string $host = "http://localhost:3592";
    private string $playgroundHost = "https://demo-pdp.cerbos.cloud";
    private string $playgroundInstanceId = "XhkOi82fFKk3YW60e2c806Yvm0trKEje"; // See: https://play.cerbos.dev/p/XhkOi82fFKk3YW60e2c806Yvm0trKEje
    protected CerbosClient $client;
    protected CerbosClient $playgroundClient;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $clientBuilder = new CerbosClientBuilder($this->host, new HttplugClient(), null, null, null);
        $this->client = $clientBuilder->build();

        $clientBuilder = new CerbosClientBuilder($this->playgroundHost, new HttplugClient(), null, null, null);
        $this->playgroundClient = $clientBuilder->withPlayground($this->playgroundInstanceId)->build();
    }

    /**
     * @return CerbosClient
     */
    protected function client(): CerbosClient
    {
        return $this->client;
    }
}