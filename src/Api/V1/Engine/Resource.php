<?php

namespace Cerbos\Api\V1\Engine;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class Resource
{
    private string $id;
    private string $kind;
    private string $policyVersion;
    private array $attributes;
    private string $scope;

    /**
     * @param string $id
     * @param string|null $kind
     * @param string|null $policyVersion
     * @param array|null $attributes dictionary of string key and values
     * @param string|null $scope
     */
    public function __construct(string $id, ?string $kind, ?string $policyVersion, ?array $attributes, ?string $scope)
    {
        $this->id = $id;
        $this->kind = $kind;
        $this->policyVersion = $policyVersion;
        $this->attributes = $attributes;
        $this->scope = $scope;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * @param string $kind
     */
    public function setKind(string $kind): void
    {
        $this->kind = $kind;
    }

    /**
     * @return string
     */
    public function getPolicyVersion(): string
    {
        return $this->policyVersion;
    }

    /**
     * @param string $policyVersion
     */
    public function setPolicyVersion(string $policyVersion): void
    {
        $this->policyVersion = $policyVersion;
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param array $attributes dictionary of string key and values
     */
    public function setAttributes(array $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * @return string
     */
    public function getScope(): string
    {
        return $this->scope;
    }

    /**
     * @param string $scope
     */
    public function setScope(string $scope): void
    {
        $this->scope = $scope;
    }
}