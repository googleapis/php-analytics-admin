<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/event_create_and_edit.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An Event Create Rule defines conditions that will trigger the creation
 * of an entirely new event based upon matched criteria of a source event.
 * Additional mutations of the parameters from the source event can be defined.
 * Unlike Event Edit rules, Event Creation Rules have no defined order.  They
 * will all be run independently.
 * Event Edit and Event Create rules can't be used to modify an event created
 * from an Event Create rule.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.EventCreateRule</code>
 */
class EventCreateRule extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name for this EventCreateRule resource.
     * Format:
     * properties/{property}/dataStreams/{data_stream}/eventCreateRules/{event_create_rule}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Required. The name of the new event to be created.
     * This value must:
     * * be less than 40 characters
     * * consist only of letters, digits or _ (underscores)
     * * start with a letter
     *
     * Generated from protobuf field <code>string destination_event = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $destination_event = '';
    /**
     * Required. Must have at least one condition, and can have up to 10 max.
     * Conditions on the source event must match for this rule to be applied.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.MatchingCondition event_conditions = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $event_conditions;
    /**
     * If true, the source parameters are copied to the new event.
     * If false, or unset, all non-internal parameters are not copied from the
     * source event. Parameter mutations are applied after the parameters have
     * been copied.
     *
     * Generated from protobuf field <code>bool source_copy_parameters = 4;</code>
     */
    protected $source_copy_parameters = false;
    /**
     * Parameter mutations define parameter behavior on the new event, and
     * are applied in order.
     * A maximum of 20 mutations can be applied.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.ParameterMutation parameter_mutations = 5;</code>
     */
    private $parameter_mutations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name for this EventCreateRule resource.
     *           Format:
     *           properties/{property}/dataStreams/{data_stream}/eventCreateRules/{event_create_rule}
     *     @type string $destination_event
     *           Required. The name of the new event to be created.
     *           This value must:
     *           * be less than 40 characters
     *           * consist only of letters, digits or _ (underscores)
     *           * start with a letter
     *     @type array<\Google\Analytics\Admin\V1alpha\MatchingCondition>|\Google\Protobuf\Internal\RepeatedField $event_conditions
     *           Required. Must have at least one condition, and can have up to 10 max.
     *           Conditions on the source event must match for this rule to be applied.
     *     @type bool $source_copy_parameters
     *           If true, the source parameters are copied to the new event.
     *           If false, or unset, all non-internal parameters are not copied from the
     *           source event. Parameter mutations are applied after the parameters have
     *           been copied.
     *     @type array<\Google\Analytics\Admin\V1alpha\ParameterMutation>|\Google\Protobuf\Internal\RepeatedField $parameter_mutations
     *           Parameter mutations define parameter behavior on the new event, and
     *           are applied in order.
     *           A maximum of 20 mutations can be applied.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\EventCreateAndEdit::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name for this EventCreateRule resource.
     * Format:
     * properties/{property}/dataStreams/{data_stream}/eventCreateRules/{event_create_rule}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name for this EventCreateRule resource.
     * Format:
     * properties/{property}/dataStreams/{data_stream}/eventCreateRules/{event_create_rule}
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
     * Required. The name of the new event to be created.
     * This value must:
     * * be less than 40 characters
     * * consist only of letters, digits or _ (underscores)
     * * start with a letter
     *
     * Generated from protobuf field <code>string destination_event = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDestinationEvent()
    {
        return $this->destination_event;
    }

    /**
     * Required. The name of the new event to be created.
     * This value must:
     * * be less than 40 characters
     * * consist only of letters, digits or _ (underscores)
     * * start with a letter
     *
     * Generated from protobuf field <code>string destination_event = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDestinationEvent($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination_event = $var;

        return $this;
    }

    /**
     * Required. Must have at least one condition, and can have up to 10 max.
     * Conditions on the source event must match for this rule to be applied.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.MatchingCondition event_conditions = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEventConditions()
    {
        return $this->event_conditions;
    }

    /**
     * Required. Must have at least one condition, and can have up to 10 max.
     * Conditions on the source event must match for this rule to be applied.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.MatchingCondition event_conditions = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Analytics\Admin\V1alpha\MatchingCondition>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEventConditions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Admin\V1alpha\MatchingCondition::class);
        $this->event_conditions = $arr;

        return $this;
    }

    /**
     * If true, the source parameters are copied to the new event.
     * If false, or unset, all non-internal parameters are not copied from the
     * source event. Parameter mutations are applied after the parameters have
     * been copied.
     *
     * Generated from protobuf field <code>bool source_copy_parameters = 4;</code>
     * @return bool
     */
    public function getSourceCopyParameters()
    {
        return $this->source_copy_parameters;
    }

    /**
     * If true, the source parameters are copied to the new event.
     * If false, or unset, all non-internal parameters are not copied from the
     * source event. Parameter mutations are applied after the parameters have
     * been copied.
     *
     * Generated from protobuf field <code>bool source_copy_parameters = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setSourceCopyParameters($var)
    {
        GPBUtil::checkBool($var);
        $this->source_copy_parameters = $var;

        return $this;
    }

    /**
     * Parameter mutations define parameter behavior on the new event, and
     * are applied in order.
     * A maximum of 20 mutations can be applied.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.ParameterMutation parameter_mutations = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParameterMutations()
    {
        return $this->parameter_mutations;
    }

    /**
     * Parameter mutations define parameter behavior on the new event, and
     * are applied in order.
     * A maximum of 20 mutations can be applied.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.ParameterMutation parameter_mutations = 5;</code>
     * @param array<\Google\Analytics\Admin\V1alpha\ParameterMutation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParameterMutations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Admin\V1alpha\ParameterMutation::class);
        $this->parameter_mutations = $arr;

        return $this;
    }

}

