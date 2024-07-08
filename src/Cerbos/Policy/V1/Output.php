<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
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
     * Generated from protobuf field <code>string expr = 1 [json_name = "expr", deprecated = true];</code>
     * @deprecated
     */
    protected $expr = '';
    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.Output.When when = 2 [json_name = "when"];</code>
     */
    protected $when = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $expr
     *     @type \Cerbos\Policy\V1\Output\When $when
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Policy\V1\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string expr = 1 [json_name = "expr", deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getExpr()
    {
        @trigger_error('expr is deprecated.', E_USER_DEPRECATED);
        return $this->expr;
    }

    /**
     * Generated from protobuf field <code>string expr = 1 [json_name = "expr", deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setExpr($var)
    {
        @trigger_error('expr is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->expr = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.Output.When when = 2 [json_name = "when"];</code>
     * @return \Cerbos\Policy\V1\Output\When|null
     */
    public function getWhen()
    {
        return $this->when;
    }

    public function hasWhen()
    {
        return isset($this->when);
    }

    public function clearWhen()
    {
        unset($this->when);
    }

    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.Output.When when = 2 [json_name = "when"];</code>
     * @param \Cerbos\Policy\V1\Output\When $var
     * @return $this
     */
    public function setWhen($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Policy\V1\Output\When::class);
        $this->when = $var;

        return $this;
    }

}

