<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/cloud/bundle/v1/bundle.proto

namespace Cerbos\Cloud\Bundle\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * Generated from protobuf message <code>cerbos.cloud.bundle.v1.WatchBundleResponse</code>
 */
class WatchBundleResponse extends \Google\Protobuf\Internal\Message
{
    protected $msg;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cerbos\Cloud\Bundle\V1\BundleInfo $bundle_update
     *     @type \Cerbos\Cloud\Bundle\V1\WatchBundleResponse\Reconnect $reconnect
     *     @type \Cerbos\Cloud\Bundle\V1\WatchBundleResponse\BundleRemoved $bundle_removed
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Cloud\Bundle\V1\Bundle::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.cerbos.cloud.bundle.v1.BundleInfo bundle_update = 1 [json_name = "bundleUpdate"];</code>
     * @return \Cerbos\Cloud\Bundle\V1\BundleInfo|null
     */
    public function getBundleUpdate()
    {
        return $this->readOneof(1);
    }

    public function hasBundleUpdate()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.cerbos.cloud.bundle.v1.BundleInfo bundle_update = 1 [json_name = "bundleUpdate"];</code>
     * @param \Cerbos\Cloud\Bundle\V1\BundleInfo $var
     * @return $this
     */
    public function setBundleUpdate($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Cloud\Bundle\V1\BundleInfo::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.cloud.bundle.v1.WatchBundleResponse.Reconnect reconnect = 2 [json_name = "reconnect"];</code>
     * @return \Cerbos\Cloud\Bundle\V1\WatchBundleResponse\Reconnect|null
     */
    public function getReconnect()
    {
        return $this->readOneof(2);
    }

    public function hasReconnect()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.cerbos.cloud.bundle.v1.WatchBundleResponse.Reconnect reconnect = 2 [json_name = "reconnect"];</code>
     * @param \Cerbos\Cloud\Bundle\V1\WatchBundleResponse\Reconnect $var
     * @return $this
     */
    public function setReconnect($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Cloud\Bundle\V1\WatchBundleResponse\Reconnect::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.cloud.bundle.v1.WatchBundleResponse.BundleRemoved bundle_removed = 3 [json_name = "bundleRemoved"];</code>
     * @return \Cerbos\Cloud\Bundle\V1\WatchBundleResponse\BundleRemoved|null
     */
    public function getBundleRemoved()
    {
        return $this->readOneof(3);
    }

    public function hasBundleRemoved()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.cerbos.cloud.bundle.v1.WatchBundleResponse.BundleRemoved bundle_removed = 3 [json_name = "bundleRemoved"];</code>
     * @param \Cerbos\Cloud\Bundle\V1\WatchBundleResponse\BundleRemoved $var
     * @return $this
     */
    public function setBundleRemoved($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Cloud\Bundle\V1\WatchBundleResponse\BundleRemoved::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMsg()
    {
        return $this->whichOneof("msg");
    }

}

