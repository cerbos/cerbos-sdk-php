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
     * @param string $id
     * @return $this
     */
    public function withId(string $id): ResourceAction {
        $this->resourceBuilder->withId($id);
        return $this;
    }

    /**
     * @param string $kind
     * @return ResourceAction
     */
    public function withKind(string $kind): ResourceAction {
        $this->resourceBuilder->withKind($kind);
        return $this;
    }

    /**
     * @param string $policyVersion
     * @return ResourceAction
     */
    public function withPolicyVersion(string $policyVersion): ResourceAction {
        $this->resourceBuilder->withPolicyVersion($policyVersion);
        return $this;
    }

    /**
     * @param string $key
     * @param string $value
     * @return $this
     */
    public function withAttribute(string $key, string $value): ResourceAction {
        $this->resourceBuilder->withAttribute($key, $value);
        return $this;
    }

    /**
     * @param array $attributes dictionary of string key and values
     * @return $this
     */
    public function withAttributes(array $attributes): ResourceAction {
        $this->resourceBuilder->withAttributes($attributes);
        return $this;
    }

    /**
     * @param string $scope
     * @return $this
     */
    public function withScope(string $scope): ResourceAction {
        $this->resourceBuilder->withScope($scope);
        return $this;
    }

    /**
     * @param string $action
     * @return $this
     */
    public function withAction(string $action): ResourceAction {
        $this->actions[] = $action;
        return $this;
    }

    /**
     * @param array $actions array of strings
     * @return $this
     */
    public function withActions(array $actions): ResourceAction {
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