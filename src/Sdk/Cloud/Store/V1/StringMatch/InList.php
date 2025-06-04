<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1\StringMatch;

final class InList {
    private array $values;

    private function __construct() {
        $this->values = array();
    }

    /**
     * @return InList
     */
    public static function newInstance(): InList {
        return new InList();
    }

    /**
     * @param string $value
     * @return $this
     */
    public function withValue(string $value): InList {
        $this->values[] = $value;
        return $this;
    }

    /**
     * @param array<string> $values
     * @return $this
     */
    public function withValues(array $values): InList {
        foreach ($values as $value) {
            $this->values[] = $value;
        }
        return $this;
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\StringMatch\InList
     */
    public function toInList(): \Cerbos\Cloud\Store\V1\StringMatch\InList {
        return (new \Cerbos\Cloud\Store\V1\StringMatch\InList())
            ->setValues($this->values);
    }
}
