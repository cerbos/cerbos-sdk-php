<?php

// Copyright 2021-2026 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Builder\HealthCheckRequest;

enum Service: string
{
    case UNSPECIFIED = "";
    case CERBOS = "cerbos.svc.v1.CerbosService";
    case ADMIN = "cerbos.svc.v1.CerbosAdminService";
}
