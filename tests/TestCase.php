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
    protected CerbosClient $client;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $clientBuilder = new CerbosClientBuilder("http://localhost:3592", new HttplugClient(), null, null, null);
        $this->client = $clientBuilder->build();
    }

    /**
     * @return CerbosClient
     */
    protected function client(): CerbosClient
    {
        return $this->client;
    }
}