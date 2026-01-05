<?php

// Copyright 2021-2026 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

use Cerbos\Sdk\Cloud\Store\V1\ReplaceFilesRequest\Condition;
use Cerbos\Sdk\Cloud\Store\V1\ReplaceFilesRequest\Files;

final class ReplaceFilesRequest
{
    private \Cerbos\Cloud\Store\V1\ReplaceFilesRequest $request;

    /**
     * @param string $storeId
     * @param Condition|null $condition
     * @param string|null $zippedContents
     * @param Files|null $files 
     * @param ChangeDetails|null $changeDetails
     */
    private function __construct(
        string $storeId,
        ?Condition $condition = null,
        ?string $zippedContents = null,
        ?Files $files = null,
        ?ChangeDetails $changeDetails = null
    ) {
        $this->request = new \Cerbos\Cloud\Store\V1\ReplaceFilesRequest([
            'store_id' => $storeId,
        ]);

        if (isset($condition)) {
            $this->request->setCondition($condition->toCondition());
        }

        if (isset($changeDetails)) {
            $this->request->setChangeDetails($changeDetails->toChangeDetails());
        }

        if (isset($files)) {
            $this->request->setFiles($files->toFiles());
        } elseif (isset($zippedContents)) {
            $this->request->setZippedContents($zippedContents);
        } else {
            throw new \Exception("files or zippedContents must be specified");
        }
    }

    /**
     * @param string $storeId
     * @param Files $files 
     * @param Condition|null $condition
     * @param ChangeDetails|null $changeDetails
     * @return ReplaceFilesRequest
     */
    public static function withFiles(
        string $storeId,
        Files $files,
        ?Condition $condition = null,
        ?ChangeDetails $changeDetails = null
    ): ReplaceFilesRequest {
        return new ReplaceFilesRequest(
            storeId: $storeId,
            files: $files,
            condition: $condition,
            changeDetails: $changeDetails
        );
    }

    /**
     * @param string $storeId
     * @param string $zippedContents
     * @param Condition|null $condition
     * @param ChangeDetails|null $changeDetails
     * @return ReplaceFilesRequest
     */
    public static function withZippedContents(
        string $storeId,
        string $zippedContents,
        ?Condition $condition = null,
        ?ChangeDetails $changeDetails = null
    ): ReplaceFilesRequest {
        return new ReplaceFilesRequest(
            storeId: $storeId,
            zippedContents: $zippedContents,
            condition: $condition,
            changeDetails: $changeDetails
        );
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\ReplaceFilesRequest
     */
    public function toReplaceFilesRequest(): \Cerbos\Cloud\Store\V1\ReplaceFilesRequest
    {
        return $this->request;
    }
}
