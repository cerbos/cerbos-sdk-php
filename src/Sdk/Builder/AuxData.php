<?php

// Copyright 2021-2026 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Builder;

use Cerbos\Sdk\Builder\AuxData\JWT;
use InvalidArgumentException;

final class AuxData
{
    private \Cerbos\Request\V1\AuxData $auxData;

    /**
     * @param array $data {
     *     @type \Cerbos\Request\V1\AuxData\JWT $jwt
     *     @type array|\Google\Protobuf\Internal\MapField $jwts
     * }
     */
    private function __construct(array $data)
    {
        $this->auxData = new \Cerbos\Request\V1\AuxData($data);
    }

    /**
     * @param string $token
     * @param string|null $keySetId
     * @return AuxData
     */
    public static function withJwt(string $token, ?string $keySetId): AuxData
    {
        return new AuxData([
            'jwt' => (JWT::newInstance($token, $keySetId))->toJWT()
        ]);
    }

    /**
     * @param array<string, JWT> $jwts
     * @return AuxData
     */
    public static function withJwts(array $jwts): AuxData
    {
        if (count($jwts) == 0) {
            throw new InvalidArgumentException("there must be at least one JWT in the map");
        }

        $v = array();
        foreach ($jwts as $key => $value) {
            $v[$key] = $value->toJWT();
        }

        return new AuxData([
            'jwts' => $v
        ]);
    }

    /**
     * @return \Cerbos\Request\V1\AuxData
     */
    public function toAuxData(): \Cerbos\Request\V1\AuxData
    {
        return $this->auxData;
    }
}
