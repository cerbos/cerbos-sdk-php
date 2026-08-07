<?php

// Copyright 2021-2026 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Builder\AuxData;

final class JWT
{
    private string $token;
    private ?string $keySetId;

    /**
     * @param string $token
     * @param string|null $keySetId
     */
    private function __construct(string $token, ?string $keySetId)
    {
        $this->token = $token;
        $this->keySetId = $keySetId;
    }

    /**
     * @param string $token
     * @param string|null $keySetId
     * @return JWT
     */
    public static function newInstance(string $token, ?string $keySetId): JWT
    {
        return new JWT($token, $keySetId);
    }

    /**
     * @return \Cerbos\Request\V1\AuxData\JWT
     */
    public function toJWT(): \Cerbos\Request\V1\AuxData\JWT
    {
        $jwt = new \Cerbos\Request\V1\AuxData\JWT([
            'token' => $this->token
        ]);

        if (!is_null($this->keySetId)) {
            $jwt->setKeySetId($this->keySetId);
        }

        return $jwt;
    }
}
