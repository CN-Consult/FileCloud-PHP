<?php
/**
 * GetgroupaccessforshareResponse
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
 * GetgroupaccessforshareResponse Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetgroupaccessforshareResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GetgroupaccessforshareResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'groupid' => 'string',
        'groupname' => 'string',
        'read' => 'string',
        'write' => 'string',
        'sync' => 'string',
        'share' => 'string',
        'download' => 'string'
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
        'groupid' => 'groupid',
        'groupname' => 'groupname',
        'read' => 'read',
        'write' => 'write',
        'sync' => 'sync',
        'share' => 'share',
        'download' => 'download'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'groupid' => 'setGroupid',
        'groupname' => 'setGroupname',
        'read' => 'setRead',
        'write' => 'setWrite',
        'sync' => 'setSync',
        'share' => 'setShare',
        'download' => 'setDownload'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'groupid' => 'getGroupid',
        'groupname' => 'getGroupname',
        'read' => 'getRead',
        'write' => 'getWrite',
        'sync' => 'getSync',
        'share' => 'getShare',
        'download' => 'getDownload'
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
        $this->container['groupid'] = isset($data['groupid']) ? $data['groupid'] : null;
        $this->container['groupname'] = isset($data['groupname']) ? $data['groupname'] : null;
        $this->container['read'] = isset($data['read']) ? $data['read'] : null;
        $this->container['write'] = isset($data['write']) ? $data['write'] : null;
        $this->container['sync'] = isset($data['sync']) ? $data['sync'] : null;
        $this->container['share'] = isset($data['share']) ? $data['share'] : null;
        $this->container['download'] = isset($data['download']) ? $data['download'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['groupid'] === null) {
            $invalid_properties[] = "'groupid' can't be null";
        }
        if ($this->container['groupname'] === null) {
            $invalid_properties[] = "'groupname' can't be null";
        }
        if ($this->container['read'] === null) {
            $invalid_properties[] = "'read' can't be null";
        }
        if ($this->container['write'] === null) {
            $invalid_properties[] = "'write' can't be null";
        }
        if ($this->container['sync'] === null) {
            $invalid_properties[] = "'sync' can't be null";
        }
        if ($this->container['share'] === null) {
            $invalid_properties[] = "'share' can't be null";
        }
        if ($this->container['download'] === null) {
            $invalid_properties[] = "'download' can't be null";
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
        if ($this->container['groupid'] === null) {
            return false;
        }
        if ($this->container['groupname'] === null) {
            return false;
        }
        if ($this->container['read'] === null) {
            return false;
        }
        if ($this->container['write'] === null) {
            return false;
        }
        if ($this->container['sync'] === null) {
            return false;
        }
        if ($this->container['share'] === null) {
            return false;
        }
        if ($this->container['download'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets groupid
     * @return string
     */
    public function getGroupid()
    {
        return $this->container['groupid'];
    }

    /**
     * Sets groupid
     * @param string $groupid group id number
     * @return $this
     */
    public function setGroupid($groupid)
    {
        $this->container['groupid'] = $groupid;

        return $this;
    }

    /**
     * Gets groupname
     * @return string
     */
    public function getGroupname()
    {
        return $this->container['groupname'];
    }

    /**
     * Sets groupname
     * @param string $groupname name of group
     * @return $this
     */
    public function setGroupname($groupname)
    {
        $this->container['groupname'] = $groupname;

        return $this;
    }

    /**
     * Gets read
     * @return string
     */
    public function getRead()
    {
        return $this->container['read'];
    }

    /**
     * Sets read
     * @param string $read true if set, false if not set
     * @return $this
     */
    public function setRead($read)
    {
        $this->container['read'] = $read;

        return $this;
    }

    /**
     * Gets write
     * @return string
     */
    public function getWrite()
    {
        return $this->container['write'];
    }

    /**
     * Sets write
     * @param string $write true if set, false if not set
     * @return $this
     */
    public function setWrite($write)
    {
        $this->container['write'] = $write;

        return $this;
    }

    /**
     * Gets sync
     * @return string
     */
    public function getSync()
    {
        return $this->container['sync'];
    }

    /**
     * Sets sync
     * @param string $sync true if set, false if not set
     * @return $this
     */
    public function setSync($sync)
    {
        $this->container['sync'] = $sync;

        return $this;
    }

    /**
     * Gets share
     * @return string
     */
    public function getShare()
    {
        return $this->container['share'];
    }

    /**
     * Sets share
     * @param string $share true if set, false if not set
     * @return $this
     */
    public function setShare($share)
    {
        $this->container['share'] = $share;

        return $this;
    }

    /**
     * Gets download
     * @return string
     */
    public function getDownload()
    {
        return $this->container['download'];
    }

    /**
     * Sets download
     * @param string $download true if set, false if not set
     * @return $this
     */
    public function setDownload($download)
    {
        $this->container['download'] = $download;

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
