<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

final class GetFilesRequest {
    private \Cerbos\Cloud\Store\V1\GetFilesRequest $request;

    private function __construct() {
        $this->request = new \Cerbos\Cloud\Store\V1\GetFilesRequest();
    }

    /**
     * @return GetFilesRequest
     */
    public static function newInstance(): GetFilesRequest {
        return new GetFilesRequest();
    }

    /**
     * @param string $storeId
     * @return $this
     */
    public function withStoreId($storeId): GetFilesRequest
    {
        $this->request->setStoreId($storeId);
        return $this;
    }

    /**
     * @param array<string> $files
     * @return $this
     */
    public function withFiles($files): GetFilesRequest
    {
        $this->request->setFiles($files);
        return $this;
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\GetFilesRequest
     */
    public function toGetFilesRequest(): \Cerbos\Cloud\Store\V1\GetFilesRequest {
        return $this->request;
    }
}
