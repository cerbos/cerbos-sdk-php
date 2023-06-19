<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cerbos/audit/v1/audit.proto

namespace Cerbos\Audit\V1\DecisionLogEntry;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.audit.v1.DecisionLogEntry.CheckResources</code>
 */
class CheckResources extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .cerbos.engine.v1.CheckInput inputs = 1 [json_name = "inputs"];</code>
     */
    private $inputs;
    /**
     * Generated from protobuf field <code>repeated .cerbos.engine.v1.CheckOutput outputs = 2 [json_name = "outputs"];</code>
     */
    private $outputs;
    /**
     * Generated from protobuf field <code>string error = 3 [json_name = "error"];</code>
     */
    protected $error = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Cerbos\Engine\V1\CheckInput>|\Google\Protobuf\Internal\RepeatedField $inputs
     *     @type array<\Cerbos\Engine\V1\CheckOutput>|\Google\Protobuf\Internal\RepeatedField $outputs
     *     @type string $error
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Audit\V1\Audit::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.engine.v1.CheckInput inputs = 1 [json_name = "inputs"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputs()
    {
        return $this->inputs;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.engine.v1.CheckInput inputs = 1 [json_name = "inputs"];</code>
     * @param array<\Cerbos\Engine\V1\CheckInput>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Engine\V1\CheckInput::class);
        $this->inputs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.engine.v1.CheckOutput outputs = 2 [json_name = "outputs"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOutputs()
    {
        return $this->outputs;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.engine.v1.CheckOutput outputs = 2 [json_name = "outputs"];</code>
     * @param array<\Cerbos\Engine\V1\CheckOutput>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOutputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Engine\V1\CheckOutput::class);
        $this->outputs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string error = 3 [json_name = "error"];</code>
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Generated from protobuf field <code>string error = 3 [json_name = "error"];</code>
     * @param string $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->error = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CheckResources::class, \Cerbos\Audit\V1\DecisionLogEntry_CheckResources::class);
