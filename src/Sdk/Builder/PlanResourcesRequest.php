<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Builder;

use Exception;

final class PlanResourcesRequest
{
    private ?AuxData $auxData;
    private ?string $action;
    private array $actions;
    private bool $includeMeta;
    private ?Principal $principal;
    private ?Resource $resource;
    private ?string $requestId;

    private function __construct() {
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
    public static function newInstance(): PlanResourcesRequest {
        return new PlanResourcesRequest();
    }

    /**
     * Deprecated: Use withActions instead.
     * @param string $action
     * @return $this
     * @deprecated
     */
    public function withAction(string $action): PlanResourcesRequest {
        $this->action = $action;
        return $this;
    }

    /**
     * @param array<string> $actions
     * @return $this
     */
    public function withActions(array $actions): PlanResourcesRequest {
        foreach ($actions as $action) {
            $this->actions[] = $action;
        }
        return $this;
    }

    /**
     * @param AuxData $auxData
     * @return $this
     */
    public function withAuxData(AuxData $auxData): PlanResourcesRequest {
        $this->auxData = $auxData;
        return $this;
    }

    /**
     * @param bool $include
     * @return $this
     */
    public function withIncludeMeta(bool $include): PlanResourcesRequest {
        $this->includeMeta = $include;
        return $this;
    }

    /**
     * @param Principal $principal
     * @return $this
     */
    public function withPrincipal(Principal $principal): PlanResourcesRequest {
        $this->principal = $principal;
        return $this;
    }

    /**
     * @param Resource $resource
     * @return $this
     */
    public function withResource(Resource $resource): PlanResourcesRequest {
        $this->resource = $resource;
        return $this;
    }

    /**
     * @param string $requestId
     * @return $this
     */
    public function withRequestId(string $requestId): PlanResourcesRequest {
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * @return \Cerbos\Request\V1\PlanResourcesRequest
     * @throws Exception
     */
    public function toPlanResourcesRequest(): \Cerbos\Request\V1\PlanResourcesRequest {
        if (!isset($this->action) && count($this->actions) == 0) {
            throw new Exception("action(s) is empty or not set");
        }

        if (!isset($this->principal)) {
            throw new Exception("principal is not set");
        }

        if (!isset($this->resource)) {
            throw new Exception("resource is not set");
        }

        if (!isset($this->requestId)) {
            throw new Exception("request id is not set");
        }

        $request = (new \Cerbos\Request\V1\PlanResourcesRequest())
            ->setIncludeMeta($this->includeMeta)
            ->setPrincipal($this->principal->toPrincipal())
            ->setRequestId($this->requestId)
            ->setResource($this->resource->toPlanResource());

        if (isset($this->action) && count($this->actions) == 0) {
            /**
            * @psalm-suppress DeprecatedMethod
            */
            $request->setAction($this->action);
        }
        else if (!isset($this->action) && count($this->actions) != 0) {
            $request->setActions($this->actions);
        } else {
            throw new Exception("either use withAction or withActions for specifying action(s)");
        }

        if (isset($this->auxData)) {
            $request->setAuxData($this->auxData->toAuxData());
        }

        return $request;
    }
}
