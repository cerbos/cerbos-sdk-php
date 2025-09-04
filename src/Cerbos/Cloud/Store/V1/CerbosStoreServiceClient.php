<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0
//
namespace Cerbos\Cloud\Store\V1;

/**
 */
class CerbosStoreServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Cerbos\Cloud\Store\V1\ListFilesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cerbos\Cloud\Store\V1\ListFilesResponse>
     */
    public function ListFiles(\Cerbos\Cloud\Store\V1\ListFilesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cerbos.cloud.store.v1.CerbosStoreService/ListFiles',
        $argument,
        ['\Cerbos\Cloud\Store\V1\ListFilesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cerbos\Cloud\Store\V1\GetFilesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cerbos\Cloud\Store\V1\GetFilesResponse>
     */
    public function GetFiles(\Cerbos\Cloud\Store\V1\GetFilesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cerbos.cloud.store.v1.CerbosStoreService/GetFiles',
        $argument,
        ['\Cerbos\Cloud\Store\V1\GetFilesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cerbos\Cloud\Store\V1\ModifyFilesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cerbos\Cloud\Store\V1\ModifyFilesResponse>
     */
    public function ModifyFiles(\Cerbos\Cloud\Store\V1\ModifyFilesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cerbos.cloud.store.v1.CerbosStoreService/ModifyFiles',
        $argument,
        ['\Cerbos\Cloud\Store\V1\ModifyFilesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cerbos\Cloud\Store\V1\ReplaceFilesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cerbos\Cloud\Store\V1\ReplaceFilesResponse>
     */
    public function ReplaceFiles(\Cerbos\Cloud\Store\V1\ReplaceFilesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cerbos.cloud.store.v1.CerbosStoreService/ReplaceFiles',
        $argument,
        ['\Cerbos\Cloud\Store\V1\ReplaceFilesResponse', 'decode'],
        $metadata, $options);
    }

}
