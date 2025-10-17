<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Response\V1\CheckResourcesResponse\ResultEntry;

use Cerbos\Response\V1\CheckResourcesResponse\ResultEntry\Meta\EffectMeta;

final class Meta
{
    private \Cerbos\Response\V1\CheckResourcesResponse\ResultEntry\Meta $meta;

    /**
     * @param \Cerbos\Response\V1\CheckResourcesResponse\ResultEntry\Meta $meta
     */
    public function __construct(\Cerbos\Response\V1\CheckResourcesResponse\ResultEntry\Meta $meta)
    {
        $this->meta = $meta;
    }

    /**
     * @return array<string, EffectMeta>
     */
    public function getActions(): array
    {
        $actions = array();
        foreach ($this->meta->getActions()->getIterator() as $action => $effect) {
            $actions[$action] = $effect;
        }

        return $actions;
    }

    /**
     * @return array<string>
     */
    public function getEffectiveDerivedRoles(): array
    {
        $roles = array();
        foreach ($this->meta->getEffectiveDerivedRoles()->getIterator() as $role) {
            $roles[] = $role;
        }

        return $roles;
    }

    /**
     * @return \Cerbos\Response\V1\CheckResourcesResponse\ResultEntry\Meta
     */
    public function toMeta(): \Cerbos\Response\V1\CheckResourcesResponse\ResultEntry\Meta
    {
        return $this->meta;
    }
}
