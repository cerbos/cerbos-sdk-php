<?php

namespace Cerbos\Sdk\Builder;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class ResultEntry
{
    private Resource $resourceBuilder;
    private array $actions;

    /**
     * @param string $kind
     * @param string $id
     */
    private function __construct(string $kind, string $id) {
        $this->resourceBuilder = Resource::newInstance($kind, $id);
        $this->actions = array();
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
     * @return ResultEntry
     */
    public function withId(?string $id): ResultEntry {
        if ($id == null) return $this;
        $this->resourceBuilder->withId($id);
        return $this;
    }

    /**
     * @param string|null $kind
     * @return ResultEntry
     */
    public function withKind(?string $kind): ResultEntry {
        if ($kind == null) return $this;
        $this->resourceBuilder->withKind($kind);
        return $this;
    }

    /**
     * @param string|null $policyVersion
     * @return ResultEntry
     */
    public function withPolicyVersion(?string $policyVersion): ResultEntry {
        if ($policyVersion == null) return $this;
        $this->resourceBuilder->withPolicyVersion($policyVersion);
        return $this;
    }

    /**
     * @param string|null $scope
     * @return ResultEntry
     */
    public function withScope(?string $scope): ResultEntry {
        if ($scope == null) return $this;
        $this->resourceBuilder->withScope($scope);
        return $this;
    }

    /**
     * @param string|null $action
     * @return ResultEntry
     */
    public function withAction(?string $action, ?string $effect): ResultEntry {
        if ($action == null || $effect == null) return $this;
        $this->actions[$action] = $effect;
        return $this;
    }

    /**
     * @param array|null $actions dictionary of action names, values being EFFECT_ALLOW or EFFECT_DENY
     * @return ResultEntry
     */
    public function withActions(?array $actions): ResultEntry {
        if ($actions == null) return $this;
        foreach ($actions as $action => $effect) {
            $this->actions[$action] = $effect;
        }
        return $this;
    }

    /**
     * @return \Cerbos\Api\V1\Engine\ResultEntry
     */
    public function toResultEntry(): \Cerbos\Api\V1\Engine\ResultEntry {
        return new \Cerbos\Api\V1\Engine\ResultEntry($this->resourceBuilder->toResource(), $this->actions);
    }
}