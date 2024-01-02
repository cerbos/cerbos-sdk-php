<?php

// Copyright 2021-2024 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Builder;

class Resource
{
    private string $kind;
    private string $id;
    private string $policyVersion;
    private string $scope;
    private array $attr;

    /**
     * @param string $kind
     * @param string $id
     */
    private function __construct(string $kind, string $id)
    {
        $this->kind = $kind;
        $this->id = $id;
        $this->policyVersion = "";
        $this->scope = "";
        $this->attr = array();
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
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $kind
     * @return $this
     */
    public function withKind(string $kind): Resource {
        $this->kind = $kind;
        return $this;
    }

    /**
     * @param string $policyVersion
     * @return $this
     */
    public function withPolicyVersion(string $policyVersion): Resource {
        $this->policyVersion = $policyVersion;
        return $this;
    }

    /**
     * @psalm-suppress MissingParamType
     * @param string $key
     * @param AttributeValue $value
     * @return $this
     */
    public function withAttribute(string $key, AttributeValue $value): Resource {
        $this->attr[$key] = $value->toValue();
        return $this;
    }

    /**
     * @param array<string, AttributeValue> $attributes
     * @return $this
     */
    public function withAttributes(array $attributes): Resource {
        foreach ($attributes as $k => $v) {
            $this->attr[$k] = $v->toValue();
        }

        return $this;
    }

    /**
     * @param string $scope
     * @return $this
     */
    public function withScope(string $scope): Resource {
        $this->scope = $scope;
        return $this;
    }

    /**
     * @return \Cerbos\Engine\V1\Resource
     */
    public function toResource(): \Cerbos\Engine\V1\Resource {
        return (new \Cerbos\Engine\V1\Resource())
            ->setKind($this->kind)
            ->setId($this->id)
            ->setScope($this->scope)
            ->setPolicyVersion($this->policyVersion)
            ->setAttr($this->attr);
    }

    /**
     * @return \Cerbos\Engine\V1\PlanResourcesInput\Resource
     */
    public function toPlanResource(): \Cerbos\Engine\V1\PlanResourcesInput\Resource {
        return (new \Cerbos\Engine\V1\PlanResourcesInput\Resource())
            ->setKind($this->kind)
            ->setPolicyVersion($this->policyVersion)
            ->setScope($this->scope)
            ->setAttr($this->attr);
    }
}
