<?php

// Copyright 2021-2026 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

namespace Cerbos\Test\Sdk\Builder;

use Cerbos\Sdk\Builder\AuxData;
use Cerbos\Sdk\Builder\AuxData\JWT;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress PossiblyNullReference
 */
final class AuxDataTest extends TestCase
{
    private string $token = "eyJhbGciOiJFUzM4NCIsImtpZCI6IjE5TGZaYXRFZGc4M1lOYzVyMjNndU1KcXJuND0iLCJ0eXAiOiJKV1QifQ.eyJhdWQiOlsiY2VyYm9zLWp3dC10ZXN0cyJdLCJjdXN0b21BcnJheSI6WyJBIiwiQiIsIkMiXSwiY3VzdG9tSW50Ijo0MiwiY3VzdG9tTWFwIjp7IkEiOiJBQSIsIkIiOiJCQiIsIkMiOiJDQyJ9LCJjdXN0b21TdHJpbmciOiJmb29iYXIiLCJleHAiOjE5NTAyNzc5MjYsImlzcyI6ImNlcmJvcy10ZXN0LXN1aXRlIn0._nCHIsuFI3wczeuUv_xjSwaVnIQUdYA9sGf_jVsrsDWloLs3iPWDaA1bXpuIUJVsi8-G6qqdrPI0cOBxEocg1NCm8fyD9T_3hsZV0fYWon_Je6Kl93a3JIW3S6kbvjsL";
    private string $keySetId = "123";

    public function testWithJwt(): void
    {
        $auxData = AuxData::withJwt($this->token, $this->keySetId)->toAuxData();
        $this->assertEquals($this->token, $auxData->getJwt()->getToken(), "invalid token");
        $this->assertEquals($this->keySetId, $auxData->getJwt()->getKeySetId(), "invalid keySetId");

        $auxData1 = AuxData::withJwt($this->token, null)->toAuxData();
        $this->assertEquals($this->token, $auxData1->getJwt()->getToken(), "invalid token");
        $this->assertEquals("", $auxData1->getJwt()->getKeySetId(), "invalid keySetId");
    }

    public function testWithJwts(): void
    {
        $name1 = "name1";
        $name2 = "name2";

        $jwt = JWT::newInstance($this->token, $this->keySetId);
        $auxData = AuxData::withJwts([
            $name1 => $jwt,
            $name2 => $jwt,
        ])->toAuxData();

        $this->assertEquals($this->token, $auxData->getJwts()[$name1]->getToken(), "invalid token on first JWT");
        $this->assertEquals($this->keySetId, $auxData->getJwts()[$name1]->getKeySetId(), "invalid keySetId on first JWT");

        $this->assertEquals($this->token, $auxData->getJwts()[$name2]->getToken(), "invalid token on second JWT");
        $this->assertEquals($this->keySetId, $auxData->getJwts()[$name2]->getKeySetId(), "invalid keySetId on second JWT");
    }
}
