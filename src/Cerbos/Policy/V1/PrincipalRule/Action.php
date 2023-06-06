<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cerbos/policy/v1/policy.proto

namespace Cerbos\Policy\V1\PrincipalRule;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.policy.v1.PrincipalRule.Action</code>
 */
class Action extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string action = 1 [json_name = "action", (.validate.rules) = {</code>
     */
    protected $action = '';
    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.Condition condition = 2 [json_name = "condition"];</code>
     */
    protected $condition = null;
    /**
     * Generated from protobuf field <code>.cerbos.effect.v1.Effect effect = 3 [json_name = "effect", (.validate.rules) = {</code>
     */
    protected $effect = 0;
    /**
     * Generated from protobuf field <code>string name = 4 [json_name = "name", (.validate.rules) = {</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.Output output = 5 [json_name = "output"];</code>
     */
    protected $output = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $action
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
     * Generated from protobuf field <code>string action = 1 [json_name = "action", (.validate.rules) = {</code>
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Generated from protobuf field <code>string action = 1 [json_name = "action", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->action = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.Condition condition = 2 [json_name = "condition"];</code>
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
     * Generated from protobuf field <code>.cerbos.policy.v1.Condition condition = 2 [json_name = "condition"];</code>
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
     * Generated from protobuf field <code>.cerbos.effect.v1.Effect effect = 3 [json_name = "effect", (.validate.rules) = {</code>
     * @return int
     */
    public function getEffect()
    {
        return $this->effect;
    }

    /**
     * Generated from protobuf field <code>.cerbos.effect.v1.Effect effect = 3 [json_name = "effect", (.validate.rules) = {</code>
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
     * Generated from protobuf field <code>string name = 4 [json_name = "name", (.validate.rules) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 4 [json_name = "name", (.validate.rules) = {</code>
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
     * Generated from protobuf field <code>.cerbos.policy.v1.Output output = 5 [json_name = "output"];</code>
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
     * Generated from protobuf field <code>.cerbos.policy.v1.Output output = 5 [json_name = "output"];</code>
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Action::class, \Cerbos\Policy\V1\PrincipalRule_Action::class);

