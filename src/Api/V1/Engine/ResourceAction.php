<?php

namespace Cerbos\Api\V1\Engine;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class ResourceAction
{
    private Resource $resource;
    private array $actions;

    /**
     * @param Resource $resource
     * @param array $actions array of strings
     */
    public function __construct(Resource $resource, array $actions)
    {
        $this->resource = $resource;
        $this->actions = $actions;
    }

    /**
     * @return Resource
     */
    public function getResource(): Resource
    {
        return $this->resource;
    }

    /**
     * @param Resource $resource
     * @return void
     */
    public function setResource(Resource $resource): void
    {
        $this->resource = $resource;
    }

    /**
     * @return array
     */
    public function getActions(): array
    {
        return $this->actions;
    }

    /**
     * @param array $actions array of strings
     * @return void
     */
    public function setActions(array $actions): void
    {
        $this->actions = $actions;
    }

    /**
     * @param string $kind
     * @return void
     */
    public function setKind(string $kind): void {
        $this->resource->setKind($kind);
    }

    /**
     * @param string $policyVersion
     * @return void
     */
    public function setPolicyVersion(string $policyVersion): void {
        $this->resource->setPolicyVersion($policyVersion);
    }

    /**
     * @param string $key
     * @param string $value
     * @return void
     */
    public function setAttribute(string $key, string $value): void{
        $a = $this->resource->getAttributes();
        $a[$key] = $value;
        $this->resource->setAttributes($a);
    }

    /**
     * @param array $attributes dictionary of string key and values
     * @return void
     */
    public function setAttributes(array $attributes): void {
        $a = $this->resource->getAttributes();
        $a[] = $attributes;
        $this->resource->setAttributes($a);
    }

    /**
     * @param string $scope
     * @return void
     */
    public function setScope(string $scope): void {
        $this->resource->setScope($scope);
    }
}