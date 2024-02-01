<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for CreateCustomDimension RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.CreateCustomDimensionRequest</code>
 */
class CreateCustomDimensionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Example format: properties/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The CustomDimension to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.CustomDimension custom_dimension = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $custom_dimension = null;

    /**
     * @param string                                          $parent          Required. Example format: properties/1234
     * @param \Google\Analytics\Admin\V1alpha\CustomDimension $customDimension Required. The CustomDimension to create.
     *
     * @return \Google\Analytics\Admin\V1alpha\CreateCustomDimensionRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Analytics\Admin\V1alpha\CustomDimension $customDimension): self
    {
        return (new self())
            ->setParent($parent)
            ->setCustomDimension($customDimension);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Example format: properties/1234
     *     @type \Google\Analytics\Admin\V1alpha\CustomDimension $custom_dimension
     *           Required. The CustomDimension to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Example format: properties/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Example format: properties/1234
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
     * Required. The CustomDimension to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.CustomDimension custom_dimension = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Analytics\Admin\V1alpha\CustomDimension|null
     */
    public function getCustomDimension()
    {
        return $this->custom_dimension;
    }

    public function hasCustomDimension()
    {
        return isset($this->custom_dimension);
    }

    public function clearCustomDimension()
    {
        unset($this->custom_dimension);
    }

    /**
     * Required. The CustomDimension to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.CustomDimension custom_dimension = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Analytics\Admin\V1alpha\CustomDimension $var
     * @return $this
     */
    public function setCustomDimension($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\CustomDimension::class);
        $this->custom_dimension = $var;

        return $this;
    }

}

