<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1;

use Cerbos\Sdk\Cloud\Store\V1\ModifyFilesRequest\Condition;

final class ModifyFilesRequest {
    private \Cerbos\Cloud\Store\V1\ModifyFilesRequest $request;

    /**
     * @param array $data {
     *     @type string $store_id
     *     @type FileOp[] $operations
     * }
     */
    private function __construct(array $data) {
        $this->request = new \Cerbos\Cloud\Store\V1\ModifyFilesRequest([
            'store_id' => $data['store_id']
        ]);

        if (isset($data['operations'])) {
            $fileOperations = array();
            foreach ($data['operations'] as $operation) {
                $fileOperations[] = $operation->toFileOp();
            }

            $this->request->setOperations($fileOperations);
        }
    }

    /**
     * @param array $data {
     *     @type string $store_id
     *     @type FileOp[] $operations
     * }
     * @return ModifyFilesRequest
     */
    public static function newInstance(array $data): ModifyFilesRequest {
        return new ModifyFilesRequest($data);
    }

    /**
     * @param Condition $condition
     * @return $this
     */
    public function withCondition($condition): ModifyFilesRequest
    {
        $this->request->setCondition($condition->toCondition());
        return $this;
    }

    /**
     * @param ChangeDetails $changeDetails
     * @return $this
     */
    public function withChangeDetails($changeDetails): ModifyFilesRequest
    {
        $this->request->setChangeDetails($changeDetails->toChangeDetails());
        return $this;
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\ModifyFilesRequest
     */
    public function toModifyFilesRequest(): \Cerbos\Cloud\Store\V1\ModifyFilesRequest {
        return $this->request;
    }
}
