<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: google/api/annotations.proto

namespace GPBMetadata\Google\Api;

class Annotations
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xC4\x01\x0A\x1Cgoogle/api/annotations.proto\x12\x0Agoogle.api\x1A google/protobuf/descriptor.protoBn\x0A\x0Ecom.google.apiB\x10AnnotationsProtoP\x01ZAgoogle.golang.org/genproto/googleapis/api/annotations;annotations\xA2\x02\x04GAPIb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

