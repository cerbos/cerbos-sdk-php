<?php

declare(strict_types=1);

namespace Cerbos\Api\V1\Response;

// Copyright 2021-2023 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

use Cerbos\Api\V1\Engine\OutputEntry;
use Cerbos\Api\V1\Engine\Resource;

class ResultEntry implements \JsonSerializable
{
    public array $actions;
    public array $outputs;
    public Resource $resource;
    public array $validationErrors;

    /**
     * @param array $actions dictionary of action names, values being EFFECT_ALLOW or EFFECT_DENY
     * @param OutputEntry[] $outputs
     * @param Resource $resource
     * @param array $validationErrors
     */
    public function __construct(array $actions, array $outputs, Resource $resource, array $validationErrors)
    {
        $this->actions = $actions;
        $this->outputs = $outputs;
        $this->resource = $resource;
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
            "actions" => $this->actions,
            "outputs" => $this->outputs,
            "resource" => $this->resource,
            "validationErrors" => $this->validationErrors
        ];
    }
}

