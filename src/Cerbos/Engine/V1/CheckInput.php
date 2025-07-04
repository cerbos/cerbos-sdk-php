<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/engine/v1/engine.proto

namespace Cerbos\Engine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * Generated from protobuf message <code>cerbos.engine.v1.CheckInput</code>
 */
class CheckInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string request_id = 1 [json_name = "requestId"];</code>
     */
    protected $request_id = '';
    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.Resource resource = 2 [json_name = "resource", (.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $resource = null;
    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.Principal principal = 3 [json_name = "principal", (.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $principal = null;
    /**
     * Generated from protobuf field <code>repeated string actions = 4 [json_name = "actions", (.google.api.field_behavior) = REQUIRED];</code>
     */
    private $actions;
    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.AuxData aux_data = 5 [json_name = "auxData"];</code>
     */
    protected $aux_data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $request_id
     *     @type \Cerbos\Engine\V1\Resource $resource
     *     @type \Cerbos\Engine\V1\Principal $principal
     *     @type string[] $actions
     *     @type \Cerbos\Engine\V1\AuxData $aux_data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Engine\V1\Engine::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string request_id = 1 [json_name = "requestId"];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Generated from protobuf field <code>string request_id = 1 [json_name = "requestId"];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.Resource resource = 2 [json_name = "resource", (.google.api.field_behavior) = REQUIRED];</code>
     * @return \Cerbos\Engine\V1\Resource|null
     */
    public function getResource()
    {
        return $this->resource;
    }

    public function hasResource()
    {
        return isset($this->resource);
    }

    public function clearResource()
    {
        unset($this->resource);
    }

    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.Resource resource = 2 [json_name = "resource", (.google.api.field_behavior) = REQUIRED];</code>
     * @param \Cerbos\Engine\V1\Resource $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Engine\V1\Resource::class);
        $this->resource = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.Principal principal = 3 [json_name = "principal", (.google.api.field_behavior) = REQUIRED];</code>
     * @return \Cerbos\Engine\V1\Principal|null
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    public function hasPrincipal()
    {
        return isset($this->principal);
    }

    public function clearPrincipal()
    {
        unset($this->principal);
    }

    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.Principal principal = 3 [json_name = "principal", (.google.api.field_behavior) = REQUIRED];</code>
     * @param \Cerbos\Engine\V1\Principal $var
     * @return $this
     */
    public function setPrincipal($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Engine\V1\Principal::class);
        $this->principal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string actions = 4 [json_name = "actions", (.google.api.field_behavior) = REQUIRED];</code>
     * @return RepeatedField<string>
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * Generated from protobuf field <code>repeated string actions = 4 [json_name = "actions", (.google.api.field_behavior) = REQUIRED];</code>
     * @param string[] $var
     * @return $this
     */
    public function setActions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->actions = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.AuxData aux_data = 5 [json_name = "auxData"];</code>
     * @return \Cerbos\Engine\V1\AuxData|null
     */
    public function getAuxData()
    {
        return $this->aux_data;
    }

    public function hasAuxData()
    {
        return isset($this->aux_data);
    }

    public function clearAuxData()
    {
        unset($this->aux_data);
    }

    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.AuxData aux_data = 5 [json_name = "auxData"];</code>
     * @param \Cerbos\Engine\V1\AuxData $var
     * @return $this
     */
    public function setAuxData($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Engine\V1\AuxData::class);
        $this->aux_data = $var;

        return $this;
    }

}

