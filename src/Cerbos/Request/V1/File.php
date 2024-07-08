<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/request/v1/request.proto

namespace Cerbos\Request\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.request.v1.File</code>
 */
class File extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string file_name = 1 [json_name = "fileName", (.google.api.field_behavior) = REQUIRED, (.buf.validate.field) = {</code>
     */
    protected $file_name = '';
    /**
     * Generated from protobuf field <code>bytes contents = 2 [json_name = "contents", (.google.api.field_behavior) = REQUIRED, (.buf.validate.field) = {</code>
     */
    protected $contents = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $file_name
     *     @type string $contents
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Request\V1\Request::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string file_name = 1 [json_name = "fileName", (.google.api.field_behavior) = REQUIRED, (.buf.validate.field) = {</code>
     * @return string
     */
    public function getFileName()
    {
        return $this->file_name;
    }

    /**
     * Generated from protobuf field <code>string file_name = 1 [json_name = "fileName", (.google.api.field_behavior) = REQUIRED, (.buf.validate.field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setFileName($var)
    {
        GPBUtil::checkString($var, True);
        $this->file_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes contents = 2 [json_name = "contents", (.google.api.field_behavior) = REQUIRED, (.buf.validate.field) = {</code>
     * @return string
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * Generated from protobuf field <code>bytes contents = 2 [json_name = "contents", (.google.api.field_behavior) = REQUIRED, (.buf.validate.field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setContents($var)
    {
        GPBUtil::checkString($var, False);
        $this->contents = $var;

        return $this;
    }

}

