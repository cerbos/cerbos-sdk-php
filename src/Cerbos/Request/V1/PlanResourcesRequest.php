<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cerbos/request/v1/request.proto

namespace Cerbos\Request\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.request.v1.PlanResourcesRequest</code>
 */
class PlanResourcesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string request_id = 1 [json_name = "requestId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $request_id = '';
    /**
     * Generated from protobuf field <code>string action = 2 [json_name = "action", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $action = '';
    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.Principal principal = 3 [json_name = "principal", (.google.api.field_behavior) = REQUIRED, (.validate.rules) = {</code>
     */
    protected $principal = null;
    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.PlanResourcesInput.Resource resource = 4 [json_name = "resource", (.google.api.field_behavior) = REQUIRED, (.validate.rules) = {</code>
     */
    protected $resource = null;
    /**
     * Generated from protobuf field <code>.cerbos.request.v1.AuxData aux_data = 5 [json_name = "auxData", (.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $aux_data = null;
    /**
     * Generated from protobuf field <code>bool include_meta = 6 [json_name = "includeMeta", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $include_meta = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $request_id
     *     @type string $action
     *     @type \Cerbos\Engine\V1\Principal $principal
     *     @type \Cerbos\Engine\V1\PlanResourcesInput\Resource $resource
     *     @type \Cerbos\Request\V1\AuxData $aux_data
     *     @type bool $include_meta
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
     * Generated from protobuf field <code>string action = 2 [json_name = "action", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Generated from protobuf field <code>string action = 2 [json_name = "action", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->action = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.Principal principal = 3 [json_name = "principal", (.google.api.field_behavior) = REQUIRED, (.validate.rules) = {</code>
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
     * Generated from protobuf field <code>.cerbos.engine.v1.Principal principal = 3 [json_name = "principal", (.google.api.field_behavior) = REQUIRED, (.validate.rules) = {</code>
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
     * Generated from protobuf field <code>.cerbos.engine.v1.PlanResourcesInput.Resource resource = 4 [json_name = "resource", (.google.api.field_behavior) = REQUIRED, (.validate.rules) = {</code>
     * @return \Cerbos\Engine\V1\PlanResourcesInput\Resource|null
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
     * Generated from protobuf field <code>.cerbos.engine.v1.PlanResourcesInput.Resource resource = 4 [json_name = "resource", (.google.api.field_behavior) = REQUIRED, (.validate.rules) = {</code>
     * @param \Cerbos\Engine\V1\PlanResourcesInput\Resource $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Engine\V1\PlanResourcesInput\Resource::class);
        $this->resource = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.request.v1.AuxData aux_data = 5 [json_name = "auxData", (.google.api.field_behavior) = OPTIONAL];</code>
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
     * Generated from protobuf field <code>.cerbos.request.v1.AuxData aux_data = 5 [json_name = "auxData", (.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Cerbos\Request\V1\AuxData $var
     * @return $this
     */
    public function setAuxData($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Request\V1\AuxData::class);
        $this->aux_data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool include_meta = 6 [json_name = "includeMeta", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getIncludeMeta()
    {
        return $this->include_meta;
    }

    /**
     * Generated from protobuf field <code>bool include_meta = 6 [json_name = "includeMeta", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeMeta($var)
    {
        GPBUtil::checkBool($var);
        $this->include_meta = $var;

        return $this;
    }

}

