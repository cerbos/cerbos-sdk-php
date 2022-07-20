<?php

namespace Cerbos\Test\Sdk\Builder;

use Cerbos\Sdk\Builder\Resource;
use PHPUnit\Framework\TestCase;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class ResourceTest extends TestCase
{
    private string $kind = "leave_request";
    private string $id = "XX125";
    private string $policyVersion = "20210210";
    private string $scope = "a_scope";

    private string $lonelyAttr = "lonelyAttr";
    private string $boolAttr = "boolAttr";
    private string $intAttr = "intAttr";
    private string $stringAttr = "stringAttr";
    private string $floatAttr = "floatAttr";


    public function testResource(): void {
        $res = Resource::newInstance($this->kind, $this->id)
                                ->withPolicyVersion($this->policyVersion)
                                ->withScope($this->scope)
                                ->withAttribute($this->lonelyAttr, $this->lonelyAttr)
                                ->withAttributes(array(
                                    $this->boolAttr => true,
                                    $this->intAttr => 10,
                                    $this->stringAttr => $this->stringAttr,
                                    $this->floatAttr => 1.2,
                                ));
        $resource = $res->toResource();

        $this->assertEquals($this->kind, $resource->kind, "value of the resource kind is invalid");
        $this->assertEquals($this->id, $resource->id, "value of the resource id is invalid");
        $this->assertEquals($this->policyVersion, $resource->policyVersion, "value of the resource policyVersion is invalid");
        $this->assertEquals($this->scope, $resource->scope, "value of the resource scope is invalid");

        $this->assertArrayHasKey($this->lonelyAttr, $resource->attributes, "the resource does not have '".$this->lonelyAttr."' attribute");
        $this->assertArrayHasKey($this->boolAttr, $resource->attributes, "the resource does not have '".$this->boolAttr."' attribute");
        $this->assertArrayHasKey($this->intAttr, $resource->attributes, "the resource does not have '".$this->intAttr."' attribute");
        $this->assertArrayHasKey($this->stringAttr, $resource->attributes, "the resource does not have '".$this->stringAttr."' attribute");
        $this->assertArrayHasKey($this->floatAttr, $resource->attributes, "the resource does not have '".$this->floatAttr."' attribute");

        $this->assertIsString($resource->attributes[$this->lonelyAttr], "'".$this->lonelyAttr."' of the resource is not of type string");
        $this->assertIsBool($resource->attributes[$this->boolAttr], "'".$this->boolAttr."' of the resource is not of type bool");
        $this->assertIsInt($resource->attributes[$this->intAttr], "'".$this->intAttr."' of the resource is not of type int");
        $this->assertIsString($resource->attributes[$this->stringAttr], "'".$this->stringAttr."' of the resource is not of type string");
        $this->assertIsFloat($resource->attributes[$this->floatAttr], "'".$this->floatAttr."' of the resource is not of type float");

        $this->assertEquals($this->lonelyAttr, $resource->attributes[$this->lonelyAttr], "'".$this->lonelyAttr."' of the resource is not equal to the expected value");
        $this->assertEquals(true, $resource->attributes[$this->boolAttr], "'".$this->boolAttr."' of the resource is not equal to the expected value");
        $this->assertEquals(10, $resource->attributes[$this->intAttr], "'".$this->intAttr."' of the resource is not equal to the expected value");
        $this->assertEquals($this->stringAttr, $resource->attributes[$this->stringAttr], "'".$this->stringAttr."' of the resource is not equal to the expected value");
        $this->assertEquals(1.2, $resource->attributes[$this->floatAttr], "'".$this->floatAttr."' of the resource is not equal to the expected value");

        $planResource = $res->toPlanResource();

        $this->assertEquals($this->kind, $planResource->kind, "value of the plan resource kind is invalid");
        $this->assertEquals($this->policyVersion, $planResource->policyVersion, "value of the plan resource policyVersion is invalid");
        $this->assertEquals($this->scope, $planResource->scope, "value of the plan resource scope is invalid");

        $this->assertArrayHasKey($this->lonelyAttr, $planResource->attributes, "the plan resource does not have '".$this->lonelyAttr."' attribute");
        $this->assertArrayHasKey($this->boolAttr, $planResource->attributes, "the plan resource does not have '".$this->boolAttr."' attribute");
        $this->assertArrayHasKey($this->intAttr, $planResource->attributes, "the plan resource does not have '".$this->intAttr."' attribute");
        $this->assertArrayHasKey($this->stringAttr, $planResource->attributes, "the plan resource does not have '".$this->stringAttr."' attribute");
        $this->assertArrayHasKey($this->floatAttr, $planResource->attributes, "the plan resource does not have '".$this->floatAttr."' attribute");

        $this->assertIsString($planResource->attributes[$this->lonelyAttr], "'".$this->lonelyAttr."' of the plan resource is not of type string");
        $this->assertIsBool($planResource->attributes[$this->boolAttr], "'".$this->boolAttr."' of the plan resource is not of type bool");
        $this->assertIsInt($planResource->attributes[$this->intAttr], "'".$this->intAttr."' of the plan resource is not of type int");
        $this->assertIsString($planResource->attributes[$this->stringAttr], "'".$this->stringAttr."' of the plan resource is not of type string");
        $this->assertIsFloat($planResource->attributes[$this->floatAttr], "'".$this->floatAttr."' of the plan resource is not of type float");

        $this->assertEquals($this->lonelyAttr, $planResource->attributes[$this->lonelyAttr], "'".$this->lonelyAttr."' of the plan resource is not equal to the expected value");
        $this->assertEquals(true, $planResource->attributes[$this->boolAttr], "'".$this->boolAttr."' of the plan resource is not equal to the expected value");
        $this->assertEquals(10, $planResource->attributes[$this->intAttr], "'".$this->intAttr."' of the plan resource is not equal to the expected value");
        $this->assertEquals($this->stringAttr, $planResource->attributes[$this->stringAttr], "'".$this->stringAttr."' of the plan resource is not equal to the expected value");
        $this->assertEquals(1.2, $planResource->attributes[$this->floatAttr], "'".$this->floatAttr."' of the plan resource is not equal to the expected value");
    }
}