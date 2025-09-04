<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0
//
namespace Cerbos\Cloud\Bundle\V2;

/**
 */
class CerbosBundleServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Cerbos\Cloud\Bundle\V2\GetBundleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cerbos\Cloud\Bundle\V2\GetBundleResponse>
     */
    public function GetBundle(\Cerbos\Cloud\Bundle\V2\GetBundleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cerbos.cloud.bundle.v2.CerbosBundleService/GetBundle',
        $argument,
        ['\Cerbos\Cloud\Bundle\V2\GetBundleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\BidiStreamingCall
     */
    public function WatchBundle($metadata = [], $options = []) {
        return $this->_bidiRequest('/cerbos.cloud.bundle.v2.CerbosBundleService/WatchBundle',
        ['\Cerbos\Cloud\Bundle\V2\WatchBundleResponse','decode'],
        $metadata, $options);
    }

}
