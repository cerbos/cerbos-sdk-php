<?php

// Copyright 2021-2026 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1\ChangeDetails;

final class Git
{
    private \Cerbos\Cloud\Store\V1\ChangeDetails\Git $git;

    /**
     * @param string $repo
     * @param string $ref
     * @param string $hash
     * @param string $message
     * @param string $committer
     * @param \Google\Protobuf\Timestamp $commitDate
     * @param string $author
     * @param \Google\Protobuf\Timestamp $authorDate
     */
    private function __construct(
        string $repo,
        string $ref,
        string $hash,
        string $message,
        string $committer,
        \Google\Protobuf\Timestamp $commitDate,
        string $author,
        \Google\Protobuf\Timestamp $authorDate
    ) {
        $this->git = new \Cerbos\Cloud\Store\V1\ChangeDetails\Git([
            'repo' => $repo,
            'ref' => $ref,
            'hash' => $hash,
            'message' => $message,
            'committer' => $committer,
            'commit_date' => $commitDate,
            'author' => $author,
            'author_date' => $authorDate
        ]);
    }

    /**
     * @param string $repo
     * @param string $ref
     * @param string $hash
     * @param string $message
     * @param string $committer
     * @param \Google\Protobuf\Timestamp $commitDate
     * @param string $author
     * @param \Google\Protobuf\Timestamp $authorDate
     * @return Git
     */
    public static function newInstance(
        string $repo,
        string $ref,
        string $hash,
        string $message,
        string $committer,
        \Google\Protobuf\Timestamp $commitDate,
        string $author,
        \Google\Protobuf\Timestamp $authorDate
    ): Git {
        return new Git($repo, $ref, $hash, $message, $committer, $commitDate, $author, $authorDate);
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\ChangeDetails\Git
     */
    public function toGit(): \Cerbos\Cloud\Store\V1\ChangeDetails\Git
    {
        return $this->git;
    }
}
