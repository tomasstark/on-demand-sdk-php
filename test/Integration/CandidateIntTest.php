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

require_once __DIR__ . "/../Integration/BaseIntegrationTest.php";

class CandidateIntTest extends BaseIntegrationTest {

    public function __construct()
    {
        parent::__construct();
    }

    public function test_CreateAndGet() {
        $candidateRequest = $this->makeCandidateRequest();
        $createdCandidate = $this->assertCreateCandidate($candidateRequest);

        $this->assertGetCandidate($candidateRequest, $createdCandidate->getId());
    }

    private function assertCreateCandidate($candidateRequest) {
        $candidateResponse = self::$apiInstance->candidatesPost($candidateRequest);

        $this->assertEquals($candidateRequest->getAddress(), $candidateResponse->getAddress());
        $this->assertEquals($candidateRequest->getAliases(), $candidateResponse->getAliases());
        $this->assertEquals($candidateRequest->getClientReferenceId(), $candidateResponse->getClientReferenceId());
        $this->assertEquals($candidateRequest->getConfirmedNoMiddleName(), $candidateResponse->getConfirmedNoMiddleName());
        $this->assertEquals($candidateRequest->getDob(), $candidateResponse->getDob());
        $this->assertEquals($candidateRequest->getDriversLicense(), $candidateResponse->getDriversLicense());
        $this->assertEquals($candidateRequest->getEmail(), $candidateResponse->getEmail());
        $this->assertEquals($candidateRequest->getFamilyName(), $candidateResponse->getFamilyName());
        $this->assertEquals($candidateRequest->getGivenName(), $candidateResponse->getGivenName());
        $this->assertEquals($candidateRequest->getMiddleName(), $candidateResponse->getMiddleName());
        $this->assertEquals($candidateRequest->getPhone(), $candidateResponse->getPhone());
        $this->assertEquals($candidateRequest->getSsn(), $candidateResponse->getSsn());
        $this->assertNotNull($candidateResponse->getId());

        return $candidateResponse;
    }

    private function assertGetCandidate($expectedCandidate, $candidateId) {
        $candidateResponse = self::$apiInstance->candidatesIdGet($candidateId);

        $this->assertEquals($expectedCandidate->getAddress(), $candidateResponse->getAddress());
        $this->assertEquals($expectedCandidate->getAliases(), $candidateResponse->getAliases());
        $this->assertEquals($expectedCandidate->getClientReferenceId(), $candidateResponse->getClientReferenceId());
        $this->assertEquals($expectedCandidate->getConfirmedNoMiddleName(), $candidateResponse->getConfirmedNoMiddleName());
        $this->assertEquals($expectedCandidate->getDob(), $candidateResponse->getDob());
        $this->assertEquals($expectedCandidate->getDriversLicense(), $candidateResponse->getDriversLicense());
        $this->assertEquals($expectedCandidate->getEmail(), $candidateResponse->getEmail());
        $this->assertEquals($expectedCandidate->getFamilyName(), $candidateResponse->getFamilyName());
        $this->assertEquals($expectedCandidate->getGivenName(), $candidateResponse->getGivenName());
        $this->assertEquals($expectedCandidate->getMiddleName(), $candidateResponse->getMiddleName());
        $this->assertEquals($expectedCandidate->getPhone(), $candidateResponse->getPhone());
        $this->assertEquals($expectedCandidate->getSsn(), $candidateResponse->getSsn());
        $this->assertEquals($candidateId, $candidateResponse->getId());
    }
}