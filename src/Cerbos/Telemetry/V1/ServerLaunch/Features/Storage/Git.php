<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/telemetry/v1/telemetry.proto

namespace Cerbos\Telemetry\V1\ServerLaunch\Features\Storage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * Generated from protobuf message <code>cerbos.telemetry.v1.ServerLaunch.Features.Storage.Git</code>
 */
class Git extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string protocol = 1 [json_name = "protocol"];</code>
     */
    protected $protocol = '';
    /**
     * Generated from protobuf field <code>bool auth = 2 [json_name = "auth"];</code>
     */
    protected $auth = false;
    /**
     * Generated from protobuf field <code>.google.protobuf.Duration poll_interval = 3 [json_name = "pollInterval"];</code>
     */
    protected $poll_interval = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $protocol
     *     @type bool $auth
     *     @type \Google\Protobuf\Duration $poll_interval
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Telemetry\V1\Telemetry::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string protocol = 1 [json_name = "protocol"];</code>
     * @return string
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Generated from protobuf field <code>string protocol = 1 [json_name = "protocol"];</code>
     * @param string $var
     * @return $this
     */
    public function setProtocol($var)
    {
        GPBUtil::checkString($var, True);
        $this->protocol = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool auth = 2 [json_name = "auth"];</code>
     * @return bool
     */
    public function getAuth()
    {
        return $this->auth;
    }

    /**
     * Generated from protobuf field <code>bool auth = 2 [json_name = "auth"];</code>
     * @param bool $var
     * @return $this
     */
    public function setAuth($var)
    {
        GPBUtil::checkBool($var);
        $this->auth = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration poll_interval = 3 [json_name = "pollInterval"];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getPollInterval()
    {
        return $this->poll_interval;
    }

    public function hasPollInterval()
    {
        return isset($this->poll_interval);
    }

    public function clearPollInterval()
    {
        unset($this->poll_interval);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration poll_interval = 3 [json_name = "pollInterval"];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setPollInterval($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->poll_interval = $var;

        return $this;
    }

}

