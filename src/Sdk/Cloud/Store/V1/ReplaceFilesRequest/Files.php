<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1\ReplaceFilesRequest;

use Cerbos\Sdk\Cloud\Store\V1\File;

final class Files {
    private \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Files $files;

    /**
     * @param File[] $files
     */
    private function __construct(
        File ...$files
    ) {
        $this->files = new \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Files();
        $newFiles = array();
        foreach ($files as $file) {
            $newFiles[] = $file->toFile();
        }

        $this->files->setFiles($newFiles);
    }

    /**
     * @param File[] $files
     * @return Files
     */
    public static function newInstance(
        File ...$files
    ): Files {
        return new Files(...$files);
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Files
     */
    public function toFiles(): \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Files {
        return $this->files;
    }
}
