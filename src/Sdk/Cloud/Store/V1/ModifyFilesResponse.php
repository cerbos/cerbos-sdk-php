<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

final class ModifyFilesResponse
{
    private \Cerbos\Cloud\Store\V1\ModifyFilesResponse $response;

    /**
     * @param \Cerbos\Cloud\Store\V1\ModifyFilesResponse $response
     */
    public function __construct(\Cerbos\Cloud\Store\V1\ModifyFilesResponse $response)
    {
        $this->response = $response;
    }

    /**
     * @return int
     */
    public function getNewStoreVersion(): int
    {
        return (int)$this->response->getNewStoreVersion();
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\ModifyFilesResponse
     */
    public function toModifyFilesResponse(): \Cerbos\Cloud\Store\V1\ModifyFilesResponse
    {
        return $this->response;
    }
}
