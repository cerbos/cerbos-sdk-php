<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: google/api/expr/v1alpha1/checked.proto

namespace GPBMetadata\Google\Api\Expr\V1Alpha1;

class Checked
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Expr\V1Alpha1\Syntax::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\x8D\x18\x0A&google/api/expr/v1alpha1/checked.proto\x12\x18google.api.expr.v1alpha1\x1A\x1Bgoogle/protobuf/empty.proto\x1A\x1Cgoogle/protobuf/struct.proto\"\x9A\x04\x0A\x0BCheckedExpr\x12\\\x0A\x0Dreference_map\x18\x02 \x03(\x0B27.google.api.expr.v1alpha1.CheckedExpr.ReferenceMapEntryR\x0CreferenceMap\x12M\x0A\x08type_map\x18\x03 \x03(\x0B22.google.api.expr.v1alpha1.CheckedExpr.TypeMapEntryR\x07typeMap\x12E\x0A\x0Bsource_info\x18\x05 \x01(\x0B2\$.google.api.expr.v1alpha1.SourceInfoR\x0AsourceInfo\x12!\x0A\x0Cexpr_version\x18\x06 \x01(\x09R\x0BexprVersion\x122\x0A\x04expr\x18\x04 \x01(\x0B2\x1E.google.api.expr.v1alpha1.ExprR\x04expr\x1Ad\x0A\x11ReferenceMapEntry\x12\x10\x0A\x03key\x18\x01 \x01(\x03R\x03key\x129\x0A\x05value\x18\x02 \x01(\x0B2#.google.api.expr.v1alpha1.ReferenceR\x05value:\x028\x01\x1AZ\x0A\x0CTypeMapEntry\x12\x10\x0A\x03key\x18\x01 \x01(\x03R\x03key\x124\x0A\x05value\x18\x02 \x01(\x0B2\x1E.google.api.expr.v1alpha1.TypeR\x05value:\x028\x01\"\xC8\x0B\x0A\x04Type\x12*\x0A\x03dyn\x18\x01 \x01(\x0B2\x16.google.protobuf.EmptyH\x00R\x03dyn\x120\x0A\x04null\x18\x02 \x01(\x0E2\x1A.google.protobuf.NullValueH\x00R\x04null\x12L\x0A\x09primitive\x18\x03 \x01(\x0E2,.google.api.expr.v1alpha1.Type.PrimitiveTypeH\x00R\x09primitive\x12H\x0A\x07wrapper\x18\x04 \x01(\x0E2,.google.api.expr.v1alpha1.Type.PrimitiveTypeH\x00R\x07wrapper\x12M\x0A\x0Awell_known\x18\x05 \x01(\x0E2,.google.api.expr.v1alpha1.Type.WellKnownTypeH\x00R\x09wellKnown\x12F\x0A\x09list_type\x18\x06 \x01(\x0B2'.google.api.expr.v1alpha1.Type.ListTypeH\x00R\x08listType\x12C\x0A\x08map_type\x18\x07 \x01(\x0B2&.google.api.expr.v1alpha1.Type.MapTypeH\x00R\x07mapType\x12I\x0A\x08function\x18\x08 \x01(\x0B2+.google.api.expr.v1alpha1.Type.FunctionTypeH\x00R\x08function\x12#\x0A\x0Cmessage_type\x18\x09 \x01(\x09H\x00R\x0BmessageType\x12\x1F\x0A\x0Atype_param\x18\x0A \x01(\x09H\x00R\x09typeParam\x124\x0A\x04type\x18\x0B \x01(\x0B2\x1E.google.api.expr.v1alpha1.TypeH\x00R\x04type\x12.\x0A\x05error\x18\x0C \x01(\x0B2\x16.google.protobuf.EmptyH\x00R\x05error\x12R\x0A\x0Dabstract_type\x18\x0E \x01(\x0B2+.google.api.expr.v1alpha1.Type.AbstractTypeH\x00R\x0CabstractType\x1AG\x0A\x08ListType\x12;\x0A\x09elem_type\x18\x01 \x01(\x0B2\x1E.google.api.expr.v1alpha1.TypeR\x08elemType\x1A\x83\x01\x0A\x07MapType\x129\x0A\x08key_type\x18\x01 \x01(\x0B2\x1E.google.api.expr.v1alpha1.TypeR\x07keyType\x12=\x0A\x0Avalue_type\x18\x02 \x01(\x0B2\x1E.google.api.expr.v1alpha1.TypeR\x09valueType\x1A\x8C\x01\x0A\x0CFunctionType\x12?\x0A\x0Bresult_type\x18\x01 \x01(\x0B2\x1E.google.api.expr.v1alpha1.TypeR\x0AresultType\x12;\x0A\x09arg_types\x18\x02 \x03(\x0B2\x1E.google.api.expr.v1alpha1.TypeR\x08argTypes\x1Ak\x0A\x0CAbstractType\x12\x12\x0A\x04name\x18\x01 \x01(\x09R\x04name\x12G\x0A\x0Fparameter_types\x18\x02 \x03(\x0B2\x1E.google.api.expr.v1alpha1.TypeR\x0EparameterTypes\"s\x0A\x0DPrimitiveType\x12\x1E\x0A\x1APRIMITIVE_TYPE_UNSPECIFIED\x10\x00\x12\x08\x0A\x04BOOL\x10\x01\x12\x09\x0A\x05INT64\x10\x02\x12\x0A\x0A\x06UINT64\x10\x03\x12\x0A\x0A\x06DOUBLE\x10\x04\x12\x0A\x0A\x06STRING\x10\x05\x12\x09\x0A\x05BYTES\x10\x06\"V\x0A\x0DWellKnownType\x12\x1F\x0A\x1BWELL_KNOWN_TYPE_UNSPECIFIED\x10\x00\x12\x07\x0A\x03ANY\x10\x01\x12\x0D\x0A\x09TIMESTAMP\x10\x02\x12\x0C\x0A\x08DURATION\x10\x03B\x0B\x0A\x09type_kind\"\xB3\x05\x0A\x04Decl\x12\x12\x0A\x04name\x18\x01 \x01(\x09R\x04name\x12@\x0A\x05ident\x18\x02 \x01(\x0B2(.google.api.expr.v1alpha1.Decl.IdentDeclH\x00R\x05ident\x12I\x0A\x08function\x18\x03 \x01(\x0B2+.google.api.expr.v1alpha1.Decl.FunctionDeclH\x00R\x08function\x1A\x8B\x01\x0A\x09IdentDecl\x122\x0A\x04type\x18\x01 \x01(\x0B2\x1E.google.api.expr.v1alpha1.TypeR\x04type\x128\x0A\x05value\x18\x02 \x01(\x0B2\".google.api.expr.v1alpha1.ConstantR\x05value\x12\x10\x0A\x03doc\x18\x03 \x01(\x09R\x03doc\x1A\xEE\x02\x0A\x0CFunctionDecl\x12R\x0A\x09overloads\x18\x01 \x03(\x0B24.google.api.expr.v1alpha1.Decl.FunctionDecl.OverloadR\x09overloads\x1A\x89\x02\x0A\x08Overload\x12\x1F\x0A\x0Boverload_id\x18\x01 \x01(\x09R\x0AoverloadId\x126\x0A\x06params\x18\x02 \x03(\x0B2\x1E.google.api.expr.v1alpha1.TypeR\x06params\x12\x1F\x0A\x0Btype_params\x18\x03 \x03(\x09R\x0AtypeParams\x12?\x0A\x0Bresult_type\x18\x04 \x01(\x0B2\x1E.google.api.expr.v1alpha1.TypeR\x0AresultType\x120\x0A\x14is_instance_function\x18\x05 \x01(\x08R\x12isInstanceFunction\x12\x10\x0A\x03doc\x18\x06 \x01(\x09R\x03docB\x0B\x0A\x09decl_kind\"z\x0A\x09Reference\x12\x12\x0A\x04name\x18\x01 \x01(\x09R\x04name\x12\x1F\x0A\x0Boverload_id\x18\x03 \x03(\x09R\x0AoverloadId\x128\x0A\x05value\x18\x04 \x01(\x0B2\".google.api.expr.v1alpha1.ConstantR\x05valueBl\x0A\x1Ccom.google.api.expr.v1alpha1B\x09DeclProtoP\x01Z<google.golang.org/genproto/googleapis/api/expr/v1alpha1;expr\xF8\x01\x01b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

