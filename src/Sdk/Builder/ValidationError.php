<?php

namespace Cerbos\Sdk\Builder;

// Copyright 2021-2023 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class ValidationError
{
    private \Cerbos\Api\V1\Schema\ValidationError $validationError;

    public function __construct() {
        $this->validationError = new \Cerbos\Api\V1\Schema\ValidationError();
    }

    /**
     * @return ValidationError
     */
    public static function newInstance(): ValidationError {
        return new ValidationError();
    }

    /**
     * @param string|null $path
     * @return $this
     */
    public function withPath(?string $path): ValidationError {
        if ($path == null) return $this;
        $this->validationError->path = $path;
        return $this;
    }

    /**
     * @param string|null $message
     * @return $this
     */
    public function withMessage(?string $message): ValidationError {
        if ($message == null) return $this;
        $this->validationError->message = $message;
        return $this;
    }

    /**
     * @param string|null $source
     * @return $this
     */
    public function withSource(?string $source): ValidationError {
        if ($source == null) return $this;
        $this->validationError->source = $source;
        return $this;
    }

    /**
     * @return \Cerbos\Api\V1\Schema\ValidationError
     */
    public function toValidationError(): \Cerbos\Api\V1\Schema\ValidationError
    {
        return $this->validationError;
    }
}