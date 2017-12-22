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

namespace Oda\Client;

class BaseIntegrationTest extends \PHPUnit_Framework_TestCase {

    protected static $apiInstance;

    public function __construct() {
        if (isset(self::$apiInstance)) {
            return;
        }

        $credentials = $_SERVER['credentials'];

        if (empty($credentials)) {
            $message = '"credentials" env var not set for Integration Test. If you do not yet have credentials, you can remove the Integration tests suite in phpunit.xml.'. PHP_EOL;
            fwrite(STDERR, $message);
            exit(1);
        }

        $authClient = new AuthClient("https://api-int.kennect.com/oauth/token", $credentials);

        $authToken = $authClient->auth();

        $configuration = Configuration::getDefaultConfiguration();
        $configuration->addDefaultHeader("Authorization", "Bearer " . $authToken->getAccessToken());
        $configuration->setHost("https://api-int.kennect.com/v1");

        $apiClient = new ApiClient($configuration);
        self::$apiInstance = new Api\DefaultApi($apiClient);
    }

    protected function makeCandidateRequest() {
        $candidateAddressData = array(
            'address_line' => '222333 PEACHTREE PLACE',
            'country_code' => 'US',
            'municipality' => 'ATLANTA',
            'postal_code' => '30318',
            'region_code' => 'US-GA'
        );
        $candidateAddress = new Model\Address($candidateAddressData);

        $candidateAliasData = array(
            'confirmed_no_middle_name' => false,
            'family_name' => 'FamilyNameAlias1',
            'given_name' => 'GivenAlias1',
            'middle_name' => 'MiddleNameAlias1'
        );
        $candidateAlias = new Model\CandidateAlias($candidateAliasData);

        $driversLicenseData = array(
            'license_number' => 'A1234567',
            'issuing_agency' => 'CA',
            'type' => 'personal'
        );
        $driversLicense = new Model\DriversLicense($driversLicenseData);

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

        $candidateRequest = new Model\CandidateRequest($candidateData);
        return $candidateRequest;
    }

    protected function assertIsDateTime($actual) {
        $this->assertTrue(get_class($actual) == "DateTime");
    }

    //make warn go away
    public function test() {

    }

}