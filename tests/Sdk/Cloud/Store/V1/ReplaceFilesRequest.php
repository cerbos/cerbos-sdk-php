<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

namespace Cerbos\Test\Sdk\Cloud\Store\V1;

use Cerbos\Sdk\Cloud\Store\V1\ChangeDetails;
use Cerbos\Sdk\Cloud\Store\V1\ChangeDetails\Uploader;
use Cerbos\Sdk\Cloud\Store\V1\ChangeDetails\Git;
use Cerbos\Sdk\Cloud\Store\V1\ReplaceFilesRequest;
use Cerbos\Sdk\Cloud\Store\V1\ReplaceFilesRequest\Condition;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-suppress PossiblyNullReference
 */
final class ReplaceFilesRequestTest extends TestCase
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

    private const string contents = "<contents>";
    
    public function setUp(): void
    {
        parent::setUp();
        $this->authorDate = new \Google\Protobuf\Timestamp();
        $this->commitDate = new \Google\Protobuf\Timestamp();
    }

    public function testAll(): void {
        $uploader = Uploader::newInstance([
            'name' => self::name
        ]);

        $git = Git::newInstance([
            'author' => self::author,
            'committer' => self::committer,
            'hash' => self::hash,
            'message' => self::message,
            'repo' => self::repo,
            'ref' => self::ref,
            'author_date' => $this->authorDate,
            'commit_date' => $this->commitDate
        ]);

        $changeDetails = ChangeDetails::newInstance([
            'description' => self::description,
            'uploader' => $uploader
        ])->withGit($git);

        $condition = Condition::newInstance([
            'store_version_must_equal' => 1
        ]);

        $request = ReplaceFilesRequest::newInstance([
            'store_id' => self::storeId,
            'zipped_contents' => self::contents
        ])
            ->withChangeDetails($changeDetails)
            ->withCondition($condition)
            ->toReplaceFilesRequest();

        $this->assertEquals(self::storeId, $request->getStoreId(), "invalid storeId");
        $this->assertEquals($changeDetails->toChangeDetails(), $request->getChangeDetails(), "invalid changeDetails");
        $this->assertEquals($condition->toCondition(), $request->getCondition(), "invalid condition");
        $this->assertEquals(self::contents, $request->getZippedContents(), "invalid zipped contents");
    }

    public function testOptional(): void {
        $request = ReplaceFilesRequest::newInstance([
            'store_id' => self::storeId,
            'zipped_contents' => self::contents
        ])->toReplaceFilesRequest();

        $this->assertEquals(self::storeId, $request->getStoreId(), "invalid storeId");
    }
}
