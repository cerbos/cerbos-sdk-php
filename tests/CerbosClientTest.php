<?php

namespace Cerbos\Test;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

use Cerbos\Sdk\Builder\Principal;
use Cerbos\Sdk\Builder\ResourceAction;
use Exception;

class CerbosClientTest extends TestCase
{
    public function testCerbosClient(): void
    {
        $principal = Principal::newInstance("john")
                        ->withRole("employee")
                        ->withPolicyVersion("20210210")
                        ->withAttribute("department", "marketing")
                        ->withAttribute("geography", "GB");

        $resourceActions = ResourceAction::newInstance("leave_request", "xx125")
                        ->withActions(["view:public", "approve"])
                        ->withPolicyVersion("20210210")
                        ->withAttribute("department", "marketing")
                        ->withAttribute("geography", "GB")
                        ->withAttribute("owner", "john");

        try {
            $checkResourcesResult = $this->client->checkResources($principal, array($resourceActions), null);
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
}