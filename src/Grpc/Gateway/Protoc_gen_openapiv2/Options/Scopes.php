<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protoc-gen-openapiv2/options/openapiv2.proto

namespace Grpc\Gateway\Protoc_gen_openapiv2\Options;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `Scopes` is a representation of OpenAPI v2 specification's Scopes object.
 * See: https://github.com/OAI/OpenAPI-Specification/blob/3.0.0/versions/2.0.md#scopesObject
 * Lists the available scopes for an OAuth2 security scheme.
 *
 * Generated from protobuf message <code>grpc.gateway.protoc_gen_openapiv2.options.Scopes</code>
 */
class Scopes extends \Google\Protobuf\Internal\Message
{
    /**
     * Maps between a name of a scope to a short description of it (as the value
     * of the property).
     *
     * Generated from protobuf field <code>map<string, string> scope = 1 [json_name = "scope"];</code>
     */
    private $scope;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $scope
     *           Maps between a name of a scope to a short description of it (as the value
     *           of the property).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ProtocGenOpenapiv2\Options\Openapiv2::initOnce();
        parent::__construct($data);
    }

    /**
     * Maps between a name of a scope to a short description of it (as the value
     * of the property).
     *
     * Generated from protobuf field <code>map<string, string> scope = 1 [json_name = "scope"];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Maps between a name of a scope to a short description of it (as the value
     * of the property).
     *
     * Generated from protobuf field <code>map<string, string> scope = 1 [json_name = "scope"];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setScope($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->scope = $arr;

        return $this;
    }

}

