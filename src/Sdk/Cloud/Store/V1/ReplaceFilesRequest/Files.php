<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1\ReplaceFilesRequest;

final class Files {
    private \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Files $files;

    /**
     * @param array $data {
     *     @type \Cerbos\Sdk\Cloud\Store\V1\File[] $files
     * }
     */
    private function __construct(array $data) {
        $this->files = new \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Files();
        if (isset($data['files'])) {
            $files = array();
            foreach ($data['files'] as $file) {
                $files[] = $file->toFile();
            }

            $this->files->setFiles($files);
        }
    }

    /**
     * @param array $data {
     *     @type \Cerbos\Sdk\Cloud\Store\V1\File[] $files
     * }
     * @return Files
     */
    public static function newInstance(array $data): Files {
        return new Files($data);
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Files
     */
    public function toFiles(): \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Files {
        return $this->files;
    }
}
