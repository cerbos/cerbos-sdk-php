<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/cloud/logs/v1/logs.proto

namespace Cerbos\Cloud\Logs\V1\IngestBatch;

use UnexpectedValueException;

/**
 * Protobuf type <code>cerbos.cloud.logs.v1.IngestBatch.EntryKind</code>
 */
class EntryKind
{
    /**
     * Generated from protobuf enum <code>ENTRY_KIND_UNSPECIFIED = 0;</code>
     */
    const ENTRY_KIND_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>ENTRY_KIND_ACCESS_LOG = 1;</code>
     */
    const ENTRY_KIND_ACCESS_LOG = 1;
    /**
     * Generated from protobuf enum <code>ENTRY_KIND_DECISION_LOG = 2;</code>
     */
    const ENTRY_KIND_DECISION_LOG = 2;

    private static $valueToName = [
        self::ENTRY_KIND_UNSPECIFIED => 'ENTRY_KIND_UNSPECIFIED',
        self::ENTRY_KIND_ACCESS_LOG => 'ENTRY_KIND_ACCESS_LOG',
        self::ENTRY_KIND_DECISION_LOG => 'ENTRY_KIND_DECISION_LOG',
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

