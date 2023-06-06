<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cerbos/engine/v1/engine.proto

namespace Cerbos\Engine\V1\PlanResourcesFilter\Expression;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.engine.v1.PlanResourcesFilter.Expression.Operand</code>
 */
class Operand extends \Google\Protobuf\Internal\Message
{
    protected $node;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Value $value
     *     @type \Cerbos\Engine\V1\PlanResourcesFilter\Expression $expression
     *     @type string $variable
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Engine\V1\Engine::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Value value = 1 [json_name = "value"];</code>
     * @return \Google\Protobuf\Value|null
     */
    public function getValue()
    {
        return $this->readOneof(1);
    }

    public function hasValue()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Value value = 1 [json_name = "value"];</code>
     * @param \Google\Protobuf\Value $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Value::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.PlanResourcesFilter.Expression expression = 2 [json_name = "expression"];</code>
     * @return \Cerbos\Engine\V1\PlanResourcesFilter\Expression|null
     */
    public function getExpression()
    {
        return $this->readOneof(2);
    }

    public function hasExpression()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.PlanResourcesFilter.Expression expression = 2 [json_name = "expression"];</code>
     * @param \Cerbos\Engine\V1\PlanResourcesFilter\Expression $var
     * @return $this
     */
    public function setExpression($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Engine\V1\PlanResourcesFilter\Expression::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string variable = 3 [json_name = "variable"];</code>
     * @return string
     */
    public function getVariable()
    {
        return $this->readOneof(3);
    }

    public function hasVariable()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>string variable = 3 [json_name = "variable"];</code>
     * @param string $var
     * @return $this
     */
    public function setVariable($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getNode()
    {
        return $this->whichOneof("node");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Operand::class, \Cerbos\Engine\V1\PlanResourcesFilter_Expression_Operand::class);

