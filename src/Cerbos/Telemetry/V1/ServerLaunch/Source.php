<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/telemetry/v1/telemetry.proto

namespace Cerbos\Telemetry\V1\ServerLaunch;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.telemetry.v1.ServerLaunch.Source</code>
 */
class Source extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.cerbos.telemetry.v1.ServerLaunch.Cerbos cerbos = 1 [json_name = "cerbos"];</code>
     */
    protected $cerbos = null;
    /**
     * Generated from protobuf field <code>string os = 2 [json_name = "os"];</code>
     */
    protected $os = '';
    /**
     * Generated from protobuf field <code>string arch = 3 [json_name = "arch"];</code>
     */
    protected $arch = '';
    /**
     * Generated from protobuf field <code>uint32 num_cpus = 4 [json_name = "numCpus"];</code>
     */
    protected $num_cpus = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cerbos\Telemetry\V1\ServerLaunch\Cerbos $cerbos
     *     @type string $os
     *     @type string $arch
     *     @type int $num_cpus
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Telemetry\V1\Telemetry::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.cerbos.telemetry.v1.ServerLaunch.Cerbos cerbos = 1 [json_name = "cerbos"];</code>
     * @return \Cerbos\Telemetry\V1\ServerLaunch\Cerbos|null
     */
    public function getCerbos()
    {
        return $this->cerbos;
    }

    public function hasCerbos()
    {
        return isset($this->cerbos);
    }

    public function clearCerbos()
    {
        unset($this->cerbos);
    }

    /**
     * Generated from protobuf field <code>.cerbos.telemetry.v1.ServerLaunch.Cerbos cerbos = 1 [json_name = "cerbos"];</code>
     * @param \Cerbos\Telemetry\V1\ServerLaunch\Cerbos $var
     * @return $this
     */
    public function setCerbos($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Telemetry\V1\ServerLaunch\Cerbos::class);
        $this->cerbos = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string os = 2 [json_name = "os"];</code>
     * @return string
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * Generated from protobuf field <code>string os = 2 [json_name = "os"];</code>
     * @param string $var
     * @return $this
     */
    public function setOs($var)
    {
        GPBUtil::checkString($var, True);
        $this->os = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string arch = 3 [json_name = "arch"];</code>
     * @return string
     */
    public function getArch()
    {
        return $this->arch;
    }

    /**
     * Generated from protobuf field <code>string arch = 3 [json_name = "arch"];</code>
     * @param string $var
     * @return $this
     */
    public function setArch($var)
    {
        GPBUtil::checkString($var, True);
        $this->arch = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 num_cpus = 4 [json_name = "numCpus"];</code>
     * @return int
     */
    public function getNumCpus()
    {
        return $this->num_cpus;
    }

    /**
     * Generated from protobuf field <code>uint32 num_cpus = 4 [json_name = "numCpus"];</code>
     * @param int $var
     * @return $this
     */
    public function setNumCpus($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_cpus = $var;

        return $this;
    }

}

