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

// [START analyticsadmin_v1alpha_generated_AnalyticsAdminService_CreateConversionEvent_sync]
use Google\Analytics\Admin\V1alpha\Client\AnalyticsAdminServiceClient;
use Google\Analytics\Admin\V1alpha\ConversionEvent;
use Google\Analytics\Admin\V1alpha\CreateConversionEventRequest;
use Google\ApiCore\ApiException;

/**
 * Deprecated: Use `CreateKeyEvent` instead.
 * Creates a conversion event with the specified attributes.
 *
 * @param string $formattedParent The resource name of the parent property where this conversion
 *                                event will be created. Format: properties/123
 *                                Please see {@see AnalyticsAdminServiceClient::propertyName()} for help formatting this field.
 */
function create_conversion_event_sample(string $formattedParent): void
{
    // Create a client.
    $analyticsAdminServiceClient = new AnalyticsAdminServiceClient();

    // Prepare the request message.
    $conversionEvent = new ConversionEvent();
    $request = (new CreateConversionEventRequest())
        ->setConversionEvent($conversionEvent)
        ->setParent($formattedParent);

    // Call the API and handle any network failures.
    try {
        /** @var ConversionEvent $response */
        $response = $analyticsAdminServiceClient->createConversionEvent($request);
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
    $formattedParent = AnalyticsAdminServiceClient::propertyName('[PROPERTY]');

    create_conversion_event_sample($formattedParent);
}
// [END analyticsadmin_v1alpha_generated_AnalyticsAdminService_CreateConversionEvent_sync]
