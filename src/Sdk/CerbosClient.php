<?php

declare(strict_types=1);

namespace Cerbos\Sdk;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

use Http\Client\Common\HttpMethodsClientInterface;
use Http\Client\Exception;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

final class CerbosClient
{
    private HttpMethodsClientInterface $client;
    private string $checkResourceEndpoint = "/api/check/resources";

    /**
     * @param HttpMethodsClientInterface $client
     */
    public function __construct(HttpMethodsClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @param Builder\Principal $principal
     * @param Builder\Resource $resource
     * @param array $actions
     * @param Builder\AuxData|null $auxData
     * @return ResponseInterface
     * @throws Exception
     */
    public function checkResource(Builder\Principal $principal, Builder\Resource $resource, array $actions, ?Builder\AuxData $auxData): ResponseInterface
    {
        return $this->client->post(
            $this->checkResourceEndpoint,
            [],
            json_encode(array([
                "principal" => $principal->toPrincipal(),
                "resource" => $resource->toResource(),
                "actions" => $actions
            ]))
        );
    }
}