<?php
/**
 * SearchprofileResponse
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
 * SearchprofileResponse Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SearchprofileResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SearchprofileResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'userid' => 'string',
        'username' => 'string',
        'emailid' => 'string',
        'displayname' => 'string',
        'sizelimit' => 'string'
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
        'userid' => 'userid',
        'username' => 'username',
        'emailid' => 'emailid',
        'displayname' => 'displayname',
        'sizelimit' => 'sizelimit'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'userid' => 'setUserid',
        'username' => 'setUsername',
        'emailid' => 'setEmailid',
        'displayname' => 'setDisplayname',
        'sizelimit' => 'setSizelimit'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'userid' => 'getUserid',
        'username' => 'getUsername',
        'emailid' => 'getEmailid',
        'displayname' => 'getDisplayname',
        'sizelimit' => 'getSizelimit'
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
        $this->container['userid'] = isset($data['userid']) ? $data['userid'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['emailid'] = isset($data['emailid']) ? $data['emailid'] : null;
        $this->container['displayname'] = isset($data['displayname']) ? $data['displayname'] : null;
        $this->container['sizelimit'] = isset($data['sizelimit']) ? $data['sizelimit'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['userid'] === null) {
            $invalid_properties[] = "'userid' can't be null";
        }
        if ($this->container['username'] === null) {
            $invalid_properties[] = "'username' can't be null";
        }
        if ($this->container['emailid'] === null) {
            $invalid_properties[] = "'emailid' can't be null";
        }
        if ($this->container['displayname'] === null) {
            $invalid_properties[] = "'displayname' can't be null";
        }
        if ($this->container['sizelimit'] === null) {
            $invalid_properties[] = "'sizelimit' can't be null";
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
        if ($this->container['userid'] === null) {
            return false;
        }
        if ($this->container['username'] === null) {
            return false;
        }
        if ($this->container['emailid'] === null) {
            return false;
        }
        if ($this->container['displayname'] === null) {
            return false;
        }
        if ($this->container['sizelimit'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets userid
     * @return string
     */
    public function getUserid()
    {
        return $this->container['userid'];
    }

    /**
     * Sets userid
     * @param string $userid profile name
     * @return $this
     */
    public function setUserid($userid)
    {
        $this->container['userid'] = $userid;

        return $this;
    }

    /**
     * Gets username
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     * @param string $username user name
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets emailid
     * @return string
     */
    public function getEmailid()
    {
        return $this->container['emailid'];
    }

    /**
     * Sets emailid
     * @param string $emailid user email-id
     * @return $this
     */
    public function setEmailid($emailid)
    {
        $this->container['emailid'] = $emailid;

        return $this;
    }

    /**
     * Gets displayname
     * @return string
     */
    public function getDisplayname()
    {
        return $this->container['displayname'];
    }

    /**
     * Sets displayname
     * @param string $displayname display name
     * @return $this
     */
    public function setDisplayname($displayname)
    {
        $this->container['displayname'] = $displayname;

        return $this;
    }

    /**
     * Gets sizelimit
     * @return string
     */
    public function getSizelimit()
    {
        return $this->container['sizelimit'];
    }

    /**
     * Sets sizelimit
     * @param string $sizelimit total size quota
     * @return $this
     */
    public function setSizelimit($sizelimit)
    {
        $this->container['sizelimit'] = $sizelimit;

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
