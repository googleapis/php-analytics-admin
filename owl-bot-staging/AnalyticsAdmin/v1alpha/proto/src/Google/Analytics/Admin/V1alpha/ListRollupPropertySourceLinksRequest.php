<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for ListRollupPropertySourceLinks RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.ListRollupPropertySourceLinksRequest</code>
 */
class ListRollupPropertySourceLinksRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the roll-up property to list roll-up property source
     * links under. Format: properties/{property_id} Example: properties/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The maximum number of resources to return. The service may return
     * fewer than this value, even if there are additional pages.
     * If unspecified, at most 50 resources will be returned.
     * The maximum value is 200; (higher values will be coerced to the maximum)
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. A page token, received from a previous
     * `ListRollupPropertySourceLinks` call. Provide this to retrieve the
     * subsequent page. When paginating, all other parameters provided to
     * `ListRollupPropertySourceLinks` must match the call that provided the page
     * token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The name of the roll-up property to list roll-up property source
     *                       links under. Format: properties/{property_id} Example: properties/1234
     *
     * @return \Google\Analytics\Admin\V1alpha\ListRollupPropertySourceLinksRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the roll-up property to list roll-up property source
     *           links under. Format: properties/{property_id} Example: properties/1234
     *     @type int $page_size
     *           Optional. The maximum number of resources to return. The service may return
     *           fewer than this value, even if there are additional pages.
     *           If unspecified, at most 50 resources will be returned.
     *           The maximum value is 200; (higher values will be coerced to the maximum)
     *     @type string $page_token
     *           Optional. A page token, received from a previous
     *           `ListRollupPropertySourceLinks` call. Provide this to retrieve the
     *           subsequent page. When paginating, all other parameters provided to
     *           `ListRollupPropertySourceLinks` must match the call that provided the page
     *           token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the roll-up property to list roll-up property source
     * links under. Format: properties/{property_id} Example: properties/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the roll-up property to list roll-up property source
     * links under. Format: properties/{property_id} Example: properties/1234
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
     * Optional. The maximum number of resources to return. The service may return
     * fewer than this value, even if there are additional pages.
     * If unspecified, at most 50 resources will be returned.
     * The maximum value is 200; (higher values will be coerced to the maximum)
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of resources to return. The service may return
     * fewer than this value, even if there are additional pages.
     * If unspecified, at most 50 resources will be returned.
     * The maximum value is 200; (higher values will be coerced to the maximum)
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. A page token, received from a previous
     * `ListRollupPropertySourceLinks` call. Provide this to retrieve the
     * subsequent page. When paginating, all other parameters provided to
     * `ListRollupPropertySourceLinks` must match the call that provided the page
     * token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A page token, received from a previous
     * `ListRollupPropertySourceLinks` call. Provide this to retrieve the
     * subsequent page. When paginating, all other parameters provided to
     * `ListRollupPropertySourceLinks` must match the call that provided the page
     * token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

