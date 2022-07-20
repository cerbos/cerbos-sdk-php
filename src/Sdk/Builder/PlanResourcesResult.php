<?php

namespace Cerbos\Sdk\Builder;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

use Cerbos\Api\V1\Engine\PlanResourcesFilter;

class PlanResourcesResult
{
    private \Cerbos\Api\V1\Response\PlanResourcesResult $result;

    /**
     * @param string $resourceKind
     * @param string $requestId
     * @param string $action
     * @param string $policyVersion
     */
    private function __construct(string $resourceKind, string $requestId, string $action, string $policyVersion) {
        $this->result = new \Cerbos\Api\V1\Response\PlanResourcesResult($resourceKind, $requestId, $action, $policyVersion);
    }

    /**
     * @param string $resourceKind
     * @param string $requestId
     * @param string $action
     * @param string $policyVersion
     * @return PlanResourcesResult
     */
    public static function newInstance(string $resourceKind, string $requestId, string $action, string $policyVersion): PlanResourcesResult {
        return new PlanResourcesResult($resourceKind, $requestId, $action, $policyVersion);
    }

    /**
     * @param PlanResourcesFilter|null $filter
     * @return $this
     */
    public function withFilter(?PlanResourcesFilter $filter): PlanResourcesResult {
        if ($filter == null) return $this;
        $this->result->filter = $filter;
        return $this;
    }

    /**
     * @param array $validationErrors
     * @return $this
     */
    public function withValidationErrors(array $validationErrors): PlanResourcesResult {
        if ($validationErrors == null) return $this;
        $valerrs = $this->result->validationErrors;
        foreach ($validationErrors as $validationError) {
            $valerrs[] = $validationError;
        }
        $this->result->validationErrors = $valerrs;
        return $this;
    }

    /**
     * @return \Cerbos\Api\V1\Response\PlanResourcesResult
     */
    public function toPlanResourcesResult(): \Cerbos\Api\V1\Response\PlanResourcesResult {
        return $this->result;
    }
}