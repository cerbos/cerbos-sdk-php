<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/cloud/store/v1/store.proto

namespace Cerbos\Cloud\Store\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * Generated from protobuf message <code>cerbos.cloud.store.v1.ModifyFilesRequest</code>
 */
class ModifyFilesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string store_id = 1 [json_name = "storeId"];</code>
     */
    protected $store_id = '';
    /**
     * Generated from protobuf field <code>optional .cerbos.cloud.store.v1.ModifyFilesRequest.Condition condition = 2 [json_name = "condition"];</code>
     */
    protected $condition = null;
    /**
     * Generated from protobuf field <code>repeated .cerbos.cloud.store.v1.FileOp operations = 3 [json_name = "operations"];</code>
     */
    private $operations;
    /**
     * Generated from protobuf field <code>optional .cerbos.cloud.store.v1.ChangeDetails change_details = 4 [json_name = "changeDetails"];</code>
     */
    protected $change_details = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $store_id
     *     @type \Cerbos\Cloud\Store\V1\ModifyFilesRequest\Condition $condition
     *     @type \Cerbos\Cloud\Store\V1\FileOp[] $operations
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
     * Generated from protobuf field <code>optional .cerbos.cloud.store.v1.ModifyFilesRequest.Condition condition = 2 [json_name = "condition"];</code>
     * @return \Cerbos\Cloud\Store\V1\ModifyFilesRequest\Condition|null
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
     * Generated from protobuf field <code>optional .cerbos.cloud.store.v1.ModifyFilesRequest.Condition condition = 2 [json_name = "condition"];</code>
     * @param \Cerbos\Cloud\Store\V1\ModifyFilesRequest\Condition $var
     * @return $this
     */
    public function setCondition($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Cloud\Store\V1\ModifyFilesRequest\Condition::class);
        $this->condition = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.cloud.store.v1.FileOp operations = 3 [json_name = "operations"];</code>
     * @return RepeatedField<\Cerbos\Cloud\Store\V1\FileOp>
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.cloud.store.v1.FileOp operations = 3 [json_name = "operations"];</code>
     * @param \Cerbos\Cloud\Store\V1\FileOp[] $var
     * @return $this
     */
    public function setOperations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Cloud\Store\V1\FileOp::class);
        $this->operations = $arr;

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

}

