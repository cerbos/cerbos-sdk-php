<?php

declare(strict_types=1);

namespace Cerbos\Api\V1\Engine;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class AuxData
{
    private Jwt $jwt;

    /**
     * @param Jwt $jwt
     */
    public function __construct(Jwt $jwt)
    {
        $this->jwt = $jwt;
    }

    /**
     * @return Jwt
     */
    public function getJwt(): Jwt
    {
        return $this->jwt;
    }

    /**
     * @param Jwt $jwt
     */
    public function setJwt(Jwt $jwt): void
    {
        $this->jwt = $jwt;
    }

    /**
     * @return string
     */
    public function getJwtToken(): string
    {
        return $this->jwt->getToken();
    }

    /**
     * @return string
     */
    public function getJwtKeySetId(): string
    {
        return $this->jwt->getKeySetId();
    }
}