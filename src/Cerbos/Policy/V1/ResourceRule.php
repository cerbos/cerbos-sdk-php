<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cerbos/policy/v1/policy.proto

namespace Cerbos\Policy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.policy.v1.ResourceRule</code>
 */
class ResourceRule extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string actions = 1 [json_name = "actions", (.validate.rules) = {</code>
     */
    private $actions;
    /**
     * Generated from protobuf field <code>repeated string derived_roles = 2 [json_name = "derivedRoles", (.validate.rules) = {</code>
     */
    private $derived_roles;
    /**
     * Generated from protobuf field <code>repeated string roles = 3 [json_name = "roles", (.validate.rules) = {</code>
     */
    private $roles;
    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.Condition condition = 4 [json_name = "condition"];</code>
     */
    protected $condition = null;
    /**
     * Generated from protobuf field <code>.cerbos.effect.v1.Effect effect = 5 [json_name = "effect", (.validate.rules) = {</code>
     */
    protected $effect = 0;
    /**
     * Generated from protobuf field <code>string name = 6 [json_name = "name", (.validate.rules) = {</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.Output output = 7 [json_name = "output"];</code>
     */
    protected $output = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $actions
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $derived_roles
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $roles
     *     @type \Cerbos\Policy\V1\Condition $condition
     *     @type int $effect
     *     @type string $name
     *     @type \Cerbos\Policy\V1\Output $output
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Policy\V1\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string actions = 1 [json_name = "actions", (.validate.rules) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * Generated from protobuf field <code>repeated string actions = 1 [json_name = "actions", (.validate.rules) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->actions = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string derived_roles = 2 [json_name = "derivedRoles", (.validate.rules) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDerivedRoles()
    {
        return $this->derived_roles;
    }

    /**
     * Generated from protobuf field <code>repeated string derived_roles = 2 [json_name = "derivedRoles", (.validate.rules) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDerivedRoles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->derived_roles = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string roles = 3 [json_name = "roles", (.validate.rules) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Generated from protobuf field <code>repeated string roles = 3 [json_name = "roles", (.validate.rules) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRoles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->roles = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.Condition condition = 4 [json_name = "condition"];</code>
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
     * Generated from protobuf field <code>.cerbos.policy.v1.Condition condition = 4 [json_name = "condition"];</code>
     * @param \Cerbos\Policy\V1\Condition $var
     * @return $this
     */
    public function setCondition($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Policy\V1\Condition::class);
        $this->condition = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.effect.v1.Effect effect = 5 [json_name = "effect", (.validate.rules) = {</code>
     * @return int
     */
    public function getEffect()
    {
        return $this->effect;
    }

    /**
     * Generated from protobuf field <code>.cerbos.effect.v1.Effect effect = 5 [json_name = "effect", (.validate.rules) = {</code>
     * @param int $var
     * @return $this
     */
    public function setEffect($var)
    {
        GPBUtil::checkEnum($var, \Cerbos\Effect\V1\Effect::class);
        $this->effect = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 6 [json_name = "name", (.validate.rules) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 6 [json_name = "name", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.Output output = 7 [json_name = "output"];</code>
     * @return \Cerbos\Policy\V1\Output|null
     */
    public function getOutput()
    {
        return $this->output;
    }

    public function hasOutput()
    {
        return isset($this->output);
    }

    public function clearOutput()
    {
        unset($this->output);
    }

    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.Output output = 7 [json_name = "output"];</code>
     * @param \Cerbos\Policy\V1\Output $var
     * @return $this
     */
    public function setOutput($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Policy\V1\Output::class);
        $this->output = $var;

        return $this;
    }

}

