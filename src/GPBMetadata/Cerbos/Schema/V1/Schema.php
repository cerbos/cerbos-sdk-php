<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cerbos/schema/v1/schema.proto

namespace GPBMetadata\Cerbos\Schema\V1;

class Schema
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Buf\Validate\Validate::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\ProtocGenOpenapiv2\Options\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
cerbos/schema/v1/schema.protocerbos.schema.v1google/api/field_behavior.proto.protoc-gen-openapiv2/options/annotations.proto"�
ValidationError
path (	Rpath
message (	Rmessage@
source (2(.cerbos.schema.v1.ValidationError.SourceRsource"K
Source
SOURCE_UNSPECIFIED 
SOURCE_PRINCIPAL
SOURCE_RESOURCE"�
SchemaX
id (	BH�A42 Unique identifier for the schemaJ"principal.json"�A�H
�r�Ridm

definition (BM�A<2JSON schema definitionJ"{"type":"object", "properties":{}}�A�H�z
R
definitionBo
dev.cerbos.api.v1.schemaZ<github.com/cerbos/cerbos/api/genpb/cerbos/schema/v1;schemav1�Cerbos.Api.V1.Schemabproto3'
        , true);

        static::$is_initialized = true;
    }
}

