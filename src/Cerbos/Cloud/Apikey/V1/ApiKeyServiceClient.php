<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0
//
namespace Cerbos\Cloud\Apikey\V1;

/**
 */
class ApiKeyServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Cerbos\Cloud\Apikey\V1\IssueAccessTokenRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function IssueAccessToken(\Cerbos\Cloud\Apikey\V1\IssueAccessTokenRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cerbos.cloud.apikey.v1.ApiKeyService/IssueAccessToken',
        $argument,
        ['\Cerbos\Cloud\Apikey\V1\IssueAccessTokenResponse', 'decode'],
        $metadata, $options);
    }

}
