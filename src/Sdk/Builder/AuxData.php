<?php

namespace Cerbos\Sdk\Builder;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

use Cerbos\Api\V1\Engine\Jwt;

class AuxData
{
    private \Cerbos\Api\V1\Engine\AuxData $auxData;

    /**
     * @param \Cerbos\Api\V1\Engine\AuxData $auxData
     */
    private function __construct(\Cerbos\Api\V1\Engine\AuxData $auxData) {
        $this->auxData = $auxData;
    }

    /**
     * @param string $token
     * @param string|null $keySetId
     * @return AuxData
     */
    public function WithJwt(string $token, ?string $keySetId) : AuxData {
        return new AuxData(new \Cerbos\Api\V1\Engine\AuxData(new Jwt($token, $keySetId)));
    }

    /**
     * @return \Cerbos\Api\V1\Engine\AuxData
     */
    public function toAuxData() : \Cerbos\Api\V1\Engine\AuxData{
        return $this->auxData;
    }
}