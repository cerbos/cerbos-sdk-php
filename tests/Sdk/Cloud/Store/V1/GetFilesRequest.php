<?php

// Copyright 2021-2026 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

namespace Cerbos\Test\Sdk\Cloud\Store\V1;

use Cerbos\Sdk\Cloud\Store\V1\GetFilesRequest;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-suppress PossiblyNullReference
 */
final class GetFilesRequestTest extends TestCase
{
    private const string storeId = "MD1LAP5BJNA9";
    private const string file = "policy.yaml";
    private const string file1 = "policy1.yaml";

    public function testAll(): void
    {
        $request = GetFilesRequest::newInstance(self::storeId, self::file, self::file1)->toGetFilesRequest();

        $this->assertEquals(self::storeId, $request->getStoreId(), "invalid storeId");
        $this->assertEquals(self::file, $request->getFiles()[0], "invalid files[0]");
        $this->assertEquals(self::file1, $request->getFiles()[1], "invalid files[1]");
    }
}
