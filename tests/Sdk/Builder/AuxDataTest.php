<?php

namespace Cerbos\Test\Sdk\Builder;

use Cerbos\Sdk\Builder\AuxData;
use PHPUnit\Framework\TestCase;

// Copyright 2021-2023 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class AuxDataTest extends TestCase
{
    private string $token = "token";
    private string $keySetId = "keySetId";

    public function testAuxData(): void {
        $auxData = AuxData::WithJwt($this->token, $this->keySetId)
                                ->toAuxData();

        $this->assertEquals($this->token, $auxData->jwt->token, "value of the auxData token is invalid");
        $this->assertEquals($this->keySetId, $auxData->jwt->keySetId, "value of the auxData keySetId is invalid");
    }
}