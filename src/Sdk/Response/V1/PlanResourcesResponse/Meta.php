<?php

// Copyright 2021-2023 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Response\V1\PlanResourcesResponse;

class Meta
{
    private \Cerbos\Response\V1\PlanResourcesResponse\Meta $meta;

    /**
     * @param \Cerbos\Response\V1\PlanResourcesResponse\Meta $meta
     */
    public function __construct(\Cerbos\Response\V1\PlanResourcesResponse\Meta $meta) {
        $this->meta = $meta;
    }

    /**
     * @return string
     */
    public function getFilterDebug(): string {
        return $this->meta->getFilterDebug();
    }

    /**
     * @return string
     */
    public function getMatchedScope(): string {
        return $this->meta->getMatchedScope();
    }

    /**
     * @return \Cerbos\Response\V1\PlanResourcesResponse\Meta
     */
    public function toMeta(): \Cerbos\Response\V1\PlanResourcesResponse\Meta {
        return $this->meta;
    }
}
