<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

namespace Cerbos\Test\Sdk\Cloud\Store\V1\StringMatch;

use Cerbos\Sdk\Cloud\Store\V1\StringMatch\InList;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-suppress PossiblyNullReference
 */
final class InListTest extends TestCase
{
    private const string in = "in";

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testWithValue(): void {
        $inList = InList::newInstance()
            ->withValue(self::in)
            ->withValue(self::in)
            ->toInList();

        $this->assertEquals(self::in, $inList->getValues()[0], "invalid first value");
        $this->assertEquals(self::in, $inList->getValues()[1], "invalid second value");
    }

    public function testWithValues(): void {
        $inList = InList::newInstance()
            ->withValues(array(self::in, self::in))
            ->withValues(array(self::in))
            ->toInList();

        $this->assertEquals(self::in, $inList->getValues()[0], "invalid first value");
        $this->assertEquals(self::in, $inList->getValues()[1], "invalid second value");
        $this->assertEquals(self::in, $inList->getValues()[2], "invalid third value");
    }
}
