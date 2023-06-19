<?php

// Copyright 2021-2023 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Builder;

use Cerbos\Request\V1\AuxData\JWT;

class AuxData
{
    private \Cerbos\Request\V1\AuxData $auxData;

    private function __construct() {
        $this->auxData = new \Cerbos\Request\V1\AuxData();
    }

    /**
     * @param string $token
     * @param string|null $keySetId
     * @return AuxData
     */
    public static function withJwt(string $token, ?string $keySetId): AuxData
    {
        $jwt = new JWT();
        $jwt->setToken($token);
        if (!is_null($keySetId)) {
            $jwt->setKeySetId($keySetId);
        }

        $auxData = new AuxData();
        $auxData->auxData = (new \Cerbos\Request\V1\AuxData())->setJwt($jwt);

        return $auxData;
    }

    /**
     * @return \Cerbos\Request\V1\AuxData
     */
    public function toAuxData(): \Cerbos\Request\V1\AuxData {
        return $this->auxData;
    }
}
