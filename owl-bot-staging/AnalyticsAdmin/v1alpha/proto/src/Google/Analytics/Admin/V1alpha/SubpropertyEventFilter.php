<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/subproperty_event_filter.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A resource message representing a GA4 Subproperty event filter.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.SubpropertyEventFilter</code>
 */
class SubpropertyEventFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Format:
     * properties/{ordinary_property_id}/subpropertyEventFilters/{sub_property_event_filter}
     * Example: properties/1234/subpropertyEventFilters/5678
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Immutable. Resource name of the Subproperty that uses this filter.
     *
     * Generated from protobuf field <code>optional string apply_to_property = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $apply_to_property = null;
    /**
     * Required. Unordered list. Filter clauses that define the
     * SubpropertyEventFilter. All clauses are AND'ed together to determine what
     * data is sent to the subproperty.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.SubpropertyEventFilterClause filter_clauses = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = UNORDERED_LIST];</code>
     */
    private $filter_clauses;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Format:
     *           properties/{ordinary_property_id}/subpropertyEventFilters/{sub_property_event_filter}
     *           Example: properties/1234/subpropertyEventFilters/5678
     *     @type string $apply_to_property
     *           Immutable. Resource name of the Subproperty that uses this filter.
     *     @type array<\Google\Analytics\Admin\V1alpha\SubpropertyEventFilterClause>|\Google\Protobuf\Internal\RepeatedField $filter_clauses
     *           Required. Unordered list. Filter clauses that define the
     *           SubpropertyEventFilter. All clauses are AND'ed together to determine what
     *           data is sent to the subproperty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\SubpropertyEventFilter::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Format:
     * properties/{ordinary_property_id}/subpropertyEventFilters/{sub_property_event_filter}
     * Example: properties/1234/subpropertyEventFilters/5678
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Format:
     * properties/{ordinary_property_id}/subpropertyEventFilters/{sub_property_event_filter}
     * Example: properties/1234/subpropertyEventFilters/5678
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Immutable. Resource name of the Subproperty that uses this filter.
     *
     * Generated from protobuf field <code>optional string apply_to_property = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getApplyToProperty()
    {
        return isset($this->apply_to_property) ? $this->apply_to_property : '';
    }

    public function hasApplyToProperty()
    {
        return isset($this->apply_to_property);
    }

    public function clearApplyToProperty()
    {
        unset($this->apply_to_property);
    }

    /**
     * Immutable. Resource name of the Subproperty that uses this filter.
     *
     * Generated from protobuf field <code>optional string apply_to_property = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setApplyToProperty($var)
    {
        GPBUtil::checkString($var, True);
        $this->apply_to_property = $var;

        return $this;
    }

    /**
     * Required. Unordered list. Filter clauses that define the
     * SubpropertyEventFilter. All clauses are AND'ed together to determine what
     * data is sent to the subproperty.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.SubpropertyEventFilterClause filter_clauses = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = UNORDERED_LIST];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFilterClauses()
    {
        return $this->filter_clauses;
    }

    /**
     * Required. Unordered list. Filter clauses that define the
     * SubpropertyEventFilter. All clauses are AND'ed together to determine what
     * data is sent to the subproperty.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.SubpropertyEventFilterClause filter_clauses = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = UNORDERED_LIST];</code>
     * @param array<\Google\Analytics\Admin\V1alpha\SubpropertyEventFilterClause>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFilterClauses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Admin\V1alpha\SubpropertyEventFilterClause::class);
        $this->filter_clauses = $arr;

        return $this;
    }

}

