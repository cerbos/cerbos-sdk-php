<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Builder;

final class ResourceEntry
{
    private array $actions;
    private Resource $resource;

    /**
     * @param string $kind
     * @param string $id
     */
    private function __construct(string $kind, string $id)
    {
        $this->actions = array();
        $this->resource = Resource::newInstance($kind, $id);
    }

    /**
     * @param string $kind
     * @param string $id
     * @return ResourceEntry
     */
    public static function newInstance(string $kind, string $id): ResourceEntry {
        return new ResourceEntry($kind, $id);
    }

    /**
     * @param string $id
     * @return $this
     */
    public function withId(string $id): ResourceEntry {
        $this->resource->withId($id);
        return $this;
    }

    /**
     * @param string $kind
     * @return $this
     */
    public function withKind(string $kind): ResourceEntry {
        $this->resource->withKind($kind);
        return $this;
    }

    /**
     * @param string $policyVersion
     * @return $this
     */
    public function withPolicyVersion(string $policyVersion): ResourceEntry {
        $this->resource->withPolicyVersion($policyVersion);
        return $this;
    }

    /**
     * @psalm-suppress MissingParamType
     * @param string $key
     * @param AttributeValue $value
     * @return $this
     */
    public function withAttribute(string $key, AttributeValue $value): ResourceEntry {
        $this->resource->withAttribute($key, $value);
        return $this;
    }

    /**
     * @param array<string, AttributeValue> $attributes
     * @return $this
     */
    public function withAttributes(array $attributes): ResourceEntry {
        $this->resource->withAttributes($attributes);
        return $this;
    }

    /**
     * @param string $scope
     * @return $this
     */
    public function withScope(string $scope): ResourceEntry {
        $this->resource->withScope($scope);
        return $this;
    }

    /**
     * @param string $action
     * @return $this
     */
    public function withAction(string $action): ResourceEntry {
        $this->actions[] = $action;
        return $this;
    }

    /**
     * @param array<string> $actions
     * @return $this
     */
    public function withActions(array $actions): ResourceEntry {
        foreach ($actions as $action) {
            $this->actions[] = $action;
        }
        return $this;
    }

    /**
     * @return \Cerbos\Request\V1\CheckResourcesRequest\ResourceEntry
     */
    public function toResourceEntry(): \Cerbos\Request\V1\CheckResourcesRequest\ResourceEntry {
        return (new \Cerbos\Request\V1\CheckResourcesRequest\ResourceEntry())
            ->setActions($this->actions)
            ->setResource($this->resource->toResource());
    }
}
