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
 * ScreeningRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Oda\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kennect-API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2017-12-08T12:41:25.475-08:00
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Oda\Client\Model;

use \ArrayAccess;

/**
 * ScreeningRequest Class Doc Comment
 *
 * @category    Class
 * @package     Oda\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ScreeningRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ScreeningRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'billing_code' => 'string',
        'callback' => '\Oda\Client\Model\CallbackRequest',
        'candidate_id' => 'string',
        'invite' => '\Oda\Client\Model\Invite',
        'package_id' => 'string',
        'reference_codes' => '\Oda\Client\Model\ReferenceCode[]',
        'trusted_user_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'billing_code' => null,
        'callback' => null,
        'candidate_id' => null,
        'invite' => null,
        'package_id' => null,
        'reference_codes' => null,
        'trusted_user_id' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'billing_code' => 'billingCode',
        'callback' => 'callback',
        'candidate_id' => 'candidateId',
        'invite' => 'invite',
        'package_id' => 'packageId',
        'reference_codes' => 'referenceCodes',
        'trusted_user_id' => 'trustedUserId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'billing_code' => 'setBillingCode',
        'callback' => 'setCallback',
        'candidate_id' => 'setCandidateId',
        'invite' => 'setInvite',
        'package_id' => 'setPackageId',
        'reference_codes' => 'setReferenceCodes',
        'trusted_user_id' => 'setTrustedUserId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'billing_code' => 'getBillingCode',
        'callback' => 'getCallback',
        'candidate_id' => 'getCandidateId',
        'invite' => 'getInvite',
        'package_id' => 'getPackageId',
        'reference_codes' => 'getReferenceCodes',
        'trusted_user_id' => 'getTrustedUserId'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['billing_code'] = isset($data['billing_code']) ? $data['billing_code'] : null;
        $this->container['callback'] = isset($data['callback']) ? $data['callback'] : null;
        $this->container['candidate_id'] = isset($data['candidate_id']) ? $data['candidate_id'] : null;
        $this->container['invite'] = isset($data['invite']) ? $data['invite'] : null;
        $this->container['package_id'] = isset($data['package_id']) ? $data['package_id'] : null;
        $this->container['reference_codes'] = isset($data['reference_codes']) ? $data['reference_codes'] : null;
        $this->container['trusted_user_id'] = isset($data['trusted_user_id']) ? $data['trusted_user_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets billing_code
     * @return string
     */
    public function getBillingCode()
    {
        return $this->container['billing_code'];
    }

    /**
     * Sets billing_code
     * @param string $billing_code
     * @return $this
     */
    public function setBillingCode($billing_code)
    {
        $this->container['billing_code'] = $billing_code;

        return $this;
    }

    /**
     * Gets callback
     * @return \Oda\Client\Model\CallbackRequest
     */
    public function getCallback()
    {
        return $this->container['callback'];
    }

    /**
     * Sets callback
     * @param \Oda\Client\Model\CallbackRequest $callback
     * @return $this
     */
    public function setCallback($callback)
    {
        $this->container['callback'] = $callback;

        return $this;
    }

    /**
     * Gets candidate_id
     * @return string
     */
    public function getCandidateId()
    {
        return $this->container['candidate_id'];
    }

    /**
     * Sets candidate_id
     * @param string $candidate_id
     * @return $this
     */
    public function setCandidateId($candidate_id)
    {
        $this->container['candidate_id'] = $candidate_id;

        return $this;
    }

    /**
     * Gets invite
     * @return \Oda\Client\Model\Invite
     */
    public function getInvite()
    {
        return $this->container['invite'];
    }

    /**
     * Sets invite
     * @param \Oda\Client\Model\Invite $invite
     * @return $this
     */
    public function setInvite($invite)
    {
        $this->container['invite'] = $invite;

        return $this;
    }

    /**
     * Gets package_id
     * @return string
     */
    public function getPackageId()
    {
        return $this->container['package_id'];
    }

    /**
     * Sets package_id
     * @param string $package_id
     * @return $this
     */
    public function setPackageId($package_id)
    {
        $this->container['package_id'] = $package_id;

        return $this;
    }

    /**
     * Gets reference_codes
     * @return \Oda\Client\Model\ReferenceCode[]
     */
    public function getReferenceCodes()
    {
        return $this->container['reference_codes'];
    }

    /**
     * Sets reference_codes
     * @param \Oda\Client\Model\ReferenceCode[] $reference_codes
     * @return $this
     */
    public function setReferenceCodes($reference_codes)
    {
        $this->container['reference_codes'] = $reference_codes;

        return $this;
    }

    /**
     * Gets trusted_user_id
     * @return string
     */
    public function getTrustedUserId()
    {
        return $this->container['trusted_user_id'];
    }

    /**
     * Sets trusted_user_id
     * @param string $trusted_user_id
     * @return $this
     */
    public function setTrustedUserId($trusted_user_id)
    {
        $this->container['trusted_user_id'] = $trusted_user_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Oda\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Oda\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


