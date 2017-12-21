<?php
/*
 * Copyright 2017 Sterling Talent Solutions
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

require_once(__DIR__ . '/autoload.php');
require_once(__DIR__ . '/vendor/autoload.php');

//start Config
$isProd = false; //set to true to use production endpoints
$credentials = $_SERVER['credentials']; //pulls auth credentials from env
define(JSON_PRETTY_PRINT, true); //prettifies _toString() JSON output
//end Config


$env = ($isProd) ? "api" : "api-int";

////
/// AUTHORIZING
///

if (empty($credentials)) {
    exit('credentials not set'. PHP_EOL);
}

$authClient = new Swagger\Client\AuthClient("https://{$env}.kennect.com/oauth/token", $credentials);

try {
    $authResponse = $authClient->auth();
} catch (Exception $e) {
    print_r($e);
    exit('Exception when calling AuthClient->auth: '. $e->getMessage(). PHP_EOL);
}

$configuration = Swagger\Client\Configuration::getDefaultConfiguration();
$configuration->addDefaultHeader("Authorization", "Bearer " . $authResponse->getAccessToken());
$configuration->setHost("https://{$env}.kennect.com/v1");

////
// SET UP API CLIENT
////
$apiClient = new Swagger\Client\ApiClient($configuration);
$apiInstance = new Swagger\Client\Api\DefaultApi($apiClient);

////
//CREATE CANDIDATE
////
$candidateAddressData = array(
    'address_line' => '222333 PEACHTREE PLACE',
    'country_code' => 'US',
    'municipality' => 'ATLANTA',
    'postal_code' => '30318',
    'region_code' => 'US-GA'
);
$candidateAddress = new \Swagger\Client\Model\Address($candidateAddressData);

$candidateAliasData = array(
    'confirmed_no_middle_name' => false,
    'family_name' => 'FamilyNameAlias1',
    'given_name' => 'GivenAlias1',
    'middle_name' => 'MiddleNameAlias1'
);
$candidateAlias = new Swagger\Client\Model\CandidateAlias($candidateAliasData);

$driversLicenseData = array(
    'license_number' => 'A1234567',
    'issuing_agency' => 'CA',
    'type' => 'personal'
);
$driversLicense = new Swagger\Client\Model\DriversLicense($driversLicenseData);

$candidateData = array(
    'address' => $candidateAddress,
    'aliases' => array($candidateAlias),
    'client_reference_id' => uniqid(),
    'confirmed_no_middle_name' => true,
    'dob' => '1975-02-28',
    'drivers_license' => $driversLicense,
    'email' => uniqid() . "@example.com",
    'family_name' => 'McFamilyName',
    'given_name' => 'FirstName',
    'phone' => '+12121231234',
    'ssn' => '691221234' //This SSN is fake
);

$candidateRequest = new Swagger\Client\Model\CandidateRequest($candidateData);

try {
    $candidateResponse = $apiInstance->candidatesPost($candidateRequest);
} catch (Exception $e) {
    print_r($e);
    exit('Exception when calling DefaultApi->candidatesPost: '. $e->getMessage(). PHP_EOL);
}

echo("Candidate Created". PHP_EOL);
echo($candidateResponse->__toString(). PHP_EOL);

////
// CHECK PACKAGES
////
try {
    $packageResponses = $apiInstance->packagesGet();
} catch (Exception $e) {
    print_r($e);
    exit('Exception when calling DefaultApi->packagesGet: '. $e->getMessage(). PHP_EOL);
}

echo("Number of Packages:". count($packageResponses). PHP_EOL);

$ssnTracePackageId = null;
foreach ($packageResponses as $packageResponse) {
    $components = $packageResponse->getComponents();
    $hasOnlySsnTraceComponent = (count($components) == 1) && ($components[0] == "SSN Trace");
    if ($hasOnlySsnTraceComponent) {
        echo($packageResponse->__toString(). PHP_EOL);
        $ssnTracePackageId = $packageResponse->getId();
        break;
    }
}

if ($ssnTracePackageId == null) {
    exit('Cannot find a package containing just an "SSN Trace" component'. PHP_EOL);
}

echo("ID of the 'SSN Trace Only' Package: ". $ssnTracePackageId . PHP_EOL);

////
//CREATE SCREENING
////
$callbackRequestData = array(
    //WARNING: This URL is for demonstration only, it is visible to the public. It should only be used with mock information.
    'uri' => 'https://requestb.in/v9nhx1v9'
);
$callbackRequest = new Swagger\Client\Model\CallbackRequest($callbackRequestData);

$screeningRequestData = array(
    'candidate_id' =>  $candidateResponse->getId(),
    'package_id' =>  $ssnTracePackageId,
    'callback' => $callbackRequest
);
$screeningRequest =  new Swagger\Client\Model\ScreeningRequest($screeningRequestData);

try {
    $screeningResponse = $apiInstance->screeningsPost($screeningRequest);
} catch (Exception $e) {
    print_r($e);
    exit('Exception when calling DefaultApi->screeningsPost: '. $e->getMessage(). PHP_EOL);
}

echo("Screening Created". PHP_EOL);
echo($screeningResponse->__toString(). PHP_EOL);