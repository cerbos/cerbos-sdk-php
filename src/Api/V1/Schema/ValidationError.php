<?php

namespace Cerbos\Api\V1\Schema;

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

