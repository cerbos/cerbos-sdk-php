<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0
//
namespace Cerbos\Svc\V1;

/**
 */
class CerbosPlaygroundServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Cerbos\Request\V1\PlaygroundValidateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cerbos\Response\V1\PlaygroundValidateResponse>
     */
    public function PlaygroundValidate(\Cerbos\Request\V1\PlaygroundValidateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cerbos.svc.v1.CerbosPlaygroundService/PlaygroundValidate',
        $argument,
        ['\Cerbos\Response\V1\PlaygroundValidateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cerbos\Request\V1\PlaygroundTestRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cerbos\Response\V1\PlaygroundTestResponse>
     */
    public function PlaygroundTest(\Cerbos\Request\V1\PlaygroundTestRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cerbos.svc.v1.CerbosPlaygroundService/PlaygroundTest',
        $argument,
        ['\Cerbos\Response\V1\PlaygroundTestResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cerbos\Request\V1\PlaygroundEvaluateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cerbos\Response\V1\PlaygroundEvaluateResponse>
     */
    public function PlaygroundEvaluate(\Cerbos\Request\V1\PlaygroundEvaluateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cerbos.svc.v1.CerbosPlaygroundService/PlaygroundEvaluate',
        $argument,
        ['\Cerbos\Response\V1\PlaygroundEvaluateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cerbos\Request\V1\PlaygroundProxyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cerbos\Response\V1\PlaygroundProxyResponse>
     */
    public function PlaygroundProxy(\Cerbos\Request\V1\PlaygroundProxyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cerbos.svc.v1.CerbosPlaygroundService/PlaygroundProxy',
        $argument,
        ['\Cerbos\Response\V1\PlaygroundProxyResponse', 'decode'],
        $metadata, $options);
    }

}
