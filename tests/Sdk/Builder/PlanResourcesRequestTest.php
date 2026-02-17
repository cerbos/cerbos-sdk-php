<?php

// Copyright 2021-2026 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Test\Sdk\Builder;

use Cerbos\Sdk\Builder\PlanResourcesRequest;
use Exception;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress PossiblyNullReference
 */
final class PlanResourcesRequestTest extends TestCase
{
    public function testWithAllowPartialRequests(): void
    {
        try {
            $request = PlanResourcesRequest::newInstance()->withAllowPartialRequests(true)->toPlanResourcesRequest();
        } catch (Exception $e) {
            /**
             * @psalm-suppress UndefinedClass
             */
            $this->fail($e->getMessage());
        }

        $this->expectException(Exception::class);
        $request = PlanResourcesRequest::newInstance()->toPlanResourcesRequest();
    }
}
