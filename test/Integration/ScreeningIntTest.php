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

namespace Swagger\Client;

require_once __DIR__ . "/../Integration/BaseIntegrationTest.php";

class ScreeningIntTest extends BaseIntegrationTest {
    public function __construct()
    {
        parent::__construct();
    }

    public function test_createAndGet() {
        $candidateRequest = $this->makeCandidateRequest();
        $createdCandidate = self::$apiInstance->candidatesPost($candidateRequest);
        $this->assertNotNull($createdCandidate->getId());

        $ssnOnlyPackage = $this->findSsnOnlyPackage();
        $this->assertNotNull($ssnOnlyPackage);

        $screeningRequest = $this->makeScreeningRequest($createdCandidate->getId(), $ssnOnlyPackage->getId());
        $screeningResponse = self::$apiInstance->screeningsPost($screeningRequest);

        $this->assertEquals($screeningRequest->getCandidateId(), $screeningResponse->getCandidateId());
        $this->assertEquals($screeningRequest->getPackageId(), $screeningResponse->getPackageId());
        $this->assertNotNull($screeningResponse->getId());
        $this->assertEquals($createdCandidate->getId(), $screeningResponse->getCandidateId());
        $this->assertNotNull($screeningResponse->getLinks());
        $this->assertNotNull($screeningResponse->getResult());
        $this->assertNotNull($screeningResponse->getReportItems());
        $this->assertNotNull($screeningResponse->getStatus());
        $this->assertIsDateTime($screeningResponse->getSubmittedAt());
        $this->assertIsDateTime($screeningResponse->getUpdatedAt());
    }

    private function makeScreeningRequest($candidateId, $packageId) {
        $screeningRequestData = array(
            'candidate_id' =>  $candidateId,
            'package_id' =>  $packageId
        );
        return new Model\ScreeningRequest($screeningRequestData);
    }

    private function findSsnOnlyPackage() {
        $packagesResponse = self::$apiInstance->packagesGet();
        foreach($packagesResponse as $package) {
            if ($package->getTitle() == "SSN Trace Only") {
                return $package;
            }
        }
        return null;
    }
}