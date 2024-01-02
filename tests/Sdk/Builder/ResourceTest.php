<?php

// Copyright 2021-2024 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

namespace Cerbos\Test\Sdk\Builder;

use Cerbos\Sdk\Builder\AttributeValue;
use Cerbos\Sdk\Builder\Resource;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-suppress PossiblyNullReference
 */
class ResourceTest extends TestCase
{
    private AttributeValue $listValue;
    private AttributeValue $mapValue;

    public function setUp(): void
    {
        parent::setUp();
        $this->listValue = AttributeValue::listValue(
            array(
                AttributeValue::boolValue(true),
                AttributeValue::floatValue(1.2),
                AttributeValue::intValue(2)
            )
        );

        $this->mapValue = AttributeValue::mapValue(
            array(
                "boolAttr" => AttributeValue::boolValue(true),
                "floatAttr" => AttributeValue::floatValue(1.2),
                "intAttr" => AttributeValue::intValue(2),
                "listValue" => $this->listValue
            )
        );
    }

    public function testConstructor(): void {
        $resource = Resource::newInstance("leave_request", "john")->toResource();

        $this->assertEquals("leave_request", $resource->getKind(), "invalid kind");
        $this->assertEquals("john", $resource->getId(), "invalid id");
    }

    public function testWithKind(): void {
        $resource = Resource::newInstance("leave_request", "alex")->withKind("purchase_order")->toResource();

        $this->assertEquals("purchase_order", $resource->getKind(), "invalid kind");
    }

    public function testWithId(): void {
        $resource = Resource::newInstance("leave_request", "alex")->withId("john")->toResource();

        $this->assertEquals("john", $resource->getId(), "invalid id");
    }

    public function testWithPolicyVersion(): void {
        $resource = Resource::newInstance("leave_request", "john")->withPolicyVersion("20210210")->toResource();

        $this->assertEquals("20210210", $resource->getPolicyVersion(), "invalid policyVersion");
    }

    public function testWithAttribute(): void {
        $resource = Resource::newInstance("leave_request", "john")
            ->withAttribute("boolAttr", AttributeValue::boolValue(true))
            ->withAttribute("floatAttr", AttributeValue::floatValue(1.2))
            ->withAttribute("intAttr", AttributeValue::intValue(2))
            ->withAttribute("listAttr", $this->listValue)
            ->withAttribute("mapAttr", $this->mapValue)
            ->toResource();

        $this->assertArrayHasKey("boolAttr", $resource->getAttr(), "missing attr boolAttr");
        $this->assertArrayHasKey("floatAttr", $resource->getAttr(), "missing attr floatAttr");
        $this->assertArrayHasKey("intAttr", $resource->getAttr(), "missing attr intAttr");
        $this->assertArrayHasKey("listAttr", $resource->getAttr(), "missing attr listAttr");
        $this->assertArrayHasKey("mapAttr", $resource->getAttr(), "missing attr mapAttr");

        $this->assertTrue((bool)$resource->getAttr()->offsetGet("boolAttr")->getBoolValue(), "invalid bool attr value");
        $this->assertEquals(1.2, $resource->getAttr()->offsetGet("floatAttr")->getNumberValue(), "invalid float attr value");
        $this->assertEquals(2, $resource->getAttr()->offsetGet("intAttr")->getNumberValue(), "invalid int attr value");
    }

    public function testWithAttributes(): void {
        $resource = Resource::newInstance("leave_request", "john")
            ->withAttributes(
                array(
                    "boolAttr" => AttributeValue::boolValue(true),
                    "floatAttr" => AttributeValue::floatValue(1.2),
                    "intAttr" => AttributeValue::intValue(2),
                )
            )->withAttributes(
                array(
                    "listAttr" => $this->listValue,
                    "mapAttr" => $this->mapValue
                )
            )->toResource();

        $this->assertArrayHasKey("boolAttr", $resource->getAttr(), "missing attr boolAttr");
        $this->assertArrayHasKey("floatAttr", $resource->getAttr(), "missing attr floatAttr");
        $this->assertArrayHasKey("intAttr", $resource->getAttr(), "missing attr intAttr");
        $this->assertArrayHasKey("listAttr", $resource->getAttr(), "missing attr listAttr");
        $this->assertArrayHasKey("mapAttr", $resource->getAttr(), "missing attr mapAttr");

        $this->assertTrue($resource->getAttr()->offsetGet("boolAttr")->getBoolValue(), "invalid bool attr value");
        $this->assertEquals(1.2, $resource->getAttr()->offsetGet("floatAttr")->getNumberValue(), "invalid float attr value");
        $this->assertEquals(2, $resource->getAttr()->offsetGet("intAttr")->getNumberValue(), "invalid int attr value");
    }

    public function testWithScope(): void {
        $resource = Resource::newInstance("leave_request", "john")->withScope("acme")->toResource();

        $this->assertEquals("acme", $resource->getScope(), "invalid scope");
    }
}
