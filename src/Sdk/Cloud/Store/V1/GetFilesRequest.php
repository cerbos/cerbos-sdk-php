<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

final class GetFilesRequest {
    private \Cerbos\Cloud\Store\V1\GetFilesRequest $request;

    /**
     * @param array $data {
     *     @type string $store_id
     *     @type string[] $files
     * }
     */
    private function __construct(array $data) {
        $this->request = new \Cerbos\Cloud\Store\V1\GetFilesRequest($data);
    }

    /**
     * @param array $data {
     *     @type string $store_id
     *     @type string[] $files
     * }
     * @return GetFilesRequest
     */
    public static function newInstance(array $data): GetFilesRequest {
        return new GetFilesRequest($data);
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\GetFilesRequest
     */
    public function toGetFilesRequest(): \Cerbos\Cloud\Store\V1\GetFilesRequest {
        return $this->request;
    }
}
