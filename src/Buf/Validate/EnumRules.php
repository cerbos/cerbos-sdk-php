<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: buf/validate/validate.proto

namespace Buf\Validate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EnumRules describe the constraints applied to `enum` values.
 *
 * Generated from protobuf message <code>buf.validate.EnumRules</code>
 */
class EnumRules extends \Google\Protobuf\Internal\Message
{
    /**
     * `const` requires the field value to exactly match the specified enum value.
     * If the field value doesn't match, an error message is generated.
     * ```proto
     * enum MyEnum {
     *   MY_ENUM_UNSPECIFIED = 0;
     *   MY_ENUM_VALUE1 = 1;
     *   MY_ENUM_VALUE2 = 2;
     * }
     * message MyMessage {
     *   // The field `value` must be exactly MY_ENUM_VALUE1.
     *   MyEnum value = 1 [(buf.validate.field).enum.const = 1];
     * }
     * ```
     *
     * Generated from protobuf field <code>optional int32 const = 1 [json_name = "const", (.buf.validate.priv.field) = {</code>
     */
    protected $const = null;
    /**
     * `defined_only` requires the field value to be one of the defined values for
     * this enum, failing on any undefined value.
     * ```proto
     * enum MyEnum {
     *   MY_ENUM_UNSPECIFIED = 0;
     *   MY_ENUM_VALUE1 = 1;
     *   MY_ENUM_VALUE2 = 2;
     * }
     * message MyMessage {
     *   // The field `value` must be a defined value of MyEnum.
     *   MyEnum value = 1 [(buf.validate.field).enum.defined_only = true];
     * }
     * ```
     *
     * Generated from protobuf field <code>optional bool defined_only = 2 [json_name = "definedOnly"];</code>
     */
    protected $defined_only = null;
    /**
     * `in` requires the field value to be equal to one of the
     *specified enum values. If the field value doesn't match any of the
     *specified values, an error message is generated.
     * ```proto
     * enum MyEnum {
     *   MY_ENUM_UNSPECIFIED = 0;
     *   MY_ENUM_VALUE1 = 1;
     *   MY_ENUM_VALUE2 = 2;
     * }
     * message MyMessage {
     *   // The field `value` must be equal to one of the specified values.
     *   MyEnum value = 1 [(buf.validate.field).enum = { in: [1, 2]}];
     * }
     * ```
     *
     * Generated from protobuf field <code>repeated int32 in = 3 [json_name = "in", (.buf.validate.priv.field) = {</code>
     */
    private $in;
    /**
     * `not_in` requires the field value to be not equal to any of the
     *specified enum values. If the field value matches one of the specified
     * values, an error message is generated.
     * ```proto
     * enum MyEnum {
     *   MY_ENUM_UNSPECIFIED = 0;
     *   MY_ENUM_VALUE1 = 1;
     *   MY_ENUM_VALUE2 = 2;
     * }
     * message MyMessage {
     *   // The field `value` must not be equal to any of the specified values.
     *   MyEnum value = 1 [(buf.validate.field).enum = { not_in: [1, 2]}];
     * }
     * ```
     *
     * Generated from protobuf field <code>repeated int32 not_in = 4 [json_name = "notIn", (.buf.validate.priv.field) = {</code>
     */
    private $not_in;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $const
     *           `const` requires the field value to exactly match the specified enum value.
     *           If the field value doesn't match, an error message is generated.
     *           ```proto
     *           enum MyEnum {
     *             MY_ENUM_UNSPECIFIED = 0;
     *             MY_ENUM_VALUE1 = 1;
     *             MY_ENUM_VALUE2 = 2;
     *           }
     *           message MyMessage {
     *             // The field `value` must be exactly MY_ENUM_VALUE1.
     *             MyEnum value = 1 [(buf.validate.field).enum.const = 1];
     *           }
     *           ```
     *     @type bool $defined_only
     *           `defined_only` requires the field value to be one of the defined values for
     *           this enum, failing on any undefined value.
     *           ```proto
     *           enum MyEnum {
     *             MY_ENUM_UNSPECIFIED = 0;
     *             MY_ENUM_VALUE1 = 1;
     *             MY_ENUM_VALUE2 = 2;
     *           }
     *           message MyMessage {
     *             // The field `value` must be a defined value of MyEnum.
     *             MyEnum value = 1 [(buf.validate.field).enum.defined_only = true];
     *           }
     *           ```
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $in
     *           `in` requires the field value to be equal to one of the
     *          specified enum values. If the field value doesn't match any of the
     *          specified values, an error message is generated.
     *           ```proto
     *           enum MyEnum {
     *             MY_ENUM_UNSPECIFIED = 0;
     *             MY_ENUM_VALUE1 = 1;
     *             MY_ENUM_VALUE2 = 2;
     *           }
     *           message MyMessage {
     *             // The field `value` must be equal to one of the specified values.
     *             MyEnum value = 1 [(buf.validate.field).enum = { in: [1, 2]}];
     *           }
     *           ```
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $not_in
     *           `not_in` requires the field value to be not equal to any of the
     *          specified enum values. If the field value matches one of the specified
     *           values, an error message is generated.
     *           ```proto
     *           enum MyEnum {
     *             MY_ENUM_UNSPECIFIED = 0;
     *             MY_ENUM_VALUE1 = 1;
     *             MY_ENUM_VALUE2 = 2;
     *           }
     *           message MyMessage {
     *             // The field `value` must not be equal to any of the specified values.
     *             MyEnum value = 1 [(buf.validate.field).enum = { not_in: [1, 2]}];
     *           }
     *           ```
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Buf\Validate\Validate::initOnce();
        parent::__construct($data);
    }

    /**
     * `const` requires the field value to exactly match the specified enum value.
     * If the field value doesn't match, an error message is generated.
     * ```proto
     * enum MyEnum {
     *   MY_ENUM_UNSPECIFIED = 0;
     *   MY_ENUM_VALUE1 = 1;
     *   MY_ENUM_VALUE2 = 2;
     * }
     * message MyMessage {
     *   // The field `value` must be exactly MY_ENUM_VALUE1.
     *   MyEnum value = 1 [(buf.validate.field).enum.const = 1];
     * }
     * ```
     *
     * Generated from protobuf field <code>optional int32 const = 1 [json_name = "const", (.buf.validate.priv.field) = {</code>
     * @return int
     */
    public function getConst()
    {
        return isset($this->const) ? $this->const : 0;
    }

    public function hasConst()
    {
        return isset($this->const);
    }

    public function clearConst()
    {
        unset($this->const);
    }

    /**
     * `const` requires the field value to exactly match the specified enum value.
     * If the field value doesn't match, an error message is generated.
     * ```proto
     * enum MyEnum {
     *   MY_ENUM_UNSPECIFIED = 0;
     *   MY_ENUM_VALUE1 = 1;
     *   MY_ENUM_VALUE2 = 2;
     * }
     * message MyMessage {
     *   // The field `value` must be exactly MY_ENUM_VALUE1.
     *   MyEnum value = 1 [(buf.validate.field).enum.const = 1];
     * }
     * ```
     *
     * Generated from protobuf field <code>optional int32 const = 1 [json_name = "const", (.buf.validate.priv.field) = {</code>
     * @param int $var
     * @return $this
     */
    public function setConst($var)
    {
        GPBUtil::checkInt32($var);
        $this->const = $var;

        return $this;
    }

    /**
     * `defined_only` requires the field value to be one of the defined values for
     * this enum, failing on any undefined value.
     * ```proto
     * enum MyEnum {
     *   MY_ENUM_UNSPECIFIED = 0;
     *   MY_ENUM_VALUE1 = 1;
     *   MY_ENUM_VALUE2 = 2;
     * }
     * message MyMessage {
     *   // The field `value` must be a defined value of MyEnum.
     *   MyEnum value = 1 [(buf.validate.field).enum.defined_only = true];
     * }
     * ```
     *
     * Generated from protobuf field <code>optional bool defined_only = 2 [json_name = "definedOnly"];</code>
     * @return bool
     */
    public function getDefinedOnly()
    {
        return isset($this->defined_only) ? $this->defined_only : false;
    }

    public function hasDefinedOnly()
    {
        return isset($this->defined_only);
    }

    public function clearDefinedOnly()
    {
        unset($this->defined_only);
    }

    /**
     * `defined_only` requires the field value to be one of the defined values for
     * this enum, failing on any undefined value.
     * ```proto
     * enum MyEnum {
     *   MY_ENUM_UNSPECIFIED = 0;
     *   MY_ENUM_VALUE1 = 1;
     *   MY_ENUM_VALUE2 = 2;
     * }
     * message MyMessage {
     *   // The field `value` must be a defined value of MyEnum.
     *   MyEnum value = 1 [(buf.validate.field).enum.defined_only = true];
     * }
     * ```
     *
     * Generated from protobuf field <code>optional bool defined_only = 2 [json_name = "definedOnly"];</code>
     * @param bool $var
     * @return $this
     */
    public function setDefinedOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->defined_only = $var;

        return $this;
    }

    /**
     * `in` requires the field value to be equal to one of the
     *specified enum values. If the field value doesn't match any of the
     *specified values, an error message is generated.
     * ```proto
     * enum MyEnum {
     *   MY_ENUM_UNSPECIFIED = 0;
     *   MY_ENUM_VALUE1 = 1;
     *   MY_ENUM_VALUE2 = 2;
     * }
     * message MyMessage {
     *   // The field `value` must be equal to one of the specified values.
     *   MyEnum value = 1 [(buf.validate.field).enum = { in: [1, 2]}];
     * }
     * ```
     *
     * Generated from protobuf field <code>repeated int32 in = 3 [json_name = "in", (.buf.validate.priv.field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIn()
    {
        return $this->in;
    }

    /**
     * `in` requires the field value to be equal to one of the
     *specified enum values. If the field value doesn't match any of the
     *specified values, an error message is generated.
     * ```proto
     * enum MyEnum {
     *   MY_ENUM_UNSPECIFIED = 0;
     *   MY_ENUM_VALUE1 = 1;
     *   MY_ENUM_VALUE2 = 2;
     * }
     * message MyMessage {
     *   // The field `value` must be equal to one of the specified values.
     *   MyEnum value = 1 [(buf.validate.field).enum = { in: [1, 2]}];
     * }
     * ```
     *
     * Generated from protobuf field <code>repeated int32 in = 3 [json_name = "in", (.buf.validate.priv.field) = {</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIn($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->in = $arr;

        return $this;
    }

    /**
     * `not_in` requires the field value to be not equal to any of the
     *specified enum values. If the field value matches one of the specified
     * values, an error message is generated.
     * ```proto
     * enum MyEnum {
     *   MY_ENUM_UNSPECIFIED = 0;
     *   MY_ENUM_VALUE1 = 1;
     *   MY_ENUM_VALUE2 = 2;
     * }
     * message MyMessage {
     *   // The field `value` must not be equal to any of the specified values.
     *   MyEnum value = 1 [(buf.validate.field).enum = { not_in: [1, 2]}];
     * }
     * ```
     *
     * Generated from protobuf field <code>repeated int32 not_in = 4 [json_name = "notIn", (.buf.validate.priv.field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNotIn()
    {
        return $this->not_in;
    }

    /**
     * `not_in` requires the field value to be not equal to any of the
     *specified enum values. If the field value matches one of the specified
     * values, an error message is generated.
     * ```proto
     * enum MyEnum {
     *   MY_ENUM_UNSPECIFIED = 0;
     *   MY_ENUM_VALUE1 = 1;
     *   MY_ENUM_VALUE2 = 2;
     * }
     * message MyMessage {
     *   // The field `value` must not be equal to any of the specified values.
     *   MyEnum value = 1 [(buf.validate.field).enum = { not_in: [1, 2]}];
     * }
     * ```
     *
     * Generated from protobuf field <code>repeated int32 not_in = 4 [json_name = "notIn", (.buf.validate.priv.field) = {</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotIn($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->not_in = $arr;

        return $this;
    }

}

