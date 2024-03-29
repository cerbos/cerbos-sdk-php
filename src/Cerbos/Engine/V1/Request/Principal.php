<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cerbos/engine/v1/engine.proto

namespace Cerbos\Engine\V1\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.engine.v1.Request.Principal</code>
 */
class Principal extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id"];</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>repeated string roles = 2 [json_name = "roles"];</code>
     */
    private $roles;
    /**
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> attr = 3 [json_name = "attr"];</code>
     */
    private $attr;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $roles
     *     @type array|\Google\Protobuf\Internal\MapField $attr
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Engine\V1\Engine::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id"];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id"];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string roles = 2 [json_name = "roles"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Generated from protobuf field <code>repeated string roles = 2 [json_name = "roles"];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRoles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->roles = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> attr = 3 [json_name = "attr"];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAttr()
    {
        return $this->attr;
    }

    /**
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> attr = 3 [json_name = "attr"];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAttr($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Value::class);
        $this->attr = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Principal::class, \Cerbos\Engine\V1\Request_Principal::class);

