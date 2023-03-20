<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for a specific Connected Site Tag.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.ConnectedSiteTag</code>
 */
class ConnectedSiteTag extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. User-provided display name for the connected site tag. Must be
     * less than 256 characters.
     *
     * Generated from protobuf field <code>string display_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * Required. "Tag ID to forward events to. Also known as the Measurement ID,
     * or the "G-ID"  (For example: G-12345).
     *
     * Generated from protobuf field <code>string tag_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $tag_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $display_name
     *           Required. User-provided display name for the connected site tag. Must be
     *           less than 256 characters.
     *     @type string $tag_id
     *           Required. "Tag ID to forward events to. Also known as the Measurement ID,
     *           or the "G-ID"  (For example: G-12345).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. User-provided display name for the connected site tag. Must be
     * less than 256 characters.
     *
     * Generated from protobuf field <code>string display_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. User-provided display name for the connected site tag. Must be
     * less than 256 characters.
     *
     * Generated from protobuf field <code>string display_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Required. "Tag ID to forward events to. Also known as the Measurement ID,
     * or the "G-ID"  (For example: G-12345).
     *
     * Generated from protobuf field <code>string tag_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTagId()
    {
        return $this->tag_id;
    }

    /**
     * Required. "Tag ID to forward events to. Also known as the Measurement ID,
     * or the "G-ID"  (For example: G-12345).
     *
     * Generated from protobuf field <code>string tag_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTagId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tag_id = $var;

        return $this;
    }

}

