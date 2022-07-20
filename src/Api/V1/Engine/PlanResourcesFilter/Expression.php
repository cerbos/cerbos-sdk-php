<?php

declare(strict_types=1);

namespace Cerbos\Api\V1\Engine\PlanResourcesFilter;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

use Cerbos\Api\V1\Engine\PlanResourcesFilter\Expression\Operand;

class Expression
{
    public string $operator;
    /**
     * @var Operand[]|null
     */
    public ?array $operands;

    /**
     * @param string $operator
     */
    public function __construct(string $operator)
    {
        $this->operator = $operator;
        $this->operands = null;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $serialized = [ "operator" => $this->operator ];
        if (isset($this->operands)) {
            $serialized["operands"] = $this->operands;
        }

        return $serialized;
    }
}