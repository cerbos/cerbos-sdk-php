<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

use Cerbos\Sdk\Cloud\Store\V1\ModifyFilesRequest\Condition;

final class ModifyFilesRequest {
    private \Cerbos\Cloud\Store\V1\ModifyFilesRequest $request;

    /**
     * @param string $storeId
     * @param Condition|null $condition
     * @param ChangeDetails|null $changeDetails
     * @param FileOp[] $operations
     */
    private function __construct(
        string $storeId,
        ?Condition $condition = null,
        ?ChangeDetails $changeDetails = null,
        FileOp ...$operations
    ) {
        $fileOperations = array();
        foreach ($operations as $operation) {
            $fileOperations[] = $operation->toFileOp();
        }

        $this->request = new \Cerbos\Cloud\Store\V1\ModifyFilesRequest([
            'store_id' => $storeId,
            'operations' => $fileOperations
        ]);

        if(isset($condition)) {
            $this->request->setCondition($condition->toCondition());
        }

        if(isset($changeDetails)) {
            $this->request->setChangeDetails($changeDetails->toChangeDetails());
        }
    }

    /**
     * @param string $storeId
     * @param Condition|null $condition
     * @param ChangeDetails|null $changeDetails
     * @param FileOp[] $operations
     * @return ModifyFilesRequest
     */
    public static function newInstance(
        string $storeId,
        ?Condition $condition,
        ?ChangeDetails $changeDetails,
        FileOp ...$operations
    ): ModifyFilesRequest {
        return new ModifyFilesRequest($storeId, $condition, $changeDetails, ...$operations);
    }

    /**
     * @param string $storeId
     * @param Condition $condition
     * @param FileOp[] $operations
     * @return ModifyFilesRequest
     */
    public static function withCondition(
        string $storeId,
        Condition $condition,
        FileOp ...$operations,
    ): ModifyFilesRequest {
        return new ModifyFilesRequest($storeId, $condition, null, ...$operations);
    }

    /**
     * @param string $storeId
     * @param ChangeDetails $changeDetails
     * @param FileOp[] $operations
     * @return ModifyFilesRequest
     */
    public static function withChangeDetails(
        string $storeId,
        ChangeDetails $changeDetails,
        FileOp ...$operations,
    ): ModifyFilesRequest {
        return new ModifyFilesRequest($storeId, null, $changeDetails, ...$operations);
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\ModifyFilesRequest
     */
    public function toModifyFilesRequest(): \Cerbos\Cloud\Store\V1\ModifyFilesRequest {
        return $this->request;
    }
}
