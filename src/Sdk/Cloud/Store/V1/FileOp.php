<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

final class FileOp {
    private \Cerbos\Cloud\Store\V1\FileOp $fileOp;

    /**
     * @param array $data {
     *     @type \Cerbos\Cloud\Store\V1\File $add_or_update
     *     @type string $delete
     * }
     */
    private function __construct($data) {
        $this->fileOp = new \Cerbos\Cloud\Store\V1\FileOp($data);
    }

    /**
     * @param array $data {
     *     @type string $path
     *     @type string $contents
     * }
     * @return FileOp
     */
    public static function addOrUpdate($data): FileOp {
        return new FileOp([
            'add_or_update' => File::newInstance($data)->toFile()
        ]);
    }

    /**
     * @param string $delete
     * @return FileOp
     */
    public static function delete($delete): FileOp {
        return new FileOp([
            'delete' => $delete
        ]);
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\FileOp
     */
    public function toFileOp(): \Cerbos\Cloud\Store\V1\FileOp {
        return $this->fileOp;
    }
}
