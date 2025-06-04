<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

final class File {
    private \Cerbos\Cloud\Store\V1\File $file;

    public function __construct(?\Cerbos\Cloud\Store\V1\File $file) {
        if (!isset($file)) {
            $this->file = new \Cerbos\Cloud\Store\V1\File();
            return;
        }

        $this->file = $file;
    }

    /**
     * @return File
     */
    public static function newInstance(): File {
        return new File(null);
    }

    /**
     * @param string $path
     * @return $this
     */
    public function withPath($path): File{
        $this->file->setPath($path);
        return $this;
    }

    /**
     * @param string $contents
     * @return $this
     */
    public function withContents($contents): File {
        $this->file->setContents($contents);
        return $this;
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\File
     */
    public function toFile(): \Cerbos\Cloud\Store\V1\File {
        return $this->file;
    }
}
