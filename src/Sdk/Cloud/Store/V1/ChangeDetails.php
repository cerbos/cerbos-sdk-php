<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

use \Cerbos\Sdk\Cloud\Store\V1\ChangeDetails\Git;
use \Cerbos\Sdk\Cloud\Store\V1\ChangeDetails\Internal;
use \Cerbos\Sdk\Cloud\Store\V1\ChangeDetails\Uploader;

final class ChangeDetails {
    private \Cerbos\Cloud\Store\V1\ChangeDetails $changeDetails;

    private function __construct() {
        $this->changeDetails = new \Cerbos\Cloud\Store\V1\ChangeDetails();
    }

    /**
     * @return ChangeDetails
     */
    public static function newInstance(): ChangeDetails {
        return new ChangeDetails();
    }

    /**
     * @param string $description
     * @return $this
     */
    public function withDescription($description): ChangeDetails
    {
        $this->changeDetails->setDescription($description);
        return $this;
    }

    /**
     * @param Uploader $uploader
     * @return $this
     */
    public function withUploader($uploader): ChangeDetails
    {
        $this->changeDetails->setUploader($uploader->toUploader());
        return $this;
    }

    /**
     * @param Git $git
     * @return $this
     */
    public function withGit($git): ChangeDetails
    {
        $this->changeDetails->setGit($git->toGit());
        return $this;
    }

    /**
     * @param Internal $internal
     * @return $this
     */
    public function withInternal($internal): ChangeDetails
    {
        $this->changeDetails->setInternal($internal->toInternal());
        return $this;
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\ChangeDetails
     */
    public function toChangeDetails(): \Cerbos\Cloud\Store\V1\ChangeDetails {
        return $this->changeDetails;
    }
}
