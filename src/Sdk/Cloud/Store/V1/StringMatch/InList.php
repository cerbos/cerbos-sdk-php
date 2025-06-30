<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1\StringMatch;

final class InList {
    private \Cerbos\Cloud\Store\V1\StringMatch\InList $inList;

    /**
     * @param array|null $data {
     *     @type string[] $values
     * }
     */
    private function __construct(?array $data) {
        $this->inList = new \Cerbos\Cloud\Store\V1\StringMatch\InList($data);
    }

    /**
     * @param array|null $data {
     *     @type string[] $values
     * }
     * @return InList
     */
    public static function newInstance(?array $data): InList {
        return new InList($data);
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\StringMatch\InList
     */
    public function toInList(): \Cerbos\Cloud\Store\V1\StringMatch\InList {
        return $this->inList;
    }
}
