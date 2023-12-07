<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: buf/validate/validate.proto

namespace Buf\Validate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SFixed32Rules describes the constraints applied to `fixed32` values.
 *
 * Generated from protobuf message <code>buf.validate.SFixed32Rules</code>
 */
class SFixed32Rules extends \Google\Protobuf\Internal\Message
{
    /**
     *`const` requires the field value to exactly match the specified value. If
     * the field value doesn't match, an error message is generated.
     *```proto
     *message MySFixed32 {
     *  // value must equal 42
     *   sfixed32 value = 1 [(buf.validate.field).sfixed32.const = 42];
     *}
     *```
     *
     * Generated from protobuf field <code>optional sfixed32 const = 1 [json_name = "const", (.buf.validate.priv.field) = {</code>
     */
    protected $const = null;
    /**
     *`in` requires the field value to be equal to one of the specified values.
     * If the field value isn't one of the specified values, an error message is
     * generated.
     *```proto
     *message MySFixed32 {
     *  // value must be in list [1, 2, 3]
     *  repeated sfixed32 value = 1 (buf.validate.field).sfixed32 = { in: [1, 2, 3] };
     *}
     *```
     *
     * Generated from protobuf field <code>repeated sfixed32 in = 6 [json_name = "in", (.buf.validate.priv.field) = {</code>
     */
    private $in;
    /**
     *`not_in` requires the field value to not be equal to any of the specified
     * values. If the field value is one of the specified values, an error
     * message is generated.
     *```proto
     *message MySFixed32 {
     *  // value must not be in list [1, 2, 3]
     *  repeated sfixed32 value = 1 (buf.validate.field).sfixed32 = { not_in: [1, 2, 3] };
     *}
     *```
     *
     * Generated from protobuf field <code>repeated sfixed32 not_in = 7 [json_name = "notIn", (.buf.validate.priv.field) = {</code>
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
     *     @type int $const
     *          `const` requires the field value to exactly match the specified value. If
     *           the field value doesn't match, an error message is generated.
     *          ```proto
     *          message MySFixed32 {
     *            // value must equal 42
     *             sfixed32 value = 1 [(buf.validate.field).sfixed32.const = 42];
     *          }
     *          ```
     *     @type int $lt
     *          `lt` requires the field value to be less than the specified value (field <
     *           value). If the field value is equal to or greater than the specified value,
     *           an error message is generated.
     *          ```proto
     *          message MySFixed32 {
     *            // value must be less than 10
     *             sfixed32 value = 1 [(buf.validate.field).sfixed32.lt = 10];
     *          }
     *          ```
     *     @type int $lte
     *          `lte` requires the field value to be less than or equal to the specified
     *           value (field <= value). If the field value is greater than the specified
     *           value, an error message is generated.
     *          ```proto
     *          message MySFixed32 {
     *            // value must be less than or equal to 10
     *             sfixed32 value = 1 [(buf.validate.field).sfixed32.lte = 10];
     *          }
     *          ```
     *     @type int $gt
     *          `gt` requires the field value to be greater than the specified value
     *           (exclusive). If the value of `gt` is larger than a specified `lt` or
     *           `lte`, the range is reversed, and the field value must be outside the
     *           specified range. If the field value doesn't meet the required conditions,
     *           an error message is generated.
     *          ```proto
     *          message MySFixed32 {
     *            // value must be greater than 5 [sfixed32.gt]
     *            sfixed32 value = 1 [(buf.validate.field).sfixed32.gt = 5];
     *            // value must be greater than 5 and less than 10 [sfixed32.gt_lt]
     *            sfixed32 other_value = 2 [(buf.validate.field).sfixed32 = { gt: 5, lt: 10 }];
     *            // value must be greater than 10 or less than 5 [sfixed32.gt_lt_exclusive]
     *            sfixed32 another_value = 3 [(buf.validate.field).sfixed32 = { gt: 10, lt: 5 }];
     *          }
     *          ```
     *     @type int $gte
     *          `gte` requires the field value to be greater than or equal to the specified
     *           value (exclusive). If the value of `gte` is larger than a specified `lt`
     *           or `lte`, the range is reversed, and the field value must be outside the
     *           specified range. If the field value doesn't meet the required conditions,
     *           an error message is generated.
     *          ```proto
     *          message MySFixed32 {
     *            // value must be greater than or equal to 5 [sfixed32.gte]
     *            sfixed32 value = 1 [(buf.validate.field).sfixed32.gte = 5];
     *            // value must be greater than or equal to 5 and less than 10 [sfixed32.gte_lt]
     *            sfixed32 other_value = 2 [(buf.validate.field).sfixed32 = { gte: 5, lt: 10 }];
     *            // value must be greater than or equal to 10 or less than 5 [sfixed32.gte_lt_exclusive]
     *            sfixed32 another_value = 3 [(buf.validate.field).sfixed32 = { gte: 10, lt: 5 }];
     *          }
     *          ```
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $in
     *          `in` requires the field value to be equal to one of the specified values.
     *           If the field value isn't one of the specified values, an error message is
     *           generated.
     *          ```proto
     *          message MySFixed32 {
     *            // value must be in list [1, 2, 3]
     *            repeated sfixed32 value = 1 (buf.validate.field).sfixed32 = { in: [1, 2, 3] };
     *          }
     *          ```
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $not_in
     *          `not_in` requires the field value to not be equal to any of the specified
     *           values. If the field value is one of the specified values, an error
     *           message is generated.
     *          ```proto
     *          message MySFixed32 {
     *            // value must not be in list [1, 2, 3]
     *            repeated sfixed32 value = 1 (buf.validate.field).sfixed32 = { not_in: [1, 2, 3] };
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
     *message MySFixed32 {
     *  // value must equal 42
     *   sfixed32 value = 1 [(buf.validate.field).sfixed32.const = 42];
     *}
     *```
     *
     * Generated from protobuf field <code>optional sfixed32 const = 1 [json_name = "const", (.buf.validate.priv.field) = {</code>
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
     *`const` requires the field value to exactly match the specified value. If
     * the field value doesn't match, an error message is generated.
     *```proto
     *message MySFixed32 {
     *  // value must equal 42
     *   sfixed32 value = 1 [(buf.validate.field).sfixed32.const = 42];
     *}
     *```
     *
     * Generated from protobuf field <code>optional sfixed32 const = 1 [json_name = "const", (.buf.validate.priv.field) = {</code>
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
     *`lt` requires the field value to be less than the specified value (field <
     * value). If the field value is equal to or greater than the specified value,
     * an error message is generated.
     *```proto
     *message MySFixed32 {
     *  // value must be less than 10
     *   sfixed32 value = 1 [(buf.validate.field).sfixed32.lt = 10];
     *}
     *```
     *
     * Generated from protobuf field <code>sfixed32 lt = 2 [json_name = "lt", (.buf.validate.priv.field) = {</code>
     * @return int
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
     *message MySFixed32 {
     *  // value must be less than 10
     *   sfixed32 value = 1 [(buf.validate.field).sfixed32.lt = 10];
     *}
     *```
     *
     * Generated from protobuf field <code>sfixed32 lt = 2 [json_name = "lt", (.buf.validate.priv.field) = {</code>
     * @param int $var
     * @return $this
     */
    public function setLt($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     *`lte` requires the field value to be less than or equal to the specified
     * value (field <= value). If the field value is greater than the specified
     * value, an error message is generated.
     *```proto
     *message MySFixed32 {
     *  // value must be less than or equal to 10
     *   sfixed32 value = 1 [(buf.validate.field).sfixed32.lte = 10];
     *}
     *```
     *
     * Generated from protobuf field <code>sfixed32 lte = 3 [json_name = "lte", (.buf.validate.priv.field) = {</code>
     * @return int
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
     *message MySFixed32 {
     *  // value must be less than or equal to 10
     *   sfixed32 value = 1 [(buf.validate.field).sfixed32.lte = 10];
     *}
     *```
     *
     * Generated from protobuf field <code>sfixed32 lte = 3 [json_name = "lte", (.buf.validate.priv.field) = {</code>
     * @param int $var
     * @return $this
     */
    public function setLte($var)
    {
        GPBUtil::checkInt32($var);
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
     *message MySFixed32 {
     *  // value must be greater than 5 [sfixed32.gt]
     *  sfixed32 value = 1 [(buf.validate.field).sfixed32.gt = 5];
     *  // value must be greater than 5 and less than 10 [sfixed32.gt_lt]
     *  sfixed32 other_value = 2 [(buf.validate.field).sfixed32 = { gt: 5, lt: 10 }];
     *  // value must be greater than 10 or less than 5 [sfixed32.gt_lt_exclusive]
     *  sfixed32 another_value = 3 [(buf.validate.field).sfixed32 = { gt: 10, lt: 5 }];
     *}
     *```
     *
     * Generated from protobuf field <code>sfixed32 gt = 4 [json_name = "gt", (.buf.validate.priv.field) = {</code>
     * @return int
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
     *message MySFixed32 {
     *  // value must be greater than 5 [sfixed32.gt]
     *  sfixed32 value = 1 [(buf.validate.field).sfixed32.gt = 5];
     *  // value must be greater than 5 and less than 10 [sfixed32.gt_lt]
     *  sfixed32 other_value = 2 [(buf.validate.field).sfixed32 = { gt: 5, lt: 10 }];
     *  // value must be greater than 10 or less than 5 [sfixed32.gt_lt_exclusive]
     *  sfixed32 another_value = 3 [(buf.validate.field).sfixed32 = { gt: 10, lt: 5 }];
     *}
     *```
     *
     * Generated from protobuf field <code>sfixed32 gt = 4 [json_name = "gt", (.buf.validate.priv.field) = {</code>
     * @param int $var
     * @return $this
     */
    public function setGt($var)
    {
        GPBUtil::checkInt32($var);
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
     *message MySFixed32 {
     *  // value must be greater than or equal to 5 [sfixed32.gte]
     *  sfixed32 value = 1 [(buf.validate.field).sfixed32.gte = 5];
     *  // value must be greater than or equal to 5 and less than 10 [sfixed32.gte_lt]
     *  sfixed32 other_value = 2 [(buf.validate.field).sfixed32 = { gte: 5, lt: 10 }];
     *  // value must be greater than or equal to 10 or less than 5 [sfixed32.gte_lt_exclusive]
     *  sfixed32 another_value = 3 [(buf.validate.field).sfixed32 = { gte: 10, lt: 5 }];
     *}
     *```
     *
     * Generated from protobuf field <code>sfixed32 gte = 5 [json_name = "gte", (.buf.validate.priv.field) = {</code>
     * @return int
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
     *message MySFixed32 {
     *  // value must be greater than or equal to 5 [sfixed32.gte]
     *  sfixed32 value = 1 [(buf.validate.field).sfixed32.gte = 5];
     *  // value must be greater than or equal to 5 and less than 10 [sfixed32.gte_lt]
     *  sfixed32 other_value = 2 [(buf.validate.field).sfixed32 = { gte: 5, lt: 10 }];
     *  // value must be greater than or equal to 10 or less than 5 [sfixed32.gte_lt_exclusive]
     *  sfixed32 another_value = 3 [(buf.validate.field).sfixed32 = { gte: 10, lt: 5 }];
     *}
     *```
     *
     * Generated from protobuf field <code>sfixed32 gte = 5 [json_name = "gte", (.buf.validate.priv.field) = {</code>
     * @param int $var
     * @return $this
     */
    public function setGte($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     *`in` requires the field value to be equal to one of the specified values.
     * If the field value isn't one of the specified values, an error message is
     * generated.
     *```proto
     *message MySFixed32 {
     *  // value must be in list [1, 2, 3]
     *  repeated sfixed32 value = 1 (buf.validate.field).sfixed32 = { in: [1, 2, 3] };
     *}
     *```
     *
     * Generated from protobuf field <code>repeated sfixed32 in = 6 [json_name = "in", (.buf.validate.priv.field) = {</code>
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
     *message MySFixed32 {
     *  // value must be in list [1, 2, 3]
     *  repeated sfixed32 value = 1 (buf.validate.field).sfixed32 = { in: [1, 2, 3] };
     *}
     *```
     *
     * Generated from protobuf field <code>repeated sfixed32 in = 6 [json_name = "in", (.buf.validate.priv.field) = {</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIn($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::SFIXED32);
        $this->in = $arr;

        return $this;
    }

    /**
     *`not_in` requires the field value to not be equal to any of the specified
     * values. If the field value is one of the specified values, an error
     * message is generated.
     *```proto
     *message MySFixed32 {
     *  // value must not be in list [1, 2, 3]
     *  repeated sfixed32 value = 1 (buf.validate.field).sfixed32 = { not_in: [1, 2, 3] };
     *}
     *```
     *
     * Generated from protobuf field <code>repeated sfixed32 not_in = 7 [json_name = "notIn", (.buf.validate.priv.field) = {</code>
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
     *message MySFixed32 {
     *  // value must not be in list [1, 2, 3]
     *  repeated sfixed32 value = 1 (buf.validate.field).sfixed32 = { not_in: [1, 2, 3] };
     *}
     *```
     *
     * Generated from protobuf field <code>repeated sfixed32 not_in = 7 [json_name = "notIn", (.buf.validate.priv.field) = {</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotIn($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::SFIXED32);
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

