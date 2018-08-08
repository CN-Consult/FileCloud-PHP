<?php
/**
 * GetrecentshareactivityforuserResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * FileCloud API
 *
 * The FileCloud APIs provide developers with the tools necessary to build a variety of apps and clients. This allows extensibility and integration of FileCloud with your existing enterprise systems and frameworks. FileCloud developer API is simple to use and integrate.
 *
 * OpenAPI spec version: 18.1.0.682
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * GetrecentshareactivityforuserResponse Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetrecentshareactivityforuserResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetrecentshareactivityforuserResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shareid' => 'string',
        'path' => 'string',
        'name' => 'string',
        'actioncode' => 'string',
        'who' => 'string',
        'when' => 'string',
        'how' => 'string',
        'ip' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shareid' => null,
        'path' => null,
        'name' => null,
        'actioncode' => null,
        'who' => null,
        'when' => null,
        'how' => null,
        'ip' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'shareid' => 'shareid',
        'path' => 'path',
        'name' => 'name',
        'actioncode' => 'actioncode',
        'who' => 'who',
        'when' => 'when',
        'how' => 'how',
        'ip' => 'ip'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shareid' => 'setShareid',
        'path' => 'setPath',
        'name' => 'setName',
        'actioncode' => 'setActioncode',
        'who' => 'setWho',
        'when' => 'setWhen',
        'how' => 'setHow',
        'ip' => 'setIp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shareid' => 'getShareid',
        'path' => 'getPath',
        'name' => 'getName',
        'actioncode' => 'getActioncode',
        'who' => 'getWho',
        'when' => 'getWhen',
        'how' => 'getHow',
        'ip' => 'getIp'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['shareid'] = isset($data['shareid']) ? $data['shareid'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['actioncode'] = isset($data['actioncode']) ? $data['actioncode'] : null;
        $this->container['who'] = isset($data['who']) ? $data['who'] : null;
        $this->container['when'] = isset($data['when']) ? $data['when'] : null;
        $this->container['how'] = isset($data['how']) ? $data['how'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shareid'] === null) {
            $invalidProperties[] = "'shareid' can't be null";
        }
        if ($this->container['path'] === null) {
            $invalidProperties[] = "'path' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['actioncode'] === null) {
            $invalidProperties[] = "'actioncode' can't be null";
        }
        if ($this->container['who'] === null) {
            $invalidProperties[] = "'who' can't be null";
        }
        if ($this->container['when'] === null) {
            $invalidProperties[] = "'when' can't be null";
        }
        if ($this->container['how'] === null) {
            $invalidProperties[] = "'how' can't be null";
        }
        if ($this->container['ip'] === null) {
            $invalidProperties[] = "'ip' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['shareid'] === null) {
            return false;
        }
        if ($this->container['path'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['actioncode'] === null) {
            return false;
        }
        if ($this->container['who'] === null) {
            return false;
        }
        if ($this->container['when'] === null) {
            return false;
        }
        if ($this->container['how'] === null) {
            return false;
        }
        if ($this->container['ip'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets shareid
     *
     * @return string
     */
    public function getShareid()
    {
        return $this->container['shareid'];
    }

    /**
     * Sets shareid
     *
     * @param string $shareid share id
     *
     * @return $this
     */
    public function setShareid($shareid)
    {
        $this->container['shareid'] = $shareid;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path share location
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name of the file
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets actioncode
     *
     * @return string
     */
    public function getActioncode()
    {
        return $this->container['actioncode'];
    }

    /**
     * Sets actioncode
     *
     * @param string $actioncode action-code says the operation performed on the file/folder
     *
     * @return $this
     */
    public function setActioncode($actioncode)
    {
        $this->container['actioncode'] = $actioncode;

        return $this;
    }

    /**
     * Gets who
     *
     * @return string
     */
    public function getWho()
    {
        return $this->container['who'];
    }

    /**
     * Sets who
     *
     * @param string $who the username who modified the shared content
     *
     * @return $this
     */
    public function setWho($who)
    {
        $this->container['who'] = $who;

        return $this;
    }

    /**
     * Gets when
     *
     * @return string
     */
    public function getWhen()
    {
        return $this->container['when'];
    }

    /**
     * Sets when
     *
     * @param string $when time when the modification was done
     *
     * @return $this
     */
    public function setWhen($when)
    {
        $this->container['when'] = $when;

        return $this;
    }

    /**
     * Gets how
     *
     * @return string
     */
    public function getHow()
    {
        return $this->container['how'];
    }

    /**
     * Sets how
     *
     * @param string $how using which client it was done
     *
     * @return $this
     */
    public function setHow($how)
    {
        $this->container['how'] = $how;

        return $this;
    }

    /**
     * Gets ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     *
     * @param string $ip ip address
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param  integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param  integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     *
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
     *
     * @param  integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
