<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/engine/v1/engine.proto

namespace Cerbos\Engine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.engine.v1.PlanResourcesAst</code>
 */
class PlanResourcesAst extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.PlanResourcesAst.Node filter_ast = 1 [json_name = "filterAst"];</code>
     */
    protected $filter_ast = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cerbos\Engine\V1\PlanResourcesAst\Node $filter_ast
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Engine\V1\Engine::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.PlanResourcesAst.Node filter_ast = 1 [json_name = "filterAst"];</code>
     * @return \Cerbos\Engine\V1\PlanResourcesAst\Node|null
     */
    public function getFilterAst()
    {
        return $this->filter_ast;
    }

    public function hasFilterAst()
    {
        return isset($this->filter_ast);
    }

    public function clearFilterAst()
    {
        unset($this->filter_ast);
    }

    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.PlanResourcesAst.Node filter_ast = 1 [json_name = "filterAst"];</code>
     * @param \Cerbos\Engine\V1\PlanResourcesAst\Node $var
     * @return $this
     */
    public function setFilterAst($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Engine\V1\PlanResourcesAst\Node::class);
        $this->filter_ast = $var;

        return $this;
    }

}

