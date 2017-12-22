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

class AccessTokenTest extends \PHPUnit_Framework_TestCase
{

    private $jwt = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJuYW1lIjoiZm9vQGJhci5jb20iLCJlbWFpbCI6ImZvb0BiYXIuY29tIiwicm9sZXMiOltdLCJpc3MiOiJodHRwczovL3h4eC5hdXRoMC5jb20vIiwic3ViIjoiYXV0aDB8MSIsImF1ZCI6Inh4eCIsImlhdCI6MTIwOTU1Mzc1NiwiZXhwIjoxMjA5NTg5NzU2fQ.t5ATZAySPRtdIUQs9LYKIfrM5Z5vHPefi42Oiiq_NGQ";
    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    public function testGetAccessToken()
    {
        $data = array('access_token' => $this->jwt);
        $accessToken = new Model\AccessToken($data);

        $this->assertSame($this->jwt, $accessToken->getAccessToken());
    }

    public function testIsExpired_willReturnTrueIfExpiryIsInPast()
    {

        $timeInThePastProvider = function() { return (int) 1109589756; };
        $data = array(
            'time_provider' => $timeInThePastProvider,
            'access_token' => $this->jwt
        );
        $accessToken = new Model\AccessToken($data);
        $this->assertTrue($accessToken->isExpired());
    }

    public function testIsExpired_willReturnFalseIfExpiryIsInFuture() {
        $timeInTheFutureProvider = function() { return (int) 2047483647; };
        $data = array(
            'time_provider' => $timeInTheFutureProvider,
            'access_token' => $this->jwt
        );
        $accessToken = new Model\AccessToken($data);

        $this->assertFalse($accessToken->isExpired());
    }

}
