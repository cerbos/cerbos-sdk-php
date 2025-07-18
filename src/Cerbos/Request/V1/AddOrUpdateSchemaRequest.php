<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/request/v1/request.proto

namespace Cerbos\Request\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * Generated from protobuf message <code>cerbos.request.v1.AddOrUpdateSchemaRequest</code>
 */
class AddOrUpdateSchemaRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .cerbos.schema.v1.Schema schemas = 1 [json_name = "schemas", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $schemas;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cerbos\Schema\V1\Schema[] $schemas
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Request\V1\Request::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.schema.v1.Schema schemas = 1 [json_name = "schemas", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return RepeatedField<\Cerbos\Schema\V1\Schema>
     */
    public function getSchemas()
    {
        return $this->schemas;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.schema.v1.Schema schemas = 1 [json_name = "schemas", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Cerbos\Schema\V1\Schema[] $var
     * @return $this
     */
    public function setSchemas($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Schema\V1\Schema::class);
        $this->schemas = $arr;

        return $this;
    }

}

