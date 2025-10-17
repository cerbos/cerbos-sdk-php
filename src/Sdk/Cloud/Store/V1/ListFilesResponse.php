<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

use Cerbos\Sdk\Cloud\Store\V1\File;

final class ListFilesResponse
{
    private \Cerbos\Cloud\Store\V1\ListFilesResponse $response;

    /**
     * @param \Cerbos\Cloud\Store\V1\ListFilesResponse $response
     */
    public function __construct(\Cerbos\Cloud\Store\V1\ListFilesResponse $response)
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
     * @return array<string>
     */
    public function getFiles(): array
    {
        $files = array();
        foreach ($this->response->getFiles() as $file) {
            $files[] = $file;
        }

        return $files;
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\ListFilesResponse
     */
    public function toListFilesResponse(): \Cerbos\Cloud\Store\V1\ListFilesResponse
    {
        return $this->response;
    }
}
