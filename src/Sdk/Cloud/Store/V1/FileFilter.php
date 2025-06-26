<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

final class FileFilter {
    private \Cerbos\Cloud\Store\V1\FileFilter $fileFilter;

    /**
     * @param array $data {
     *     @type \Cerbos\Sdk\Cloud\Store\V1\StringMatch $path
     * }
     */
    private function __construct(array $data) {
        $this->fileFilter = new \Cerbos\Cloud\Store\V1\FileFilter([
            'path' => $data['path']->toStringMatch()
        ]);
    }

    /**
     * @param array $data {
     *     @type \Cerbos\Cloud\Store\V1\StringMatch $path
     * }
     * @return FileFilter
     */
    public static function newInstance(array $data): FileFilter {
        return new FileFilter($data);
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\FileFilter
     */
    public function toFileFilter(): \Cerbos\Cloud\Store\V1\FileFilter {
        return $this->fileFilter;
    }
}
