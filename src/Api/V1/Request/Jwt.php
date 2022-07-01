<?php

declare(strict_types=1);

namespace Cerbos\Api\V1\Request;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class Jwt implements \JsonSerializable
{
    public string $token;
    public ?string $keySetId;

    /**
     * @param string $token
     * @param string|null $keySetId
     */
    public function __construct(string $token, ?string $keySetId)
    {
        $this->token = $token;
        $this->keySetId = $keySetId;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $serialized = ["token" => $this->token];
        if (isset($this->keySetId)) {
            $serialized["keySetId"] = $this->keySetId;
        }

        return $serialized;
    }
}