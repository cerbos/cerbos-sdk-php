<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2021-2026 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0
//
namespace Cerbos\Svc\V1;

/**
 */
class CerbosServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Cerbos\Request\V1\CheckResourceSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cerbos\Response\V1\CheckResourceSetResponse>
     */
    public function CheckResourceSet(\Cerbos\Request\V1\CheckResourceSetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cerbos.svc.v1.CerbosService/CheckResourceSet',
        $argument,
        ['\Cerbos\Response\V1\CheckResourceSetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cerbos\Request\V1\CheckResourceBatchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cerbos\Response\V1\CheckResourceBatchResponse>
     */
    public function CheckResourceBatch(\Cerbos\Request\V1\CheckResourceBatchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cerbos.svc.v1.CerbosService/CheckResourceBatch',
        $argument,
        ['\Cerbos\Response\V1\CheckResourceBatchResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cerbos\Request\V1\CheckResourcesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cerbos\Response\V1\CheckResourcesResponse>
     */
    public function CheckResources(\Cerbos\Request\V1\CheckResourcesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cerbos.svc.v1.CerbosService/CheckResources',
        $argument,
        ['\Cerbos\Response\V1\CheckResourcesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cerbos\Request\V1\ServerInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cerbos\Response\V1\ServerInfoResponse>
     */
    public function ServerInfo(\Cerbos\Request\V1\ServerInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cerbos.svc.v1.CerbosService/ServerInfo',
        $argument,
        ['\Cerbos\Response\V1\ServerInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cerbos\Request\V1\PlanResourcesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cerbos\Response\V1\PlanResourcesResponse>
     */
    public function PlanResources(\Cerbos\Request\V1\PlanResourcesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cerbos.svc.v1.CerbosService/PlanResources',
        $argument,
        ['\Cerbos\Response\V1\PlanResourcesResponse', 'decode'],
        $metadata, $options);
    }

}
