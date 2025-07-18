<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/cloud/bundle/v2/bundle.proto

namespace Cerbos\Cloud\Bundle\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * Generated from protobuf message <code>cerbos.cloud.bundle.v2.Manifest</code>
 */
class Manifest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string api_version = 1 [json_name = "apiVersion"];</code>
     */
    protected $api_version = '';
    /**
     * Generated from protobuf field <code>map<string, string> policy_index = 2 [json_name = "policyIndex"];</code>
     */
    private $policy_index;
    /**
     * Generated from protobuf field <code>repeated string schemas = 3 [json_name = "schemas"];</code>
     */
    private $schemas;
    /**
     * Generated from protobuf field <code>.cerbos.cloud.bundle.v2.Meta meta = 4 [json_name = "meta"];</code>
     */
    protected $meta = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $api_version
     *     @type array|\Google\Protobuf\Internal\MapField $policy_index
     *     @type string[] $schemas
     *     @type \Cerbos\Cloud\Bundle\V2\Meta $meta
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Cloud\Bundle\V2\Bundle::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string api_version = 1 [json_name = "apiVersion"];</code>
     * @return string
     */
    public function getApiVersion()
    {
        return $this->api_version;
    }

    /**
     * Generated from protobuf field <code>string api_version = 1 [json_name = "apiVersion"];</code>
     * @param string $var
     * @return $this
     */
    public function setApiVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->api_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> policy_index = 2 [json_name = "policyIndex"];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getPolicyIndex()
    {
        return $this->policy_index;
    }

    /**
     * Generated from protobuf field <code>map<string, string> policy_index = 2 [json_name = "policyIndex"];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setPolicyIndex($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->policy_index = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string schemas = 3 [json_name = "schemas"];</code>
     * @return RepeatedField<string>
     */
    public function getSchemas()
    {
        return $this->schemas;
    }

    /**
     * Generated from protobuf field <code>repeated string schemas = 3 [json_name = "schemas"];</code>
     * @param string[] $var
     * @return $this
     */
    public function setSchemas($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->schemas = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.cloud.bundle.v2.Meta meta = 4 [json_name = "meta"];</code>
     * @return \Cerbos\Cloud\Bundle\V2\Meta|null
     */
    public function getMeta()
    {
        return $this->meta;
    }

    public function hasMeta()
    {
        return isset($this->meta);
    }

    public function clearMeta()
    {
        unset($this->meta);
    }

    /**
     * Generated from protobuf field <code>.cerbos.cloud.bundle.v2.Meta meta = 4 [json_name = "meta"];</code>
     * @param \Cerbos\Cloud\Bundle\V2\Meta $var
     * @return $this
     */
    public function setMeta($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Cloud\Bundle\V2\Meta::class);
        $this->meta = $var;

        return $this;
    }

}

