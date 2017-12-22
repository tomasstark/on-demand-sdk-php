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
 * HealthResponseTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Oda\Client
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

namespace Oda\Client;

/**
 * HealthResponseTest Class Doc Comment
 *
 * @category    Class */
// * @description HealthResponse
/**
 * @package     Oda\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class HealthResponseTest extends \PHPUnit_Framework_TestCase
{
    private static $subject;
    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
        $data = array();

        self::$subject = new Model\HealthResponse($data);
    }
    /**
     * Test "HealthResponse"
     */
    public function testHealthResponse()
    {
        $expectedJson = '{}';
        $this->assertJsonStringEqualsJsonString($expectedJson, self::$subject->__toString());
    }
}
