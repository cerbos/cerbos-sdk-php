<?php

declare(strict_types=1);

namespace Cerbos\Api\V1\Engine;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class Principal
{
    private string $id;
    private array $roles;
    private string $policyVersion;
    private array $attributes;
    private string $scope;

    /**
     * @param string $id
     * @param array|null $roles array of strings
     * @param string|null $policyVersion
     * @param array|null $attributes dictionary of string key and values
     * @param string|null $scope
     */
    public function __construct(string $id, ?array $roles, ?string $policyVersion, ?array $attributes, ?string $scope) {
        $this->$id = $id;
        $this->$roles = $roles;
        $this->$policyVersion = $policyVersion;
        $this->$attributes = $attributes;
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
     * @return array
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    /**
     * @param array $roles array of strings
     */
    public function setRoles(array $roles): void
    {
        $this->roles = $roles;
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