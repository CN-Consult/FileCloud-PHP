<?php
/**
 * SystemstatusStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * FileCloud_User_API
 *
 * FileCloud HTTP API
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
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
 * SystemstatusStatus Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SystemstatusStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'systemstatus_status';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'appversion' => 'float',
        'sdkversion' => 'int',
        'baseversion' => 'float',
        'apilevel' => 'int',
        'peerid' => 'float',
        'displayname' => 'int',
        'os' => 'float',
        'oem' => 'int',
        'needsupdate' => 'float',
        'iscritical' => 'int',
        'autoupdate' => 'float',
        'needspluginupdate' => 'int',
        'iscriticalpluginupdate' => 'float',
        'currentprofile' => 'int',
        'numpeersonline' => 'float',
        'uptime' => 'int',
        'httpport' => 'float',
        'udpport' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'appversion' => null,
        'sdkversion' => null,
        'baseversion' => null,
        'apilevel' => null,
        'peerid' => null,
        'displayname' => null,
        'os' => null,
        'oem' => null,
        'needsupdate' => null,
        'iscritical' => null,
        'autoupdate' => null,
        'needspluginupdate' => null,
        'iscriticalpluginupdate' => null,
        'currentprofile' => null,
        'numpeersonline' => null,
        'uptime' => null,
        'httpport' => null,
        'udpport' => null
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
        'appversion' => 'appversion',
        'sdkversion' => 'sdkversion',
        'baseversion' => 'baseversion',
        'apilevel' => 'apilevel',
        'peerid' => 'peerid',
        'displayname' => 'displayname',
        'os' => 'OS',
        'oem' => 'oem',
        'needsupdate' => 'needsupdate',
        'iscritical' => 'iscritical',
        'autoupdate' => 'autoupdate',
        'needspluginupdate' => 'needspluginupdate',
        'iscriticalpluginupdate' => 'iscriticalpluginupdate',
        'currentprofile' => 'currentprofile',
        'numpeersonline' => 'numpeersonline',
        'uptime' => 'uptime',
        'httpport' => 'httpport',
        'udpport' => 'udpport'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appversion' => 'setAppversion',
        'sdkversion' => 'setSdkversion',
        'baseversion' => 'setBaseversion',
        'apilevel' => 'setApilevel',
        'peerid' => 'setPeerid',
        'displayname' => 'setDisplayname',
        'os' => 'setOs',
        'oem' => 'setOem',
        'needsupdate' => 'setNeedsupdate',
        'iscritical' => 'setIscritical',
        'autoupdate' => 'setAutoupdate',
        'needspluginupdate' => 'setNeedspluginupdate',
        'iscriticalpluginupdate' => 'setIscriticalpluginupdate',
        'currentprofile' => 'setCurrentprofile',
        'numpeersonline' => 'setNumpeersonline',
        'uptime' => 'setUptime',
        'httpport' => 'setHttpport',
        'udpport' => 'setUdpport'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appversion' => 'getAppversion',
        'sdkversion' => 'getSdkversion',
        'baseversion' => 'getBaseversion',
        'apilevel' => 'getApilevel',
        'peerid' => 'getPeerid',
        'displayname' => 'getDisplayname',
        'os' => 'getOs',
        'oem' => 'getOem',
        'needsupdate' => 'getNeedsupdate',
        'iscritical' => 'getIscritical',
        'autoupdate' => 'getAutoupdate',
        'needspluginupdate' => 'getNeedspluginupdate',
        'iscriticalpluginupdate' => 'getIscriticalpluginupdate',
        'currentprofile' => 'getCurrentprofile',
        'numpeersonline' => 'getNumpeersonline',
        'uptime' => 'getUptime',
        'httpport' => 'getHttpport',
        'udpport' => 'getUdpport'
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
        $this->container['appversion'] = isset($data['appversion']) ? $data['appversion'] : null;
        $this->container['sdkversion'] = isset($data['sdkversion']) ? $data['sdkversion'] : null;
        $this->container['baseversion'] = isset($data['baseversion']) ? $data['baseversion'] : null;
        $this->container['apilevel'] = isset($data['apilevel']) ? $data['apilevel'] : null;
        $this->container['peerid'] = isset($data['peerid']) ? $data['peerid'] : null;
        $this->container['displayname'] = isset($data['displayname']) ? $data['displayname'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['oem'] = isset($data['oem']) ? $data['oem'] : null;
        $this->container['needsupdate'] = isset($data['needsupdate']) ? $data['needsupdate'] : null;
        $this->container['iscritical'] = isset($data['iscritical']) ? $data['iscritical'] : null;
        $this->container['autoupdate'] = isset($data['autoupdate']) ? $data['autoupdate'] : null;
        $this->container['needspluginupdate'] = isset($data['needspluginupdate']) ? $data['needspluginupdate'] : null;
        $this->container['iscriticalpluginupdate'] = isset($data['iscriticalpluginupdate']) ? $data['iscriticalpluginupdate'] : null;
        $this->container['currentprofile'] = isset($data['currentprofile']) ? $data['currentprofile'] : null;
        $this->container['numpeersonline'] = isset($data['numpeersonline']) ? $data['numpeersonline'] : null;
        $this->container['uptime'] = isset($data['uptime']) ? $data['uptime'] : null;
        $this->container['httpport'] = isset($data['httpport']) ? $data['httpport'] : null;
        $this->container['udpport'] = isset($data['udpport']) ? $data['udpport'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets appversion
     *
     * @return float
     */
    public function getAppversion()
    {
        return $this->container['appversion'];
    }

    /**
     * Sets appversion
     *
     * @param float $appversion Name of the Language
     *
     * @return $this
     */
    public function setAppversion($appversion)
    {
        $this->container['appversion'] = $appversion;

        return $this;
    }

    /**
     * Gets sdkversion
     *
     * @return int
     */
    public function getSdkversion()
    {
        return $this->container['sdkversion'];
    }

    /**
     * Sets sdkversion
     *
     * @param int $sdkversion 0 - Language not set | 1 - Language Set
     *
     * @return $this
     */
    public function setSdkversion($sdkversion)
    {
        $this->container['sdkversion'] = $sdkversion;

        return $this;
    }

    /**
     * Gets baseversion
     *
     * @return float
     */
    public function getBaseversion()
    {
        return $this->container['baseversion'];
    }

    /**
     * Sets baseversion
     *
     * @param float $baseversion Name of the Language
     *
     * @return $this
     */
    public function setBaseversion($baseversion)
    {
        $this->container['baseversion'] = $baseversion;

        return $this;
    }

    /**
     * Gets apilevel
     *
     * @return int
     */
    public function getApilevel()
    {
        return $this->container['apilevel'];
    }

    /**
     * Sets apilevel
     *
     * @param int $apilevel 0 - Language not set | 1 - Language Set
     *
     * @return $this
     */
    public function setApilevel($apilevel)
    {
        $this->container['apilevel'] = $apilevel;

        return $this;
    }

    /**
     * Gets peerid
     *
     * @return float
     */
    public function getPeerid()
    {
        return $this->container['peerid'];
    }

    /**
     * Sets peerid
     *
     * @param float $peerid Name of the Language
     *
     * @return $this
     */
    public function setPeerid($peerid)
    {
        $this->container['peerid'] = $peerid;

        return $this;
    }

    /**
     * Gets displayname
     *
     * @return int
     */
    public function getDisplayname()
    {
        return $this->container['displayname'];
    }

    /**
     * Sets displayname
     *
     * @param int $displayname 0 - Language not set | 1 - Language Set
     *
     * @return $this
     */
    public function setDisplayname($displayname)
    {
        $this->container['displayname'] = $displayname;

        return $this;
    }

    /**
     * Gets os
     *
     * @return float
     */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
     * Sets os
     *
     * @param float $os Name of the Language
     *
     * @return $this
     */
    public function setOs($os)
    {
        $this->container['os'] = $os;

        return $this;
    }

    /**
     * Gets oem
     *
     * @return int
     */
    public function getOem()
    {
        return $this->container['oem'];
    }

    /**
     * Sets oem
     *
     * @param int $oem 0 - Language not set | 1 - Language Set
     *
     * @return $this
     */
    public function setOem($oem)
    {
        $this->container['oem'] = $oem;

        return $this;
    }

    /**
     * Gets needsupdate
     *
     * @return float
     */
    public function getNeedsupdate()
    {
        return $this->container['needsupdate'];
    }

    /**
     * Sets needsupdate
     *
     * @param float $needsupdate Name of the Language
     *
     * @return $this
     */
    public function setNeedsupdate($needsupdate)
    {
        $this->container['needsupdate'] = $needsupdate;

        return $this;
    }

    /**
     * Gets iscritical
     *
     * @return int
     */
    public function getIscritical()
    {
        return $this->container['iscritical'];
    }

    /**
     * Sets iscritical
     *
     * @param int $iscritical 0 - Language not set | 1 - Language Set
     *
     * @return $this
     */
    public function setIscritical($iscritical)
    {
        $this->container['iscritical'] = $iscritical;

        return $this;
    }

    /**
     * Gets autoupdate
     *
     * @return float
     */
    public function getAutoupdate()
    {
        return $this->container['autoupdate'];
    }

    /**
     * Sets autoupdate
     *
     * @param float $autoupdate Name of the Language
     *
     * @return $this
     */
    public function setAutoupdate($autoupdate)
    {
        $this->container['autoupdate'] = $autoupdate;

        return $this;
    }

    /**
     * Gets needspluginupdate
     *
     * @return int
     */
    public function getNeedspluginupdate()
    {
        return $this->container['needspluginupdate'];
    }

    /**
     * Sets needspluginupdate
     *
     * @param int $needspluginupdate 0 - Language not set | 1 - Language Set
     *
     * @return $this
     */
    public function setNeedspluginupdate($needspluginupdate)
    {
        $this->container['needspluginupdate'] = $needspluginupdate;

        return $this;
    }

    /**
     * Gets iscriticalpluginupdate
     *
     * @return float
     */
    public function getIscriticalpluginupdate()
    {
        return $this->container['iscriticalpluginupdate'];
    }

    /**
     * Sets iscriticalpluginupdate
     *
     * @param float $iscriticalpluginupdate Name of the Language
     *
     * @return $this
     */
    public function setIscriticalpluginupdate($iscriticalpluginupdate)
    {
        $this->container['iscriticalpluginupdate'] = $iscriticalpluginupdate;

        return $this;
    }

    /**
     * Gets currentprofile
     *
     * @return int
     */
    public function getCurrentprofile()
    {
        return $this->container['currentprofile'];
    }

    /**
     * Sets currentprofile
     *
     * @param int $currentprofile 0 - Language not set | 1 - Language Set
     *
     * @return $this
     */
    public function setCurrentprofile($currentprofile)
    {
        $this->container['currentprofile'] = $currentprofile;

        return $this;
    }

    /**
     * Gets numpeersonline
     *
     * @return float
     */
    public function getNumpeersonline()
    {
        return $this->container['numpeersonline'];
    }

    /**
     * Sets numpeersonline
     *
     * @param float $numpeersonline Name of the Language
     *
     * @return $this
     */
    public function setNumpeersonline($numpeersonline)
    {
        $this->container['numpeersonline'] = $numpeersonline;

        return $this;
    }

    /**
     * Gets uptime
     *
     * @return int
     */
    public function getUptime()
    {
        return $this->container['uptime'];
    }

    /**
     * Sets uptime
     *
     * @param int $uptime 0 - Language not set | 1 - Language Set
     *
     * @return $this
     */
    public function setUptime($uptime)
    {
        $this->container['uptime'] = $uptime;

        return $this;
    }

    /**
     * Gets httpport
     *
     * @return float
     */
    public function getHttpport()
    {
        return $this->container['httpport'];
    }

    /**
     * Sets httpport
     *
     * @param float $httpport Name of the Language
     *
     * @return $this
     */
    public function setHttpport($httpport)
    {
        $this->container['httpport'] = $httpport;

        return $this;
    }

    /**
     * Gets udpport
     *
     * @return int
     */
    public function getUdpport()
    {
        return $this->container['udpport'];
    }

    /**
     * Sets udpport
     *
     * @param int $udpport 0 - Language not set | 1 - Language Set
     *
     * @return $this
     */
    public function setUdpport($udpport)
    {
        $this->container['udpport'] = $udpport;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
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
     * @param integer $offset Offset
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
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * @param integer $offset Offset
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


