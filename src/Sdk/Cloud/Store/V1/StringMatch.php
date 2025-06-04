<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

use \Cerbos\Sdk\Cloud\Store\V1\StringMatch\InList;

final class StringMatch {
    private \Cerbos\Cloud\Store\V1\StringMatch $stringMatch;

    private function __construct() {
        $this->stringMatch = new \Cerbos\Cloud\Store\V1\StringMatch();
    }

    /**
     * @return StringMatch
     */
    public static function newInstance(): StringMatch {
        return new StringMatch();
    }

    /**
     * @param string $equals
     * @return $this
     */
    public function withEquals($equals): StringMatch
    {
        $this->stringMatch->setEquals($equals);
        return $this;
    }

    /**
     * @param InList $inList
     * @return $this
     */
    public function withIn($inList): StringMatch
    {
        $this->stringMatch->setIn($inList->toInList());
        return $this;
    }

    /**
     * @param string $like
     * @return $this
     */
    public function withLike($like): StringMatch
    {
        $this->stringMatch->setLike($like);
        return $this;
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\StringMatch
     */
    public function toStringMatch(): \Cerbos\Cloud\Store\V1\StringMatch {
        return $this->stringMatch;
    }
}
