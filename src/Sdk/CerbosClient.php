<?php

declare(strict_types=1);

namespace Cerbos\Sdk;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

use Cerbos\Api\V1\Engine\CheckResourcesResult;
use Cerbos\Sdk\Builder\ResourceAction;
use Cerbos\Sdk\Builder\ResultEntry;
use Cerbos\Sdk\Utility\RequestId;
use Exception;
use Http\Client\Common\HttpMethodsClientInterface;

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
     * @param ResourceAction[] $resourceActions
     * @param Builder\AuxData|null $auxData
     * @param string|null $requestId
     * @return CheckResourcesResult
     * @throws \Http\Client\Exception
     */
    public function checkResources(Builder\Principal $principal, array $resourceActions, ?Builder\AuxData $auxData, ?string $requestId): CheckResourcesResult
    {
        $resActs = array();
        foreach ($resourceActions as $resourceAction) {
            if (!$resourceAction instanceof Builder\ResourceAction) {
                throw new Exception("resourceActions array has elements with non - Builder\ResourceAction type");
            }

            $resActs[] = $resourceAction->toResourceAction();
        }

        $request = array(
            "principal" => $principal->toPrincipal(),
            "resources" => $resActs
        );

        if (!isset($requestId)) {
            $request["requestId"] = RequestId::generate();
        }

        if (isset($auxData)) {
            $request["auxData"] = $auxData->toAuxData();
        }

        $response = $this->client->post(
            $this->checkResourcesEndpoint,
            [],
            json_encode($request)
        );

        if ($response->getStatusCode() != 200) {
            throw new Exception("HTTP status is ".$response->getStatusCode());
        }

        $checkResourcesResultBuilder = Builder\CheckResourcesResult::newInstance();
        $json = json_decode($response->getBody()->getContents());
        foreach ($json->{'results'} as $result) {
            $res = $result->{'resource'};

            $policyVersion = null;
            if(isset($res->{'policyVersion'})) {
                $policyVersion = $res->{'policyVersion'};
            }

            $scope = null;
            if(isset($res->{'scope'})) {
                $scope = $res->{'scope'};
            }

            $actions = array();
            if(isset($result->{'actions'})) {
                foreach ($result->{'actions'} as $action => $effect) {
                    $actions[$action] = $effect;
                }
            }

            $resultEntryBuilder = ResultEntry::newInstance($res->{'kind'}, $res->{'id'})
                ->withPolicyVersion($policyVersion)
                ->withScope($scope)
                ->withActions($actions);

            $checkResourcesResultBuilder->withResultEntry($result->{'resource'}->{'id'}, $resultEntryBuilder->toResultEntry());
        }

        return $checkResourcesResultBuilder->toCheckResourcesResult();
    }
}