<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/policy/v1/policy.proto

namespace Cerbos\Policy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * Generated from protobuf message <code>cerbos.policy.v1.RoleRule</code>
 */
class RoleRule extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string resource = 1 [json_name = "resource"];</code>
     */
    protected $resource = '';
    /**
     * Generated from protobuf field <code>repeated string allow_actions = 2 [json_name = "allowActions"];</code>
     */
    private $allow_actions;
    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.Condition condition = 3 [json_name = "condition"];</code>
     */
    protected $condition = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource
     *     @type string[] $allow_actions
     *     @type \Cerbos\Policy\V1\Condition $condition
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Policy\V1\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string resource = 1 [json_name = "resource"];</code>
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Generated from protobuf field <code>string resource = 1 [json_name = "resource"];</code>
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
     * Generated from protobuf field <code>repeated string allow_actions = 2 [json_name = "allowActions"];</code>
     * @return RepeatedField<string>
     */
    public function getAllowActions()
    {
        return $this->allow_actions;
    }

    /**
     * Generated from protobuf field <code>repeated string allow_actions = 2 [json_name = "allowActions"];</code>
     * @param string[] $var
     * @return $this
     */
    public function setAllowActions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->allow_actions = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.Condition condition = 3 [json_name = "condition"];</code>
     * @return \Cerbos\Policy\V1\Condition|null
     */
    public function getCondition()
    {
        return $this->condition;
    }

    public function hasCondition()
    {
        return isset($this->condition);
    }

    public function clearCondition()
    {
        unset($this->condition);
    }

    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.Condition condition = 3 [json_name = "condition"];</code>
     * @param \Cerbos\Policy\V1\Condition $var
     * @return $this
     */
    public function setCondition($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Policy\V1\Condition::class);
        $this->condition = $var;

        return $this;
    }

}

