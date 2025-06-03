<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0
//
namespace Cerbos\Cloud\Logs\V1;

/**
 */
class CerbosLogsServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Cerbos\Cloud\Logs\V1\IngestRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Ingest(\Cerbos\Cloud\Logs\V1\IngestRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cerbos.cloud.logs.v1.CerbosLogsService/Ingest',
        $argument,
        ['\Cerbos\Cloud\Logs\V1\IngestResponse', 'decode'],
        $metadata, $options);
    }

}
