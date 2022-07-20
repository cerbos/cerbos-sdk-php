<?php

namespace Cerbos\Test;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

use Cerbos\Sdk\Builder\AuxData;
use Cerbos\Sdk\Builder\Principal;
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
}