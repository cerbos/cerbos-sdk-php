<?php

namespace Cerbos\Sdk\Builder;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class ResourceAction
{
    private \Cerbos\Api\V1\Engine\ResourceAction $resourceAction;
    private array $actions;

    /**
     * @param string $kind
     * @param string $id
     * @param array|null $actions
     */
    private function __construct(string $kind, string $id, ?array $actions)
    {
        $this->resourceAction = new \Cerbos\Api\V1\Engine\ResourceAction(new \Cerbos\Api\V1\Engine\Resource($id, $kind, null, null, null), array());
        $this->actions = $actions;
    }

    /**
     * @param string $kind
     * @param string $id
     * @param array|null $actions
     * @return ResourceAction
     */
    public static function newInstance(string $kind, string $id, ?array $actions): ResourceAction {
        return new ResourceAction($kind, $id, $actions);
    }

    /**
     * @param string $kind
     * @return ResourceAction
     */
    public function withKind(string $kind): ResourceAction {
        $this->resourceAction->setKind($kind);
        return $this;
    }

    /**
     * @param string $policyVersion
     * @return ResourceAction
     */
    public function withPolicyVersion(string $policyVersion): ResourceAction {
        $this->resourceAction->setPolicyVersion($policyVersion);
        return $this;
    }

    /**
     * @param string $key
     * @param string $value
     * @return $this
     */
    public function withAttribute(string $key, string $value): ResourceAction {
        $a = $this->resourceAction->getAttributes();
        $a[$key] = $value;
        $this->resourceAction->setAttributes($a);
        return $this;
    }

    /**
     * @param array $attributes dictionary of string key and values
     * @return $this
     */
    public function withAttributes(array $attributes): ResourceAction {
        $a = $this->resourceAction->getAttributes();
        $a[] = $attributes;
        $this->resourceAction->setAttributes($a);
        return $this;
    }

    /**
     * @param string $scope
     * @return $this
     */
    public function withScope(string $scope): ResourceAction {
        $this->resourceAction->setScope($scope);
        return $this;
    }

    /**
     * @param string $action
     * @return $this
     */
    public function withAction(string $action): ResourceAction {
        $a = $this->actions;
        $a[] = $action;
        $this->actions = $a;
        return $this;
    }

    /**
     * @param array $actions
     * @return $this
     */
    public function withActions(array $actions): ResourceAction {
        $a = $this->actions;
        $a[] = $actions;
        $this->actions = $a;
        return $this;
    }
}