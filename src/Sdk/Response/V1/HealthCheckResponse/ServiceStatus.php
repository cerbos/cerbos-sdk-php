<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Response\V1\HealthCheckResponse;

enum ServiceStatus: int
{
    case SERVING = 0;
    case NOT_SERVING = 1;
    case DISABLED = 2;
}
