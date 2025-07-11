<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/engine/v1/engine.proto

namespace Cerbos\Engine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * Generated from protobuf message <code>cerbos.engine.v1.AuxData</code>
 */
class AuxData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> jwt = 1 [json_name = "jwt"];</code>
     */
    private $jwt;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $jwt
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Engine\V1\Engine::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> jwt = 1 [json_name = "jwt"];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getJwt()
    {
        return $this->jwt;
    }

    /**
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> jwt = 1 [json_name = "jwt"];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setJwt($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Value::class);
        $this->jwt = $arr;

        return $this;
    }

}

