<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1\ReplaceFilesRequest;

final class Condition
{
    private \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Condition $condition;

    /**
     * @param int $storeVersionMustEqual
     */
    private function __construct(
        int $storeVersionMustEqual
    ) {
        $this->condition = new \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Condition([
            'store_version_must_equal' => $storeVersionMustEqual
        ]);
    }

    /**
     * @param int $storeVersionMustEqual
     * @return Condition
     */
    public static function storeVersionMustEqual(
        int $storeVersionMustEqual
    ): Condition {
        return new Condition($storeVersionMustEqual);
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Condition
     */
    public function toCondition(): \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Condition
    {
        return $this->condition;
    }
}
