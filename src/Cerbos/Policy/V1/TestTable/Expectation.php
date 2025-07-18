<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/policy/v1/policy.proto

namespace Cerbos\Policy\V1\TestTable;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * Generated from protobuf message <code>cerbos.policy.v1.TestTable.Expectation</code>
 */
class Expectation extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string principal = 1 [json_name = "principal"];</code>
     */
    protected $principal = '';
    /**
     * Generated from protobuf field <code>string resource = 2 [json_name = "resource"];</code>
     */
    protected $resource = '';
    /**
     * Generated from protobuf field <code>map<string, .cerbos.effect.v1.Effect> actions = 3 [json_name = "actions"];</code>
     */
    private $actions;
    /**
     * Generated from protobuf field <code>repeated .cerbos.policy.v1.TestTable.OutputExpectations outputs = 4 [json_name = "outputs"];</code>
     */
    private $outputs;
    /**
     * Generated from protobuf field <code>repeated string principals = 5 [json_name = "principals"];</code>
     */
    private $principals;
    /**
     * Generated from protobuf field <code>repeated string resources = 6 [json_name = "resources"];</code>
     */
    private $resources;
    /**
     * Generated from protobuf field <code>repeated string principal_groups = 7 [json_name = "principalGroups"];</code>
     */
    private $principal_groups;
    /**
     * Generated from protobuf field <code>repeated string resource_groups = 8 [json_name = "resourceGroups"];</code>
     */
    private $resource_groups;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $principal
     *     @type string $resource
     *     @type array|\Google\Protobuf\Internal\MapField $actions
     *     @type \Cerbos\Policy\V1\TestTable\OutputExpectations[] $outputs
     *     @type string[] $principals
     *     @type string[] $resources
     *     @type string[] $principal_groups
     *     @type string[] $resource_groups
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Policy\V1\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string principal = 1 [json_name = "principal"];</code>
     * @return string
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * Generated from protobuf field <code>string principal = 1 [json_name = "principal"];</code>
     * @param string $var
     * @return $this
     */
    public function setPrincipal($var)
    {
        GPBUtil::checkString($var, True);
        $this->principal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string resource = 2 [json_name = "resource"];</code>
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Generated from protobuf field <code>string resource = 2 [json_name = "resource"];</code>
     * @param string $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, .cerbos.effect.v1.Effect> actions = 3 [json_name = "actions"];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * Generated from protobuf field <code>map<string, .cerbos.effect.v1.Effect> actions = 3 [json_name = "actions"];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setActions($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::ENUM, \Cerbos\Effect\V1\Effect::class);
        $this->actions = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.policy.v1.TestTable.OutputExpectations outputs = 4 [json_name = "outputs"];</code>
     * @return RepeatedField<\Cerbos\Policy\V1\TestTable\OutputExpectations>
     */
    public function getOutputs()
    {
        return $this->outputs;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.policy.v1.TestTable.OutputExpectations outputs = 4 [json_name = "outputs"];</code>
     * @param \Cerbos\Policy\V1\TestTable\OutputExpectations[] $var
     * @return $this
     */
    public function setOutputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Policy\V1\TestTable\OutputExpectations::class);
        $this->outputs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string principals = 5 [json_name = "principals"];</code>
     * @return RepeatedField<string>
     */
    public function getPrincipals()
    {
        return $this->principals;
    }

    /**
     * Generated from protobuf field <code>repeated string principals = 5 [json_name = "principals"];</code>
     * @param string[] $var
     * @return $this
     */
    public function setPrincipals($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->principals = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string resources = 6 [json_name = "resources"];</code>
     * @return RepeatedField<string>
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * Generated from protobuf field <code>repeated string resources = 6 [json_name = "resources"];</code>
     * @param string[] $var
     * @return $this
     */
    public function setResources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->resources = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string principal_groups = 7 [json_name = "principalGroups"];</code>
     * @return RepeatedField<string>
     */
    public function getPrincipalGroups()
    {
        return $this->principal_groups;
    }

    /**
     * Generated from protobuf field <code>repeated string principal_groups = 7 [json_name = "principalGroups"];</code>
     * @param string[] $var
     * @return $this
     */
    public function setPrincipalGroups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->principal_groups = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string resource_groups = 8 [json_name = "resourceGroups"];</code>
     * @return RepeatedField<string>
     */
    public function getResourceGroups()
    {
        return $this->resource_groups;
    }

    /**
     * Generated from protobuf field <code>repeated string resource_groups = 8 [json_name = "resourceGroups"];</code>
     * @param string[] $var
     * @return $this
     */
    public function setResourceGroups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->resource_groups = $arr;

        return $this;
    }

}

