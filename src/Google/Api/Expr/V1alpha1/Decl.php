<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: google/api/expr/v1alpha1/checked.proto

namespace Google\Api\Expr\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * Represents a declaration of a named value or function.
 * A declaration is part of the contract between the expression, the agent
 * evaluating that expression, and the caller requesting evaluation.
 *
 * Generated from protobuf message <code>google.api.expr.v1alpha1.Decl</code>
 */
class Decl extends \Google\Protobuf\Internal\Message
{
    /**
     * The fully qualified name of the declaration.
     * Declarations are organized in containers and this represents the full path
     * to the declaration in its container, as in `google.api.expr.Decl`.
     * Declarations used as
     * [FunctionDecl.Overload][google.api.expr.v1alpha1.Decl.FunctionDecl.Overload]
     * parameters may or may not have a name depending on whether the overload is
     * function declaration or a function definition containing a result
     * [Expr][google.api.expr.v1alpha1.Expr].
     *
     * Generated from protobuf field <code>string name = 1 [json_name = "name"];</code>
     */
    protected $name = '';
    protected $decl_kind;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The fully qualified name of the declaration.
     *           Declarations are organized in containers and this represents the full path
     *           to the declaration in its container, as in `google.api.expr.Decl`.
     *           Declarations used as
     *           [FunctionDecl.Overload][google.api.expr.v1alpha1.Decl.FunctionDecl.Overload]
     *           parameters may or may not have a name depending on whether the overload is
     *           function declaration or a function definition containing a result
     *           [Expr][google.api.expr.v1alpha1.Expr].
     *     @type \Google\Api\Expr\V1alpha1\Decl\IdentDecl $ident
     *           Identifier declaration.
     *     @type \Google\Api\Expr\V1alpha1\Decl\FunctionDecl $function
     *           Function declaration.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Expr\V1Alpha1\Checked::initOnce();
        parent::__construct($data);
    }

    /**
     * The fully qualified name of the declaration.
     * Declarations are organized in containers and this represents the full path
     * to the declaration in its container, as in `google.api.expr.Decl`.
     * Declarations used as
     * [FunctionDecl.Overload][google.api.expr.v1alpha1.Decl.FunctionDecl.Overload]
     * parameters may or may not have a name depending on whether the overload is
     * function declaration or a function definition containing a result
     * [Expr][google.api.expr.v1alpha1.Expr].
     *
     * Generated from protobuf field <code>string name = 1 [json_name = "name"];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The fully qualified name of the declaration.
     * Declarations are organized in containers and this represents the full path
     * to the declaration in its container, as in `google.api.expr.Decl`.
     * Declarations used as
     * [FunctionDecl.Overload][google.api.expr.v1alpha1.Decl.FunctionDecl.Overload]
     * parameters may or may not have a name depending on whether the overload is
     * function declaration or a function definition containing a result
     * [Expr][google.api.expr.v1alpha1.Expr].
     *
     * Generated from protobuf field <code>string name = 1 [json_name = "name"];</code>
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
     * Identifier declaration.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Decl.IdentDecl ident = 2 [json_name = "ident"];</code>
     * @return \Google\Api\Expr\V1alpha1\Decl\IdentDecl|null
     */
    public function getIdent()
    {
        return $this->readOneof(2);
    }

    public function hasIdent()
    {
        return $this->hasOneof(2);
    }

    /**
     * Identifier declaration.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Decl.IdentDecl ident = 2 [json_name = "ident"];</code>
     * @param \Google\Api\Expr\V1alpha1\Decl\IdentDecl $var
     * @return $this
     */
    public function setIdent($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Expr\V1alpha1\Decl\IdentDecl::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Function declaration.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Decl.FunctionDecl function = 3 [json_name = "function"];</code>
     * @return \Google\Api\Expr\V1alpha1\Decl\FunctionDecl|null
     */
    public function getFunction()
    {
        return $this->readOneof(3);
    }

    public function hasFunction()
    {
        return $this->hasOneof(3);
    }

    /**
     * Function declaration.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Decl.FunctionDecl function = 3 [json_name = "function"];</code>
     * @param \Google\Api\Expr\V1alpha1\Decl\FunctionDecl $var
     * @return $this
     */
    public function setFunction($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Expr\V1alpha1\Decl\FunctionDecl::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getDeclKind()
    {
        return $this->whichOneof("decl_kind");
    }

}

