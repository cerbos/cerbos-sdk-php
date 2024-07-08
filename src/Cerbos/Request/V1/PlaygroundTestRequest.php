<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/request/v1/request.proto

namespace Cerbos\Request\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.request.v1.PlaygroundTestRequest</code>
 */
class PlaygroundTestRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string playground_id = 1 [json_name = "playgroundId"];</code>
     */
    protected $playground_id = '';
    /**
     * Generated from protobuf field <code>repeated .cerbos.request.v1.File files = 2 [json_name = "files", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $files;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $playground_id
     *     @type array<\Cerbos\Request\V1\File>|\Google\Protobuf\Internal\RepeatedField $files
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Request\V1\Request::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string playground_id = 1 [json_name = "playgroundId"];</code>
     * @return string
     */
    public function getPlaygroundId()
    {
        return $this->playground_id;
    }

    /**
     * Generated from protobuf field <code>string playground_id = 1 [json_name = "playgroundId"];</code>
     * @param string $var
     * @return $this
     */
    public function setPlaygroundId($var)
    {
        GPBUtil::checkString($var, True);
        $this->playground_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.request.v1.File files = 2 [json_name = "files", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.request.v1.File files = 2 [json_name = "files", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param array<\Cerbos\Request\V1\File>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Request\V1\File::class);
        $this->files = $arr;

        return $this;
    }

}

