<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1\ChangeDetails;

final class Git {
    private \Cerbos\Cloud\Store\V1\ChangeDetails\Git $git;

    /**
     * @param array $data {
     *     @type string $repo
     *     @type string $ref
     *     @type string $hash
     *     @type string $message
     *     @type string $committer
     *     @type \Google\Protobuf\Timestamp $commit_date
     *     @type string $author
     *     @type \Google\Protobuf\Timestamp $author_date
     * }
     */
    private function __construct(array $data) {
        $this->git = new \Cerbos\Cloud\Store\V1\ChangeDetails\Git($data);
    }

    /**
     * @param array $data {
     *     @type string $repo
     *     @type string $ref
     *     @type string $hash
     *     @type string $message
     *     @type string $committer
     *     @type \Google\Protobuf\Timestamp $commit_date
     *     @type string $author
     *     @type \Google\Protobuf\Timestamp $author_date
     * }
     * @return Git
     */
    public static function newInstance(array $data): Git {
        return new Git($data);
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\ChangeDetails\Git
     */
    public function toGit(): \Cerbos\Cloud\Store\V1\ChangeDetails\Git {
        return $this->git;
    }
}
