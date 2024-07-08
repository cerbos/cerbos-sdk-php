<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/telemetry/v1/telemetry.proto

namespace Cerbos\Telemetry\V1\ServerLaunch\Features\Storage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.telemetry.v1.ServerLaunch.Features.Storage.Blob</code>
 */
class Blob extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string provider = 1 [json_name = "provider"];</code>
     */
    protected $provider = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Duration poll_interval = 2 [json_name = "pollInterval"];</code>
     */
    protected $poll_interval = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $provider
     *     @type \Google\Protobuf\Duration $poll_interval
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Telemetry\V1\Telemetry::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string provider = 1 [json_name = "provider"];</code>
     * @return string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Generated from protobuf field <code>string provider = 1 [json_name = "provider"];</code>
     * @param string $var
     * @return $this
     */
    public function setProvider($var)
    {
        GPBUtil::checkString($var, True);
        $this->provider = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration poll_interval = 2 [json_name = "pollInterval"];</code>
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
     * Generated from protobuf field <code>.google.protobuf.Duration poll_interval = 2 [json_name = "pollInterval"];</code>
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

