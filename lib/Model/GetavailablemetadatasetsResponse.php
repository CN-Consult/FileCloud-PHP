<?php
/**
 * GetavailablemetadatasetsResponse
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
 * GetavailablemetadatasetsResponse Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetavailablemetadatasetsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetavailablemetadatasetsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'total' => 'string',
        'id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'type' => 'string',
        'disabled' => 'string',
        'allowallpaths' => 'string',
        'attribute0_attributeid' => 'string',
        'attribute0_name' => 'string',
        'attribute0_description' => 'string',
        'attribute0_type' => 'string',
        'attribute0_disabled' => 'string',
        'attribute0_defaultvalue' => 'string',
        'attribute0_predefinedvalues_total' => 'string',
        'attributes_total' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'total' => null,
        'id' => null,
        'name' => null,
        'description' => null,
        'type' => null,
        'disabled' => null,
        'allowallpaths' => null,
        'attribute0_attributeid' => null,
        'attribute0_name' => null,
        'attribute0_description' => null,
        'attribute0_type' => null,
        'attribute0_disabled' => null,
        'attribute0_defaultvalue' => null,
        'attribute0_predefinedvalues_total' => null,
        'attributes_total' => null
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
        'total' => 'total',
        'id' => 'id',
        'name' => 'name',
        'description' => 'description',
        'type' => 'type',
        'disabled' => 'disabled',
        'allowallpaths' => 'allowallpaths',
        'attribute0_attributeid' => 'attribute0_attributeid',
        'attribute0_name' => 'attribute0_name',
        'attribute0_description' => 'attribute0_description',
        'attribute0_type' => 'attribute0_type',
        'attribute0_disabled' => 'attribute0_disabled',
        'attribute0_defaultvalue' => 'attribute0_defaultvalue',
        'attribute0_predefinedvalues_total' => 'attribute0_predefinedvalues_total',
        'attributes_total' => 'attributes_total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total' => 'setTotal',
        'id' => 'setId',
        'name' => 'setName',
        'description' => 'setDescription',
        'type' => 'setType',
        'disabled' => 'setDisabled',
        'allowallpaths' => 'setAllowallpaths',
        'attribute0_attributeid' => 'setAttribute0Attributeid',
        'attribute0_name' => 'setAttribute0Name',
        'attribute0_description' => 'setAttribute0Description',
        'attribute0_type' => 'setAttribute0Type',
        'attribute0_disabled' => 'setAttribute0Disabled',
        'attribute0_defaultvalue' => 'setAttribute0Defaultvalue',
        'attribute0_predefinedvalues_total' => 'setAttribute0PredefinedvaluesTotal',
        'attributes_total' => 'setAttributesTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total' => 'getTotal',
        'id' => 'getId',
        'name' => 'getName',
        'description' => 'getDescription',
        'type' => 'getType',
        'disabled' => 'getDisabled',
        'allowallpaths' => 'getAllowallpaths',
        'attribute0_attributeid' => 'getAttribute0Attributeid',
        'attribute0_name' => 'getAttribute0Name',
        'attribute0_description' => 'getAttribute0Description',
        'attribute0_type' => 'getAttribute0Type',
        'attribute0_disabled' => 'getAttribute0Disabled',
        'attribute0_defaultvalue' => 'getAttribute0Defaultvalue',
        'attribute0_predefinedvalues_total' => 'getAttribute0PredefinedvaluesTotal',
        'attributes_total' => 'getAttributesTotal'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
        $this->container['allowallpaths'] = isset($data['allowallpaths']) ? $data['allowallpaths'] : null;
        $this->container['attribute0_attributeid'] = isset($data['attribute0_attributeid']) ? $data['attribute0_attributeid'] : null;
        $this->container['attribute0_name'] = isset($data['attribute0_name']) ? $data['attribute0_name'] : null;
        $this->container['attribute0_description'] = isset($data['attribute0_description']) ? $data['attribute0_description'] : null;
        $this->container['attribute0_type'] = isset($data['attribute0_type']) ? $data['attribute0_type'] : null;
        $this->container['attribute0_disabled'] = isset($data['attribute0_disabled']) ? $data['attribute0_disabled'] : null;
        $this->container['attribute0_defaultvalue'] = isset($data['attribute0_defaultvalue']) ? $data['attribute0_defaultvalue'] : null;
        $this->container['attribute0_predefinedvalues_total'] = isset($data['attribute0_predefinedvalues_total']) ? $data['attribute0_predefinedvalues_total'] : null;
        $this->container['attributes_total'] = isset($data['attributes_total']) ? $data['attributes_total'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['disabled'] === null) {
            $invalidProperties[] = "'disabled' can't be null";
        }
        if ($this->container['allowallpaths'] === null) {
            $invalidProperties[] = "'allowallpaths' can't be null";
        }
        if ($this->container['attribute0_attributeid'] === null) {
            $invalidProperties[] = "'attribute0_attributeid' can't be null";
        }
        if ($this->container['attribute0_name'] === null) {
            $invalidProperties[] = "'attribute0_name' can't be null";
        }
        if ($this->container['attribute0_description'] === null) {
            $invalidProperties[] = "'attribute0_description' can't be null";
        }
        if ($this->container['attribute0_type'] === null) {
            $invalidProperties[] = "'attribute0_type' can't be null";
        }
        if ($this->container['attribute0_disabled'] === null) {
            $invalidProperties[] = "'attribute0_disabled' can't be null";
        }
        if ($this->container['attribute0_defaultvalue'] === null) {
            $invalidProperties[] = "'attribute0_defaultvalue' can't be null";
        }
        if ($this->container['attribute0_predefinedvalues_total'] === null) {
            $invalidProperties[] = "'attribute0_predefinedvalues_total' can't be null";
        }
        if ($this->container['attributes_total'] === null) {
            $invalidProperties[] = "'attributes_total' can't be null";
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

        if ($this->container['total'] === null) {
            return false;
        }
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['description'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        if ($this->container['disabled'] === null) {
            return false;
        }
        if ($this->container['allowallpaths'] === null) {
            return false;
        }
        if ($this->container['attribute0_attributeid'] === null) {
            return false;
        }
        if ($this->container['attribute0_name'] === null) {
            return false;
        }
        if ($this->container['attribute0_description'] === null) {
            return false;
        }
        if ($this->container['attribute0_type'] === null) {
            return false;
        }
        if ($this->container['attribute0_disabled'] === null) {
            return false;
        }
        if ($this->container['attribute0_defaultvalue'] === null) {
            return false;
        }
        if ($this->container['attribute0_predefinedvalues_total'] === null) {
            return false;
        }
        if ($this->container['attributes_total'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param string $total total number of metadata sets
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id metadata set id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $name metadata set name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description metadata description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param string $type attribute type (ex:integer,text,etc.)
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets disabled
     *
     * @return string
     */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
     * Sets disabled
     *
     * @param string $disabled disable metadata set
     *
     * @return $this
     */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;

        return $this;
    }

    /**
     * Gets allowallpaths
     *
     * @return string
     */
    public function getAllowallpaths()
    {
        return $this->container['allowallpaths'];
    }

    /**
     * Sets allowallpaths
     *
     * @param string $allowallpaths metadata will be available for all paths
     *
     * @return $this
     */
    public function setAllowallpaths($allowallpaths)
    {
        $this->container['allowallpaths'] = $allowallpaths;

        return $this;
    }

    /**
     * Gets attribute0_attributeid
     *
     * @return string
     */
    public function getAttribute0Attributeid()
    {
        return $this->container['attribute0_attributeid'];
    }

    /**
     * Sets attribute0_attributeid
     *
     * @param string $attribute0_attributeid specifies the attribute id
     *
     * @return $this
     */
    public function setAttribute0Attributeid($attribute0_attributeid)
    {
        $this->container['attribute0_attributeid'] = $attribute0_attributeid;

        return $this;
    }

    /**
     * Gets attribute0_name
     *
     * @return string
     */
    public function getAttribute0Name()
    {
        return $this->container['attribute0_name'];
    }

    /**
     * Sets attribute0_name
     *
     * @param string $attribute0_name specifies the attribute name
     *
     * @return $this
     */
    public function setAttribute0Name($attribute0_name)
    {
        $this->container['attribute0_name'] = $attribute0_name;

        return $this;
    }

    /**
     * Gets attribute0_description
     *
     * @return string
     */
    public function getAttribute0Description()
    {
        return $this->container['attribute0_description'];
    }

    /**
     * Sets attribute0_description
     *
     * @param string $attribute0_description specifies the attribute description
     *
     * @return $this
     */
    public function setAttribute0Description($attribute0_description)
    {
        $this->container['attribute0_description'] = $attribute0_description;

        return $this;
    }

    /**
     * Gets attribute0_type
     *
     * @return string
     */
    public function getAttribute0Type()
    {
        return $this->container['attribute0_type'];
    }

    /**
     * Sets attribute0_type
     *
     * @param string $attribute0_type specifies the attribute type (ex:integer,text,etc)
     *
     * @return $this
     */
    public function setAttribute0Type($attribute0_type)
    {
        $this->container['attribute0_type'] = $attribute0_type;

        return $this;
    }

    /**
     * Gets attribute0_disabled
     *
     * @return string
     */
    public function getAttribute0Disabled()
    {
        return $this->container['attribute0_disabled'];
    }

    /**
     * Sets attribute0_disabled
     *
     * @param string $attribute0_disabled 1 - attribute disabled | 0 - attribute enabled
     *
     * @return $this
     */
    public function setAttribute0Disabled($attribute0_disabled)
    {
        $this->container['attribute0_disabled'] = $attribute0_disabled;

        return $this;
    }

    /**
     * Gets attribute0_defaultvalue
     *
     * @return string
     */
    public function getAttribute0Defaultvalue()
    {
        return $this->container['attribute0_defaultvalue'];
    }

    /**
     * Sets attribute0_defaultvalue
     *
     * @param string $attribute0_defaultvalue specifies the default value for the attribute
     *
     * @return $this
     */
    public function setAttribute0Defaultvalue($attribute0_defaultvalue)
    {
        $this->container['attribute0_defaultvalue'] = $attribute0_defaultvalue;

        return $this;
    }

    /**
     * Gets attribute0_predefinedvalues_total
     *
     * @return string
     */
    public function getAttribute0PredefinedvaluesTotal()
    {
        return $this->container['attribute0_predefinedvalues_total'];
    }

    /**
     * Sets attribute0_predefinedvalues_total
     *
     * @param string $attribute0_predefinedvalues_total specifies the total number of perdefined values
     *
     * @return $this
     */
    public function setAttribute0PredefinedvaluesTotal($attribute0_predefinedvalues_total)
    {
        $this->container['attribute0_predefinedvalues_total'] = $attribute0_predefinedvalues_total;

        return $this;
    }

    /**
     * Gets attributes_total
     *
     * @return string
     */
    public function getAttributesTotal()
    {
        return $this->container['attributes_total'];
    }

    /**
     * Sets attributes_total
     *
     * @param string $attributes_total specifies the total number of attributes
     *
     * @return $this
     */
    public function setAttributesTotal($attributes_total)
    {
        $this->container['attributes_total'] = $attributes_total;

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
