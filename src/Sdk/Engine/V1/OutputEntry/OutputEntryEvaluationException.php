<?php

// Copyright 2021-2026 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Engine\V1\OutputEntry;

use Cerbos\Sdk\Engine\V1\OutputEntry\OutputEntry;
use Exception;

final class OutputEntryEvaluationException extends Exception
{
    /**
     * @param string $message
     */
    private function __construct(string $message = "")
    {
        parent::__construct($message, 0, null);
    }

    /**
     * @param OutputEntry $outputEntry
     * @throws OutputEntryEvaluationException
     */
    public static function fromOutputEntry(OutputEntry $outputEntry): void
    {
        if ($outputEntry->getError() != "") {
            throw new OutputEntryEvaluationException($outputEntry->getError());
        }

        $val = $outputEntry->getVal();
        if (is_null($val) || $val->hasNullValue()) {
            throw new OutputEntryEvaluationException("output evaluation error");
        }
    }
}
