<?php

declare(strict_types=1);

namespace Cerbos\Api\V1\Engine\PlanResourcesFilter\Expression;

// Copyright 2021-2023 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

use Cerbos\Api\V1\Engine\PlanResourcesFilter\Expression;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class Operand
{
    public ?Expression $expression;
    public ?string $variable;
    /**
     * @psalm-suppress MissingPropertyType
     */
    public $value;

    /**
     * Only provide one of the parameters to this constructor.
     *
     *
     * @param Expression|null $expression
     * @param string|null $variable
     * @param bool|int|float|string|null $value
     */
    public function __construct(?Expression $expression, ?string $variable, $value)
    {
        $this->expression = null;
        $this->variable = null;
        $this->value = null;

        if (isset($expression)) {
            $this->expression = $expression;
        }
        else if (isset($variable)) {
            $this->variable = $variable;
        }
        else if (isset($value)) {
            $this->value = $value;
        }
    }

    /**
     * @return Expression|bool|float|int|string|null
     */
    public function get() {
        if (isset($this->expression)) {
            return $this->expression;
        }
        else if (isset($this->variable)) {
            return $this->variable;
        }
        else if (isset($this->value)) {
            return $this->value;
        }

        return null;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        if (isset($this->expression)) {
            return [
                "expression" => $this->expression,
            ];
        }
        else if (isset($this->variable)) {
            return [
                "variable" => $this->variable,
            ];
        }
        else if (isset($this->value)) {
            return [
                "value" => $this->value,
            ];
        }

        return [];
    }
}