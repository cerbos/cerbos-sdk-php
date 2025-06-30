<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

final class GetFilesRequest {
    private \Cerbos\Cloud\Store\V1\GetFilesRequest $request;

    /**
     * @param string $storeId
     * @param string[] $files
     */
    private function __construct(
        string $storeId,
        string ...$files
    ) {
        $this->request = new \Cerbos\Cloud\Store\V1\GetFilesRequest([
            'store_id' => $storeId,
            'files' => $files
        ]);
    }

    /**
     * @param string $storeId
     * @param string[] $files
     * @return GetFilesRequest
     */
    public static function newInstance(
        string $storeId,
        string ...$files
    ): GetFilesRequest {
        return new GetFilesRequest($storeId, ...$files);
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\GetFilesRequest
     */
    public function toGetFilesRequest(): \Cerbos\Cloud\Store\V1\GetFilesRequest {
        return $this->request;
    }
}
