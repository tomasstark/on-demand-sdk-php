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
 * CandidateResponse
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
 * CandidateResponse Class Doc Comment
 *
 * @category    Class
 * @package     Oda\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CandidateResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CandidateResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address' => '\Oda\Client\Model\Address',
        'aliases' => '\Oda\Client\Model\CandidateAlias[]',
        'client_reference_id' => 'string',
        'confirmed_no_middle_name' => 'bool',
        'dob' => 'string',
        'drivers_license' => '\Oda\Client\Model\DriversLicense',
        'email' => 'string',
        'family_name' => 'string',
        'given_name' => 'string',
        'id' => 'string',
        'identity_ids' => 'string[]',
        'middle_name' => 'string',
        'phone' => 'string',
        'screening_ids' => 'string[]',
        'ssn' => 'string',
        'trust_ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address' => null,
        'aliases' => null,
        'client_reference_id' => null,
        'confirmed_no_middle_name' => null,
        'dob' => null,
        'drivers_license' => null,
        'email' => null,
        'family_name' => null,
        'given_name' => null,
        'id' => null,
        'identity_ids' => null,
        'middle_name' => null,
        'phone' => null,
        'screening_ids' => null,
        'ssn' => null,
        'trust_ids' => null
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
        'address' => 'address',
        'aliases' => 'aliases',
        'client_reference_id' => 'clientReferenceId',
        'confirmed_no_middle_name' => 'confirmedNoMiddleName',
        'dob' => 'dob',
        'drivers_license' => 'driversLicense',
        'email' => 'email',
        'family_name' => 'familyName',
        'given_name' => 'givenName',
        'id' => 'id',
        'identity_ids' => 'identityIds',
        'middle_name' => 'middleName',
        'phone' => 'phone',
        'screening_ids' => 'screeningIds',
        'ssn' => 'ssn',
        'trust_ids' => 'trustIds'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'aliases' => 'setAliases',
        'client_reference_id' => 'setClientReferenceId',
        'confirmed_no_middle_name' => 'setConfirmedNoMiddleName',
        'dob' => 'setDob',
        'drivers_license' => 'setDriversLicense',
        'email' => 'setEmail',
        'family_name' => 'setFamilyName',
        'given_name' => 'setGivenName',
        'id' => 'setId',
        'identity_ids' => 'setIdentityIds',
        'middle_name' => 'setMiddleName',
        'phone' => 'setPhone',
        'screening_ids' => 'setScreeningIds',
        'ssn' => 'setSsn',
        'trust_ids' => 'setTrustIds'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'aliases' => 'getAliases',
        'client_reference_id' => 'getClientReferenceId',
        'confirmed_no_middle_name' => 'getConfirmedNoMiddleName',
        'dob' => 'getDob',
        'drivers_license' => 'getDriversLicense',
        'email' => 'getEmail',
        'family_name' => 'getFamilyName',
        'given_name' => 'getGivenName',
        'id' => 'getId',
        'identity_ids' => 'getIdentityIds',
        'middle_name' => 'getMiddleName',
        'phone' => 'getPhone',
        'screening_ids' => 'getScreeningIds',
        'ssn' => 'getSsn',
        'trust_ids' => 'getTrustIds'
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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['aliases'] = isset($data['aliases']) ? $data['aliases'] : null;
        $this->container['client_reference_id'] = isset($data['client_reference_id']) ? $data['client_reference_id'] : null;
        $this->container['confirmed_no_middle_name'] = isset($data['confirmed_no_middle_name']) ? $data['confirmed_no_middle_name'] : null;
        $this->container['dob'] = isset($data['dob']) ? $data['dob'] : null;
        $this->container['drivers_license'] = isset($data['drivers_license']) ? $data['drivers_license'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['family_name'] = isset($data['family_name']) ? $data['family_name'] : null;
        $this->container['given_name'] = isset($data['given_name']) ? $data['given_name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['identity_ids'] = isset($data['identity_ids']) ? $data['identity_ids'] : null;
        $this->container['middle_name'] = isset($data['middle_name']) ? $data['middle_name'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['screening_ids'] = isset($data['screening_ids']) ? $data['screening_ids'] : null;
        $this->container['ssn'] = isset($data['ssn']) ? $data['ssn'] : null;
        $this->container['trust_ids'] = isset($data['trust_ids']) ? $data['trust_ids'] : null;
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
     * Gets address
     * @return \Oda\Client\Model\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param \Oda\Client\Model\Address $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets aliases
     * @return \Oda\Client\Model\CandidateAlias[]
     */
    public function getAliases()
    {
        return $this->container['aliases'];
    }

    /**
     * Sets aliases
     * @param \Oda\Client\Model\CandidateAlias[] $aliases
     * @return $this
     */
    public function setAliases($aliases)
    {
        $this->container['aliases'] = $aliases;

        return $this;
    }

    /**
     * Gets client_reference_id
     * @return string
     */
    public function getClientReferenceId()
    {
        return $this->container['client_reference_id'];
    }

    /**
     * Sets client_reference_id
     * @param string $client_reference_id
     * @return $this
     */
    public function setClientReferenceId($client_reference_id)
    {
        $this->container['client_reference_id'] = $client_reference_id;

        return $this;
    }

    /**
     * Gets confirmed_no_middle_name
     * @return bool
     */
    public function getConfirmedNoMiddleName()
    {
        return $this->container['confirmed_no_middle_name'];
    }

    /**
     * Sets confirmed_no_middle_name
     * @param bool $confirmed_no_middle_name
     * @return $this
     */
    public function setConfirmedNoMiddleName($confirmed_no_middle_name)
    {
        $this->container['confirmed_no_middle_name'] = $confirmed_no_middle_name;

        return $this;
    }

    /**
     * Gets dob
     * @return string
     */
    public function getDob()
    {
        return $this->container['dob'];
    }

    /**
     * Sets dob
     * @param string $dob
     * @return $this
     */
    public function setDob($dob)
    {
        $this->container['dob'] = $dob;

        return $this;
    }

    /**
     * Gets drivers_license
     * @return \Oda\Client\Model\DriversLicense
     */
    public function getDriversLicense()
    {
        return $this->container['drivers_license'];
    }

    /**
     * Sets drivers_license
     * @param \Oda\Client\Model\DriversLicense $drivers_license
     * @return $this
     */
    public function setDriversLicense($drivers_license)
    {
        $this->container['drivers_license'] = $drivers_license;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets family_name
     * @return string
     */
    public function getFamilyName()
    {
        return $this->container['family_name'];
    }

    /**
     * Sets family_name
     * @param string $family_name
     * @return $this
     */
    public function setFamilyName($family_name)
    {
        $this->container['family_name'] = $family_name;

        return $this;
    }

    /**
     * Gets given_name
     * @return string
     */
    public function getGivenName()
    {
        return $this->container['given_name'];
    }

    /**
     * Sets given_name
     * @param string $given_name
     * @return $this
     */
    public function setGivenName($given_name)
    {
        $this->container['given_name'] = $given_name;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets identity_ids
     * @return string[]
     */
    public function getIdentityIds()
    {
        return $this->container['identity_ids'];
    }

    /**
     * Sets identity_ids
     * @param string[] $identity_ids
     * @return $this
     */
    public function setIdentityIds($identity_ids)
    {
        $this->container['identity_ids'] = $identity_ids;

        return $this;
    }

    /**
     * Gets middle_name
     * @return string
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     * @param string $middle_name
     * @return $this
     */
    public function setMiddleName($middle_name)
    {
        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets phone
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     * @param string $phone
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets screening_ids
     * @return string[]
     */
    public function getScreeningIds()
    {
        return $this->container['screening_ids'];
    }

    /**
     * Sets screening_ids
     * @param string[] $screening_ids
     * @return $this
     */
    public function setScreeningIds($screening_ids)
    {
        $this->container['screening_ids'] = $screening_ids;

        return $this;
    }

    /**
     * Gets ssn
     * @return string
     */
    public function getSsn()
    {
        return $this->container['ssn'];
    }

    /**
     * Sets ssn
     * @param string $ssn
     * @return $this
     */
    public function setSsn($ssn)
    {
        $this->container['ssn'] = $ssn;

        return $this;
    }

    /**
     * Gets trust_ids
     * @return string[]
     */
    public function getTrustIds()
    {
        return $this->container['trust_ids'];
    }

    /**
     * Sets trust_ids
     * @param string[] $trust_ids
     * @return $this
     */
    public function setTrustIds($trust_ids)
    {
        $this->container['trust_ids'] = $trust_ids;

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


