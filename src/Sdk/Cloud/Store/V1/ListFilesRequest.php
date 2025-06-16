<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

final class ListFilesRequest {
    private \Cerbos\Cloud\Store\V1\ListFilesRequest $request;

    private function __construct() {
        $this->request = new \Cerbos\Cloud\Store\V1\ListFilesRequest();
    }

    /**
     * @return ListFilesRequest
     */
    public static function newInstance(): ListFilesRequest {
        return new ListFilesRequest();
    }

    /**
     * @param string $storeId
     * @return $this
     */
    public function withStoreId($storeId): ListFilesRequest
    {
        $this->request->setStoreId($storeId);
        return $this;
    }

    /**
     * @param FileFilter $fileFilter
     * @return $this
     */
    public function withFilter($fileFilter): ListFilesRequest
    {
        $this->request->setFilter($fileFilter->toFileFilter());
        return $this;
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\ListFilesRequest
     */
    public function toListFilesRequest(): \Cerbos\Cloud\Store\V1\ListFilesRequest {
        return $this->request;
    }
}
