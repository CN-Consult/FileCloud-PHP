<?php
/**
 * GetrmcclientsResponse
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
 * GetrmcclientsResponse Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetrmcclientsResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GetrmcclientsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rid' => 'string',
        'remote_client_id' => 'string',
        'remote_client_api_level' => 'string',
        'remote_client_disp_name' => 'string',
        'mesremote_client_os_typesage' => 'string',
        'remote_client_app_version' => 'string',
        'remote_client_os_version' => 'string',
        'isblocked' => 'string',
        'remote_client_last_login' => 'string',
        'userid' => 'string',
        'pending_actions_count' => 'string',
        'remote_client_status' => 'string',
        'server_code' => 'string'
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
        'rid' => 'rid',
        'remote_client_id' => 'remote_client_id',
        'remote_client_api_level' => 'remote_client_api_level',
        'remote_client_disp_name' => 'remote_client_disp_name',
        'mesremote_client_os_typesage' => 'mesremote_client_os_typesage',
        'remote_client_app_version' => 'remote_client_app_version',
        'remote_client_os_version' => 'remote_client_os_version',
        'isblocked' => 'isblocked',
        'remote_client_last_login' => 'remote_client_last_login',
        'userid' => 'userid',
        'pending_actions_count' => 'pending_actions_count',
        'remote_client_status' => 'remote_client_status',
        'server_code' => 'server_code'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'rid' => 'setRid',
        'remote_client_id' => 'setRemoteClientId',
        'remote_client_api_level' => 'setRemoteClientApiLevel',
        'remote_client_disp_name' => 'setRemoteClientDispName',
        'mesremote_client_os_typesage' => 'setMesremoteClientOsTypesage',
        'remote_client_app_version' => 'setRemoteClientAppVersion',
        'remote_client_os_version' => 'setRemoteClientOsVersion',
        'isblocked' => 'setIsblocked',
        'remote_client_last_login' => 'setRemoteClientLastLogin',
        'userid' => 'setUserid',
        'pending_actions_count' => 'setPendingActionsCount',
        'remote_client_status' => 'setRemoteClientStatus',
        'server_code' => 'setServerCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'rid' => 'getRid',
        'remote_client_id' => 'getRemoteClientId',
        'remote_client_api_level' => 'getRemoteClientApiLevel',
        'remote_client_disp_name' => 'getRemoteClientDispName',
        'mesremote_client_os_typesage' => 'getMesremoteClientOsTypesage',
        'remote_client_app_version' => 'getRemoteClientAppVersion',
        'remote_client_os_version' => 'getRemoteClientOsVersion',
        'isblocked' => 'getIsblocked',
        'remote_client_last_login' => 'getRemoteClientLastLogin',
        'userid' => 'getUserid',
        'pending_actions_count' => 'getPendingActionsCount',
        'remote_client_status' => 'getRemoteClientStatus',
        'server_code' => 'getServerCode'
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
        $this->container['rid'] = isset($data['rid']) ? $data['rid'] : null;
        $this->container['remote_client_id'] = isset($data['remote_client_id']) ? $data['remote_client_id'] : null;
        $this->container['remote_client_api_level'] = isset($data['remote_client_api_level']) ? $data['remote_client_api_level'] : null;
        $this->container['remote_client_disp_name'] = isset($data['remote_client_disp_name']) ? $data['remote_client_disp_name'] : null;
        $this->container['mesremote_client_os_typesage'] = isset($data['mesremote_client_os_typesage']) ? $data['mesremote_client_os_typesage'] : null;
        $this->container['remote_client_app_version'] = isset($data['remote_client_app_version']) ? $data['remote_client_app_version'] : null;
        $this->container['remote_client_os_version'] = isset($data['remote_client_os_version']) ? $data['remote_client_os_version'] : null;
        $this->container['isblocked'] = isset($data['isblocked']) ? $data['isblocked'] : null;
        $this->container['remote_client_last_login'] = isset($data['remote_client_last_login']) ? $data['remote_client_last_login'] : null;
        $this->container['userid'] = isset($data['userid']) ? $data['userid'] : null;
        $this->container['pending_actions_count'] = isset($data['pending_actions_count']) ? $data['pending_actions_count'] : null;
        $this->container['remote_client_status'] = isset($data['remote_client_status']) ? $data['remote_client_status'] : null;
        $this->container['server_code'] = isset($data['server_code']) ? $data['server_code'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['rid'] === null) {
            $invalid_properties[] = "'rid' can't be null";
        }
        if ($this->container['remote_client_id'] === null) {
            $invalid_properties[] = "'remote_client_id' can't be null";
        }
        if ($this->container['remote_client_api_level'] === null) {
            $invalid_properties[] = "'remote_client_api_level' can't be null";
        }
        if ($this->container['remote_client_disp_name'] === null) {
            $invalid_properties[] = "'remote_client_disp_name' can't be null";
        }
        if ($this->container['mesremote_client_os_typesage'] === null) {
            $invalid_properties[] = "'mesremote_client_os_typesage' can't be null";
        }
        if ($this->container['remote_client_app_version'] === null) {
            $invalid_properties[] = "'remote_client_app_version' can't be null";
        }
        if ($this->container['remote_client_os_version'] === null) {
            $invalid_properties[] = "'remote_client_os_version' can't be null";
        }
        if ($this->container['isblocked'] === null) {
            $invalid_properties[] = "'isblocked' can't be null";
        }
        if ($this->container['remote_client_last_login'] === null) {
            $invalid_properties[] = "'remote_client_last_login' can't be null";
        }
        if ($this->container['userid'] === null) {
            $invalid_properties[] = "'userid' can't be null";
        }
        if ($this->container['pending_actions_count'] === null) {
            $invalid_properties[] = "'pending_actions_count' can't be null";
        }
        if ($this->container['remote_client_status'] === null) {
            $invalid_properties[] = "'remote_client_status' can't be null";
        }
        if ($this->container['server_code'] === null) {
            $invalid_properties[] = "'server_code' can't be null";
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
        if ($this->container['rid'] === null) {
            return false;
        }
        if ($this->container['remote_client_id'] === null) {
            return false;
        }
        if ($this->container['remote_client_api_level'] === null) {
            return false;
        }
        if ($this->container['remote_client_disp_name'] === null) {
            return false;
        }
        if ($this->container['mesremote_client_os_typesage'] === null) {
            return false;
        }
        if ($this->container['remote_client_app_version'] === null) {
            return false;
        }
        if ($this->container['remote_client_os_version'] === null) {
            return false;
        }
        if ($this->container['isblocked'] === null) {
            return false;
        }
        if ($this->container['remote_client_last_login'] === null) {
            return false;
        }
        if ($this->container['userid'] === null) {
            return false;
        }
        if ($this->container['pending_actions_count'] === null) {
            return false;
        }
        if ($this->container['remote_client_status'] === null) {
            return false;
        }
        if ($this->container['server_code'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets rid
     * @return string
     */
    public function getRid()
    {
        return $this->container['rid'];
    }

    /**
     * Sets rid
     * @param string $rid rmc id number
     * @return $this
     */
    public function setRid($rid)
    {
        $this->container['rid'] = $rid;

        return $this;
    }

    /**
     * Gets remote_client_id
     * @return string
     */
    public function getRemoteClientId()
    {
        return $this->container['remote_client_id'];
    }

    /**
     * Sets remote_client_id
     * @param string $remote_client_id the unique identifier for the client device
     * @return $this
     */
    public function setRemoteClientId($remote_client_id)
    {
        $this->container['remote_client_id'] = $remote_client_id;

        return $this;
    }

    /**
     * Gets remote_client_api_level
     * @return string
     */
    public function getRemoteClientApiLevel()
    {
        return $this->container['remote_client_api_level'];
    }

    /**
     * Sets remote_client_api_level
     * @param string $remote_client_api_level the api-level is 4 (latest required client api-level is 4)
     * @return $this
     */
    public function setRemoteClientApiLevel($remote_client_api_level)
    {
        $this->container['remote_client_api_level'] = $remote_client_api_level;

        return $this;
    }

    /**
     * Gets remote_client_disp_name
     * @return string
     */
    public function getRemoteClientDispName()
    {
        return $this->container['remote_client_disp_name'];
    }

    /**
     * Sets remote_client_disp_name
     * @param string $remote_client_disp_name the client device name
     * @return $this
     */
    public function setRemoteClientDispName($remote_client_disp_name)
    {
        $this->container['remote_client_disp_name'] = $remote_client_disp_name;

        return $this;
    }

    /**
     * Gets mesremote_client_os_typesage
     * @return string
     */
    public function getMesremoteClientOsTypesage()
    {
        return $this->container['mesremote_client_os_typesage'];
    }

    /**
     * Sets mesremote_client_os_typesage
     * @param string $mesremote_client_os_typesage the client device os type
     * @return $this
     */
    public function setMesremoteClientOsTypesage($mesremote_client_os_typesage)
    {
        $this->container['mesremote_client_os_typesage'] = $mesremote_client_os_typesage;

        return $this;
    }

    /**
     * Gets remote_client_app_version
     * @return string
     */
    public function getRemoteClientAppVersion()
    {
        return $this->container['remote_client_app_version'];
    }

    /**
     * Sets remote_client_app_version
     * @param string $remote_client_app_version the client app version
     * @return $this
     */
    public function setRemoteClientAppVersion($remote_client_app_version)
    {
        $this->container['remote_client_app_version'] = $remote_client_app_version;

        return $this;
    }

    /**
     * Gets remote_client_os_version
     * @return string
     */
    public function getRemoteClientOsVersion()
    {
        return $this->container['remote_client_os_version'];
    }

    /**
     * Sets remote_client_os_version
     * @param string $remote_client_os_version the device os version
     * @return $this
     */
    public function setRemoteClientOsVersion($remote_client_os_version)
    {
        $this->container['remote_client_os_version'] = $remote_client_os_version;

        return $this;
    }

    /**
     * Gets isblocked
     * @return string
     */
    public function getIsblocked()
    {
        return $this->container['isblocked'];
    }

    /**
     * Sets isblocked
     * @param string $isblocked 1|0 - client device blocked or allowed to login
     * @return $this
     */
    public function setIsblocked($isblocked)
    {
        $this->container['isblocked'] = $isblocked;

        return $this;
    }

    /**
     * Gets remote_client_last_login
     * @return string
     */
    public function getRemoteClientLastLogin()
    {
        return $this->container['remote_client_last_login'];
    }

    /**
     * Sets remote_client_last_login
     * @param string $remote_client_last_login the last login date and time of client
     * @return $this
     */
    public function setRemoteClientLastLogin($remote_client_last_login)
    {
        $this->container['remote_client_last_login'] = $remote_client_last_login;

        return $this;
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
     * @param string $userid user name
     * @return $this
     */
    public function setUserid($userid)
    {
        $this->container['userid'] = $userid;

        return $this;
    }

    /**
     * Gets pending_actions_count
     * @return string
     */
    public function getPendingActionsCount()
    {
        return $this->container['pending_actions_count'];
    }

    /**
     * Sets pending_actions_count
     * @param string $pending_actions_count number of commands pending to be executed on client
     * @return $this
     */
    public function setPendingActionsCount($pending_actions_count)
    {
        $this->container['pending_actions_count'] = $pending_actions_count;

        return $this;
    }

    /**
     * Gets remote_client_status
     * @return string
     */
    public function getRemoteClientStatus()
    {
        return $this->container['remote_client_status'];
    }

    /**
     * Sets remote_client_status
     * @param string $remote_client_status 0|1|2 default | waiting for approval | approved
     * @return $this
     */
    public function setRemoteClientStatus($remote_client_status)
    {
        $this->container['remote_client_status'] = $remote_client_status;

        return $this;
    }

    /**
     * Gets server_code
     * @return string
     */
    public function getServerCode()
    {
        return $this->container['server_code'];
    }

    /**
     * Sets server_code
     * @param string $server_code server code
     * @return $this
     */
    public function setServerCode($server_code)
    {
        $this->container['server_code'] = $server_code;

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