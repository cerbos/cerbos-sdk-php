<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

final class FileOp {
    private \Cerbos\Cloud\Store\V1\FileOp $fileOp;

    /**
     * @param File|null $addOrUpdate
     * @param string|null $delete
     */
    private function __construct(
        ?File $addOrUpdate = null,
        ?string $delete = null
    ) {
        if (isset($addOrUpdate)) {
            $this->fileOp = new \Cerbos\Cloud\Store\V1\FileOp([
                'add_or_update' => $addOrUpdate->toFile(),
            ]);
        }
        elseif(isset($delete)) {
            $this->fileOp = new \Cerbos\Cloud\Store\V1\FileOp([
                'delete' => $delete
            ]);
        }
        else {
            throw new \Exception("addOrUpdate or delete must be specified");
        }
    }

    /**
     * @param string $path
     * @param string $contents
     * @return FileOp
     */
    public static function addOrUpdate(
        string $path,
        string $contents
    ): FileOp {
        return new FileOp(
            addOrUpdate: File::newInstance($path, $contents)
        );
    }

    /**
     * @param string $delete
     * @return FileOp
     */
    public static function delete(
        $delete
    ): FileOp {
        return new FileOp(delete: $delete);
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\FileOp
     */
    public function toFileOp(): \Cerbos\Cloud\Store\V1\FileOp {
        return $this->fileOp;
    }
}
