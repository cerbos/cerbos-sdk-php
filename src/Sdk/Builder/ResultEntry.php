<?php

namespace Cerbos\Sdk\Builder;

// Copyright 2021-2023 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

use Cerbos\Api\V1\Engine\OutputEntry;
use Cerbos\Api\V1\Schema\ValidationError;

class ResultEntry
{
    private array $actions;
    private array $outputs;
    private Resource $resourceBuilder;
    private array $validationErrors;

    /**
     * @param string $kind
     * @param string $id
     */
    private function __construct(string $kind, string $id) {
        $this->resourceBuilder = Resource::newInstance($kind, $id);
        $this->actions = array();
        $this->outputs = array();
        $this->validationErrors = array();
    }

    /**
     * @param string $kind
     * @param string $id
     * @return ResultEntry
     */
    public static function newInstance(string $kind, string $id): ResultEntry {
        return new ResultEntry($kind, $id);
    }

    /**
     * @param string|null $id
     * @return $this
     */
    public function withId(?string $id): ResultEntry {
        if ($id == null) return $this;
        $this->resourceBuilder->withId($id);
        return $this;
    }

    /**
     * @param string|null $kind
     * @return $this
     */
    public function withKind(?string $kind): ResultEntry {
        if ($kind == null) return $this;
        $this->resourceBuilder->withKind($kind);
        return $this;
    }

    /**
     * @param string|null $policyVersion
     * @return $this
     */
    public function withPolicyVersion(?string $policyVersion): ResultEntry {
        if ($policyVersion == null) return $this;
        $this->resourceBuilder->withPolicyVersion($policyVersion);
        return $this;
    }

    /**
     * @param string|null $scope
     * @return $this
     */
    public function withScope(?string $scope): ResultEntry {
        if ($scope == null) return $this;
        $this->resourceBuilder->withScope($scope);
        return $this;
    }

    /**
     * @param string|null $action
     * @param string|null $effect
     * @return $this
     */
    public function withAction(?string $action, ?string $effect): ResultEntry {
        if ($action == null || $effect == null) return $this;
        $this->actions[$action] = $effect;
        return $this;
    }

    /**
     * @param array|null $actions dictionary of action names, values being EFFECT_ALLOW or EFFECT_DENY
     * @return $this
     */
    public function withActions(?array $actions): ResultEntry {
        if ($actions == null) return $this;
        foreach ($actions as $action => $effect) {
            $this->actions[$action] = $effect;
        }
        return $this;
    }

    /**
     * @param ValidationError|null $validationError
     * @return $this
     */
    public function withValidationError(?ValidationError $validationError): ResultEntry {
        if ($validationError == null) return $this;
        $this->validationErrors[] = $validationError;
        return $this;
    }

    /**
     * @param ValidationError[] $validationErrors
     * @return $this
     */
    public function withValidationErrors(array $validationErrors): ResultEntry {
        if ($validationErrors == null) return $this;
        foreach ($validationErrors as $validationError) {
            $this->validationErrors[] = $validationError;
        }
        return $this;
    }

    /**
     * @param OutputEntry $output
     * @return $this
     */
    public function withOutput(OutputEntry $output): ResultEntry {
        $this->outputs[] = $output;
        return $this;
    }

    /**
     * @param OutputEntry[] $outputs
     * @return $this
     */
    public function withOutputs(array $outputs): ResultEntry {
        if ($outputs == null) return $this;
        foreach ($outputs as $output) {
            $this->outputs[] = $output;
        }
        return $this;
    }

    /**
     * @return \Cerbos\Api\V1\Response\ResultEntry
     */
    public function toResultEntry(): \Cerbos\Api\V1\Response\ResultEntry {
        return new \Cerbos\Api\V1\Response\ResultEntry($this->actions, $this->outputs, $this->resourceBuilder->toResource(), $this->validationErrors);
    }
}