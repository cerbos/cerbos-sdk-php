<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

use Cerbos\Sdk\Cloud\Store\V1\ReplaceFilesRequest\Condition;
use Cerbos\Sdk\Cloud\Store\V1\ReplaceFilesRequest\Files;

final class ReplaceFilesRequest {
    private \Cerbos\Cloud\Store\V1\ReplaceFilesRequest $request;

    /**
     * @param array $data {
     *     @type string $store_id
     * }
     */
    private function __construct(array $data) {
        $this->request = new \Cerbos\Cloud\Store\V1\ReplaceFilesRequest($data);
    }

    /**
     * @param array $data {
     *     @type string $store_id
     * }
     * @return ReplaceFilesRequest
     */
    public static function newInstance(array $data): ReplaceFilesRequest {
        return new ReplaceFilesRequest($data);
    }

    /**
     * @param Condition $condition
     * @return $this
     */
    public function withCondition($condition): ReplaceFilesRequest
    {
        $this->request->setCondition($condition->toCondition());
        return $this;
    }

    /**
     * @param ChangeDetails $changeDetails
     * @return $this
     */
    public function withChangeDetails($changeDetails): ReplaceFilesRequest
    {
        $this->request->setChangeDetails($changeDetails->toChangeDetails());
        return $this;
    }

    /**
     * @param Files $files
     * @return $this
     */
    public function withFiles($files): ReplaceFilesRequest
    {
        $this->request->setFiles($files->toFiles());
        return $this;
    }

    /**
     * @param string $zippedContents
     * @return $this
     */
    public function withZippedContents($zippedContents): ReplaceFilesRequest
    {
        $this->request->setZippedContents($zippedContents);
        return $this;
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\ReplaceFilesRequest
     */
    public function toReplaceFilesRequest(): \Cerbos\Cloud\Store\V1\ReplaceFilesRequest {
        return $this->request;
    }
}
