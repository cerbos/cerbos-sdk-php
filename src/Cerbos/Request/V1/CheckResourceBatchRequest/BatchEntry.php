<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cerbos/request/v1/request.proto

namespace Cerbos\Request\V1\CheckResourceBatchRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.request.v1.CheckResourceBatchRequest.BatchEntry</code>
 */
class BatchEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string actions = 1 [json_name = "actions", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $actions;
    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.Resource resource = 2 [json_name = "resource", (.google.api.field_behavior) = REQUIRED, (.validate.rules) = {</code>
     */
    protected $resource = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $actions
     *     @type \Cerbos\Engine\V1\Resource $resource
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Request\V1\Request::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string actions = 1 [json_name = "actions", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * Generated from protobuf field <code>repeated string actions = 1 [json_name = "actions", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->actions = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.Resource resource = 2 [json_name = "resource", (.google.api.field_behavior) = REQUIRED, (.validate.rules) = {</code>
     * @return \Cerbos\Engine\V1\Resource|null
     */
    public function getResource()
    {
        return $this->resource;
    }

    public function hasResource()
    {
        return isset($this->resource);
    }

    public function clearResource()
    {
        unset($this->resource);
    }

    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.Resource resource = 2 [json_name = "resource", (.google.api.field_behavior) = REQUIRED, (.validate.rules) = {</code>
     * @param \Cerbos\Engine\V1\Resource $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Engine\V1\Resource::class);
        $this->resource = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BatchEntry::class, \Cerbos\Request\V1\CheckResourceBatchRequest_BatchEntry::class);

