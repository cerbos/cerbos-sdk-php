<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

final class FileFilter {
    private \Cerbos\Cloud\Store\V1\FileFilter $fileFilter;

    /**
     * @param array $data {
     *     @type \Cerbos\Cloud\Store\V1\StringMatch $path
     * }
     */
    private function __construct(array $data) {
        $this->fileFilter = new \Cerbos\Cloud\Store\V1\FileFilter($data);
    }

    /**
     * @param string $equals
     * @return FileFilter
     */
    public static function pathEquals($equals): FileFilter
    {
        $stringMatch = new \Cerbos\Cloud\Store\V1\StringMatch([
            'equals' => $equals
        ]);
        return new FileFilter([
            'path' => $stringMatch
        ]);
    }

    /**
     * @param InList $inList
     * @return FileFilter
     */
    public static function pathIn($inList): FileFilter
    {
        $stringMatch = new \Cerbos\Cloud\Store\V1\StringMatch([
            'in' => $inList->toInList()
        ]);
        return new FileFilter([
            'path' => $stringMatch
        ]);
    }

    /**
     * @param string $like
     * @return FileFilter
     */
    public static function pathLike($like): FileFilter
    {
        $stringMatch = new \Cerbos\Cloud\Store\V1\StringMatch([
            'like' => $like
        ]);
        return new FileFilter([
            'path' => $stringMatch
        ]);
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\FileFilter
     */
    public function toFileFilter(): \Cerbos\Cloud\Store\V1\FileFilter {
        return $this->fileFilter;
    }
}
