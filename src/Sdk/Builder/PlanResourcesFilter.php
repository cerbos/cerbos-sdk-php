<?php

namespace Cerbos\Sdk\Builder;

// Copyright 2021-2023 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

use Cerbos\Api\V1\Engine\PlanResourcesFilter\Expression\Operand;

class PlanResourcesFilter
{
    private \Cerbos\Api\V1\Engine\PlanResourcesFilter $filter;

    /**
     */
    private function __construct() {
        $this->filter = new \Cerbos\Api\V1\Engine\PlanResourcesFilter();
    }

    /**
     * @return PlanResourcesFilter
     */
    public static function newInstance(): PlanResourcesFilter {
        return new PlanResourcesFilter();
    }

    /**
     * @param string|null $kind
     * @return $this
     */
    public function withKind(?string $kind): PlanResourcesFilter {
        if ($kind == null) return $this;
        $this->filter->kind = $kind;
        return $this;
    }

    /**
     * @param Operand|null $condition
     * @return $this
     */
    public function withCondition(?Operand $condition): PlanResourcesFilter {
        if ($condition == null) return $this;
        $this->filter->condition = $condition;
        return $this;
    }

    /**
     * @return \Cerbos\Api\V1\Engine\PlanResourcesFilter
     */
    public function toPlanResourcesFilter(): \Cerbos\Api\V1\Engine\PlanResourcesFilter {
        return $this->filter;
    }
}