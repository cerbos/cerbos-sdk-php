<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
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
            "\x0A\xF4\x02\x0A\x1Fbuf/validate/priv/private.proto\x12\x11buf.validate.priv\x1A google/protobuf/descriptor.proto\"C\x0A\x10FieldConstraints\x12/\x0A\x03cel\x18\x01 \x03(\x0B2\x1D.buf.validate.priv.ConstraintR\x03cel\"V\x0A\x0AConstraint\x12\x0E\x0A\x02id\x18\x01 \x01(\x09R\x02id\x12\x18\x0A\x07message\x18\x02 \x01(\x09R\x07message\x12\x1E\x0A\x0Aexpression\x18\x03 \x01(\x09R\x0AexpressionBw\x0A\x17build.buf.validate.privB\x0CPrivateProtoP\x01ZLbuf.build/gen/go/bufbuild/protovalidate/protocolbuffers/go/buf/validate/privb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

