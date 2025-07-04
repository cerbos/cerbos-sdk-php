<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/audit/v1/audit.proto

namespace GPBMetadata\Cerbos\Audit\V1;

class Audit
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Cerbos\Engine\V1\Engine::initOnce();
        \GPBMetadata\Cerbos\Policy\V1\Policy::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\x99\x10\x0A\x1Bcerbos/audit/v1/audit.proto\x12\x0Fcerbos.audit.v1\x1A\x1Dcerbos/policy/v1/policy.proto\x1A\x1Fgoogle/protobuf/timestamp.proto\"\x8A\x03\x0A\x0EAccessLogEntry\x12\x17\x0A\x07call_id\x18\x01 \x01(\x09R\x06callId\x128\x0A\x09timestamp\x18\x02 \x01(\x0B2\x1A.google.protobuf.TimestampR\x09timestamp\x12)\x0A\x04peer\x18\x03 \x01(\x0B2\x15.cerbos.audit.v1.PeerR\x04peer\x12I\x0A\x08metadata\x18\x04 \x03(\x0B2-.cerbos.audit.v1.AccessLogEntry.MetadataEntryR\x08metadata\x12\x16\x0A\x06method\x18\x05 \x01(\x09R\x06method\x12\x1F\x0A\x0Bstatus_code\x18\x06 \x01(\x0DR\x0AstatusCode\x12\x1C\x0A\x09oversized\x18\x07 \x01(\x08R\x09oversized\x1AX\x0A\x0DMetadataEntry\x12\x10\x0A\x03key\x18\x01 \x01(\x09R\x03key\x121\x0A\x05value\x18\x02 \x01(\x0B2\x1B.cerbos.audit.v1.MetaValuesR\x05value:\x028\x01\"\xA0\x08\x0A\x10DecisionLogEntry\x12\x17\x0A\x07call_id\x18\x01 \x01(\x09R\x06callId\x128\x0A\x09timestamp\x18\x02 \x01(\x0B2\x1A.google.protobuf.TimestampR\x09timestamp\x12)\x0A\x04peer\x18\x03 \x01(\x0B2\x15.cerbos.audit.v1.PeerR\x04peer\x128\x0A\x06inputs\x18\x04 \x03(\x0B2\x1C.cerbos.engine.v1.CheckInputB\x02\x18\x01R\x06inputs\x12;\x0A\x07outputs\x18\x05 \x03(\x0B2\x1D.cerbos.engine.v1.CheckOutputB\x02\x18\x01R\x07outputs\x12\x18\x0A\x05error\x18\x06 \x01(\x09B\x02\x18\x01R\x05error\x12[\x0A\x0Fcheck_resources\x18\x07 \x01(\x0B20.cerbos.audit.v1.DecisionLogEntry.CheckResourcesH\x00R\x0EcheckResources\x12X\x0A\x0Eplan_resources\x18\x08 \x01(\x0B2/.cerbos.audit.v1.DecisionLogEntry.PlanResourcesH\x00R\x0DplanResources\x12K\x0A\x08metadata\x18\x0F \x03(\x0B2/.cerbos.audit.v1.DecisionLogEntry.MetadataEntryR\x08metadata\x12<\x0A\x0Baudit_trail\x18\x10 \x01(\x0B2\x1B.cerbos.audit.v1.AuditTrailR\x0AauditTrail\x12\x1C\x0A\x09oversized\x18\x11 \x01(\x08R\x09oversized\x1A\x95\x01\x0A\x0ECheckResources\x124\x0A\x06inputs\x18\x01 \x03(\x0B2\x1C.cerbos.engine.v1.CheckInputR\x06inputs\x127\x0A\x07outputs\x18\x02 \x03(\x0B2\x1D.cerbos.engine.v1.CheckOutputR\x07outputs\x12\x14\x0A\x05error\x18\x03 \x01(\x09R\x05error\x1A\xA0\x01\x0A\x0DPlanResources\x12:\x0A\x05input\x18\x01 \x01(\x0B2\$.cerbos.engine.v1.PlanResourcesInputR\x05input\x12=\x0A\x06output\x18\x02 \x01(\x0B2%.cerbos.engine.v1.PlanResourcesOutputR\x06output\x12\x14\x0A\x05error\x18\x03 \x01(\x09R\x05error\x1AX\x0A\x0DMetadataEntry\x12\x10\x0A\x03key\x18\x01 \x01(\x09R\x03key\x121\x0A\x05value\x18\x02 \x01(\x0B2\x1B.cerbos.audit.v1.MetaValuesR\x05value:\x028\x01B\x08\x0A\x06method\"\$\x0A\x0AMetaValues\x12\x16\x0A\x06values\x18\x01 \x03(\x09R\x06values\"\x81\x01\x0A\x04Peer\x12\x18\x0A\x07address\x18\x01 \x01(\x09R\x07address\x12\x1B\x0A\x09auth_info\x18\x02 \x01(\x09R\x08authInfo\x12\x1D\x0A\x0Auser_agent\x18\x03 \x01(\x09R\x09userAgent\x12#\x0A\x0Dforwarded_for\x18\x04 \x01(\x09R\x0CforwardedFor\"\xD9\x01\x0A\x0AAuditTrail\x12a\x0A\x12effective_policies\x18\x01 \x03(\x0B22.cerbos.audit.v1.AuditTrail.EffectivePoliciesEntryR\x11effectivePolicies\x1Ah\x0A\x16EffectivePoliciesEntry\x12\x10\x0A\x03key\x18\x01 \x01(\x09R\x03key\x128\x0A\x05value\x18\x02 \x01(\x0B2\".cerbos.policy.v1.SourceAttributesR\x05value:\x028\x01Bk\x0A\x17dev.cerbos.api.v1.auditZ:github.com/cerbos/cerbos/api/genpb/cerbos/audit/v1;auditv1\xAA\x02\x13Cerbos.Api.V1.Auditb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

