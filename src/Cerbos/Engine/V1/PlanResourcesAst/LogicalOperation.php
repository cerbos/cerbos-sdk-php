<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/engine/v1/engine.proto

namespace Cerbos\Engine\V1\PlanResourcesAst;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * Generated from protobuf message <code>cerbos.engine.v1.PlanResourcesAst.LogicalOperation</code>
 */
class LogicalOperation extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.PlanResourcesAst.LogicalOperation.Operator operator = 1 [json_name = "operator"];</code>
     */
    protected $operator = 0;
    /**
     * Generated from protobuf field <code>repeated .cerbos.engine.v1.PlanResourcesAst.Node nodes = 2 [json_name = "nodes"];</code>
     */
    private $nodes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $operator
     *     @type \Cerbos\Engine\V1\PlanResourcesAst\Node[] $nodes
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Engine\V1\Engine::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.PlanResourcesAst.LogicalOperation.Operator operator = 1 [json_name = "operator"];</code>
     * @return int
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.PlanResourcesAst.LogicalOperation.Operator operator = 1 [json_name = "operator"];</code>
     * @param int $var
     * @return $this
     */
    public function setOperator($var)
    {
        GPBUtil::checkEnum($var, \Cerbos\Engine\V1\PlanResourcesAst\LogicalOperation\Operator::class);
        $this->operator = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.engine.v1.PlanResourcesAst.Node nodes = 2 [json_name = "nodes"];</code>
     * @return RepeatedField<\Cerbos\Engine\V1\PlanResourcesAst\Node>
     */
    public function getNodes()
    {
        return $this->nodes;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.engine.v1.PlanResourcesAst.Node nodes = 2 [json_name = "nodes"];</code>
     * @param \Cerbos\Engine\V1\PlanResourcesAst\Node[] $var
     * @return $this
     */
    public function setNodes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Engine\V1\PlanResourcesAst\Node::class);
        $this->nodes = $arr;

        return $this;
    }

}

