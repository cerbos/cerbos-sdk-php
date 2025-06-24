<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1\ReplaceFilesRequest;

final class Condition {
    private \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Condition $condition;

    /**
     * @param array $data {
     *     @type int|string $store_version_must_equal
     * }
     */
    private function __construct(array $data) {
        $this->condition = new \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Condition($data);
    }

    /**
     * @param array $data {
     *     @type int|string $store_version_must_equal
     * }
     * @return Condition
     */
    public static function newInstance(array $data): Condition {
        return new Condition($data);
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Condition
     */
    public function toCondition(): \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Condition {
        return $this->condition;
    }
}
