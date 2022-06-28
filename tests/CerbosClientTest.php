<?php

namespace Cerbos\Test;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

use Cerbos\Sdk\Builder\Principal;
use Cerbos\Sdk\Builder\ResourceAction;
use Exception;

class CerbosClientTest extends TestCase
{
    public function testSingle(): void
    {
        $principal = Principal::newInstance("john")
                        ->withRole("employee")
                        ->withPolicyVersion("20210210")
                        ->withAttribute("department", "marketing")
                        ->withAttribute("geography", "GB");

        $resourceAction = ResourceAction::newInstance("leave_request", "xx125")
                            ->withPolicyVersion("20210210")
                            ->withAttribute("department", "marketing")
                            ->withAttribute("geography", "GB")
                            ->withAttribute("owner", "john")
                            ->withActions(["view:public", "approve"]);

        try {
            $checkResourcesResult = $this->client->checkResources($principal, array($resourceAction), null);
            $resultEntry = $checkResourcesResult->find("xx125");
            if (isset($resultEntry)) {
                $this->assertTrue($resultEntry->isAllowed("view:public"));
                $this->assertFalse($resultEntry->isAllowed("approve"));
                $this->assertFalse($resultEntry->isAllowed("nonexistent_action"));
            }
            else {
                $this->fail("no result entry found");
            }
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        } catch (\Http\Client\Exception $e) {
            $this->fail($e->getMessage());
        }
    }

    public function testMultiple(): void {
        $principal = Principal::newInstance("john")
                        ->withRole("employee")
                        ->withPolicyVersion("20210210")
                        ->withAttribute("department", "marketing")
                        ->withAttribute("geography", "GB");

        $resourceAction = ResourceAction::newInstance("leave_request", "XX125")
                            ->withPolicyVersion("20210210")
                            ->withAttribute("department", "marketing")
                            ->withAttribute("geography", "GB")
                            ->withAttribute("owner", "john")
                            ->withActions(["view:public", "approve", "defer"]);

        $resourceAction1 = ResourceAction::newInstance("leave_request", "XX225")
                            ->withPolicyVersion("20210210")
                            ->withAttribute("department", "marketing")
                            ->withAttribute("geography", "GB")
                            ->withAttribute("owner", "martha")
                            ->withActions(["view:public", "approve"]);

        $checkResourcesResult = null;
        try {
            $checkResourcesResult = $this->client->checkResources($principal, array($resourceAction, $resourceAction1), null);
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        } catch (\Http\Client\Exception $e) {
            $this->fail($e->getMessage());
        }

        $resultEntryXX125 = $checkResourcesResult->find("XX125");
        if (!isset($resultEntryXX125)) {
            $this->fail("no result entry found");
        }

        $this->assertTrue($resultEntryXX125->isAllowed("view:public"));
        $this->assertFalse($resultEntryXX125->isAllowed("defer"));
        $this->assertFalse($resultEntryXX125->isAllowed("approve"));

        $resultEntryXX225 = $checkResourcesResult->find("XX225");
        if (!isset($resultEntryXX225)) {
            $this->fail("no result entry found");
        }

        $this->assertTrue($resultEntryXX225->isAllowed("view:public"));
        $this->assertFalse($resultEntryXX225->isAllowed("approve"));
    }
}