<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

namespace Cerbos\Test\Sdk\Cloud\Store\V1\ChangeDetails;

use Cerbos\Sdk\Cloud\Store\V1\ChangeDetails\Git;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-suppress PossiblyNullReference
 */
final class GitTest extends TestCase
{
    private const string author = 'author';
    private const string committer = 'committer';
    private const string hash = 'hash';
    private const string message = 'message';
    private const string repo = 'repo';
    private const string ref = 'ref';
    private \Google\Protobuf\Timestamp $authorDate;
    private \Google\Protobuf\Timestamp $commitDate;
    
    public function setUp(): void
    {
        parent::setUp();
        $this->authorDate = new \Google\Protobuf\Timestamp();
        $this->commitDate = new \Google\Protobuf\Timestamp();
    }

    public function testAll(): void {
        $git = Git::newInstance(
            repo: self::repo,
            ref: self::ref,
            hash: self::hash,
            message: self::message,
            committer: self::committer,
            commitDate: $this->commitDate,
            author: self::author,
            authorDate: $this->authorDate
        )->toGit();

        $this->assertEquals(self::author, $git->getAuthor(), "invalid author");
        $this->assertEquals(self::committer, $git->getCommitter(), "invalid committer");
        $this->assertEquals(self::hash, $git->getHash(), "invalid hash");
        $this->assertEquals(self::message, $git->getMessage(), "invalid message");
        $this->assertEquals(self::repo, $git->getRepo(), "invalid repo");
        $this->assertEquals(self::ref, $git->getRef(), "invalid ref");
        $this->assertEquals($this->authorDate, $git->getAuthorDate(), "invalid authorDate");
        $this->assertEquals($this->commitDate, $git->getCommitDate(), "invalid commitDate");
    }
}
