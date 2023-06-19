<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cerbos/request/v1/request.proto

namespace GPBMetadata\Cerbos\Request\V1;

class Request
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Cerbos\Engine\V1\Engine::initOnce();
        \GPBMetadata\Cerbos\Policy\V1\Policy::initOnce();
        \GPBMetadata\Cerbos\Schema\V1\Schema::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\ProtocGenOpenapiv2\Options\Annotations::initOnce();
        \GPBMetadata\Validate\Validate::initOnce();
        $pool->internalAddGeneratedFile(
            '
�O
cerbos/request/v1/request.protocerbos.request.v1cerbos/policy/v1/policy.protocerbos/schema/v1/schema.protogoogle/api/field_behavior.protogoogle/protobuf/duration.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.proto.protoc-gen-openapiv2/options/annotations.protovalidate/validate.proto"�
PlanResourcesRequest�

request_id (	Bw�At2JOptional application-specific ID useful for correlating logs for analysis.J&"c2db17b8-4f9f-4fb1-acfd-9162a02be42b"R	requestIdh
action (	BP�AC22Action to be applied to each resource in the list.J"view:public"�A�BrRactionF
	principal (2.cerbos.engine.v1.PrincipalB�A�B�R	principalV
resource (2-.cerbos.engine.v1.PlanResourcesInput.ResourceB�A�B�Rresource:
aux_data (2.cerbos.request.v1.AuxDataB�ARauxDatac
include_meta (B@�A=2;Opt to receive request processing metadata in the response.RincludeMeta:\'�A$
"2 PDP Resources Query Plan Request"�
CheckResourceSetRequest�

request_id (	Bw�At2JOptional application-specific ID useful for correlating logs for analysis.J&"c2db17b8-4f9f-4fb1-acfd-9162a02be42b"R	requestId�
actions (	Br�A\\28List of actions being performed on the set of resources.J["view:public", "comment"]���A�B�
"rRactionsF
	principal (2.cerbos.engine.v1.PrincipalB�A�B�R	principalG
resource (2.cerbos.request.v1.ResourceSetB�A�B�Rresourcec
include_meta (B@�A=2;Opt to receive request processing metadata in the response.RincludeMeta:
aux_data (2.cerbos.request.v1.AuxDataB�ARauxData:�A
2PDP Request"�	
ResourceSet�
kind (	B��Ab2Resource kind.J"album:object"�?^[[:alpha:]][[:word:]\\@\\.\\-]*(\\:[[:alpha:]][[:word:]\\@\\.\\-]*)*$�A�BGrE2A^[[:alpha:]][[:word:]\\@\\.\\-/]*(\\:[[:alpha:]][[:word:]\\@\\.\\-/]*)*$Rkind�
policy_version (	B��A�2|The policy version to use to evaluate this request. If not specified, will default to the server-configured default version.J	"default"�^[[:word:]]*$�A�Br2^[[:word:]]*$RpolicyVersion�
	instances (2-.cerbos.request.v1.ResourceSet.InstancesEntryB��A�2mSet of resource instances to check. Each instance must be keyed by an application-specific unique identifier.J�{"XX125":{"attr":{"owner":"bugs_bunny", "public": false, "flagged": false}}, "XX225":{"attr":{"owner":"daffy_duck", "public": true, "flagged": false}}}��A�B�R	instances�
scope (	B��A�2~A dot-separated scope that describes the hierarchy these resources belong to. This is used for determining policy inheritance.�/^([[:alnum:]][[:word:]\\-]*(\\.[[:word:]\\-]*)*)*$�A�B3r12/^([[:alnum:]][[:word:]\\-]*(\\.[[:word:]\\-]*)*)*$Rscope^
InstancesEntry
key (	Rkey6
value (2 .cerbos.request.v1.AttributesMapRvalue:8: �A
2Set of resources to check"�
AttributesMap�
attr (2*.cerbos.request.v1.AttributesMap.AttrEntryBq�Af2dKey-value pairs of contextual data about this instance that should be used during policy evaluation.�B�RattrO
	AttrEntry
key (	Rkey,
value (2.google.protobuf.ValueRvalue:8:3�A0
.2,Unique identifier for the resource instance."�
CheckResourceBatchRequest�

request_id (	Bw�At2JOptional application-specific ID useful for correlating logs for analysis.J&"c2db17b8-4f9f-4fb1-acfd-9162a02be42b"R	requestIdF
	principal (2.cerbos.engine.v1.PrincipalB�A�B�R	principal�
	resources (27.cerbos.request.v1.CheckResourceBatchRequest.BatchEntryB��A�2List of resources and actions.J�[{"actions":["view","comment"], "resource":{"kind":"album:object","policyVersion":"default","id":"XX125","attr":{"owner":"bugs_bunny", "public": false, "flagged": false}}}]���A�B�R	resources5
aux_data (2.cerbos.request.v1.AuxDataRauxData�

BatchEntry�
actions (	Bj�AT20List of actions being performed on the resource.J["view:public", "comment"]���A�B�
"rRactionsC
resource (2.cerbos.engine.v1.ResourceB�A�B�Rresource:�A
2PDP Request"�
CheckResourcesRequest�

request_id (	Bw�At2JOptional application-specific ID useful for correlating logs for analysis.J&"c2db17b8-4f9f-4fb1-acfd-9162a02be42b"R	requestIdX
include_meta (B5�A220Add request processing metadata to the response.RincludeMetaF
	principal (2.cerbos.engine.v1.PrincipalB�A�B�R	principal�
	resources (26.cerbos.request.v1.CheckResourcesRequest.ResourceEntryB��A�2List of resources and actions.J�[{"actions":["view","comment"], "resource":{"kind":"album:object","policyVersion":"default","id":"XX125","attr":{"owner":"bugs_bunny", "public": false, "flagged": false}}}]���A�B�R	resources5
aux_data (2.cerbos.request.v1.AuxDataRauxData�
ResourceEntry�
actions (	Bj�AT20List of actions being performed on the resource.J["view:public", "comment"]���A�B�
"rRactionsC
resource (2.cerbos.engine.v1.ResourceB�A�B�Rresource:�A
2Check resources request"�
AuxData0
jwt (2.cerbos.request.v1.AuxData.JWTRjwt�
JWT�
token (	B��A�2JWT from the original requestJ�"eyJhbGciOiJFUzM4NCIsImtpZCI6IjE5TGZaYXRFZGc4M1lOYzVyMjNndU1KcXJuND0iLCJ0eXAiOiJKV1QifQ.eyJhdWQiOlsiY2VyYm9zLWp3dC10ZXN0cyJdLCJjdXN0b21BcnJheSI6WyJBIiwiQiIsIkMiXSwiY3VzdG9tSW50Ijo0MiwiY3VzdG9tTWFwIjp7IkEiOiJBQSIsIkIiOiJCQiIsIkMiOiJDQyJ9LCJjdXN0b21TdHJpbmciOiJmb29iYXIiLCJleHAiOjE5NDk5MzQwMzksImlzcyI6ImNlcmJvcy10ZXN0LXN1aXRlIn0.WN_tOScSpd_EI-P5EI1YlagxEgExSfBjAtcrgcF6lyWj1lGpR_GKx9goZEp2p_t5AVWXN_bjz_sMUmJdJa4cVd55Qm1miR-FKu6oNRHnSEWdMFmnArwPw-YDJWfylLFX"�A�BrRtoken�

key_set_id (	Bd�Aa2RKey ID to use when decoding the token (defined in the Cerbos server configuration)J"my-keyset"RkeySetId:$�A!
2JWT from the original request:B�A?
=2;Structured auxiliary data useful for evaluating the request"[
File\'
	file_name (	B
�A�BrRfileName*
contents (B�A�Bz��@Rcontents"�
PlaygroundValidateRequest#
playground_id (	RplaygroundIdU
files (2.cerbos.request.v1.FileB&�A2List of files.���A�B�Rfiles:"�A
2Playground validate request"�
PlaygroundTestRequest#
playground_id (	RplaygroundIdU
files (2.cerbos.request.v1.FileB&�A2List of files.���A�B�Rfiles:�A
2Playground test request"�
PlaygroundEvaluateRequest#
playground_id (	RplaygroundIdU
files (2.cerbos.request.v1.FileB&�A2List of files.���A�B�RfilesF
	principal (2.cerbos.engine.v1.PrincipalB�A�B�R	principalC
resource (2.cerbos.engine.v1.ResourceB�A�B�Rresourcem
actions (	BS�A;20List of actions being performed on the resource.�2���A�B�2"rRactions5
aux_data (2.cerbos.request.v1.AuxDataRauxData:"�A
2Playground evaluate request"�
PlaygroundProxyRequest#
playground_id (	RplaygroundIdU
files (2.cerbos.request.v1.FileB&�A2List of files.���A�B�RfilesZ
check_resource_set (2*.cerbos.request.v1.CheckResourceSetRequestH RcheckResourceSet`
check_resource_batch (2,.cerbos.request.v1.CheckResourceBatchRequestH RcheckResourceBatchP
plan_resources (2\'.cerbos.request.v1.PlanResourcesRequestH RplanResourcesS
check_resources (2(.cerbos.request.v1.CheckResourcesRequestH RcheckResources:�A
2Playground proxy requestB
proxy_request�B"�
AddOrUpdatePolicyRequest_
policies (2.cerbos.policy.v1.PolicyB)�A2List of policies.�
��A�B�
Rpolicies: �A
2Add/update policy request"�
ListAuditLogEntriesRequest�
kind (22.cerbos.request.v1.ListAuditLogEntriesRequest.KindB>�A12Kind of log entry�KIND_ACCESS�KIND_DECISION�B�RkindD
tail (B.�A#2Last N entries.Y     @�@i      �?�B*�H RtailS
between (27.cerbos.request.v1.ListAuditLogEntriesRequest.TimeRangeH RbetweenY
since (2.google.protobuf.DurationB&�A#2!Entries since N hours/minutes agoH Rsince�
lookup (	Bi�A72
By Call ID�(^[0123456789ABCDEFGHJKMNPQRSTVWXYZ]{26}$�B,r*2(^[0123456789ABCDEFGHJKMNPQRSTVWXYZ]{26}$H Rlookup�
	TimeRange
start (2.google.protobuf.TimestampBM�A=2Start date in ISO 8601 format.J"2021-07-05T07:27:01+00:00"�A�B�8Rstarty
end (2.google.protobuf.TimestampBK�A;2End date in ISO 8601 format.J"2021-07-05T07:27:01+00:00"�A�B�8Rend:$�A!
2Entries between a time range."@
Kind
KIND_UNSPECIFIED 
KIND_ACCESS
KIND_DECISIONB
filter�B"/
ServerInfoRequest:�A
2Server info request"�
ListPoliciesRequestL
include_disabled (B!�A2Include disabled policies�ARincludeDisabledL
name_regexp (	B+�A%2#Filter policies by name with regexp�AR
nameRegexpO
scope_regexp (	B,�A&2$Filter policies by scope with regexp�ARscopeRegexpU
version_regexp (	B.�A(2&Filter policies by version with regexp�ARversionRegexp:�A
2List policies request"�
GetPolicyRequest�
id (	B��A�2�For blob, disk, git stores use file name (<filename>.yaml). For mysql, postgres, sqlite3 use id (<kind>.<name>.<version>) of the policyJ"principal.sarah.vdefault"�A�B�"r�
Rid:�A
2Get policy request"�
DisablePolicyRequesti
id (	BY�A>2 Unique identifier for the policyJ"principal.sarah.vdefault"�A�B�"r�
Rid:�A
2Disable policy request"�
EnablePolicyRequesti
id (	BY�A>2 Unique identifier for the policyJ"principal.sarah.vdefault"�A�B�"r�
Rid:�A
2Enable policy request"�
AddOrUpdateSchemaRequest\\
schemas (2.cerbos.schema.v1.SchemaB(�A2List of schemas.�
��A�B�
Rschemas: �A
2Add/update schema request"4
ListSchemasRequest:�A
2List schema ids request"�
GetSchemaRequest_
id (	BO�A42 Unique identifier for the schemaJ"principal.json"�A�B�"r�Rid:�A
2Get schema(s) request"�
DeleteSchemaRequest_
id (	BO�A42 Unique identifier for the schemaJ"principal.json"�A�B�"r�Rid:�A
2Delete schema(s) request"y
ReloadStoreRequestF
wait (B2�A,2*Wait until the reloading process finalizes�ARwait:�A
2Reload store requestBs
dev.cerbos.api.v1.requestZ>github.com/cerbos/cerbos/api/genpb/cerbos/request/v1;requestv1�Cerbos.Api.V1.Requestbproto3'
        , true);

        static::$is_initialized = true;
    }
}

