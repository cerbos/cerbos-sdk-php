<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/telemetry/v1/telemetry.proto

namespace Cerbos\Telemetry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * Generated from protobuf message <code>cerbos.telemetry.v1.ServerLaunch</code>
 */
class ServerLaunch extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string version = 1 [json_name = "version"];</code>
     */
    protected $version = '';
    /**
     * Generated from protobuf field <code>.cerbos.telemetry.v1.ServerLaunch.Source source = 2 [json_name = "source"];</code>
     */
    protected $source = null;
    /**
     * Generated from protobuf field <code>.cerbos.telemetry.v1.ServerLaunch.Features features = 3 [json_name = "features"];</code>
     */
    protected $features = null;
    /**
     * Generated from protobuf field <code>.cerbos.telemetry.v1.ServerLaunch.Stats stats = 4 [json_name = "stats"];</code>
     */
    protected $stats = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $version
     *     @type \Cerbos\Telemetry\V1\ServerLaunch\Source $source
     *     @type \Cerbos\Telemetry\V1\ServerLaunch\Features $features
     *     @type \Cerbos\Telemetry\V1\ServerLaunch\Stats $stats
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
     * Generated from protobuf field <code>.cerbos.telemetry.v1.ServerLaunch.Source source = 2 [json_name = "source"];</code>
     * @return \Cerbos\Telemetry\V1\ServerLaunch\Source|null
     */
    public function getSource()
    {
        return $this->source;
    }

    public function hasSource()
    {
        return isset($this->source);
    }

    public function clearSource()
    {
        unset($this->source);
    }

    /**
     * Generated from protobuf field <code>.cerbos.telemetry.v1.ServerLaunch.Source source = 2 [json_name = "source"];</code>
     * @param \Cerbos\Telemetry\V1\ServerLaunch\Source $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Telemetry\V1\ServerLaunch\Source::class);
        $this->source = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.telemetry.v1.ServerLaunch.Features features = 3 [json_name = "features"];</code>
     * @return \Cerbos\Telemetry\V1\ServerLaunch\Features|null
     */
    public function getFeatures()
    {
        return $this->features;
    }

    public function hasFeatures()
    {
        return isset($this->features);
    }

    public function clearFeatures()
    {
        unset($this->features);
    }

    /**
     * Generated from protobuf field <code>.cerbos.telemetry.v1.ServerLaunch.Features features = 3 [json_name = "features"];</code>
     * @param \Cerbos\Telemetry\V1\ServerLaunch\Features $var
     * @return $this
     */
    public function setFeatures($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Telemetry\V1\ServerLaunch\Features::class);
        $this->features = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.telemetry.v1.ServerLaunch.Stats stats = 4 [json_name = "stats"];</code>
     * @return \Cerbos\Telemetry\V1\ServerLaunch\Stats|null
     */
    public function getStats()
    {
        return $this->stats;
    }

    public function hasStats()
    {
        return isset($this->stats);
    }

    public function clearStats()
    {
        unset($this->stats);
    }

    /**
     * Generated from protobuf field <code>.cerbos.telemetry.v1.ServerLaunch.Stats stats = 4 [json_name = "stats"];</code>
     * @param \Cerbos\Telemetry\V1\ServerLaunch\Stats $var
     * @return $this
     */
    public function setStats($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Telemetry\V1\ServerLaunch\Stats::class);
        $this->stats = $var;

        return $this;
    }

}

