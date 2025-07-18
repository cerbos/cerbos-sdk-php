<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/cloud/store/v1/store.proto

namespace Cerbos\Cloud\Store\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * Generated from protobuf message <code>cerbos.cloud.store.v1.ReplaceFilesRequest</code>
 */
class ReplaceFilesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string store_id = 1 [json_name = "storeId"];</code>
     */
    protected $store_id = '';
    /**
     * Generated from protobuf field <code>optional .cerbos.cloud.store.v1.ReplaceFilesRequest.Condition condition = 2 [json_name = "condition"];</code>
     */
    protected $condition = null;
    /**
     * Generated from protobuf field <code>optional .cerbos.cloud.store.v1.ChangeDetails change_details = 4 [json_name = "changeDetails"];</code>
     */
    protected $change_details = null;
    protected $contents;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $store_id
     *     @type \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Condition $condition
     *     @type string $zipped_contents
     *     @type \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Files $files
     *     @type \Cerbos\Cloud\Store\V1\ChangeDetails $change_details
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Cloud\Store\V1\Store::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string store_id = 1 [json_name = "storeId"];</code>
     * @return string
     */
    public function getStoreId()
    {
        return $this->store_id;
    }

    /**
     * Generated from protobuf field <code>string store_id = 1 [json_name = "storeId"];</code>
     * @param string $var
     * @return $this
     */
    public function setStoreId($var)
    {
        GPBUtil::checkString($var, True);
        $this->store_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .cerbos.cloud.store.v1.ReplaceFilesRequest.Condition condition = 2 [json_name = "condition"];</code>
     * @return \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Condition|null
     */
    public function getCondition()
    {
        return $this->condition;
    }

    public function hasCondition()
    {
        return isset($this->condition);
    }

    public function clearCondition()
    {
        unset($this->condition);
    }

    /**
     * Generated from protobuf field <code>optional .cerbos.cloud.store.v1.ReplaceFilesRequest.Condition condition = 2 [json_name = "condition"];</code>
     * @param \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Condition $var
     * @return $this
     */
    public function setCondition($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Condition::class);
        $this->condition = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes zipped_contents = 3 [json_name = "zippedContents"];</code>
     * @return string
     */
    public function getZippedContents()
    {
        return $this->readOneof(3);
    }

    public function hasZippedContents()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>bytes zipped_contents = 3 [json_name = "zippedContents"];</code>
     * @param string $var
     * @return $this
     */
    public function setZippedContents($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.cloud.store.v1.ReplaceFilesRequest.Files files = 5 [json_name = "files"];</code>
     * @return \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Files|null
     */
    public function getFiles()
    {
        return $this->readOneof(5);
    }

    public function hasFiles()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>.cerbos.cloud.store.v1.ReplaceFilesRequest.Files files = 5 [json_name = "files"];</code>
     * @param \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Files $var
     * @return $this
     */
    public function setFiles($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Cloud\Store\V1\ReplaceFilesRequest\Files::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .cerbos.cloud.store.v1.ChangeDetails change_details = 4 [json_name = "changeDetails"];</code>
     * @return \Cerbos\Cloud\Store\V1\ChangeDetails|null
     */
    public function getChangeDetails()
    {
        return $this->change_details;
    }

    public function hasChangeDetails()
    {
        return isset($this->change_details);
    }

    public function clearChangeDetails()
    {
        unset($this->change_details);
    }

    /**
     * Generated from protobuf field <code>optional .cerbos.cloud.store.v1.ChangeDetails change_details = 4 [json_name = "changeDetails"];</code>
     * @param \Cerbos\Cloud\Store\V1\ChangeDetails $var
     * @return $this
     */
    public function setChangeDetails($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Cloud\Store\V1\ChangeDetails::class);
        $this->change_details = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getContents()
    {
        return $this->whichOneof("contents");
    }

}

