<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: buf/validate/priv/private.proto

namespace GPBMetadata\Buf\Validate\Priv;

class PBPrivate
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
buf/validate/priv/private.protobuf.validate.priv google/protobuf/descriptor.proto"C
FieldConstraints/
cel (2.buf.validate.priv.ConstraintRcel"V

Constraint
id (	Rid
message (	Rmessage

expression (	R
expressionBw
build.buf.validate.privBPrivateProtoPZLbuf.build/gen/go/bufbuild/protovalidate/protocolbuffers/go/buf/validate/privbproto3'
        , true);

        static::$is_initialized = true;
    }
}
