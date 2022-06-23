<?php

declare(strict_types=1);

namespace Cerbos\Api\V1\Engine;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class ResultEntry implements \JsonSerializable
{
    public Resource $resource;
    public array $actions;
    // public array $validationErrors
    // public Meta $meta

    /**
     * @param Resource $resource
     * @param array $actions dictionary of action names, values being EFFECT_ALLOW or EFFECT_DENY
     */
    public function __construct(Resource $resource, array $actions)
    {
        $this->resource = $resource;
        $this->actions = $actions;
    }

    /**
     * @param string $action
     * @return bool
     */
    public function isAllowed(string $action): bool {
        if(!isset($this->actions[$action])) {
            return false;
        }

        if($this->actions[$action] == "EFFECT_ALLOW") {
            return true;
        }

        return false;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            "resource" => $this->resource,
            "actions" => $this->actions
        ];
    }
}

