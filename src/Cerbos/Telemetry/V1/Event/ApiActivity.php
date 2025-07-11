<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/telemetry/v1/telemetry.proto

namespace Cerbos\Telemetry\V1\Event;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * Generated from protobuf message <code>cerbos.telemetry.v1.Event.ApiActivity</code>
 */
class ApiActivity extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string version = 1 [json_name = "version"];</code>
     */
    protected $version = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Duration uptime = 2 [json_name = "uptime"];</code>
     */
    protected $uptime = null;
    /**
     * Generated from protobuf field <code>repeated .cerbos.telemetry.v1.Event.CountStat method_calls = 3 [json_name = "methodCalls"];</code>
     */
    private $method_calls;
    /**
     * Generated from protobuf field <code>repeated .cerbos.telemetry.v1.Event.CountStat user_agents = 4 [json_name = "userAgents"];</code>
     */
    private $user_agents;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $version
     *     @type \Google\Protobuf\Duration $uptime
     *     @type \Cerbos\Telemetry\V1\Event\CountStat[] $method_calls
     *     @type \Cerbos\Telemetry\V1\Event\CountStat[] $user_agents
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Telemetry\V1\Telemetry::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string version = 1 [json_name = "version"];</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Generated from protobuf field <code>string version = 1 [json_name = "version"];</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration uptime = 2 [json_name = "uptime"];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getUptime()
    {
        return $this->uptime;
    }

    public function hasUptime()
    {
        return isset($this->uptime);
    }

    public function clearUptime()
    {
        unset($this->uptime);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration uptime = 2 [json_name = "uptime"];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setUptime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->uptime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.telemetry.v1.Event.CountStat method_calls = 3 [json_name = "methodCalls"];</code>
     * @return RepeatedField<\Cerbos\Telemetry\V1\Event\CountStat>
     */
    public function getMethodCalls()
    {
        return $this->method_calls;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.telemetry.v1.Event.CountStat method_calls = 3 [json_name = "methodCalls"];</code>
     * @param \Cerbos\Telemetry\V1\Event\CountStat[] $var
     * @return $this
     */
    public function setMethodCalls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Telemetry\V1\Event\CountStat::class);
        $this->method_calls = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.telemetry.v1.Event.CountStat user_agents = 4 [json_name = "userAgents"];</code>
     * @return RepeatedField<\Cerbos\Telemetry\V1\Event\CountStat>
     */
    public function getUserAgents()
    {
        return $this->user_agents;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.telemetry.v1.Event.CountStat user_agents = 4 [json_name = "userAgents"];</code>
     * @param \Cerbos\Telemetry\V1\Event\CountStat[] $var
     * @return $this
     */
    public function setUserAgents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Telemetry\V1\Event\CountStat::class);
        $this->user_agents = $arr;

        return $this;
    }

}

