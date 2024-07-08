<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/svc/v1/svc.proto

namespace GPBMetadata\Cerbos\Svc\V1;

class Svc
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Cerbos\Request\V1\Request::initOnce();
        \GPBMetadata\Cerbos\Response\V1\Response::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Visibility::initOnce();
        \GPBMetadata\ProtocGenOpenapiv2\Options\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xF0#\x0A\x17cerbos/svc/v1/svc.proto\x12\x0Dcerbos.svc.v1\x1A!cerbos/response/v1/response.proto\x1A\x1Cgoogle/api/annotations.proto\x1A\x1Bgoogle/api/visibility.proto\x1A.protoc-gen-openapiv2/options/annotations.proto2\xD6\x0A\x0A\x0DCerbosService\x12\xA7\x02\x0A\x10CheckResourceSet\x12*.cerbos.request.v1.CheckResourceSetRequest\x1A,.cerbos.response.v1.CheckResourceSetResponse\"\xB8\x01\x92A\x9F\x01\x12\x05Check\x1A\x93\x01[Deprecated: Use CheckResources API instead] Check whether a principal has permissions to perform the given actions on a set of resource instances.X\x01\x82\xD3\xE4\x93\x02\x0F\"\x0A/api/check:\x01*\x12\xB6\x02\x0A\x12CheckResourceBatch\x12,.cerbos.request.v1.CheckResourceBatchRequest\x1A..cerbos.response.v1.CheckResourceBatchResponse\"\xC1\x01\x92A\x99\x01\x12\x14Check resource batch\x1A\x7F[Deprecated: Use CheckResources API instead] Check a principal's permissions to a batch of heterogeneous resources and actions.X\x01\x82\xD3\xE4\x93\x02\x1E\"\x19/api/check_resource_batch:\x01*\x12\xF0\x01\x0A\x0ECheckResources\x12(.cerbos.request.v1.CheckResourcesRequest\x1A*.cerbos.response.v1.CheckResourcesResponse\"\x87\x01\x92Ae\x12\x0FCheck resources\x1ARCheck a principal's permissions to a batch of heterogeneous resources and actions.\x82\xD3\xE4\x93\x02\x19\"\x14/api/check/resources:\x01*\x12\xC5\x01\x0A\x0AServerInfo\x12\$.cerbos.request.v1.ServerInfoRequest\x1A&.cerbos.response.v1.ServerInfoResponse\"i\x92AN\x12\x16Get server information\x1A4Get information about the server e.g. server version\x82\xD3\xE4\x93\x02\x12\x12\x10/api/server_info\x12\x83\x02\x0A\x0DPlanResources\x12'.cerbos.request.v1.PlanResourcesRequest\x1A).cerbos.response.v1.PlanResourcesResponse\"\x9D\x01\x92A|\x12\x0EPlan resources\x1AjProduce a query plan with conditions that must be satisfied for accessing a set of instances of a resource\x82\xD3\xE4\x93\x02\x18\"\x13/api/plan/resources:\x01*\x1A!\x92A\x1E\x12\x1CCerbos Policy Decision Point2\xF8\x10\x0A\x12CerbosAdminService\x12\xC9\x01\x0A\x11AddOrUpdatePolicy\x12+.cerbos.request.v1.AddOrUpdatePolicyRequest\x1A-.cerbos.response.v1.AddOrUpdatePolicyResponse\"X\x92A)\x12\x16Add or update policiesb\x0F\x0A\x0D\x0A\x09BasicAuth\x12\x00\x82\xD3\xE4\x93\x02&\"\x0D/admin/policy:\x01*Z\x12\x1A\x0D/admin/policy:\x01*\x12\xB0\x01\x0A\x0FInspectPolicies\x12).cerbos.request.v1.InspectPoliciesRequest\x1A+.cerbos.response.v1.InspectPoliciesResponse\"E\x92A#\x12\x10Inspect policiesb\x0F\x0A\x0D\x0A\x09BasicAuth\x12\x00\x82\xD3\xE4\x93\x02\x19\x12\x17/admin/policies/inspect\x12\x9C\x01\x0A\x0CListPolicies\x12&.cerbos.request.v1.ListPoliciesRequest\x1A(.cerbos.response.v1.ListPoliciesResponse\":\x92A \x12\x0DList policiesb\x0F\x0A\x0D\x0A\x09BasicAuth\x12\x00\x82\xD3\xE4\x93\x02\x11\x12\x0F/admin/policies\x12\x8E\x01\x0A\x09GetPolicy\x12#.cerbos.request.v1.GetPolicyRequest\x1A%.cerbos.response.v1.GetPolicyResponse\"5\x92A\x1D\x12\x0AGet policyb\x0F\x0A\x0D\x0A\x09BasicAuth\x12\x00\x82\xD3\xE4\x93\x02\x0F\x12\x0D/admin/policy\x12\xD3\x01\x0A\x0DDisablePolicy\x12'.cerbos.request.v1.DisablePolicyRequest\x1A).cerbos.response.v1.DisablePolicyResponse\"n\x92A!\x12\x0EDisable policyb\x0F\x0A\x0D\x0A\x09BasicAuth\x12\x00\x82\xD3\xE4\x93\x02D\"\x15/admin/policy/disableZ\x1A\x1A\x15/admin/policy/disable:\x01*Z\x0F*\x0D/admin/policy\x12\xBC\x01\x0A\x0CEnablePolicy\x12&.cerbos.request.v1.EnablePolicyRequest\x1A(.cerbos.response.v1.EnablePolicyResponse\"Z\x92A \x12\x0DEnable policyb\x0F\x0A\x0D\x0A\x09BasicAuth\x12\x00\x82\xD3\xE4\x93\x021\"\x14/admin/policy/enableZ\x19\x1A\x14/admin/policy/enable:\x01*\x12\xC8\x01\x0A\x13ListAuditLogEntries\x12-.cerbos.request.v1.ListAuditLogEntriesRequest\x1A/.cerbos.response.v1.ListAuditLogEntriesResponse\"O\x92A)\x12\x16List audit log entriesb\x0F\x0A\x0D\x0A\x09BasicAuth\x12\x00\x82\xD3\xE4\x93\x02\x1D\x12\x1B/admin/auditlog/list/{kind}0\x01\x12\xC7\x01\x0A\x11AddOrUpdateSchema\x12+.cerbos.request.v1.AddOrUpdateSchemaRequest\x1A-.cerbos.response.v1.AddOrUpdateSchemaResponse\"V\x92A'\x12\x14Add or update schemab\x0F\x0A\x0D\x0A\x09BasicAuth\x12\x00\x82\xD3\xE4\x93\x02&\"\x0D/admin/schema:\x01*Z\x12\x1A\x0D/admin/schema:\x01*\x12\x97\x01\x0A\x0BListSchemas\x12%.cerbos.request.v1.ListSchemasRequest\x1A'.cerbos.response.v1.ListSchemasResponse\"8\x92A\x1F\x12\x0CList schemasb\x0F\x0A\x0D\x0A\x09BasicAuth\x12\x00\x82\xD3\xE4\x93\x02\x10\x12\x0E/admin/schemas\x12\x8E\x01\x0A\x09GetSchema\x12#.cerbos.request.v1.GetSchemaRequest\x1A%.cerbos.response.v1.GetSchemaResponse\"5\x92A\x1D\x12\x0AGet schemab\x0F\x0A\x0D\x0A\x09BasicAuth\x12\x00\x82\xD3\xE4\x93\x02\x0F\x12\x0D/admin/schema\x12\x9A\x01\x0A\x0CDeleteSchema\x12&.cerbos.request.v1.DeleteSchemaRequest\x1A(.cerbos.response.v1.DeleteSchemaResponse\"8\x92A \x12\x0DDelete schemab\x0F\x0A\x0D\x0A\x09BasicAuth\x12\x00\x82\xD3\xE4\x93\x02\x0F*\x0D/admin/schema\x12\x9C\x01\x0A\x0BReloadStore\x12%.cerbos.request.v1.ReloadStoreRequest\x1A'.cerbos.response.v1.ReloadStoreResponse\"=\x92A\x1F\x12\x0CReload storeb\x0F\x0A\x0D\x0A\x09BasicAuth\x12\x00\x82\xD3\xE4\x93\x02\x15\x12\x13/admin/store/reload\x1A\"\x92A\x1F\x12\x1DCerbos administration service2\xF7\x04\x0A\x17CerbosPlaygroundService\x12\x97\x01\x0A\x12PlaygroundValidate\x12,.cerbos.request.v1.PlaygroundValidateRequest\x1A..cerbos.response.v1.PlaygroundValidateResponse\"#\x82\xD3\xE4\x93\x02\x1D\"\x18/api/playground/validate:\x01*\x12\x87\x01\x0A\x0EPlaygroundTest\x12(.cerbos.request.v1.PlaygroundTestRequest\x1A*.cerbos.response.v1.PlaygroundTestResponse\"\x1F\x82\xD3\xE4\x93\x02\x19\"\x14/api/playground/test:\x01*\x12\x97\x01\x0A\x12PlaygroundEvaluate\x12,.cerbos.request.v1.PlaygroundEvaluateRequest\x1A..cerbos.response.v1.PlaygroundEvaluateResponse\"#\x82\xD3\xE4\x93\x02\x1D\"\x18/api/playground/evaluate:\x01*\x12\x8B\x01\x0A\x0FPlaygroundProxy\x12).cerbos.request.v1.PlaygroundProxyRequest\x1A+.cerbos.response.v1.PlaygroundProxyResponse\" \x82\xD3\xE4\x93\x02\x1A\"\x15/api/playground/proxy:\x01*\x1A\x10\xFA\xD2\xE4\x93\x02\x0A\x12\x08INTERNALB\xE1\x01\x0A\x15dev.cerbos.api.v1.svcZ6github.com/cerbos/cerbos/api/genpb/cerbos/svc/v1;svcv1\xAA\x02\x11Cerbos.Api.V1.Svc\x92A{\x12?\x0A\x06Cerbos\"-\x0A\x06Cerbos\x12\x12https://cerbos.dev\x1A\x0Finfo@cerbos.dev2\x06latest*\x01\x022\x10application/json:\x10application/jsonZ\x11\x0A\x0F\x0A\x09BasicAuth\x12\x02\x08\x01b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

