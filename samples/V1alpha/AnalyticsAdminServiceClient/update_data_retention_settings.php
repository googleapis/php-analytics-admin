<?php
/*
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START analyticsadmin_v1alpha_generated_AnalyticsAdminService_UpdateDataRetentionSettings_sync]
use Google\Analytics\Admin\V1alpha\Client\AnalyticsAdminServiceClient;
use Google\Analytics\Admin\V1alpha\DataRetentionSettings;
use Google\Analytics\Admin\V1alpha\DataRetentionSettings\RetentionDuration;
use Google\Analytics\Admin\V1alpha\UpdateDataRetentionSettingsRequest;
use Google\ApiCore\ApiException;
use Google\Protobuf\FieldMask;

/**
 * Updates the singleton data retention settings for this property.
 *
 * @param int $dataRetentionSettingsEventDataRetention The length of time that event-level data is retained.
 * @param int $dataRetentionSettingsUserDataRetention  The length of time that user-level data is retained.
 */
function update_data_retention_settings_sample(
    int $dataRetentionSettingsEventDataRetention,
    int $dataRetentionSettingsUserDataRetention
): void {
    // Create a client.
    $analyticsAdminServiceClient = new AnalyticsAdminServiceClient();

    // Prepare the request message.
    $dataRetentionSettings = (new DataRetentionSettings())
        ->setEventDataRetention($dataRetentionSettingsEventDataRetention)
        ->setUserDataRetention($dataRetentionSettingsUserDataRetention);
    $updateMask = new FieldMask();
    $request = (new UpdateDataRetentionSettingsRequest())
        ->setDataRetentionSettings($dataRetentionSettings)
        ->setUpdateMask($updateMask);

    // Call the API and handle any network failures.
    try {
        /** @var DataRetentionSettings $response */
        $response = $analyticsAdminServiceClient->updateDataRetentionSettings($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $dataRetentionSettingsEventDataRetention = RetentionDuration::RETENTION_DURATION_UNSPECIFIED;
    $dataRetentionSettingsUserDataRetention = RetentionDuration::RETENTION_DURATION_UNSPECIFIED;

    update_data_retention_settings_sample(
        $dataRetentionSettingsEventDataRetention,
        $dataRetentionSettingsUserDataRetention
    );
}
// [END analyticsadmin_v1alpha_generated_AnalyticsAdminService_UpdateDataRetentionSettings_sync]
