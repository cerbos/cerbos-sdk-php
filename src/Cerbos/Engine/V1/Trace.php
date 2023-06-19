<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cerbos/engine/v1/engine.proto

namespace Cerbos\Engine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.engine.v1.Trace</code>
 */
class Trace extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .cerbos.engine.v1.Trace.Component components = 1 [json_name = "components"];</code>
     */
    private $components;
    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.Trace.Event event = 2 [json_name = "event"];</code>
     */
    protected $event = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Cerbos\Engine\V1\Trace\Component>|\Google\Protobuf\Internal\RepeatedField $components
     *     @type \Cerbos\Engine\V1\Trace\Event $event
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Engine\V1\Engine::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.engine.v1.Trace.Component components = 1 [json_name = "components"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getComponents()
    {
        return $this->components;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.engine.v1.Trace.Component components = 1 [json_name = "components"];</code>
     * @param array<\Cerbos\Engine\V1\Trace\Component>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setComponents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Engine\V1\Trace\Component::class);
        $this->components = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.Trace.Event event = 2 [json_name = "event"];</code>
     * @return \Cerbos\Engine\V1\Trace\Event|null
     */
    public function getEvent()
    {
        return $this->event;
    }

    public function hasEvent()
    {
        return isset($this->event);
    }

    public function clearEvent()
    {
        unset($this->event);
    }

    /**
     * Generated from protobuf field <code>.cerbos.engine.v1.Trace.Event event = 2 [json_name = "event"];</code>
     * @param \Cerbos\Engine\V1\Trace\Event $var
     * @return $this
     */
    public function setEvent($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Engine\V1\Trace\Event::class);
        $this->event = $var;

        return $this;
    }

}

