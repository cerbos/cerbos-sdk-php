<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

final class FileOp {
    private \Cerbos\Cloud\Store\V1\FileOp $fileOp;

    private function __construct() {
        $this->fileOp = new \Cerbos\Cloud\Store\V1\FileOp();
    }

    /**
     * @return FileOp
     */
    public static function newInstance(): FileOp {
        return new FileOp();
    }

    /**
     * @param File $file
     * @return $this
     */
    public function withAddOrUpdate($file): FileOp {
        $this->fileOp->setAddOrUpdate($file->toFile());
        return $this;
    }

    /**
     * @param string $delete
     * @return $this
     */
    public function withDelete($delete): FileOp {
        $this->fileOp->setDelete($delete);
        return $this;
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\FileOp
     */
    public function toFileOp(): \Cerbos\Cloud\Store\V1\FileOp {
        return $this->fileOp;
    }
}
