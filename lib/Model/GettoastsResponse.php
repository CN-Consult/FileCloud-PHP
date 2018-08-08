<?php
/**
 * GettoastsResponse
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
 * GettoastsResponse Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GettoastsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GettoastsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'toastrid' => 'string',
        'creater' => 'string',
        'link' => 'string',
        'path' => 'string',
        'name' => 'string',
        'ext' => 'string',
        'dirpath' => 'string',
        'displaydirpath' => 'string',
        'messagetype' => 'string',
        'type' => 'string',
        'message' => 'string',
        'alreadyread' => 'string',
        'createrhasimage' => 'string',
        'createrdisplayname' => 'string',
        'when' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'toastrid' => null,
        'creater' => null,
        'link' => null,
        'path' => null,
        'name' => null,
        'ext' => null,
        'dirpath' => null,
        'displaydirpath' => null,
        'messagetype' => null,
        'type' => null,
        'message' => null,
        'alreadyread' => null,
        'createrhasimage' => null,
        'createrdisplayname' => null,
        'when' => null
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
        'toastrid' => 'toastrid',
        'creater' => 'creater',
        'link' => 'link',
        'path' => 'path',
        'name' => 'name',
        'ext' => 'ext',
        'dirpath' => 'dirpath',
        'displaydirpath' => 'displaydirpath',
        'messagetype' => 'messagetype',
        'type' => 'type',
        'message' => 'message',
        'alreadyread' => 'alreadyread',
        'createrhasimage' => 'createrhasimage',
        'createrdisplayname' => 'createrdisplayname',
        'when' => 'when'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'toastrid' => 'setToastrid',
        'creater' => 'setCreater',
        'link' => 'setLink',
        'path' => 'setPath',
        'name' => 'setName',
        'ext' => 'setExt',
        'dirpath' => 'setDirpath',
        'displaydirpath' => 'setDisplaydirpath',
        'messagetype' => 'setMessagetype',
        'type' => 'setType',
        'message' => 'setMessage',
        'alreadyread' => 'setAlreadyread',
        'createrhasimage' => 'setCreaterhasimage',
        'createrdisplayname' => 'setCreaterdisplayname',
        'when' => 'setWhen'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'toastrid' => 'getToastrid',
        'creater' => 'getCreater',
        'link' => 'getLink',
        'path' => 'getPath',
        'name' => 'getName',
        'ext' => 'getExt',
        'dirpath' => 'getDirpath',
        'displaydirpath' => 'getDisplaydirpath',
        'messagetype' => 'getMessagetype',
        'type' => 'getType',
        'message' => 'getMessage',
        'alreadyread' => 'getAlreadyread',
        'createrhasimage' => 'getCreaterhasimage',
        'createrdisplayname' => 'getCreaterdisplayname',
        'when' => 'getWhen'
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
        $this->container['toastrid'] = isset($data['toastrid']) ? $data['toastrid'] : null;
        $this->container['creater'] = isset($data['creater']) ? $data['creater'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ext'] = isset($data['ext']) ? $data['ext'] : null;
        $this->container['dirpath'] = isset($data['dirpath']) ? $data['dirpath'] : null;
        $this->container['displaydirpath'] = isset($data['displaydirpath']) ? $data['displaydirpath'] : null;
        $this->container['messagetype'] = isset($data['messagetype']) ? $data['messagetype'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['alreadyread'] = isset($data['alreadyread']) ? $data['alreadyread'] : null;
        $this->container['createrhasimage'] = isset($data['createrhasimage']) ? $data['createrhasimage'] : null;
        $this->container['createrdisplayname'] = isset($data['createrdisplayname']) ? $data['createrdisplayname'] : null;
        $this->container['when'] = isset($data['when']) ? $data['when'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['toastrid'] === null) {
            $invalidProperties[] = "'toastrid' can't be null";
        }
        if ($this->container['creater'] === null) {
            $invalidProperties[] = "'creater' can't be null";
        }
        if ($this->container['link'] === null) {
            $invalidProperties[] = "'link' can't be null";
        }
        if ($this->container['path'] === null) {
            $invalidProperties[] = "'path' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['ext'] === null) {
            $invalidProperties[] = "'ext' can't be null";
        }
        if ($this->container['dirpath'] === null) {
            $invalidProperties[] = "'dirpath' can't be null";
        }
        if ($this->container['displaydirpath'] === null) {
            $invalidProperties[] = "'displaydirpath' can't be null";
        }
        if ($this->container['messagetype'] === null) {
            $invalidProperties[] = "'messagetype' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
        if ($this->container['alreadyread'] === null) {
            $invalidProperties[] = "'alreadyread' can't be null";
        }
        if ($this->container['createrhasimage'] === null) {
            $invalidProperties[] = "'createrhasimage' can't be null";
        }
        if ($this->container['createrdisplayname'] === null) {
            $invalidProperties[] = "'createrdisplayname' can't be null";
        }
        if ($this->container['when'] === null) {
            $invalidProperties[] = "'when' can't be null";
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

        if ($this->container['toastrid'] === null) {
            return false;
        }
        if ($this->container['creater'] === null) {
            return false;
        }
        if ($this->container['link'] === null) {
            return false;
        }
        if ($this->container['path'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['ext'] === null) {
            return false;
        }
        if ($this->container['dirpath'] === null) {
            return false;
        }
        if ($this->container['displaydirpath'] === null) {
            return false;
        }
        if ($this->container['messagetype'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        if ($this->container['message'] === null) {
            return false;
        }
        if ($this->container['alreadyread'] === null) {
            return false;
        }
        if ($this->container['createrhasimage'] === null) {
            return false;
        }
        if ($this->container['createrdisplayname'] === null) {
            return false;
        }
        if ($this->container['when'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets toastrid
     *
     * @return string
     */
    public function getToastrid()
    {
        return $this->container['toastrid'];
    }

    /**
     * Sets toastrid
     *
     * @param string $toastrid id value
     *
     * @return $this
     */
    public function setToastrid($toastrid)
    {
        $this->container['toastrid'] = $toastrid;

        return $this;
    }

    /**
     * Gets creater
     *
     * @return string
     */
    public function getCreater()
    {
        return $this->container['creater'];
    }

    /**
     * Sets creater
     *
     * @param string $creater username of the user who caused the notification
     *
     * @return $this
     */
    public function setCreater($creater)
    {
        $this->container['creater'] = $creater;

        return $this;
    }

    /**
     * Gets link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param string $link sharelink
     *
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

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
     * @param string $path path value
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
     * Gets ext
     *
     * @return string
     */
    public function getExt()
    {
        return $this->container['ext'];
    }

    /**
     * Sets ext
     *
     * @param string $ext file extension
     *
     * @return $this
     */
    public function setExt($ext)
    {
        $this->container['ext'] = $ext;

        return $this;
    }

    /**
     * Gets dirpath
     *
     * @return string
     */
    public function getDirpath()
    {
        return $this->container['dirpath'];
    }

    /**
     * Sets dirpath
     *
     * @param string $dirpath directory path
     *
     * @return $this
     */
    public function setDirpath($dirpath)
    {
        $this->container['dirpath'] = $dirpath;

        return $this;
    }

    /**
     * Gets displaydirpath
     *
     * @return string
     */
    public function getDisplaydirpath()
    {
        return $this->container['displaydirpath'];
    }

    /**
     * Sets displaydirpath
     *
     * @param string $displaydirpath filecloud specific directory path
     *
     * @return $this
     */
    public function setDisplaydirpath($displaydirpath)
    {
        $this->container['displaydirpath'] = $displaydirpath;

        return $this;
    }

    /**
     * Gets messagetype
     *
     * @return string
     */
    public function getMessagetype()
    {
        return $this->container['messagetype'];
    }

    /**
     * Sets messagetype
     *
     * @param string $messagetype message type
     *
     * @return $this
     */
    public function setMessagetype($messagetype)
    {
        $this->container['messagetype'] = $messagetype;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type notification type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message notification message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets alreadyread
     *
     * @return string
     */
    public function getAlreadyread()
    {
        return $this->container['alreadyread'];
    }

    /**
     * Sets alreadyread
     *
     * @param string $alreadyread notification status 1 - already read, 0 - unread
     *
     * @return $this
     */
    public function setAlreadyread($alreadyread)
    {
        $this->container['alreadyread'] = $alreadyread;

        return $this;
    }

    /**
     * Gets createrhasimage
     *
     * @return string
     */
    public function getCreaterhasimage()
    {
        return $this->container['createrhasimage'];
    }

    /**
     * Sets createrhasimage
     *
     * @param string $createrhasimage user's profile image who caused the notification
     *
     * @return $this
     */
    public function setCreaterhasimage($createrhasimage)
    {
        $this->container['createrhasimage'] = $createrhasimage;

        return $this;
    }

    /**
     * Gets createrdisplayname
     *
     * @return string
     */
    public function getCreaterdisplayname()
    {
        return $this->container['createrdisplayname'];
    }

    /**
     * Sets createrdisplayname
     *
     * @param string $createrdisplayname user's display name who caused the notification
     *
     * @return $this
     */
    public function setCreaterdisplayname($createrdisplayname)
    {
        $this->container['createrdisplayname'] = $createrdisplayname;

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
     * @param string $when date and time the notification was initiated.
     *
     * @return $this
     */
    public function setWhen($when)
    {
        $this->container['when'] = $when;

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

