<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cerbos/engine/v1/engine.proto

namespace Cerbos\Engine\V1\Trace\Component;

use UnexpectedValueException;

/**
 * Protobuf type <code>cerbos.engine.v1.Trace.Component.Kind</code>
 */
class Kind
{
    /**
     * Generated from protobuf enum <code>KIND_UNSPECIFIED = 0;</code>
     */
    const KIND_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>KIND_ACTION = 1;</code>
     */
    const KIND_ACTION = 1;
    /**
     * Generated from protobuf enum <code>KIND_CONDITION_ALL = 2;</code>
     */
    const KIND_CONDITION_ALL = 2;
    /**
     * Generated from protobuf enum <code>KIND_CONDITION_ANY = 3;</code>
     */
    const KIND_CONDITION_ANY = 3;
    /**
     * Generated from protobuf enum <code>KIND_CONDITION_NONE = 4;</code>
     */
    const KIND_CONDITION_NONE = 4;
    /**
     * Generated from protobuf enum <code>KIND_CONDITION = 5;</code>
     */
    const KIND_CONDITION = 5;
    /**
     * Generated from protobuf enum <code>KIND_DERIVED_ROLE = 6;</code>
     */
    const KIND_DERIVED_ROLE = 6;
    /**
     * Generated from protobuf enum <code>KIND_EXPR = 7;</code>
     */
    const KIND_EXPR = 7;
    /**
     * Generated from protobuf enum <code>KIND_POLICY = 8;</code>
     */
    const KIND_POLICY = 8;
    /**
     * Generated from protobuf enum <code>KIND_RESOURCE = 9;</code>
     */
    const KIND_RESOURCE = 9;
    /**
     * Generated from protobuf enum <code>KIND_RULE = 10;</code>
     */
    const KIND_RULE = 10;
    /**
     * Generated from protobuf enum <code>KIND_SCOPE = 11;</code>
     */
    const KIND_SCOPE = 11;
    /**
     * Generated from protobuf enum <code>KIND_VARIABLE = 12;</code>
     */
    const KIND_VARIABLE = 12;
    /**
     * Generated from protobuf enum <code>KIND_VARIABLES = 13;</code>
     */
    const KIND_VARIABLES = 13;
    /**
     * Generated from protobuf enum <code>KIND_OUTPUT = 14;</code>
     */
    const KIND_OUTPUT = 14;

    private static $valueToName = [
        self::KIND_UNSPECIFIED => 'KIND_UNSPECIFIED',
        self::KIND_ACTION => 'KIND_ACTION',
        self::KIND_CONDITION_ALL => 'KIND_CONDITION_ALL',
        self::KIND_CONDITION_ANY => 'KIND_CONDITION_ANY',
        self::KIND_CONDITION_NONE => 'KIND_CONDITION_NONE',
        self::KIND_CONDITION => 'KIND_CONDITION',
        self::KIND_DERIVED_ROLE => 'KIND_DERIVED_ROLE',
        self::KIND_EXPR => 'KIND_EXPR',
        self::KIND_POLICY => 'KIND_POLICY',
        self::KIND_RESOURCE => 'KIND_RESOURCE',
        self::KIND_RULE => 'KIND_RULE',
        self::KIND_SCOPE => 'KIND_SCOPE',
        self::KIND_VARIABLE => 'KIND_VARIABLE',
        self::KIND_VARIABLES => 'KIND_VARIABLES',
        self::KIND_OUTPUT => 'KIND_OUTPUT',
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
class_alias(Kind::class, \Cerbos\Engine\V1\Trace_Component_Kind::class);

