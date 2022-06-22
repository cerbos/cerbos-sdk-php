<?php

declare(strict_types=1);

namespace Cerbos\Sdk;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

use Exception;
use Http\Client\Common\HttpMethodsClientInterface;
use Psr\Http\Message\ResponseInterface;

final class CerbosClient
{
    private HttpMethodsClientInterface $client;
    private string $checkResourcesEndpoint = "/api/check/resources";

    /**
     * @param HttpMethodsClientInterface $client
     */
    public function __construct(HttpMethodsClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @param Builder\Principal $principal
     * @param array $resourceActions array of Builder\ResourceAction
     * @param Builder\AuxData|null $auxData
     * @return ResponseInterface
     * @throws Exception|\Http\Client\Exception
     */
    public function checkResources(Builder\Principal $principal, array $resourceActions, ?Builder\AuxData $auxData): ResponseInterface
    {
        $resActs = array();
        foreach ($resourceActions as $resourceAction) {
            if (!$resourceAction instanceof Builder\ResourceAction) {
                throw new Exception("resourceActions array has elements with non - Builder\ResourceAction type");
            }

            $resActs[] = $resourceAction->toResourceAction();
        }

        return $this->client->post(
            $this->checkResourcesEndpoint,
            [],
            json_encode(array(
                "principal" => $principal->toPrincipal(),
                "resources" => $resActs,
            ))
        );
    }
}