<?php

declare(strict_types=1);

namespace Cerbos\Sdk\Builder;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class Resource
{
    private \Cerbos\Api\V1\Engine\Resource $resource;

    /**
     * @param string $id
     */
    private function __construct(string $id)
    {
        $this->resource = new \Cerbos\Api\V1\Engine\Resource($id, null);
    }

    /**
     * @param string $id
     * @return Resource
     */
    public static function newInstance(string $id): Resource {
        return new Resource($id);
    }

    /**
     * @param string $kind
     * @return Resource
     */
    public function withKind(string $kind): Resource {
        $this->resource->setKind($kind);
        return $this;
    }

    /**
     * @param string $policyVersion
     * @return Resource
     */
    public function withPolicyVersion(string $policyVersion): Resource {
        $this->resource->setPolicyVersion($policyVersion);
        return $this;
    }

    /**
     * @param string $key
     * @param string $value
     * @return $this
     */
    public function withAttribute(string $key, string $value): Resource {
        $a = $this->resource->getAttributes();
        $a[$key] = $value;
        $this->resource->setAttributes($a);
        return $this;
    }

    /**
     * @param array $attributes dictionary of string key and values
     * @return $this
     */
    public function withAttributes(array $attributes): Resource {
        $a = $this->resource->getAttributes();
        $a[] = $attributes;
        $this->resource->setAttributes($a);
        return $this;
    }

    /**
     * @param string $scope
     * @return $this
     */
    public function withScope(string $scope): Resource {
        $this->resource->setScope($scope);
        return $this;
    }

    /**
     * @return \Cerbos\Api\V1\Engine\Resource
     */
    public function toResource(): \Cerbos\Api\V1\Engine\Resource {
        return $this->resource;
    }
}