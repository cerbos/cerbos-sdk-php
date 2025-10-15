<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2015 The gRPC Authors
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
// The canonical version of this proto can be found at
// https://github.com/grpc/grpc-proto/blob/master/grpc/health/v1/health.proto
//
namespace Grpc\Health\V1;

/**
 * Health is gRPC's mechanism for checking whether a server is able to handle
 * RPCs. Its semantics are documented in
 * https://github.com/grpc/grpc/blob/master/doc/health-checking.md.
 */
class HealthClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Check gets the health of the specified service. If the requested service
     * is unknown, the call will fail with status NOT_FOUND. If the caller does
     * not specify a service name, the server should respond with its overall
     * health status.
     *
     * Clients should set a deadline when calling Check, and can declare the
     * server unhealthy if they do not receive a timely response.
     * @param \Grpc\Health\V1\HealthCheckRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Grpc\Health\V1\HealthCheckResponse>
     */
    public function Check(\Grpc\Health\V1\HealthCheckRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/grpc.health.v1.Health/Check',
        $argument,
        ['\Grpc\Health\V1\HealthCheckResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List provides a non-atomic snapshot of the health of all the available
     * services.
     *
     * The server may respond with a RESOURCE_EXHAUSTED error if too many services
     * exist.
     *
     * Clients should set a deadline when calling List, and can declare the server
     * unhealthy if they do not receive a timely response.
     *
     * Clients should keep in mind that the list of health services exposed by an
     * application can change over the lifetime of the process.
     * @param \Grpc\Health\V1\HealthListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Grpc\Health\V1\HealthListResponse>
     */
    public function List(\Grpc\Health\V1\HealthListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/grpc.health.v1.Health/List',
        $argument,
        ['\Grpc\Health\V1\HealthListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Performs a watch for the serving status of the requested service.
     * The server will immediately send back a message indicating the current
     * serving status.  It will then subsequently send a new message whenever
     * the service's serving status changes.
     *
     * If the requested service is unknown when the call is received, the
     * server will send a message setting the serving status to
     * SERVICE_UNKNOWN but will *not* terminate the call.  If at some
     * future point, the serving status of the service becomes known, the
     * server will send a new message with the service's serving status.
     *
     * If the call terminates with status UNIMPLEMENTED, then clients
     * should assume this method is not supported and should not retry the
     * call.  If the call terminates with any other status (including OK),
     * clients should retry the call with appropriate exponential backoff.
     * @param \Grpc\Health\V1\HealthCheckRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function Watch(\Grpc\Health\V1\HealthCheckRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/grpc.health.v1.Health/Watch',
        $argument,
        ['\Grpc\Health\V1\HealthCheckResponse', 'decode'],
        $metadata, $options);
    }

}
