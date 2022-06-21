<?php

namespace Cerbos\Test;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

use Cerbos\Sdk\Builder\Resource;
use Cerbos\Sdk\Builder\Principal;
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

        $resource = Resource::newInstance("xx125")
                        ->withKind("leave_request")
                        ->withPolicyVersion("20210210")
                        ->withAttribute("department", "marketing")
                        ->withAttribute("geography", "GB")
                        ->withAttribute("owner", "john");

        try {
            $response = $this->client->checkResource($principal, $resource, ["view:public", "approve"], null);
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }

        $this->assertEquals(200, $response->getStatusCode());
    }
}