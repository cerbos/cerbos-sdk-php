<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/policy/v1/policy.proto

namespace Cerbos\Policy\V1\TestResults;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * Generated from protobuf message <code>cerbos.policy.v1.TestResults.Summary</code>
 */
class Summary extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.TestResults.Result overall_result = 1 [json_name = "overallResult"];</code>
     */
    protected $overall_result = 0;
    /**
     * Generated from protobuf field <code>uint32 tests_count = 2 [json_name = "testsCount"];</code>
     */
    protected $tests_count = 0;
    /**
     * Generated from protobuf field <code>repeated .cerbos.policy.v1.TestResults.Tally result_counts = 3 [json_name = "resultCounts"];</code>
     */
    private $result_counts;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $overall_result
     *     @type int $tests_count
     *     @type \Cerbos\Policy\V1\TestResults\Tally[] $result_counts
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Policy\V1\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.TestResults.Result overall_result = 1 [json_name = "overallResult"];</code>
     * @return int
     */
    public function getOverallResult()
    {
        return $this->overall_result;
    }

    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.TestResults.Result overall_result = 1 [json_name = "overallResult"];</code>
     * @param int $var
     * @return $this
     */
    public function setOverallResult($var)
    {
        GPBUtil::checkEnum($var, \Cerbos\Policy\V1\TestResults\Result::class);
        $this->overall_result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 tests_count = 2 [json_name = "testsCount"];</code>
     * @return int
     */
    public function getTestsCount()
    {
        return $this->tests_count;
    }

    /**
     * Generated from protobuf field <code>uint32 tests_count = 2 [json_name = "testsCount"];</code>
     * @param int $var
     * @return $this
     */
    public function setTestsCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->tests_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.policy.v1.TestResults.Tally result_counts = 3 [json_name = "resultCounts"];</code>
     * @return RepeatedField<\Cerbos\Policy\V1\TestResults\Tally>
     */
    public function getResultCounts()
    {
        return $this->result_counts;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.policy.v1.TestResults.Tally result_counts = 3 [json_name = "resultCounts"];</code>
     * @param \Cerbos\Policy\V1\TestResults\Tally[] $var
     * @return $this
     */
    public function setResultCounts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Policy\V1\TestResults\Tally::class);
        $this->result_counts = $arr;

        return $this;
    }

}

