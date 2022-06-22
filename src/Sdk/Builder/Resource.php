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
     * @param string $id
     * @return $this
     */
    public function withId(string $id): Resource {
        $this->resource->id = $id;
        return $this;
    }

    /**
     * @param string $kind
     * @return Resource
     */
    public function withKind(string $kind): Resource {
        $this->resource->kind = $kind;
        return $this;
    }

    /**
     * @param string $policyVersion
     * @return Resource
     */
    public function withPolicyVersion(string $policyVersion): Resource {
        $this->resource->policyVersion = $policyVersion;
        return $this;
    }

    /**
     * @param string $key
     * @param string $value
     * @return $this
     */
    public function withAttribute(string $key, string $value): Resource {
        $this->resource->attributes[$key] = $value;
        return $this;
    }

    /**
     * @param array $attributes dictionary of string key and values
     * @return $this
     */
    public function withAttributes(array $attributes): Resource {
        foreach ($attributes as $attribute) {
            $this->resource->attributes[] = $attribute;
        }
        return $this;
    }

    /**
     * @param string $scope
     * @return $this
     */
    public function withScope(string $scope): Resource {
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