<?php

declare(strict_types=1);

namespace Cerbos\Api\V1\Engine;

// Copyright 2021-2023 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class Resource implements \JsonSerializable
{
    public string $id;
    public string $kind;
    public string $policyVersion;
    public array $attributes;
    public string $scope;

    /**
     * @param string $kind
     * @param string $id
     */
    public function __construct(string $kind, string $id)
    {
        $this->id = $id;
        $this->kind = $kind;
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
            "kind" => $this->kind,
            "policyVersion" => $this->policyVersion,
            "scope" => $this->scope
        ];

        if (count($this->attributes) > 0) {
            $serialized["attr"] = $this->attributes;
        }

        return $serialized;
    }
}