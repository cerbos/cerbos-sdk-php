<?php

declare(strict_types=1);

namespace Cerbos\Sdk;

// Copyright 2021-2023 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

use Cerbos\Api\V1\Engine\OutputEntry;
use Cerbos\Api\V1\Engine\PlanResourcesFilter;
use Cerbos\Api\V1\Response\CheckResourcesResult;
use Cerbos\Api\V1\Response\PlanResourcesResult;
use Cerbos\Sdk\Builder\ResourceAction;
use Cerbos\Sdk\Builder\ResultEntry;
use Cerbos\Sdk\Builder\ValidationError;
use Cerbos\Sdk\Utility\RequestId;
use Exception;
use Http\Client\Common\HttpMethodsClientInterface;
use Psr\Http\Message\ResponseInterface;

final class CerbosClient
{
    private HttpMethodsClientInterface $client;
    private string $checkResourcesEndpoint = "/api/check/resources";
    private string $planResourcesEndpoint = "/api/plan/resources";

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
     * @throws Exception|\Http\Client\Exception
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

        if (isset($auxData)) {
            $request["auxData"] = $auxData->toAuxData();
        }

        if (!isset($requestId)) {
            $request["requestId"] = RequestId::generate();
        }

        $response = $this->client->post(
            $this->checkResourcesEndpoint,
            [],
            json_encode($request)
        );

        if ($response->getStatusCode() != 200) {
            throw new Exception("HTTP status is ".$response->getStatusCode());
        }

        return $this->getCheckResourceResult($response);
    }

    /**
     * @param Builder\Principal $principal
     * @param Builder\Resource $resource
     * @param string $action
     * @param Builder\AuxData|null $auxData
     * @param string|null $requestId
     * @return PlanResourcesResult
     * @throws Exception|\Http\Client\Exception
     */
    public function planResources(Builder\Principal $principal, Builder\Resource $resource, string $action, ?Builder\AuxData $auxData, ?string $requestId): PlanResourcesResult {
        $request = array(
            "action" => $action,
            "principal" => $principal->toPrincipal(),
            "resource" => $resource->toPlanResource(),
            "includeMeta" => false
        );

        if (isset($auxData)) {
            $request["auxData"] = $auxData->toAuxData();
        }

        if (!isset($requestId)) {
            $request["requestId"] = RequestId::generate();
        }

        json_encode($request);

        $response = $this->client->post(
            $this->planResourcesEndpoint,
            [],
            json_encode($request)
        );

        if ($response->getStatusCode() != 200) {
            throw new Exception("HTTP status is ".$response->getStatusCode());
        }

        return $this->getPlanResourcesResult($response);
    }

    private function getPlanResourcesResult(ResponseInterface $response): PlanResourcesResult {
        $json = json_decode($response->getBody()->getContents());

        $resourceKind = "";
        if(isset($json->{'resourceKind'})) {
            $resourceKind = $json->{'resourceKind'};
        }

        $requestId = "";
        if(isset($json->{'requestId'})) {
            $requestId = $json->{'requestId'};
        }

        $action = "";
        if(isset($json->{'action'})) {
            $action = $json->{'action'};
        }

        $policyVersion = "";
        if(isset($json->{'policyVersion'})) {
            $policyVersion = $json->{'policyVersion'};
        }

        $planResourcesResultBuilder = Builder\PlanResourcesResult::newInstance($resourceKind, $requestId, $action, $policyVersion);

        $validationErrors = array();
        if(isset($json->{'validationErrors'})) {
            foreach ($json->{'validationErrors'} as $validationError) {
                $validationErrorBuilder = ValidationError::newInstance();

                if (isset($validationError->{'path'})) {
                    $validationErrorBuilder->withPath($validationError->{'path'});
                }

                if (isset($validationError->{'message'})) {
                    $validationErrorBuilder->withMessage($validationError->{'message'});
                }

                if (isset($validationError->{'source'})) {
                    $validationErrorBuilder->withSource($validationError->{'source'});
                }

                $validationErrors[] = $validationErrorBuilder->toValidationError();
            }
        }

        $planResourcesResultBuilder = $planResourcesResultBuilder
            ->withValidationErrors($validationErrors);

        if (!isset($json->{'filter'}) || !isset($json->{'filter'}->{'kind'})) {
            return $planResourcesResultBuilder->toPlanResourcesResult();
        }

        $filterBuilder = Builder\PlanResourcesFilter::newInstance()
            ->withKind($json->{'filter'}->{'kind'});

        if (isset($json->{'filter'}->{'condition'})) {
            $filterBuilder->withCondition($this->getConditionTree($json->{'filter'}->{'condition'}));
        }

        $planResourcesResultBuilder = $planResourcesResultBuilder->withFilter($filterBuilder->toPlanResourcesFilter());

        return $planResourcesResultBuilder->toPlanResourcesResult();
    }

    /**
     * @param object $operand
     * @return PlanResourcesFilter\Expression\Operand
     */
    private function getConditionTree(object $operand): PlanResourcesFilter\Expression\Operand {
        if (isset($operand->{'expression'})) {
            $expr = new PlanResourcesFilter\Expression($operand->{'expression'}->{'operator'});
            if (isset($operand->{'expression'}->{'operands'})) {
                foreach ($operand->{'expression'}->{'operands'} as $operand) {
                    $expr->operands[] = $this->getConditionTree($operand);
                }
            }

            return new PlanResourcesFilter\Expression\Operand($expr, null, null);
        }
        else if (isset($operand->{'variable'})) {
            return new PlanResourcesFilter\Expression\Operand(null, $operand->{'variable'}, null);
        }
        else if (isset($operand->{'value'})) {
            return new PlanResourcesFilter\Expression\Operand(null, null, $operand->{'value'});
        }

        return new PlanResourcesFilter\Expression\Operand(null, "", null);
    }

    /**
     * @param ResponseInterface $response
     * @return CheckResourcesResult
     */
    private function getCheckResourceResult(ResponseInterface $response): CheckResourcesResult
    {
        $json = json_decode($response->getBody()->getContents());
        $checkResourcesResultBuilder = Builder\CheckResourcesResult::newInstance();
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

            $outputs = array();
            if(isset($result->{'outputs'})) {
                foreach ($result->{'outputs'} as $output) {
                    $outputs[] = new OutputEntry($output->{'src'}, $output->{'val'});
                }
            }

            $validationErrors = array();
            if(isset($result->{'validationErrors'})) {
                foreach ($result->{'validationErrors'} as $validationError) {
                    $validationErrorBuilder = ValidationError::newInstance();

                    if (isset($validationError->{'path'})) {
                        $validationErrorBuilder->withPath($validationError->{'path'});
                    }

                    if (isset($validationError->{'message'})) {
                        $validationErrorBuilder->withMessage($validationError->{'message'});
                    }

                    if (isset($validationError->{'source'})) {
                        $validationErrorBuilder->withSource($validationError->{'source'});
                    }

                    $validationErrors[] = $validationErrorBuilder->toValidationError();
                }
            }

            $resultEntryBuilder = ResultEntry::newInstance($res->{'kind'}, $res->{'id'})
                ->withPolicyVersion($policyVersion)
                ->withScope($scope)
                ->withActions($actions)
                ->withValidationErrors($validationErrors)
                ->withOutputs($outputs);

            $checkResourcesResultBuilder->withResultEntry($result->{'resource'}->{'id'}, $resultEntryBuilder->toResultEntry());
        }

        return $checkResourcesResultBuilder->toCheckResourcesResult();
    }
}