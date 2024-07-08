<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: buf/validate/validate.proto

namespace Buf\Validate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MessageConstraints represents validation rules that are applied to the entire message.
 * It includes disabling options and a list of Constraint messages representing Common Expression Language (CEL) validation rules.
 *
 * Generated from protobuf message <code>buf.validate.MessageConstraints</code>
 */
class MessageConstraints extends \Google\Protobuf\Internal\Message
{
    /**
     * `disabled` is a boolean flag that, when set to true, nullifies any validation rules for this message.
     * This includes any fields within the message that would otherwise support validation.
     * ```proto
     * message MyMessage {
     *   // validation will be bypassed for this message
     *   option (buf.validate.message).disabled = true;
     * }
     * ```
     *
     * Generated from protobuf field <code>optional bool disabled = 1 [json_name = "disabled"];</code>
     */
    protected $disabled = null;
    /**
     * `cel` is a repeated field of type Constraint. Each Constraint specifies a validation rule to be applied to this message.
     * These constraints are written in Common Expression Language (CEL) syntax. For more information on
     * CEL, [see our documentation](https://github.com/bufbuild/protovalidate/blob/main/docs/cel.md).
     * ```proto
     * message MyMessage {
     *   // The field `foo` must be greater than 42.
     *   option (buf.validate.message).cel = {
     *     id: "my_message.value",
     *     message: "value must be greater than 42",
     *     expression: "this.foo > 42",
     *   };
     *   optional int32 foo = 1;
     * }
     * ```
     *
     * Generated from protobuf field <code>repeated .buf.validate.Constraint cel = 3 [json_name = "cel"];</code>
     */
    private $cel;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $disabled
     *           `disabled` is a boolean flag that, when set to true, nullifies any validation rules for this message.
     *           This includes any fields within the message that would otherwise support validation.
     *           ```proto
     *           message MyMessage {
     *             // validation will be bypassed for this message
     *             option (buf.validate.message).disabled = true;
     *           }
     *           ```
     *     @type array<\Buf\Validate\Constraint>|\Google\Protobuf\Internal\RepeatedField $cel
     *           `cel` is a repeated field of type Constraint. Each Constraint specifies a validation rule to be applied to this message.
     *           These constraints are written in Common Expression Language (CEL) syntax. For more information on
     *           CEL, [see our documentation](https://github.com/bufbuild/protovalidate/blob/main/docs/cel.md).
     *           ```proto
     *           message MyMessage {
     *             // The field `foo` must be greater than 42.
     *             option (buf.validate.message).cel = {
     *               id: "my_message.value",
     *               message: "value must be greater than 42",
     *               expression: "this.foo > 42",
     *             };
     *             optional int32 foo = 1;
     *           }
     *           ```
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Buf\Validate\Validate::initOnce();
        parent::__construct($data);
    }

    /**
     * `disabled` is a boolean flag that, when set to true, nullifies any validation rules for this message.
     * This includes any fields within the message that would otherwise support validation.
     * ```proto
     * message MyMessage {
     *   // validation will be bypassed for this message
     *   option (buf.validate.message).disabled = true;
     * }
     * ```
     *
     * Generated from protobuf field <code>optional bool disabled = 1 [json_name = "disabled"];</code>
     * @return bool
     */
    public function getDisabled()
    {
        return isset($this->disabled) ? $this->disabled : false;
    }

    public function hasDisabled()
    {
        return isset($this->disabled);
    }

    public function clearDisabled()
    {
        unset($this->disabled);
    }

    /**
     * `disabled` is a boolean flag that, when set to true, nullifies any validation rules for this message.
     * This includes any fields within the message that would otherwise support validation.
     * ```proto
     * message MyMessage {
     *   // validation will be bypassed for this message
     *   option (buf.validate.message).disabled = true;
     * }
     * ```
     *
     * Generated from protobuf field <code>optional bool disabled = 1 [json_name = "disabled"];</code>
     * @param bool $var
     * @return $this
     */
    public function setDisabled($var)
    {
        GPBUtil::checkBool($var);
        $this->disabled = $var;

        return $this;
    }

    /**
     * `cel` is a repeated field of type Constraint. Each Constraint specifies a validation rule to be applied to this message.
     * These constraints are written in Common Expression Language (CEL) syntax. For more information on
     * CEL, [see our documentation](https://github.com/bufbuild/protovalidate/blob/main/docs/cel.md).
     * ```proto
     * message MyMessage {
     *   // The field `foo` must be greater than 42.
     *   option (buf.validate.message).cel = {
     *     id: "my_message.value",
     *     message: "value must be greater than 42",
     *     expression: "this.foo > 42",
     *   };
     *   optional int32 foo = 1;
     * }
     * ```
     *
     * Generated from protobuf field <code>repeated .buf.validate.Constraint cel = 3 [json_name = "cel"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCel()
    {
        return $this->cel;
    }

    /**
     * `cel` is a repeated field of type Constraint. Each Constraint specifies a validation rule to be applied to this message.
     * These constraints are written in Common Expression Language (CEL) syntax. For more information on
     * CEL, [see our documentation](https://github.com/bufbuild/protovalidate/blob/main/docs/cel.md).
     * ```proto
     * message MyMessage {
     *   // The field `foo` must be greater than 42.
     *   option (buf.validate.message).cel = {
     *     id: "my_message.value",
     *     message: "value must be greater than 42",
     *     expression: "this.foo > 42",
     *   };
     *   optional int32 foo = 1;
     * }
     * ```
     *
     * Generated from protobuf field <code>repeated .buf.validate.Constraint cel = 3 [json_name = "cel"];</code>
     * @param array<\Buf\Validate\Constraint>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCel($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Buf\Validate\Constraint::class);
        $this->cel = $arr;

        return $this;
    }

}

