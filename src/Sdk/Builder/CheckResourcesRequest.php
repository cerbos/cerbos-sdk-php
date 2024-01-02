<?php

// Copyright 2021-2024 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Builder;

use Exception;

class CheckResourcesRequest
{
    private ?AuxData $auxData;
    private bool $includeMeta;
    private ?Principal $principal;
    private array $resourceEntries;
    private ?string $requestId;

    private function __construct() {
        $this->auxData = null;
        $this->includeMeta = false;
        $this->principal = null;
        $this->resourceEntries = array();
        $this->requestId = null;
    }

    /**
     * @return CheckResourcesRequest
     */
    public static function newInstance(): CheckResourcesRequest {
        return new CheckResourcesRequest();
    }

    /**
     * @param AuxData $auxData
     * @return $this
     */
    public function withAuxData(AuxData $auxData): CheckResourcesRequest {
        $this->auxData = $auxData;
        return $this;
    }

    /**
     * @param bool $include
     * @return $this
     */
    public function withIncludeMeta(bool $include): CheckResourcesRequest {
        $this->includeMeta = $include;
        return $this;
    }

    /**
     * @param Principal $principal
     * @return $this
     */
    public function withPrincipal(Principal $principal): CheckResourcesRequest {
        $this->principal = $principal;
        return $this;
    }

    /**
     * @param ResourceEntry $resourceEntry
     * @return $this
     */
    public function withResourceEntry(ResourceEntry $resourceEntry): CheckResourcesRequest {
        $this->resourceEntries[] = $resourceEntry;
        return $this;
    }

    /**
     * @param array<ResourceEntry> $resourceEntries
     * @return $this
     */
    public function withResourceEntries(array $resourceEntries): CheckResourcesRequest {
        foreach ($resourceEntries as $resourceEntry) {
            $this->resourceEntries[] = $resourceEntry;
        }
        return $this;
    }

    /**
     * @param string $requestId
     * @return $this
     */
    public function withRequestId(string $requestId): CheckResourcesRequest {
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * @return \Cerbos\Request\V1\CheckResourcesRequest
     * @throws Exception
     */
    public function toCheckResourcesRequest(): \Cerbos\Request\V1\CheckResourcesRequest {
        if (!isset($this->principal)) {
            throw new Exception("principal is not set");
        }

        if (count($this->resourceEntries) == 0) {
            throw new Exception("resource entries is empty or not set");
        }

        if (!isset($this->requestId)) {
            throw new Exception("request id is not set");
        }

        $re = array();
        foreach ($this->resourceEntries as $resourceEntry) {
            $re[] = $resourceEntry->toResourceEntry();
        }

        $request = (new \Cerbos\Request\V1\CheckResourcesRequest())
            ->setIncludeMeta($this->includeMeta)
            ->setPrincipal($this->principal->toPrincipal())
            ->setRequestId($this->requestId)
            ->setResources($re);

        if (isset($this->auxData)) {
            $request->setAuxData($this->auxData->toAuxData());
        }

        return $request;
    }
}
