<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/response/v1/response.proto

namespace Cerbos\Response\V1\InspectPoliciesResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * Generated from protobuf message <code>cerbos.response.v1.InspectPoliciesResponse.Variable</code>
 */
class Variable extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1 [json_name = "name", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string value = 2 [json_name = "value", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $value = '';
    /**
     * Generated from protobuf field <code>.cerbos.response.v1.InspectPoliciesResponse.Variable.Kind kind = 3 [json_name = "kind", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $kind = 0;
    /**
     * Generated from protobuf field <code>string source = 4 [json_name = "source", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $source = '';
    /**
     * Generated from protobuf field <code>bool used = 5 [json_name = "used", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $used = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type string $value
     *     @type int $kind
     *     @type string $source
     *     @type bool $used
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Response\V1\Response::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1 [json_name = "name", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1 [json_name = "name", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string value = 2 [json_name = "value", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>string value = 2 [json_name = "value", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.response.v1.InspectPoliciesResponse.Variable.Kind kind = 3 [json_name = "kind", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Generated from protobuf field <code>.cerbos.response.v1.InspectPoliciesResponse.Variable.Kind kind = 3 [json_name = "kind", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param int $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkEnum($var, \Cerbos\Response\V1\InspectPoliciesResponse\Variable\Kind::class);
        $this->kind = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string source = 4 [json_name = "source", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Generated from protobuf field <code>string source = 4 [json_name = "source", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool used = 5 [json_name = "used", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getUsed()
    {
        return $this->used;
    }

    /**
     * Generated from protobuf field <code>bool used = 5 [json_name = "used", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setUsed($var)
    {
        GPBUtil::checkBool($var);
        $this->used = $var;

        return $this;
    }

}

