<?php

declare(strict_types=1);

namespace Cerbos\Api\V1\Engine;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class Jwt
{
    private string $token;
    private string $keySetId;

    /**
     * @param string $token
     * @param string|null $keySetId
     */
    public function __construct(string $token, ?string $keySetId)
    {
        $this->token = $token;
        $this->keySetId = $keySetId ?: "";
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    public function setToken(string $token): void
    {
        $this->token = $token;
    }

    /**
     * @return string
     */
    public function getKeySetId(): string
    {
        return $this->keySetId;
    }

    /**
     * @param string $keySetId
     */
    public function setKeySetId(string $keySetId): void
    {
        $this->keySetId = $keySetId;
    }
}