<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0
//
namespace Cerbos\Svc\V1;

/**
 */
class CerbosAdminServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Cerbos\Request\V1\AddOrUpdatePolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cerbos\Response\V1\AddOrUpdatePolicyResponse>
     */
    public function AddOrUpdatePolicy(\Cerbos\Request\V1\AddOrUpdatePolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cerbos.svc.v1.CerbosAdminService/AddOrUpdatePolicy',
        $argument,
        ['\Cerbos\Response\V1\AddOrUpdatePolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cerbos\Request\V1\InspectPoliciesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cerbos\Response\V1\InspectPoliciesResponse>
     */
    public function InspectPolicies(\Cerbos\Request\V1\InspectPoliciesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cerbos.svc.v1.CerbosAdminService/InspectPolicies',
        $argument,
        ['\Cerbos\Response\V1\InspectPoliciesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cerbos\Request\V1\ListPoliciesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cerbos\Response\V1\ListPoliciesResponse>
     */
    public function ListPolicies(\Cerbos\Request\V1\ListPoliciesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cerbos.svc.v1.CerbosAdminService/ListPolicies',
        $argument,
        ['\Cerbos\Response\V1\ListPoliciesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cerbos\Request\V1\GetPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cerbos\Response\V1\GetPolicyResponse>
     */
    public function GetPolicy(\Cerbos\Request\V1\GetPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cerbos.svc.v1.CerbosAdminService/GetPolicy',
        $argument,
        ['\Cerbos\Response\V1\GetPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cerbos\Request\V1\DisablePolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cerbos\Response\V1\DisablePolicyResponse>
     */
    public function DisablePolicy(\Cerbos\Request\V1\DisablePolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cerbos.svc.v1.CerbosAdminService/DisablePolicy',
        $argument,
        ['\Cerbos\Response\V1\DisablePolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cerbos\Request\V1\EnablePolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cerbos\Response\V1\EnablePolicyResponse>
     */
    public function EnablePolicy(\Cerbos\Request\V1\EnablePolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cerbos.svc.v1.CerbosAdminService/EnablePolicy',
        $argument,
        ['\Cerbos\Response\V1\EnablePolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cerbos\Request\V1\ListAuditLogEntriesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListAuditLogEntries(\Cerbos\Request\V1\ListAuditLogEntriesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/cerbos.svc.v1.CerbosAdminService/ListAuditLogEntries',
        $argument,
        ['\Cerbos\Response\V1\ListAuditLogEntriesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cerbos\Request\V1\AddOrUpdateSchemaRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cerbos\Response\V1\AddOrUpdateSchemaResponse>
     */
    public function AddOrUpdateSchema(\Cerbos\Request\V1\AddOrUpdateSchemaRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cerbos.svc.v1.CerbosAdminService/AddOrUpdateSchema',
        $argument,
        ['\Cerbos\Response\V1\AddOrUpdateSchemaResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cerbos\Request\V1\ListSchemasRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cerbos\Response\V1\ListSchemasResponse>
     */
    public function ListSchemas(\Cerbos\Request\V1\ListSchemasRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cerbos.svc.v1.CerbosAdminService/ListSchemas',
        $argument,
        ['\Cerbos\Response\V1\ListSchemasResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cerbos\Request\V1\GetSchemaRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cerbos\Response\V1\GetSchemaResponse>
     */
    public function GetSchema(\Cerbos\Request\V1\GetSchemaRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cerbos.svc.v1.CerbosAdminService/GetSchema',
        $argument,
        ['\Cerbos\Response\V1\GetSchemaResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cerbos\Request\V1\DeleteSchemaRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cerbos\Response\V1\DeleteSchemaResponse>
     */
    public function DeleteSchema(\Cerbos\Request\V1\DeleteSchemaRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cerbos.svc.v1.CerbosAdminService/DeleteSchema',
        $argument,
        ['\Cerbos\Response\V1\DeleteSchemaResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cerbos\Request\V1\ReloadStoreRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cerbos\Response\V1\ReloadStoreResponse>
     */
    public function ReloadStore(\Cerbos\Request\V1\ReloadStoreRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cerbos.svc.v1.CerbosAdminService/ReloadStore',
        $argument,
        ['\Cerbos\Response\V1\ReloadStoreResponse', 'decode'],
        $metadata, $options);
    }

}
