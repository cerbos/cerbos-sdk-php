<?php

// Copyright 2021-2026 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1\ChangeDetails;

use Google\Protobuf\ListValue;
use Google\Protobuf\Struct;
use Google\Protobuf\Value;

final class MetadataValue
{
    private Value $value;

    private function __construct(Value $value)
    {
        $this->value = $value;
    }

    /**
     * @param bool $value
     * @return MetadataValue
     */
    public static function boolValue(bool $value): MetadataValue
    {
        return new MetadataValue((new Value())->setBoolValue($value));
    }

    /**
     * @param float $value
     * @return MetadataValue
     */
    public static function floatValue(float $value): MetadataValue
    {
        return new MetadataValue((new Value())->setNumberValue($value));
    }

    /**
     * @param int $value
     * @return MetadataValue
     */
    public static function intValue(int $value): MetadataValue
    {
        return new MetadataValue((new Value())->setNumberValue($value));
    }

    /**
     * @param array<MetadataValue> $values
     * @return MetadataValue
     */
    public static function listValue(array $values): MetadataValue
    {
        $v = array();
        foreach ($values as $value) {
            $v[] = $value->toValue();
        }

        return new MetadataValue((new Value())->setListValue((new ListValue())->setValues($v)));
    }

    /**
     * @param array<string, MetadataValue> $values
     * @return MetadataValue
     */
    public static function mapValue(array $values): MetadataValue
    {
        $v = array();
        foreach ($values as $key => $value) {
            $v[$key] = $value->toValue();
        }

        return new MetadataValue((new Value())->setStructValue((new Struct())->setFields($v)));
    }

    /**
     * @param string $value
     * @return MetadataValue
     */
    public static function stringValue(string $value): MetadataValue
    {
        return new MetadataValue((new Value())->setStringValue($value));
    }

    /**
     * @return Value
     */
    public function toValue(): Value
    {
        return $this->value;
    }
}
