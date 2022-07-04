<?php

namespace Cerbos\Api\V1\Schema;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class ValidationError
{
    public string $path;
    public string $message;
    public string $source;

    public function __construct()
    {
        $this->path = "";
        $this->message = "";
        $this->source = "";
    }
}

