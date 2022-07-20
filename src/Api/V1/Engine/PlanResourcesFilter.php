<?php

declare(strict_types=1);

namespace Cerbos\Api\V1\Engine;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

use Cerbos\Api\V1\Engine\PlanResourcesFilter\Expression\Operand;

class PlanResourcesFilter implements \JsonSerializable
{
    public string $kind;
    public ?Operand $condition;

    /**
     */
    public function __construct()
    {
        $this->kind = "KIND_UNSPECIFIED";
        $this->condition = null;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $serialized = [ "kind" => $this->kind ];
        if (isset($this->condition)) {
            $serialized["condition"] = $this->condition;
        }

        return $serialized;
    }
}