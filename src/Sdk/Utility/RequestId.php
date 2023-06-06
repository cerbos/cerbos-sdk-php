<?php

// Copyright 2021-2023 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Utility;

use Ramsey\Uuid\Uuid;

class RequestId
{
    public static function generate(): string {
        return Uuid::uuid4()->toString();
    }
}
