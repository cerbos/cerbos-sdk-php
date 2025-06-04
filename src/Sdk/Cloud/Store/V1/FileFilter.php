<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

use \Cerbos\Sdk\Cloud\Store\V1\StringMatch;

final class FileFilter {
    private \Cerbos\Cloud\Store\V1\FileFilter $fileFilter;

    private function __construct() {
        $this->fileFilter = new \Cerbos\Cloud\Store\V1\FileFilter();
    }

    /**
     * @return FileFilter
     */
    public static function newInstance(): FileFilter {
        return new FileFilter();
    }

    /**
     * @param StringMatch $path
     * @return $this
     */
    public function withPath($path): FileFilter{    
        $this->fileFilter->setPath($path->toStringMatch());
        return $this;
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\FileFilter
     */
    public function toFileFilter(): \Cerbos\Cloud\Store\V1\FileFilter {
        return $this->fileFilter;
    }
}
