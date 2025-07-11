<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/policy/v1/policy.proto

namespace Cerbos\Policy\V1\TestResults;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * Generated from protobuf message <code>cerbos.policy.v1.TestResults.OutputFailure</code>
 */
class OutputFailure extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string src = 1 [json_name = "src"];</code>
     */
    protected $src = '';
    protected $outcome;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $src
     *     @type \Cerbos\Policy\V1\TestResults\OutputFailure\MismatchedValue $mismatched
     *     @type \Cerbos\Policy\V1\TestResults\OutputFailure\MissingValue $missing
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Policy\V1\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string src = 1 [json_name = "src"];</code>
     * @return string
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * Generated from protobuf field <code>string src = 1 [json_name = "src"];</code>
     * @param string $var
     * @return $this
     */
    public function setSrc($var)
    {
        GPBUtil::checkString($var, True);
        $this->src = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.TestResults.OutputFailure.MismatchedValue mismatched = 2 [json_name = "mismatched"];</code>
     * @return \Cerbos\Policy\V1\TestResults\OutputFailure\MismatchedValue|null
     */
    public function getMismatched()
    {
        return $this->readOneof(2);
    }

    public function hasMismatched()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.TestResults.OutputFailure.MismatchedValue mismatched = 2 [json_name = "mismatched"];</code>
     * @param \Cerbos\Policy\V1\TestResults\OutputFailure\MismatchedValue $var
     * @return $this
     */
    public function setMismatched($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Policy\V1\TestResults\OutputFailure\MismatchedValue::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.TestResults.OutputFailure.MissingValue missing = 3 [json_name = "missing"];</code>
     * @return \Cerbos\Policy\V1\TestResults\OutputFailure\MissingValue|null
     */
    public function getMissing()
    {
        return $this->readOneof(3);
    }

    public function hasMissing()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.TestResults.OutputFailure.MissingValue missing = 3 [json_name = "missing"];</code>
     * @param \Cerbos\Policy\V1\TestResults\OutputFailure\MissingValue $var
     * @return $this
     */
    public function setMissing($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Policy\V1\TestResults\OutputFailure\MissingValue::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOutcome()
    {
        return $this->whichOneof("outcome");
    }

}

