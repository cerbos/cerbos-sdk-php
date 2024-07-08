<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/engine/v1/engine.proto

namespace Cerbos\Engine\V1\Trace\Event;

use UnexpectedValueException;

/**
 * Protobuf type <code>cerbos.engine.v1.Trace.Event.Status</code>
 */
class Status
{
    /**
     * Generated from protobuf enum <code>STATUS_UNSPECIFIED = 0;</code>
     */
    const STATUS_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>STATUS_ACTIVATED = 1;</code>
     */
    const STATUS_ACTIVATED = 1;
    /**
     * Generated from protobuf enum <code>STATUS_SKIPPED = 2;</code>
     */
    const STATUS_SKIPPED = 2;

    private static $valueToName = [
        self::STATUS_UNSPECIFIED => 'STATUS_UNSPECIFIED',
        self::STATUS_ACTIVATED => 'STATUS_ACTIVATED',
        self::STATUS_SKIPPED => 'STATUS_SKIPPED',
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

