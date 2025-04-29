<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Response\V1\PlanResourcesResponse;

use Cerbos\Engine\V1\PlanResourcesFilter;
use Cerbos\Schema\V1\ValidationError;

final class PlanResourcesResponse
{
    private \Cerbos\Response\V1\PlanResourcesResponse $response;

    /**
     * @param \Cerbos\Response\V1\PlanResourcesResponse $response
     */
    public function __construct(\Cerbos\Response\V1\PlanResourcesResponse $response) {
        $this->response = $response;
    }

    /**
     * Deprecated: Use getActions instead.
     * @return string
     * @deprecated
     */
    public function getAction(): string {
        /**
        * @psalm-suppress DeprecatedMethod
        */
        return $this->response->getAction();
    }
    
    /**
     * @return array<string>
     */
    public function getActions(): array {
        $actions = array();
        foreach ($this->response->getActions() as $action) {
            $actions[] = $action;
        }

        return $actions;
    }

    /**
     * @return PlanResourcesFilter|null
     */
    public function getFilter(): ?PlanResourcesFilter {
        return $this->response->getFilter();
    }

    /**
     * @return Meta|null
     */
    public function getMeta(): ?Meta {
        $meta = $this->response->getMeta();
        if (!is_null($meta)) {
            return new Meta($meta);
        }

        return null;
    }

    /**
     * @return string
     */
    public function getPolicyVersion(): string {
        return $this->response->getPolicyVersion();
    }

    /**
     * @return string
     */
    public function getResourceKind(): string {
        return $this->response->getResourceKind();
    }

    /**
     * @return string
     */
    public function getRequestId(): string {
        return $this->response->getRequestId();
    }

    /**
     * @return array<ValidationError>
     */
    public function getValidationErrors(): array {
        $validationErrors = array();
        foreach ($this->response->getValidationErrors() as $validationError) {
            $validationErrors[] = $validationError;
        }

        return $validationErrors;
    }

    /**
     * @return bool
     */
    public function hasValidationErrors(): bool {
        return count($this->response->getValidationErrors()) > 0;
    }

    /**
     * @return bool
     */
    public function isAlwaysAllowed(): bool {
        $filter = $this->response->getFilter();
        if (!is_null($filter)) {
            return $filter->getKind() == PlanResourcesFilter\Kind::KIND_ALWAYS_ALLOWED;
        }

        return false;
    }

    /**
     * @return bool
     */
    public function isAlwaysDenied(): bool {
        $filter = $this->response->getFilter();
        if (!is_null($filter)) {
            return $filter->getKind() == PlanResourcesFilter\Kind::KIND_ALWAYS_DENIED;
        }

        return false;
    }

    /**
     * @return bool
     */
    public function isConditional(): bool {
        $filter = $this->response->getFilter();
        if (!is_null($filter)) {
            return $filter->getKind() == PlanResourcesFilter\Kind::KIND_CONDITIONAL;
        }

        return false;
    }

    /**
     * @return \Cerbos\Response\V1\PlanResourcesResponse
     */
    public function toPlanResourcesResponse(): \Cerbos\Response\V1\PlanResourcesResponse {
        return $this->response;
    }
}
