<?php

// Copyright 2021-2026 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Engine\V1\OutputEntry;

final class OutputEntry
{
    private \Cerbos\Engine\V1\OutputEntry $outputEntry;

    /**
     * @param \Cerbos\Engine\V1\OutputEntry $outputEntry
     */
    public function __construct(\Cerbos\Engine\V1\OutputEntry $outputEntry)
    {
        $this->outputEntry = $outputEntry;
    }

    /**
     * @return string
     */
    public function getSrc(): string
    {
        return $this->outputEntry->getSrc();
    }

    /**
     * @return \Google\Protobuf\Value|null
     */
    public function getVal(): ?\Google\Protobuf\Value
    {
        return $this->outputEntry->getVal();
    }

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->outputEntry->getAction();
    }

    /**
     * @return string
     */
    public function getError(): string
    {
        return $this->outputEntry->getError();
    }

    /**
     * @return \Cerbos\Engine\V1\OutputEntry
     */
    public function toOutputEntry(): \Cerbos\Engine\V1\OutputEntry
    {
        return $this->outputEntry;
    }
}
