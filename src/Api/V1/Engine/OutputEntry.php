<?php

declare(strict_types=1);

namespace Cerbos\Api\V1\Engine;

// Copyright 2021-2023 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class OutputEntry implements \JsonSerializable
{
    public string $src;
    /**
     * @psalm-suppress MissingPropertyType
     */
    public $val;

    /**
     * @param string $src Rule that matched to produce this output
     * @param mixed $val Dynamic output, determined by user defined rule output
     */
    public function __construct(string $src, $val) {
        $this->src = $src;
        $this->val = $val;
    }

    public function jsonSerialize(): array
    {
        return [
            "src" => $this->src,
            "val" => $this->val
        ];
    }
}