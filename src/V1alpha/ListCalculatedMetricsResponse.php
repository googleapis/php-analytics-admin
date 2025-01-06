<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for ListCalculatedMetrics RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.ListCalculatedMetricsResponse</code>
 */
class ListCalculatedMetricsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of CalculatedMetrics.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.CalculatedMetric calculated_metrics = 1;</code>
     */
    private $calculated_metrics;
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
     *     @type array<\Google\Analytics\Admin\V1alpha\CalculatedMetric>|\Google\Protobuf\Internal\RepeatedField $calculated_metrics
     *           List of CalculatedMetrics.
     *     @type string $next_page_token
     *           A token, which can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * List of CalculatedMetrics.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.CalculatedMetric calculated_metrics = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCalculatedMetrics()
    {
        return $this->calculated_metrics;
    }

    /**
     * List of CalculatedMetrics.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.CalculatedMetric calculated_metrics = 1;</code>
     * @param array<\Google\Analytics\Admin\V1alpha\CalculatedMetric>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCalculatedMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Admin\V1alpha\CalculatedMetric::class);
        $this->calculated_metrics = $arr;

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

