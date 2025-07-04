<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/cloud/store/v1/store.proto

namespace Cerbos\Cloud\Store\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * Generated from protobuf message <code>cerbos.cloud.store.v1.FileError</code>
 */
class FileError extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string file = 1 [json_name = "file"];</code>
     */
    protected $file = '';
    /**
     * Generated from protobuf field <code>.cerbos.cloud.store.v1.FileError.Cause cause = 2 [json_name = "cause"];</code>
     */
    protected $cause = 0;
    /**
     * Generated from protobuf field <code>string details = 3 [json_name = "details"];</code>
     */
    protected $details = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $file
     *     @type int $cause
     *     @type string $details
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Cloud\Store\V1\Store::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string file = 1 [json_name = "file"];</code>
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Generated from protobuf field <code>string file = 1 [json_name = "file"];</code>
     * @param string $var
     * @return $this
     */
    public function setFile($var)
    {
        GPBUtil::checkString($var, True);
        $this->file = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.cloud.store.v1.FileError.Cause cause = 2 [json_name = "cause"];</code>
     * @return int
     */
    public function getCause()
    {
        return $this->cause;
    }

    /**
     * Generated from protobuf field <code>.cerbos.cloud.store.v1.FileError.Cause cause = 2 [json_name = "cause"];</code>
     * @param int $var
     * @return $this
     */
    public function setCause($var)
    {
        GPBUtil::checkEnum($var, \Cerbos\Cloud\Store\V1\FileError\Cause::class);
        $this->cause = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string details = 3 [json_name = "details"];</code>
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Generated from protobuf field <code>string details = 3 [json_name = "details"];</code>
     * @param string $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkString($var, True);
        $this->details = $var;

        return $this;
    }

}

