<?php

declare(strict_types=1);

namespace Cerbos\Api\V1\Response;

// Copyright 2021-2023 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

use Exception;

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
     * @return ResultEntry
     * @throws Exception
     */
    public function find(string $id): ResultEntry {
        if (isset($this->resultEntries[$id])) {
            return $this->resultEntries[$id];
        }

        throw new Exception("failed to find result entry with the id ".$id);
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

