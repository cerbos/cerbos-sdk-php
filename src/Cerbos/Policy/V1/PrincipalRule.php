<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cerbos/policy/v1/policy.proto

namespace Cerbos\Policy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.policy.v1.PrincipalRule</code>
 */
class PrincipalRule extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string resource = 1 [json_name = "resource", (.validate.rules) = {</code>
     */
    protected $resource = '';
    /**
     * Generated from protobuf field <code>repeated .cerbos.policy.v1.PrincipalRule.Action actions = 2 [json_name = "actions", (.validate.rules) = {</code>
     */
    private $actions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource
     *     @type array<\Cerbos\Policy\V1\PrincipalRule\Action>|\Google\Protobuf\Internal\RepeatedField $actions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Policy\V1\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string resource = 1 [json_name = "resource", (.validate.rules) = {</code>
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Generated from protobuf field <code>string resource = 1 [json_name = "resource", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.policy.v1.PrincipalRule.Action actions = 2 [json_name = "actions", (.validate.rules) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.policy.v1.PrincipalRule.Action actions = 2 [json_name = "actions", (.validate.rules) = {</code>
     * @param array<\Cerbos\Policy\V1\PrincipalRule\Action>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Policy\V1\PrincipalRule\Action::class);
        $this->actions = $arr;

        return $this;
    }

}
