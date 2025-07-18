<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/cloud/bundle/v2/bundle.proto

namespace Cerbos\Cloud\Bundle\V2\WatchBundleResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * Generated from protobuf message <code>cerbos.cloud.bundle.v2.WatchBundleResponse.Reconnect</code>
 */
class Reconnect extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.protobuf.Duration backoff = 1 [json_name = "backoff"];</code>
     */
    protected $backoff = null;
    /**
     * Generated from protobuf field <code>string reason = 2 [json_name = "reason"];</code>
     */
    protected $reason = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $backoff
     *     @type string $reason
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Cloud\Bundle\V2\Bundle::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration backoff = 1 [json_name = "backoff"];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getBackoff()
    {
        return $this->backoff;
    }

    public function hasBackoff()
    {
        return isset($this->backoff);
    }

    public function clearBackoff()
    {
        unset($this->backoff);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration backoff = 1 [json_name = "backoff"];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setBackoff($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->backoff = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string reason = 2 [json_name = "reason"];</code>
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Generated from protobuf field <code>string reason = 2 [json_name = "reason"];</code>
     * @param string $var
     * @return $this
     */
    public function setReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->reason = $var;

        return $this;
    }

}

