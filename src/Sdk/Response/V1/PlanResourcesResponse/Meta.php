<?php

// Copyright 2021-2026 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Response\V1\PlanResourcesResponse;

final class Meta
{
    private \Cerbos\Response\V1\PlanResourcesResponse\Meta $meta;

    /**
     * @param \Cerbos\Response\V1\PlanResourcesResponse\Meta $meta
     */
    public function __construct(\Cerbos\Response\V1\PlanResourcesResponse\Meta $meta)
    {
        $this->meta = $meta;
    }

    /**
     * @return string
     */
    public function getFilterDebug(): string
    {
        return $this->meta->getFilterDebug();
    }

    /**
     * Deprecated: Use getMatchedScopes instead.
     * @return string
     * @deprecated
     */
    public function getMatchedScope(): string
    {
        /**
         * @psalm-suppress DeprecatedMethod
         */
        return $this->meta->getMatchedScope();
    }

    /**
     * @return array<string, string>
     */
    public function getMatchedScopes(): array
    {
        $matchedScopes = array();
        foreach ($this->meta->getMatchedScopes()->getIterator() as $action => $scope) {
            $matchedScopes[$action] = $scope;
        }

        return $matchedScopes;
    }

    /**
     * @return \Cerbos\Response\V1\PlanResourcesResponse\Meta
     */
    public function toMeta(): \Cerbos\Response\V1\PlanResourcesResponse\Meta
    {
        return $this->meta;
    }
}
