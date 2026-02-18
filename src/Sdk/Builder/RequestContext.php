<?php

// Copyright 2021-2026 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Builder;

final class RequestContext
{
    private \Cerbos\Audit\V1\RequestContext $requestContext;

    /**
     * @param array<string, \Google\Protobuf\Value>|null $annotations
     */
    private function __construct(?array $annotations = null)
    {
        if (isset($annotations)) {
            $this->requestContext = new \Cerbos\Audit\V1\RequestContext([
                'annotations' => $annotations
            ]);

            return;
        }

        $this->requestContext = new \Cerbos\Audit\V1\RequestContext();
    }

    /**
     * @return RequestContext
     */
    public static function newInstance(): RequestContext
    {
        return new RequestContext();
    }

    /**
     * @param array<string, AttributeValue> $annotations
     * @return RequestContext
     */
    public static function withAnnotations(array $annotations): RequestContext
    {
        $a = array();
        foreach ($annotations as $key => $value) {
            $a[$key] = $value->toValue();
        }

        return new RequestContext($a);
    }

    /**
     * @param string $key
     * @param AttributeValue $value
     * @return RequestContext
     */
    public function withAnnotation(string $key, AttributeValue $value): RequestContext
    {
        $annotations = array();
        foreach ($this->requestContext->getAnnotations()->getIterator() as $k => $v) {
            $annotations[$k] = $v;
        }

        $annotations[$key] = $value->toValue();

        $this->requestContext->setAnnotations($annotations);

        return $this;
    }

    /**
     * @return \Cerbos\Audit\V1\RequestContext
     */
    public function toRequestContext(): \Cerbos\Audit\V1\RequestContext
    {
        return $this->requestContext;
    }
}
