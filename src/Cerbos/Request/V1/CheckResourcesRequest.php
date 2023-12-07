<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cerbos/request/v1/request.proto

namespace Cerbos\Request\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Structure of the request for the check resources API call.
 *
 * Generated from protobuf message <code>cerbos.request.v1.CheckResourcesRequest</code>
 */
class CheckResourcesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string request_id = 1 [json_name = "requestId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $request_id = '';
    /**
     * Generated from protobuf field <code>bool include_meta = 2 [json_name = "includeMeta", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $include_meta = false;
    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.Principal principal = 3 [json_name = "principal", (.google.api.field_behavior) = REQUIRED, (.buf.validate.field) = {</code>
     */
    protected $principal = null;
    /**
     * Generated from protobuf field <code>repeated .cerbos.request.v1.CheckResourcesRequest.ResourceEntry resources = 4 [json_name = "resources", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $resources;
    /**
     * Generated from protobuf field <code>.cerbos.request.v1.AuxData aux_data = 5 [json_name = "auxData"];</code>
     */
    protected $aux_data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $request_id
     *     @type bool $include_meta
     *     @type \Cerbos\Engine\V1\Principal $principal
     *     @type array<\Cerbos\Request\V1\CheckResourcesRequest\ResourceEntry>|\Google\Protobuf\Internal\RepeatedField $resources
     *     @type \Cerbos\Request\V1\AuxData $aux_data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Request\V1\Request::initOnce();
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
     * Generated from protobuf field <code>bool include_meta = 2 [json_name = "includeMeta", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getIncludeMeta()
    {
        return $this->include_meta;
    }

    /**
     * Generated from protobuf field <code>bool include_meta = 2 [json_name = "includeMeta", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeMeta($var)
    {
        GPBUtil::checkBool($var);
        $this->include_meta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.Principal principal = 3 [json_name = "principal", (.google.api.field_behavior) = REQUIRED, (.buf.validate.field) = {</code>
     * @return \Cerbos\Engine\V1\Principal|null
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    public function hasPrincipal()
    {
        return isset($this->principal);
    }

    public function clearPrincipal()
    {
        unset($this->principal);
    }

    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.Principal principal = 3 [json_name = "principal", (.google.api.field_behavior) = REQUIRED, (.buf.validate.field) = {</code>
     * @param \Cerbos\Engine\V1\Principal $var
     * @return $this
     */
    public function setPrincipal($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Engine\V1\Principal::class);
        $this->principal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.request.v1.CheckResourcesRequest.ResourceEntry resources = 4 [json_name = "resources", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.request.v1.CheckResourcesRequest.ResourceEntry resources = 4 [json_name = "resources", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param array<\Cerbos\Request\V1\CheckResourcesRequest\ResourceEntry>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Request\V1\CheckResourcesRequest\ResourceEntry::class);
        $this->resources = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.request.v1.AuxData aux_data = 5 [json_name = "auxData"];</code>
     * @return \Cerbos\Request\V1\AuxData|null
     */
    public function getAuxData()
    {
        return $this->aux_data;
    }

    public function hasAuxData()
    {
        return isset($this->aux_data);
    }

    public function clearAuxData()
    {
        unset($this->aux_data);
    }

    /**
     * Generated from protobuf field <code>.cerbos.request.v1.AuxData aux_data = 5 [json_name = "auxData"];</code>
     * @param \Cerbos\Request\V1\AuxData $var
     * @return $this
     */
    public function setAuxData($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Request\V1\AuxData::class);
        $this->aux_data = $var;

        return $this;
    }

}

