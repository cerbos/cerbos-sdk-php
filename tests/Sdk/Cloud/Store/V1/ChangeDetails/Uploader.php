<?php

// Copyright 2021-2026 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

namespace Cerbos\Test\Sdk\Cloud\Store\V1\ChangeDetails;

use Cerbos\Sdk\Cloud\Store\V1\ChangeDetails\Uploader;
use Cerbos\Sdk\Cloud\Store\V1\ChangeDetails\MetadataValue;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-suppress PossiblyNullReference
 */
final class UploaderTest extends TestCase
{
    private const string name = "name";
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

    public function testWithMetadata(): void
    {
        $uploader = Uploader::newInstance(self::name)
            ->withMetadata(self::key1, $this->value1)
            ->withMetadata(self::key2, $this->value2)
            ->toUploader();

        $this->assertArrayHasKey(self::key1, $uploader->getMetadata(), "missing metadata key1");
        $this->assertArrayHasKey(self::key2, $uploader->getMetadata(), "missing metadata key2");

        $this->assertTrue((bool)$uploader->getMetadata()->offsetGet(self::key1)->getBoolValue(), "invalid metadata bool value");
        $this->assertEquals("stringValue", $uploader->getMetadata()->offsetGet(self::key2)->getStringValue(), "invalid metadata string value");
    }

    public function testWithMetadatas(): void
    {
        $uploader = Uploader::newInstance(self::name)
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
            ->toUploader();

        $this->assertArrayHasKey(self::key1, $uploader->getMetadata(), "missing metadata key1");
        $this->assertArrayHasKey(self::key2, $uploader->getMetadata(), "missing metadata key2");
        $this->assertArrayHasKey(self::key3, $uploader->getMetadata(), "missing metadata key3");

        $this->assertTrue((bool)$uploader->getMetadata()->offsetGet(self::key1)->getBoolValue(), "invalid metadata bool value");
        $this->assertEquals("stringValue", $uploader->getMetadata()->offsetGet(self::key2)->getStringValue(), "invalid metadata string value");
        $this->assertEquals(3, $uploader->getMetadata()->offsetGet(self::key3)->getNumberValue(), "invalid metadata number value");
    }

    public function testOptional(): void
    {
        $uploader = Uploader::newInstance(self::name)
            ->toUploader();

        $this->assertEquals(self::name, $uploader->getName(), "invalid name");
    }
}
