<?php

namespace Cerbos\Test;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

use Cerbos\Sdk\Builder\Principal;
use Cerbos\Sdk\Builder\ResourceAction;
use Http\Client\Exception;

class CerbosClientTest extends TestCase
{
    public function testCanRequest200Response(): void
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
            $response = $this->client->checkResources($principal, array($resourceActions), null);
            $this->assertEquals(200, $response->getStatusCode());

        } catch (Exception $e) {
            $this->fail($e->getMessage());
        } catch (\Exception $e) {
        }
    }
}