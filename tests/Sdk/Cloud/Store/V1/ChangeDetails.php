<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

namespace Cerbos\Test\Sdk\Cloud\Store\V1\ChangeDetails;

use Cerbos\Sdk\Cloud\Store\V1\ChangeDetails;
use Cerbos\Sdk\Cloud\Store\V1\ChangeDetails\Git;
use Cerbos\Sdk\Cloud\Store\V1\ChangeDetails\Internal;
use Cerbos\Sdk\Cloud\Store\V1\ChangeDetails\Uploader;
use Cerbos\Sdk\Cloud\Store\V1\ChangeDetails\MetadataValue;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-suppress PossiblyNullReference
 */
final class ChangeDetailsTest extends TestCase
{
    private const string name = "name";

    private const string author = 'author';
    private const string committer = 'committer';
    private const string hash = 'hash';
    private const string message = 'message';
    private const string repo = 'repo';
    private const string ref = 'ref';
    private \Google\Protobuf\Timestamp $authorDate;
    private \Google\Protobuf\Timestamp $commitDate;

    private const string source = "source";
    private const string key1 = "key1";
    private const string key2 = "key2";
    private MetadataValue $value1;
    private MetadataValue $value2;
    
    private const string description = "description";

    public function setUp(): void
    {
        parent::setUp();
        $this->authorDate = new \Google\Protobuf\Timestamp();
        $this->commitDate = new \Google\Protobuf\Timestamp();
        
        $this->value1 = MetadataValue::boolValue(true);
        $this->value2 = MetadataValue::stringValue("stringValue");
    }

    public function testWithGit(): void {
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
            ->withGit($git)
            ->toChangeDetails();

        $this->assertEquals(self::description, $changeDetails->getDescription(), "invalid description");

        $this->assertEquals(self::name, $changeDetails->getUploader()->getName(), "invalid name");

        $this->assertEquals(self::author, $changeDetails->getGit()->getAuthor(), "invalid author");
        $this->assertEquals(self::committer, $changeDetails->getGit()->getCommitter(), "invalid committer");
        $this->assertEquals(self::hash, $changeDetails->getGit()->getHash(), "invalid hash");
        $this->assertEquals(self::message, $changeDetails->getGit()->getMessage(), "invalid message");
        $this->assertEquals(self::repo, $changeDetails->getGit()->getRepo(), "invalid repo");
        $this->assertEquals(self::ref, $changeDetails->getGit()->getRef(), "invalid ref");
        $this->assertEquals($this->authorDate, $changeDetails->getGit()->getAuthorDate(), "invalid authorDate");
        $this->assertEquals($this->commitDate, $changeDetails->getGit()->getCommitDate(), "invalid commitDate");
    }

    public function testWithInternal(): void {
        $uploader = Uploader::newInstance()
            ->withName(self::name);

        $internal = Internal::newInstance()
            ->withSource(self::source)
            ->withMetadata(self::key1, $this->value1)
            ->withMetadata(self::key2, $this->value2);

        $changeDetails = ChangeDetails::newInstance()
            ->withDescription(self::description)
            ->withUploader($uploader)
            ->withInternal($internal)
            ->toChangeDetails();

        $this->assertEquals(self::description, $changeDetails->getDescription(), "invalid description");
        
        $this->assertEquals(self::name, $changeDetails->getUploader()->getName(), "invalid name");

        $this->assertEquals(self::source, $changeDetails->getInternal()->getSource(), "invalid source");
        $this->assertArrayHasKey(self::key1, $changeDetails->getInternal()->getMetadata(), "missing metadata key1");
        $this->assertArrayHasKey(self::key2, $changeDetails->getInternal()->getMetadata(), "missing metadata key2");
        $this->assertTrue((bool)$changeDetails->getInternal()->getMetadata()->offsetGet(self::key1)->getBoolValue(), "invalid metadata bool value");
        $this->assertEquals("stringValue", $changeDetails->getInternal()->getMetadata()->offsetGet(self::key2)->getStringValue(), "invalid metadata string value");
    }
}
