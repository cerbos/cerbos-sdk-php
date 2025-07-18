<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: protoc-gen-openapiv2/options/openapiv2.proto

namespace Grpc\Gateway\Protoc_gen_openapiv2\Options;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * `Tag` is a representation of OpenAPI v2 specification's Tag object.
 * See: https://github.com/OAI/OpenAPI-Specification/blob/3.0.0/versions/2.0.md#tagObject
 *
 * Generated from protobuf message <code>grpc.gateway.protoc_gen_openapiv2.options.Tag</code>
 */
class Tag extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the tag. Use it to allow override of the name of a
     * global Tag object, then use that name to reference the tag throughout the
     * OpenAPI file.
     *
     * Generated from protobuf field <code>string name = 1 [json_name = "name"];</code>
     */
    protected $name = '';
    /**
     * A short description for the tag. GFM syntax can be used for rich text
     * representation.
     *
     * Generated from protobuf field <code>string description = 2 [json_name = "description"];</code>
     */
    protected $description = '';
    /**
     * Additional external documentation for this tag.
     *
     * Generated from protobuf field <code>.grpc.gateway.protoc_gen_openapiv2.options.ExternalDocumentation external_docs = 3 [json_name = "externalDocs"];</code>
     */
    protected $external_docs = null;
    /**
     * Custom properties that start with "x-" such as "x-foo" used to describe
     * extra functionality that is not covered by the standard OpenAPI Specification.
     * See: https://swagger.io/docs/specification/2-0/swagger-extensions/
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> extensions = 4 [json_name = "extensions"];</code>
     */
    private $extensions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the tag. Use it to allow override of the name of a
     *           global Tag object, then use that name to reference the tag throughout the
     *           OpenAPI file.
     *     @type string $description
     *           A short description for the tag. GFM syntax can be used for rich text
     *           representation.
     *     @type \Grpc\Gateway\Protoc_gen_openapiv2\Options\ExternalDocumentation $external_docs
     *           Additional external documentation for this tag.
     *     @type array|\Google\Protobuf\Internal\MapField $extensions
     *           Custom properties that start with "x-" such as "x-foo" used to describe
     *           extra functionality that is not covered by the standard OpenAPI Specification.
     *           See: https://swagger.io/docs/specification/2-0/swagger-extensions/
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ProtocGenOpenapiv2\Options\Openapiv2::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the tag. Use it to allow override of the name of a
     * global Tag object, then use that name to reference the tag throughout the
     * OpenAPI file.
     *
     * Generated from protobuf field <code>string name = 1 [json_name = "name"];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the tag. Use it to allow override of the name of a
     * global Tag object, then use that name to reference the tag throughout the
     * OpenAPI file.
     *
     * Generated from protobuf field <code>string name = 1 [json_name = "name"];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * A short description for the tag. GFM syntax can be used for rich text
     * representation.
     *
     * Generated from protobuf field <code>string description = 2 [json_name = "description"];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A short description for the tag. GFM syntax can be used for rich text
     * representation.
     *
     * Generated from protobuf field <code>string description = 2 [json_name = "description"];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Additional external documentation for this tag.
     *
     * Generated from protobuf field <code>.grpc.gateway.protoc_gen_openapiv2.options.ExternalDocumentation external_docs = 3 [json_name = "externalDocs"];</code>
     * @return \Grpc\Gateway\Protoc_gen_openapiv2\Options\ExternalDocumentation|null
     */
    public function getExternalDocs()
    {
        return $this->external_docs;
    }

    public function hasExternalDocs()
    {
        return isset($this->external_docs);
    }

    public function clearExternalDocs()
    {
        unset($this->external_docs);
    }

    /**
     * Additional external documentation for this tag.
     *
     * Generated from protobuf field <code>.grpc.gateway.protoc_gen_openapiv2.options.ExternalDocumentation external_docs = 3 [json_name = "externalDocs"];</code>
     * @param \Grpc\Gateway\Protoc_gen_openapiv2\Options\ExternalDocumentation $var
     * @return $this
     */
    public function setExternalDocs($var)
    {
        GPBUtil::checkMessage($var, \Grpc\Gateway\Protoc_gen_openapiv2\Options\ExternalDocumentation::class);
        $this->external_docs = $var;

        return $this;
    }

    /**
     * Custom properties that start with "x-" such as "x-foo" used to describe
     * extra functionality that is not covered by the standard OpenAPI Specification.
     * See: https://swagger.io/docs/specification/2-0/swagger-extensions/
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> extensions = 4 [json_name = "extensions"];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Custom properties that start with "x-" such as "x-foo" used to describe
     * extra functionality that is not covered by the standard OpenAPI Specification.
     * See: https://swagger.io/docs/specification/2-0/swagger-extensions/
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> extensions = 4 [json_name = "extensions"];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setExtensions($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Value::class);
        $this->extensions = $arr;

        return $this;
    }

}

