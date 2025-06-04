<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1\ChangeDetails;

final class Git {
    private \Cerbos\Cloud\Store\V1\ChangeDetails\Git $git;

    private function __construct() {
        $this->git = new \Cerbos\Cloud\Store\V1\ChangeDetails\Git();
    }

    /**
     * @return Git
     */
    public static function newInstance(): Git {
        return new Git();
    }

    /**
     * @param string $author
     * @return $this
     */
    public function withAuthor($author): Git
    {
        $this->git->setAuthor($author);
        return $this;
    }

    /**
     * @param string $committer
     * @return $this
     */
    public function withCommitter($committer): Git
    {
        $this->git->setCommitter($committer);
        return $this;
    }

    /**
     * @param string $hash
     * @return $this
     */
    public function withHash($hash): Git
    {
        $this->git->setHash($hash);
        return $this;
    }

    /**
     * @param string $message
     * @return $this
     */
    public function withMessage($message): Git
    {
        $this->git->setMessage($message);
        return $this;
    }

    /**
     * @param string $repo
     * @return $this
     */
    public function withRepo($repo): Git
    {
        $this->git->setRepo($repo);
        return $this;
    }

    /**
     * @param string $ref
     * @return $this
     */
    public function withRef($ref): Git
    {
        $this->git->setRef($ref);
        return $this;
    }

    /**
     * @param \Google\Protobuf\Timestamp $authorDate
     * @return $this
     */
    public function withAuthorDate($authorDate): Git
    {
        $this->git->setAuthorDate($authorDate);
        return $this;
    }

    /**
     * @param \Google\Protobuf\Timestamp $commitDate
     * @return $this
     */
    public function withCommitDate($commitDate): Git
    {
        $this->git->setCommitDate($commitDate);
        return $this;
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\ChangeDetails\Git
     */
    public function toGit(): \Cerbos\Cloud\Store\V1\ChangeDetails\Git {
        return $this->git;
    }
}
