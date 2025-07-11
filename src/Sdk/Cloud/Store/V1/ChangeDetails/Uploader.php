<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Store\V1\ChangeDetails;

final class Uploader {
    private \Cerbos\Cloud\Store\V1\ChangeDetails\Uploader $uploader;

    /**
     * @param string $name
     */
    private function __construct(
        string $name
    ) {
        $this->uploader = new \Cerbos\Cloud\Store\V1\ChangeDetails\Uploader([
            'name' => $name
        ]);
    }

    /**
     * @param string $name
     * @return Uploader
     */
    public static function newInstance(
        string $name
    ): Uploader {
        return new Uploader($name);
    }

    /**
     * @param string $key
     * @param MetadataValue $value
     * @return $this
     */
    public function withMetadata(string $key, MetadataValue $value): Uploader {
        $newMetadata = array();
        foreach ($this->uploader->getMetadata()->getIterator() as $k => $v) {
            $newMetadata[$k] = $v;
        }
        $newMetadata[$key] = $value->toValue();

        $this->uploader->setMetadata($newMetadata);
        return $this;
    }

    /**
     * @param array<string, MetadataValue> $metadata
     * @return $this
     */
    public function withMetadatas(array $metadata): Uploader {
        $newMetadata = array();
        foreach ($this->uploader->getMetadata()->getIterator() as $k => $v) {
            $newMetadata[$k] = $v;
        }

        foreach ($metadata as $k => $v) {
            $newMetadata[$k] = $v->toValue();
        }

        $this->uploader->setMetadata($newMetadata);
        return $this;
    }

    /**
     * @return \Cerbos\Cloud\Store\V1\ChangeDetails\Uploader
     */
    public function toUploader(): \Cerbos\Cloud\Store\V1\ChangeDetails\Uploader {
        return $this->uploader;
    }
}