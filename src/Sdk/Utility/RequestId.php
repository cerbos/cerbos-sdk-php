<?php

namespace Cerbos\Sdk\Utility;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

use Ramsey\Uuid\Uuid;

class RequestId
{
    public static function generate(): string {
        return Uuid::uuid4()->toString();
    }
}