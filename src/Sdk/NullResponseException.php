<?php

// Copyright 2021-2026 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk;

use Exception;

final class NullResponseException extends Exception
{
    /**
     * @param string $message
     */
    public function __construct(string $message)
    {
        parent::__construct($message);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return __CLASS__ . ": The response value is null\n";
    }

    /**
     * @param object|null $response
     * @throws NullResponseException
     */
    public static function fromResponse(?object $response): void
    {
        if ($response === null) {
            throw new NullResponseException(
                "The response value is null"
            );
        }
    }
}
