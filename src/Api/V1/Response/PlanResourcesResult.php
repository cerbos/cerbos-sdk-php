<?php

declare(strict_types=1);

namespace Cerbos\Api\V1\Response;

// Copyright 2021-2023 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

use Cerbos\Api\V1\Engine\PlanResourcesFilter;

class PlanResourcesResult implements \JsonSerializable
{
    public string $resourceKind;
    public string $requestId;
    public string $action;
    public string $policyVersion;
    public array $validationErrors;
    public ?PlanResourcesFilter $filter;

    /**
     * @param string $resourceKind
     * @param string $requestId
     * @param string $action
     * @param string $policyVersion
     */
    public function __construct(string $resourceKind, string $requestId, string $action, string $policyVersion)
    {
        $this->resourceKind = $resourceKind;
        $this->requestId = $requestId;
        $this->action = $action;
        $this->policyVersion = $policyVersion;
        $this->validationErrors = array();
        $this->filter = null;
    }

    /**
     * @return bool
     */
    public function isAlwaysAllowed(): bool {
        if (!isset($this->filter)) {
            return false;
        }

        return $this->filter->kind == "KIND_ALWAYS_ALLOWED";
    }

    /**
     * @return bool
     */
    public function isAlwaysDenied(): bool {
        if (!isset($this->filter)) {
            return false;
        }

        return $this->filter->kind == "KIND_ALWAYS_DENIED";
    }

    /**
     * @return bool
     */
    public function isConditional(): bool {
        if (!isset($this->filter)) {
            return false;
        }

        return $this->filter->kind == "KIND_CONDITIONAL";
    }

    /**
     * @return bool
     */
    public function hasValidationErrors(): bool {
        return count($this->validationErrors) > 0;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $serialized = [
            "resourceKind" => $this->resourceKind,
            "requestId" => $this->requestId,
            "action" => $this->action,
            "policyVersion" => $this->policyVersion,
            "validationErrors" => $this->validationErrors
        ];

        if (isset($this->filter)) {
            $serialized["filter"] = $this->filter;
        }

        return $serialized;
    }
}
