<?php

declare(strict_types=1);

namespace Cerbos\Api\V1\Engine;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class CheckResourcesResult implements \JsonSerializable
{
    private array $resultEntries;

    /**
     * @param array $resultEntries dictionary of resource ids, value being the ResultEntry
     * @see ResultEntry
     */
    public function __construct(array $resultEntries)
    {
        $this->resultEntries = $resultEntries;
    }

    /**
     * @param string $id
     * @return ResultEntry|null
     */
    public function find(string $id): ?ResultEntry {
        return $this->resultEntries[$id];
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            "results" => $this->resultEntries
        ];
    }
}

