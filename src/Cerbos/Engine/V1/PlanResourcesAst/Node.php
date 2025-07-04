<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/engine/v1/engine.proto

namespace Cerbos\Engine\V1\PlanResourcesAst;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * Generated from protobuf message <code>cerbos.engine.v1.PlanResourcesAst.Node</code>
 */
class Node extends \Google\Protobuf\Internal\Message
{
    protected $node;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cerbos\Engine\V1\PlanResourcesAst\LogicalOperation $logical_operation
     *     @type \Google\Api\Expr\V1alpha1\CheckedExpr $expression
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Engine\V1\Engine::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.PlanResourcesAst.LogicalOperation logical_operation = 1 [json_name = "logicalOperation"];</code>
     * @return \Cerbos\Engine\V1\PlanResourcesAst\LogicalOperation|null
     */
    public function getLogicalOperation()
    {
        return $this->readOneof(1);
    }

    public function hasLogicalOperation()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.PlanResourcesAst.LogicalOperation logical_operation = 1 [json_name = "logicalOperation"];</code>
     * @param \Cerbos\Engine\V1\PlanResourcesAst\LogicalOperation $var
     * @return $this
     */
    public function setLogicalOperation($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Engine\V1\PlanResourcesAst\LogicalOperation::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.CheckedExpr expression = 2 [json_name = "expression"];</code>
     * @return \Google\Api\Expr\V1alpha1\CheckedExpr|null
     */
    public function getExpression()
    {
        return $this->readOneof(2);
    }

    public function hasExpression()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.CheckedExpr expression = 2 [json_name = "expression"];</code>
     * @param \Google\Api\Expr\V1alpha1\CheckedExpr $var
     * @return $this
     */
    public function setExpression($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Expr\V1alpha1\CheckedExpr::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getNode()
    {
        return $this->whichOneof("node");
    }

}

