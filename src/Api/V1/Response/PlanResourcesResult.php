<?php

declare(strict_types=1);

namespace Cerbos\Api\V1\Response;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

use Cerbos\Api\V1\Engine\PlanResourcesFilter;

class PlanResourcesResult implements \JsonSerializable
{
    public string $resourceKind;
    public string $requestId;
    public string $action;
    public string $policyVersion;
    public ?PlanResourcesFilter $filter;
    public ?array $validationErrors;

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
        $this->filter = null;
        $this->validationErrors = null;
    }

    /**
     * @return bool
     */
    public function IsAlwaysAllowed(): bool {
        if (!isset($this->filter)) {
            return false;
        }

        return $this->filter->kind == "KIND_ALWAYS_ALLOWED";
    }

    /**
     * @return bool
     */
    public function IsAlwaysDenied(): bool {
        if (!isset($this->filter)) {
            return false;
        }

        return $this->filter->kind == "KIND_ALWAYS_DENIED";
    }

    /**
     * @return bool
     */
    public function IsConditional(): bool {
        if (!isset($this->filter)) {
            return false;
        }

        return $this->filter->kind == "KIND_CONDITIONAL";
    }

    /**
     * @return bool
     */
    public function HasValidationErrors(): bool {
        if (!isset($this->validationErrors)) {
            return false;
        }

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
        ];

        if (isset($this->filter)) {
            $serialized["filter"] = $this->filter;
        }

        if (isset($this->validationErrors)) {
            $serialized["validationErrors"] = $this->validationErrors;
        }

        return $serialized;
    }
}

