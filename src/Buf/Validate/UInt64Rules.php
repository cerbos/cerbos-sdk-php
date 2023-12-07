<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: buf/validate/validate.proto

namespace Buf\Validate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * UInt64Rules describes the constraints applied to `uint64` values. These
 * rules may also be applied to the `google.protobuf.UInt64Value` Well-Known-Type.
 *
 * Generated from protobuf message <code>buf.validate.UInt64Rules</code>
 */
class UInt64Rules extends \Google\Protobuf\Internal\Message
{
    /**
     *`const` requires the field value to exactly match the specified value. If
     * the field value doesn't match, an error message is generated.
     *```proto
     *message MyUInt64 {
     *  // value must equal 42
     *   uint64 value = 1 [(buf.validate.field).uint64.const = 42];
     *}
     *```
     *
     * Generated from protobuf field <code>optional uint64 const = 1 [json_name = "const", (.buf.validate.priv.field) = {</code>
     */
    protected $const = null;
    /**
     *`in` requires the field value to be equal to one of the specified values.
     * If the field value isn't one of the specified values, an error message is
     * generated.
     *```proto
     *message MyUInt64 {
     *  // value must be in list [1, 2, 3]
     *  repeated uint64 value = 1 (buf.validate.field).uint64 = { in: [1, 2, 3] };
     *}
     *```
     *
     * Generated from protobuf field <code>repeated uint64 in = 6 [json_name = "in", (.buf.validate.priv.field) = {</code>
     */
    private $in;
    /**
     *`not_in` requires the field value to not be equal to any of the specified
     * values. If the field value is one of the specified values, an error
     * message is generated.
     *```proto
     *message MyUInt64 {
     *  // value must not be in list [1, 2, 3]
     *  repeated uint64 value = 1 (buf.validate.field).uint64 = { not_in: [1, 2, 3] };
     *}
     *```
     *
     * Generated from protobuf field <code>repeated uint64 not_in = 7 [json_name = "notIn", (.buf.validate.priv.field) = {</code>
     */
    private $not_in;
    protected $less_than;
    protected $greater_than;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $const
     *          `const` requires the field value to exactly match the specified value. If
     *           the field value doesn't match, an error message is generated.
     *          ```proto
     *          message MyUInt64 {
     *            // value must equal 42
     *             uint64 value = 1 [(buf.validate.field).uint64.const = 42];
     *          }
     *          ```
     *     @type int|string $lt
     *          `lt` requires the field value to be less than the specified value (field <
     *           value). If the field value is equal to or greater than the specified value,
     *           an error message is generated.
     *          ```proto
     *          message MyUInt64 {
     *            // value must be less than 10
     *             uint64 value = 1 [(buf.validate.field).uint64.lt = 10];
     *          }
     *          ```
     *     @type int|string $lte
     *          `lte` requires the field value to be less than or equal to the specified
     *           value (field <= value). If the field value is greater than the specified
     *           value, an error message is generated.
     *          ```proto
     *          message MyUInt64 {
     *            // value must be less than or equal to 10
     *             uint64 value = 1 [(buf.validate.field).uint64.lte = 10];
     *          }
     *          ```
     *     @type int|string $gt
     *          `gt` requires the field value to be greater than the specified value
     *           (exclusive). If the value of `gt` is larger than a specified `lt` or
     *           `lte`, the range is reversed, and the field value must be outside the
     *           specified range. If the field value doesn't meet the required conditions,
     *           an error message is generated.
     *          ```proto
     *          message MyUInt64 {
     *            // value must be greater than 5 [uint64.gt]
     *            uint64 value = 1 [(buf.validate.field).uint64.gt = 5];
     *            // value must be greater than 5 and less than 10 [uint64.gt_lt]
     *            uint64 other_value = 2 [(buf.validate.field).uint64 = { gt: 5, lt: 10 }];
     *            // value must be greater than 10 or less than 5 [uint64.gt_lt_exclusive]
     *            uint64 another_value = 3 [(buf.validate.field).uint64 = { gt: 10, lt: 5 }];
     *          }
     *          ```
     *     @type int|string $gte
     *          `gte` requires the field value to be greater than or equal to the specified
     *           value (exclusive). If the value of `gte` is larger than a specified `lt`
     *           or `lte`, the range is reversed, and the field value must be outside the
     *           specified range. If the field value doesn't meet the required conditions,
     *           an error message is generated.
     *          ```proto
     *          message MyUInt64 {
     *            // value must be greater than or equal to 5 [uint64.gte]
     *            uint64 value = 1 [(buf.validate.field).uint64.gte = 5];
     *            // value must be greater than or equal to 5 and less than 10 [uint64.gte_lt]
     *            uint64 other_value = 2 [(buf.validate.field).uint64 = { gte: 5, lt: 10 }];
     *            // value must be greater than or equal to 10 or less than 5 [uint64.gte_lt_exclusive]
     *            uint64 another_value = 3 [(buf.validate.field).uint64 = { gte: 10, lt: 5 }];
     *          }
     *          ```
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $in
     *          `in` requires the field value to be equal to one of the specified values.
     *           If the field value isn't one of the specified values, an error message is
     *           generated.
     *          ```proto
     *          message MyUInt64 {
     *            // value must be in list [1, 2, 3]
     *            repeated uint64 value = 1 (buf.validate.field).uint64 = { in: [1, 2, 3] };
     *          }
     *          ```
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $not_in
     *          `not_in` requires the field value to not be equal to any of the specified
     *           values. If the field value is one of the specified values, an error
     *           message is generated.
     *          ```proto
     *          message MyUInt64 {
     *            // value must not be in list [1, 2, 3]
     *            repeated uint64 value = 1 (buf.validate.field).uint64 = { not_in: [1, 2, 3] };
     *          }
     *          ```
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Buf\Validate\Validate::initOnce();
        parent::__construct($data);
    }

    /**
     *`const` requires the field value to exactly match the specified value. If
     * the field value doesn't match, an error message is generated.
     *```proto
     *message MyUInt64 {
     *  // value must equal 42
     *   uint64 value = 1 [(buf.validate.field).uint64.const = 42];
     *}
     *```
     *
     * Generated from protobuf field <code>optional uint64 const = 1 [json_name = "const", (.buf.validate.priv.field) = {</code>
     * @return int|string
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
     *`const` requires the field value to exactly match the specified value. If
     * the field value doesn't match, an error message is generated.
     *```proto
     *message MyUInt64 {
     *  // value must equal 42
     *   uint64 value = 1 [(buf.validate.field).uint64.const = 42];
     *}
     *```
     *
     * Generated from protobuf field <code>optional uint64 const = 1 [json_name = "const", (.buf.validate.priv.field) = {</code>
     * @param int|string $var
     * @return $this
     */
    public function setConst($var)
    {
        GPBUtil::checkUint64($var);
        $this->const = $var;

        return $this;
    }

    /**
     *`lt` requires the field value to be less than the specified value (field <
     * value). If the field value is equal to or greater than the specified value,
     * an error message is generated.
     *```proto
     *message MyUInt64 {
     *  // value must be less than 10
     *   uint64 value = 1 [(buf.validate.field).uint64.lt = 10];
     *}
     *```
     *
     * Generated from protobuf field <code>uint64 lt = 2 [json_name = "lt", (.buf.validate.priv.field) = {</code>
     * @return int|string
     */
    public function getLt()
    {
        return $this->readOneof(2);
    }

    public function hasLt()
    {
        return $this->hasOneof(2);
    }

    /**
     *`lt` requires the field value to be less than the specified value (field <
     * value). If the field value is equal to or greater than the specified value,
     * an error message is generated.
     *```proto
     *message MyUInt64 {
     *  // value must be less than 10
     *   uint64 value = 1 [(buf.validate.field).uint64.lt = 10];
     *}
     *```
     *
     * Generated from protobuf field <code>uint64 lt = 2 [json_name = "lt", (.buf.validate.priv.field) = {</code>
     * @param int|string $var
     * @return $this
     */
    public function setLt($var)
    {
        GPBUtil::checkUint64($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     *`lte` requires the field value to be less than or equal to the specified
     * value (field <= value). If the field value is greater than the specified
     * value, an error message is generated.
     *```proto
     *message MyUInt64 {
     *  // value must be less than or equal to 10
     *   uint64 value = 1 [(buf.validate.field).uint64.lte = 10];
     *}
     *```
     *
     * Generated from protobuf field <code>uint64 lte = 3 [json_name = "lte", (.buf.validate.priv.field) = {</code>
     * @return int|string
     */
    public function getLte()
    {
        return $this->readOneof(3);
    }

    public function hasLte()
    {
        return $this->hasOneof(3);
    }

    /**
     *`lte` requires the field value to be less than or equal to the specified
     * value (field <= value). If the field value is greater than the specified
     * value, an error message is generated.
     *```proto
     *message MyUInt64 {
     *  // value must be less than or equal to 10
     *   uint64 value = 1 [(buf.validate.field).uint64.lte = 10];
     *}
     *```
     *
     * Generated from protobuf field <code>uint64 lte = 3 [json_name = "lte", (.buf.validate.priv.field) = {</code>
     * @param int|string $var
     * @return $this
     */
    public function setLte($var)
    {
        GPBUtil::checkUint64($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     *`gt` requires the field value to be greater than the specified value
     * (exclusive). If the value of `gt` is larger than a specified `lt` or
     * `lte`, the range is reversed, and the field value must be outside the
     * specified range. If the field value doesn't meet the required conditions,
     * an error message is generated.
     *```proto
     *message MyUInt64 {
     *  // value must be greater than 5 [uint64.gt]
     *  uint64 value = 1 [(buf.validate.field).uint64.gt = 5];
     *  // value must be greater than 5 and less than 10 [uint64.gt_lt]
     *  uint64 other_value = 2 [(buf.validate.field).uint64 = { gt: 5, lt: 10 }];
     *  // value must be greater than 10 or less than 5 [uint64.gt_lt_exclusive]
     *  uint64 another_value = 3 [(buf.validate.field).uint64 = { gt: 10, lt: 5 }];
     *}
     *```
     *
     * Generated from protobuf field <code>uint64 gt = 4 [json_name = "gt", (.buf.validate.priv.field) = {</code>
     * @return int|string
     */
    public function getGt()
    {
        return $this->readOneof(4);
    }

    public function hasGt()
    {
        return $this->hasOneof(4);
    }

    /**
     *`gt` requires the field value to be greater than the specified value
     * (exclusive). If the value of `gt` is larger than a specified `lt` or
     * `lte`, the range is reversed, and the field value must be outside the
     * specified range. If the field value doesn't meet the required conditions,
     * an error message is generated.
     *```proto
     *message MyUInt64 {
     *  // value must be greater than 5 [uint64.gt]
     *  uint64 value = 1 [(buf.validate.field).uint64.gt = 5];
     *  // value must be greater than 5 and less than 10 [uint64.gt_lt]
     *  uint64 other_value = 2 [(buf.validate.field).uint64 = { gt: 5, lt: 10 }];
     *  // value must be greater than 10 or less than 5 [uint64.gt_lt_exclusive]
     *  uint64 another_value = 3 [(buf.validate.field).uint64 = { gt: 10, lt: 5 }];
     *}
     *```
     *
     * Generated from protobuf field <code>uint64 gt = 4 [json_name = "gt", (.buf.validate.priv.field) = {</code>
     * @param int|string $var
     * @return $this
     */
    public function setGt($var)
    {
        GPBUtil::checkUint64($var);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     *`gte` requires the field value to be greater than or equal to the specified
     * value (exclusive). If the value of `gte` is larger than a specified `lt`
     * or `lte`, the range is reversed, and the field value must be outside the
     * specified range. If the field value doesn't meet the required conditions,
     * an error message is generated.
     *```proto
     *message MyUInt64 {
     *  // value must be greater than or equal to 5 [uint64.gte]
     *  uint64 value = 1 [(buf.validate.field).uint64.gte = 5];
     *  // value must be greater than or equal to 5 and less than 10 [uint64.gte_lt]
     *  uint64 other_value = 2 [(buf.validate.field).uint64 = { gte: 5, lt: 10 }];
     *  // value must be greater than or equal to 10 or less than 5 [uint64.gte_lt_exclusive]
     *  uint64 another_value = 3 [(buf.validate.field).uint64 = { gte: 10, lt: 5 }];
     *}
     *```
     *
     * Generated from protobuf field <code>uint64 gte = 5 [json_name = "gte", (.buf.validate.priv.field) = {</code>
     * @return int|string
     */
    public function getGte()
    {
        return $this->readOneof(5);
    }

    public function hasGte()
    {
        return $this->hasOneof(5);
    }

    /**
     *`gte` requires the field value to be greater than or equal to the specified
     * value (exclusive). If the value of `gte` is larger than a specified `lt`
     * or `lte`, the range is reversed, and the field value must be outside the
     * specified range. If the field value doesn't meet the required conditions,
     * an error message is generated.
     *```proto
     *message MyUInt64 {
     *  // value must be greater than or equal to 5 [uint64.gte]
     *  uint64 value = 1 [(buf.validate.field).uint64.gte = 5];
     *  // value must be greater than or equal to 5 and less than 10 [uint64.gte_lt]
     *  uint64 other_value = 2 [(buf.validate.field).uint64 = { gte: 5, lt: 10 }];
     *  // value must be greater than or equal to 10 or less than 5 [uint64.gte_lt_exclusive]
     *  uint64 another_value = 3 [(buf.validate.field).uint64 = { gte: 10, lt: 5 }];
     *}
     *```
     *
     * Generated from protobuf field <code>uint64 gte = 5 [json_name = "gte", (.buf.validate.priv.field) = {</code>
     * @param int|string $var
     * @return $this
     */
    public function setGte($var)
    {
        GPBUtil::checkUint64($var);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     *`in` requires the field value to be equal to one of the specified values.
     * If the field value isn't one of the specified values, an error message is
     * generated.
     *```proto
     *message MyUInt64 {
     *  // value must be in list [1, 2, 3]
     *  repeated uint64 value = 1 (buf.validate.field).uint64 = { in: [1, 2, 3] };
     *}
     *```
     *
     * Generated from protobuf field <code>repeated uint64 in = 6 [json_name = "in", (.buf.validate.priv.field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIn()
    {
        return $this->in;
    }

    /**
     *`in` requires the field value to be equal to one of the specified values.
     * If the field value isn't one of the specified values, an error message is
     * generated.
     *```proto
     *message MyUInt64 {
     *  // value must be in list [1, 2, 3]
     *  repeated uint64 value = 1 (buf.validate.field).uint64 = { in: [1, 2, 3] };
     *}
     *```
     *
     * Generated from protobuf field <code>repeated uint64 in = 6 [json_name = "in", (.buf.validate.priv.field) = {</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIn($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT64);
        $this->in = $arr;

        return $this;
    }

    /**
     *`not_in` requires the field value to not be equal to any of the specified
     * values. If the field value is one of the specified values, an error
     * message is generated.
     *```proto
     *message MyUInt64 {
     *  // value must not be in list [1, 2, 3]
     *  repeated uint64 value = 1 (buf.validate.field).uint64 = { not_in: [1, 2, 3] };
     *}
     *```
     *
     * Generated from protobuf field <code>repeated uint64 not_in = 7 [json_name = "notIn", (.buf.validate.priv.field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNotIn()
    {
        return $this->not_in;
    }

    /**
     *`not_in` requires the field value to not be equal to any of the specified
     * values. If the field value is one of the specified values, an error
     * message is generated.
     *```proto
     *message MyUInt64 {
     *  // value must not be in list [1, 2, 3]
     *  repeated uint64 value = 1 (buf.validate.field).uint64 = { not_in: [1, 2, 3] };
     *}
     *```
     *
     * Generated from protobuf field <code>repeated uint64 not_in = 7 [json_name = "notIn", (.buf.validate.priv.field) = {</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotIn($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT64);
        $this->not_in = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getLessThan()
    {
        return $this->whichOneof("less_than");
    }

    /**
     * @return string
     */
    public function getGreaterThan()
    {
        return $this->whichOneof("greater_than");
    }

}

