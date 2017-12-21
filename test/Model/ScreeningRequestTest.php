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

/**
 * ScreeningRequestTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kennect-API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2017-10-26T14:02:28.460-07:00
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * ScreeningRequestTest Class Doc Comment
 *
 * @category    Class */
// * @description ScreeningRequest
/**
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ScreeningRequestTest extends \PHPUnit_Framework_TestCase
{
    private static $subject;
    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
        $data = array(
            'billing_code' => 'billing_code',
            'callback' => new Model\CallbackRequest(),
            'candidate_id' => 'candidate_id',
            'invite' => new Model\Invite(),
            'package_id' => 'package_id',
            'reference_codes' => array(new Model\ReferenceCode()),
            'trusted_user_id' => 'trusted_user_id'
        );

        self::$subject = new Model\ScreeningRequest($data);
    }
    /**
     * Test "ScreeningRequest"
     */
    public function testScreeningRequest()
    {

        $expectedJson = '{
            "billingCode": "billing_code",
            "callback": {},
            "candidateId": "candidate_id",
            "invite": {},
            "packageId": "package_id",
            "referenceCodes": [
                {}
            ],
            "trustedUserId": "trusted_user_id"
        }';
        $this->assertJsonStringEqualsJsonString($expectedJson, self::$subject->__toString());
    }

    /**
     * Test attribute "billing_code"
     */
    public function testPropertyBillingCode()
    {
        $this->assertEquals("billing_code", self::$subject->getBillingCode());
    }

    /**
     * Test attribute "callback"
     */
    public function testPropertyCallback()
    {
        $this->assertEquals("Swagger\Client\Model\CallbackRequest", get_class(self::$subject->getCallback()));
    }

    /**
     * Test attribute "candidate_id"
     */
    public function testPropertyCandidateId()
    {
        $this->assertEquals("candidate_id", self::$subject->getCandidateId());
    }

    /**
     * Test attribute "invite"
     */
    public function testPropertyInvite()
    {
        $this->assertEquals("Swagger\Client\Model\Invite", get_class(self::$subject->getInvite()));
    }

    /**
     * Test attribute "package_id"
     */
    public function testPropertyPackageId()
    {
        $this->assertEquals("package_id", self::$subject->getPackageId());
    }

    /**
     * Test attribute "reference_codes"
     */
    public function testPropertyReferenceCodes()
    {
        $this->assertEquals("Swagger\Client\Model\ReferenceCode", get_class(self::$subject->getReferenceCodes()[0]));
    }

    /**
     * Test attribute "trusted_user_id"
     */
    public function testPropertyTrustedUserId()
    {
        $this->assertEquals("trusted_user_id", self::$subject->getTrustedUserId());
    }
}