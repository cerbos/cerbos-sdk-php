<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cerbos/policy/v1/policy.proto

namespace Cerbos\Policy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.policy.v1.Output</code>
 */
class Output extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string expr = 1 [json_name = "expr"];</code>
     */
    protected $expr = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $expr
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Policy\V1\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string expr = 1 [json_name = "expr"];</code>
     * @return string
     */
    public function getExpr()
    {
        return $this->expr;
    }

    /**
     * Generated from protobuf field <code>string expr = 1 [json_name = "expr"];</code>
     * @param string $var
     * @return $this
     */
    public function setExpr($var)
    {
        GPBUtil::checkString($var, True);
        $this->expr = $var;

        return $this;
    }

}
