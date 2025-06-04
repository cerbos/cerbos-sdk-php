<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

namespace Cerbos\Test\Sdk\Cloud\Store\V1;

use Cerbos\Sdk\Cloud\Store\V1\FileFilter;
use Cerbos\Sdk\Cloud\Store\V1\StringMatch;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-suppress PossiblyNullReference
 */
final class FileFilterTest extends TestCase
{
    private const string equals = "equals";
    private const string path = "path";

    public function testAll(): void {
        $stringMatch = StringMatch::newInstance()
            ->withEquals(self::equals);

        $fileFilter = FileFilter::newInstance()
            ->withPath($stringMatch)
            ->toFileFilter();

        $this->assertEquals(self::path, $fileFilter->getPath(), "invalid path");
    }
}
