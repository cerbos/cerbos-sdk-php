<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Builder;

use Google\Protobuf\ListValue;
use Google\Protobuf\Struct;
use Google\Protobuf\Value;

final class AttributeValue
{
    private Value $value;

    private function __construct(Value $value) {
        $this->value = $value;
    }

    /**
     * @param bool $value
     * @return AttributeValue
     */
    public static function boolValue(bool $value): AttributeValue {
        return new AttributeValue((new Value())->setBoolValue($value));
    }

    /**
     * @param float $value
     * @return AttributeValue
     */
    public static function floatValue(float $value): AttributeValue {
        return new AttributeValue((new Value())->setNumberValue($value));
    }

    /**
     * @param int $value
     * @return AttributeValue
     */
    public static function intValue(int $value): AttributeValue {
        return new AttributeValue((new Value())->setNumberValue($value));
    }

    /**
     * @param array<AttributeValue> $values
     * @return AttributeValue
     */
    public static function listValue(array $values): AttributeValue {
        $v = array();
        foreach ($values as $value) {
            $v[] = $value->toValue();
        }

        return new AttributeValue((new Value())->setListValue((new ListValue())->setValues($v)));
    }

    /**
     * @param array<string, AttributeValue> $values
     * @return AttributeValue
     */
    public static function mapValue(array $values): AttributeValue {
        $v = array();
        foreach ($values as $key => $value) {
            $v[$key] = $value->toValue();
        }

        return new AttributeValue((new Value())->setStructValue((new Struct())->setFields($v)));
    }

    /**
     * @param string $value
     * @return AttributeValue
     */
    public static function stringValue(string $value): AttributeValue {
        return new AttributeValue((new Value())->setStringValue($value));
    }

    /**
     * @return Value
     */
    public function toValue(): Value {
        return $this->value;
    }
}