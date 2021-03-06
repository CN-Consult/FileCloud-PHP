<?php
/**
 * GetAuthenticationInfoResponse
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
 * GetAuthenticationInfoResponse Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetAuthenticationInfoResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetAuthenticationInfoResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'profile' => 'string',
        'displayname' => 'string',
        'peerid' => 'string',
        'authenticated' => 'float',
        'isguestauthenticated' => 'float',
        'hash' => 'string',
        'guesthash' => 'string',
        'guesthashurl' => 'string',
        'isremote' => 'float',
        'reasoncode' => 'float',
        'os' => 'string',
        'authtype' => 'string',
        'enablesaml' => 'string',
        'userlevel' => 'string',
        'userauthtype' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'profile' => null,
        'displayname' => null,
        'peerid' => null,
        'authenticated' => null,
        'isguestauthenticated' => null,
        'hash' => null,
        'guesthash' => null,
        'guesthashurl' => null,
        'isremote' => null,
        'reasoncode' => null,
        'os' => null,
        'authtype' => null,
        'enablesaml' => null,
        'userlevel' => null,
        'userauthtype' => null
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
        'profile' => 'profile',
        'displayname' => 'displayname',
        'peerid' => 'peerid',
        'authenticated' => 'authenticated',
        'isguestauthenticated' => 'isguestauthenticated',
        'hash' => 'hash',
        'guesthash' => 'guesthash',
        'guesthashurl' => 'guesthashurl',
        'isremote' => 'isremote',
        'reasoncode' => 'reasoncode',
        'os' => 'OS',
        'authtype' => 'authtype',
        'enablesaml' => 'enablesaml',
        'userlevel' => 'userlevel',
        'userauthtype' => 'userauthtype'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'profile' => 'setProfile',
        'displayname' => 'setDisplayname',
        'peerid' => 'setPeerid',
        'authenticated' => 'setAuthenticated',
        'isguestauthenticated' => 'setIsguestauthenticated',
        'hash' => 'setHash',
        'guesthash' => 'setGuesthash',
        'guesthashurl' => 'setGuesthashurl',
        'isremote' => 'setIsremote',
        'reasoncode' => 'setReasoncode',
        'os' => 'setOs',
        'authtype' => 'setAuthtype',
        'enablesaml' => 'setEnablesaml',
        'userlevel' => 'setUserlevel',
        'userauthtype' => 'setUserauthtype'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'profile' => 'getProfile',
        'displayname' => 'getDisplayname',
        'peerid' => 'getPeerid',
        'authenticated' => 'getAuthenticated',
        'isguestauthenticated' => 'getIsguestauthenticated',
        'hash' => 'getHash',
        'guesthash' => 'getGuesthash',
        'guesthashurl' => 'getGuesthashurl',
        'isremote' => 'getIsremote',
        'reasoncode' => 'getReasoncode',
        'os' => 'getOs',
        'authtype' => 'getAuthtype',
        'enablesaml' => 'getEnablesaml',
        'userlevel' => 'getUserlevel',
        'userauthtype' => 'getUserauthtype'
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
        $this->container['profile'] = isset($data['profile']) ? $data['profile'] : null;
        $this->container['displayname'] = isset($data['displayname']) ? $data['displayname'] : null;
        $this->container['peerid'] = isset($data['peerid']) ? $data['peerid'] : null;
        $this->container['authenticated'] = isset($data['authenticated']) ? $data['authenticated'] : null;
        $this->container['isguestauthenticated'] = isset($data['isguestauthenticated']) ? $data['isguestauthenticated'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['guesthash'] = isset($data['guesthash']) ? $data['guesthash'] : null;
        $this->container['guesthashurl'] = isset($data['guesthashurl']) ? $data['guesthashurl'] : null;
        $this->container['isremote'] = isset($data['isremote']) ? $data['isremote'] : null;
        $this->container['reasoncode'] = isset($data['reasoncode']) ? $data['reasoncode'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['authtype'] = isset($data['authtype']) ? $data['authtype'] : null;
        $this->container['enablesaml'] = isset($data['enablesaml']) ? $data['enablesaml'] : null;
        $this->container['userlevel'] = isset($data['userlevel']) ? $data['userlevel'] : null;
        $this->container['userauthtype'] = isset($data['userauthtype']) ? $data['userauthtype'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['profile'] === null) {
            $invalidProperties[] = "'profile' can't be null";
        }
        if ($this->container['displayname'] === null) {
            $invalidProperties[] = "'displayname' can't be null";
        }
        if ($this->container['peerid'] === null) {
            $invalidProperties[] = "'peerid' can't be null";
        }
        if ($this->container['authenticated'] === null) {
            $invalidProperties[] = "'authenticated' can't be null";
        }
        if ($this->container['isguestauthenticated'] === null) {
            $invalidProperties[] = "'isguestauthenticated' can't be null";
        }
        if ($this->container['hash'] === null) {
            $invalidProperties[] = "'hash' can't be null";
        }
        if ($this->container['guesthash'] === null) {
            $invalidProperties[] = "'guesthash' can't be null";
        }
        if ($this->container['guesthashurl'] === null) {
            $invalidProperties[] = "'guesthashurl' can't be null";
        }
        if ($this->container['isremote'] === null) {
            $invalidProperties[] = "'isremote' can't be null";
        }
        if ($this->container['reasoncode'] === null) {
            $invalidProperties[] = "'reasoncode' can't be null";
        }
        if ($this->container['os'] === null) {
            $invalidProperties[] = "'os' can't be null";
        }
        if ($this->container['authtype'] === null) {
            $invalidProperties[] = "'authtype' can't be null";
        }
        if ($this->container['enablesaml'] === null) {
            $invalidProperties[] = "'enablesaml' can't be null";
        }
        if ($this->container['userlevel'] === null) {
            $invalidProperties[] = "'userlevel' can't be null";
        }
        if ($this->container['userauthtype'] === null) {
            $invalidProperties[] = "'userauthtype' can't be null";
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

        if ($this->container['profile'] === null) {
            return false;
        }
        if ($this->container['displayname'] === null) {
            return false;
        }
        if ($this->container['peerid'] === null) {
            return false;
        }
        if ($this->container['authenticated'] === null) {
            return false;
        }
        if ($this->container['isguestauthenticated'] === null) {
            return false;
        }
        if ($this->container['hash'] === null) {
            return false;
        }
        if ($this->container['guesthash'] === null) {
            return false;
        }
        if ($this->container['guesthashurl'] === null) {
            return false;
        }
        if ($this->container['isremote'] === null) {
            return false;
        }
        if ($this->container['reasoncode'] === null) {
            return false;
        }
        if ($this->container['os'] === null) {
            return false;
        }
        if ($this->container['authtype'] === null) {
            return false;
        }
        if ($this->container['enablesaml'] === null) {
            return false;
        }
        if ($this->container['userlevel'] === null) {
            return false;
        }
        if ($this->container['userauthtype'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets profile
     *
     * @return string
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     *
     * @param string $profile profile name
     *
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->container['profile'] = $profile;

        return $this;
    }

    /**
     * Gets displayname
     *
     * @return string
     */
    public function getDisplayname()
    {
        return $this->container['displayname'];
    }

    /**
     * Sets displayname
     *
     * @param string $displayname display name
     *
     * @return $this
     */
    public function setDisplayname($displayname)
    {
        $this->container['displayname'] = $displayname;

        return $this;
    }

    /**
     * Gets peerid
     *
     * @return string
     */
    public function getPeerid()
    {
        return $this->container['peerid'];
    }

    /**
     * Sets peerid
     *
     * @param string $peerid user name
     *
     * @return $this
     */
    public function setPeerid($peerid)
    {
        $this->container['peerid'] = $peerid;

        return $this;
    }

    /**
     * Gets authenticated
     *
     * @return float
     */
    public function getAuthenticated()
    {
        return $this->container['authenticated'];
    }

    /**
     * Sets authenticated
     *
     * @param float $authenticated whether is authenticated or not
     *
     * @return $this
     */
    public function setAuthenticated($authenticated)
    {
        $this->container['authenticated'] = $authenticated;

        return $this;
    }

    /**
     * Gets isguestauthenticated
     *
     * @return float
     */
    public function getIsguestauthenticated()
    {
        return $this->container['isguestauthenticated'];
    }

    /**
     * Sets isguestauthenticated
     *
     * @param float $isguestauthenticated whether is guest authenticated or not
     *
     * @return $this
     */
    public function setIsguestauthenticated($isguestauthenticated)
    {
        $this->container['isguestauthenticated'] = $isguestauthenticated;

        return $this;
    }

    /**
     * Gets hash
     *
     * @return string
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param string $hash hash value
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets guesthash
     *
     * @return string
     */
    public function getGuesthash()
    {
        return $this->container['guesthash'];
    }

    /**
     * Sets guesthash
     *
     * @param string $guesthash guest hash value
     *
     * @return $this
     */
    public function setGuesthash($guesthash)
    {
        $this->container['guesthash'] = $guesthash;

        return $this;
    }

    /**
     * Gets guesthashurl
     *
     * @return string
     */
    public function getGuesthashurl()
    {
        return $this->container['guesthashurl'];
    }

    /**
     * Sets guesthashurl
     *
     * @param string $guesthashurl guest hash url value
     *
     * @return $this
     */
    public function setGuesthashurl($guesthashurl)
    {
        $this->container['guesthashurl'] = $guesthashurl;

        return $this;
    }

    /**
     * Gets isremote
     *
     * @return float
     */
    public function getIsremote()
    {
        return $this->container['isremote'];
    }

    /**
     * Sets isremote
     *
     * @param float $isremote whether is remote or not
     *
     * @return $this
     */
    public function setIsremote($isremote)
    {
        $this->container['isremote'] = $isremote;

        return $this;
    }

    /**
     * Gets reasoncode
     *
     * @return float
     */
    public function getReasoncode()
    {
        return $this->container['reasoncode'];
    }

    /**
     * Sets reasoncode
     *
     * @param float $reasoncode whether reason code set or not
     *
     * @return $this
     */
    public function setReasoncode($reasoncode)
    {
        $this->container['reasoncode'] = $reasoncode;

        return $this;
    }

    /**
     * Gets os
     *
     * @return string
     */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
     * Sets os
     *
     * @param string $os always set tonido_cloud
     *
     * @return $this
     */
    public function setOs($os)
    {
        $this->container['os'] = $os;

        return $this;
    }

    /**
     * Gets authtype
     *
     * @return string
     */
    public function getAuthtype()
    {
        return $this->container['authtype'];
    }

    /**
     * Sets authtype
     *
     * @param string $authtype specifies the authentication type (default | ad | ldap)
     *
     * @return $this
     */
    public function setAuthtype($authtype)
    {
        $this->container['authtype'] = $authtype;

        return $this;
    }

    /**
     * Gets enablesaml
     *
     * @return string
     */
    public function getEnablesaml()
    {
        return $this->container['enablesaml'];
    }

    /**
     * Sets enablesaml
     *
     * @param string $enablesaml 1|0 specifies whether saml is enabled or no
     *
     * @return $this
     */
    public function setEnablesaml($enablesaml)
    {
        $this->container['enablesaml'] = $enablesaml;

        return $this;
    }

    /**
     * Gets userlevel
     *
     * @return string
     */
    public function getUserlevel()
    {
        return $this->container['userlevel'];
    }

    /**
     * Sets userlevel
     *
     * @param string $userlevel specifies users access level (full | guest | limited)
     *
     * @return $this
     */
    public function setUserlevel($userlevel)
    {
        $this->container['userlevel'] = $userlevel;

        return $this;
    }

    /**
     * Gets userauthtype
     *
     * @return string
     */
    public function getUserauthtype()
    {
        return $this->container['userauthtype'];
    }

    /**
     * Sets userauthtype
     *
     * @param string $userauthtype specifies users authentication type (default | ad | ldap)
     *
     * @return $this
     */
    public function setUserauthtype($userauthtype)
    {
        $this->container['userauthtype'] = $userauthtype;

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

