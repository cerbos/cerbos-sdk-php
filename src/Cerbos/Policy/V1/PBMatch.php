<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/policy/v1/policy.proto

namespace Cerbos\Policy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * Generated from protobuf message <code>cerbos.policy.v1.Match</code>
 */
class PBMatch extends \Google\Protobuf\Internal\Message
{
    protected $op;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cerbos\Policy\V1\PBMatch\ExprList $all
     *     @type \Cerbos\Policy\V1\PBMatch\ExprList $any
     *     @type \Cerbos\Policy\V1\PBMatch\ExprList $none
     *     @type string $expr
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Policy\V1\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.Match.ExprList all = 1 [json_name = "all"];</code>
     * @return \Cerbos\Policy\V1\PBMatch\ExprList|null
     */
    public function getAll()
    {
        return $this->readOneof(1);
    }

    public function hasAll()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.Match.ExprList all = 1 [json_name = "all"];</code>
     * @param \Cerbos\Policy\V1\PBMatch\ExprList $var
     * @return $this
     */
    public function setAll($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Policy\V1\PBMatch\ExprList::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.Match.ExprList any = 2 [json_name = "any"];</code>
     * @return \Cerbos\Policy\V1\PBMatch\ExprList|null
     */
    public function getAny()
    {
        return $this->readOneof(2);
    }

    public function hasAny()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.Match.ExprList any = 2 [json_name = "any"];</code>
     * @param \Cerbos\Policy\V1\PBMatch\ExprList $var
     * @return $this
     */
    public function setAny($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Policy\V1\PBMatch\ExprList::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.Match.ExprList none = 3 [json_name = "none"];</code>
     * @return \Cerbos\Policy\V1\PBMatch\ExprList|null
     */
    public function getNone()
    {
        return $this->readOneof(3);
    }

    public function hasNone()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.Match.ExprList none = 3 [json_name = "none"];</code>
     * @param \Cerbos\Policy\V1\PBMatch\ExprList $var
     * @return $this
     */
    public function setNone($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Policy\V1\PBMatch\ExprList::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string expr = 4 [json_name = "expr"];</code>
     * @return string
     */
    public function getExpr()
    {
        return $this->readOneof(4);
    }

    public function hasExpr()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>string expr = 4 [json_name = "expr"];</code>
     * @param string $var
     * @return $this
     */
    public function setExpr($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOp()
    {
        return $this->whichOneof("op");
    }

}

