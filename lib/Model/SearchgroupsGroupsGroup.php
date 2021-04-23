<?php
/**
 * SearchgroupsGroupsGroup
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
 * SearchgroupsGroupsGroup Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SearchgroupsGroupsGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'searchgroups_groups_group';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'groupid' => 'string',
        'groupname' => 'string',
        'emailid' => 'string',
        'createdon' => 'string',
        'autosyncgroup' => 'string',
        'everyonegroup' => 'string',
        'removemembersonsync' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'groupid' => null,
        'groupname' => null,
        'emailid' => null,
        'createdon' => null,
        'autosyncgroup' => null,
        'everyonegroup' => null,
        'removemembersonsync' => null
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
        'groupid' => 'groupid',
        'groupname' => 'groupname',
        'emailid' => 'emailid',
        'createdon' => 'createdon',
        'autosyncgroup' => 'autosyncgroup',
        'everyonegroup' => 'everyonegroup',
        'removemembersonsync' => 'removemembersonsync'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'groupid' => 'setGroupid',
        'groupname' => 'setGroupname',
        'emailid' => 'setEmailid',
        'createdon' => 'setCreatedon',
        'autosyncgroup' => 'setAutosyncgroup',
        'everyonegroup' => 'setEveryonegroup',
        'removemembersonsync' => 'setRemovemembersonsync'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'groupid' => 'getGroupid',
        'groupname' => 'getGroupname',
        'emailid' => 'getEmailid',
        'createdon' => 'getCreatedon',
        'autosyncgroup' => 'getAutosyncgroup',
        'everyonegroup' => 'getEveryonegroup',
        'removemembersonsync' => 'getRemovemembersonsync'
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
        $this->container['groupid'] = isset($data['groupid']) ? $data['groupid'] : null;
        $this->container['groupname'] = isset($data['groupname']) ? $data['groupname'] : null;
        $this->container['emailid'] = isset($data['emailid']) ? $data['emailid'] : null;
        $this->container['createdon'] = isset($data['createdon']) ? $data['createdon'] : null;
        $this->container['autosyncgroup'] = isset($data['autosyncgroup']) ? $data['autosyncgroup'] : null;
        $this->container['everyonegroup'] = isset($data['everyonegroup']) ? $data['everyonegroup'] : null;
        $this->container['removemembersonsync'] = isset($data['removemembersonsync']) ? $data['removemembersonsync'] : null;
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
     * Gets groupid
     *
     * @return string
     */
    public function getGroupid()
    {
        return $this->container['groupid'];
    }

    /**
     * Sets groupid
     *
     * @param string $groupid Group Id Number
     *
     * @return $this
     */
    public function setGroupid($groupid)
    {
        $this->container['groupid'] = $groupid;

        return $this;
    }

    /**
     * Gets groupname
     *
     * @return string
     */
    public function getGroupname()
    {
        return $this->container['groupname'];
    }

    /**
     * Sets groupname
     *
     * @param string $groupname Name of the group
     *
     * @return $this
     */
    public function setGroupname($groupname)
    {
        $this->container['groupname'] = $groupname;

        return $this;
    }

    /**
     * Gets emailid
     *
     * @return string
     */
    public function getEmailid()
    {
        return $this->container['emailid'];
    }

    /**
     * Sets emailid
     *
     * @param string $emailid Group Email ID
     *
     * @return $this
     */
    public function setEmailid($emailid)
    {
        $this->container['emailid'] = $emailid;

        return $this;
    }

    /**
     * Gets createdon
     *
     * @return string
     */
    public function getCreatedon()
    {
        return $this->container['createdon'];
    }

    /**
     * Sets createdon
     *
     * @param string $createdon Created On Date and Time
     *
     * @return $this
     */
    public function setCreatedon($createdon)
    {
        $this->container['createdon'] = $createdon;

        return $this;
    }

    /**
     * Gets autosyncgroup
     *
     * @return string
     */
    public function getAutosyncgroup()
    {
        return $this->container['autosyncgroup'];
    }

    /**
     * Sets autosyncgroup
     *
     * @param string $autosyncgroup 1 - set, 0 - notset
     *
     * @return $this
     */
    public function setAutosyncgroup($autosyncgroup)
    {
        $this->container['autosyncgroup'] = $autosyncgroup;

        return $this;
    }

    /**
     * Gets everyonegroup
     *
     * @return string
     */
    public function getEveryonegroup()
    {
        return $this->container['everyonegroup'];
    }

    /**
     * Sets everyonegroup
     *
     * @param string $everyonegroup 1 - everyonegroup 0 - not everyonegroup
     *
     * @return $this
     */
    public function setEveryonegroup($everyonegroup)
    {
        $this->container['everyonegroup'] = $everyonegroup;

        return $this;
    }

    /**
     * Gets removemembersonsync
     *
     * @return string
     */
    public function getRemovemembersonsync()
    {
        return $this->container['removemembersonsync'];
    }

    /**
     * Sets removemembersonsync
     *
     * @param string $removemembersonsync 0|1, 1 - remove AD users automatically from group when it is removed from AD group
     *
     * @return $this
     */
    public function setRemovemembersonsync($removemembersonsync)
    {
        $this->container['removemembersonsync'] = $removemembersonsync;

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

