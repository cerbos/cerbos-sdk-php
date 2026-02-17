<?php

// Copyright 2021-2026 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Builder;

use Cerbos\Sdk\Utility\RequestId;
use Exception;

final class PlanResourcesRequest
{
    private ?string $action;
    private array $actions;
    private bool $allowPartialRequests;
    private ?AuxData $auxData;
    private bool $includeMeta;
    private ?Principal $principal;
    private ?Resource $resource;
    private ?string $requestId;

    private function __construct()
    {
        $this->allowPartialRequests = false;
        $this->action = null;
        $this->actions = array();
        $this->auxData = null;
        $this->includeMeta = false;
        $this->principal = null;
        $this->resource = null;
        $this->requestId = null;
    }

    /**
     * @return PlanResourcesRequest
     */
    public static function newInstance(): PlanResourcesRequest
    {
        return new PlanResourcesRequest();
    }

    /**
     * Deprecated: Use withActions instead.
     * @param string $action
     * @return $this
     * @deprecated
     */
    public function withAction(string $action): PlanResourcesRequest
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @param array<string> $actions
     * @return $this
     */
    public function withActions(array $actions): PlanResourcesRequest
    {
        foreach ($actions as $action) {
            $this->actions[] = $action;
        }
        return $this;
    }

    /**
     * @param bool $allowPartialRequests
     * @return $this
     */
    public function withAllowPartialRequests(bool $allowPartialRequests): PlanResourcesRequest
    {
        $this->allowPartialRequests = $allowPartialRequests;
        return $this;
    }

    /**
     * @param AuxData $auxData
     * @return $this
     */
    public function withAuxData(AuxData $auxData): PlanResourcesRequest
    {
        $this->auxData = $auxData;
        return $this;
    }

    /**
     * @param bool $include
     * @return $this
     */
    public function withIncludeMeta(bool $include): PlanResourcesRequest
    {
        $this->includeMeta = $include;
        return $this;
    }

    /**
     * @param Principal $principal
     * @return $this
     */
    public function withPrincipal(Principal $principal): PlanResourcesRequest
    {
        $this->principal = $principal;
        return $this;
    }

    /**
     * @param Resource $resource
     * @return $this
     */
    public function withResource(Resource $resource): PlanResourcesRequest
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * @param string $requestId
     * @return $this
     */
    public function withRequestId(string $requestId): PlanResourcesRequest
    {
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * @return \Cerbos\Request\V1\PlanResourcesRequest
     * @throws Exception
     */
    public function toPlanResourcesRequest(): \Cerbos\Request\V1\PlanResourcesRequest
    {
        $request = (new \Cerbos\Request\V1\PlanResourcesRequest())
            ->setIncludeMeta($this->includeMeta)
            ->setRequestId(isset($this->requestId) ? $this->requestId : RequestId::generate());

        if (isset($this->action)) {
            /**
             * @psalm-suppress DeprecatedMethod
             */
            $request->setAction($this->action);
        } else if (count($this->actions) > 0) {
            $request->setActions($this->actions);
        } else if (!$this->allowPartialRequests) {
            throw new Exception("action(s) is empty or not set");
        }

        if (isset($this->auxData)) {
            $request->setAuxData($this->auxData->toAuxData());
        }

        if (isset($this->principal)) {
            $request->setPrincipal($this->principal->toPrincipal());
        } else if (!$this->allowPartialRequests) {
            throw new Exception("principal is not set");
        }

        if (isset($this->resource)) {
            $request->setResource($this->resource->toPlanResource());
        } else if (!$this->allowPartialRequests) {
            throw new Exception("resource is not set");
        }

        return $request;
    }
}
