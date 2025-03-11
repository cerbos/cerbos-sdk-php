<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/policy/v1/policy.proto

namespace Cerbos\Policy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.policy.v1.Metadata</code>
 */
class Metadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string source_file = 1 [json_name = "sourceFile"];</code>
     */
    protected $source_file = '';
    /**
     * Generated from protobuf field <code>map<string, string> annotations = 2 [json_name = "annotations"];</code>
     */
    private $annotations;
    /**
     * Generated from protobuf field <code>.google.protobuf.UInt64Value hash = 3 [json_name = "hash"];</code>
     */
    protected $hash = null;
    /**
     * Generated from protobuf field <code>string store_identifer = 4 [json_name = "storeIdentifer", deprecated = true];</code>
     * @deprecated
     */
    protected $store_identifer = '';
    /**
     * Generated from protobuf field <code>string store_identifier = 5 [json_name = "storeIdentifier"];</code>
     */
    protected $store_identifier = '';
    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.SourceAttributes source_attributes = 6 [json_name = "sourceAttributes"];</code>
     */
    protected $source_attributes = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $source_file
     *     @type array|\Google\Protobuf\Internal\MapField $annotations
     *     @type \Google\Protobuf\UInt64Value $hash
     *     @type string $store_identifer
     *     @type string $store_identifier
     *     @type \Cerbos\Policy\V1\SourceAttributes $source_attributes
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Policy\V1\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string source_file = 1 [json_name = "sourceFile"];</code>
     * @return string
     */
    public function getSourceFile()
    {
        return $this->source_file;
    }

    /**
     * Generated from protobuf field <code>string source_file = 1 [json_name = "sourceFile"];</code>
     * @param string $var
     * @return $this
     */
    public function setSourceFile($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_file = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> annotations = 2 [json_name = "annotations"];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * Generated from protobuf field <code>map<string, string> annotations = 2 [json_name = "annotations"];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAnnotations($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->annotations = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.UInt64Value hash = 3 [json_name = "hash"];</code>
     * @return \Google\Protobuf\UInt64Value|null
     */
    public function getHash()
    {
        return $this->hash;
    }

    public function hasHash()
    {
        return isset($this->hash);
    }

    public function clearHash()
    {
        unset($this->hash);
    }

    /**
     * Returns the unboxed value from <code>getHash()</code>

     * Generated from protobuf field <code>.google.protobuf.UInt64Value hash = 3 [json_name = "hash"];</code>
     * @return int|string|null
     */
    public function getHashUnwrapped()
    {
        return $this->readWrapperValue("hash");
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.UInt64Value hash = 3 [json_name = "hash"];</code>
     * @param \Google\Protobuf\UInt64Value $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\UInt64Value::class);
        $this->hash = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\UInt64Value object.

     * Generated from protobuf field <code>.google.protobuf.UInt64Value hash = 3 [json_name = "hash"];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setHashUnwrapped($var)
    {
        $this->writeWrapperValue("hash", $var);
        return $this;}

    /**
     * Generated from protobuf field <code>string store_identifer = 4 [json_name = "storeIdentifer", deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getStoreIdentifer()
    {
        if ($this->store_identifer !== '') {
            @trigger_error('store_identifer is deprecated.', E_USER_DEPRECATED);
        }
        return $this->store_identifer;
    }

    /**
     * Generated from protobuf field <code>string store_identifer = 4 [json_name = "storeIdentifer", deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setStoreIdentifer($var)
    {
        @trigger_error('store_identifer is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->store_identifer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string store_identifier = 5 [json_name = "storeIdentifier"];</code>
     * @return string
     */
    public function getStoreIdentifier()
    {
        return $this->store_identifier;
    }

    /**
     * Generated from protobuf field <code>string store_identifier = 5 [json_name = "storeIdentifier"];</code>
     * @param string $var
     * @return $this
     */
    public function setStoreIdentifier($var)
    {
        GPBUtil::checkString($var, True);
        $this->store_identifier = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.SourceAttributes source_attributes = 6 [json_name = "sourceAttributes"];</code>
     * @return \Cerbos\Policy\V1\SourceAttributes|null
     */
    public function getSourceAttributes()
    {
        return $this->source_attributes;
    }

    public function hasSourceAttributes()
    {
        return isset($this->source_attributes);
    }

    public function clearSourceAttributes()
    {
        unset($this->source_attributes);
    }

    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.SourceAttributes source_attributes = 6 [json_name = "sourceAttributes"];</code>
     * @param \Cerbos\Policy\V1\SourceAttributes $var
     * @return $this
     */
    public function setSourceAttributes($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Policy\V1\SourceAttributes::class);
        $this->source_attributes = $var;

        return $this;
    }

}

