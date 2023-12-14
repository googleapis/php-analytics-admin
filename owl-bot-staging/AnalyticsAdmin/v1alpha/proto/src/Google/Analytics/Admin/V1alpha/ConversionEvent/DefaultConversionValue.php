<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha\ConversionEvent;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines a default value/currency for a conversion event. Both value and
 * currency must be provided.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.ConversionEvent.DefaultConversionValue</code>
 */
class DefaultConversionValue extends \Google\Protobuf\Internal\Message
{
    /**
     * This value will be used to populate the value for all conversions
     * of the specified event_name where the event "value" parameter is unset.
     *
     * Generated from protobuf field <code>optional double value = 1;</code>
     */
    protected $value = null;
    /**
     * When a conversion event for this event_name has no set currency,
     * this currency will be applied as the default. Must be in ISO 4217
     * currency code format. See https://en.wikipedia.org/wiki/ISO_4217 for
     * more.
     *
     * Generated from protobuf field <code>optional string currency_code = 2;</code>
     */
    protected $currency_code = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $value
     *           This value will be used to populate the value for all conversions
     *           of the specified event_name where the event "value" parameter is unset.
     *     @type string $currency_code
     *           When a conversion event for this event_name has no set currency,
     *           this currency will be applied as the default. Must be in ISO 4217
     *           currency code format. See https://en.wikipedia.org/wiki/ISO_4217 for
     *           more.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * This value will be used to populate the value for all conversions
     * of the specified event_name where the event "value" parameter is unset.
     *
     * Generated from protobuf field <code>optional double value = 1;</code>
     * @return float
     */
    public function getValue()
    {
        return isset($this->value) ? $this->value : 0.0;
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * This value will be used to populate the value for all conversions
     * of the specified event_name where the event "value" parameter is unset.
     *
     * Generated from protobuf field <code>optional double value = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->value = $var;

        return $this;
    }

    /**
     * When a conversion event for this event_name has no set currency,
     * this currency will be applied as the default. Must be in ISO 4217
     * currency code format. See https://en.wikipedia.org/wiki/ISO_4217 for
     * more.
     *
     * Generated from protobuf field <code>optional string currency_code = 2;</code>
     * @return string
     */
    public function getCurrencyCode()
    {
        return isset($this->currency_code) ? $this->currency_code : '';
    }

    public function hasCurrencyCode()
    {
        return isset($this->currency_code);
    }

    public function clearCurrencyCode()
    {
        unset($this->currency_code);
    }

    /**
     * When a conversion event for this event_name has no set currency,
     * this currency will be applied as the default. Must be in ISO 4217
     * currency code format. See https://en.wikipedia.org/wiki/ISO_4217 for
     * more.
     *
     * Generated from protobuf field <code>optional string currency_code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency_code = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DefaultConversionValue::class, \Google\Analytics\Admin\V1alpha\ConversionEvent_DefaultConversionValue::class);
