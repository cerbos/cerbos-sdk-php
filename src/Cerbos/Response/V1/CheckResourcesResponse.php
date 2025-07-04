<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/response/v1/response.proto

namespace Cerbos\Response\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * Generated from protobuf message <code>cerbos.response.v1.CheckResourcesResponse</code>
 */
class CheckResourcesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string request_id = 1 [json_name = "requestId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $request_id = '';
    /**
     * Generated from protobuf field <code>repeated .cerbos.response.v1.CheckResourcesResponse.ResultEntry results = 2 [json_name = "results", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $results;
    /**
     * Generated from protobuf field <code>string cerbos_call_id = 3 [json_name = "cerbosCallId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $cerbos_call_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $request_id
     *     @type \Cerbos\Response\V1\CheckResourcesResponse\ResultEntry[] $results
     *     @type string $cerbos_call_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Response\V1\Response::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string request_id = 1 [json_name = "requestId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Generated from protobuf field <code>string request_id = 1 [json_name = "requestId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.response.v1.CheckResourcesResponse.ResultEntry results = 2 [json_name = "results", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return RepeatedField<\Cerbos\Response\V1\CheckResourcesResponse\ResultEntry>
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.response.v1.CheckResourcesResponse.ResultEntry results = 2 [json_name = "results", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Cerbos\Response\V1\CheckResourcesResponse\ResultEntry[] $var
     * @return $this
     */
    public function setResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Response\V1\CheckResourcesResponse\ResultEntry::class);
        $this->results = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cerbos_call_id = 3 [json_name = "cerbosCallId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getCerbosCallId()
    {
        return $this->cerbos_call_id;
    }

    /**
     * Generated from protobuf field <code>string cerbos_call_id = 3 [json_name = "cerbosCallId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCerbosCallId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cerbos_call_id = $var;

        return $this;
    }

}

