<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cerbos/response/v1/response.proto

namespace Cerbos\Response\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.response.v1.DeleteSchemaResponse</code>
 */
class DeleteSchemaResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 deleted_schemas = 1 [json_name = "deletedSchemas"];</code>
     */
    protected $deleted_schemas = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $deleted_schemas
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Response\V1\Response::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 deleted_schemas = 1 [json_name = "deletedSchemas"];</code>
     * @return int
     */
    public function getDeletedSchemas()
    {
        return $this->deleted_schemas;
    }

    /**
     * Generated from protobuf field <code>uint32 deleted_schemas = 1 [json_name = "deletedSchemas"];</code>
     * @param int $var
     * @return $this
     */
    public function setDeletedSchemas($var)
    {
        GPBUtil::checkUint32($var);
        $this->deleted_schemas = $var;

        return $this;
    }

}

