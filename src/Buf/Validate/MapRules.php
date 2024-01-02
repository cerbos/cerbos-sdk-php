<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: buf/validate/validate.proto

namespace Buf\Validate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MapRules describe the constraints applied to `map` values.
 *
 * Generated from protobuf message <code>buf.validate.MapRules</code>
 */
class MapRules extends \Google\Protobuf\Internal\Message
{
    /**
     *Specifies the minimum number of key-value pairs allowed. If the field has
     * fewer key-value pairs than specified, an error message is generated.
     * ```proto
     * message MyMap {
     *   // The field `value` must have at least 2 key-value pairs.
     *   map<string, string> value = 1 [(buf.validate.field).map.min_pairs = 2];
     * }
     * ```
     *
     * Generated from protobuf field <code>optional uint64 min_pairs = 1 [json_name = "minPairs", (.buf.validate.priv.field) = {</code>
     */
    protected $min_pairs = null;
    /**
     *Specifies the maximum number of key-value pairs allowed. If the field has
     * more key-value pairs than specified, an error message is generated.
     * ```proto
     * message MyMap {
     *   // The field `value` must have at most 3 key-value pairs.
     *   map<string, string> value = 1 [(buf.validate.field).map.max_pairs = 3];
     * }
     * ```
     *
     * Generated from protobuf field <code>optional uint64 max_pairs = 2 [json_name = "maxPairs", (.buf.validate.priv.field) = {</code>
     */
    protected $max_pairs = null;
    /**
     *Specifies the constraints to be applied to each key in the field.
     * ```proto
     * message MyMap {
     *   // The keys in the field `value` must follow the specified constraints.
     *   map<string, string> value = 1 [(buf.validate.field).map.keys = {
     *     string: {
     *       min_len: 3
     *       max_len: 10
     *     }
     *   }];
     * }
     * ```
     *
     * Generated from protobuf field <code>optional .buf.validate.FieldConstraints keys = 4 [json_name = "keys"];</code>
     */
    protected $keys = null;
    /**
     *Specifies the constraints to be applied to the value of each key in the
     * field. Message values will still have their validations evaluated unless
     *skip is specified here.
     * ```proto
     * message MyMap {
     *   // The values in the field `value` must follow the specified constraints.
     *   map<string, string> value = 1 [(buf.validate.field).map.values = {
     *     string: {
     *       min_len: 5
     *       max_len: 20
     *     }
     *   }];
     * }
     * ```
     *
     * Generated from protobuf field <code>optional .buf.validate.FieldConstraints values = 5 [json_name = "values"];</code>
     */
    protected $values = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $min_pairs
     *          Specifies the minimum number of key-value pairs allowed. If the field has
     *           fewer key-value pairs than specified, an error message is generated.
     *           ```proto
     *           message MyMap {
     *             // The field `value` must have at least 2 key-value pairs.
     *             map<string, string> value = 1 [(buf.validate.field).map.min_pairs = 2];
     *           }
     *           ```
     *     @type int|string $max_pairs
     *          Specifies the maximum number of key-value pairs allowed. If the field has
     *           more key-value pairs than specified, an error message is generated.
     *           ```proto
     *           message MyMap {
     *             // The field `value` must have at most 3 key-value pairs.
     *             map<string, string> value = 1 [(buf.validate.field).map.max_pairs = 3];
     *           }
     *           ```
     *     @type \Buf\Validate\FieldConstraints $keys
     *          Specifies the constraints to be applied to each key in the field.
     *           ```proto
     *           message MyMap {
     *             // The keys in the field `value` must follow the specified constraints.
     *             map<string, string> value = 1 [(buf.validate.field).map.keys = {
     *               string: {
     *                 min_len: 3
     *                 max_len: 10
     *               }
     *             }];
     *           }
     *           ```
     *     @type \Buf\Validate\FieldConstraints $values
     *          Specifies the constraints to be applied to the value of each key in the
     *           field. Message values will still have their validations evaluated unless
     *          skip is specified here.
     *           ```proto
     *           message MyMap {
     *             // The values in the field `value` must follow the specified constraints.
     *             map<string, string> value = 1 [(buf.validate.field).map.values = {
     *               string: {
     *                 min_len: 5
     *                 max_len: 20
     *               }
     *             }];
     *           }
     *           ```
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Buf\Validate\Validate::initOnce();
        parent::__construct($data);
    }

    /**
     *Specifies the minimum number of key-value pairs allowed. If the field has
     * fewer key-value pairs than specified, an error message is generated.
     * ```proto
     * message MyMap {
     *   // The field `value` must have at least 2 key-value pairs.
     *   map<string, string> value = 1 [(buf.validate.field).map.min_pairs = 2];
     * }
     * ```
     *
     * Generated from protobuf field <code>optional uint64 min_pairs = 1 [json_name = "minPairs", (.buf.validate.priv.field) = {</code>
     * @return int|string
     */
    public function getMinPairs()
    {
        return isset($this->min_pairs) ? $this->min_pairs : 0;
    }

    public function hasMinPairs()
    {
        return isset($this->min_pairs);
    }

    public function clearMinPairs()
    {
        unset($this->min_pairs);
    }

    /**
     *Specifies the minimum number of key-value pairs allowed. If the field has
     * fewer key-value pairs than specified, an error message is generated.
     * ```proto
     * message MyMap {
     *   // The field `value` must have at least 2 key-value pairs.
     *   map<string, string> value = 1 [(buf.validate.field).map.min_pairs = 2];
     * }
     * ```
     *
     * Generated from protobuf field <code>optional uint64 min_pairs = 1 [json_name = "minPairs", (.buf.validate.priv.field) = {</code>
     * @param int|string $var
     * @return $this
     */
    public function setMinPairs($var)
    {
        GPBUtil::checkUint64($var);
        $this->min_pairs = $var;

        return $this;
    }

    /**
     *Specifies the maximum number of key-value pairs allowed. If the field has
     * more key-value pairs than specified, an error message is generated.
     * ```proto
     * message MyMap {
     *   // The field `value` must have at most 3 key-value pairs.
     *   map<string, string> value = 1 [(buf.validate.field).map.max_pairs = 3];
     * }
     * ```
     *
     * Generated from protobuf field <code>optional uint64 max_pairs = 2 [json_name = "maxPairs", (.buf.validate.priv.field) = {</code>
     * @return int|string
     */
    public function getMaxPairs()
    {
        return isset($this->max_pairs) ? $this->max_pairs : 0;
    }

    public function hasMaxPairs()
    {
        return isset($this->max_pairs);
    }

    public function clearMaxPairs()
    {
        unset($this->max_pairs);
    }

    /**
     *Specifies the maximum number of key-value pairs allowed. If the field has
     * more key-value pairs than specified, an error message is generated.
     * ```proto
     * message MyMap {
     *   // The field `value` must have at most 3 key-value pairs.
     *   map<string, string> value = 1 [(buf.validate.field).map.max_pairs = 3];
     * }
     * ```
     *
     * Generated from protobuf field <code>optional uint64 max_pairs = 2 [json_name = "maxPairs", (.buf.validate.priv.field) = {</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxPairs($var)
    {
        GPBUtil::checkUint64($var);
        $this->max_pairs = $var;

        return $this;
    }

    /**
     *Specifies the constraints to be applied to each key in the field.
     * ```proto
     * message MyMap {
     *   // The keys in the field `value` must follow the specified constraints.
     *   map<string, string> value = 1 [(buf.validate.field).map.keys = {
     *     string: {
     *       min_len: 3
     *       max_len: 10
     *     }
     *   }];
     * }
     * ```
     *
     * Generated from protobuf field <code>optional .buf.validate.FieldConstraints keys = 4 [json_name = "keys"];</code>
     * @return \Buf\Validate\FieldConstraints|null
     */
    public function getKeys()
    {
        return $this->keys;
    }

    public function hasKeys()
    {
        return isset($this->keys);
    }

    public function clearKeys()
    {
        unset($this->keys);
    }

    /**
     *Specifies the constraints to be applied to each key in the field.
     * ```proto
     * message MyMap {
     *   // The keys in the field `value` must follow the specified constraints.
     *   map<string, string> value = 1 [(buf.validate.field).map.keys = {
     *     string: {
     *       min_len: 3
     *       max_len: 10
     *     }
     *   }];
     * }
     * ```
     *
     * Generated from protobuf field <code>optional .buf.validate.FieldConstraints keys = 4 [json_name = "keys"];</code>
     * @param \Buf\Validate\FieldConstraints $var
     * @return $this
     */
    public function setKeys($var)
    {
        GPBUtil::checkMessage($var, \Buf\Validate\FieldConstraints::class);
        $this->keys = $var;

        return $this;
    }

    /**
     *Specifies the constraints to be applied to the value of each key in the
     * field. Message values will still have their validations evaluated unless
     *skip is specified here.
     * ```proto
     * message MyMap {
     *   // The values in the field `value` must follow the specified constraints.
     *   map<string, string> value = 1 [(buf.validate.field).map.values = {
     *     string: {
     *       min_len: 5
     *       max_len: 20
     *     }
     *   }];
     * }
     * ```
     *
     * Generated from protobuf field <code>optional .buf.validate.FieldConstraints values = 5 [json_name = "values"];</code>
     * @return \Buf\Validate\FieldConstraints|null
     */
    public function getValues()
    {
        return $this->values;
    }

    public function hasValues()
    {
        return isset($this->values);
    }

    public function clearValues()
    {
        unset($this->values);
    }

    /**
     *Specifies the constraints to be applied to the value of each key in the
     * field. Message values will still have their validations evaluated unless
     *skip is specified here.
     * ```proto
     * message MyMap {
     *   // The values in the field `value` must follow the specified constraints.
     *   map<string, string> value = 1 [(buf.validate.field).map.values = {
     *     string: {
     *       min_len: 5
     *       max_len: 20
     *     }
     *   }];
     * }
     * ```
     *
     * Generated from protobuf field <code>optional .buf.validate.FieldConstraints values = 5 [json_name = "values"];</code>
     * @param \Buf\Validate\FieldConstraints $var
     * @return $this
     */
    public function setValues($var)
    {
        GPBUtil::checkMessage($var, \Buf\Validate\FieldConstraints::class);
        $this->values = $var;

        return $this;
    }

}

