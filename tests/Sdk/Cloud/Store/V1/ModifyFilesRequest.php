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
        $uploader = Uploader::newInstance()
            ->withName(self::name);

        $git = Git::newInstance()
            ->withAuthor(self::author)
            ->withCommitter(self::committer)
            ->withHash(self::hash)
            ->withMessage(self::message)
            ->withRepo(self::repo)
            ->withRef(self::ref)
            ->withAuthorDate($this->authorDate)
            ->withCommitDate($this->commitDate);

        $changeDetails = ChangeDetails::newInstance()
            ->withDescription(self::description)
            ->withUploader($uploader)
            ->withGit($git);

        $condition = Condition::newInstance()
            ->withStoreVersionMustEqual(1);

        $fileOps = [
            FileOp::newInstance()
                ->withDelete(self::file)
        ];

        $request = ModifyFilesRequest::newInstance()
            ->withStoreId(self::storeId)
            ->withChangeDetails($changeDetails)
            ->withCondition($condition)
            ->withOperations($fileOps)
            ->toModifyFilesRequest();

        $this->assertEquals(self::storeId, $request->getStoreId(), "invalid storeId");
        $this->assertEquals($changeDetails->toChangeDetails(), $request->getChangeDetails(), "invalid changeDetails");
        $this->assertEquals($condition->toCondition(), $request->getCondition(), "invalid condition");
        $this->assertEquals($fileOps[0]->toFileOp(), $request->getOperations()[0], "invalid operations");
    }

    public function testOptional(): void {
        $fileOps = [
            FileOp::newInstance()
                ->withDelete(self::file)
        ];

        $request = ModifyFilesRequest::newInstance()
            ->withStoreId(self::storeId)
            ->withOperations($fileOps)
            ->toModifyFilesRequest();

        $this->assertEquals(self::storeId, $request->getStoreId(), "invalid storeId");
    }
}
