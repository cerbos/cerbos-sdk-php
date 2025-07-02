<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

use Cerbos\Sdk\Cloud\Store\V1\StringMatch\InList;

final class FileFilter {
    private \Cerbos\Cloud\Store\V1\FileFilter $fileFilter;

    /**
     * @param \Cerbos\Cloud\Store\V1\StringMatch $path
     */
    private function __construct(
        \Cerbos\Cloud\Store\V1\StringMatch $path
    ) {
        $this->fileFilter = new \Cerbos\Cloud\Store\V1\FileFilter([
            'path' => $path
        ]);
    }

    /**
     * @param string $contains
     * @return FileFilter
     */
    public static function pathContains(
        string $contains
    ): FileFilter
    {
        $stringMatch = new \Cerbos\Cloud\Store\V1\StringMatch([
            'contains' => $contains
        ]);

        return new FileFilter($stringMatch);
    }

    /**
     * @param string $equals
     * @return FileFilter
     */
    public static function pathEquals(
        string $equals
    ): FileFilter
    {
        $stringMatch = new \Cerbos\Cloud\Store\V1\StringMatch([
            'equals' => $equals
        ]);

        return new FileFilter($stringMatch);
    }

    /**
     * @param InList $inList
     * @return FileFilter
     */
    public static function pathIn(
        InList $inList
    ): FileFilter
    {
        $stringMatch = new \Cerbos\Cloud\Store\V1\StringMatch([
            'in' => $inList->toInList()
        ]);

        return new FileFilter($stringMatch);
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\FileFilter
     */
    public function toFileFilter(): \Cerbos\Cloud\Store\V1\FileFilter {
        return $this->fileFilter;
    }
}
