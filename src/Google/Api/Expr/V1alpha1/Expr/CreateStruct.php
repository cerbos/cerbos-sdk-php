<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: google/api/expr/v1alpha1/syntax.proto

namespace Google\Api\Expr\V1alpha1\Expr;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * A map or message creation expression.
 * Maps are constructed as `{'key_name': 'value'}`. Message construction is
 * similar, but prefixed with a type name and composed of field ids:
 * `types.MyType{field_id: 'value'}`.
 *
 * Generated from protobuf message <code>google.api.expr.v1alpha1.Expr.CreateStruct</code>
 */
class CreateStruct extends \Google\Protobuf\Internal\Message
{
    /**
     * The type name of the message to be created, empty when creating map
     * literals.
     *
     * Generated from protobuf field <code>string message_name = 1 [json_name = "messageName"];</code>
     */
    protected $message_name = '';
    /**
     * The entries in the creation expression.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1alpha1.Expr.CreateStruct.Entry entries = 2 [json_name = "entries"];</code>
     */
    private $entries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $message_name
     *           The type name of the message to be created, empty when creating map
     *           literals.
     *     @type \Google\Api\Expr\V1alpha1\Expr\CreateStruct\Entry[] $entries
     *           The entries in the creation expression.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Expr\V1Alpha1\Syntax::initOnce();
        parent::__construct($data);
    }

    /**
     * The type name of the message to be created, empty when creating map
     * literals.
     *
     * Generated from protobuf field <code>string message_name = 1 [json_name = "messageName"];</code>
     * @return string
     */
    public function getMessageName()
    {
        return $this->message_name;
    }

    /**
     * The type name of the message to be created, empty when creating map
     * literals.
     *
     * Generated from protobuf field <code>string message_name = 1 [json_name = "messageName"];</code>
     * @param string $var
     * @return $this
     */
    public function setMessageName($var)
    {
        GPBUtil::checkString($var, True);
        $this->message_name = $var;

        return $this;
    }

    /**
     * The entries in the creation expression.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1alpha1.Expr.CreateStruct.Entry entries = 2 [json_name = "entries"];</code>
     * @return RepeatedField<\Google\Api\Expr\V1alpha1\Expr\CreateStruct\Entry>
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * The entries in the creation expression.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1alpha1.Expr.CreateStruct.Entry entries = 2 [json_name = "entries"];</code>
     * @param \Google\Api\Expr\V1alpha1\Expr\CreateStruct\Entry[] $var
     * @return $this
     */
    public function setEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\Expr\V1alpha1\Expr\CreateStruct\Entry::class);
        $this->entries = $arr;

        return $this;
    }

}

