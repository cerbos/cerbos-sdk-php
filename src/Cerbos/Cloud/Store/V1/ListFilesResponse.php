<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/cloud/store/v1/store.proto

namespace Cerbos\Cloud\Store\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * Generated from protobuf message <code>cerbos.cloud.store.v1.ListFilesResponse</code>
 */
class ListFilesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 store_version = 1 [json_name = "storeVersion"];</code>
     */
    protected $store_version = 0;
    /**
     * Generated from protobuf field <code>repeated string files = 2 [json_name = "files"];</code>
     */
    private $files;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $store_version
     *     @type string[] $files
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Cloud\Store\V1\Store::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 store_version = 1 [json_name = "storeVersion"];</code>
     * @return int|string
     */
    public function getStoreVersion()
    {
        return $this->store_version;
    }

    /**
     * Generated from protobuf field <code>int64 store_version = 1 [json_name = "storeVersion"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setStoreVersion($var)
    {
        GPBUtil::checkInt64($var);
        $this->store_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string files = 2 [json_name = "files"];</code>
     * @return RepeatedField<string>
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * Generated from protobuf field <code>repeated string files = 2 [json_name = "files"];</code>
     * @param string[] $var
     * @return $this
     */
    public function setFiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->files = $arr;

        return $this;
    }

}

