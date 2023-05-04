<?php

declare(strict_types=1);

namespace Cerbos\Sdk\Builder;

// Copyright 2021-2023 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

use Cerbos\Api\V1\Request\Jwt;

class AuxData
{
    private \Cerbos\Api\V1\Request\AuxData $auxData;

    /**
     * @param \Cerbos\Api\V1\Request\AuxData $auxData
     */
    private function __construct(\Cerbos\Api\V1\Request\AuxData $auxData) {
        $this->auxData = $auxData;
    }

    /**
     * @param string $token
     * @param string|null $keySetId
     * @return AuxData
     */
    public static function WithJwt(string $token, ?string $keySetId): AuxData {
        return new AuxData(new \Cerbos\Api\V1\Request\AuxData(new Jwt($token, $keySetId)));
    }

    /**
     * @return \Cerbos\Api\V1\Request\AuxData
     */
    public function toAuxData(): \Cerbos\Api\V1\Request\AuxData{
        return $this->auxData;
    }
}