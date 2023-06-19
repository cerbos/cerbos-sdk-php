<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cerbos/engine/v1/engine.proto

namespace Cerbos\Engine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.engine.v1.CheckOutput</code>
 */
class CheckOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string request_id = 1 [json_name = "requestId"];</code>
     */
    protected $request_id = '';
    /**
     * Generated from protobuf field <code>string resource_id = 2 [json_name = "resourceId"];</code>
     */
    protected $resource_id = '';
    /**
     * Generated from protobuf field <code>map<string, .cerbos.engine.v1.CheckOutput.ActionEffect> actions = 3 [json_name = "actions"];</code>
     */
    private $actions;
    /**
     * Generated from protobuf field <code>repeated string effective_derived_roles = 4 [json_name = "effectiveDerivedRoles"];</code>
     */
    private $effective_derived_roles;
    /**
     * Generated from protobuf field <code>repeated .cerbos.schema.v1.ValidationError validation_errors = 5 [json_name = "validationErrors"];</code>
     */
    private $validation_errors;
    /**
     * Generated from protobuf field <code>repeated .cerbos.engine.v1.OutputEntry outputs = 6 [json_name = "outputs"];</code>
     */
    private $outputs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $request_id
     *     @type string $resource_id
     *     @type array|\Google\Protobuf\Internal\MapField $actions
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $effective_derived_roles
     *     @type array<\Cerbos\Schema\V1\ValidationError>|\Google\Protobuf\Internal\RepeatedField $validation_errors
     *     @type array<\Cerbos\Engine\V1\OutputEntry>|\Google\Protobuf\Internal\RepeatedField $outputs
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Engine\V1\Engine::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string request_id = 1 [json_name = "requestId"];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Generated from protobuf field <code>string request_id = 1 [json_name = "requestId"];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string resource_id = 2 [json_name = "resourceId"];</code>
     * @return string
     */
    public function getResourceId()
    {
        return $this->resource_id;
    }

    /**
     * Generated from protobuf field <code>string resource_id = 2 [json_name = "resourceId"];</code>
     * @param string $var
     * @return $this
     */
    public function setResourceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, .cerbos.engine.v1.CheckOutput.ActionEffect> actions = 3 [json_name = "actions"];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * Generated from protobuf field <code>map<string, .cerbos.engine.v1.CheckOutput.ActionEffect> actions = 3 [json_name = "actions"];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setActions($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Engine\V1\CheckOutput\ActionEffect::class);
        $this->actions = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string effective_derived_roles = 4 [json_name = "effectiveDerivedRoles"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEffectiveDerivedRoles()
    {
        return $this->effective_derived_roles;
    }

    /**
     * Generated from protobuf field <code>repeated string effective_derived_roles = 4 [json_name = "effectiveDerivedRoles"];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEffectiveDerivedRoles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->effective_derived_roles = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.schema.v1.ValidationError validation_errors = 5 [json_name = "validationErrors"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidationErrors()
    {
        return $this->validation_errors;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.schema.v1.ValidationError validation_errors = 5 [json_name = "validationErrors"];</code>
     * @param array<\Cerbos\Schema\V1\ValidationError>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValidationErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Schema\V1\ValidationError::class);
        $this->validation_errors = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.engine.v1.OutputEntry outputs = 6 [json_name = "outputs"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOutputs()
    {
        return $this->outputs;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.engine.v1.OutputEntry outputs = 6 [json_name = "outputs"];</code>
     * @param array<\Cerbos\Engine\V1\OutputEntry>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOutputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Engine\V1\OutputEntry::class);
        $this->outputs = $arr;

        return $this;
    }

}

