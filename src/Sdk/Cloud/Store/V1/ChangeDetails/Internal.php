<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1\ChangeDetails;

final class Internal
{
    private \Cerbos\Cloud\Store\V1\ChangeDetails\Internal $internal;

    /**
     * @param string $source
     */
    private function __construct(
        string $source
    ) {
        $this->internal = new \Cerbos\Cloud\Store\V1\ChangeDetails\Internal([
            'source' => $source
        ]);
    }

    /**
     * @param string $source
     * @return Internal
     */
    public static function newInstance(
        string $source
    ): Internal {
        return new Internal($source);
    }

    /**
     * @param string $key
     * @param MetadataValue $value
     * @return $this
     */
    public function withMetadata(string $key, MetadataValue $value): Internal
    {
        $newMetadata = array();
        foreach ($this->internal->getMetadata()->getIterator() as $k => $v) {
            $newMetadata[$k] = $v;
        }
        $newMetadata[$key] = $value->toValue();

        $this->internal->setMetadata($newMetadata);
        return $this;
    }

    /**
     * @param array<string, MetadataValue> $metadata
     * @return $this
     */
    public function withMetadatas(array $metadata): Internal
    {
        $newMetadata = array();
        foreach ($this->internal->getMetadata()->getIterator() as $k => $v) {
            $newMetadata[$k] = $v;
        }

        foreach ($metadata as $k => $v) {
            $newMetadata[$k] = $v->toValue();
        }

        $this->internal->setMetadata($newMetadata);
        return $this;
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\ChangeDetails\Internal
     */
    public function toInternal(): \Cerbos\Cloud\Store\V1\ChangeDetails\Internal
    {
        return $this->internal;
    }
}
