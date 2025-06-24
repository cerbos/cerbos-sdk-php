<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

namespace Cerbos\Test\Sdk\Cloud\Store\V1;

use Cerbos\Sdk\Cloud\Store\V1\File;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-suppress PossiblyNullReference
 */
final class FileTest extends TestCase
{
    private const string contents = "contents";
    private const string path = "path";

    public function testAll(): void {
        $file = File::newInstance([
            'path' => self::path,
            'contents' => self::contents
        ])->toFile();

        $this->assertEquals(self::contents, $file->getContents(), "invalid contents");
        $this->assertEquals(self::path, $file->getPath(), "invalid path");
    }
}
