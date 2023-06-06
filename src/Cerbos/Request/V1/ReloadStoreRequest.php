<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cerbos/request/v1/request.proto

namespace Cerbos\Request\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.request.v1.ReloadStoreRequest</code>
 */
class ReloadStoreRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool wait = 1 [json_name = "wait", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $wait = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $wait
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Request\V1\Request::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool wait = 1 [json_name = "wait", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getWait()
    {
        return $this->wait;
    }

    /**
     * Generated from protobuf field <code>bool wait = 1 [json_name = "wait", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setWait($var)
    {
        GPBUtil::checkBool($var);
        $this->wait = $var;

        return $this;
    }

}

