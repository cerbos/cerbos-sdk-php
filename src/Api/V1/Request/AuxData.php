<?php

declare(strict_types=1);

namespace Cerbos\Api\V1\Request;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class AuxData implements \JsonSerializable
{
    public Jwt $jwt;

    /**
     * @param Jwt $jwt
     */
    public function __construct(Jwt $jwt)
    {
        $this->jwt = $jwt;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            "jwt" => $this->jwt,
        ];
    }
}