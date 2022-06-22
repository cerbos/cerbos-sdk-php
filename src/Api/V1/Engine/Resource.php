<?php

declare(strict_types=1);

namespace Cerbos\Api\V1\Engine;

// Copyright 2021-2022 Zenauth Ltd.
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
        return [
            "id" => $this->id,
            "kind" => $this->kind,
            "policyVersion" => $this->policyVersion,
            "attr" => $this->attributes,
            "scope" => $this->scope
        ];
    }
}