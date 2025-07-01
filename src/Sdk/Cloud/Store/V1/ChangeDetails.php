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

    /**
     * @param string $description
     * @param Uploader $uploader
     * @param Git|null $git
     * @param Internal|null $internal
     * @throws Exception when both $git and $internal parameters are not set
     */
    private function __construct(
        string $description,
        Uploader $uploader,
        ?Git $git = null,
        ?Internal $internal = null,
    ) {
        if (isset($git)) {
            $this->changeDetails = new \Cerbos\Cloud\Store\V1\ChangeDetails([
                'description' => $description,
                'uploader' => $uploader->toUploader(),
                'git' => $git->toGit(),
            ]);
        }
        elseif(isset($internal)) {
            $this->changeDetails = new \Cerbos\Cloud\Store\V1\ChangeDetails([
                'description' => $description,
                'uploader' => $uploader->toUploader(),
                'internal' => $internal->toInternal(),
            ]);
        }
        else {
            throw new \Exception("Git or internal must be specified");
        }
    }

    /**
     * @param string $description
     * @param Uploader $uploader
     * @param Git $git
     * @return ChangeDetails
     */
    public static function git(
        string $description,
        Uploader $uploader,
        Git $git
    ): ChangeDetails
    {
        return new ChangeDetails(
            description: $description,
            uploader: $uploader,
            git: $git
        );
    }

    /**
     * @param string $description
     * @param Uploader $uploader
     * @param Internal $internal
     * @return ChangeDetails
     */
    public static function internal(
        string $description,
        Uploader $uploader,
        Internal $internal
    ): ChangeDetails
    {
        return new ChangeDetails(
            description: $description,
            uploader: $uploader,
            internal: $internal
        );
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\ChangeDetails
     */
    public function toChangeDetails(): \Cerbos\Cloud\Store\V1\ChangeDetails {
        return $this->changeDetails;
    }
}
