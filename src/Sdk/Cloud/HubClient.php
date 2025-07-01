<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud;

use Cerbos\Sdk\Cloud\Store\V1\StoreClient;
use Exception;

final class HubClient
{
    private StoreClient $storeClient;

    /**
     * @param StoreClient $storeClient
     */
    public function __construct(StoreClient $storeClient) {
        $this->storeClient = $storeClient;
    }

    /**
     * @return StoreClient
     * @throws Exception
     */
    public function storeClient(): StoreClient {
        return $this->storeClient;
    }
}
