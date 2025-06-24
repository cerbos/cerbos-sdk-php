<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

namespace Cerbos\Test\Sdk\Cloud\Store\V1\ChangeDetails;

use Cerbos\Sdk\Cloud\Store\V1\ChangeDetails\Internal;
use Cerbos\Sdk\Cloud\Store\V1\ChangeDetails\MetadataValue;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-suppress PossiblyNullReference
 */
final class InternalTest extends TestCase
{
    private const string source = "source";
    private const string key1 = "key1";
    private const string key2 = "key2";
    private const string key3 = "key3";
    private MetadataValue $value1;
    private MetadataValue $value2;
    private MetadataValue $value3;
    
    public function setUp(): void
    {
        parent::setUp();
        $this->value1 = MetadataValue::boolValue(true);
        $this->value2 = MetadataValue::stringValue("stringValue");
        $this->value2 = MetadataValue::intValue(3);
    }

    public function testWithMetadata(): void {
        $internal = Internal::newInstance([
            'source' => self::source
        ])
            ->withMetadata(self::key1, $this->value1)
            ->withMetadata(self::key2, $this->value2)
            ->toInternal();

        $this->assertArrayHasKey(self::key1, $internal->getMetadata(), "missing metadata key1");
        $this->assertArrayHasKey(self::key2, $internal->getMetadata(), "missing metadata key2");
        
        $this->assertTrue((bool)$internal->getMetadata()->offsetGet(self::key1)->getBoolValue(), "invalid metadata bool value");
        $this->assertEquals("stringValue", $internal->getMetadata()->offsetGet(self::key2)->getStringValue(), "invalid metadata string value");
    }

    public function testWithMetadatas(): void {
        $internal = Internal::newInstance([
            'source' => self::source
        ])
            ->withMetadatas(
                array(
                    self::key1 => $this->value1,
                    self::key2 => $this->value2,
                )
            )
            ->withMetadatas(
                array(
                    self::key3 => $this->value3,
                )
            )
            ->toInternal();

        $this->assertArrayHasKey(self::key1, $internal->getMetadata(), "missing metadata key1");
        $this->assertArrayHasKey(self::key2, $internal->getMetadata(), "missing metadata key2");
        $this->assertArrayHasKey(self::key3, $internal->getMetadata(), "missing metadata key3");
        
        $this->assertTrue((bool)$internal->getMetadata()->offsetGet(self::key1)->getBoolValue(), "invalid metadata bool value");
        $this->assertEquals("stringValue", $internal->getMetadata()->offsetGet(self::key2)->getStringValue(), "invalid metadata string value");
        $this->assertEquals(3, $internal->getMetadata()->offsetGet(self::key3)->getNumberValue(), "invalid metadata number value");
    }

    public function testOptional(): void {
        $internal = Internal::newInstance([
            'source' => self::source
        ])->toInternal();

        $this->assertEquals(self::source, $internal->getSource(), "invalid source");
    }
}
