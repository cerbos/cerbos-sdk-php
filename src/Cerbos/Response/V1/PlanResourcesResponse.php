<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cerbos/response/v1/response.proto

namespace Cerbos\Response\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.response.v1.PlanResourcesResponse</code>
 */
class PlanResourcesResponse extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>string resource_kind = 3 [json_name = "resourceKind", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $resource_kind = '';
    /**
     * Generated from protobuf field <code>string policy_version = 4 [json_name = "policyVersion", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $policy_version = '';
    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.PlanResourcesFilter filter = 5 [json_name = "filter", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $filter = null;
    /**
     * Generated from protobuf field <code>.cerbos.response.v1.PlanResourcesResponse.Meta meta = 6 [json_name = "meta", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $meta = null;
    /**
     * Generated from protobuf field <code>repeated .cerbos.schema.v1.ValidationError validation_errors = 7 [json_name = "validationErrors", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $validation_errors;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $request_id
     *     @type string $action
     *     @type string $resource_kind
     *     @type string $policy_version
     *     @type \Cerbos\Engine\V1\PlanResourcesFilter $filter
     *     @type \Cerbos\Response\V1\PlanResourcesResponse\Meta $meta
     *     @type array<\Cerbos\Schema\V1\ValidationError>|\Google\Protobuf\Internal\RepeatedField $validation_errors
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
     * Generated from protobuf field <code>string resource_kind = 3 [json_name = "resourceKind", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getResourceKind()
    {
        return $this->resource_kind;
    }

    /**
     * Generated from protobuf field <code>string resource_kind = 3 [json_name = "resourceKind", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_kind = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string policy_version = 4 [json_name = "policyVersion", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getPolicyVersion()
    {
        return $this->policy_version;
    }

    /**
     * Generated from protobuf field <code>string policy_version = 4 [json_name = "policyVersion", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPolicyVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->policy_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.PlanResourcesFilter filter = 5 [json_name = "filter", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Cerbos\Engine\V1\PlanResourcesFilter|null
     */
    public function getFilter()
    {
        return $this->filter;
    }

    public function hasFilter()
    {
        return isset($this->filter);
    }

    public function clearFilter()
    {
        unset($this->filter);
    }

    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.PlanResourcesFilter filter = 5 [json_name = "filter", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Cerbos\Engine\V1\PlanResourcesFilter $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Engine\V1\PlanResourcesFilter::class);
        $this->filter = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.response.v1.PlanResourcesResponse.Meta meta = 6 [json_name = "meta", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Cerbos\Response\V1\PlanResourcesResponse\Meta|null
     */
    public function getMeta()
    {
        return $this->meta;
    }

    public function hasMeta()
    {
        return isset($this->meta);
    }

    public function clearMeta()
    {
        unset($this->meta);
    }

    /**
     * Generated from protobuf field <code>.cerbos.response.v1.PlanResourcesResponse.Meta meta = 6 [json_name = "meta", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Cerbos\Response\V1\PlanResourcesResponse\Meta $var
     * @return $this
     */
    public function setMeta($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Response\V1\PlanResourcesResponse\Meta::class);
        $this->meta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.schema.v1.ValidationError validation_errors = 7 [json_name = "validationErrors", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidationErrors()
    {
        return $this->validation_errors;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.schema.v1.ValidationError validation_errors = 7 [json_name = "validationErrors", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param array<\Cerbos\Schema\V1\ValidationError>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValidationErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Schema\V1\ValidationError::class);
        $this->validation_errors = $arr;

        return $this;
    }

}
