<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: buf/validate/validate.proto

namespace Buf\Validate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BytesRules describe the constraints applied to `bytes` values. These rules
 * may also be applied to the `google.protobuf.BytesValue` Well-Known-Type.
 *
 * Generated from protobuf message <code>buf.validate.BytesRules</code>
 */
class BytesRules extends \Google\Protobuf\Internal\Message
{
    /**
     *`const` requires the field value to exactly match the specified bytes
     *value. If the field value doesn't match, an error message is generated.
     *```proto
     *message MyBytes {
     *  // value must be "\x01\x02\x03\x04"
     *   bytes value = 1 [(buf.validate.field).bytes.const = "\x01\x02\x03\x04"];
     *}
     *```
     *
     * Generated from protobuf field <code>optional bytes const = 1 [json_name = "const", (.buf.validate.priv.field) = {</code>
     */
    protected $const = null;
    /**
     *`len` requires the field value to have the specified length in bytes.
     *If the field value doesn't match, an error message is generated.
     *```proto
     *message MyBytes {
     *      // value length must be 4 bytes.
     *      optional bytes value = 1 [(buf.validate.field).bytes.len = 4];
     *}
     *```
     *
     * Generated from protobuf field <code>optional uint64 len = 13 [json_name = "len", (.buf.validate.priv.field) = {</code>
     */
    protected $len = null;
    /**
     *`min_len` requires the field value to have at least the specified minimum
     *length in bytes.
     *If the field value doesn't meet the requirement, an error message is generated.
     *```proto
     *message MyBytes {
     * // value length must be at least 2 bytes.
     * optional bytes value = 1 [(buf.validate.field).bytes.min_len = 2];
     *}
     *```
     *
     * Generated from protobuf field <code>optional uint64 min_len = 2 [json_name = "minLen", (.buf.validate.priv.field) = {</code>
     */
    protected $min_len = null;
    /**
     *`max_len` requires the field value to have at most the specified maximum
     *length in bytes.
     *If the field value exceeds the requirement, an error message is generated.
     *```proto
     *message MyBytes {
     * // value must be at most 6 bytes.
     * optional bytes value = 1 [(buf.validate.field).bytes.max_len = 6];
     *}
     *```
     *
     * Generated from protobuf field <code>optional uint64 max_len = 3 [json_name = "maxLen", (.buf.validate.priv.field) = {</code>
     */
    protected $max_len = null;
    /**
     *`pattern` requires the field value to match the specified regular
     *expression ([RE2 syntax](https://github.com/google/re2/wiki/Syntax)).
     *The value of the field must be valid UTF-8 or validation will fail with a
     *runtime error.
     *If the field value doesn't match the pattern, an error message is generated.
     *```proto
     *message MyBytes {
     * // value must match regex pattern "^[a-zA-Z0-9]+$".
     * optional bytes value = 1 [(buf.validate.field).bytes.pattern = "^[a-zA-Z0-9]+$"];
     *}
     *```
     *
     * Generated from protobuf field <code>optional string pattern = 4 [json_name = "pattern", (.buf.validate.priv.field) = {</code>
     */
    protected $pattern = null;
    /**
     *`prefix` requires the field value to have the specified bytes at the
     *beginning of the string.
     *If the field value doesn't meet the requirement, an error message is generated.
     *```proto
     *message MyBytes {
     * // value does not have prefix \x01\x02
     *optional bytes value = 1 [(buf.validate.field).bytes.prefix = "\x01\x02"];
     *}
     *```
     *
     * Generated from protobuf field <code>optional bytes prefix = 5 [json_name = "prefix", (.buf.validate.priv.field) = {</code>
     */
    protected $prefix = null;
    /**
     *`suffix` requires the field value to have the specified bytes at the end
     *of the string.
     *If the field value doesn't meet the requirement, an error message is generated.
     *```proto
     *message MyBytes {
     * // value does not have suffix \x03\x04
     * optional bytes value = 1 [(buf.validate.field).bytes.suffix = "\x03\x04"];
     *}
     *```
     *
     * Generated from protobuf field <code>optional bytes suffix = 6 [json_name = "suffix", (.buf.validate.priv.field) = {</code>
     */
    protected $suffix = null;
    /**
     *`contains` requires the field value to have the specified bytes anywhere in
     *the string.
     *If the field value doesn't meet the requirement, an error message is generated.
     *```protobuf
     *message MyBytes {
     * // value does not contain \x02\x03
     * optional bytes value = 1 [(buf.validate.field).bytes.contains = "\x02\x03"];
     *}
     *```
     *
     * Generated from protobuf field <code>optional bytes contains = 7 [json_name = "contains", (.buf.validate.priv.field) = {</code>
     */
    protected $contains = null;
    /**
     *`in` requires the field value to be equal to one of the specified
     *values. If the field value doesn't match any of the specified values, an
     *error message is generated.
     *```protobuf
     *message MyBytes {
     * // value must in ["\x01\x02", "\x02\x03", "\x03\x04"]
     * optional bytes value = 1 [(buf.validate.field).bytes.in = {"\x01\x02", "\x02\x03", "\x03\x04"}];
     *}
     *```
     *
     * Generated from protobuf field <code>repeated bytes in = 8 [json_name = "in", (.buf.validate.priv.field) = {</code>
     */
    private $in;
    /**
     *`not_in` requires the field value to be not equal to any of the specified
     *values.
     *If the field value matches any of the specified values, an error message is
     *generated.
     *```proto
     *message MyBytes {
     * // value must not in ["\x01\x02", "\x02\x03", "\x03\x04"]
     * optional bytes value = 1 [(buf.validate.field).bytes.not_in = {"\x01\x02", "\x02\x03", "\x03\x04"}];
     *}
     *```
     *
     * Generated from protobuf field <code>repeated bytes not_in = 9 [json_name = "notIn", (.buf.validate.priv.field) = {</code>
     */
    private $not_in;
    protected $well_known;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $const
     *          `const` requires the field value to exactly match the specified bytes
     *          value. If the field value doesn't match, an error message is generated.
     *          ```proto
     *          message MyBytes {
     *            // value must be "\x01\x02\x03\x04"
     *             bytes value = 1 [(buf.validate.field).bytes.const = "\x01\x02\x03\x04"];
     *          }
     *          ```
     *     @type int|string $len
     *          `len` requires the field value to have the specified length in bytes.
     *          If the field value doesn't match, an error message is generated.
     *          ```proto
     *          message MyBytes {
     *                // value length must be 4 bytes.
     *                optional bytes value = 1 [(buf.validate.field).bytes.len = 4];
     *          }
     *          ```
     *     @type int|string $min_len
     *          `min_len` requires the field value to have at least the specified minimum
     *          length in bytes.
     *          If the field value doesn't meet the requirement, an error message is generated.
     *          ```proto
     *          message MyBytes {
     *           // value length must be at least 2 bytes.
     *           optional bytes value = 1 [(buf.validate.field).bytes.min_len = 2];
     *          }
     *          ```
     *     @type int|string $max_len
     *          `max_len` requires the field value to have at most the specified maximum
     *          length in bytes.
     *          If the field value exceeds the requirement, an error message is generated.
     *          ```proto
     *          message MyBytes {
     *           // value must be at most 6 bytes.
     *           optional bytes value = 1 [(buf.validate.field).bytes.max_len = 6];
     *          }
     *          ```
     *     @type string $pattern
     *          `pattern` requires the field value to match the specified regular
     *          expression ([RE2 syntax](https://github.com/google/re2/wiki/Syntax)).
     *          The value of the field must be valid UTF-8 or validation will fail with a
     *          runtime error.
     *          If the field value doesn't match the pattern, an error message is generated.
     *          ```proto
     *          message MyBytes {
     *           // value must match regex pattern "^[a-zA-Z0-9]+$".
     *           optional bytes value = 1 [(buf.validate.field).bytes.pattern = "^[a-zA-Z0-9]+$"];
     *          }
     *          ```
     *     @type string $prefix
     *          `prefix` requires the field value to have the specified bytes at the
     *          beginning of the string.
     *          If the field value doesn't meet the requirement, an error message is generated.
     *          ```proto
     *          message MyBytes {
     *          // value does not have prefix \x01\x02
     *          optional bytes value = 1 [(buf.validate.field).bytes.prefix = "\x01\x02"];
     *          }
     *          ```
     *     @type string $suffix
     *          `suffix` requires the field value to have the specified bytes at the end
     *          of the string.
     *          If the field value doesn't meet the requirement, an error message is generated.
     *          ```proto
     *          message MyBytes {
     *           // value does not have suffix \x03\x04
     *           optional bytes value = 1 [(buf.validate.field).bytes.suffix = "\x03\x04"];
     *          }
     *          ```
     *     @type string $contains
     *          `contains` requires the field value to have the specified bytes anywhere in
     *          the string.
     *          If the field value doesn't meet the requirement, an error message is generated.
     *          ```protobuf
     *          message MyBytes {
     *           // value does not contain \x02\x03
     *           optional bytes value = 1 [(buf.validate.field).bytes.contains = "\x02\x03"];
     *          }
     *          ```
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $in
     *          `in` requires the field value to be equal to one of the specified
     *          values. If the field value doesn't match any of the specified values, an
     *          error message is generated.
     *          ```protobuf
     *          message MyBytes {
     *           // value must in ["\x01\x02", "\x02\x03", "\x03\x04"]
     *           optional bytes value = 1 [(buf.validate.field).bytes.in = {"\x01\x02", "\x02\x03", "\x03\x04"}];
     *          }
     *          ```
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $not_in
     *          `not_in` requires the field value to be not equal to any of the specified
     *          values.
     *          If the field value matches any of the specified values, an error message is
     *          generated.
     *          ```proto
     *          message MyBytes {
     *           // value must not in ["\x01\x02", "\x02\x03", "\x03\x04"]
     *           optional bytes value = 1 [(buf.validate.field).bytes.not_in = {"\x01\x02", "\x02\x03", "\x03\x04"}];
     *          }
     *          ```
     *     @type bool $ip
     *          `ip` ensures that the field `value` is a valid IP address (v4 or v6) in byte format.
     *          If the field value doesn't meet this constraint, an error message is generated.
     *          ```proto
     *          message MyBytes {
     *           // value must be a valid IP address
     *           optional bytes value = 1 [(buf.validate.field).bytes.ip = true];
     *          }
     *          ```
     *     @type bool $ipv4
     *          `ipv4` ensures that the field `value` is a valid IPv4 address in byte format.
     *          If the field value doesn't meet this constraint, an error message is generated.
     *          ```proto
     *          message MyBytes {
     *           // value must be a valid IPv4 address
     *           optional bytes value = 1 [(buf.validate.field).bytes.ipv4 = true];
     *          }
     *          ```
     *     @type bool $ipv6
     *          `ipv6` ensures that the field `value` is a valid IPv6 address in byte format.
     *          If the field value doesn't meet this constraint, an error message is generated.
     *          ```proto
     *          message MyBytes {
     *           // value must be a valid IPv6 address
     *           optional bytes value = 1 [(buf.validate.field).bytes.ipv6 = true];
     *          }
     *          ```
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Buf\Validate\Validate::initOnce();
        parent::__construct($data);
    }

    /**
     *`const` requires the field value to exactly match the specified bytes
     *value. If the field value doesn't match, an error message is generated.
     *```proto
     *message MyBytes {
     *  // value must be "\x01\x02\x03\x04"
     *   bytes value = 1 [(buf.validate.field).bytes.const = "\x01\x02\x03\x04"];
     *}
     *```
     *
     * Generated from protobuf field <code>optional bytes const = 1 [json_name = "const", (.buf.validate.priv.field) = {</code>
     * @return string
     */
    public function getConst()
    {
        return isset($this->const) ? $this->const : '';
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
     *`const` requires the field value to exactly match the specified bytes
     *value. If the field value doesn't match, an error message is generated.
     *```proto
     *message MyBytes {
     *  // value must be "\x01\x02\x03\x04"
     *   bytes value = 1 [(buf.validate.field).bytes.const = "\x01\x02\x03\x04"];
     *}
     *```
     *
     * Generated from protobuf field <code>optional bytes const = 1 [json_name = "const", (.buf.validate.priv.field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setConst($var)
    {
        GPBUtil::checkString($var, False);
        $this->const = $var;

        return $this;
    }

    /**
     *`len` requires the field value to have the specified length in bytes.
     *If the field value doesn't match, an error message is generated.
     *```proto
     *message MyBytes {
     *      // value length must be 4 bytes.
     *      optional bytes value = 1 [(buf.validate.field).bytes.len = 4];
     *}
     *```
     *
     * Generated from protobuf field <code>optional uint64 len = 13 [json_name = "len", (.buf.validate.priv.field) = {</code>
     * @return int|string
     */
    public function getLen()
    {
        return isset($this->len) ? $this->len : 0;
    }

    public function hasLen()
    {
        return isset($this->len);
    }

    public function clearLen()
    {
        unset($this->len);
    }

    /**
     *`len` requires the field value to have the specified length in bytes.
     *If the field value doesn't match, an error message is generated.
     *```proto
     *message MyBytes {
     *      // value length must be 4 bytes.
     *      optional bytes value = 1 [(buf.validate.field).bytes.len = 4];
     *}
     *```
     *
     * Generated from protobuf field <code>optional uint64 len = 13 [json_name = "len", (.buf.validate.priv.field) = {</code>
     * @param int|string $var
     * @return $this
     */
    public function setLen($var)
    {
        GPBUtil::checkUint64($var);
        $this->len = $var;

        return $this;
    }

    /**
     *`min_len` requires the field value to have at least the specified minimum
     *length in bytes.
     *If the field value doesn't meet the requirement, an error message is generated.
     *```proto
     *message MyBytes {
     * // value length must be at least 2 bytes.
     * optional bytes value = 1 [(buf.validate.field).bytes.min_len = 2];
     *}
     *```
     *
     * Generated from protobuf field <code>optional uint64 min_len = 2 [json_name = "minLen", (.buf.validate.priv.field) = {</code>
     * @return int|string
     */
    public function getMinLen()
    {
        return isset($this->min_len) ? $this->min_len : 0;
    }

    public function hasMinLen()
    {
        return isset($this->min_len);
    }

    public function clearMinLen()
    {
        unset($this->min_len);
    }

    /**
     *`min_len` requires the field value to have at least the specified minimum
     *length in bytes.
     *If the field value doesn't meet the requirement, an error message is generated.
     *```proto
     *message MyBytes {
     * // value length must be at least 2 bytes.
     * optional bytes value = 1 [(buf.validate.field).bytes.min_len = 2];
     *}
     *```
     *
     * Generated from protobuf field <code>optional uint64 min_len = 2 [json_name = "minLen", (.buf.validate.priv.field) = {</code>
     * @param int|string $var
     * @return $this
     */
    public function setMinLen($var)
    {
        GPBUtil::checkUint64($var);
        $this->min_len = $var;

        return $this;
    }

    /**
     *`max_len` requires the field value to have at most the specified maximum
     *length in bytes.
     *If the field value exceeds the requirement, an error message is generated.
     *```proto
     *message MyBytes {
     * // value must be at most 6 bytes.
     * optional bytes value = 1 [(buf.validate.field).bytes.max_len = 6];
     *}
     *```
     *
     * Generated from protobuf field <code>optional uint64 max_len = 3 [json_name = "maxLen", (.buf.validate.priv.field) = {</code>
     * @return int|string
     */
    public function getMaxLen()
    {
        return isset($this->max_len) ? $this->max_len : 0;
    }

    public function hasMaxLen()
    {
        return isset($this->max_len);
    }

    public function clearMaxLen()
    {
        unset($this->max_len);
    }

    /**
     *`max_len` requires the field value to have at most the specified maximum
     *length in bytes.
     *If the field value exceeds the requirement, an error message is generated.
     *```proto
     *message MyBytes {
     * // value must be at most 6 bytes.
     * optional bytes value = 1 [(buf.validate.field).bytes.max_len = 6];
     *}
     *```
     *
     * Generated from protobuf field <code>optional uint64 max_len = 3 [json_name = "maxLen", (.buf.validate.priv.field) = {</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxLen($var)
    {
        GPBUtil::checkUint64($var);
        $this->max_len = $var;

        return $this;
    }

    /**
     *`pattern` requires the field value to match the specified regular
     *expression ([RE2 syntax](https://github.com/google/re2/wiki/Syntax)).
     *The value of the field must be valid UTF-8 or validation will fail with a
     *runtime error.
     *If the field value doesn't match the pattern, an error message is generated.
     *```proto
     *message MyBytes {
     * // value must match regex pattern "^[a-zA-Z0-9]+$".
     * optional bytes value = 1 [(buf.validate.field).bytes.pattern = "^[a-zA-Z0-9]+$"];
     *}
     *```
     *
     * Generated from protobuf field <code>optional string pattern = 4 [json_name = "pattern", (.buf.validate.priv.field) = {</code>
     * @return string
     */
    public function getPattern()
    {
        return isset($this->pattern) ? $this->pattern : '';
    }

    public function hasPattern()
    {
        return isset($this->pattern);
    }

    public function clearPattern()
    {
        unset($this->pattern);
    }

    /**
     *`pattern` requires the field value to match the specified regular
     *expression ([RE2 syntax](https://github.com/google/re2/wiki/Syntax)).
     *The value of the field must be valid UTF-8 or validation will fail with a
     *runtime error.
     *If the field value doesn't match the pattern, an error message is generated.
     *```proto
     *message MyBytes {
     * // value must match regex pattern "^[a-zA-Z0-9]+$".
     * optional bytes value = 1 [(buf.validate.field).bytes.pattern = "^[a-zA-Z0-9]+$"];
     *}
     *```
     *
     * Generated from protobuf field <code>optional string pattern = 4 [json_name = "pattern", (.buf.validate.priv.field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPattern($var)
    {
        GPBUtil::checkString($var, True);
        $this->pattern = $var;

        return $this;
    }

    /**
     *`prefix` requires the field value to have the specified bytes at the
     *beginning of the string.
     *If the field value doesn't meet the requirement, an error message is generated.
     *```proto
     *message MyBytes {
     * // value does not have prefix \x01\x02
     *optional bytes value = 1 [(buf.validate.field).bytes.prefix = "\x01\x02"];
     *}
     *```
     *
     * Generated from protobuf field <code>optional bytes prefix = 5 [json_name = "prefix", (.buf.validate.priv.field) = {</code>
     * @return string
     */
    public function getPrefix()
    {
        return isset($this->prefix) ? $this->prefix : '';
    }

    public function hasPrefix()
    {
        return isset($this->prefix);
    }

    public function clearPrefix()
    {
        unset($this->prefix);
    }

    /**
     *`prefix` requires the field value to have the specified bytes at the
     *beginning of the string.
     *If the field value doesn't meet the requirement, an error message is generated.
     *```proto
     *message MyBytes {
     * // value does not have prefix \x01\x02
     *optional bytes value = 1 [(buf.validate.field).bytes.prefix = "\x01\x02"];
     *}
     *```
     *
     * Generated from protobuf field <code>optional bytes prefix = 5 [json_name = "prefix", (.buf.validate.priv.field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPrefix($var)
    {
        GPBUtil::checkString($var, False);
        $this->prefix = $var;

        return $this;
    }

    /**
     *`suffix` requires the field value to have the specified bytes at the end
     *of the string.
     *If the field value doesn't meet the requirement, an error message is generated.
     *```proto
     *message MyBytes {
     * // value does not have suffix \x03\x04
     * optional bytes value = 1 [(buf.validate.field).bytes.suffix = "\x03\x04"];
     *}
     *```
     *
     * Generated from protobuf field <code>optional bytes suffix = 6 [json_name = "suffix", (.buf.validate.priv.field) = {</code>
     * @return string
     */
    public function getSuffix()
    {
        return isset($this->suffix) ? $this->suffix : '';
    }

    public function hasSuffix()
    {
        return isset($this->suffix);
    }

    public function clearSuffix()
    {
        unset($this->suffix);
    }

    /**
     *`suffix` requires the field value to have the specified bytes at the end
     *of the string.
     *If the field value doesn't meet the requirement, an error message is generated.
     *```proto
     *message MyBytes {
     * // value does not have suffix \x03\x04
     * optional bytes value = 1 [(buf.validate.field).bytes.suffix = "\x03\x04"];
     *}
     *```
     *
     * Generated from protobuf field <code>optional bytes suffix = 6 [json_name = "suffix", (.buf.validate.priv.field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSuffix($var)
    {
        GPBUtil::checkString($var, False);
        $this->suffix = $var;

        return $this;
    }

    /**
     *`contains` requires the field value to have the specified bytes anywhere in
     *the string.
     *If the field value doesn't meet the requirement, an error message is generated.
     *```protobuf
     *message MyBytes {
     * // value does not contain \x02\x03
     * optional bytes value = 1 [(buf.validate.field).bytes.contains = "\x02\x03"];
     *}
     *```
     *
     * Generated from protobuf field <code>optional bytes contains = 7 [json_name = "contains", (.buf.validate.priv.field) = {</code>
     * @return string
     */
    public function getContains()
    {
        return isset($this->contains) ? $this->contains : '';
    }

    public function hasContains()
    {
        return isset($this->contains);
    }

    public function clearContains()
    {
        unset($this->contains);
    }

    /**
     *`contains` requires the field value to have the specified bytes anywhere in
     *the string.
     *If the field value doesn't meet the requirement, an error message is generated.
     *```protobuf
     *message MyBytes {
     * // value does not contain \x02\x03
     * optional bytes value = 1 [(buf.validate.field).bytes.contains = "\x02\x03"];
     *}
     *```
     *
     * Generated from protobuf field <code>optional bytes contains = 7 [json_name = "contains", (.buf.validate.priv.field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setContains($var)
    {
        GPBUtil::checkString($var, False);
        $this->contains = $var;

        return $this;
    }

    /**
     *`in` requires the field value to be equal to one of the specified
     *values. If the field value doesn't match any of the specified values, an
     *error message is generated.
     *```protobuf
     *message MyBytes {
     * // value must in ["\x01\x02", "\x02\x03", "\x03\x04"]
     * optional bytes value = 1 [(buf.validate.field).bytes.in = {"\x01\x02", "\x02\x03", "\x03\x04"}];
     *}
     *```
     *
     * Generated from protobuf field <code>repeated bytes in = 8 [json_name = "in", (.buf.validate.priv.field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIn()
    {
        return $this->in;
    }

    /**
     *`in` requires the field value to be equal to one of the specified
     *values. If the field value doesn't match any of the specified values, an
     *error message is generated.
     *```protobuf
     *message MyBytes {
     * // value must in ["\x01\x02", "\x02\x03", "\x03\x04"]
     * optional bytes value = 1 [(buf.validate.field).bytes.in = {"\x01\x02", "\x02\x03", "\x03\x04"}];
     *}
     *```
     *
     * Generated from protobuf field <code>repeated bytes in = 8 [json_name = "in", (.buf.validate.priv.field) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIn($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->in = $arr;

        return $this;
    }

    /**
     *`not_in` requires the field value to be not equal to any of the specified
     *values.
     *If the field value matches any of the specified values, an error message is
     *generated.
     *```proto
     *message MyBytes {
     * // value must not in ["\x01\x02", "\x02\x03", "\x03\x04"]
     * optional bytes value = 1 [(buf.validate.field).bytes.not_in = {"\x01\x02", "\x02\x03", "\x03\x04"}];
     *}
     *```
     *
     * Generated from protobuf field <code>repeated bytes not_in = 9 [json_name = "notIn", (.buf.validate.priv.field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNotIn()
    {
        return $this->not_in;
    }

    /**
     *`not_in` requires the field value to be not equal to any of the specified
     *values.
     *If the field value matches any of the specified values, an error message is
     *generated.
     *```proto
     *message MyBytes {
     * // value must not in ["\x01\x02", "\x02\x03", "\x03\x04"]
     * optional bytes value = 1 [(buf.validate.field).bytes.not_in = {"\x01\x02", "\x02\x03", "\x03\x04"}];
     *}
     *```
     *
     * Generated from protobuf field <code>repeated bytes not_in = 9 [json_name = "notIn", (.buf.validate.priv.field) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotIn($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->not_in = $arr;

        return $this;
    }

    /**
     *`ip` ensures that the field `value` is a valid IP address (v4 or v6) in byte format.
     *If the field value doesn't meet this constraint, an error message is generated.
     *```proto
     *message MyBytes {
     * // value must be a valid IP address
     * optional bytes value = 1 [(buf.validate.field).bytes.ip = true];
     *}
     *```
     *
     * Generated from protobuf field <code>bool ip = 10 [json_name = "ip", (.buf.validate.priv.field) = {</code>
     * @return bool
     */
    public function getIp()
    {
        return $this->readOneof(10);
    }

    public function hasIp()
    {
        return $this->hasOneof(10);
    }

    /**
     *`ip` ensures that the field `value` is a valid IP address (v4 or v6) in byte format.
     *If the field value doesn't meet this constraint, an error message is generated.
     *```proto
     *message MyBytes {
     * // value must be a valid IP address
     * optional bytes value = 1 [(buf.validate.field).bytes.ip = true];
     *}
     *```
     *
     * Generated from protobuf field <code>bool ip = 10 [json_name = "ip", (.buf.validate.priv.field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setIp($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     *`ipv4` ensures that the field `value` is a valid IPv4 address in byte format.
     *If the field value doesn't meet this constraint, an error message is generated.
     *```proto
     *message MyBytes {
     * // value must be a valid IPv4 address
     * optional bytes value = 1 [(buf.validate.field).bytes.ipv4 = true];
     *}
     *```
     *
     * Generated from protobuf field <code>bool ipv4 = 11 [json_name = "ipv4", (.buf.validate.priv.field) = {</code>
     * @return bool
     */
    public function getIpv4()
    {
        return $this->readOneof(11);
    }

    public function hasIpv4()
    {
        return $this->hasOneof(11);
    }

    /**
     *`ipv4` ensures that the field `value` is a valid IPv4 address in byte format.
     *If the field value doesn't meet this constraint, an error message is generated.
     *```proto
     *message MyBytes {
     * // value must be a valid IPv4 address
     * optional bytes value = 1 [(buf.validate.field).bytes.ipv4 = true];
     *}
     *```
     *
     * Generated from protobuf field <code>bool ipv4 = 11 [json_name = "ipv4", (.buf.validate.priv.field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setIpv4($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     *`ipv6` ensures that the field `value` is a valid IPv6 address in byte format.
     *If the field value doesn't meet this constraint, an error message is generated.
     *```proto
     *message MyBytes {
     * // value must be a valid IPv6 address
     * optional bytes value = 1 [(buf.validate.field).bytes.ipv6 = true];
     *}
     *```
     *
     * Generated from protobuf field <code>bool ipv6 = 12 [json_name = "ipv6", (.buf.validate.priv.field) = {</code>
     * @return bool
     */
    public function getIpv6()
    {
        return $this->readOneof(12);
    }

    public function hasIpv6()
    {
        return $this->hasOneof(12);
    }

    /**
     *`ipv6` ensures that the field `value` is a valid IPv6 address in byte format.
     *If the field value doesn't meet this constraint, an error message is generated.
     *```proto
     *message MyBytes {
     * // value must be a valid IPv6 address
     * optional bytes value = 1 [(buf.validate.field).bytes.ipv6 = true];
     *}
     *```
     *
     * Generated from protobuf field <code>bool ipv6 = 12 [json_name = "ipv6", (.buf.validate.priv.field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setIpv6($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getWellKnown()
    {
        return $this->whichOneof("well_known");
    }

}
