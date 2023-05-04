<?php

declare(strict_types=1);

namespace Cerbos\Api\V1\Engine;

// Copyright 2021-2023 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class Principal implements \JsonSerializable
{
    public string $id;
    public array $roles;
    public string $policyVersion;
    public array $attributes;
    public string $scope;

    /**
     * @param string $id
     */
    public function __construct(string $id) {
        $this->id = $id;
        $this->roles = array();
        $this->policyVersion = "";
        $this->attributes = array();
        $this->scope = "";
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $serialized = [
            "id" => $this->id,
            "roles" => $this->roles,
            "policyVersion" => $this->policyVersion,
            "scope" => $this->scope
        ];

        if (count($this->attributes) > 0) {
            $serialized["attr"] = $this->attributes;
        }

        return $serialized;
    }
}