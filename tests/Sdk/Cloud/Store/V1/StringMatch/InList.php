<?php

// Copyright 2021-2026 Zenauth Ltd.
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

    public function testAll(): void
    {
        $inList = InList::newInstance(self::in, self::in)->toInList();

        $this->assertEquals(self::in, $inList->getValues()[0], "invalid first value");
        $this->assertEquals(self::in, $inList->getValues()[1], "invalid second value");
    }
}
