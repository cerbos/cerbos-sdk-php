<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/cloud/store/v1/store.proto

namespace Cerbos\Cloud\Store\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * Generated from protobuf message <code>cerbos.cloud.store.v1.ErrDetailConditionUnsatisfied</code>
 */
class ErrDetailConditionUnsatisfied extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 current_store_version = 1 [json_name = "currentStoreVersion"];</code>
     */
    protected $current_store_version = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $current_store_version
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Cloud\Store\V1\Store::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 current_store_version = 1 [json_name = "currentStoreVersion"];</code>
     * @return int|string
     */
    public function getCurrentStoreVersion()
    {
        return $this->current_store_version;
    }

    /**
     * Generated from protobuf field <code>int64 current_store_version = 1 [json_name = "currentStoreVersion"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCurrentStoreVersion($var)
    {
        GPBUtil::checkInt64($var);
        $this->current_store_version = $var;

        return $this;
    }

}

