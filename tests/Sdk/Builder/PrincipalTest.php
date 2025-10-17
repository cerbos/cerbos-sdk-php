<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

namespace Cerbos\Test\Sdk\Builder;

use Cerbos\Sdk\Builder\AttributeValue;
use Cerbos\Sdk\Builder\Principal;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-suppress PossiblyNullReference
 */
final class PrincipalTest extends TestCase
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

    public function testConstructor(): void
    {
        $principal = Principal::newInstance("john")->toPrincipal();

        $this->assertEquals("john", $principal->getId(), "invalid id");
    }

    public function testWithId(): void
    {
        $principal = Principal::newInstance("alex")->withId("john")->toPrincipal();

        $this->assertEquals("john", $principal->getId(), "invalid id");
    }

    public function testWithPolicyVersion(): void
    {
        $principal = Principal::newInstance("john")->withPolicyVersion("20210210")->toPrincipal();

        $this->assertEquals("20210210", $principal->getPolicyVersion(), "invalid policyVersion");
    }

    public function testWithRole(): void
    {
        $principal = Principal::newInstance("john")->withRole("employee")->withRole("manager")->toPrincipal();

        $this->assertEquals("employee", $principal->getRoles()[0], "missing role employee");
        $this->assertEquals("manager", $principal->getRoles()[1], "missing role manager");
    }

    public function testWithRoles(): void
    {
        $principal = Principal::newInstance("john")->withRoles(array("employee", "manager"))->withRoles(array("admin"))->toPrincipal();

        $this->assertEquals("employee", $principal->getRoles()[0], "missing role employee");
        $this->assertEquals("manager", $principal->getRoles()[1], "missing role manager");
        $this->assertEquals("admin", $principal->getRoles()[2], "missing role admin");
    }

    public function testWithAttribute(): void
    {
        $principal = Principal::newInstance("john")
            ->withAttribute("boolAttr", AttributeValue::boolValue(true))
            ->withAttribute("floatAttr", AttributeValue::floatValue(1.2))
            ->withAttribute("intAttr", AttributeValue::intValue(2))
            ->withAttribute("listAttr", $this->listValue)
            ->withAttribute("mapAttr", $this->mapValue)
            ->toPrincipal();

        $this->assertArrayHasKey("boolAttr", $principal->getAttr(), "missing attr boolAttr");
        $this->assertArrayHasKey("floatAttr", $principal->getAttr(), "missing attr floatAttr");
        $this->assertArrayHasKey("intAttr", $principal->getAttr(), "missing attr intAttr");
        $this->assertArrayHasKey("listAttr", $principal->getAttr(), "missing attr listAttr");
        $this->assertArrayHasKey("mapAttr", $principal->getAttr(), "missing attr mapAttr");

        $this->assertTrue((bool)$principal->getAttr()->offsetGet("boolAttr")->getBoolValue(), "invalid bool attr value");
        $this->assertEquals(1.2, $principal->getAttr()->offsetGet("floatAttr")->getNumberValue(), "invalid float attr value");
        $this->assertEquals(2, $principal->getAttr()->offsetGet("intAttr")->getNumberValue(), "invalid int attr value");
    }

    public function testWithAttributes(): void
    {
        $principal = Principal::newInstance("john")
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
            ->toPrincipal();

        $this->assertArrayHasKey("boolAttr", $principal->getAttr(), "missing attr boolAttr");
        $this->assertArrayHasKey("floatAttr", $principal->getAttr(), "missing attr floatAttr");
        $this->assertArrayHasKey("intAttr", $principal->getAttr(), "missing attr intAttr");
        $this->assertArrayHasKey("listAttr", $principal->getAttr(), "missing attr listAttr");
        $this->assertArrayHasKey("mapAttr", $principal->getAttr(), "missing attr mapAttr");

        $this->assertTrue((bool)$principal->getAttr()->offsetGet("boolAttr")->getBoolValue(), "invalid bool attr value");
        $this->assertEquals(1.2, $principal->getAttr()->offsetGet("floatAttr")->getNumberValue(), "invalid float attr value");
        $this->assertEquals(2, $principal->getAttr()->offsetGet("intAttr")->getNumberValue(), "invalid int attr value");
    }

    public function testWithScope(): void
    {
        $principal = Principal::newInstance("john")->withScope("acme")->toPrincipal();

        $this->assertEquals("acme", $principal->getScope(), "invalid scope");
    }
}
