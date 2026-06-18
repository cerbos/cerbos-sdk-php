<?php

// Copyright 2021-2026 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Test\Sdk;

use Cerbos\Sdk\Builder\CerbosClientBuilder;
use Cerbos\Sdk\CerbosClient;
use Testcontainers\Container\GenericContainer;
use Testcontainers\Container\StartedGenericContainer;
use Testcontainers\Wait\WaitForLog;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    private string $playgroundHost = 'demo-pdp.cerbos.cloud';
    private string $playgroundInstanceId = 'XhkOi82fFKk3YW60e2c806Yvm0trKEje'; // See: https://play.cerbos.dev/p/XhkOi82fFKk3YW60e2c806Yvm0trKEje
    private StartedGenericContainer $cerbosContainer;
    protected array $metadata = ["wibble" => ["wobble"]];
    protected CerbosClient $client;
    protected CerbosClient $playgroundClient;

    protected function setUp(): void
    {
        parent::setUp();

        $this->cerbosContainer = $this->cerbos();
        $host = $this->cerbosContainer->getIpAddress($this->cerbosContainer->getNetworkNames()[0]);
        $this->cerbosctl($host, ["put", "policies", "--plaintext", "-R", "/policies"]);
        $this->cerbosctl($host, ["put", "schemas", "--plaintext", "-R", "/policies"]);

        $port = $this->cerbosContainer->getMappedPort(3593);
        $this->client = CerbosClientBuilder::newInstance('localhost:' . $port)
            ->withMetadata($this->metadata)
            ->withPlaintext(true)
            ->build();
        $this->playgroundClient = CerbosClientBuilder::newInstance($this->playgroundHost)
            ->withMetadata($this->metadata)
            ->withPlayground($this->playgroundInstanceId)
            ->build();
    }

    protected function tearDown(): void
    {
        $this->cerbosContainer->stop();
        parent::tearDown();
    }

    private function cerbos(): StartedGenericContainer
    {
        $pathToConfig = realpath("./tests/res/config");
        $container = new GenericContainer('ghcr.io/cerbos/cerbos:dev')
            ->withExposedPorts(3592)
            ->withExposedPorts(3593)
            ->withMount($pathToConfig, "/config")
            ->withCommand(["server", "--config=/config/config.yaml"])
            ->withWait(new WaitForLog('Starting gRPC server at :3593'))
            ->start();

        return $container;
    }

    private function cerbosctl(string $host, array $args): void
    {
        $combinedArgs = [
            "--server=" . $host . ':3593',
            "--username=cerbos",
            "--password=cerbosAdmin"
        ];
        array_push($combinedArgs, ...$args);

        $pathToPolicies = realpath("./tests/res/policies");
        new GenericContainer('ghcr.io/cerbos/cerbosctl:dev')
            ->withMount($pathToPolicies, "/policies")
            ->withCommand($combinedArgs)
            ->start();
    }
}
