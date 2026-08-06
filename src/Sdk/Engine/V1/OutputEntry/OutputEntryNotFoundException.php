<?php

// Copyright 2021-2026 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Engine\V1\OutputEntry;

use Exception;

final class OutputEntryNotFoundException extends Exception
{
    /**
     * @param string $message
     */
    private function __construct(string $message = "")
    {
        parent::__construct($message, 0, null);
    }

    /**
     * @param string $action
     * @return OutputEntryNotFoundException
     */
    public static function action(string $action): OutputEntryNotFoundException
    {
        return new OutputEntryNotFoundException("failed to find output entry with its action set to '$action'");
    }

    /**
     * @param string $src
     * @return OutputEntryNotFoundException
     */
    public static function src(string $src): OutputEntryNotFoundException
    {
        return new OutputEntryNotFoundException("failed to find output entry with its src set to '$src'");
    }
}
