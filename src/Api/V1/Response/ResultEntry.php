<?php

declare(strict_types=1);

namespace Cerbos\Api\V1\Response;

// Copyright 2021-2023 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

use Cerbos\Api\V1\Engine\Resource;

class ResultEntry implements \JsonSerializable
{
    public Resource $resource;
    public array $actions;
    public array $validationErrors;

    /**
     * @param Resource $resource
     * @param array $actions dictionary of action names, values being EFFECT_ALLOW or EFFECT_DENY
     * @param array $validationErrors
     */
    public function __construct(Resource $resource, array $actions, array $validationErrors)
    {
        $this->resource = $resource;
        $this->actions = $actions;
        $this->validationErrors = $validationErrors;
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
            "actions" => $this->actions,
            "validationErrors" => $this->validationErrors
        ];
    }
}

