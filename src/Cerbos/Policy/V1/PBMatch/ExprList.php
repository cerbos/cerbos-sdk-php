<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/policy/v1/policy.proto

namespace Cerbos\Policy\V1\PBMatch;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.policy.v1.Match.ExprList</code>
 */
class ExprList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .cerbos.policy.v1.Match of = 1 [json_name = "of", (.buf.validate.field) = {</code>
     */
    private $of;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Cerbos\Policy\V1\PBMatch>|\Google\Protobuf\Internal\RepeatedField $of
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Policy\V1\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.policy.v1.Match of = 1 [json_name = "of", (.buf.validate.field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOf()
    {
        return $this->of;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.policy.v1.Match of = 1 [json_name = "of", (.buf.validate.field) = {</code>
     * @param array<\Cerbos\Policy\V1\PBMatch>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOf($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Policy\V1\PBMatch::class);
        $this->of = $arr;

        return $this;
    }

}

