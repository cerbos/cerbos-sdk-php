<?php

declare(strict_types=1);

namespace Cerbos\Api\V1\Engine\PlanResourcesInput;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class Resource implements \JsonSerializable
{
    public string $kind;
    public string $policyVersion;
    public array $attributes;
    public string $scope;

    /**
     * @param string $kind
     */
    public function __construct(string $kind)
    {
        $this->kind = $kind;
        $this->policyVersion = "";
        $this->attributes = array();
        $this->scope = "";
    }

    /**
     * @psalm-suppress RedundantPropertyInitializationCheck
     * @return array
     */
    public function jsonSerialize(): array
    {
        $serialized = [
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