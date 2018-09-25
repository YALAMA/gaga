<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/user.proto

namespace Zaly\Proto\Core;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>core.ApplyUserProfile</code>
 */
class ApplyUserProfile extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.core.PublicUserProfile public = 1;</code>
     */
    private $public = null;
    /**
     * Generated from protobuf field <code>string greetings = 2;</code>
     */
    private $greetings = '';

    public function __construct() {
        \GPBMetadata\Core\User::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.core.PublicUserProfile public = 1;</code>
     * @return \Zaly\Proto\Core\PublicUserProfile
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * Generated from protobuf field <code>.core.PublicUserProfile public = 1;</code>
     * @param \Zaly\Proto\Core\PublicUserProfile $var
     * @return $this
     */
    public function setPublic($var)
    {
        GPBUtil::checkMessage($var, \Zaly\Proto\Core\PublicUserProfile::class);
        $this->public = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string greetings = 2;</code>
     * @return string
     */
    public function getGreetings()
    {
        return $this->greetings;
    }

    /**
     * Generated from protobuf field <code>string greetings = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setGreetings($var)
    {
        GPBUtil::checkString($var, True);
        $this->greetings = $var;

        return $this;
    }

}

