<?php

// Copyright 2021-2026 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

namespace Cerbos\Test\Sdk\Builder;

use Cerbos\Sdk\Builder\AttributeValue;
use Cerbos\Sdk\Builder\RequestContext;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-suppress PossiblyNullReference
 */
final class RequestContextTest extends TestCase
{
    public function testWithAnnotation(): void
    {
        $requestContext = RequestContext::newInstance()
            ->withAnnotation("boolAnnotation", AttributeValue::boolValue(true))
            ->withAnnotation("floatAnnotation", AttributeValue::floatValue(1.2))
            ->withAnnotation("intAnnotation", AttributeValue::intValue(2))
            ->toRequestContext();

        $this->assertArrayHasKey("boolAnnotation", $requestContext->getAnnotations(), "missing attr boolAttr");
        $this->assertArrayHasKey("floatAnnotation", $requestContext->getAnnotations(), "missing attr floatAttr");
        $this->assertArrayHasKey("intAnnotation", $requestContext->getAnnotations(), "missing attr intAttr");

        $this->assertTrue((bool)$requestContext->getAnnotations()->offsetGet("boolAnnotation")->getBoolValue(), "invalid bool attr value");
        $this->assertEquals(1.2, $requestContext->getAnnotations()->offsetGet("floatAnnotation")->getNumberValue(), "invalid float attr value");
        $this->assertEquals(2, $requestContext->getAnnotations()->offsetGet("intAnnotation")->getNumberValue(), "invalid int attr value");
    }

    public function testWithAnnotations(): void
    {
        $requestContext = RequestContext::withAnnotations(
            [
                "boolAnnotation" => AttributeValue::boolValue(true),
                "floatAnnotation" => AttributeValue::floatValue(1.2),
                "intAnnotation" => AttributeValue::intValue(2),
            ]
        )->toRequestContext();

        $this->assertArrayHasKey("boolAnnotation", $requestContext->getAnnotations(), "missing attr boolAttr");
        $this->assertArrayHasKey("floatAnnotation", $requestContext->getAnnotations(), "missing attr floatAttr");
        $this->assertArrayHasKey("intAnnotation", $requestContext->getAnnotations(), "missing attr intAttr");

        $this->assertTrue((bool)$requestContext->getAnnotations()->offsetGet("boolAnnotation")->getBoolValue(), "invalid bool attr value");
        $this->assertEquals(1.2, $requestContext->getAnnotations()->offsetGet("floatAnnotation")->getNumberValue(), "invalid float attr value");
        $this->assertEquals(2, $requestContext->getAnnotations()->offsetGet("intAnnotation")->getNumberValue(), "invalid int attr value");
    }
}
