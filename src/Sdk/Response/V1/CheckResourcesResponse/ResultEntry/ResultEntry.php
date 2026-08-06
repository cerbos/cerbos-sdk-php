<?php

// Copyright 2021-2026 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Response\V1\CheckResourcesResponse\ResultEntry;

use Cerbos\Effect\V1\Effect;
use Cerbos\Response\V1\CheckResourcesResponse\ResultEntry\Resource;
use Cerbos\Schema\V1\ValidationError;
use Cerbos\Sdk\Engine\V1\OutputEntry\OutputEntry;
use Cerbos\Sdk\Engine\V1\OutputEntry\OutputEntryEvaluationException;
use Cerbos\Sdk\Engine\V1\OutputEntry\OutputEntryNotFoundException;

final class ResultEntry
{
    private \Cerbos\Response\V1\CheckResourcesResponse\ResultEntry $resultEntry;

    /**
     * @param \Cerbos\Response\V1\CheckResourcesResponse\ResultEntry $resultEntry
     */
    public function __construct(\Cerbos\Response\V1\CheckResourcesResponse\ResultEntry $resultEntry)
    {
        $this->resultEntry = $resultEntry;
    }

    /**
     * @return array<string, Effect>
     */
    public function getActions(): array
    {
        $actions = array();
        foreach ($this->resultEntry->getActions()->getIterator() as $action => $effect) {
            $actions[$action] = $effect;
        }

        return $actions;
    }

    /**
     * @return Meta|null
     */
    public function getMeta(): ?Meta
    {
        $meta = $this->resultEntry->getMeta();
        if (!is_null($meta)) {
            return new Meta($meta);
        }

        return null;
    }

    /**
     * @return Resource|null
     */
    public function getResource(): ?Resource
    {
        return $this->resultEntry->getResource();
    }

    /**
     * @return array<OutputEntry>
     */
    public function getOutputs(): array
    {
        $outputs = array();
        foreach ($this->resultEntry->getOutputs()->getIterator() as $output) {
            $outputs[] = new OutputEntry($output);
        }

        return $outputs;
    }

    /**
     * @return array<ValidationError>
     */
    public function getValidationErrors(): array
    {
        $validationErrors = array();
        foreach ($this->resultEntry->getValidationErrors() as $validationError) {
            $validationErrors[] = $validationError;
        }

        return $validationErrors;
    }

    /**
     * @param string $action
     * @return bool
     */
    public function isAllowed(string $action): bool
    {
        $actions = $this->getActions();

        if (!isset($actions[$action])) {
            return false;
        }

        return $actions[$action] == Effect::EFFECT_ALLOW;
    }

    /**
     * @param string $src
     * @return OutputEntry
     * @throws OutputEntryEvaluationException|OutputEntryNotFoundException
     */
    public function output(string $src): OutputEntry
    {
        foreach ($this->getOutputs() as $output) {
            if ($output->getSrc() == $src) {
                OutputEntryEvaluationException::fromOutputEntry($output);
                return $output;
            }
        }

        throw OutputEntryNotFoundException::src($src);
    }

    /**
     * @param string $action
     * @return OutputEntry
     * @throws OutputEntryEvaluationException|OutputEntryNotFoundException
     * @psalm-suppress PossiblyUnusedReturnValue
     */
    public function outputByAction(string $action): OutputEntry
    {
        foreach ($this->getOutputs() as $output) {
            if ($output->getAction() == $action) {
                OutputEntryEvaluationException::fromOutputEntry($output);
                return $output;
            }
        }

        throw OutputEntryNotFoundException::action($action);
    }

    /**
     * @return \Cerbos\Response\V1\CheckResourcesResponse\ResultEntry
     */
    public function toResultEntry(): \Cerbos\Response\V1\CheckResourcesResponse\ResultEntry
    {
        return $this->resultEntry;
    }
}
