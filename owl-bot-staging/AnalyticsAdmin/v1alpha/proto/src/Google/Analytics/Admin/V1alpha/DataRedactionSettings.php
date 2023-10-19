<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings for client-side data redaction. Singleton resource under a Web
 * Stream.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.DataRedactionSettings</code>
 */
class DataRedactionSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Name of this Data Redaction Settings resource.
     * Format:
     * properties/{property_id}/dataStreams/{data_stream}/dataRedactionSettings
     * Example: "properties/1000/dataStreams/2000/dataRedactionSettings"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * If enabled, any event parameter or user property values that look like an
     * email will be redacted.
     *
     * Generated from protobuf field <code>bool email_redaction_enabled = 2;</code>
     */
    protected $email_redaction_enabled = false;
    /**
     * Query Parameter redaction removes the key and value portions of a
     * query parameter if it is in the configured set of query parameters.
     * If enabled, URL query replacement logic will be run for the Stream. Any
     * query parameters defined in query_parameter_keys will be redacted.
     *
     * Generated from protobuf field <code>bool query_parameter_redaction_enabled = 3;</code>
     */
    protected $query_parameter_redaction_enabled = false;
    /**
     * The query parameter keys to apply redaction logic to if present in the URL.
     * Query parameter matching is case-insensitive.
     * Must contain at least one element if query_parameter_replacement_enabled
     * is true. Keys cannot contain commas.
     *
     * Generated from protobuf field <code>repeated string query_parameter_keys = 4;</code>
     */
    private $query_parameter_keys;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Name of this Data Redaction Settings resource.
     *           Format:
     *           properties/{property_id}/dataStreams/{data_stream}/dataRedactionSettings
     *           Example: "properties/1000/dataStreams/2000/dataRedactionSettings"
     *     @type bool $email_redaction_enabled
     *           If enabled, any event parameter or user property values that look like an
     *           email will be redacted.
     *     @type bool $query_parameter_redaction_enabled
     *           Query Parameter redaction removes the key and value portions of a
     *           query parameter if it is in the configured set of query parameters.
     *           If enabled, URL query replacement logic will be run for the Stream. Any
     *           query parameters defined in query_parameter_keys will be redacted.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $query_parameter_keys
     *           The query parameter keys to apply redaction logic to if present in the URL.
     *           Query parameter matching is case-insensitive.
     *           Must contain at least one element if query_parameter_replacement_enabled
     *           is true. Keys cannot contain commas.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Name of this Data Redaction Settings resource.
     * Format:
     * properties/{property_id}/dataStreams/{data_stream}/dataRedactionSettings
     * Example: "properties/1000/dataStreams/2000/dataRedactionSettings"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Name of this Data Redaction Settings resource.
     * Format:
     * properties/{property_id}/dataStreams/{data_stream}/dataRedactionSettings
     * Example: "properties/1000/dataStreams/2000/dataRedactionSettings"
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
     * If enabled, any event parameter or user property values that look like an
     * email will be redacted.
     *
     * Generated from protobuf field <code>bool email_redaction_enabled = 2;</code>
     * @return bool
     */
    public function getEmailRedactionEnabled()
    {
        return $this->email_redaction_enabled;
    }

    /**
     * If enabled, any event parameter or user property values that look like an
     * email will be redacted.
     *
     * Generated from protobuf field <code>bool email_redaction_enabled = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setEmailRedactionEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->email_redaction_enabled = $var;

        return $this;
    }

    /**
     * Query Parameter redaction removes the key and value portions of a
     * query parameter if it is in the configured set of query parameters.
     * If enabled, URL query replacement logic will be run for the Stream. Any
     * query parameters defined in query_parameter_keys will be redacted.
     *
     * Generated from protobuf field <code>bool query_parameter_redaction_enabled = 3;</code>
     * @return bool
     */
    public function getQueryParameterRedactionEnabled()
    {
        return $this->query_parameter_redaction_enabled;
    }

    /**
     * Query Parameter redaction removes the key and value portions of a
     * query parameter if it is in the configured set of query parameters.
     * If enabled, URL query replacement logic will be run for the Stream. Any
     * query parameters defined in query_parameter_keys will be redacted.
     *
     * Generated from protobuf field <code>bool query_parameter_redaction_enabled = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setQueryParameterRedactionEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->query_parameter_redaction_enabled = $var;

        return $this;
    }

    /**
     * The query parameter keys to apply redaction logic to if present in the URL.
     * Query parameter matching is case-insensitive.
     * Must contain at least one element if query_parameter_replacement_enabled
     * is true. Keys cannot contain commas.
     *
     * Generated from protobuf field <code>repeated string query_parameter_keys = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQueryParameterKeys()
    {
        return $this->query_parameter_keys;
    }

    /**
     * The query parameter keys to apply redaction logic to if present in the URL.
     * Query parameter matching is case-insensitive.
     * Must contain at least one element if query_parameter_replacement_enabled
     * is true. Keys cannot contain commas.
     *
     * Generated from protobuf field <code>repeated string query_parameter_keys = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQueryParameterKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->query_parameter_keys = $arr;

        return $this;
    }

}

