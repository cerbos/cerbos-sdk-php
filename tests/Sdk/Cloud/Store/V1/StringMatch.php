<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

namespace Cerbos\Test\Sdk\Cloud\Store\V1;

use Cerbos\Sdk\Cloud\Store\V1\StringMatch;
use Cerbos\Sdk\Cloud\Store\V1\StringMatch\InList;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-suppress PossiblyNullReference
 */
final class StringMatchTest extends TestCase
{
    private const string equals = "equals";
    private const string in = "in";
    private const string like = "like";

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testWithEqual(): void {
        $stringMatch = StringMatch::newInstance()
            ->withEquals(self::equals)
            ->toStringMatch();

        $this->assertEquals(self::in, $stringMatch->getEquals(), "invalid equals");
    }

    public function testWithIn(): void {
        $inList = InList::newInstance()
            ->withValue(self::in)
            ->withValue(self::in);

        $stringMatch = StringMatch::newInstance()
            ->withIn($inList)
            ->toStringMatch();

        $this->assertEquals(self::in, $stringMatch->getIn()->getValues()[0], "invalid first value");
        $this->assertEquals(self::in, $stringMatch->getIn()->getValues()[1], "invalid second value");
    }

    public function testWithLike(): void {
        $stringMatch = StringMatch::newInstance()
            ->withLike(self::like)
            ->toStringMatch();

        $this->assertEquals(self::in, $stringMatch->getLike(), "invalid like");
    }
}
