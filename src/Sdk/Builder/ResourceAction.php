<?php

declare(strict_types=1);

namespace Cerbos\Sdk\Builder;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class ResourceAction
{
    private Resource $resourceBuilder;
    private array $actions;

    /**
     * @param string $kind
     * @param string $id
     */
    private function __construct(string $kind, string $id)
    {
        $this->resourceBuilder = Resource::newInstance($kind, $id);
        $this->actions = array();
    }

    /**
     * @param string $kind
     * @param string $id
     * @return ResourceAction
     */
    public static function newInstance(string $kind, string $id): ResourceAction {
        return new ResourceAction($kind, $id);
    }

    /**
     * @param string|null $id
     * @return $this
     */
    public function withId(?string $id): ResourceAction {
        if ($id == null) return $this;
        $this->resourceBuilder->withId($id);
        return $this;
    }

    /**
     * @param string|null $kind
     * @return $this
     */
    public function withKind(?string $kind): ResourceAction {
        if ($kind == null) return $this;
        $this->resourceBuilder->withKind($kind);
        return $this;
    }

    /**
     * @param string|null $policyVersion
     * @return $this
     */
    public function withPolicyVersion(?string $policyVersion): ResourceAction {
        if ($policyVersion == null) return $this;
        $this->resourceBuilder->withPolicyVersion($policyVersion);
        return $this;
    }

    /**
     * @param string|null $key
     * @param bool|int|float|string|null $value
     * @return $this
     */
    public function withAttribute(?string $key, $value): ResourceAction {
        if ($key == null || $value == null) return $this;
        $this->resourceBuilder->withAttribute($key, $value);
        return $this;
    }

    /**
     * @param array|null $attributes dictionary of string key and values
     * @return $this
     */
    public function withAttributes(?array $attributes): ResourceAction {
        if ($attributes == null) return $this;
        $this->resourceBuilder->withAttributes($attributes);
        return $this;
    }

    /**
     * @param string|null $scope
     * @return $this
     */
    public function withScope(?string $scope): ResourceAction {
        if ($scope == null) return $this;
        $this->resourceBuilder->withScope($scope);
        return $this;
    }

    /**
     * @param string|null $action
     * @return $this
     */
    public function withAction(?string $action): ResourceAction {
        if ($action == null) return $this;
        $this->actions[] = $action;
        return $this;
    }

    /**
     * @param string[]|null $actions
     * @return $this
     */
    public function withActions(?array $actions): ResourceAction {
        if ($actions == null) return $this;
        foreach ($actions as $action) {
            $this->actions[] = $action;
        }
        return $this;
    }

    /**
     * @return \Cerbos\Api\V1\Engine\ResourceAction
     */
    public function toResourceAction(): \Cerbos\Api\V1\Engine\ResourceAction {
        return new \Cerbos\Api\V1\Engine\ResourceAction($this->resourceBuilder->toResource(), $this->actions);
    }
}