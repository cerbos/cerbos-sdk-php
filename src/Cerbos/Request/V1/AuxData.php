<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cerbos/request/v1/request.proto

namespace Cerbos\Request\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.request.v1.AuxData</code>
 */
class AuxData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.cerbos.request.v1.AuxData.JWT jwt = 1 [json_name = "jwt"];</code>
     */
    protected $jwt = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cerbos\Request\V1\AuxData\JWT $jwt
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Request\V1\Request::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.cerbos.request.v1.AuxData.JWT jwt = 1 [json_name = "jwt"];</code>
     * @return \Cerbos\Request\V1\AuxData\JWT|null
     */
    public function getJwt()
    {
        return $this->jwt;
    }

    public function hasJwt()
    {
        return isset($this->jwt);
    }

    public function clearJwt()
    {
        unset($this->jwt);
    }

    /**
     * Generated from protobuf field <code>.cerbos.request.v1.AuxData.JWT jwt = 1 [json_name = "jwt"];</code>
     * @param \Cerbos\Request\V1\AuxData\JWT $var
     * @return $this
     */
    public function setJwt($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Request\V1\AuxData\JWT::class);
        $this->jwt = $var;

        return $this;
    }

}

