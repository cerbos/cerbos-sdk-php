<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

final class ListFilesRequest {
    private \Cerbos\Cloud\Store\V1\ListFilesRequest $request;

    /**
     * @param string $storeId
     * @param FileFilter|null $filter
     */
    private function __construct(
        string $storeId,
        ?FileFilter $filter = null
    ) {
        $this->request = new \Cerbos\Cloud\Store\V1\ListFilesRequest([
            'store_id' => $storeId
        ]);

        if (isset($filter)) {
            $this->request->setFilter($filter->toFileFilter());
        }
    }

    /**
     * @param string $storeId
     * @return ListFilesRequest
     */
    public static function newInstance(
        string $storeId
    ): ListFilesRequest {
        return new ListFilesRequest($storeId);
    }

    /**
     * @param string $storeId
     * @param FileFilter $filter
     * @return ListFilesRequest
     */
    public static function withFilter(
        string $storeId,
        FileFilter $filter
    ): ListFilesRequest
    {
        return new ListFilesRequest($storeId, $filter);
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\ListFilesRequest
     */
    public function toListFilesRequest(): \Cerbos\Cloud\Store\V1\ListFilesRequest {
        return $this->request;
    }
}
