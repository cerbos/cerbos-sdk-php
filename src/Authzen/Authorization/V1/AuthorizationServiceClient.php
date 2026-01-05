<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0
//
namespace Authzen\Authorization\V1;

/**
 * AuthZEN Authorization Service
 */
class AuthorizationServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Metadata returns the Policy Decision Point metadata
     * @param \Authzen\Authorization\V1\MetadataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Authzen\Authorization\V1\MetadataResponse>
     */
    public function Metadata(\Authzen\Authorization\V1\MetadataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authzen.authorization.v1.AuthorizationService/Metadata',
        $argument,
        ['\Authzen\Authorization\V1\MetadataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Evaluate performs an access evaluation
     * @param \Authzen\Authorization\V1\AccessEvaluationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Authzen\Authorization\V1\AccessEvaluationResponse>
     */
    public function AccessEvaluation(\Authzen\Authorization\V1\AccessEvaluationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authzen.authorization.v1.AuthorizationService/AccessEvaluation',
        $argument,
        ['\Authzen\Authorization\V1\AccessEvaluationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Evaluate performs an access evaluation
     * @param \Authzen\Authorization\V1\AccessEvaluationBatchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Authzen\Authorization\V1\AccessEvaluationBatchResponse>
     */
    public function AccessEvaluationBatch(\Authzen\Authorization\V1\AccessEvaluationBatchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authzen.authorization.v1.AuthorizationService/AccessEvaluationBatch',
        $argument,
        ['\Authzen\Authorization\V1\AccessEvaluationBatchResponse', 'decode'],
        $metadata, $options);
    }

}
