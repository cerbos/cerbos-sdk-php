<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/cloud/store/v1/store.proto

namespace Cerbos\Cloud\Store\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * Generated from protobuf message <code>cerbos.cloud.store.v1.StringMatch</code>
 */
class StringMatch extends \Google\Protobuf\Internal\Message
{
    protected $match;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $equals
     *     @type string $contains
     *     @type \Cerbos\Cloud\Store\V1\StringMatch\InList $in
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Cloud\Store\V1\Store::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string equals = 1 [json_name = "equals"];</code>
     * @return string
     */
    public function getEquals()
    {
        return $this->readOneof(1);
    }

    public function hasEquals()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>string equals = 1 [json_name = "equals"];</code>
     * @param string $var
     * @return $this
     */
    public function setEquals($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string contains = 2 [json_name = "contains"];</code>
     * @return string
     */
    public function getContains()
    {
        return $this->readOneof(2);
    }

    public function hasContains()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>string contains = 2 [json_name = "contains"];</code>
     * @param string $var
     * @return $this
     */
    public function setContains($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.cloud.store.v1.StringMatch.InList in = 3 [json_name = "in"];</code>
     * @return \Cerbos\Cloud\Store\V1\StringMatch\InList|null
     */
    public function getIn()
    {
        return $this->readOneof(3);
    }

    public function hasIn()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.cerbos.cloud.store.v1.StringMatch.InList in = 3 [json_name = "in"];</code>
     * @param \Cerbos\Cloud\Store\V1\StringMatch\InList $var
     * @return $this
     */
    public function setIn($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Cloud\Store\V1\StringMatch\InList::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMatch()
    {
        return $this->whichOneof("match");
    }

}

