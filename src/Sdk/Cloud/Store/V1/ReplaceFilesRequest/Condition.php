<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1\ReplaceFilesRequest;

final class Condition {
    private \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Condition $condition;

    private function __construct() {
        $this->condition = new \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Condition();
    }

    /**
     * @return Condition
     */
    public static function newInstance(): Condition {
        return new Condition();
    }

    /**
     * @param int $storeVersionMustEqual
     * @return $this
     */
    public function withStoreVersionMustEqual($storeVersionMustEqual): Condition
    {
        $this->condition->setStoreVersionMustEqual($storeVersionMustEqual);
        return $this;
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Condition
     */
    public function toCondition(): \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Condition {
        return $this->condition;
    }
}
