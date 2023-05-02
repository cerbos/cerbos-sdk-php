<?php

namespace Cerbos\Test\Sdk\Builder;

use Cerbos\Sdk\Builder\Principal;
use PHPUnit\Framework\TestCase;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class PrincipalTest extends TestCase
{
    private string $id = "john";
    private string $policyVersion = "20210210";
    private string $scope = "a_scope";
    private array $roles = array("employee", "manager", "admin");

    private string $lonelyAttr = "lonelyAttr";
    private string $boolAttr = "boolAttr";
    private string $intAttr = "intAttr";
    private string $stringAttr = "stringAttr";
    private string $floatAttr = "floatAttr";


    public function testPrincipal(): void {
        $principal = Principal::newInstance($this->id)
                                ->withPolicyVersion($this->policyVersion)
                                ->withScope($this->scope)
                                ->withAttribute($this->lonelyAttr, $this->lonelyAttr)
                                ->withAttributes(array(
                                    $this->boolAttr => true,
                                    $this->intAttr => 10,
                                    $this->stringAttr => $this->stringAttr,
                                    $this->floatAttr => 1.2,
                                ))
                                ->withRole($this->roles[0])
                                ->withRoles(array($this->roles[1], $this->roles[2]))->toPrincipal();

        $this->assertEquals($this->id, $principal->id, "value of the principal id is invalid");
        $this->assertEquals($this->policyVersion, $principal->policyVersion, "value of the principal policyVersion is invalid");
        $this->assertEquals($this->scope, $principal->scope, "value of the principal scope is invalid");

        $this->assertArrayHasKey($this->lonelyAttr, $principal->attributes, "the principal does not have '".$this->lonelyAttr."' attribute");
        $this->assertArrayHasKey($this->boolAttr, $principal->attributes, "the principal does not have '".$this->boolAttr."' attribute");
        $this->assertArrayHasKey($this->intAttr, $principal->attributes, "the principal does not have '".$this->intAttr."' attribute");
        $this->assertArrayHasKey($this->stringAttr, $principal->attributes, "the principal does not have '".$this->stringAttr."' attribute");
        $this->assertArrayHasKey($this->floatAttr, $principal->attributes, "the principal does not have '".$this->floatAttr."' attribute");

        $this->assertIsString($principal->attributes[$this->lonelyAttr], "'".$this->lonelyAttr."' of the principal is not of type string");
        $this->assertIsBool($principal->attributes[$this->boolAttr], "'".$this->boolAttr."' of the principal is not of type bool");
        $this->assertIsInt($principal->attributes[$this->intAttr], "'".$this->intAttr."' of the principal is not of type int");
        $this->assertIsString($principal->attributes[$this->stringAttr], "'".$this->stringAttr."' of the principal is not of type string");
        $this->assertIsFloat($principal->attributes[$this->floatAttr], "'".$this->floatAttr."' of the principal is not of type float");

        $this->assertEquals($this->lonelyAttr, $principal->attributes[$this->lonelyAttr], "'".$this->lonelyAttr."' of the principal is not equal to the expected value");
        $this->assertEquals(true, $principal->attributes[$this->boolAttr], "'".$this->boolAttr."' of the principal is not equal to the expected value");
        $this->assertEquals(10, $principal->attributes[$this->intAttr], "'".$this->intAttr."' of the principal is not equal to the expected value");
        $this->assertEquals($this->stringAttr, $principal->attributes[$this->stringAttr], "'".$this->stringAttr."' of the principal is not equal to the expected value");
        $this->assertEquals(1.2, $principal->attributes[$this->floatAttr], "'".$this->floatAttr."' of the principal is not equal to the expected value");

        $this->assertEquals($this->roles[0], $principal->roles[0], "first role of the principal is not equal to the expected value");
        $this->assertEquals($this->roles[1], $principal->roles[1], "second role of the principal is not equal to the expected value");
        $this->assertEquals($this->roles[2], $principal->roles[2], "third role of the principal is not equal to the expected value");
    }

    public function testPrincipalWithNoAttributesExcludesAttributeKeyInSerializedJson(): void {
        $principal = Principal::newInstance($this->id)
                                ->withPolicyVersion($this->policyVersion)
                                ->withScope($this->scope)
                                ->withRole($this->roles[0])
                                ->withRoles(array($this->roles[1], $this->roles[2]))->toPrincipal();

        $this->assertArrayNotHasKey("attr", $principal->jsonSerialize(), "the principal should not have an 'attr' key in the serialized json");
    }
}