<?php
/*
 * Copyright 2025 Google LLC
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

// [START analyticsadmin_v1alpha_generated_AnalyticsAdminService_SubmitUserDeletion_sync]
use Google\Analytics\Admin\V1alpha\Client\AnalyticsAdminServiceClient;
use Google\Analytics\Admin\V1alpha\SubmitUserDeletionRequest;
use Google\Analytics\Admin\V1alpha\SubmitUserDeletionResponse;
use Google\ApiCore\ApiException;

/**
 * Submits a request for user deletion for a property.
 *
 * @param string $formattedName The name of the property to submit user deletion for. Please see
 *                              {@see AnalyticsAdminServiceClient::propertyName()} for help formatting this field.
 */
function submit_user_deletion_sample(string $formattedName): void
{
    // Create a client.
    $analyticsAdminServiceClient = new AnalyticsAdminServiceClient();

    // Prepare the request message.
    $request = (new SubmitUserDeletionRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var SubmitUserDeletionResponse $response */
        $response = $analyticsAdminServiceClient->submitUserDeletion($request);
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
    $formattedName = AnalyticsAdminServiceClient::propertyName('[PROPERTY]');

    submit_user_deletion_sample($formattedName);
}
// [END analyticsadmin_v1alpha_generated_AnalyticsAdminService_SubmitUserDeletion_sync]
