<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: buf/validate/expression.proto

namespace GPBMetadata\Buf\Validate;

class Expression
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
buf/validate/expression.protobuf.validate"V

Constraint
id (	Rid
message (	Rmessage

expression (	R
expression"E

Violations7

violations (2.buf.validate.ViolationR
violations"�
	Violation

field_path (	R	fieldPath#

message (	Rmessage
for_key (RforKeyBp
build.buf.validateBExpressionProtoPZGbuf.build/gen/go/bufbuild/protovalidate/protocolbuffers/go/buf/validatebproto3'
        , true);

        static::$is_initialized = true;
    }
}
