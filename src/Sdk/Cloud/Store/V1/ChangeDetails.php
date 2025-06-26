<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

use \Cerbos\Sdk\Cloud\Store\V1\ChangeDetails\Git;
use \Cerbos\Sdk\Cloud\Store\V1\ChangeDetails\Internal;

final class ChangeDetails {
    private \Cerbos\Cloud\Store\V1\ChangeDetails $changeDetails;

    /**
     * @param array $data {
     *     @type string $description
     *     @type \Cerbos\Sdk\Cloud\Store\V1\ChangeDetails\Uploader $uploader
     * }
     */
    private function __construct(array $data) {
        $this->changeDetails = new \Cerbos\Cloud\Store\V1\ChangeDetails([
            'description' => $data['description'],
            'uploader' => $data['uploader']->toUploader()
        ]);
    }

    /**
     * @param array $data {
     *     @type string $description
     *     @type \Cerbos\Sdk\Cloud\Store\V1\ChangeDetails\Uploader $uploader
     * }
     * @return ChangeDetails
     */
    public static function newInstance(array $data): ChangeDetails {
        return new ChangeDetails($data);
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
