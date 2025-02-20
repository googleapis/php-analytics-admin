<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1beta/analytics_admin.proto

namespace Google\Analytics\Admin\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for ListCustomDimensions RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1beta.ListCustomDimensionsResponse</code>
 */
class ListCustomDimensionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of CustomDimensions.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1beta.CustomDimension custom_dimensions = 1;</code>
     */
    private $custom_dimensions;
    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Analytics\Admin\V1beta\CustomDimension>|\Google\Protobuf\Internal\RepeatedField $custom_dimensions
     *           List of CustomDimensions.
     *     @type string $next_page_token
     *           A token, which can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Beta\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * List of CustomDimensions.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1beta.CustomDimension custom_dimensions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCustomDimensions()
    {
        return $this->custom_dimensions;
    }

    /**
     * List of CustomDimensions.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1beta.CustomDimension custom_dimensions = 1;</code>
     * @param array<\Google\Analytics\Admin\V1beta\CustomDimension>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCustomDimensions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Admin\V1beta\CustomDimension::class);
        $this->custom_dimensions = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

