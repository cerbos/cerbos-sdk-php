<?php

declare(strict_types=1);

namespace Cerbos\Sdk\Builder;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

use Cerbos\Sdk\CerbosClient;
use Http\Client\Common\HttpMethodsClient;
use Http\Client\Common\Plugin;
use Http\Client\Common\Plugin\BaseUriPlugin;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;
use Http\Client\Common\PluginClientFactory;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;

class CerbosClientBuilder
{
    private ClientInterface $httpClient;
    private RequestFactoryInterface $requestFactoryInterface;
    private StreamFactoryInterface $streamFactoryInterface;
    private UriFactoryInterface $uriFactory;
    private array $plugins = [];
    private string $playgroundInstanceId;
    private string $playgroundInstanceHeaderKey = "playground-instance";

    /**
     * @param string $uri
     * @param ClientInterface|null $httpClient
     * @param RequestFactoryInterface|null $requestFactoryInterface
     * @param StreamFactoryInterface|null $streamFactoryInterface
     * @param UriFactoryInterface|null $uriFactoryInterface
     */
    public function __construct(
        string                   $uri,
        ?ClientInterface         $httpClient,
        ?RequestFactoryInterface $requestFactoryInterface,
        ?StreamFactoryInterface  $streamFactoryInterface,
        ?UriFactoryInterface     $uriFactoryInterface
    )
    {
        $this->httpClient = $httpClient ?: Psr18ClientDiscovery::find();
        $this->requestFactoryInterface = $requestFactoryInterface ?: Psr17FactoryDiscovery::findRequestFactory();
        $this->streamFactoryInterface = $streamFactoryInterface ?: Psr17FactoryDiscovery::findStreamFactory();
        $this->uriFactory = $uriFactoryInterface ?: Psr17FactoryDiscovery::findUriFactory();
        $this->addPlugin(new BaseUriPlugin($this->uriFactory->createUri($uri)));
        $this->playgroundInstanceId = "";
    }

    /**
     * @param Plugin $plugin
     * @return void
     */
    public function addPlugin(Plugin $plugin): void
    {
        $this->plugins[] = $plugin;
    }

    public function withPlayground(string $playgroundInstanceId): CerbosClientBuilder {
        $this->playgroundInstanceId = $playgroundInstanceId;
        return $this;
    }

    /**
     * @return CerbosClient
     */
    public function build(): CerbosClient
    {
        $headers = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];

        if ($this->playgroundInstanceId != "") {
              $headers[$this->playgroundInstanceHeaderKey] = $this->playgroundInstanceId;
        }

        $this->addPlugin(new HeaderDefaultsPlugin($headers));

        $pluginClient = (new PluginClientFactory())->createClient($this->httpClient, $this->plugins);

        return new CerbosClient(new HttpMethodsClient(
            $pluginClient,
            $this->requestFactoryInterface,
            $this->streamFactoryInterface
        ));
    }
}