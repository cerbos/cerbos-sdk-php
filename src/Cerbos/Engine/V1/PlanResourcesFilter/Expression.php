<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/engine/v1/engine.proto

namespace Cerbos\Engine\V1\PlanResourcesFilter;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.engine.v1.PlanResourcesFilter.Expression</code>
 */
class Expression extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string operator = 1 [json_name = "operator", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $operator = '';
    /**
     * Generated from protobuf field <code>repeated .cerbos.engine.v1.PlanResourcesFilter.Expression.Operand operands = 2 [json_name = "operands"];</code>
     */
    private $operands;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $operator
     *     @type array<\Cerbos\Engine\V1\PlanResourcesFilter\Expression\Operand>|\Google\Protobuf\Internal\RepeatedField $operands
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Engine\V1\Engine::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string operator = 1 [json_name = "operator", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Generated from protobuf field <code>string operator = 1 [json_name = "operator", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setOperator($var)
    {
        GPBUtil::checkString($var, True);
        $this->operator = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.engine.v1.PlanResourcesFilter.Expression.Operand operands = 2 [json_name = "operands"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOperands()
    {
        return $this->operands;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.engine.v1.PlanResourcesFilter.Expression.Operand operands = 2 [json_name = "operands"];</code>
     * @param array<\Cerbos\Engine\V1\PlanResourcesFilter\Expression\Operand>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOperands($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Engine\V1\PlanResourcesFilter\Expression\Operand::class);
        $this->operands = $arr;

        return $this;
    }

}

