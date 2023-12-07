<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cerbos/audit/v1/audit.proto

namespace Cerbos\Audit\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.audit.v1.DecisionLogEntry</code>
 */
class DecisionLogEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string call_id = 1 [json_name = "callId"];</code>
     */
    protected $call_id = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 2 [json_name = "timestamp"];</code>
     */
    protected $timestamp = null;
    /**
     * Generated from protobuf field <code>.cerbos.audit.v1.Peer peer = 3 [json_name = "peer"];</code>
     */
    protected $peer = null;
    /**
     * Deprecated. Use method.check_resources.inputs instead.
     *
     * Generated from protobuf field <code>repeated .cerbos.engine.v1.CheckInput inputs = 4 [json_name = "inputs"];</code>
     */
    private $inputs;
    /**
     * Deprecated. Use method.check_resources.outputs instead.
     *
     * Generated from protobuf field <code>repeated .cerbos.engine.v1.CheckOutput outputs = 5 [json_name = "outputs"];</code>
     */
    private $outputs;
    /**
     * Deprecated. Use method.check_resources.error instead.
     *
     * Generated from protobuf field <code>string error = 6 [json_name = "error"];</code>
     */
    protected $error = '';
    /**
     * Generated from protobuf field <code>map<string, .cerbos.audit.v1.MetaValues> metadata = 15 [json_name = "metadata"];</code>
     */
    private $metadata;
    /**
     * Generated from protobuf field <code>.cerbos.audit.v1.AuditTrail audit_trail = 16 [json_name = "auditTrail"];</code>
     */
    protected $audit_trail = null;
    protected $method;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $call_id
     *     @type \Google\Protobuf\Timestamp $timestamp
     *     @type \Cerbos\Audit\V1\Peer $peer
     *     @type array<\Cerbos\Engine\V1\CheckInput>|\Google\Protobuf\Internal\RepeatedField $inputs
     *           Deprecated. Use method.check_resources.inputs instead.
     *     @type array<\Cerbos\Engine\V1\CheckOutput>|\Google\Protobuf\Internal\RepeatedField $outputs
     *           Deprecated. Use method.check_resources.outputs instead.
     *     @type string $error
     *           Deprecated. Use method.check_resources.error instead.
     *     @type \Cerbos\Audit\V1\DecisionLogEntry\CheckResources $check_resources
     *     @type \Cerbos\Audit\V1\DecisionLogEntry\PlanResources $plan_resources
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *     @type \Cerbos\Audit\V1\AuditTrail $audit_trail
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Audit\V1\Audit::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string call_id = 1 [json_name = "callId"];</code>
     * @return string
     */
    public function getCallId()
    {
        return $this->call_id;
    }

    /**
     * Generated from protobuf field <code>string call_id = 1 [json_name = "callId"];</code>
     * @param string $var
     * @return $this
     */
    public function setCallId($var)
    {
        GPBUtil::checkString($var, True);
        $this->call_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 2 [json_name = "timestamp"];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function hasTimestamp()
    {
        return isset($this->timestamp);
    }

    public function clearTimestamp()
    {
        unset($this->timestamp);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 2 [json_name = "timestamp"];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.audit.v1.Peer peer = 3 [json_name = "peer"];</code>
     * @return \Cerbos\Audit\V1\Peer|null
     */
    public function getPeer()
    {
        return $this->peer;
    }

    public function hasPeer()
    {
        return isset($this->peer);
    }

    public function clearPeer()
    {
        unset($this->peer);
    }

    /**
     * Generated from protobuf field <code>.cerbos.audit.v1.Peer peer = 3 [json_name = "peer"];</code>
     * @param \Cerbos\Audit\V1\Peer $var
     * @return $this
     */
    public function setPeer($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Audit\V1\Peer::class);
        $this->peer = $var;

        return $this;
    }

    /**
     * Deprecated. Use method.check_resources.inputs instead.
     *
     * Generated from protobuf field <code>repeated .cerbos.engine.v1.CheckInput inputs = 4 [json_name = "inputs"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputs()
    {
        return $this->inputs;
    }

    /**
     * Deprecated. Use method.check_resources.inputs instead.
     *
     * Generated from protobuf field <code>repeated .cerbos.engine.v1.CheckInput inputs = 4 [json_name = "inputs"];</code>
     * @param array<\Cerbos\Engine\V1\CheckInput>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Engine\V1\CheckInput::class);
        $this->inputs = $arr;

        return $this;
    }

    /**
     * Deprecated. Use method.check_resources.outputs instead.
     *
     * Generated from protobuf field <code>repeated .cerbos.engine.v1.CheckOutput outputs = 5 [json_name = "outputs"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOutputs()
    {
        return $this->outputs;
    }

    /**
     * Deprecated. Use method.check_resources.outputs instead.
     *
     * Generated from protobuf field <code>repeated .cerbos.engine.v1.CheckOutput outputs = 5 [json_name = "outputs"];</code>
     * @param array<\Cerbos\Engine\V1\CheckOutput>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOutputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Engine\V1\CheckOutput::class);
        $this->outputs = $arr;

        return $this;
    }

    /**
     * Deprecated. Use method.check_resources.error instead.
     *
     * Generated from protobuf field <code>string error = 6 [json_name = "error"];</code>
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Deprecated. Use method.check_resources.error instead.
     *
     * Generated from protobuf field <code>string error = 6 [json_name = "error"];</code>
     * @param string $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->error = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.audit.v1.DecisionLogEntry.CheckResources check_resources = 7 [json_name = "checkResources"];</code>
     * @return \Cerbos\Audit\V1\DecisionLogEntry\CheckResources|null
     */
    public function getCheckResources()
    {
        return $this->readOneof(7);
    }

    public function hasCheckResources()
    {
        return $this->hasOneof(7);
    }

    /**
     * Generated from protobuf field <code>.cerbos.audit.v1.DecisionLogEntry.CheckResources check_resources = 7 [json_name = "checkResources"];</code>
     * @param \Cerbos\Audit\V1\DecisionLogEntry\CheckResources $var
     * @return $this
     */
    public function setCheckResources($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Audit\V1\DecisionLogEntry\CheckResources::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.audit.v1.DecisionLogEntry.PlanResources plan_resources = 8 [json_name = "planResources"];</code>
     * @return \Cerbos\Audit\V1\DecisionLogEntry\PlanResources|null
     */
    public function getPlanResources()
    {
        return $this->readOneof(8);
    }

    public function hasPlanResources()
    {
        return $this->hasOneof(8);
    }

    /**
     * Generated from protobuf field <code>.cerbos.audit.v1.DecisionLogEntry.PlanResources plan_resources = 8 [json_name = "planResources"];</code>
     * @param \Cerbos\Audit\V1\DecisionLogEntry\PlanResources $var
     * @return $this
     */
    public function setPlanResources($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Audit\V1\DecisionLogEntry\PlanResources::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, .cerbos.audit.v1.MetaValues> metadata = 15 [json_name = "metadata"];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Generated from protobuf field <code>map<string, .cerbos.audit.v1.MetaValues> metadata = 15 [json_name = "metadata"];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Audit\V1\MetaValues::class);
        $this->metadata = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.audit.v1.AuditTrail audit_trail = 16 [json_name = "auditTrail"];</code>
     * @return \Cerbos\Audit\V1\AuditTrail|null
     */
    public function getAuditTrail()
    {
        return $this->audit_trail;
    }

    public function hasAuditTrail()
    {
        return isset($this->audit_trail);
    }

    public function clearAuditTrail()
    {
        unset($this->audit_trail);
    }

    /**
     * Generated from protobuf field <code>.cerbos.audit.v1.AuditTrail audit_trail = 16 [json_name = "auditTrail"];</code>
     * @param \Cerbos\Audit\V1\AuditTrail $var
     * @return $this
     */
    public function setAuditTrail($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Audit\V1\AuditTrail::class);
        $this->audit_trail = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->whichOneof("method");
    }

}

