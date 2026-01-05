<?php

// Copyright 2021-2026 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

namespace Cerbos\Test\Sdk\Cloud\Store\V1;

use Cerbos\Sdk\Cloud\Store\V1\FileFilter;
use Cerbos\Sdk\Cloud\Store\V1\StringMatch\InList;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-suppress PossiblyNullReference
 */
final class FileFilterTest extends TestCase
{
    private const string something = "something";

    public function testContains(): void
    {
        $fileFilter = FileFilter::pathContains(self::something)->toFileFilter();

        $this->assertEquals(self::something, $fileFilter->getPath()->getContains(), "invalid path contains");
    }

    public function testEquals(): void
    {
        $fileFilter = FileFilter::pathEquals(self::something)->toFileFilter();

        $this->assertEquals(self::something, $fileFilter->getPath()->getEquals(), "invalid path equals");
    }

    public function testIn(): void
    {
        $fileFilter = FileFilter::pathIn(InList::newInstance(self::something, self::something))->toFileFilter();

        $this->assertEquals(self::something, $fileFilter->getPath()->getIn()->getValues()[0], "invalid path in value at index 0");
        $this->assertEquals(self::something, $fileFilter->getPath()->getIn()->getValues()[1], "invalid path in value at index 1");
    }
}
