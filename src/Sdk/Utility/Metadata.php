<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Utility;

use Exception;

class Metadata
{
    /**
     * @param array|null $first
     * @param array|null $second
     * @return array<string, array>
     * @throws Exception
     */
    public static function merge(?array $first, ?array $second): array {
        if (is_null($first) && is_null($second))
            return [];
        else if (is_null($first) && !is_null($second))
            return $second;
        else if (is_null($second))
            return $first;

        $combined = array();
        foreach ($first as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $i => $vv) {
                    $combined[$k][] = $vv;
                }
            }
            else {
                throw new Exception("the type for the parameter first and second parameter is array<string, array>|null");
            }
        }

        foreach ($second as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $i => $vv) {
                    $combined[$k][] = $vv;
                }
            }
            else {
                throw new Exception("the type for the parameter first and second parameter is array<string, array>|null");
            }
        }

        return $combined;
    }
}
