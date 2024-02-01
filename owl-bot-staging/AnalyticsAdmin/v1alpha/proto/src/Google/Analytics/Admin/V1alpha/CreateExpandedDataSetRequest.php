<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for CreateExpandedDataSet RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.CreateExpandedDataSetRequest</code>
 */
class CreateExpandedDataSetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Example format: properties/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The ExpandedDataSet to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.ExpandedDataSet expanded_data_set = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $expanded_data_set = null;

    /**
     * @param string                                          $parent          Required. Example format: properties/1234
     * @param \Google\Analytics\Admin\V1alpha\ExpandedDataSet $expandedDataSet Required. The ExpandedDataSet to create.
     *
     * @return \Google\Analytics\Admin\V1alpha\CreateExpandedDataSetRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Analytics\Admin\V1alpha\ExpandedDataSet $expandedDataSet): self
    {
        return (new self())
            ->setParent($parent)
            ->setExpandedDataSet($expandedDataSet);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Example format: properties/1234
     *     @type \Google\Analytics\Admin\V1alpha\ExpandedDataSet $expanded_data_set
     *           Required. The ExpandedDataSet to create.
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
     * Required. The ExpandedDataSet to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.ExpandedDataSet expanded_data_set = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Analytics\Admin\V1alpha\ExpandedDataSet|null
     */
    public function getExpandedDataSet()
    {
        return $this->expanded_data_set;
    }

    public function hasExpandedDataSet()
    {
        return isset($this->expanded_data_set);
    }

    public function clearExpandedDataSet()
    {
        unset($this->expanded_data_set);
    }

    /**
     * Required. The ExpandedDataSet to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.ExpandedDataSet expanded_data_set = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Analytics\Admin\V1alpha\ExpandedDataSet $var
     * @return $this
     */
    public function setExpandedDataSet($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\ExpandedDataSet::class);
        $this->expanded_data_set = $var;

        return $this;
    }

}

