<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

final class File
{
    private \Cerbos\Cloud\Store\V1\File $file;

    public function __construct(\Cerbos\Cloud\Store\V1\File $file)
    {
        $this->file = $file;
    }

    /**
     * @param string $path 
     * @param string $contents
     * @return File
     */
    public static function newInstance(string $path, string $contents): File
    {
        return new File(
            new \Cerbos\Cloud\Store\V1\File([
                'path' => $path,
                'contents' => $contents
            ])
        );
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->file->getPath();
    }

    /**
     * @return string
     */
    public function getContents()
    {
        return $this->file->getContents();
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\File
     */
    public function toFile(): \Cerbos\Cloud\Store\V1\File
    {
        return $this->file;
    }
}
