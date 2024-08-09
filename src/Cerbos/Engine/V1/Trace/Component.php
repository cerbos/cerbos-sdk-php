<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/engine/v1/engine.proto

namespace Cerbos\Engine\V1\Trace;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.engine.v1.Trace.Component</code>
 */
class Component extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.Trace.Component.Kind kind = 1 [json_name = "kind"];</code>
     */
    protected $kind = 0;
    protected $details;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $kind
     *     @type string $action
     *     @type string $derived_role
     *     @type string $expr
     *     @type int $index
     *     @type string $policy
     *     @type string $resource
     *     @type string $rule
     *     @type string $scope
     *     @type \Cerbos\Engine\V1\Trace\Component\Variable $variable
     *     @type string $output
     *     @type string $role_policy_scope
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Engine\V1\Engine::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.Trace.Component.Kind kind = 1 [json_name = "kind"];</code>
     * @return int
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.Trace.Component.Kind kind = 1 [json_name = "kind"];</code>
     * @param int $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkEnum($var, \Cerbos\Engine\V1\Trace\Component\Kind::class);
        $this->kind = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string action = 2 [json_name = "action"];</code>
     * @return string
     */
    public function getAction()
    {
        return $this->readOneof(2);
    }

    public function hasAction()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>string action = 2 [json_name = "action"];</code>
     * @param string $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string derived_role = 3 [json_name = "derivedRole"];</code>
     * @return string
     */
    public function getDerivedRole()
    {
        return $this->readOneof(3);
    }

    public function hasDerivedRole()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>string derived_role = 3 [json_name = "derivedRole"];</code>
     * @param string $var
     * @return $this
     */
    public function setDerivedRole($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string expr = 4 [json_name = "expr"];</code>
     * @return string
     */
    public function getExpr()
    {
        return $this->readOneof(4);
    }

    public function hasExpr()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>string expr = 4 [json_name = "expr"];</code>
     * @param string $var
     * @return $this
     */
    public function setExpr($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 index = 5 [json_name = "index"];</code>
     * @return int
     */
    public function getIndex()
    {
        return $this->readOneof(5);
    }

    public function hasIndex()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>uint32 index = 5 [json_name = "index"];</code>
     * @param int $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string policy = 6 [json_name = "policy"];</code>
     * @return string
     */
    public function getPolicy()
    {
        return $this->readOneof(6);
    }

    public function hasPolicy()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>string policy = 6 [json_name = "policy"];</code>
     * @param string $var
     * @return $this
     */
    public function setPolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string resource = 7 [json_name = "resource"];</code>
     * @return string
     */
    public function getResource()
    {
        return $this->readOneof(7);
    }

    public function hasResource()
    {
        return $this->hasOneof(7);
    }

    /**
     * Generated from protobuf field <code>string resource = 7 [json_name = "resource"];</code>
     * @param string $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string rule = 8 [json_name = "rule"];</code>
     * @return string
     */
    public function getRule()
    {
        return $this->readOneof(8);
    }

    public function hasRule()
    {
        return $this->hasOneof(8);
    }

    /**
     * Generated from protobuf field <code>string rule = 8 [json_name = "rule"];</code>
     * @param string $var
     * @return $this
     */
    public function setRule($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string scope = 9 [json_name = "scope"];</code>
     * @return string
     */
    public function getScope()
    {
        return $this->readOneof(9);
    }

    public function hasScope()
    {
        return $this->hasOneof(9);
    }

    /**
     * Generated from protobuf field <code>string scope = 9 [json_name = "scope"];</code>
     * @param string $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.Trace.Component.Variable variable = 10 [json_name = "variable"];</code>
     * @return \Cerbos\Engine\V1\Trace\Component\Variable|null
     */
    public function getVariable()
    {
        return $this->readOneof(10);
    }

    public function hasVariable()
    {
        return $this->hasOneof(10);
    }

    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.Trace.Component.Variable variable = 10 [json_name = "variable"];</code>
     * @param \Cerbos\Engine\V1\Trace\Component\Variable $var
     * @return $this
     */
    public function setVariable($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Engine\V1\Trace\Component\Variable::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string output = 11 [json_name = "output"];</code>
     * @return string
     */
    public function getOutput()
    {
        return $this->readOneof(11);
    }

    public function hasOutput()
    {
        return $this->hasOneof(11);
    }

    /**
     * Generated from protobuf field <code>string output = 11 [json_name = "output"];</code>
     * @param string $var
     * @return $this
     */
    public function setOutput($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string role_policy_scope = 12 [json_name = "rolePolicyScope"];</code>
     * @return string
     */
    public function getRolePolicyScope()
    {
        return $this->readOneof(12);
    }

    public function hasRolePolicyScope()
    {
        return $this->hasOneof(12);
    }

    /**
     * Generated from protobuf field <code>string role_policy_scope = 12 [json_name = "rolePolicyScope"];</code>
     * @param string $var
     * @return $this
     */
    public function setRolePolicyScope($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getDetails()
    {
        return $this->whichOneof("details");
    }

}

