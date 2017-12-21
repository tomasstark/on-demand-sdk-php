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
 * ErrorResponseTest
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
 * ErrorResponseTest Class Doc Comment
 *
 * @category    Class */
// * @description ErrorResponse
/**
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ErrorResponseTest extends \PHPUnit_Framework_TestCase
{
    private static $subject;
    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
        $data = array(
            'errors' => array(new Model\ErrorDetail())
        );

        self::$subject = new Model\ErrorResponse($data);
    }

    /**
     * Test "ErrorResponse"
     */
    public function testErrorResponse()
    {
        $expectedJson = '{
            "errors": [
                {}
            ]
        }';
        $this->assertJsonStringEqualsJsonString($expectedJson, self::$subject->__toString());
    }

    /**
     * Test attribute "errors"
     */
    public function testPropertyErrors()
    {
        $this->assertEquals("Swagger\Client\Model\ErrorDetail", get_class(self::$subject->getErrors()[0]));
    }
}