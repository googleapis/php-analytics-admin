<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for UpdateMeasurementProtocolSecret RPC
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.UpdateMeasurementProtocolSecretRequest</code>
 */
class UpdateMeasurementProtocolSecretRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The measurement protocol secret to update.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.MeasurementProtocolSecret measurement_protocol_secret = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $measurement_protocol_secret = null;
    /**
     * Required. The list of fields to be updated. Omitted fields will not be
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Analytics\Admin\V1alpha\MeasurementProtocolSecret $measurementProtocolSecret Required. The measurement protocol secret to update.
     * @param \Google\Protobuf\FieldMask                                $updateMask                Required. The list of fields to be updated. Omitted fields will not be
     *                                                                                             updated.
     *
     * @return \Google\Analytics\Admin\V1alpha\UpdateMeasurementProtocolSecretRequest
     *
     * @experimental
     */
    public static function build(\Google\Analytics\Admin\V1alpha\MeasurementProtocolSecret $measurementProtocolSecret, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setMeasurementProtocolSecret($measurementProtocolSecret)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Admin\V1alpha\MeasurementProtocolSecret $measurement_protocol_secret
     *           Required. The measurement protocol secret to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The list of fields to be updated. Omitted fields will not be
     *           updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The measurement protocol secret to update.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.MeasurementProtocolSecret measurement_protocol_secret = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Analytics\Admin\V1alpha\MeasurementProtocolSecret|null
     */
    public function getMeasurementProtocolSecret()
    {
        return $this->measurement_protocol_secret;
    }

    public function hasMeasurementProtocolSecret()
    {
        return isset($this->measurement_protocol_secret);
    }

    public function clearMeasurementProtocolSecret()
    {
        unset($this->measurement_protocol_secret);
    }

    /**
     * Required. The measurement protocol secret to update.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.MeasurementProtocolSecret measurement_protocol_secret = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Analytics\Admin\V1alpha\MeasurementProtocolSecret $var
     * @return $this
     */
    public function setMeasurementProtocolSecret($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\MeasurementProtocolSecret::class);
        $this->measurement_protocol_secret = $var;

        return $this;
    }

    /**
     * Required. The list of fields to be updated. Omitted fields will not be
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. The list of fields to be updated. Omitted fields will not be
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

