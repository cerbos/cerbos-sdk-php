<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cerbos/response/v1/response.proto

namespace Cerbos\Response\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.response.v1.ServerInfoResponse</code>
 */
class ServerInfoResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string version = 1 [json_name = "version"];</code>
     */
    protected $version = '';
    /**
     * Generated from protobuf field <code>string commit = 2 [json_name = "commit"];</code>
     */
    protected $commit = '';
    /**
     * Generated from protobuf field <code>string build_date = 3 [json_name = "buildDate"];</code>
     */
    protected $build_date = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $version
     *     @type string $commit
     *     @type string $build_date
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Response\V1\Response::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string version = 1 [json_name = "version"];</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Generated from protobuf field <code>string version = 1 [json_name = "version"];</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string commit = 2 [json_name = "commit"];</code>
     * @return string
     */
    public function getCommit()
    {
        return $this->commit;
    }

    /**
     * Generated from protobuf field <code>string commit = 2 [json_name = "commit"];</code>
     * @param string $var
     * @return $this
     */
    public function setCommit($var)
    {
        GPBUtil::checkString($var, True);
        $this->commit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string build_date = 3 [json_name = "buildDate"];</code>
     * @return string
     */
    public function getBuildDate()
    {
        return $this->build_date;
    }

    /**
     * Generated from protobuf field <code>string build_date = 3 [json_name = "buildDate"];</code>
     * @param string $var
     * @return $this
     */
    public function setBuildDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->build_date = $var;

        return $this;
    }

}

