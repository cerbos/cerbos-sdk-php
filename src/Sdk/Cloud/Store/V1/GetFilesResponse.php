<?php

// Copyright 2021-2026 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

use Cerbos\Sdk\Cloud\Store\V1\File;

final class GetFilesResponse
{
    private \Cerbos\Cloud\Store\V1\GetFilesResponse $response;

    /**
     * @param \Cerbos\Cloud\Store\V1\GetFilesResponse $response
     */
    public function __construct(\Cerbos\Cloud\Store\V1\GetFilesResponse $response)
    {
        $this->response = $response;
    }

    /**
     * @return int
     */
    public function getStoreVersion(): int
    {
        return (int)$this->response->getStoreVersion();
    }

    /**
     * @return array<File>
     */
    public function getFiles(): array
    {
        $files = array();
        foreach ($this->response->getFiles() as $file) {
            $files[] = new File($file);
        }

        return $files;
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\GetFilesResponse
     */
    public function toGetFilesResponse(): \Cerbos\Cloud\Store\V1\GetFilesResponse
    {
        return $this->response;
    }
}
