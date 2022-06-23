<?php

namespace Cerbos\Sdk\Builder;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class CheckResourcesResult
{
    /**
     * @var array dictionary of resource ids, value being the ResultEntry
     */
    private array $resultEntries;

    private function __construct() {
        $this->resultEntries = array();
    }

    /**
     * @return CheckResourcesResult
     */
    public static function newInstance(): CheckResourcesResult {
        return new CheckResourcesResult();
    }

    /**
     * @param string|null $id
     * @param \Cerbos\Api\V1\Engine\ResultEntry|null $resultEntry
     * @return CheckResourcesResult
     */
    public function withResultEntry(?string $id, ?\Cerbos\Api\V1\Engine\ResultEntry $resultEntry): CheckResourcesResult {
        if ($id == null || $resultEntry == null) return $this;
        $this->resultEntries[$id] = $resultEntry;
        return $this;
    }

    /**
     * @return \Cerbos\Api\V1\Engine\CheckResourcesResult
     */
    public function toCheckResourcesResult(): \Cerbos\Api\V1\Engine\CheckResourcesResult {
        return new \Cerbos\Api\V1\Engine\CheckResourcesResult($this->resultEntries);
    }
}