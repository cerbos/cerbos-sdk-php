<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: buf/validate/validate.proto

namespace Buf\Validate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * TimestampRules describe the constraints applied exclusively to the `google.protobuf.Timestamp` well-known type.
 *
 * Generated from protobuf message <code>buf.validate.TimestampRules</code>
 */
class TimestampRules extends \Google\Protobuf\Internal\Message
{
    /**
     * `const` dictates that this field, of the `google.protobuf.Timestamp` type, must exactly match the specified value. If the field value doesn't correspond to the specified timestamp, an error message will be generated.
     * ```proto
     * message MyTimestamp {
     *   // value must equal 2023-05-03T10:00:00Z
     *   google.protobuf.Timestamp created_at = 1 [(buf.validate.field).timestamp.const = {seconds: 1727998800}];
     * }
     * ```
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp const = 2 [json_name = "const", (.buf.validate.priv.field) = {</code>
     */
    protected $const = null;
    /**
     * `within` specifies that this field, of the `google.protobuf.Timestamp` type, must be within the specified duration of the current time. If the field value isn't within the duration, an error message is generated.
     * ```proto
     * message MyTimestamp {
     *   // value must be within 1 hour of now
     *   google.protobuf.Timestamp created_at = 1 [(buf.validate.field).timestamp.within = {seconds: 3600}];
     * }
     * ```
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration within = 9 [json_name = "within", (.buf.validate.priv.field) = {</code>
     */
    protected $within = null;
    protected $less_than;
    protected $greater_than;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $const
     *           `const` dictates that this field, of the `google.protobuf.Timestamp` type, must exactly match the specified value. If the field value doesn't correspond to the specified timestamp, an error message will be generated.
     *           ```proto
     *           message MyTimestamp {
     *             // value must equal 2023-05-03T10:00:00Z
     *             google.protobuf.Timestamp created_at = 1 [(buf.validate.field).timestamp.const = {seconds: 1727998800}];
     *           }
     *           ```
     *     @type \Google\Protobuf\Timestamp $lt
     *           requires the duration field value to be less than the specified value (field < value). If the field value doesn't meet the required conditions, an error message is generated.
     *           ```proto
     *           message MyDuration {
     *             // duration must be less than 'P3D' [duration.lt]
     *             google.protobuf.Duration value = 1 [(buf.validate.field).duration.lt = { seconds: 259200 }];
     *           }
     *           ```
     *     @type \Google\Protobuf\Timestamp $lte
     *           requires the timestamp field value to be less than or equal to the specified value (field <= value). If the field value doesn't meet the required conditions, an error message is generated.
     *           ```proto
     *           message MyTimestamp {
     *             // timestamp must be less than or equal to '2023-05-14T00:00:00Z' [timestamp.lte]
     *             google.protobuf.Timestamp value = 1 [(buf.validate.field).timestamp.lte = { seconds: 1678867200 }];
     *           }
     *           ```
     *     @type bool $lt_now
     *           `lt_now` specifies that this field, of the `google.protobuf.Timestamp` type, must be less than the current time. `lt_now` can only be used with the `within` rule.
     *           ```proto
     *           message MyTimestamp {
     *            // value must be less than now
     *             google.protobuf.Timestamp created_at = 1 [(buf.validate.field).timestamp.lt_now = true];
     *           }
     *           ```
     *     @type \Google\Protobuf\Timestamp $gt
     *           `gt` requires the timestamp field value to be greater than the specified
     *           value (exclusive). If the value of `gt` is larger than a specified `lt`
     *           or `lte`, the range is reversed, and the field value must be outside the
     *           specified range. If the field value doesn't meet the required conditions,
     *           an error message is generated.
     *           ```proto
     *           message MyTimestamp {
     *             // timestamp must be greater than '2023-01-01T00:00:00Z' [timestamp.gt]
     *             google.protobuf.Timestamp value = 1 [(buf.validate.field).timestamp.gt = { seconds: 1672444800 }];
     *             // timestamp must be greater than '2023-01-01T00:00:00Z' and less than '2023-01-02T00:00:00Z' [timestamp.gt_lt]
     *             google.protobuf.Timestamp another_value = 2 [(buf.validate.field).timestamp = { gt: { seconds: 1672444800 }, lt: { seconds: 1672531200 } }];
     *             // timestamp must be greater than '2023-01-02T00:00:00Z' or less than '2023-01-01T00:00:00Z' [timestamp.gt_lt_exclusive]
     *             google.protobuf.Timestamp other_value = 3 [(buf.validate.field).timestamp = { gt: { seconds: 1672531200 }, lt: { seconds: 1672444800 } }];
     *           }
     *           ```
     *     @type \Google\Protobuf\Timestamp $gte
     *           `gte` requires the timestamp field value to be greater than or equal to the
     *           specified value (exclusive). If the value of `gte` is larger than a
     *           specified `lt` or `lte`, the range is reversed, and the field value
     *           must be outside the specified range. If the field value doesn't meet
     *           the required conditions, an error message is generated.
     *           ```proto
     *           message MyTimestamp {
     *             // timestamp must be greater than or equal to '2023-01-01T00:00:00Z' [timestamp.gte]
     *             google.protobuf.Timestamp value = 1 [(buf.validate.field).timestamp.gte = { seconds: 1672444800 }];
     *             // timestamp must be greater than or equal to '2023-01-01T00:00:00Z' and less than '2023-01-02T00:00:00Z' [timestamp.gte_lt]
     *             google.protobuf.Timestamp another_value = 2 [(buf.validate.field).timestamp = { gte: { seconds: 1672444800 }, lt: { seconds: 1672531200 } }];
     *             // timestamp must be greater than or equal to '2023-01-02T00:00:00Z' or less than '2023-01-01T00:00:00Z' [timestamp.gte_lt_exclusive]
     *             google.protobuf.Timestamp other_value = 3 [(buf.validate.field).timestamp = { gte: { seconds: 1672531200 }, lt: { seconds: 1672444800 } }];
     *           }
     *           ```
     *     @type bool $gt_now
     *           `gt_now` specifies that this field, of the `google.protobuf.Timestamp` type, must be greater than the current time. `gt_now` can only be used with the `within` rule.
     *           ```proto
     *           message MyTimestamp {
     *             // value must be greater than now
     *             google.protobuf.Timestamp created_at = 1 [(buf.validate.field).timestamp.gt_now = true];
     *           }
     *           ```
     *     @type \Google\Protobuf\Duration $within
     *           `within` specifies that this field, of the `google.protobuf.Timestamp` type, must be within the specified duration of the current time. If the field value isn't within the duration, an error message is generated.
     *           ```proto
     *           message MyTimestamp {
     *             // value must be within 1 hour of now
     *             google.protobuf.Timestamp created_at = 1 [(buf.validate.field).timestamp.within = {seconds: 3600}];
     *           }
     *           ```
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Buf\Validate\Validate::initOnce();
        parent::__construct($data);
    }

    /**
     * `const` dictates that this field, of the `google.protobuf.Timestamp` type, must exactly match the specified value. If the field value doesn't correspond to the specified timestamp, an error message will be generated.
     * ```proto
     * message MyTimestamp {
     *   // value must equal 2023-05-03T10:00:00Z
     *   google.protobuf.Timestamp created_at = 1 [(buf.validate.field).timestamp.const = {seconds: 1727998800}];
     * }
     * ```
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp const = 2 [json_name = "const", (.buf.validate.priv.field) = {</code>
     * @return \Google\Protobuf\Timestamp|null
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
     * `const` dictates that this field, of the `google.protobuf.Timestamp` type, must exactly match the specified value. If the field value doesn't correspond to the specified timestamp, an error message will be generated.
     * ```proto
     * message MyTimestamp {
     *   // value must equal 2023-05-03T10:00:00Z
     *   google.protobuf.Timestamp created_at = 1 [(buf.validate.field).timestamp.const = {seconds: 1727998800}];
     * }
     * ```
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp const = 2 [json_name = "const", (.buf.validate.priv.field) = {</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setConst($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->const = $var;

        return $this;
    }

    /**
     * requires the duration field value to be less than the specified value (field < value). If the field value doesn't meet the required conditions, an error message is generated.
     * ```proto
     * message MyDuration {
     *   // duration must be less than 'P3D' [duration.lt]
     *   google.protobuf.Duration value = 1 [(buf.validate.field).duration.lt = { seconds: 259200 }];
     * }
     * ```
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp lt = 3 [json_name = "lt", (.buf.validate.priv.field) = {</code>
     * @return \Google\Protobuf\Timestamp|null
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
     * requires the duration field value to be less than the specified value (field < value). If the field value doesn't meet the required conditions, an error message is generated.
     * ```proto
     * message MyDuration {
     *   // duration must be less than 'P3D' [duration.lt]
     *   google.protobuf.Duration value = 1 [(buf.validate.field).duration.lt = { seconds: 259200 }];
     * }
     * ```
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp lt = 3 [json_name = "lt", (.buf.validate.priv.field) = {</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * requires the timestamp field value to be less than or equal to the specified value (field <= value). If the field value doesn't meet the required conditions, an error message is generated.
     * ```proto
     * message MyTimestamp {
     *   // timestamp must be less than or equal to '2023-05-14T00:00:00Z' [timestamp.lte]
     *   google.protobuf.Timestamp value = 1 [(buf.validate.field).timestamp.lte = { seconds: 1678867200 }];
     * }
     * ```
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp lte = 4 [json_name = "lte", (.buf.validate.priv.field) = {</code>
     * @return \Google\Protobuf\Timestamp|null
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
     * requires the timestamp field value to be less than or equal to the specified value (field <= value). If the field value doesn't meet the required conditions, an error message is generated.
     * ```proto
     * message MyTimestamp {
     *   // timestamp must be less than or equal to '2023-05-14T00:00:00Z' [timestamp.lte]
     *   google.protobuf.Timestamp value = 1 [(buf.validate.field).timestamp.lte = { seconds: 1678867200 }];
     * }
     * ```
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp lte = 4 [json_name = "lte", (.buf.validate.priv.field) = {</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLte($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * `lt_now` specifies that this field, of the `google.protobuf.Timestamp` type, must be less than the current time. `lt_now` can only be used with the `within` rule.
     * ```proto
     * message MyTimestamp {
     *  // value must be less than now
     *   google.protobuf.Timestamp created_at = 1 [(buf.validate.field).timestamp.lt_now = true];
     * }
     * ```
     *
     * Generated from protobuf field <code>bool lt_now = 7 [json_name = "ltNow", (.buf.validate.priv.field) = {</code>
     * @return bool
     */
    public function getLtNow()
    {
        return $this->readOneof(7);
    }

    public function hasLtNow()
    {
        return $this->hasOneof(7);
    }

    /**
     * `lt_now` specifies that this field, of the `google.protobuf.Timestamp` type, must be less than the current time. `lt_now` can only be used with the `within` rule.
     * ```proto
     * message MyTimestamp {
     *  // value must be less than now
     *   google.protobuf.Timestamp created_at = 1 [(buf.validate.field).timestamp.lt_now = true];
     * }
     * ```
     *
     * Generated from protobuf field <code>bool lt_now = 7 [json_name = "ltNow", (.buf.validate.priv.field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setLtNow($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * `gt` requires the timestamp field value to be greater than the specified
     * value (exclusive). If the value of `gt` is larger than a specified `lt`
     * or `lte`, the range is reversed, and the field value must be outside the
     * specified range. If the field value doesn't meet the required conditions,
     * an error message is generated.
     * ```proto
     * message MyTimestamp {
     *   // timestamp must be greater than '2023-01-01T00:00:00Z' [timestamp.gt]
     *   google.protobuf.Timestamp value = 1 [(buf.validate.field).timestamp.gt = { seconds: 1672444800 }];
     *   // timestamp must be greater than '2023-01-01T00:00:00Z' and less than '2023-01-02T00:00:00Z' [timestamp.gt_lt]
     *   google.protobuf.Timestamp another_value = 2 [(buf.validate.field).timestamp = { gt: { seconds: 1672444800 }, lt: { seconds: 1672531200 } }];
     *   // timestamp must be greater than '2023-01-02T00:00:00Z' or less than '2023-01-01T00:00:00Z' [timestamp.gt_lt_exclusive]
     *   google.protobuf.Timestamp other_value = 3 [(buf.validate.field).timestamp = { gt: { seconds: 1672531200 }, lt: { seconds: 1672444800 } }];
     * }
     * ```
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp gt = 5 [json_name = "gt", (.buf.validate.priv.field) = {</code>
     * @return \Google\Protobuf\Timestamp|null
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
     * `gt` requires the timestamp field value to be greater than the specified
     * value (exclusive). If the value of `gt` is larger than a specified `lt`
     * or `lte`, the range is reversed, and the field value must be outside the
     * specified range. If the field value doesn't meet the required conditions,
     * an error message is generated.
     * ```proto
     * message MyTimestamp {
     *   // timestamp must be greater than '2023-01-01T00:00:00Z' [timestamp.gt]
     *   google.protobuf.Timestamp value = 1 [(buf.validate.field).timestamp.gt = { seconds: 1672444800 }];
     *   // timestamp must be greater than '2023-01-01T00:00:00Z' and less than '2023-01-02T00:00:00Z' [timestamp.gt_lt]
     *   google.protobuf.Timestamp another_value = 2 [(buf.validate.field).timestamp = { gt: { seconds: 1672444800 }, lt: { seconds: 1672531200 } }];
     *   // timestamp must be greater than '2023-01-02T00:00:00Z' or less than '2023-01-01T00:00:00Z' [timestamp.gt_lt_exclusive]
     *   google.protobuf.Timestamp other_value = 3 [(buf.validate.field).timestamp = { gt: { seconds: 1672531200 }, lt: { seconds: 1672444800 } }];
     * }
     * ```
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp gt = 5 [json_name = "gt", (.buf.validate.priv.field) = {</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setGt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * `gte` requires the timestamp field value to be greater than or equal to the
     * specified value (exclusive). If the value of `gte` is larger than a
     * specified `lt` or `lte`, the range is reversed, and the field value
     * must be outside the specified range. If the field value doesn't meet
     * the required conditions, an error message is generated.
     * ```proto
     * message MyTimestamp {
     *   // timestamp must be greater than or equal to '2023-01-01T00:00:00Z' [timestamp.gte]
     *   google.protobuf.Timestamp value = 1 [(buf.validate.field).timestamp.gte = { seconds: 1672444800 }];
     *   // timestamp must be greater than or equal to '2023-01-01T00:00:00Z' and less than '2023-01-02T00:00:00Z' [timestamp.gte_lt]
     *   google.protobuf.Timestamp another_value = 2 [(buf.validate.field).timestamp = { gte: { seconds: 1672444800 }, lt: { seconds: 1672531200 } }];
     *   // timestamp must be greater than or equal to '2023-01-02T00:00:00Z' or less than '2023-01-01T00:00:00Z' [timestamp.gte_lt_exclusive]
     *   google.protobuf.Timestamp other_value = 3 [(buf.validate.field).timestamp = { gte: { seconds: 1672531200 }, lt: { seconds: 1672444800 } }];
     * }
     * ```
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp gte = 6 [json_name = "gte", (.buf.validate.priv.field) = {</code>
     * @return \Google\Protobuf\Timestamp|null
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
     * `gte` requires the timestamp field value to be greater than or equal to the
     * specified value (exclusive). If the value of `gte` is larger than a
     * specified `lt` or `lte`, the range is reversed, and the field value
     * must be outside the specified range. If the field value doesn't meet
     * the required conditions, an error message is generated.
     * ```proto
     * message MyTimestamp {
     *   // timestamp must be greater than or equal to '2023-01-01T00:00:00Z' [timestamp.gte]
     *   google.protobuf.Timestamp value = 1 [(buf.validate.field).timestamp.gte = { seconds: 1672444800 }];
     *   // timestamp must be greater than or equal to '2023-01-01T00:00:00Z' and less than '2023-01-02T00:00:00Z' [timestamp.gte_lt]
     *   google.protobuf.Timestamp another_value = 2 [(buf.validate.field).timestamp = { gte: { seconds: 1672444800 }, lt: { seconds: 1672531200 } }];
     *   // timestamp must be greater than or equal to '2023-01-02T00:00:00Z' or less than '2023-01-01T00:00:00Z' [timestamp.gte_lt_exclusive]
     *   google.protobuf.Timestamp other_value = 3 [(buf.validate.field).timestamp = { gte: { seconds: 1672531200 }, lt: { seconds: 1672444800 } }];
     * }
     * ```
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp gte = 6 [json_name = "gte", (.buf.validate.priv.field) = {</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setGte($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * `gt_now` specifies that this field, of the `google.protobuf.Timestamp` type, must be greater than the current time. `gt_now` can only be used with the `within` rule.
     * ```proto
     * message MyTimestamp {
     *   // value must be greater than now
     *   google.protobuf.Timestamp created_at = 1 [(buf.validate.field).timestamp.gt_now = true];
     * }
     * ```
     *
     * Generated from protobuf field <code>bool gt_now = 8 [json_name = "gtNow", (.buf.validate.priv.field) = {</code>
     * @return bool
     */
    public function getGtNow()
    {
        return $this->readOneof(8);
    }

    public function hasGtNow()
    {
        return $this->hasOneof(8);
    }

    /**
     * `gt_now` specifies that this field, of the `google.protobuf.Timestamp` type, must be greater than the current time. `gt_now` can only be used with the `within` rule.
     * ```proto
     * message MyTimestamp {
     *   // value must be greater than now
     *   google.protobuf.Timestamp created_at = 1 [(buf.validate.field).timestamp.gt_now = true];
     * }
     * ```
     *
     * Generated from protobuf field <code>bool gt_now = 8 [json_name = "gtNow", (.buf.validate.priv.field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setGtNow($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * `within` specifies that this field, of the `google.protobuf.Timestamp` type, must be within the specified duration of the current time. If the field value isn't within the duration, an error message is generated.
     * ```proto
     * message MyTimestamp {
     *   // value must be within 1 hour of now
     *   google.protobuf.Timestamp created_at = 1 [(buf.validate.field).timestamp.within = {seconds: 3600}];
     * }
     * ```
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration within = 9 [json_name = "within", (.buf.validate.priv.field) = {</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getWithin()
    {
        return $this->within;
    }

    public function hasWithin()
    {
        return isset($this->within);
    }

    public function clearWithin()
    {
        unset($this->within);
    }

    /**
     * `within` specifies that this field, of the `google.protobuf.Timestamp` type, must be within the specified duration of the current time. If the field value isn't within the duration, an error message is generated.
     * ```proto
     * message MyTimestamp {
     *   // value must be within 1 hour of now
     *   google.protobuf.Timestamp created_at = 1 [(buf.validate.field).timestamp.within = {seconds: 3600}];
     * }
     * ```
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration within = 9 [json_name = "within", (.buf.validate.priv.field) = {</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setWithin($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->within = $var;

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

