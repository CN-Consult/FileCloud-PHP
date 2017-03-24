<?php
/**
 * BeginprofilecreationResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * FileCloud API
 *
 * The FileCloud APIs provide developers with the tools necessary to build a variety of apps and clients. This allows extensibility and integration of FileCloud with your existing enterprise systems and frameworks. FileCloud developer API is simple to use and integrate.
 *
 * OpenAPI spec version: 14.0.0.34184
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * BeginprofilecreationResponse Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BeginprofilecreationResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BeginprofilecreationResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'creation' => 'string',
        'domain' => 'string',
        'creationallowed' => 'string',
        'reason' => 'string',
        'savepassword' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'creation' => 'creation',
        'domain' => 'domain',
        'creationallowed' => 'creationallowed',
        'reason' => 'reason',
        'savepassword' => 'savepassword'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'creation' => 'setCreation',
        'domain' => 'setDomain',
        'creationallowed' => 'setCreationallowed',
        'reason' => 'setReason',
        'savepassword' => 'setSavepassword'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'creation' => 'getCreation',
        'domain' => 'getDomain',
        'creationallowed' => 'getCreationallowed',
        'reason' => 'getReason',
        'savepassword' => 'getSavepassword'
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
        $this->container['creation'] = isset($data['creation']) ? $data['creation'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['creationallowed'] = isset($data['creationallowed']) ? $data['creationallowed'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['savepassword'] = isset($data['savepassword']) ? $data['savepassword'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['creation'] === null) {
            $invalid_properties[] = "'creation' can't be null";
        }
        if ($this->container['domain'] === null) {
            $invalid_properties[] = "'domain' can't be null";
        }
        if ($this->container['creationallowed'] === null) {
            $invalid_properties[] = "'creationallowed' can't be null";
        }
        if ($this->container['reason'] === null) {
            $invalid_properties[] = "'reason' can't be null";
        }
        if ($this->container['savepassword'] === null) {
            $invalid_properties[] = "'savepassword' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['creation'] === null) {
            return false;
        }
        if ($this->container['domain'] === null) {
            return false;
        }
        if ($this->container['creationallowed'] === null) {
            return false;
        }
        if ($this->container['reason'] === null) {
            return false;
        }
        if ($this->container['savepassword'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets creation
     * @return string
     */
    public function getCreation()
    {
        return $this->container['creation'];
    }

    /**
     * Sets creation
     * @param string $creation set to 1 if profile creation enabled
     * @return $this
     */
    public function setCreation($creation)
    {
        $this->container['creation'] = $creation;

        return $this;
    }

    /**
     * Gets domain
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     * @param string $domain set to tonidoid.com
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets creationallowed
     * @return string
     */
    public function getCreationallowed()
    {
        return $this->container['creationallowed'];
    }

    /**
     * Sets creationallowed
     * @param string $creationallowed 0|1 - profile creation disabled or enabled
     * @return $this
     */
    public function setCreationallowed($creationallowed)
    {
        $this->container['creationallowed'] = $creationallowed;

        return $this;
    }

    /**
     * Gets reason
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     * @param string $reason reason if profile creation disabled
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets savepassword
     * @return string
     */
    public function getSavepassword()
    {
        return $this->container['savepassword'];
    }

    /**
     * Sets savepassword
     * @param string $savepassword 0
     * @return $this
     */
    public function setSavepassword($savepassword)
    {
        $this->container['savepassword'] = $savepassword;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}
