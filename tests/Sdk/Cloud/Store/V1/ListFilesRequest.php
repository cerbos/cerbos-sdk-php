<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

namespace Cerbos\Test\Sdk\Cloud\Store\V1;

use Cerbos\Sdk\Cloud\Store\V1\FileFilter;
use Cerbos\Sdk\Cloud\Store\V1\ListFilesRequest;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-suppress PossiblyNullReference
 */
final class ListFilesRequestTest extends TestCase
{
    private const string equals = "equals";
    private const string storeId = "MD1LAP5BJNA9";

    public function testAll(): void
    {
        $request = ListFilesRequest::newInstance(self::storeId)->toListFilesRequest();

        $this->assertEquals(self::storeId, $request->getStoreId(), "invalid storeId");
    }

    public function testWithFilter(): void
    {
        $fileFilter = FileFilter::pathEquals(self::equals);
        $request = ListFilesRequest::withFilter(self::storeId, $fileFilter)->toListFilesRequest();

        $this->assertEquals(self::storeId, $request->getStoreId(), "invalid storeId");
        $this->assertEquals(self::equals, $request->getFilter()->getPath()->getEquals(), "invalid equals");
    }
}
