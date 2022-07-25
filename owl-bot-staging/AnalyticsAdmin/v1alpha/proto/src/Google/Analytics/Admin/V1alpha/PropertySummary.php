<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A virtual resource representing metadata for a GA4 property.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.PropertySummary</code>
 */
class PropertySummary extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of property referred to by this property summary
     * Format: properties/{property_id}
     * Example: "properties/1000"
     *
     * Generated from protobuf field <code>string property = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $property = '';
    /**
     * Display name for the property referred to in this property summary.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    protected $display_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $property
     *           Resource name of property referred to by this property summary
     *           Format: properties/{property_id}
     *           Example: "properties/1000"
     *     @type string $display_name
     *           Display name for the property referred to in this property summary.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of property referred to by this property summary
     * Format: properties/{property_id}
     * Example: "properties/1000"
     *
     * Generated from protobuf field <code>string property = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Resource name of property referred to by this property summary
     * Format: properties/{property_id}
     * Example: "properties/1000"
     *
     * Generated from protobuf field <code>string property = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setProperty($var)
    {
        GPBUtil::checkString($var, True);
        $this->property = $var;

        return $this;
    }

    /**
     * Display name for the property referred to in this property summary.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Display name for the property referred to in this property summary.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

}
