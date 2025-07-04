<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: google/api/expr/v1alpha1/checked.proto

namespace Google\Api\Expr\V1alpha1\Type;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * Map type with parameterized key and value types, e.g. `map<string, int>`.
 *
 * Generated from protobuf message <code>google.api.expr.v1alpha1.Type.MapType</code>
 */
class MapType extends \Google\Protobuf\Internal\Message
{
    /**
     * The type of the key.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type key_type = 1 [json_name = "keyType"];</code>
     */
    protected $key_type = null;
    /**
     * The type of the value.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type value_type = 2 [json_name = "valueType"];</code>
     */
    protected $value_type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Api\Expr\V1alpha1\Type $key_type
     *           The type of the key.
     *     @type \Google\Api\Expr\V1alpha1\Type $value_type
     *           The type of the value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Expr\V1Alpha1\Checked::initOnce();
        parent::__construct($data);
    }

    /**
     * The type of the key.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type key_type = 1 [json_name = "keyType"];</code>
     * @return \Google\Api\Expr\V1alpha1\Type|null
     */
    public function getKeyType()
    {
        return $this->key_type;
    }

    public function hasKeyType()
    {
        return isset($this->key_type);
    }

    public function clearKeyType()
    {
        unset($this->key_type);
    }

    /**
     * The type of the key.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type key_type = 1 [json_name = "keyType"];</code>
     * @param \Google\Api\Expr\V1alpha1\Type $var
     * @return $this
     */
    public function setKeyType($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Expr\V1alpha1\Type::class);
        $this->key_type = $var;

        return $this;
    }

    /**
     * The type of the value.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type value_type = 2 [json_name = "valueType"];</code>
     * @return \Google\Api\Expr\V1alpha1\Type|null
     */
    public function getValueType()
    {
        return $this->value_type;
    }

    public function hasValueType()
    {
        return isset($this->value_type);
    }

    public function clearValueType()
    {
        unset($this->value_type);
    }

    /**
     * The type of the value.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type value_type = 2 [json_name = "valueType"];</code>
     * @param \Google\Api\Expr\V1alpha1\Type $var
     * @return $this
     */
    public function setValueType($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Expr\V1alpha1\Type::class);
        $this->value_type = $var;

        return $this;
    }

}

