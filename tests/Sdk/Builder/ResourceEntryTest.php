<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

namespace Cerbos\Test\Sdk\Builder;

use Cerbos\Sdk\Builder\AttributeValue;
use Cerbos\Sdk\Builder\ResourceEntry;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-suppress PossiblyNullReference
 */
final class ResourceEntryTest extends TestCase
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
        $resourceEntry = ResourceEntry::newInstance("leave_request", "john")->toResourceEntry();

        $this->assertEquals("leave_request", $resourceEntry->getResource()->getKind(), "invalid kind");
        $this->assertEquals("john", $resourceEntry->getResource()->getId(), "invalid id");
    }

    public function testWithKind(): void {
        $resourceEntry = ResourceEntry::newInstance("leave_request", "alex")->withKind("purchase_order")->toResourceEntry();

        $this->assertEquals("purchase_order", $resourceEntry->getResource()->getKind(), "invalid kind");
    }

    public function testWithId(): void {
        $resourceEntry = ResourceEntry::newInstance("leave_request", "alex")->withId("john")->toResourceEntry();

        $this->assertEquals("john", $resourceEntry->getResource()->getId(), "invalid id");
    }

    public function testWithPolicyVersion(): void {
        $resourceEntry = ResourceEntry::newInstance("leave_request", "john")->withPolicyVersion("20210210")->toResourceEntry();

        $this->assertEquals("20210210", $resourceEntry->getResource()->getPolicyVersion(), "invalid policyVersion");
    }

    public function testWithAttribute(): void {
        $resourceEntry = ResourceEntry::newInstance("leave_request", "john")
            ->withAttribute("boolAttr", AttributeValue::boolValue(true))
            ->withAttribute("floatAttr", AttributeValue::floatValue(1.2))
            ->withAttribute("intAttr", AttributeValue::intValue(2))
            ->withAttribute("listAttr", $this->listValue)
            ->withAttribute("mapAttr", $this->mapValue)
            ->toResourceEntry();

        $resource = $resourceEntry->getResource();
        $this->assertNotNull($resource);

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
        $resourceEntry = ResourceEntry::newInstance("leave_request", "john")
            ->withAttributes(
                array(
                    "boolAttr" => AttributeValue::boolValue(true),
                    "floatAttr" => AttributeValue::floatValue(1.2),
                    "intAttr" => AttributeValue::intValue(2),
                )
            )
            ->withAttributes(
                array(
                    "listAttr" => $this->listValue,
                    "mapAttr" => $this->mapValue
                )
            )
            ->toResourceEntry();

        $resource = $resourceEntry->getResource();
        $this->assertNotNull($resource);

        $this->assertArrayHasKey("boolAttr", $resource->getAttr(), "missing attr boolAttr");
        $this->assertArrayHasKey("floatAttr", $resource->getAttr(), "missing attr floatAttr");
        $this->assertArrayHasKey("intAttr", $resource->getAttr(), "missing attr intAttr");
        $this->assertArrayHasKey("listAttr", $resource->getAttr(), "missing attr listAttr");
        $this->assertArrayHasKey("mapAttr", $resource->getAttr(), "missing attr mapAttr");

        $this->assertTrue((bool)$resource->getAttr()->offsetGet("boolAttr")->getBoolValue(), "invalid bool attr value");
        $this->assertEquals(1.2, $resource->getAttr()->offsetGet("floatAttr")->getNumberValue(), "invalid float attr value");
        $this->assertEquals(2, $resource->getAttr()->offsetGet("intAttr")->getNumberValue(), "invalid int attr value");
    }

    public function testWithScope(): void {
        $resourceEntry = ResourceEntry::newInstance("leave_request", "john")->withScope("acme")->toResourceEntry();
        $this->assertEquals("acme", $resourceEntry->getResource()->getScope(), "invalid scope");
    }

    public function testWithAction(): void {
        $resourceEntry = ResourceEntry::newInstance("leave_request", "john")->withAction("approve")->withAction("create")->toResourceEntry();

        $this->assertEquals("approve", $resourceEntry->getActions()[0], "missing action approve");
        $this->assertEquals("create", $resourceEntry->getActions()[1], "missing action create");
    }

    public function testWithActions(): void {
        $resourceEntry = ResourceEntry::newInstance("leave_request", "john")->withActions(array("approve", "create"))->withActions(array("defer"))->toResourceEntry();

        $this->assertEquals("approve", $resourceEntry->getActions()[0], "missing action approve");
        $this->assertEquals("create", $resourceEntry->getActions()[1], "missing action create");
        $this->assertEquals("defer", $resourceEntry->getActions()[2], "missing action defer");
    }
}
