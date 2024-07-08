<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/policy/v1/policy.proto

namespace Cerbos\Policy\V1\TestResults;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.policy.v1.TestResults.Suite</code>
 */
class Suite extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string file = 1 [json_name = "file"];</code>
     */
    protected $file = '';
    /**
     * Generated from protobuf field <code>string name = 2 [json_name = "name"];</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>repeated .cerbos.policy.v1.TestResults.Principal principals = 3 [json_name = "principals", deprecated = true];</code>
     * @deprecated
     */
    private $principals;
    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.TestResults.Summary summary = 4 [json_name = "summary"];</code>
     */
    protected $summary = null;
    /**
     * Generated from protobuf field <code>string error = 5 [json_name = "error"];</code>
     */
    protected $error = '';
    /**
     * Generated from protobuf field <code>repeated .cerbos.policy.v1.TestResults.TestCase test_cases = 6 [json_name = "testCases"];</code>
     */
    private $test_cases;
    /**
     * Generated from protobuf field <code>string description = 7 [json_name = "description"];</code>
     */
    protected $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $file
     *     @type string $name
     *     @type array<\Cerbos\Policy\V1\TestResults\Principal>|\Google\Protobuf\Internal\RepeatedField $principals
     *     @type \Cerbos\Policy\V1\TestResults\Summary $summary
     *     @type string $error
     *     @type array<\Cerbos\Policy\V1\TestResults\TestCase>|\Google\Protobuf\Internal\RepeatedField $test_cases
     *     @type string $description
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Policy\V1\Policy::initOnce();
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
     * Generated from protobuf field <code>string name = 2 [json_name = "name"];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2 [json_name = "name"];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.policy.v1.TestResults.Principal principals = 3 [json_name = "principals", deprecated = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     * @deprecated
     */
    public function getPrincipals()
    {
        @trigger_error('principals is deprecated.', E_USER_DEPRECATED);
        return $this->principals;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.policy.v1.TestResults.Principal principals = 3 [json_name = "principals", deprecated = true];</code>
     * @param array<\Cerbos\Policy\V1\TestResults\Principal>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @deprecated
     */
    public function setPrincipals($var)
    {
        @trigger_error('principals is deprecated.', E_USER_DEPRECATED);
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Policy\V1\TestResults\Principal::class);
        $this->principals = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.TestResults.Summary summary = 4 [json_name = "summary"];</code>
     * @return \Cerbos\Policy\V1\TestResults\Summary|null
     */
    public function getSummary()
    {
        return $this->summary;
    }

    public function hasSummary()
    {
        return isset($this->summary);
    }

    public function clearSummary()
    {
        unset($this->summary);
    }

    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.TestResults.Summary summary = 4 [json_name = "summary"];</code>
     * @param \Cerbos\Policy\V1\TestResults\Summary $var
     * @return $this
     */
    public function setSummary($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Policy\V1\TestResults\Summary::class);
        $this->summary = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string error = 5 [json_name = "error"];</code>
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Generated from protobuf field <code>string error = 5 [json_name = "error"];</code>
     * @param string $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->error = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.policy.v1.TestResults.TestCase test_cases = 6 [json_name = "testCases"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTestCases()
    {
        return $this->test_cases;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.policy.v1.TestResults.TestCase test_cases = 6 [json_name = "testCases"];</code>
     * @param array<\Cerbos\Policy\V1\TestResults\TestCase>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTestCases($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Policy\V1\TestResults\TestCase::class);
        $this->test_cases = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 7 [json_name = "description"];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 7 [json_name = "description"];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

