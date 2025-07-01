<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

namespace Cerbos\Test\Sdk\Cloud\Store\V1;

use Cerbos\Sdk\Cloud\Store\V1\ChangeDetails;
use Cerbos\Sdk\Cloud\Store\V1\ChangeDetails\Uploader;
use Cerbos\Sdk\Cloud\Store\V1\ChangeDetails\Git;
use Cerbos\Sdk\Cloud\Store\V1\FileOp;
use Cerbos\Sdk\Cloud\Store\V1\ModifyFilesRequest;
use Cerbos\Sdk\Cloud\Store\V1\ModifyFilesRequest\Condition;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-suppress PossiblyNullReference
 */
final class ModifyFilesRequestTest extends TestCase
{
    private const string storeId = "MD1LAP5BJNA9";

    private const string name = "name";
    private const string author = 'author';
    private const string committer = 'committer';
    private const string hash = 'hash';
    private const string message = 'message';
    private const string repo = 'repo';
    private const string ref = 'ref';
    private \Google\Protobuf\Timestamp $authorDate;
    private \Google\Protobuf\Timestamp $commitDate;

    private const string description = "description";

    private const string file = "policy.yaml";
    
    public function setUp(): void
    {
        parent::setUp();
        $this->authorDate = new \Google\Protobuf\Timestamp();
        $this->commitDate = new \Google\Protobuf\Timestamp();
    }

    public function testAll(): void {
        $uploader = Uploader::newInstance(self::name);

        $git = Git::newInstance(
            repo: self::repo,
            ref: self::ref,
            hash: self::hash,
            message: self::message,
            committer: self::committer,
            commitDate: $this->commitDate,
            author: self::author,
            authorDate: $this->authorDate
        );

        $changeDetails = ChangeDetails::git(self::description, $uploader, $git);

        $condition = Condition::storeVersionMustEqual(1);

        $request = ModifyFilesRequest::newInstance(self::storeId, $condition, $changeDetails, FileOp::delete(self::file))
            ->toModifyFilesRequest();

        $this->assertEquals(self::storeId, $request->getStoreId(), "invalid storeId");
        $this->assertEquals($changeDetails->toChangeDetails(), $request->getChangeDetails(), "invalid changeDetails");
        $this->assertEquals($condition->toCondition(), $request->getCondition(), "invalid condition");
        $this->assertEquals(self::file, $request->getOperations()[0]->getDelete(), "invalid operations");
    }

    public function testOptional(): void {
        $request = ModifyFilesRequest::newInstance(self::storeId, null, null, FileOp::delete(self::file))
            ->toModifyFilesRequest();

        $this->assertEquals(self::storeId, $request->getStoreId(), "invalid storeId");
    }
}
