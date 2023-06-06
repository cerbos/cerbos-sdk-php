<?php

// Copyright 2021-2023 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

namespace Cerbos\Test;

use Cerbos\Sdk\Builder\AttributeValue;
use Cerbos\Sdk\Builder\AuxData;
use Cerbos\Sdk\Builder\CheckResourcesRequest;
use Cerbos\Sdk\Builder\PlanResourcesRequest;
use Cerbos\Sdk\Builder\Principal;
use Cerbos\Sdk\Builder\Resource;
use Cerbos\Sdk\Builder\ResourceEntry;
use Exception;

class CerbosClientTest extends TestCase
{
    private string $jwt = "eyJhbGciOiJFUzM4NCIsImtpZCI6IjE5TGZaYXRFZGc4M1lOYzVyMjNndU1KcXJuND0iLCJ0eXAiOiJKV1QifQ.eyJhdWQiOlsiY2VyYm9zLWp3dC10ZXN0cyJdLCJjdXN0b21BcnJheSI6WyJBIiwiQiIsIkMiXSwiY3VzdG9tSW50Ijo0MiwiY3VzdG9tTWFwIjp7IkEiOiJBQSIsIkIiOiJCQiIsIkMiOiJDQyJ9LCJjdXN0b21TdHJpbmciOiJmb29iYXIiLCJleHAiOjE5NTAyNzc5MjYsImlzcyI6ImNlcmJvcy10ZXN0LXN1aXRlIn0._nCHIsuFI3wczeuUv_xjSwaVnIQUdYA9sGf_jVsrsDWloLs3iPWDaA1bXpuIUJVsi8-G6qqdrPI0cOBxEocg1NCm8fyD9T_3hsZV0fYWon_Je6Kl93a3JIW3S6kbvjsL";

    public function testCheckWithoutJwt(): void
    {
        $request = CheckResourcesRequest::newInstance()
            ->withRequestId("1")
            ->withPrincipal(
                Principal::newInstance("john")
                    ->withRole("employee")
                    ->withPolicyVersion("20210210")
                    ->withAttribute("team", AttributeValue::stringValue("design"))
                    ->withAttribute("department", AttributeValue::stringValue("marketing"))
                    ->withAttribute("geography", AttributeValue::stringValue("GB"))
                    ->withAttribute("reader", AttributeValue::boolValue(false))
            )
            ->withResourceEntry(
                ResourceEntry::newInstance("leave_request", "XX125")
                    ->withPolicyVersion("20210210")
                    ->withAttribute("id", AttributeValue::stringValue("XX125"))
                    ->withAttribute("department", AttributeValue::stringValue("marketing"))
                    ->withAttribute("geography", AttributeValue::stringValue("GB"))
                    ->withAttribute("team", AttributeValue::stringValue("design"))
                    ->withAttribute("owner", AttributeValue::stringValue("john"))
                    ->withActions(["view:public", "approve"])
            );

        try {
            $checkResourcesResult = $this->client->checkResources($request);
            $resultEntry = $checkResourcesResult->find("XX125");
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }

        $this->assertTrue($resultEntry->isAllowed("view:public"), "result of XX125 for view:public action is wrong");
        $this->assertFalse($resultEntry->isAllowed("approve"), "result of XX125 for approve action is wrong");
        $this->assertFalse($resultEntry->isAllowed("nonexistent_action"), "result of XX125 for non-existent action is wrong");
    }

    public function testCheckWithJwt(): void {
        $request = CheckResourcesRequest::newInstance()
            ->withAuxData(AuxData::withJwt($this->jwt, null))
            ->withRequestId("1")
            ->withPrincipal(
                Principal::newInstance("john")
                    ->withRole("employee")
                    ->withPolicyVersion("20210210")
                    ->withAttribute("team", AttributeValue::stringValue("design"))
                    ->withAttribute("department", AttributeValue::stringValue("marketing"))
                    ->withAttribute("geography", AttributeValue::stringValue("GB"))
                    ->withAttribute("reader", AttributeValue::boolValue(false))
            )
            ->withResourceEntry(
                ResourceEntry::newInstance("leave_request", "XX125")
                    ->withPolicyVersion("20210210")
                    ->withAttribute("id", AttributeValue::stringValue("XX125"))
                    ->withAttribute("team", AttributeValue::stringValue("design"))
                    ->withAttribute("department", AttributeValue::stringValue("marketing"))
                    ->withAttribute("geography", AttributeValue::stringValue("GB"))
                    ->withAttribute("owner", AttributeValue::stringValue("john"))
                    ->withAction("defer")
            );

        try {
            $checkResourcesResult = $this->client->checkResources($request);
            $resultEntry = $checkResourcesResult->find("XX125");
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }

        $this->assertTrue($resultEntry->isAllowed("defer"), "result of XX125 for defer action is wrong");
    }

    public function testCheckMultiple(): void {
        $request = CheckResourcesRequest::newInstance()
            ->withAuxData(AuxData::withJwt($this->jwt, null))
            ->withRequestId("1")
            ->withPrincipal(
                Principal::newInstance("john")
                    ->withRole("employee")
                    ->withPolicyVersion("20210210")
                    ->withAttribute("team", AttributeValue::stringValue("design"))
                    ->withAttribute("department", AttributeValue::stringValue("marketing"))
                    ->withAttribute("geography", AttributeValue::stringValue("GB"))
                    ->withAttribute("reader", AttributeValue::boolValue(false))
            )
            ->withResourceEntries(
                array(
                    ResourceEntry::newInstance("leave_request", "XX125")
                        ->withPolicyVersion("20210210")
                        ->withAttribute("id", AttributeValue::stringValue("XX125"))
                        ->withAttribute("department", AttributeValue::stringValue("marketing"))
                        ->withAttribute("geography", AttributeValue::stringValue("GB"))
                        ->withAttribute("team", AttributeValue::stringValue("design"))
                        ->withAttribute("owner", AttributeValue::stringValue("john"))
                        ->withActions(["view:public", "approve", "defer"]),

                    ResourceEntry::newInstance("leave_request", "XX225")
                        ->withPolicyVersion("20210210")
                        ->withAttribute("id", AttributeValue::stringValue("XX225"))
                        ->withAttribute("department", AttributeValue::stringValue("marketing"))
                        ->withAttribute("geography", AttributeValue::stringValue("GB"))
                        ->withAttribute("team", AttributeValue::stringValue("design"))
                        ->withAttribute("owner", AttributeValue::stringValue("martha"))
                        ->withActions(["view:public", "approve"]),

                    ResourceEntry::newInstance("leave_request", "XX325")
                        ->withPolicyVersion("20210210")
                        ->withAttribute("id", AttributeValue::stringValue("XX325"))
                        ->withAttribute("department", AttributeValue::stringValue("marketing"))
                        ->withAttribute("geography", AttributeValue::stringValue("US"))
                        ->withAttribute("team", AttributeValue::stringValue("design"))
                        ->withAttribute("owner", AttributeValue::stringValue("peggy"))
                        ->withActions(["view:public", "approve"])
                )
            );

        try {
            $checkResourcesResult = $this->client->checkResources($request);
            $resultEntryXX125 = $checkResourcesResult->find("XX125");
            $resultEntryXX225 = $checkResourcesResult->find("XX225");
            $resultEntryXX325 = $checkResourcesResult->find("XX325");
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }

        $this->assertTrue($resultEntryXX125->isAllowed("view:public"), "result of XX125 for view:public action is wrong");
        $this->assertTrue($resultEntryXX125->isAllowed("defer"), "result of XX125 for defer action is wrong");
        $this->assertFalse($resultEntryXX125->isAllowed("approve"), "result of XX125 for defer action is wrong");

        $this->assertTrue($resultEntryXX225->isAllowed("view:public"), "result of XX225 for view:public action is wrong");
        $this->assertFalse($resultEntryXX225->isAllowed("approve"), "result of XX225 for approve action is wrong");

        $this->assertTrue($resultEntryXX325->isAllowed("view:public"), "result of XX325 for view:public action is wrong");
        $this->assertFalse($resultEntryXX325->isAllowed("approve"), "result of XX325 for approve action is wrong");
    }

    public function testValidationErrors(): void
    {
        $request = CheckResourcesRequest::newInstance()
            ->withRequestId("1")
            ->withPrincipal(
                Principal::newInstance("john")
                    ->withRole("employee")
                    ->withPolicyVersion("20210210")
                    ->withAttribute("department", AttributeValue::floatValue(1.0))
                    ->withAttribute("geography", AttributeValue::intValue(2))
            )
            ->withResourceEntry(
                ResourceEntry::newInstance("leave_request", "XX125")
                    ->withPolicyVersion("20210210")
                    ->withAttribute("department", AttributeValue::stringValue("marketing"))
                    ->withAttribute("geography", AttributeValue::stringValue("GB"))
                    ->withAttribute("owner", AttributeValue::stringValue("john"))
                    ->withActions(["view:public", "approve"])
            );

        try {
            $checkResourcesResult = $this->client->checkResources($request);
            $resultEntry = $checkResourcesResult->find("XX125");
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }

        $this->assertCount(4, $resultEntry->getValidationErrors());
    }

    public function testPlanResources(): void{
        $request = PlanResourcesRequest::newInstance()
            ->withAuxData(AuxData::withJwt($this->jwt, null))
            ->withRequestId("1")
            ->withPrincipal(
                Principal::newInstance("maggie")
                    ->withRole("manager")
                    ->withPolicyVersion("20210210")
                    ->withAttribute("department", AttributeValue::stringValue("marketing"))
                    ->withAttribute("geography", AttributeValue::stringValue("GB"))
                    ->withAttribute("managed_geographies", AttributeValue::stringValue("GB"))
                    ->withAttribute("team", AttributeValue::stringValue("design"))
                    ->withAttribute("reader", AttributeValue::boolValue(false))
            )
            ->withResource(
                Resource::newInstance("leave_request", "XX125")
                    ->withPolicyVersion("20210210")
            )
            ->withAction("approve");


        try {
            $planResourcesResult = $this->client->planResources($request);
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }

        $this->assertEquals("approve", $planResourcesResult->getAction(), "planResourcesResult action is wrong");
        $this->assertEquals("20210210", $planResourcesResult->getPolicyVersion(), "planResourcesResult policy version is wrong");
        $this->assertEquals("leave_request", $planResourcesResult->getResourceKind(), "planResourcesResult resource kind is wrong");

        $this->assertFalse($planResourcesResult->hasValidationErrors(), "planResourcesResult has validation errors");
        $this->assertFalse($planResourcesResult->isAlwaysAllowed(), "planResourcesResult is always allowed");
        $this->assertFalse($planResourcesResult->isAlwaysDenied(), "planResourcesResult is always denied");
        $this->assertTrue($planResourcesResult->isConditional(), "planResourcesResult is not conditional");

        $this->assertNotNull($planResourcesResult->getFilter(), "planResourcesResult filter is null");
        $this->assertNotNull($planResourcesResult->getFilter()->getCondition(), "planResourcesResult filter > condition is null");
        $this->assertNotNull($planResourcesResult->getFilter()->getCondition()->getExpression(), "planResourcesResult filter > condition > expression is null");
        $this->assertNotNull($planResourcesResult->getFilter()->getCondition()->getExpression()->getOperands(), "planResourcesResult filter > condition > expression > operands is null");
        $this->assertArrayHasKey(0, $planResourcesResult->getFilter()->getCondition()->getExpression()->getOperands(), "planResourcesResult filter > condition > expression > operands[0] is null");
        $this->assertArrayHasKey(1, $planResourcesResult->getFilter()->getCondition()->getExpression()->getOperands(), "planResourcesResult filter > condition > expression > operands[1] is null");

        $this->assertEquals("and", $planResourcesResult->getFilter()->getCondition()->getExpression()->getOperator(), "planResourcesResult expression's operator is not 'and'");
        $this->assertEquals("eq", $planResourcesResult->getFilter()->getCondition()->getExpression()->getOperands()[0]->getExpression()->getOperator(), "planResourcesResult operand is not 'eq'");
        $this->assertEquals("eq", $planResourcesResult->getFilter()->getCondition()->getExpression()->getOperands()[1]->getExpression()->getOperator(), "planResourcesResult operand is not 'eq'");
    }

    public function testPlanResourcesValidation(): void{
        $request = PlanResourcesRequest::newInstance()
            ->withAuxData(AuxData::withJwt($this->jwt, null))
            ->withRequestId("1")
            ->withPrincipal(
                Principal::newInstance("maggie")
                    ->withRole("manager")
                    ->withPolicyVersion("20210210")
                    ->withAttribute("department", AttributeValue::stringValue("accounting"))
                    ->withAttribute("geography", AttributeValue::stringValue("GB"))
                    ->withAttribute("managed_geographies", AttributeValue::stringValue("GB"))
                    ->withAttribute("team", AttributeValue::stringValue("design"))
                    ->withAttribute("reader", AttributeValue::boolValue(false))
            )
            ->withResource(
                Resource::newInstance("leave_request", "XX125")
                    ->withPolicyVersion("20210210")
                    ->withAttribute("department", AttributeValue::stringValue("accounting"))
            )
            ->withAction("approve");

        try {
            $planResourcesResult = $this->client->planResources($request);
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }

        $this->assertEquals("approve", $planResourcesResult->getAction(), "planResourcesResult action is wrong");
        $this->assertEquals("20210210", $planResourcesResult->getPolicyVersion(), "planResourcesResult policy version is wrong");
        $this->assertEquals("leave_request", $planResourcesResult->getResourceKind(), "planResourcesResult resource kind is wrong");

        $this->assertNotNull($planResourcesResult->getValidationErrors(), "planResourcesResult validation errors is null");
        $this->assertTrue($planResourcesResult->hasValidationErrors(), "planResourcesResult has validation errors");
        $this->assertCount(2, $planResourcesResult->getValidationErrors(), "planResourcesResult has not 2 validation errors");

        $this->assertTrue($planResourcesResult->isAlwaysDenied(), "planResourcesResult is not always denied");
        $this->assertFalse($planResourcesResult->isAlwaysAllowed(), "planResourcesResult is always allowed");
        $this->assertFalse($planResourcesResult->isConditional(), "planResourcesResult is conditional");
    }
}
