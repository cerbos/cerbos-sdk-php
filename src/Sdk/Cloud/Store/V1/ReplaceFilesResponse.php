<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

final class ReplaceFilesResponse {
    private \Cerbos\Cloud\Store\V1\ReplaceFilesResponse $response;

    /**
     * @param \Cerbos\Cloud\Store\V1\ReplaceFilesResponse $response
     */
    public function __construct(\Cerbos\Cloud\Store\V1\ReplaceFilesResponse $response) {
        $this->response = $response;
    }

    /**
     * @return int
     */
    public function getNewStoreVersion(): int {
        return (int)$this->response->getNewStoreVersion();
    }

    /**
     * @return array<string>
     */
    public function getIgnoredFiles(): array {
        $ignoredFiles = array();
        foreach ($this->response->getIgnoredFiles() as $ignoredFile) {
            $ignoredFiles[] = $ignoredFile;
        }

        return $ignoredFiles;
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\ReplaceFilesResponse
     */
    public function toReplaceFilesResponse(): \Cerbos\Cloud\Store\V1\ReplaceFilesResponse {
        return $this->response;
    }
}
