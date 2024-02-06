<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for CreateAccessBinding RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.CreateAccessBindingRequest</code>
 */
class CreateAccessBindingRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Formats:
     * - accounts/{account}
     * - properties/{property}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The access binding to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AccessBinding access_binding = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $access_binding = null;

    /**
     * @param string                                        $parent        Required. Formats:
     *                                                                     - accounts/{account}
     *                                                                     - properties/{property}
     *                                                                     Please see {@see AnalyticsAdminServiceClient::accountName()} for help formatting this field.
     * @param \Google\Analytics\Admin\V1alpha\AccessBinding $accessBinding Required. The access binding to create.
     *
     * @return \Google\Analytics\Admin\V1alpha\CreateAccessBindingRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Analytics\Admin\V1alpha\AccessBinding $accessBinding): self
    {
        return (new self())
            ->setParent($parent)
            ->setAccessBinding($accessBinding);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Formats:
     *           - accounts/{account}
     *           - properties/{property}
     *     @type \Google\Analytics\Admin\V1alpha\AccessBinding $access_binding
     *           Required. The access binding to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Formats:
     * - accounts/{account}
     * - properties/{property}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Formats:
     * - accounts/{account}
     * - properties/{property}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The access binding to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AccessBinding access_binding = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Analytics\Admin\V1alpha\AccessBinding|null
     */
    public function getAccessBinding()
    {
        return $this->access_binding;
    }

    public function hasAccessBinding()
    {
        return isset($this->access_binding);
    }

    public function clearAccessBinding()
    {
        unset($this->access_binding);
    }

    /**
     * Required. The access binding to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AccessBinding access_binding = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Analytics\Admin\V1alpha\AccessBinding $var
     * @return $this
     */
    public function setAccessBinding($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\AccessBinding::class);
        $this->access_binding = $var;

        return $this;
    }

}
