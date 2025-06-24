<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

namespace Cerbos\Test\Sdk\Cloud\Store\V1;

use Cerbos\Sdk\Cloud\Store\V1\File;
use Cerbos\Sdk\Cloud\Store\V1\FileOp;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-suppress PossiblyNullReference
 */
final class FileOpTest extends TestCase
{
    private const string contents = "contents";
    private const string path = "path";

    public function testWithAddOrUpdate(): void {
        $file = File::newInstance([
            'path' => self::path,
            'contents' => self::contents
        ]);

        $fileOp = FileOp::newInstance()
            ->withAddOrUpdate($file)
            ->toFileOp();

        $this->assertEquals(self::contents, $fileOp->getAddOrUpdate()->getContents(), "invalid contents");
        $this->assertEquals(self::path, $fileOp->getAddOrUpdate()->getPath(), "invalid path");
    }

    public function testWithDelete(): void {
        $fileOp = FileOp::newInstance()
            ->withDelete(self::path)
            ->toFileOp();

        $this->assertEquals(self::path, $fileOp->getDelete(), "invalid delete");
    }
}
