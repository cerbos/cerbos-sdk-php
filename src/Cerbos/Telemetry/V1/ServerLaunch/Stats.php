<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cerbos/telemetry/v1/telemetry.proto

namespace Cerbos\Telemetry\V1\ServerLaunch;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.telemetry.v1.ServerLaunch.Stats</code>
 */
class Stats extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.cerbos.telemetry.v1.ServerLaunch.Stats.Policy policy = 1 [json_name = "policy"];</code>
     */
    protected $policy = null;
    /**
     * Generated from protobuf field <code>.cerbos.telemetry.v1.ServerLaunch.Stats.Schema schema = 2 [json_name = "schema"];</code>
     */
    protected $schema = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cerbos\Telemetry\V1\ServerLaunch\Stats\Policy $policy
     *     @type \Cerbos\Telemetry\V1\ServerLaunch\Stats\Schema $schema
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Telemetry\V1\Telemetry::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.cerbos.telemetry.v1.ServerLaunch.Stats.Policy policy = 1 [json_name = "policy"];</code>
     * @return \Cerbos\Telemetry\V1\ServerLaunch\Stats\Policy|null
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    public function hasPolicy()
    {
        return isset($this->policy);
    }

    public function clearPolicy()
    {
        unset($this->policy);
    }

    /**
     * Generated from protobuf field <code>.cerbos.telemetry.v1.ServerLaunch.Stats.Policy policy = 1 [json_name = "policy"];</code>
     * @param \Cerbos\Telemetry\V1\ServerLaunch\Stats\Policy $var
     * @return $this
     */
    public function setPolicy($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Telemetry\V1\ServerLaunch\Stats\Policy::class);
        $this->policy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.telemetry.v1.ServerLaunch.Stats.Schema schema = 2 [json_name = "schema"];</code>
     * @return \Cerbos\Telemetry\V1\ServerLaunch\Stats\Schema|null
     */
    public function getSchema()
    {
        return $this->schema;
    }

    public function hasSchema()
    {
        return isset($this->schema);
    }

    public function clearSchema()
    {
        unset($this->schema);
    }

    /**
     * Generated from protobuf field <code>.cerbos.telemetry.v1.ServerLaunch.Stats.Schema schema = 2 [json_name = "schema"];</code>
     * @param \Cerbos\Telemetry\V1\ServerLaunch\Stats\Schema $var
     * @return $this
     */
    public function setSchema($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Telemetry\V1\ServerLaunch\Stats\Schema::class);
        $this->schema = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Stats::class, \Cerbos\Telemetry\V1\ServerLaunch_Stats::class);
