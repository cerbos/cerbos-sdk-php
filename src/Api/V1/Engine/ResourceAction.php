<?php

declare(strict_types=1);

namespace Cerbos\Api\V1\Engine;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class ResourceAction implements \JsonSerializable
{
    public Resource $resource;
    public array $actions;

    /**
     * @param Resource $resource
     * @param string[] $actions
     */
    public function __construct(Resource $resource, array $actions)
    {
        $this->resource = $resource;
        $this->actions = $actions;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            "resource" => $this->resource,
            "actions" => $this->actions,
        ];
    }
}