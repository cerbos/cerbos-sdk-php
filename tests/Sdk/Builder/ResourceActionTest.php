<?php

namespace Cerbos\Test\Sdk\Builder;

use Cerbos\Sdk\Builder\ResourceAction;
use PHPUnit\Framework\TestCase;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class ResourceActionTest extends TestCase
{
    private string $kind = "leave_request";
    private string $id = "XX125";
    private string $policyVersion = "20210210";
    private string $scope = "a_scope";
    private array $actions = array("create", "view", "defer");

    private string $lonelyAttr = "lonelyAttr";
    private string $boolAttr = "boolAttr";
    private string $intAttr = "intAttr";
    private string $stringAttr = "stringAttr";
    private string $floatAttr = "floatAttr";

    public function testResourceAction(): void {
        $resourceAction = ResourceAction::newInstance($this->kind, $this->id)
                                ->withPolicyVersion($this->policyVersion)
                                ->withScope($this->scope)
                                ->withAttribute($this->lonelyAttr, $this->lonelyAttr)
                                ->withAttributes(array(
                                    $this->boolAttr => true,
                                    $this->intAttr => 10,
                                    $this->stringAttr => $this->stringAttr,
                                    $this->floatAttr => 1.2,
                                ))
                                ->withAction($this->actions[0])
                                ->withActions(array($this->actions[1], $this->actions[2]))
                                ->toResourceAction();

        $this->assertEquals($this->kind, $resourceAction->resource->kind, "value of the resource kind is invalid");
        $this->assertEquals($this->id, $resourceAction->resource->id, "value of the resource id is invalid");
        $this->assertEquals($this->policyVersion, $resourceAction->resource->policyVersion, "value of the resource policyVersion is invalid");
        $this->assertEquals($this->scope, $resourceAction->resource->scope, "value of the resource scope is invalid");

        $this->assertArrayHasKey($this->lonelyAttr, $resourceAction->resource->attributes, "the resource does not have '".$this->lonelyAttr."' attribute");
        $this->assertArrayHasKey($this->boolAttr, $resourceAction->resource->attributes, "the resource does not have '".$this->boolAttr."' attribute");
        $this->assertArrayHasKey($this->intAttr, $resourceAction->resource->attributes, "the resource does not have '".$this->intAttr."' attribute");
        $this->assertArrayHasKey($this->stringAttr, $resourceAction->resource->attributes, "the resource does not have '".$this->stringAttr."' attribute");
        $this->assertArrayHasKey($this->floatAttr, $resourceAction->resource->attributes, "the resource does not have '".$this->floatAttr."' attribute");

        $this->assertIsString($resourceAction->resource->attributes[$this->lonelyAttr], "'".$this->lonelyAttr."' of the resource is not of type string");
        $this->assertIsBool($resourceAction->resource->attributes[$this->boolAttr], "'".$this->boolAttr."' of the resource is not of type bool");
        $this->assertIsInt($resourceAction->resource->attributes[$this->intAttr], "'".$this->intAttr."' of the resource is not of type int");
        $this->assertIsString($resourceAction->resource->attributes[$this->stringAttr], "'".$this->stringAttr."' of the resource is not of type string");
        $this->assertIsFloat($resourceAction->resource->attributes[$this->floatAttr], "'".$this->floatAttr."' of the resource is not of type float");

        $this->assertEquals($this->lonelyAttr, $resourceAction->resource->attributes[$this->lonelyAttr], "'".$this->lonelyAttr."' of the resource is not equal to the expected value");
        $this->assertEquals(true, $resourceAction->resource->attributes[$this->boolAttr], "'".$this->boolAttr."' of the resource is not equal to the expected value");
        $this->assertEquals(10, $resourceAction->resource->attributes[$this->intAttr], "'".$this->intAttr."' of the resource is not equal to the expected value");
        $this->assertEquals($this->stringAttr, $resourceAction->resource->attributes[$this->stringAttr], "'".$this->stringAttr."' of the resource is not equal to the expected value");
        $this->assertEquals(1.2, $resourceAction->resource->attributes[$this->floatAttr], "'".$this->floatAttr."' of the resource is not equal to the expected value");

        $this->assertEquals($this->actions[0], $resourceAction->actions[0], "first action of the resource is not equal to the expected value");
        $this->assertEquals($this->actions[1], $resourceAction->actions[1], "second action of the resource is not equal to the expected value");
        $this->assertEquals($this->actions[2], $resourceAction->actions[2], "third action of the resource is not equal to the expected value");
    }
}