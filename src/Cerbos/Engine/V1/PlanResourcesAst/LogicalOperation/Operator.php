<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cerbos/engine/v1/engine.proto

namespace Cerbos\Engine\V1\PlanResourcesAst\LogicalOperation;

use UnexpectedValueException;

/**
 * Protobuf type <code>cerbos.engine.v1.PlanResourcesAst.LogicalOperation.Operator</code>
 */
class Operator
{
    /**
     * Generated from protobuf enum <code>OPERATOR_UNSPECIFIED = 0;</code>
     */
    const OPERATOR_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>OPERATOR_AND = 1;</code>
     */
    const OPERATOR_AND = 1;
    /**
     * Generated from protobuf enum <code>OPERATOR_OR = 2;</code>
     */
    const OPERATOR_OR = 2;
    /**
     * Generated from protobuf enum <code>OPERATOR_NOT = 3;</code>
     */
    const OPERATOR_NOT = 3;

    private static $valueToName = [
        self::OPERATOR_UNSPECIFIED => 'OPERATOR_UNSPECIFIED',
        self::OPERATOR_AND => 'OPERATOR_AND',
        self::OPERATOR_OR => 'OPERATOR_OR',
        self::OPERATOR_NOT => 'OPERATOR_NOT',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Operator::class, \Cerbos\Engine\V1\PlanResourcesAst_LogicalOperation_Operator::class);
