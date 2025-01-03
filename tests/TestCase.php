<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Test;

use Cerbos\Sdk\Builder\CerbosClientBuilder;
use Cerbos\Sdk\CerbosClient;
use Exception;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    private string $host = 'localhost:3593';
    private string $playgroundHost = 'demo-pdp.cerbos.cloud';
    private string $playgroundInstanceId = 'XhkOi82fFKk3YW60e2c806Yvm0trKEje'; // See: https://play.cerbos.dev/p/XhkOi82fFKk3YW60e2c806Yvm0trKEje
    protected array $metadata = ["wibble" => ["wobble"]];
    protected CerbosClient $client;
    protected CerbosClient $playgroundClient;

    /**
     * @return void
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->client = CerbosClientBuilder::newInstance($this->host)
            ->withMetadata($this->metadata)
            ->withPlaintext(true)
            ->build();
        $this->playgroundClient = CerbosClientBuilder::newInstance($this->playgroundHost)
            ->withMetadata($this->metadata)
            ->withPlayground($this->playgroundInstanceId)
            ->build();
    }
}
