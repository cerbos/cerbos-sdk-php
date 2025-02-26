<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Response\V1\CheckResourcesResponse;

use Cerbos\Sdk\Response\V1\CheckResourcesResponse\ResultEntry\ResultEntry;
use Exception;

final class CheckResourcesResponse
{
    private \Cerbos\Response\V1\CheckResourcesResponse $response;

    /**
     * @param \Cerbos\Response\V1\CheckResourcesResponse $response
     */
    public function __construct(\Cerbos\Response\V1\CheckResourcesResponse $response) {
        $this->response = $response;
    }

    /**
     * @param string $id
     * @return ResultEntry
     * @throws Exception
     */
    public function find(string $id): ResultEntry {
        foreach ($this->response->getResults()->getIterator() as $resultEntry) {
            if ($resultEntry->getResource()->getId() == $id) {
                return new ResultEntry($resultEntry);
            }
        }
        throw new Exception("failed to find result entry with the id ".$id);
    }

    /**
     * @return string
     */
    public function getRequestId(): string {
        return $this->response->getRequestId();
    }

    /**
     * @return \Cerbos\Response\V1\CheckResourcesResponse
     */
    public function toCheckResourcesResponse(): \Cerbos\Response\V1\CheckResourcesResponse {
        return $this->response;
    }
}
