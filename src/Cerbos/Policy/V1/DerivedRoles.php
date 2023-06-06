<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cerbos/policy/v1/policy.proto

namespace Cerbos\Policy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.policy.v1.DerivedRoles</code>
 */
class DerivedRoles extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1 [json_name = "name", (.validate.rules) = {</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>repeated .cerbos.policy.v1.RoleDef definitions = 2 [json_name = "definitions", (.validate.rules) = {</code>
     */
    private $definitions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type array<\Cerbos\Policy\V1\RoleDef>|\Google\Protobuf\Internal\RepeatedField $definitions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Policy\V1\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1 [json_name = "name", (.validate.rules) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1 [json_name = "name", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.policy.v1.RoleDef definitions = 2 [json_name = "definitions", (.validate.rules) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDefinitions()
    {
        return $this->definitions;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.policy.v1.RoleDef definitions = 2 [json_name = "definitions", (.validate.rules) = {</code>
     * @param array<\Cerbos\Policy\V1\RoleDef>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDefinitions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Policy\V1\RoleDef::class);
        $this->definitions = $arr;

        return $this;
    }

}

