<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1\ReplaceFilesRequest;

final class Condition {
    private \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Condition $condition;

    /**
     * @param array $data {
     *     @type int $store_version_must_equal
     * }
     */
    private function __construct(array $data) {
        $this->condition = new \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Condition([
            'store_version_must_equal' => (int)$data['store_version_must_equal']
        ]);
    }

    /**
     * @param array $data {
     *     @type int $store_version_must_equal
     * }
     * @return Condition
     */
    public static function newInstance(array $data): Condition {
        return new Condition($data);
    }

    /**
     * @param int $store_version_must_equal
     * @return Condition
     */
    public static function storeVersionMustEqual(int $store_version_must_equal): Condition {
        return new Condition([
            'store_version_must_equal' => $store_version_must_equal
        ]);
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Condition
     */
    public function toCondition(): \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Condition {
        return $this->condition;
    }
}
