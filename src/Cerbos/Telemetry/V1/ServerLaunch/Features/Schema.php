<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/telemetry/v1/telemetry.proto

namespace Cerbos\Telemetry\V1\ServerLaunch\Features;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * Generated from protobuf message <code>cerbos.telemetry.v1.ServerLaunch.Features.Schema</code>
 */
class Schema extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string enforcement = 1 [json_name = "enforcement"];</code>
     */
    protected $enforcement = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $enforcement
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Telemetry\V1\Telemetry::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string enforcement = 1 [json_name = "enforcement"];</code>
     * @return string
     */
    public function getEnforcement()
    {
        return $this->enforcement;
    }

    /**
     * Generated from protobuf field <code>string enforcement = 1 [json_name = "enforcement"];</code>
     * @param string $var
     * @return $this
     */
    public function setEnforcement($var)
    {
        GPBUtil::checkString($var, True);
        $this->enforcement = $var;

        return $this;
    }

}

