<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: buf/validate/validate.proto

namespace Buf\Validate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DurationRules describe the constraints applied exclusively to the `google.protobuf.Duration` well-known type.
 *
 * Generated from protobuf message <code>buf.validate.DurationRules</code>
 */
class DurationRules extends \Google\Protobuf\Internal\Message
{
    /**
     *`const` dictates that the field must match the specified value of the `google.protobuf.Duration` type exactly.
     *If the field's value deviates from the specified value, an error message
     *will be generated.
     *```proto
     *message MyDuration {
     *  // value must equal 5s
     *   google.protobuf.Duration value = 1 [(buf.validate.field).duration.const = "5s"];
     *}
     *```
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration const = 2 [json_name = "const", (.buf.validate.priv.field) = {</code>
     */
    protected $const = null;
    /**
     *`in` asserts that the field must be equal to one of the specified values of the `google.protobuf.Duration` type.
     *If the field's value doesn't correspond to any of the specified values,
     *an error message will be generated.
     *```proto
     *message MyDuration {
     *  // value must be in list [1s, 2s, 3s]
     *   google.protobuf.Duration value = 1 [(buf.validate.field).duration.in = ["1s", "2s", "3s"]];
     *}
     *```
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Duration in = 7 [json_name = "in", (.buf.validate.priv.field) = {</code>
     */
    private $in;
    /**
     *`not_in` denotes that the field must not be equal to
     *any of the specified values of the `google.protobuf.Duration` type.
     *If the field's value matches any of these values, an error message will be
     *generated.
     *```proto
     *message MyDuration {
     *  // value must not be in list [1s, 2s, 3s]
     *   google.protobuf.Duration value = 1 [(buf.validate.field).duration.not_in = ["1s", "2s", "3s"]];
     *}
     *```
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Duration not_in = 8 [json_name = "notIn", (.buf.validate.priv.field) = {</code>
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
     *     @type \Google\Protobuf\Duration $const
     *          `const` dictates that the field must match the specified value of the `google.protobuf.Duration` type exactly.
     *          If the field's value deviates from the specified value, an error message
     *          will be generated.
     *          ```proto
     *          message MyDuration {
     *            // value must equal 5s
     *             google.protobuf.Duration value = 1 [(buf.validate.field).duration.const = "5s"];
     *          }
     *          ```
     *     @type \Google\Protobuf\Duration $lt
     *          `lt` stipulates that the field must be less than the specified value of the `google.protobuf.Duration` type,
     *          exclusive. If the field's value is greater than or equal to the specified
     *          value, an error message will be generated.
     *          ```proto
     *          message MyDuration {
     *            // value must be less than 5s
     *             google.protobuf.Duration value = 1 [(buf.validate.field).duration.lt = "5s"];
     *          }
     *          ```
     *     @type \Google\Protobuf\Duration $lte
     *          `lte` indicates that the field must be less than or equal to the specified
     *          value of the `google.protobuf.Duration` type, inclusive. If the field's value is greater than the specified value,
     *          an error message will be generated.
     *          ```proto
     *          message MyDuration {
     *            // value must be less than or equal to 10s
     *             google.protobuf.Duration value = 1 [(buf.validate.field).duration.lte = "10s"];
     *          }
     *          ```
     *     @type \Google\Protobuf\Duration $gt
     *           `gt` requires the duration field value to be greater than the specified
     *           value (exclusive). If the value of `gt` is larger than a specified `lt`
     *           or `lte`, the range is reversed, and the field value must be outside the
     *           specified range. If the field value doesn't meet the required conditions,
     *           an error message is generated.
     *          ```proto
     *          message MyDuration {
     *            // duration must be greater than 5s [duration.gt]
     *            google.protobuf.Duration value = 1 [(buf.validate.field).duration.gt = { seconds: 5 }];
     *            // duration must be greater than 5s and less than 10s [duration.gt_lt]
     *            google.protobuf.Duration another_value = 2 [(buf.validate.field).duration = { gt: { seconds: 5 }, lt: { seconds: 10 } }];
     *            // duration must be greater than 10s or less than 5s [duration.gt_lt_exclusive]
     *            google.protobuf.Duration other_value = 3 [(buf.validate.field).duration = { gt: { seconds: 10 }, lt: { seconds: 5 } }];
     *          }
     *          ```
     *     @type \Google\Protobuf\Duration $gte
     *           `gte` requires the duration field value to be greater than or equal to the
     *           specified value (exclusive). If the value of `gte` is larger than a
     *           specified `lt` or `lte`, the range is reversed, and the field value must
     *           be outside the specified range. If the field value doesn't meet the
     *           required conditions, an error message is generated.
     *          ```proto
     *          message MyDuration {
     *            // duration must be greater than or equal to 5s [duration.gte]
     *            google.protobuf.Duration value = 1 [(buf.validate.field).duration.gte = { seconds: 5 }];
     *            // duration must be greater than or equal to 5s and less than 10s [duration.gte_lt]
     *            google.protobuf.Duration another_value = 2 [(buf.validate.field).duration = { gte: { seconds: 5 }, lt: { seconds: 10 } }];
     *            // duration must be greater than or equal to 10s or less than 5s [duration.gte_lt_exclusive]
     *            google.protobuf.Duration other_value = 3 [(buf.validate.field).duration = { gte: { seconds: 10 }, lt: { seconds: 5 } }];
     *          }
     *          ```
     *     @type array<\Google\Protobuf\Duration>|\Google\Protobuf\Internal\RepeatedField $in
     *          `in` asserts that the field must be equal to one of the specified values of the `google.protobuf.Duration` type.
     *          If the field's value doesn't correspond to any of the specified values,
     *          an error message will be generated.
     *          ```proto
     *          message MyDuration {
     *            // value must be in list [1s, 2s, 3s]
     *             google.protobuf.Duration value = 1 [(buf.validate.field).duration.in = ["1s", "2s", "3s"]];
     *          }
     *          ```
     *     @type array<\Google\Protobuf\Duration>|\Google\Protobuf\Internal\RepeatedField $not_in
     *          `not_in` denotes that the field must not be equal to
     *          any of the specified values of the `google.protobuf.Duration` type.
     *          If the field's value matches any of these values, an error message will be
     *          generated.
     *          ```proto
     *          message MyDuration {
     *            // value must not be in list [1s, 2s, 3s]
     *             google.protobuf.Duration value = 1 [(buf.validate.field).duration.not_in = ["1s", "2s", "3s"]];
     *          }
     *          ```
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Buf\Validate\Validate::initOnce();
        parent::__construct($data);
    }

    /**
     *`const` dictates that the field must match the specified value of the `google.protobuf.Duration` type exactly.
     *If the field's value deviates from the specified value, an error message
     *will be generated.
     *```proto
     *message MyDuration {
     *  // value must equal 5s
     *   google.protobuf.Duration value = 1 [(buf.validate.field).duration.const = "5s"];
     *}
     *```
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration const = 2 [json_name = "const", (.buf.validate.priv.field) = {</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getConst()
    {
        return $this->const;
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
     *`const` dictates that the field must match the specified value of the `google.protobuf.Duration` type exactly.
     *If the field's value deviates from the specified value, an error message
     *will be generated.
     *```proto
     *message MyDuration {
     *  // value must equal 5s
     *   google.protobuf.Duration value = 1 [(buf.validate.field).duration.const = "5s"];
     *}
     *```
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration const = 2 [json_name = "const", (.buf.validate.priv.field) = {</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setConst($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->const = $var;

        return $this;
    }

    /**
     *`lt` stipulates that the field must be less than the specified value of the `google.protobuf.Duration` type,
     *exclusive. If the field's value is greater than or equal to the specified
     *value, an error message will be generated.
     *```proto
     *message MyDuration {
     *  // value must be less than 5s
     *   google.protobuf.Duration value = 1 [(buf.validate.field).duration.lt = "5s"];
     *}
     *```
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lt = 3 [json_name = "lt", (.buf.validate.priv.field) = {</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getLt()
    {
        return $this->readOneof(3);
    }

    public function hasLt()
    {
        return $this->hasOneof(3);
    }

    /**
     *`lt` stipulates that the field must be less than the specified value of the `google.protobuf.Duration` type,
     *exclusive. If the field's value is greater than or equal to the specified
     *value, an error message will be generated.
     *```proto
     *message MyDuration {
     *  // value must be less than 5s
     *   google.protobuf.Duration value = 1 [(buf.validate.field).duration.lt = "5s"];
     *}
     *```
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lt = 3 [json_name = "lt", (.buf.validate.priv.field) = {</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setLt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     *`lte` indicates that the field must be less than or equal to the specified
     *value of the `google.protobuf.Duration` type, inclusive. If the field's value is greater than the specified value,
     *an error message will be generated.
     *```proto
     *message MyDuration {
     *  // value must be less than or equal to 10s
     *   google.protobuf.Duration value = 1 [(buf.validate.field).duration.lte = "10s"];
     *}
     *```
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lte = 4 [json_name = "lte", (.buf.validate.priv.field) = {</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getLte()
    {
        return $this->readOneof(4);
    }

    public function hasLte()
    {
        return $this->hasOneof(4);
    }

    /**
     *`lte` indicates that the field must be less than or equal to the specified
     *value of the `google.protobuf.Duration` type, inclusive. If the field's value is greater than the specified value,
     *an error message will be generated.
     *```proto
     *message MyDuration {
     *  // value must be less than or equal to 10s
     *   google.protobuf.Duration value = 1 [(buf.validate.field).duration.lte = "10s"];
     *}
     *```
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lte = 4 [json_name = "lte", (.buf.validate.priv.field) = {</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setLte($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * `gt` requires the duration field value to be greater than the specified
     * value (exclusive). If the value of `gt` is larger than a specified `lt`
     * or `lte`, the range is reversed, and the field value must be outside the
     * specified range. If the field value doesn't meet the required conditions,
     * an error message is generated.
     *```proto
     *message MyDuration {
     *  // duration must be greater than 5s [duration.gt]
     *  google.protobuf.Duration value = 1 [(buf.validate.field).duration.gt = { seconds: 5 }];
     *  // duration must be greater than 5s and less than 10s [duration.gt_lt]
     *  google.protobuf.Duration another_value = 2 [(buf.validate.field).duration = { gt: { seconds: 5 }, lt: { seconds: 10 } }];
     *  // duration must be greater than 10s or less than 5s [duration.gt_lt_exclusive]
     *  google.protobuf.Duration other_value = 3 [(buf.validate.field).duration = { gt: { seconds: 10 }, lt: { seconds: 5 } }];
     *}
     *```
     *
     * Generated from protobuf field <code>.google.protobuf.Duration gt = 5 [json_name = "gt", (.buf.validate.priv.field) = {</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getGt()
    {
        return $this->readOneof(5);
    }

    public function hasGt()
    {
        return $this->hasOneof(5);
    }

    /**
     * `gt` requires the duration field value to be greater than the specified
     * value (exclusive). If the value of `gt` is larger than a specified `lt`
     * or `lte`, the range is reversed, and the field value must be outside the
     * specified range. If the field value doesn't meet the required conditions,
     * an error message is generated.
     *```proto
     *message MyDuration {
     *  // duration must be greater than 5s [duration.gt]
     *  google.protobuf.Duration value = 1 [(buf.validate.field).duration.gt = { seconds: 5 }];
     *  // duration must be greater than 5s and less than 10s [duration.gt_lt]
     *  google.protobuf.Duration another_value = 2 [(buf.validate.field).duration = { gt: { seconds: 5 }, lt: { seconds: 10 } }];
     *  // duration must be greater than 10s or less than 5s [duration.gt_lt_exclusive]
     *  google.protobuf.Duration other_value = 3 [(buf.validate.field).duration = { gt: { seconds: 10 }, lt: { seconds: 5 } }];
     *}
     *```
     *
     * Generated from protobuf field <code>.google.protobuf.Duration gt = 5 [json_name = "gt", (.buf.validate.priv.field) = {</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setGt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * `gte` requires the duration field value to be greater than or equal to the
     * specified value (exclusive). If the value of `gte` is larger than a
     * specified `lt` or `lte`, the range is reversed, and the field value must
     * be outside the specified range. If the field value doesn't meet the
     * required conditions, an error message is generated.
     *```proto
     *message MyDuration {
     *  // duration must be greater than or equal to 5s [duration.gte]
     *  google.protobuf.Duration value = 1 [(buf.validate.field).duration.gte = { seconds: 5 }];
     *  // duration must be greater than or equal to 5s and less than 10s [duration.gte_lt]
     *  google.protobuf.Duration another_value = 2 [(buf.validate.field).duration = { gte: { seconds: 5 }, lt: { seconds: 10 } }];
     *  // duration must be greater than or equal to 10s or less than 5s [duration.gte_lt_exclusive]
     *  google.protobuf.Duration other_value = 3 [(buf.validate.field).duration = { gte: { seconds: 10 }, lt: { seconds: 5 } }];
     *}
     *```
     *
     * Generated from protobuf field <code>.google.protobuf.Duration gte = 6 [json_name = "gte", (.buf.validate.priv.field) = {</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getGte()
    {
        return $this->readOneof(6);
    }

    public function hasGte()
    {
        return $this->hasOneof(6);
    }

    /**
     * `gte` requires the duration field value to be greater than or equal to the
     * specified value (exclusive). If the value of `gte` is larger than a
     * specified `lt` or `lte`, the range is reversed, and the field value must
     * be outside the specified range. If the field value doesn't meet the
     * required conditions, an error message is generated.
     *```proto
     *message MyDuration {
     *  // duration must be greater than or equal to 5s [duration.gte]
     *  google.protobuf.Duration value = 1 [(buf.validate.field).duration.gte = { seconds: 5 }];
     *  // duration must be greater than or equal to 5s and less than 10s [duration.gte_lt]
     *  google.protobuf.Duration another_value = 2 [(buf.validate.field).duration = { gte: { seconds: 5 }, lt: { seconds: 10 } }];
     *  // duration must be greater than or equal to 10s or less than 5s [duration.gte_lt_exclusive]
     *  google.protobuf.Duration other_value = 3 [(buf.validate.field).duration = { gte: { seconds: 10 }, lt: { seconds: 5 } }];
     *}
     *```
     *
     * Generated from protobuf field <code>.google.protobuf.Duration gte = 6 [json_name = "gte", (.buf.validate.priv.field) = {</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setGte($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     *`in` asserts that the field must be equal to one of the specified values of the `google.protobuf.Duration` type.
     *If the field's value doesn't correspond to any of the specified values,
     *an error message will be generated.
     *```proto
     *message MyDuration {
     *  // value must be in list [1s, 2s, 3s]
     *   google.protobuf.Duration value = 1 [(buf.validate.field).duration.in = ["1s", "2s", "3s"]];
     *}
     *```
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Duration in = 7 [json_name = "in", (.buf.validate.priv.field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIn()
    {
        return $this->in;
    }

    /**
     *`in` asserts that the field must be equal to one of the specified values of the `google.protobuf.Duration` type.
     *If the field's value doesn't correspond to any of the specified values,
     *an error message will be generated.
     *```proto
     *message MyDuration {
     *  // value must be in list [1s, 2s, 3s]
     *   google.protobuf.Duration value = 1 [(buf.validate.field).duration.in = ["1s", "2s", "3s"]];
     *}
     *```
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Duration in = 7 [json_name = "in", (.buf.validate.priv.field) = {</code>
     * @param array<\Google\Protobuf\Duration>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIn($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Duration::class);
        $this->in = $arr;

        return $this;
    }

    /**
     *`not_in` denotes that the field must not be equal to
     *any of the specified values of the `google.protobuf.Duration` type.
     *If the field's value matches any of these values, an error message will be
     *generated.
     *```proto
     *message MyDuration {
     *  // value must not be in list [1s, 2s, 3s]
     *   google.protobuf.Duration value = 1 [(buf.validate.field).duration.not_in = ["1s", "2s", "3s"]];
     *}
     *```
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Duration not_in = 8 [json_name = "notIn", (.buf.validate.priv.field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNotIn()
    {
        return $this->not_in;
    }

    /**
     *`not_in` denotes that the field must not be equal to
     *any of the specified values of the `google.protobuf.Duration` type.
     *If the field's value matches any of these values, an error message will be
     *generated.
     *```proto
     *message MyDuration {
     *  // value must not be in list [1s, 2s, 3s]
     *   google.protobuf.Duration value = 1 [(buf.validate.field).duration.not_in = ["1s", "2s", "3s"]];
     *}
     *```
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Duration not_in = 8 [json_name = "notIn", (.buf.validate.priv.field) = {</code>
     * @param array<\Google\Protobuf\Duration>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotIn($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Duration::class);
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
