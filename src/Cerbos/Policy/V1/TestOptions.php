<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cerbos/policy/v1/policy.proto

namespace Cerbos\Policy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.policy.v1.TestOptions</code>
 */
class TestOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp now = 1 [json_name = "now"];</code>
     */
    protected $now = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $now
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Policy\V1\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp now = 1 [json_name = "now"];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getNow()
    {
        return $this->now;
    }

    public function hasNow()
    {
        return isset($this->now);
    }

    public function clearNow()
    {
        unset($this->now);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp now = 1 [json_name = "now"];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setNow($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->now = $var;

        return $this;
    }

}

