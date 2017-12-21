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
 * AdverseActionRequestTest
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
 * AdverseActionRequestTest Class Doc Comment
 *
 * @category    Class */
// * @description AdverseActionRequest

/**
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AdverseActionRequestTest extends \PHPUnit_Framework_TestCase
{
    private static $adverseActionRequest;

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
        $data = array(
            'comment' => 'comment',
            'report_item_ids' => array("1", "2")
        );

        self::$adverseActionRequest = new Model\AdverseActionRequest($data);
    }

    /**
     * Test "AdverseActionRequest"
     */
    public function testAdverseActionRequest()
    {
        $expectedJson = '{
            "comment": "comment",
            "reportItemIds": [
                "1",
                "2"
            ]
        }';
        $this->assertJsonStringEqualsJsonString($expectedJson, self::$adverseActionRequest->__toString());
    }

    /**
     * Test attribute "comment"
     */
    public function testPropertyComment()
    {
        $this->assertEquals("comment", self::$adverseActionRequest->getComment());
    }

    /**
     * Test attribute "report_item_ids"
     */
    public function testPropertyReportItemIds()
    {
        $this->assertEquals("1", self::$adverseActionRequest->getReportItemIds()[0]);
        $this->assertEquals("2", self::$adverseActionRequest->getReportItemIds()[1]);
    }
}
