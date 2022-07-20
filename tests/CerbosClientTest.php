<?php

namespace Cerbos\Test;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

use Cerbos\Sdk\Builder\AuxData;
use Cerbos\Sdk\Builder\Principal;
use Cerbos\Sdk\Builder\Resource;
use Cerbos\Sdk\Builder\ResourceAction;
use Exception;

class CerbosClientTest extends TestCase
{
    private string $jwt = "eyJhbGciOiJFUzM4NCIsImtpZCI6IjE5TGZaYXRFZGc4M1lOYzVyMjNndU1KcXJuND0iLCJ0eXAiOiJKV1QifQ.eyJhdWQiOlsiY2VyYm9zLWp3dC10ZXN0cyJdLCJjdXN0b21BcnJheSI6WyJBIiwiQiIsIkMiXSwiY3VzdG9tSW50Ijo0MiwiY3VzdG9tTWFwIjp7IkEiOiJBQSIsIkIiOiJCQiIsIkMiOiJDQyJ9LCJjdXN0b21TdHJpbmciOiJmb29iYXIiLCJleHAiOjE5NTAyNzc5MjYsImlzcyI6ImNlcmJvcy10ZXN0LXN1aXRlIn0._nCHIsuFI3wczeuUv_xjSwaVnIQUdYA9sGf_jVsrsDWloLs3iPWDaA1bXpuIUJVsi8-G6qqdrPI0cOBxEocg1NCm8fyD9T_3hsZV0fYWon_Je6Kl93a3JIW3S6kbvjsL";

    public function testCheckWithoutJwt(): void
    {
        $principal = Principal::newInstance("john")
                        ->withRole("employee")
                        ->withPolicyVersion("20210210")
                        ->withAttribute("team", "design")
                        ->withAttribute("department", "marketing")
                        ->withAttribute("geography", "GB")
                        ->withAttribute("reader", false);

        $resourceAction = ResourceAction::newInstance("leave_request", "XX125")
                            ->withPolicyVersion("20210210")
                            ->withAttribute("id", "XX125")
                            ->withAttribute("department", "marketing")
                            ->withAttribute("geography", "GB")
                            ->withAttribute("team", "design")
                            ->withAttribute("owner", "john")
                            ->withActions(["view:public", "approve"]);

        $checkResourcesResult = null;
        try {
            $checkResourcesResult = $this->client->checkResources($principal, array($resourceAction), null, null);
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        } catch (\Http\Client\Exception $e) {
            $this->fail($e->getMessage());
        }

        try {
            $resultEntry = $checkResourcesResult->find("XX125");

            $this->assertTrue($resultEntry->isAllowed("view:public"), "result of XX125 for view:public action is wrong");
            $this->assertFalse($resultEntry->isAllowed("approve"), "result of XX125 for approve action is wrong");
            $this->assertFalse($resultEntry->isAllowed("nonexistent_action"), "result of XX125 for non-existent action is wrong");
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }
    }

    public function testCheckWithJwt(): void {
        $principal = Principal::newInstance("john")
            ->withRole("employee")
            ->withPolicyVersion("20210210")
            ->withAttribute("team", "design")
            ->withAttribute("department", "marketing")
            ->withAttribute("geography", "GB")
            ->withAttribute("reader", false);

        $resourceAction = ResourceAction::newInstance("leave_request", "XX125")
            ->withPolicyVersion("20210210")
            ->withAttribute("id", "XX125")
            ->withAttribute("team", "design")
            ->withAttribute("department", "marketing")
            ->withAttribute("geography", "GB")
            ->withAttribute("owner", "john")
            ->withAction("defer");

        $checkResourcesResult = null;
        try {
            $checkResourcesResult = $this->client->checkResources($principal, array($resourceAction), AuxData::WithJwt($this->jwt, null), null);
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        } catch (\Http\Client\Exception $e) {
            $this->fail($e->getMessage());
        }

        try {
            $resultEntry = $checkResourcesResult->find("XX125");
            $this->assertTrue($resultEntry->isAllowed("defer"), "result of XX125 for defer action is wrong");
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }
    }

    public function testCheckMultiple(): void {
        $principal = Principal::newInstance("john")
                        ->withRole("employee")
                        ->withPolicyVersion("20210210")
                        ->withAttribute("team", "design")
                        ->withAttribute("department", "marketing")
                        ->withAttribute("geography", "GB")
                        ->withAttribute("reader", false);

        $resourceActionXX125 = ResourceAction::newInstance("leave_request", "XX125")
                            ->withPolicyVersion("20210210")
                            ->withAttribute("id", "XX125")
                            ->withAttribute("department", "marketing")
                            ->withAttribute("geography", "GB")
                            ->withAttribute("team", "design")
                            ->withAttribute("owner", "john")
                            ->withActions(["view:public", "approve", "defer"]);

        $resourceActionXX225 = ResourceAction::newInstance("leave_request", "XX225")
                            ->withPolicyVersion("20210210")
                            ->withAttribute("id", "XX225")
                            ->withAttribute("department", "marketing")
                            ->withAttribute("geography", "GB")
                            ->withAttribute("team", "design")
                            ->withAttribute("owner", "martha")
                            ->withActions(["view:public", "approve"]);

        $resourceActionXX325 = ResourceAction::newInstance("leave_request", "XX325")
                                ->withPolicyVersion("20210210")
                                ->withAttribute("id", "XX325")
                                ->withAttribute("department", "marketing")
                                ->withAttribute("geography", "US")
                                ->withAttribute("team", "design")
                                ->withAttribute("owner", "peggy")
                                ->withActions(["view:public", "approve"]);

        $checkResourcesResult = null;
        try {
            $checkResourcesResult = $this->client->checkResources($principal, array($resourceActionXX125, $resourceActionXX225, $resourceActionXX325), AuxData::WithJwt($this->jwt, null), null);
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        } catch (\Http\Client\Exception $e) {
            $this->fail($e->getMessage());
        }

        try {
            $resultEntryXX125 = $checkResourcesResult->find("XX125");

            $this->assertTrue($resultEntryXX125->isAllowed("view:public"), "result of XX125 for view:public action is wrong");
            $this->assertTrue($resultEntryXX125->isAllowed("defer"), "result of XX125 for defer action is wrong");
            $this->assertFalse($resultEntryXX125->isAllowed("approve"), "result of XX125 for defer action is wrong");
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }

        try {
            $resultEntryXX225 = $checkResourcesResult->find("XX225");

            $this->assertTrue($resultEntryXX225->isAllowed("view:public"), "result of XX225 for view:public action is wrong");
            $this->assertFalse($resultEntryXX225->isAllowed("approve"), "result of XX225 for approve action is wrong");
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }

        try {
            $resultEntryXX225 = $checkResourcesResult->find("XX325");

            $this->assertTrue($resultEntryXX225->isAllowed("view:public"), "result of XX325 for view:public action is wrong");
            $this->assertFalse($resultEntryXX225->isAllowed("approve"), "result of XX325 for approve action is wrong");
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }
    }

    public function testValidationErrors(): void
    {
        $principal = Principal::newInstance("john")
            ->withRole("employee")
            ->withPolicyVersion("20210210")
            ->withAttribute("department", 1.0)
            ->withAttribute("geography", 2);

        $resourceAction = ResourceAction::newInstance("leave_request", "XX125")
            ->withPolicyVersion("20210210")
            ->withAttribute("department", "marketing")
            ->withAttribute("geography", "GB")
            ->withAttribute("owner", "john")
            ->withActions(["view:public", "approve"]);

        $checkResourcesResult = null;
        try {
            $checkResourcesResult = $this->client->checkResources($principal, array($resourceAction), null, null);
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        } catch (\Http\Client\Exception $e) {
            $this->fail($e->getMessage());
        }

        try {
            $this->assertCount(4, $checkResourcesResult->find("XX125")->validationErrors);
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }
    }

    public function testPlanResources(): void{
        $principal = Principal::newInstance("maggie")
            ->withRole("manager")
            ->withPolicyVersion("20210210")
            ->withAttribute("department", "marketing")
            ->withAttribute("geography", "GB")
            ->withAttribute("managed_geographies", "GB")
            ->withAttribute("team", "design")
            ->withAttribute("reader", false);

        $resource = Resource::newInstance("leave_request", "XX125")
            ->withPolicyVersion("20210210");

        $action = "approve";

        $planResourcesResult = null;
        try {
            $planResourcesResult = $this->client->planResources($principal, $resource, $action, AuxData::WithJwt($this->jwt, null), null);
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        } catch (\Http\Client\Exception $e) {
            $this->fail($e->getMessage());
        }

        $this->assertEquals($action, $planResourcesResult->action, "planResourcesResult action is wrong");
        $this->assertEquals("20210210", $planResourcesResult->policyVersion, "planResourcesResult policy version is wrong");
        $this->assertEquals("leave_request", $planResourcesResult->resourceKind, "planResourcesResult resource kind is wrong");

        $this->assertFalse($planResourcesResult->hasValidationErrors(), "planResourcesResult has validation errors");
        $this->assertFalse($planResourcesResult->isAlwaysAllowed(), "planResourcesResult is always allowed");
        $this->assertFalse($planResourcesResult->isAlwaysDenied(), "planResourcesResult is always denied");
        $this->assertTrue($planResourcesResult->isConditional(), "planResourcesResult is not conditional");

        $this->assertNotNull($planResourcesResult->filter, "planResourcesResult filter is null");
        $this->assertNotNull($planResourcesResult->filter->condition, "planResourcesResult filter > condition is null");
        $this->assertNotNull($planResourcesResult->filter->condition->expression, "planResourcesResult filter > condition > expression is null");
        $this->assertNotNull($planResourcesResult->filter->condition->expression->operands, "planResourcesResult filter > condition > expression > operands is null");
        $this->assertArrayHasKey(0, $planResourcesResult->filter->condition->expression->operands, "planResourcesResult filter > condition > expression > operands[0] is null");
        $this->assertArrayHasKey(1, $planResourcesResult->filter->condition->expression->operands, "planResourcesResult filter > condition > expression > operands[1] is null");

        $this->assertEquals("and", $planResourcesResult->filter->condition->expression->operator, "planResourcesResult expression's operator is not 'and'");
        $this->assertEquals("eq", $planResourcesResult->filter->condition->expression->operands[0]->expression->operator, "planResourcesResult operand is not 'eq'");
        $this->assertEquals("eq", $planResourcesResult->filter->condition->expression->operands[1]->expression->operator, "planResourcesResult operand is not 'eq'");
    }

    public function testPlanResourcesValidation(): void{
        $principal = Principal::newInstance("maggie")
            ->withRole("manager")
            ->withPolicyVersion("20210210")
            ->withAttribute("department", "accounting")
            ->withAttribute("geography", "GB")
            ->withAttribute("managed_geographies", "GB")
            ->withAttribute("team", "design")
            ->withAttribute("reader", false);

        $resource = Resource::newInstance("leave_request", "XX125")
            ->withPolicyVersion("20210210")
            ->withAttribute("department", "accounting");

        $action = "approve";

        $planResourcesResult = null;
        try {
            $planResourcesResult = $this->client->planResources($principal, $resource, $action, AuxData::WithJwt($this->jwt, null), null);
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        } catch (\Http\Client\Exception $e) {
            $this->fail($e->getMessage());
        }

        $this->assertEquals($action, $planResourcesResult->action, "planResourcesResult action is wrong");
        $this->assertEquals("20210210", $planResourcesResult->policyVersion, "planResourcesResult policy version is wrong");
        $this->assertEquals("leave_request", $planResourcesResult->resourceKind, "planResourcesResult resource kind is wrong");

        $this->assertNotNull($planResourcesResult->validationErrors, "planResourcesResult validation errors is null");
        $this->assertTrue($planResourcesResult->hasValidationErrors(), "planResourcesResult has validation errors");
        $this->assertCount(2, $planResourcesResult->validationErrors, "planResourcesResult has not 2 validation errors");

        $this->assertTrue($planResourcesResult->isAlwaysDenied(), "planResourcesResult is not always denied");
        $this->assertFalse($planResourcesResult->isAlwaysAllowed(), "planResourcesResult is always allowed");
        $this->assertFalse($planResourcesResult->isConditional(), "planResourcesResult is conditional");
    }
}