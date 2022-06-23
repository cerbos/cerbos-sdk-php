<?php

declare(strict_types=1);

namespace Cerbos\Sdk\Builder;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class Resource
{
    private \Cerbos\Api\V1\Engine\Resource $resource;

    /**
     * @param string $kind
     * @param string $id
     */
    private function __construct(string $kind, string $id)
    {
        $this->resource = new \Cerbos\Api\V1\Engine\Resource($kind, $id);
    }

    /**
     * @param string $kind
     * @param string $id
     * @return Resource
     */
    public static function newInstance(string $kind, string $id): Resource {
        return new Resource($kind, $id);
    }

    /**
     * @param string|null $id
     * @return Resource
     */
    public function withId(?string $id): Resource {
        if ($id == null) return $this;
        $this->resource->id = $id;
        return $this;
    }

    /**
     * @param string|null $kind
     * @return Resource
     */
    public function withKind(?string $kind): Resource {
        if ($kind == null) return $this;
        $this->resource->kind = $kind;
        return $this;
    }

    /**
     * @param string|null $policyVersion
     * @return Resource
     */
    public function withPolicyVersion(?string $policyVersion): Resource {
        if ($policyVersion == null) return $this;
        $this->resource->policyVersion = $policyVersion;
        return $this;
    }

    /**
     * @param string|null $key
     * @param string|null $value
     * @return Resource
     */
    public function withAttribute(?string $key, ?string $value): Resource {
        if ($key == null || $value == null) return $this;
        $this->resource->attributes[$key] = $value;
        return $this;
    }

    /**
     * @param array|null $attributes dictionary of string key and values
     * @return Resource
     */
    public function withAttributes(?array $attributes): Resource {
        if ($attributes == null) return $this;
        foreach ($attributes as $attribute) {
            $this->resource->attributes[] = $attribute;
        }
        return $this;
    }

    /**
     * @param string|null $scope
     * @return Resource
     */
    public function withScope(?string $scope): Resource {
        if ($scope == null) return $this;
        $this->resource->scope = $scope;
        return $this;
    }

    /**
     * @return \Cerbos\Api\V1\Engine\Resource
     */
    public function toResource(): \Cerbos\Api\V1\Engine\Resource {
        return $this->resource;
    }
}