<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Read-only resource used to summarize a principal's effective roles.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.AuditUserLink</code>
 */
class AuditUserLink extends \Google\Protobuf\Internal\Message
{
    /**
     * Example format: properties/1234/userLinks/5678
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Email address of the linked user
     *
     * Generated from protobuf field <code>string email_address = 2;</code>
     */
    protected $email_address = '';
    /**
     * Roles directly assigned to this user for this entity.
     * Format: predefinedRoles/viewer
     * Excludes roles that are inherited from an account (if this is for a
     * property), group, or organization admin role.
     *
     * Generated from protobuf field <code>repeated string direct_roles = 3;</code>
     */
    private $direct_roles;
    /**
     * Union of all permissions a user has at this account or property (includes
     * direct permissions, group-inherited permissions, etc.).
     * Format: predefinedRoles/viewer
     *
     * Generated from protobuf field <code>repeated string effective_roles = 4;</code>
     */
    private $effective_roles;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Example format: properties/1234/userLinks/5678
     *     @type string $email_address
     *           Email address of the linked user
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $direct_roles
     *           Roles directly assigned to this user for this entity.
     *           Format: predefinedRoles/viewer
     *           Excludes roles that are inherited from an account (if this is for a
     *           property), group, or organization admin role.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $effective_roles
     *           Union of all permissions a user has at this account or property (includes
     *           direct permissions, group-inherited permissions, etc.).
     *           Format: predefinedRoles/viewer
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Example format: properties/1234/userLinks/5678
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Example format: properties/1234/userLinks/5678
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Email address of the linked user
     *
     * Generated from protobuf field <code>string email_address = 2;</code>
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->email_address;
    }

    /**
     * Email address of the linked user
     *
     * Generated from protobuf field <code>string email_address = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEmailAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->email_address = $var;

        return $this;
    }

    /**
     * Roles directly assigned to this user for this entity.
     * Format: predefinedRoles/viewer
     * Excludes roles that are inherited from an account (if this is for a
     * property), group, or organization admin role.
     *
     * Generated from protobuf field <code>repeated string direct_roles = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDirectRoles()
    {
        return $this->direct_roles;
    }

    /**
     * Roles directly assigned to this user for this entity.
     * Format: predefinedRoles/viewer
     * Excludes roles that are inherited from an account (if this is for a
     * property), group, or organization admin role.
     *
     * Generated from protobuf field <code>repeated string direct_roles = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDirectRoles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->direct_roles = $arr;

        return $this;
    }

    /**
     * Union of all permissions a user has at this account or property (includes
     * direct permissions, group-inherited permissions, etc.).
     * Format: predefinedRoles/viewer
     *
     * Generated from protobuf field <code>repeated string effective_roles = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEffectiveRoles()
    {
        return $this->effective_roles;
    }

    /**
     * Union of all permissions a user has at this account or property (includes
     * direct permissions, group-inherited permissions, etc.).
     * Format: predefinedRoles/viewer
     *
     * Generated from protobuf field <code>repeated string effective_roles = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEffectiveRoles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->effective_roles = $arr;

        return $this;
    }

}

