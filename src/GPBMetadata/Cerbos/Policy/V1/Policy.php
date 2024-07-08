<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/policy/v1/policy.proto

namespace GPBMetadata\Cerbos\Policy\V1;

class Policy
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Buf\Validate\Validate::initOnce();
        \GPBMetadata\Cerbos\Effect\V1\Effect::initOnce();
        \GPBMetadata\Cerbos\Engine\V1\Engine::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xFBT\x0A\x1Dcerbos/policy/v1/policy.proto\x12\x10cerbos.policy.v1\x1A\x1Dcerbos/effect/v1/effect.proto\x1A\x1Dcerbos/engine/v1/engine.proto\x1A\x1Cgoogle/protobuf/struct.proto\x1A\x1Fgoogle/protobuf/timestamp.proto\x1A\x1Egoogle/protobuf/wrappers.proto\"\xAD\x05\x0A\x06Policy\x12<\x0A\x0Bapi_version\x18\x01 \x01(\x09B\x1B\xBAH\x18r\x13\x0A\x11api.cerbos.dev/v1\xC8\x01\x01R\x0AapiVersion\x12\x1A\x0A\x08disabled\x18\x02 \x01(\x08R\x08disabled\x12 \x0A\x0Bdescription\x18\x03 \x01(\x09R\x0Bdescription\x126\x0A\x08metadata\x18\x04 \x01(\x0B2\x1A.cerbos.policy.v1.MetadataR\x08metadata\x12K\x0A\x0Fresource_policy\x18\x05 \x01(\x0B2 .cerbos.policy.v1.ResourcePolicyH\x00R\x0EresourcePolicy\x12N\x0A\x10principal_policy\x18\x06 \x01(\x0B2!.cerbos.policy.v1.PrincipalPolicyH\x00R\x0FprincipalPolicy\x12E\x0A\x0Dderived_roles\x18\x07 \x01(\x0B2\x1E.cerbos.policy.v1.DerivedRolesH\x00R\x0CderivedRoles\x12N\x0A\x10export_variables\x18\x0A \x01(\x0B2!.cerbos.policy.v1.ExportVariablesH\x00R\x0FexportVariables\x12I\x0A\x09variables\x18\x08 \x03(\x0B2'.cerbos.policy.v1.Policy.VariablesEntryB\x02\x18\x01R\x09variables\x12\x1C\x0A\x0Bjson_schema\x18\x09 \x01(\x09R\x07\$schema\x1A<\x0A\x0EVariablesEntry\x12\x10\x0A\x03key\x18\x01 \x01(\x09R\x03key\x12\x14\x0A\x05value\x18\x02 \x01(\x09R\x05value:\x028\x01B\x14\x0A\x0Bpolicy_type\x12\x05\xBAH\x02\x08\x01\"\xBD\x01\x0A\x10SourceAttributes\x12R\x0A\x0Aattributes\x18\x01 \x03(\x0B22.cerbos.policy.v1.SourceAttributes.AttributesEntryR\x0Aattributes\x1AU\x0A\x0FAttributesEntry\x12\x10\x0A\x03key\x18\x01 \x01(\x09R\x03key\x12,\x0A\x05value\x18\x02 \x01(\x0B2\x16.google.protobuf.ValueR\x05value:\x028\x01\"\x95\x03\x0A\x08Metadata\x12\x1F\x0A\x0Bsource_file\x18\x01 \x01(\x09R\x0AsourceFile\x12M\x0A\x0Bannotations\x18\x02 \x03(\x0B2+.cerbos.policy.v1.Metadata.AnnotationsEntryR\x0Bannotations\x120\x0A\x04hash\x18\x03 \x01(\x0B2\x1C.google.protobuf.UInt64ValueR\x04hash\x12+\x0A\x0Fstore_identifer\x18\x04 \x01(\x09B\x02\x18\x01R\x0EstoreIdentifer\x12)\x0A\x10store_identifier\x18\x05 \x01(\x09R\x0FstoreIdentifier\x12O\x0A\x11source_attributes\x18\x06 \x01(\x0B2\".cerbos.policy.v1.SourceAttributesR\x10sourceAttributes\x1A>\x0A\x10AnnotationsEntry\x12\x10\x0A\x03key\x18\x01 \x01(\x09R\x03key\x12\x14\x0A\x05value\x18\x02 \x01(\x09R\x05value:\x028\x01\"\xB2\x03\x0A\x0EResourcePolicy\x12&\x0A\x08resource\x18\x01 \x01(\x09B\x0A\xBAH\x07r\x02\x10\x01\xC8\x01\x01R\x08resource\x121\x0A\x07version\x18\x02 \x01(\x09B\x17\xBAH\x14r\x0F2\x0D^[[:word:]]+\$\xC8\x01\x01R\x07version\x12Q\x0A\x14import_derived_roles\x18\x03 \x03(\x09B\x1F\xBAH\x1C\x92\x01\x19\x18\x01\"\x15r\x132\x11^[[:word:]\\-\\.]+\$R\x12importDerivedRoles\x124\x0A\x05rules\x18\x04 \x03(\x0B2\x1E.cerbos.policy.v1.ResourceRuleR\x05rules\x12L\x0A\x05scope\x18\x05 \x01(\x09B6\xBAH3r12/^([[:alnum:]][[:word:]\\-]*(\\.[[:word:]\\-]*)*)*\$R\x05scope\x123\x0A\x07schemas\x18\x06 \x01(\x0B2\x19.cerbos.policy.v1.SchemasR\x07schemas\x129\x0A\x09variables\x18\x07 \x01(\x0B2\x1B.cerbos.policy.v1.VariablesR\x09variables\"\x95\x03\x0A\x0CResourceRule\x12-\x0A\x07actions\x18\x01 \x03(\x09B\x13\xBAH\x10\x92\x01\x0A\x08\x01\x18\x01\"\x04r\x02\x10\x01\xC8\x01\x01R\x07actions\x12D\x0A\x0Dderived_roles\x18\x02 \x03(\x09B\x1F\xBAH\x1C\x92\x01\x19\x18\x01\"\x15r\x132\x11^[[:word:]\\-\\.]+\$R\x0CderivedRoles\x12\$\x0A\x05roles\x18\x03 \x03(\x09B\x0E\xBAH\x0B\x92\x01\x08\x18\x01\"\x04r\x02\x10\x01R\x05roles\x129\x0A\x09condition\x18\x04 \x01(\x0B2\x1B.cerbos.policy.v1.ConditionR\x09condition\x12?\x0A\x06effect\x18\x05 \x01(\x0E2\x18.cerbos.effect.v1.EffectB\x0D\xBAH\x0A\x82\x01\x04\x1A\x02\x01\x02\xC8\x01\x01R\x06effect\x12<\x0A\x04name\x18\x06 \x01(\x09B(\xBAH%r#2!^([[:alpha:]][[:word:]\\@\\.\\-]*)*\$R\x04name\x120\x0A\x06output\x18\x07 \x01(\x0B2\x18.cerbos.policy.v1.OutputR\x06output\"\xAE\x02\x0A\x0FPrincipalPolicy\x12(\x0A\x09principal\x18\x01 \x01(\x09B\x0A\xBAH\x07r\x02\x10\x01\xC8\x01\x01R\x09principal\x121\x0A\x07version\x18\x02 \x01(\x09B\x17\xBAH\x14r\x0F2\x0D^[[:word:]]+\$\xC8\x01\x01R\x07version\x125\x0A\x05rules\x18\x03 \x03(\x0B2\x1F.cerbos.policy.v1.PrincipalRuleR\x05rules\x12L\x0A\x05scope\x18\x04 \x01(\x09B6\xBAH3r12/^([[:alnum:]][[:word:]\\-]*(\\.[[:word:]\\-]*)*)*\$R\x05scope\x129\x0A\x09variables\x18\x05 \x01(\x0B2\x1B.cerbos.policy.v1.VariablesR\x09variables\"\xA1\x03\x0A\x0DPrincipalRule\x12&\x0A\x08resource\x18\x01 \x01(\x09B\x0A\xBAH\x07r\x02\x10\x01\xC8\x01\x01R\x08resource\x12M\x0A\x07actions\x18\x02 \x03(\x0B2&.cerbos.policy.v1.PrincipalRule.ActionB\x0B\xBAH\x08\x92\x01\x02\x08\x01\xC8\x01\x01R\x07actions\x1A\x98\x02\x0A\x06Action\x12\"\x0A\x06action\x18\x01 \x01(\x09B\x0A\xBAH\x07r\x02\x10\x01\xC8\x01\x01R\x06action\x129\x0A\x09condition\x18\x02 \x01(\x0B2\x1B.cerbos.policy.v1.ConditionR\x09condition\x12?\x0A\x06effect\x18\x03 \x01(\x0E2\x18.cerbos.effect.v1.EffectB\x0D\xBAH\x0A\x82\x01\x04\x1A\x02\x01\x02\xC8\x01\x01R\x06effect\x12<\x0A\x04name\x18\x04 \x01(\x09B(\xBAH%r#2!^([[:alpha:]][[:word:]\\@\\.\\-]*)*\$R\x04name\x120\x0A\x06output\x18\x05 \x01(\x0B2\x18.cerbos.policy.v1.OutputR\x06output\"\xC6\x01\x0A\x0CDerivedRoles\x121\x0A\x04name\x18\x01 \x01(\x09B\x1D\xBAH\x1Ar\x15\x10\x012\x11^[[:word:]\\-\\.]+\$\xC8\x01\x01R\x04name\x12H\x0A\x0Bdefinitions\x18\x02 \x03(\x0B2\x19.cerbos.policy.v1.RoleDefB\x0B\xBAH\x08\x92\x01\x02\x08\x01\xC8\x01\x01R\x0Bdefinitions\x129\x0A\x09variables\x18\x03 \x01(\x0B2\x1B.cerbos.policy.v1.VariablesR\x09variables\"\xAD\x01\x0A\x07RoleDef\x12/\x0A\x04name\x18\x01 \x01(\x09B\x1B\xBAH\x18r\x132\x11^[[:word:]\\-\\.]+\$\xC8\x01\x01R\x04name\x126\x0A\x0Cparent_roles\x18\x02 \x03(\x09B\x13\xBAH\x10\x92\x01\x0A\x08\x01\x18\x01\"\x04r\x02\x10\x01\xC8\x01\x01R\x0BparentRoles\x129\x0A\x09condition\x18\x03 \x01(\x0B2\x1B.cerbos.policy.v1.ConditionR\x09condition\"\xDA\x01\x0A\x0FExportVariables\x121\x0A\x04name\x18\x01 \x01(\x09B\x1D\xBAH\x1Ar\x15\x10\x012\x11^[[:word:]\\-\\.]+\$\xC8\x01\x01R\x04name\x12T\x0A\x0Bdefinitions\x18\x02 \x03(\x0B22.cerbos.policy.v1.ExportVariables.DefinitionsEntryR\x0Bdefinitions\x1A>\x0A\x10DefinitionsEntry\x12\x10\x0A\x03key\x18\x01 \x01(\x09R\x03key\x12\x14\x0A\x05value\x18\x02 \x01(\x09R\x05value:\x028\x01\"\xBC\x01\x0A\x09Variables\x127\x0A\x06import\x18\x01 \x03(\x09B\x1F\xBAH\x1C\x92\x01\x19\x18\x01\"\x15r\x132\x11^[[:word:]\\-\\.]+\$R\x06import\x12<\x0A\x05local\x18\x02 \x03(\x0B2&.cerbos.policy.v1.Variables.LocalEntryR\x05local\x1A8\x0A\x0ALocalEntry\x12\x10\x0A\x03key\x18\x01 \x01(\x09R\x03key\x12\x14\x0A\x05value\x18\x02 \x01(\x09R\x05value:\x028\x01\"j\x0A\x09Condition\x12/\x0A\x05match\x18\x01 \x01(\x0B2\x17.cerbos.policy.v1.MatchH\x00R\x05match\x12\x18\x0A\x06script\x18\x02 \x01(\x09H\x00R\x06scriptB\x12\x0A\x09condition\x12\x05\xBAH\x02\x08\x01\"\x90\x02\x0A\x05Match\x124\x0A\x03all\x18\x01 \x01(\x0B2 .cerbos.policy.v1.Match.ExprListH\x00R\x03all\x124\x0A\x03any\x18\x02 \x01(\x0B2 .cerbos.policy.v1.Match.ExprListH\x00R\x03any\x126\x0A\x04none\x18\x03 \x01(\x0B2 .cerbos.policy.v1.Match.ExprListH\x00R\x04none\x12\x14\x0A\x04expr\x18\x04 \x01(\x09H\x00R\x04expr\x1A@\x0A\x08ExprList\x124\x0A\x02of\x18\x01 \x03(\x0B2\x17.cerbos.policy.v1.MatchB\x0B\xBAH\x08\x92\x01\x02\x08\x01\xC8\x01\x01R\x02ofB\x0B\x0A\x02op\x12\x05\xBAH\x02\x08\x01\"\xAE\x01\x0A\x06Output\x12\x16\x0A\x04expr\x18\x01 \x01(\x09B\x02\x18\x01R\x04expr\x121\x0A\x04when\x18\x02 \x01(\x0B2\x1D.cerbos.policy.v1.Output.WhenR\x04when\x1AY\x0A\x04When\x12%\x0A\x0Erule_activated\x18\x01 \x01(\x09R\x0DruleActivated\x12*\x0A\x11condition_not_met\x18\x02 \x01(\x09R\x0FconditionNotMet\"\xCD\x02\x0A\x07Schemas\x12K\x0A\x10principal_schema\x18\x01 \x01(\x0B2 .cerbos.policy.v1.Schemas.SchemaR\x0FprincipalSchema\x12I\x0A\x0Fresource_schema\x18\x02 \x01(\x0B2 .cerbos.policy.v1.Schemas.SchemaR\x0EresourceSchema\x1A;\x0A\x0AIgnoreWhen\x12-\x0A\x07actions\x18\x01 \x03(\x09B\x13\xBAH\x10\x92\x01\x0A\x08\x01\x18\x01\"\x04r\x02\x10\x01\xC8\x01\x01R\x07actions\x1Am\x0A\x06Schema\x12\x1C\x0A\x03ref\x18\x01 \x01(\x09B\x0A\xBAH\x07r\x02\x10\x01\xC8\x01\x01R\x03ref\x12E\x0A\x0Bignore_when\x18\x02 \x01(\x0B2\$.cerbos.policy.v1.Schemas.IgnoreWhenR\x0AignoreWhen\"\x9C\x05\x0A\x0BTestFixture\x1A\xE0\x01\x0A\x0APrincipals\x12X\x0A\x0Aprincipals\x18\x01 \x03(\x0B28.cerbos.policy.v1.TestFixture.Principals.PrincipalsEntryR\x0Aprincipals\x12\x1C\x0A\x0Bjson_schema\x18\x02 \x01(\x09R\x07\$schema\x1AZ\x0A\x0FPrincipalsEntry\x12\x10\x0A\x03key\x18\x01 \x01(\x09R\x03key\x121\x0A\x05value\x18\x02 \x01(\x0B2\x1B.cerbos.engine.v1.PrincipalR\x05value:\x028\x01\x1A\xD9\x01\x0A\x09Resources\x12T\x0A\x09resources\x18\x01 \x03(\x0B26.cerbos.policy.v1.TestFixture.Resources.ResourcesEntryR\x09resources\x12\x1C\x0A\x0Bjson_schema\x18\x02 \x01(\x09R\x07\$schema\x1AX\x0A\x0EResourcesEntry\x12\x10\x0A\x03key\x18\x01 \x01(\x09R\x03key\x120\x0A\x05value\x18\x02 \x01(\x0B2\x1A.cerbos.engine.v1.ResourceR\x05value:\x028\x01\x1A\xCD\x01\x0A\x07AuxData\x12M\x0A\x08aux_data\x18\x01 \x03(\x0B22.cerbos.policy.v1.TestFixture.AuxData.AuxDataEntryR\x07auxData\x12\x1C\x0A\x0Bjson_schema\x18\x02 \x01(\x09R\x07\$schema\x1AU\x0A\x0CAuxDataEntry\x12\x10\x0A\x03key\x18\x01 \x01(\x09R\x03key\x12/\x0A\x05value\x18\x02 \x01(\x0B2\x19.cerbos.engine.v1.AuxDataR\x05value:\x028\x01\"\x87\x02\x0A\x0BTestOptions\x12,\x0A\x03now\x18\x01 \x01(\x0B2\x1A.google.protobuf.TimestampR\x03now\x120\x0A\x14lenient_scope_search\x18\x02 \x01(\x08R\x12lenientScopeSearch\x12D\x0A\x07globals\x18\x03 \x03(\x0B2*.cerbos.policy.v1.TestOptions.GlobalsEntryR\x07globals\x1AR\x0A\x0CGlobalsEntry\x12\x10\x0A\x03key\x18\x01 \x01(\x09R\x03key\x12,\x0A\x05value\x18\x02 \x01(\x0B2\x16.google.protobuf.ValueR\x05value:\x028\x01\"\x82\x06\x0A\x09TestSuite\x12\x1E\x0A\x04name\x18\x01 \x01(\x09B\x0A\xBAH\x07r\x02\x10\x01\xC8\x01\x01R\x04name\x12 \x0A\x0Bdescription\x18\x02 \x01(\x09R\x0Bdescription\x12\x12\x0A\x04skip\x18\x03 \x01(\x08R\x04skip\x12\x1F\x0A\x0Bskip_reason\x18\x04 \x01(\x09R\x0AskipReason\x12>\x0A\x05tests\x18\x05 \x03(\x0B2\x1B.cerbos.policy.v1.TestTableB\x0B\xBAH\x08\x92\x01\x02\x08\x01\xC8\x01\x01R\x05tests\x12K\x0A\x0Aprincipals\x18\x06 \x03(\x0B2+.cerbos.policy.v1.TestSuite.PrincipalsEntryR\x0Aprincipals\x12H\x0A\x09resources\x18\x07 \x03(\x0B2*.cerbos.policy.v1.TestSuite.ResourcesEntryR\x09resources\x12C\x0A\x08aux_data\x18\x08 \x03(\x0B2(.cerbos.policy.v1.TestSuite.AuxDataEntryR\x07auxData\x127\x0A\x07options\x18\x09 \x01(\x0B2\x1D.cerbos.policy.v1.TestOptionsR\x07options\x12\x1C\x0A\x0Bjson_schema\x18\x0A \x01(\x09R\x07\$schema\x1AZ\x0A\x0FPrincipalsEntry\x12\x10\x0A\x03key\x18\x01 \x01(\x09R\x03key\x121\x0A\x05value\x18\x02 \x01(\x0B2\x1B.cerbos.engine.v1.PrincipalR\x05value:\x028\x01\x1AX\x0A\x0EResourcesEntry\x12\x10\x0A\x03key\x18\x01 \x01(\x09R\x03key\x120\x0A\x05value\x18\x02 \x01(\x0B2\x1A.cerbos.engine.v1.ResourceR\x05value:\x028\x01\x1AU\x0A\x0CAuxDataEntry\x12\x10\x0A\x03key\x18\x01 \x01(\x09R\x03key\x12/\x0A\x05value\x18\x02 \x01(\x0B2\x19.cerbos.engine.v1.AuxDataR\x05value:\x028\x01\"\xFB\x07\x0A\x09TestTable\x12\x1E\x0A\x04name\x18\x01 \x01(\x09B\x0A\xBAH\x07r\x02\x10\x01\xC8\x01\x01R\x04name\x12 \x0A\x0Bdescription\x18\x02 \x01(\x09R\x0Bdescription\x12\x12\x0A\x04skip\x18\x03 \x01(\x08R\x04skip\x12\x1F\x0A\x0Bskip_reason\x18\x04 \x01(\x09R\x0AskipReason\x12?\x0A\x05input\x18\x05 \x01(\x0B2!.cerbos.policy.v1.TestTable.InputB\x06\xBAH\x03\xC8\x01\x01R\x05input\x12P\x0A\x08expected\x18\x06 \x03(\x0B2'.cerbos.policy.v1.TestTable.ExpectationB\x0B\xBAH\x08\x92\x01\x02\x08\x01\xC8\x01\x01R\x08expected\x127\x0A\x07options\x18\x07 \x01(\x0B2\x1D.cerbos.policy.v1.TestOptionsR\x07options\x1A\xB9\x01\x0A\x05Input\x123\x0A\x0Aprincipals\x18\x01 \x03(\x09B\x13\xBAH\x10\x92\x01\x0A\x08\x01\x18\x01\"\x04r\x02\x10\x01\xC8\x01\x01R\x0Aprincipals\x121\x0A\x09resources\x18\x02 \x03(\x09B\x13\xBAH\x10\x92\x01\x0A\x08\x01\x18\x01\"\x04r\x02\x10\x01\xC8\x01\x01R\x09resources\x12-\x0A\x07actions\x18\x03 \x03(\x09B\x13\xBAH\x10\x92\x01\x0A\x08\x01\x18\x01\"\x04r\x02\x10\x01\xC8\x01\x01R\x07actions\x12\x19\x0A\x08aux_data\x18\x04 \x01(\x09R\x07auxData\x1A\x80\x01\x0A\x12OutputExpectations\x12\"\x0A\x06action\x18\x01 \x01(\x09B\x0A\xBAH\x07r\x02\x10\x01\xC8\x01\x01R\x06action\x12F\x0A\x08expected\x18\x02 \x03(\x0B2\x1D.cerbos.engine.v1.OutputEntryB\x0B\xBAH\x08\x92\x01\x02\x08\x01\xC8\x01\x01R\x08expected\x1A\xEB\x02\x0A\x0BExpectation\x12(\x0A\x09principal\x18\x01 \x01(\x09B\x0A\xBAH\x07r\x02\x10\x01\xC8\x01\x01R\x09principal\x12&\x0A\x08resource\x18\x02 \x01(\x09B\x0A\xBAH\x07r\x02\x10\x01\xC8\x01\x01R\x08resource\x12j\x0A\x07actions\x18\x03 \x03(\x0B24.cerbos.policy.v1.TestTable.Expectation.ActionsEntryB\x1A\xBAH\x17\x9A\x01\x11\x08\x01\"\x04r\x02\x10\x01*\x07\x82\x01\x04\x1A\x02\x01\x02\xC8\x01\x01R\x07actions\x12H\x0A\x07outputs\x18\x04 \x03(\x0B2..cerbos.policy.v1.TestTable.OutputExpectationsR\x07outputs\x1AT\x0A\x0CActionsEntry\x12\x10\x0A\x03key\x18\x01 \x01(\x09R\x03key\x12.\x0A\x05value\x18\x02 \x01(\x0E2\x18.cerbos.effect.v1.EffectR\x05value:\x028\x01\"\xDA\x07\x0A\x04Test\x12;\x0A\x04name\x18\x01 \x01(\x0B2\x1F.cerbos.policy.v1.Test.TestNameB\x06\xBAH\x03\xC8\x01\x01R\x04name\x12 \x0A\x0Bdescription\x18\x02 \x01(\x09R\x0Bdescription\x12\x12\x0A\x04skip\x18\x03 \x01(\x08R\x04skip\x12\x1F\x0A\x0Bskip_reason\x18\x04 \x01(\x09R\x0AskipReason\x12:\x0A\x05input\x18\x05 \x01(\x0B2\x1C.cerbos.engine.v1.CheckInputB\x06\xBAH\x03\xC8\x01\x01R\x05input\x12\\\x0A\x08expected\x18\x06 \x03(\x0B2\$.cerbos.policy.v1.Test.ExpectedEntryB\x1A\xBAH\x17\x9A\x01\x11\x08\x01\"\x04r\x02\x10\x01*\x07\x82\x01\x04\x1A\x02\x01\x02\xC8\x01\x01R\x08expected\x127\x0A\x07options\x18\x07 \x01(\x0B2\x1D.cerbos.policy.v1.TestOptionsR\x07options\x12V\x0A\x10expected_outputs\x18\x08 \x03(\x0B2+.cerbos.policy.v1.Test.ExpectedOutputsEntryR\x0FexpectedOutputs\x1A\x9E\x01\x0A\x08TestName\x122\x0A\x0Ftest_table_name\x18\x01 \x01(\x09B\x0A\xBAH\x07r\x02\x10\x01\xC8\x01\x01R\x0DtestTableName\x12/\x0A\x0Dprincipal_key\x18\x02 \x01(\x09B\x0A\xBAH\x07r\x02\x10\x01\xC8\x01\x01R\x0CprincipalKey\x12-\x0A\x0Cresource_key\x18\x03 \x01(\x09B\x0A\xBAH\x07r\x02\x10\x01\xC8\x01\x01R\x0BresourceKey\x1A\xB0\x01\x0A\x0DOutputEntries\x12K\x0A\x07entries\x18\x01 \x03(\x0B21.cerbos.policy.v1.Test.OutputEntries.EntriesEntryR\x07entries\x1AR\x0A\x0CEntriesEntry\x12\x10\x0A\x03key\x18\x01 \x01(\x09R\x03key\x12,\x0A\x05value\x18\x02 \x01(\x0B2\x16.google.protobuf.ValueR\x05value:\x028\x01\x1AU\x0A\x0DExpectedEntry\x12\x10\x0A\x03key\x18\x01 \x01(\x09R\x03key\x12.\x0A\x05value\x18\x02 \x01(\x0E2\x18.cerbos.effect.v1.EffectR\x05value:\x028\x01\x1Ah\x0A\x14ExpectedOutputsEntry\x12\x10\x0A\x03key\x18\x01 \x01(\x09R\x03key\x12:\x0A\x05value\x18\x02 \x01(\x0B2\$.cerbos.policy.v1.Test.OutputEntriesR\x05value:\x028\x01\"\xE9\x11\x0A\x0BTestResults\x12;\x0A\x06suites\x18\x01 \x03(\x0B2#.cerbos.policy.v1.TestResults.SuiteR\x06suites\x12?\x0A\x07summary\x18\x02 \x01(\x0B2%.cerbos.policy.v1.TestResults.SummaryR\x07summary\x1A[\x0A\x05Tally\x12<\x0A\x06result\x18\x01 \x01(\x0E2\$.cerbos.policy.v1.TestResults.ResultR\x06result\x12\x14\x0A\x05count\x18\x02 \x01(\x0DR\x05count\x1A\xC1\x01\x0A\x07Summary\x12K\x0A\x0Eoverall_result\x18\x01 \x01(\x0E2\$.cerbos.policy.v1.TestResults.ResultR\x0DoverallResult\x12\x1F\x0A\x0Btests_count\x18\x02 \x01(\x0DR\x0AtestsCount\x12H\x0A\x0Dresult_counts\x18\x03 \x03(\x0B2#.cerbos.policy.v1.TestResults.TallyR\x0CresultCounts\x1A\xBC\x02\x0A\x05Suite\x12\x12\x0A\x04file\x18\x01 \x01(\x09R\x04file\x12\x12\x0A\x04name\x18\x02 \x01(\x09R\x04name\x12K\x0A\x0Aprincipals\x18\x03 \x03(\x0B2'.cerbos.policy.v1.TestResults.PrincipalB\x02\x18\x01R\x0Aprincipals\x12?\x0A\x07summary\x18\x04 \x01(\x0B2%.cerbos.policy.v1.TestResults.SummaryR\x07summary\x12\x14\x0A\x05error\x18\x05 \x01(\x09R\x05error\x12E\x0A\x0Atest_cases\x18\x06 \x03(\x0B2&.cerbos.policy.v1.TestResults.TestCaseR\x09testCases\x12 \x0A\x0Bdescription\x18\x07 \x01(\x09R\x0Bdescription\x1Ag\x0A\x08TestCase\x12\x12\x0A\x04name\x18\x01 \x01(\x09R\x04name\x12G\x0A\x0Aprincipals\x18\x02 \x03(\x0B2'.cerbos.policy.v1.TestResults.PrincipalR\x0Aprincipals\x1Ae\x0A\x09Principal\x12\x12\x0A\x04name\x18\x01 \x01(\x09R\x04name\x12D\x0A\x09resources\x18\x02 \x03(\x0B2&.cerbos.policy.v1.TestResults.ResourceR\x09resources\x1A^\x0A\x08Resource\x12\x12\x0A\x04name\x18\x01 \x01(\x09R\x04name\x12>\x0A\x07actions\x18\x02 \x03(\x0B2\$.cerbos.policy.v1.TestResults.ActionR\x07actions\x1A]\x0A\x06Action\x12\x12\x0A\x04name\x18\x01 \x01(\x09R\x04name\x12?\x0A\x07details\x18\x02 \x01(\x0B2%.cerbos.policy.v1.TestResults.DetailsR\x07details\x1A\xAC\x02\x0A\x07Details\x12<\x0A\x06result\x18\x01 \x01(\x0E2\$.cerbos.policy.v1.TestResults.ResultR\x06result\x12A\x0A\x07failure\x18\x02 \x01(\x0B2%.cerbos.policy.v1.TestResults.FailureH\x00R\x07failure\x12\x16\x0A\x05error\x18\x03 \x01(\x09H\x00R\x05error\x12A\x0A\x07success\x18\x05 \x01(\x0B2%.cerbos.policy.v1.TestResults.SuccessH\x00R\x07success\x12:\x0A\x0Cengine_trace\x18\x04 \x03(\x0B2\x17.cerbos.engine.v1.TraceR\x0BengineTraceB\x09\x0A\x07outcome\x1A\x9C\x03\x0A\x0DOutputFailure\x12\x10\x0A\x03src\x18\x01 \x01(\x09R\x03src\x12]\x0A\x0Amismatched\x18\x02 \x01(\x0B2;.cerbos.policy.v1.TestResults.OutputFailure.MismatchedValueH\x00R\x0Amismatched\x12T\x0A\x07missing\x18\x03 \x01(\x0B28.cerbos.policy.v1.TestResults.OutputFailure.MissingValueH\x00R\x07missing\x1Au\x0A\x0FMismatchedValue\x122\x0A\x08expected\x18\x01 \x01(\x0B2\x16.google.protobuf.ValueR\x08expected\x12.\x0A\x06actual\x18\x02 \x01(\x0B2\x16.google.protobuf.ValueR\x06actual\x1AB\x0A\x0CMissingValue\x122\x0A\x08expected\x18\x01 \x01(\x0B2\x16.google.protobuf.ValueR\x08expectedB\x09\x0A\x07outcome\x1A\xB8\x01\x0A\x07Failure\x124\x0A\x08expected\x18\x01 \x01(\x0E2\x18.cerbos.effect.v1.EffectR\x08expected\x120\x0A\x06actual\x18\x02 \x01(\x0E2\x18.cerbos.effect.v1.EffectR\x06actual\x12E\x0A\x07outputs\x18\x03 \x03(\x0B2+.cerbos.policy.v1.TestResults.OutputFailureR\x07outputs\x1At\x0A\x07Success\x120\x0A\x06effect\x18\x01 \x01(\x0E2\x18.cerbos.effect.v1.EffectR\x06effect\x127\x0A\x07outputs\x18\x02 \x03(\x0B2\x1D.cerbos.engine.v1.OutputEntryR\x07outputs\"n\x0A\x06Result\x12\x16\x0A\x12RESULT_UNSPECIFIED\x10\x00\x12\x12\x0A\x0ERESULT_SKIPPED\x10\x01\x12\x11\x0A\x0DRESULT_PASSED\x10\x02\x12\x11\x0A\x0DRESULT_FAILED\x10\x03\x12\x12\x0A\x0ERESULT_ERRORED\x10\x04Bo\x0A\x18dev.cerbos.api.v1.policyZ<github.com/cerbos/cerbos/api/genpb/cerbos/policy/v1;policyv1\xAA\x02\x14Cerbos.Api.V1.Policyb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

