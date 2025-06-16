<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

namespace Cerbos\Test\Sdk\Cloud\Store\V1;

use Cerbos\Sdk\Cloud\Store\V1\FileFilter;
use Cerbos\Sdk\Cloud\Store\V1\ListFilesRequest;
use Cerbos\Sdk\Cloud\Store\V1\StringMatch;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-suppress PossiblyNullReference
 */
final class ListFilesRequestTest extends TestCase
{
    private const string equals = "equals";
    private const string storeId = "MD1LAP5BJNA9";

    public function testAll(): void {
        $stringMatch = StringMatch::newInstance()
            ->withEquals(self::equals);

        $fileFilter = FileFilter::newInstance()
            ->withPath($stringMatch);

        $request = ListFilesRequest::newInstance()
            ->withStoreId(self::storeId)
            ->withFilter($fileFilter)
            ->toListFilesRequest();

        $this->assertEquals(self::storeId, $request->getStoreId(), "invalid storeId");
        $this->assertEquals(self::equals, $request->getFilter()->getPath()->getEquals(), "invalid equals");
    }

    public function testOptional(): void {
        $request = ListFilesRequest::newInstance()
            ->withStoreId(self::storeId)
            ->toListFilesRequest();

        $this->assertEquals(self::storeId, $request->getStoreId(), "invalid storeId");
    }
}
