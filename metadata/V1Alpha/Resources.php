<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace GPBMetadata\Google\Analytics\Admin\V1Alpha;

class Resources
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\Audience::initOnce();
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\ChannelGroup::initOnce();
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\EventCreateAndEdit::initOnce();
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\ExpandedDataSet::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Type\Date::initOnce();
        $pool->internalAddGeneratedFile(
            '
ݫ
.google/analytics/admin/v1alpha/resources.protogoogle.analytics.admin.v1alpha2google/analytics/admin/v1alpha/channel_group.proto:google/analytics/admin/v1alpha/event_create_and_edit.proto6google/analytics/admin/v1alpha/expanded_data_set.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/timestamp.protogoogle/protobuf/wrappers.protogoogle/type/date.proto"�
Account
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
display_name (	B�A
region_code (	
deleted (B�AT
gmp_organization (	B:�A�A4
2marketingplatformadmin.googleapis.com/Organization:>�A;
%analyticsadmin.googleapis.com/Accountaccounts/{account}"�
Property
name (	B�AH
property_type (2,.google.analytics.admin.v1alpha.PropertyTypeB�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
parent (	B�A
display_name (	B�AK
industry_category (20.google.analytics.admin.v1alpha.IndustryCategory
	time_zone (	B�A
currency_code (	H
service_level
 (2,.google.analytics.admin.v1alpha.ServiceLevelB�A4
delete_time (2.google.protobuf.TimestampB�A4
expire_time (2.google.protobuf.TimestampB�A>
account (	B-�A�A\'
%analyticsadmin.googleapis.com/Account:B�A?
&analyticsadmin.googleapis.com/Propertyproperties/{property}"�

DataStreamS
web_stream_data (28.google.analytics.admin.v1alpha.DataStream.WebStreamDataH b
android_app_stream_data (2?.google.analytics.admin.v1alpha.DataStream.AndroidAppStreamDataH Z
ios_app_stream_data (2;.google.analytics.admin.v1alpha.DataStream.IosAppStreamDataH 
name (	B�AO
type (29.google.analytics.admin.v1alpha.DataStream.DataStreamTypeB�A�A
display_name (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A_
WebStreamData
measurement_id (	B�A
firebase_app_id (	B�A
default_uri (	O
AndroidAppStreamData
firebase_app_id (	B�A
package_name (	B�AK
IosAppStreamData
firebase_app_id (	B�A
	bundle_id (	B�A�A"}
DataStreamType 
DATA_STREAM_TYPE_UNSPECIFIED 
WEB_DATA_STREAM
ANDROID_APP_DATA_STREAM
IOS_APP_DATA_STREAM:^�A[
(analyticsadmin.googleapis.com/DataStream/properties/{property}/dataStreams/{data_stream}B
stream_data"�
FirebaseLink
name (	B�A
project (	B�A4
create_time (2.google.protobuf.TimestampB�A:d�Aa
*analyticsadmin.googleapis.com/FirebaseLink3properties/{property}/firebaseLinks/{firebase_link}"�
GlobalSiteTag
name (	B�A
snippet (	B�A:o�Al
+analyticsadmin.googleapis.com/GlobalSiteTag=properties/{property}/dataStreams/{data_stream}/globalSiteTag"�
GoogleAdsLink
name (	B�A
customer_id (	B�A
can_manage_clients (B�A?
ads_personalization_enabled (2.google.protobuf.BoolValue4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A"
creator_email_address	 (	B�A:h�Ae
+analyticsadmin.googleapis.com/GoogleAdsLink6properties/{property}/googleAdsLinks/{google_ads_link}"�
DataSharingSettings
name (	B�A+
#sharing_with_google_support_enabled (2
*sharing_with_google_assigned_sales_enabled (1
%sharing_with_google_any_sales_enabled (B,
$sharing_with_google_products_enabled (#
sharing_with_others_enabled (:^�A[
1analyticsadmin.googleapis.com/DataSharingSettings&accounts/{account}/dataSharingSettings"�
AccountSummary
name (	;
account (	B*�A\'
%analyticsadmin.googleapis.com/Account
display_name (	K
property_summaries (2/.google.analytics.admin.v1alpha.PropertySummary:U�AR
,analyticsadmin.googleapis.com/AccountSummary"accountSummaries/{account_summary}"�
PropertySummary=
property (	B+�A(
&analyticsadmin.googleapis.com/Property
display_name (	C
property_type (2,.google.analytics.admin.v1alpha.PropertyType
parent (	"�
MeasurementProtocolSecret
name (	B�A
display_name (	B�A
secret_value (	B�A:��A�
7analyticsadmin.googleapis.com/MeasurementProtocolSecrethproperties/{property}/dataStreams/{data_stream}/measurementProtocolSecrets/{measurement_protocol_secret}"�
 SKAdNetworkConversionValueSchema
name (	B�AP
postback_window_one (2..google.analytics.admin.v1alpha.PostbackWindowB�AK
postback_window_two (2..google.analytics.admin.v1alpha.PostbackWindowM
postback_window_three (2..google.analytics.admin.v1alpha.PostbackWindow
apply_conversion_values (:��A�
>analyticsadmin.googleapis.com/SKAdNetworkConversionValueSchemavproperties/{property}/dataStreams/{data_stream}/sKAdNetworkConversionValueSchema/{skadnetwork_conversion_value_schema}"�
PostbackWindowK
conversion_values (20.google.analytics.admin.v1alpha.ConversionValues(
 postback_window_settings_enabled ("�
ConversionValues
display_name (	

fine_value (H �F
coarse_value (2+.google.analytics.admin.v1alpha.CoarseValueB�AD
event_mappings (2,.google.analytics.admin.v1alpha.EventMapping
lock_enabled (B
_fine_value"�
EventMapping

event_name (	B�A
min_event_count (H �
max_event_count (H�
min_event_value (H�
max_event_value (H�B
_min_event_countB
_max_event_countB
_min_event_valueB
_max_event_value"�
ChangeHistoryEvent

id (	/
change_time (2.google.protobuf.Timestamp=

actor_type (2).google.analytics.admin.v1alpha.ActorType
user_actor_email (	
changes_filtered (D
changes (23.google.analytics.admin.v1alpha.ChangeHistoryChange"�
ChangeHistoryChange
resource (	:
action (2*.google.analytics.admin.v1alpha.ActionTypei
resource_before_change (2I.google.analytics.admin.v1alpha.ChangeHistoryChange.ChangeHistoryResourceh
resource_after_change (2I.google.analytics.admin.v1alpha.ChangeHistoryChange.ChangeHistoryResource�
ChangeHistoryResource:
account (2\'.google.analytics.admin.v1alpha.AccountH <
property (2(.google.analytics.admin.v1alpha.PropertyH E
firebase_link (2,.google.analytics.admin.v1alpha.FirebaseLinkH H
google_ads_link (2-.google.analytics.admin.v1alpha.GoogleAdsLinkH X
google_signals_settings (25.google.analytics.admin.v1alpha.GoogleSignalsSettingsH j
!display_video_360_advertiser_link	 (2=.google.analytics.admin.v1alpha.DisplayVideo360AdvertiserLinkH {
*display_video_360_advertiser_link_proposal
 (2E.google.analytics.admin.v1alpha.DisplayVideo360AdvertiserLinkProposalH K
conversion_event (2/.google.analytics.admin.v1alpha.ConversionEventH `
measurement_protocol_secret (29.google.analytics.admin.v1alpha.MeasurementProtocolSecretH K
custom_dimension (2/.google.analytics.admin.v1alpha.CustomDimensionH E
custom_metric (2,.google.analytics.admin.v1alpha.CustomMetricH X
data_retention_settings (25.google.analytics.admin.v1alpha.DataRetentionSettingsH O
search_ads_360_link (20.google.analytics.admin.v1alpha.SearchAds360LinkH A
data_stream (2*.google.analytics.admin.v1alpha.DataStreamH S
attribution_settings (23.google.analytics.admin.v1alpha.AttributionSettingsH L
expanded_data_set (2/.google.analytics.admin.v1alpha.ExpandedDataSetH E
channel_group (2,.google.analytics.admin.v1alpha.ChannelGroupH E
bigquery_link (2,.google.analytics.admin.v1alpha.BigQueryLinkH d
enhanced_measurement_settings (2;.google.analytics.admin.v1alpha.EnhancedMeasurementSettingsH X
data_redaction_settings (25.google.analytics.admin.v1alpha.DataRedactionSettingsH o
#skadnetwork_conversion_value_schema (2@.google.analytics.admin.v1alpha.SKAdNetworkConversionValueSchemaH C
adsense_link (2+.google.analytics.admin.v1alpha.AdSenseLinkH <
audience (2(.google.analytics.admin.v1alpha.AudienceH L
event_create_rule (2/.google.analytics.admin.v1alpha.EventCreateRuleH =
	key_event (2(.google.analytics.admin.v1alpha.KeyEventH M
calculated_metric (20.google.analytics.admin.v1alpha.CalculatedMetricH \\
reporting_data_annotation  (27.google.analytics.admin.v1alpha.ReportingDataAnnotationH X
subproperty_sync_config! (25.google.analytics.admin.v1alpha.SubpropertySyncConfigH B

resource"�
DisplayVideo360AdvertiserLink
name (	B�A
advertiser_id (	B�A$
advertiser_display_name (	B�A?
ads_personalization_enabled (2.google.protobuf.BoolValueF
campaign_data_sharing_enabled (2.google.protobuf.BoolValueB�AB
cost_data_sharing_enabled (2.google.protobuf.BoolValueB�A:��A�
;analyticsadmin.googleapis.com/DisplayVideo360AdvertiserLinkXproperties/{property}/displayVideo360AdvertiserLinks/{display_video_360_advertiser_link}"�
%DisplayVideo360AdvertiserLinkProposal
name (	B�A
advertiser_id (	B�Ad
link_proposal_status_details (29.google.analytics.admin.v1alpha.LinkProposalStatusDetailsB�A$
advertiser_display_name (	B�A
validation_email (	B�AD
ads_personalization_enabled (2.google.protobuf.BoolValueB�AF
campaign_data_sharing_enabled (2.google.protobuf.BoolValueB�AB
cost_data_sharing_enabled (2.google.protobuf.BoolValueB�A:��A�
Canalyticsadmin.googleapis.com/DisplayVideo360AdvertiserLinkProposaliproperties/{property}/displayVideo360AdvertiserLinkProposals/{display_video_360_advertiser_link_proposal}"�
SearchAds360Link
name (	B�A
advertiser_id (	B�AF
campaign_data_sharing_enabled (2.google.protobuf.BoolValueB�AB
cost_data_sharing_enabled (2.google.protobuf.BoolValueB�A$
advertiser_display_name (	B�A?
ads_personalization_enabled (2.google.protobuf.BoolValue>
site_stats_sharing_enabled (2.google.protobuf.BoolValue:r�Ao
.analyticsadmin.googleapis.com/SearchAds360Link=properties/{property}/searchAds360Links/{search_ads_360_link}"�
LinkProposalStatusDetailsl
 link_proposal_initiating_product (2=.google.analytics.admin.v1alpha.LinkProposalInitiatingProductB�A
requestor_email (	B�AS
link_proposal_state (21.google.analytics.admin.v1alpha.LinkProposalStateB�A"�
ConversionEvent
name (	B�A

event_name (	B�A4
create_time (2.google.protobuf.TimestampB�A
	deletable (B�A
custom (B�Af
counting_method (2H.google.analytics.admin.v1alpha.ConversionEvent.ConversionCountingMethodB�Ar
default_conversion_value (2F.google.analytics.admin.v1alpha.ConversionEvent.DefaultConversionValueB�AH �d
DefaultConversionValue
value (H �
currency_code (	H�B
_valueB
_currency_code"p
ConversionCountingMethod*
&CONVERSION_COUNTING_METHOD_UNSPECIFIED 
ONCE_PER_EVENT
ONCE_PER_SESSION:m�Aj
-analyticsadmin.googleapis.com/ConversionEvent9properties/{property}/conversionEvents/{conversion_event}B
_default_conversion_value"�
KeyEvent
name (	B�A

event_name (	B�A4
create_time (2.google.protobuf.TimestampB�A
	deletable (B�A
custom (B�AU
counting_method (27.google.analytics.admin.v1alpha.KeyEvent.CountingMethodB�AQ
default_value (25.google.analytics.admin.v1alpha.KeyEvent.DefaultValueB�AF
DefaultValue
numeric_value (B�A
currency_code (	B�A"[
CountingMethod
COUNTING_METHOD_UNSPECIFIED 
ONCE_PER_EVENT
ONCE_PER_SESSION:m�Aj
&analyticsadmin.googleapis.com/KeyEvent+properties/{property}/keyEvents/{key_event}*	keyEvents2keyEvent"�
GoogleSignalsSettings
name (	B�AA
state (22.google.analytics.admin.v1alpha.GoogleSignalsStateJ
consent (24.google.analytics.admin.v1alpha.GoogleSignalsConsentB�A:e�Ab
3analyticsadmin.googleapis.com/GoogleSignalsSettings+properties/{property}/googleSignalsSettings"�
CustomDimension
name (	B�A
parameter_name (	B�A�A
display_name (	B�A
description (	B�AU
scope (2>.google.analytics.admin.v1alpha.CustomDimension.DimensionScopeB�A�A)
disallow_ads_personalization (B�A"P
DimensionScope
DIMENSION_SCOPE_UNSPECIFIED 	
EVENT
USER
ITEM:m�Aj
-analyticsadmin.googleapis.com/CustomDimension9properties/{property}/customDimensions/{custom_dimension}"�
CustomMetric
name (	B�A
parameter_name (	B�A�A
display_name (	B�A
description (	B�A[
measurement_unit (2<.google.analytics.admin.v1alpha.CustomMetric.MeasurementUnitB�AO
scope (28.google.analytics.admin.v1alpha.CustomMetric.MetricScopeB�A�Af
restricted_metric_type (2A.google.analytics.admin.v1alpha.CustomMetric.RestrictedMetricTypeB�A"�
MeasurementUnit 
MEASUREMENT_UNIT_UNSPECIFIED 
STANDARD
CURRENCY
FEET

METERS

KILOMETERS	
MILES
MILLISECONDS
SECONDS
MINUTES		
HOURS
"6
MetricScope
METRIC_SCOPE_UNSPECIFIED 	
EVENT"_
RestrictedMetricType&
"RESTRICTED_METRIC_TYPE_UNSPECIFIED 
	COST_DATA
REVENUE_DATA:d�Aa
*analyticsadmin.googleapis.com/CustomMetric3properties/{property}/customMetrics/{custom_metric}"�
CalculatedMetric
name (	B�A
description (	B�A
display_name (	B�A!
calculated_metric_id (	B�AU
metric_unit (2;.google.analytics.admin.v1alpha.CalculatedMetric.MetricUnitB�Aj
restricted_metric_type (2E.google.analytics.admin.v1alpha.CalculatedMetric.RestrictedMetricTypeB�A
formula (	B�A%
invalid_metric_reference	 (B�A"�

MetricUnit
METRIC_UNIT_UNSPECIFIED 
STANDARD
CURRENCY
FEET	
MILES

METERS

KILOMETERS
MILLISECONDS
SECONDS
MINUTES		
HOURS
"_
RestrictedMetricType&
"RESTRICTED_METRIC_TYPE_UNSPECIFIED 
	COST_DATA
REVENUE_DATA:��A�
.analyticsadmin.googleapis.com/CalculatedMetric;properties/{property}/calculatedMetrics/{calculated_metric}*calculatedMetrics2calculatedMetric"�
DataRetentionSettings
name (	B�Aj
event_data_retention (2G.google.analytics.admin.v1alpha.DataRetentionSettings.RetentionDurationB�Ai
user_data_retention (2G.google.analytics.admin.v1alpha.DataRetentionSettings.RetentionDurationB�A\'
reset_user_data_on_new_activity ("�
RetentionDuration"
RETENTION_DURATION_UNSPECIFIED 

TWO_MONTHS
FOURTEEN_MONTHS
TWENTY_SIX_MONTHS
THIRTY_EIGHT_MONTHS
FIFTY_MONTHS:e�Ab
3analyticsadmin.googleapis.com/DataRetentionSettings+properties/{property}/dataRetentionSettings"�
AttributionSettings
name (	B�A�
,acquisition_conversion_event_lookback_window (2\\.google.analytics.admin.v1alpha.AttributionSettings.AcquisitionConversionEventLookbackWindowB�A�
&other_conversion_event_lookback_window (2V.google.analytics.admin.v1alpha.AttributionSettings.OtherConversionEventLookbackWindowB�Aw
reporting_attribution_model (2M.google.analytics.admin.v1alpha.AttributionSettings.ReportingAttributionModelB�A�
$ads_web_conversion_data_export_scope (2S.google.analytics.admin.v1alpha.AttributionSettings.AdsWebConversionDataExportScopeB�A"�
(AcquisitionConversionEventLookbackWindow<
8ACQUISITION_CONVERSION_EVENT_LOOKBACK_WINDOW_UNSPECIFIED 7
3ACQUISITION_CONVERSION_EVENT_LOOKBACK_WINDOW_7_DAYS8
4ACQUISITION_CONVERSION_EVENT_LOOKBACK_WINDOW_30_DAYS"�
"OtherConversionEventLookbackWindow6
2OTHER_CONVERSION_EVENT_LOOKBACK_WINDOW_UNSPECIFIED 2
.OTHER_CONVERSION_EVENT_LOOKBACK_WINDOW_30_DAYS2
.OTHER_CONVERSION_EVENT_LOOKBACK_WINDOW_60_DAYS2
.OTHER_CONVERSION_EVENT_LOOKBACK_WINDOW_90_DAYS"�
ReportingAttributionModel+
\'REPORTING_ATTRIBUTION_MODEL_UNSPECIFIED )
%PAID_AND_ORGANIC_CHANNELS_DATA_DRIVEN(
$PAID_AND_ORGANIC_CHANNELS_LAST_CLICK#
GOOGLE_PAID_CHANNELS_LAST_CLICK"�
AdsWebConversionDataExportScope4
0ADS_WEB_CONVERSION_DATA_EXPORT_SCOPE_UNSPECIFIED 
NOT_SELECTED_YET
PAID_AND_ORGANIC_CHANNELS
GOOGLE_PAID_CHANNELS:a�A^
1analyticsadmin.googleapis.com/AttributionSettings)properties/{property}/attributionSettings"�
AccessBinding
user (	H 
name (	B�A
roles (	:��A�
+analyticsadmin.googleapis.com/AccessBinding2accounts/{account}/accessBindings/{access_binding}5properties/{property}/accessBindings/{access_binding}B
access_target"�
BigQueryLink
name (	B�A
project (	B�A4
create_time (2.google.protobuf.TimestampB�A
daily_export_enabled ( 
streaming_export_enabled ("
fresh_daily_export_enabled	 (
include_advertising_id (
export_streams (	
excluded_events (	 
dataset_location
 (	B�A�A:d�Aa
*analyticsadmin.googleapis.com/BigQueryLink3properties/{property}/bigQueryLinks/{bigquery_link}"�
EnhancedMeasurementSettings
name (	B�A
stream_enabled (
scrolls_enabled (
outbound_clicks_enabled (
site_search_enabled ( 
video_engagement_enabled (
file_downloads_enabled (
page_changes_enabled (!
form_interactions_enabled	 (#
search_query_parameter
 (	B�A
uri_query_parameter (	:��A�
9analyticsadmin.googleapis.com/EnhancedMeasurementSettingsKproperties/{property}/dataStreams/{data_stream}/enhancedMeasurementSettings"B
ConnectedSiteTag
display_name (	B�A
tag_id (	B�A"�
DataRedactionSettings
name (	B�A
email_redaction_enabled ()
!query_parameter_redaction_enabled (
query_parameter_keys (	:�A|
3analyticsadmin.googleapis.com/DataRedactionSettingsEproperties/{property}/dataStreams/{data_stream}/dataRedactionSettings"�
AdSenseLink
name (	B�A
ad_client_code (	B�A:a�A^
)analyticsadmin.googleapis.com/AdSenseLink1properties/{property}/adSenseLinks/{adsense_link}"�
RollupPropertySourceLink
name (	B�A
source_property (	B�A:��A�
6analyticsadmin.googleapis.com/RollupPropertySourceLinkMproperties/{property}/rollupPropertySourceLinks/{rollup_property_source_link}*rollupPropertySourceLinks2rollupPropertySourceLink"�
ReportingDataAnnotation,
annotation_date (2.google.type.DateH b
annotation_date_range (2A.google.analytics.admin.v1alpha.ReportingDataAnnotation.DateRangeH 
name (	B�A�A
title (	B�A
description (	B�AQ
color (2=.google.analytics.admin.v1alpha.ReportingDataAnnotation.ColorB�A
system_generated (B�Aa
	DateRange*

start_date (2.google.type.DateB�A(
end_date (2.google.type.DateB�A"i
Color
COLOR_UNSPECIFIED 

PURPLE	
BROWN
BLUE	
GREEN
RED
CYAN

ORANGE:��A�
5analyticsadmin.googleapis.com/ReportingDataAnnotationJproperties/{property}/reportingDataAnnotations/{reporting_data_annotation}*reportingDataAnnotations2reportingDataAnnotationB
target"�
SubpropertySyncConfig
name (	B�A�A!
apply_to_property (	B�A�A}
%custom_dimension_and_metric_sync_mode (2I.google.analytics.admin.v1alpha.SubpropertySyncConfig.SynchronizationModeB�A"N
SynchronizationMode$
 SYNCHRONIZATION_MODE_UNSPECIFIED 
NONE
ALL:��A�
3analyticsadmin.googleapis.com/SubpropertySyncConfigFproperties/{property}/subpropertySyncConfigs/{subproperty_sync_config}*subpropertySyncConfigs2subpropertySyncConfig*�
IndustryCategory!
INDUSTRY_CATEGORY_UNSPECIFIED 

AUTOMOTIVE#
BUSINESS_AND_INDUSTRIAL_MARKETS
FINANCE

HEALTHCARE

TECHNOLOGY

TRAVEL	
OTHER
ARTS_AND_ENTERTAINMENT
BEAUTY_AND_FITNESS	
BOOKS_AND_LITERATURE

FOOD_AND_DRINK	
GAMES
HOBBIES_AND_LEISURE
HOME_AND_GARDEN
INTERNET_AND_TELECOM
LAW_AND_GOVERNMENT
NEWS
ONLINE_COMMUNITIES
PEOPLE_AND_SOCIETY
PETS_AND_ANIMALS
REAL_ESTATE
	REFERENCE
SCIENCE

SPORTS
JOBS_AND_EDUCATION
SHOPPING*f
ServiceLevel
SERVICE_LEVEL_UNSPECIFIED 
GOOGLE_ANALYTICS_STANDARD
GOOGLE_ANALYTICS_360*J
	ActorType
ACTOR_TYPE_UNSPECIFIED 
USER

SYSTEM
SUPPORT*P

ActionType
ACTION_TYPE_UNSPECIFIED 
CREATED
UPDATED
DELETED*�
ChangeHistoryResourceType,
(CHANGE_HISTORY_RESOURCE_TYPE_UNSPECIFIED 
ACCOUNT
PROPERTY
FIREBASE_LINK
GOOGLE_ADS_LINK
GOOGLE_SIGNALS_SETTINGS
CONVERSION_EVENT	
MEASUREMENT_PROTOCOL_SECRET

CUSTOM_DIMENSION
CUSTOM_METRIC
DATA_RETENTION_SETTINGS%
!DISPLAY_VIDEO_360_ADVERTISER_LINK.
*DISPLAY_VIDEO_360_ADVERTISER_LINK_PROPOSAL
SEARCH_ADS_360_LINK
DATA_STREAM
ATTRIBUTION_SETTINGS
EXPANDED_DATA_SET
CHANNEL_GROUP
BIGQUERY_LINK!
ENHANCED_MEASUREMENT_SETTINGS
DATA_REDACTION_SETTINGS\'
#SKADNETWORK_CONVERSION_VALUE_SCHEMA
ADSENSE_LINK
AUDIENCE
EVENT_CREATE_RULE
	KEY_EVENT
CALCULATED_METRIC
REPORTING_DATA_ANNOTATION 
SUBPROPERTY_SYNC_CONFIG!*s
GoogleSignalsState$
 GOOGLE_SIGNALS_STATE_UNSPECIFIED 
GOOGLE_SIGNALS_ENABLED
GOOGLE_SIGNALS_DISABLED*�
GoogleSignalsConsent&
"GOOGLE_SIGNALS_CONSENT_UNSPECIFIED $
 GOOGLE_SIGNALS_CONSENT_CONSENTED(
$GOOGLE_SIGNALS_CONSENT_NOT_CONSENTED*{
LinkProposalInitiatingProduct0
,LINK_PROPOSAL_INITIATING_PRODUCT_UNSPECIFIED 
GOOGLE_ANALYTICS
LINKED_PRODUCT*�
LinkProposalState#
LINK_PROPOSAL_STATE_UNSPECIFIED )
%AWAITING_REVIEW_FROM_GOOGLE_ANALYTICS\'
#AWAITING_REVIEW_FROM_LINKED_PRODUCT
	WITHDRAWN
DECLINED
EXPIRED
OBSOLETE*�
PropertyType
PROPERTY_TYPE_UNSPECIFIED 
PROPERTY_TYPE_ORDINARY
PROPERTY_TYPE_SUBPROPERTY
PROPERTY_TYPE_ROLLUP*q
CoarseValue
COARSE_VALUE_UNSPECIFIED 
COARSE_VALUE_LOW
COARSE_VALUE_MEDIUM
COARSE_VALUE_HIGHB�
"com.google.analytics.admin.v1alphaBResourcesProtoPZ>cloud.google.com/go/analytics/admin/apiv1alpha/adminpb;adminpb�AR
2marketingplatformadmin.googleapis.com/Organizationorganizations/{organization}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

