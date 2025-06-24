<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

final class ListFilesRequest {
    private \Cerbos\Cloud\Store\V1\ListFilesRequest $request;

    /**
     * @param array $data {
     *     @type string $store_id
     * }
     */
    private function __construct(array $data) {
        $this->request = new \Cerbos\Cloud\Store\V1\ListFilesRequest($data);
    }

    /**
     * @param array $data {
     *     @type string $store_id
     * }
     * @return ListFilesRequest
     */
    public static function newInstance(array $data): ListFilesRequest {
        return new ListFilesRequest($data);
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
