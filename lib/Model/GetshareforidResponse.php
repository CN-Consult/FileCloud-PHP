<?php
/**
 * GetshareforidResponse
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
 * GetshareforidResponse Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetshareforidResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetshareforidResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shareid' => 'string',
        'sharename' => 'string',
        'sharelocation' => 'string',
        'shareurl' => 'string',
        'viewmode' => 'string',
        'validityperiod' => 'string',
        'sharesizelimit' => 'string',
        'maxdownloads' => 'float',
        'downloadcount' => 'float',
        'viewsize' => 'float',
        'thumbsize' => 'float',
        'allowpublicaccess' => 'float',
        'allowpublicupload' => 'float',
        'allowpublicviewonly' => 'float',
        'allowpublicuploadonly' => 'float',
        'isdir' => 'float',
        'isvalid' => 'float',
        'createddate' => 'float',
        'allowedit' => 'float',
        'allowdelete' => 'float',
        'allowsync' => 'float',
        'allowshare' => 'float',
        'shareowner' => 'string',
        'hidenotification' => 'float',
        'ispublicsecure' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shareid' => null,
        'sharename' => null,
        'sharelocation' => null,
        'shareurl' => null,
        'viewmode' => null,
        'validityperiod' => null,
        'sharesizelimit' => null,
        'maxdownloads' => null,
        'downloadcount' => null,
        'viewsize' => null,
        'thumbsize' => null,
        'allowpublicaccess' => null,
        'allowpublicupload' => null,
        'allowpublicviewonly' => null,
        'allowpublicuploadonly' => null,
        'isdir' => null,
        'isvalid' => null,
        'createddate' => null,
        'allowedit' => null,
        'allowdelete' => null,
        'allowsync' => null,
        'allowshare' => null,
        'shareowner' => null,
        'hidenotification' => null,
        'ispublicsecure' => null
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
        'sharename' => 'sharename',
        'sharelocation' => 'sharelocation',
        'shareurl' => 'shareurl',
        'viewmode' => 'viewmode',
        'validityperiod' => 'validityperiod',
        'sharesizelimit' => 'sharesizelimit',
        'maxdownloads' => 'maxdownloads',
        'downloadcount' => 'downloadcount',
        'viewsize' => 'viewsize',
        'thumbsize' => 'thumbsize',
        'allowpublicaccess' => 'allowpublicaccess',
        'allowpublicupload' => 'allowpublicupload',
        'allowpublicviewonly' => 'allowpublicviewonly',
        'allowpublicuploadonly' => 'allowpublicuploadonly',
        'isdir' => 'isdir',
        'isvalid' => 'isvalid',
        'createddate' => 'createddate',
        'allowedit' => 'allowedit',
        'allowdelete' => 'allowdelete',
        'allowsync' => 'allowsync',
        'allowshare' => 'allowshare',
        'shareowner' => 'shareowner',
        'hidenotification' => 'hidenotification',
        'ispublicsecure' => 'ispublicsecure'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shareid' => 'setShareid',
        'sharename' => 'setSharename',
        'sharelocation' => 'setSharelocation',
        'shareurl' => 'setShareurl',
        'viewmode' => 'setViewmode',
        'validityperiod' => 'setValidityperiod',
        'sharesizelimit' => 'setSharesizelimit',
        'maxdownloads' => 'setMaxdownloads',
        'downloadcount' => 'setDownloadcount',
        'viewsize' => 'setViewsize',
        'thumbsize' => 'setThumbsize',
        'allowpublicaccess' => 'setAllowpublicaccess',
        'allowpublicupload' => 'setAllowpublicupload',
        'allowpublicviewonly' => 'setAllowpublicviewonly',
        'allowpublicuploadonly' => 'setAllowpublicuploadonly',
        'isdir' => 'setIsdir',
        'isvalid' => 'setIsvalid',
        'createddate' => 'setCreateddate',
        'allowedit' => 'setAllowedit',
        'allowdelete' => 'setAllowdelete',
        'allowsync' => 'setAllowsync',
        'allowshare' => 'setAllowshare',
        'shareowner' => 'setShareowner',
        'hidenotification' => 'setHidenotification',
        'ispublicsecure' => 'setIspublicsecure'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shareid' => 'getShareid',
        'sharename' => 'getSharename',
        'sharelocation' => 'getSharelocation',
        'shareurl' => 'getShareurl',
        'viewmode' => 'getViewmode',
        'validityperiod' => 'getValidityperiod',
        'sharesizelimit' => 'getSharesizelimit',
        'maxdownloads' => 'getMaxdownloads',
        'downloadcount' => 'getDownloadcount',
        'viewsize' => 'getViewsize',
        'thumbsize' => 'getThumbsize',
        'allowpublicaccess' => 'getAllowpublicaccess',
        'allowpublicupload' => 'getAllowpublicupload',
        'allowpublicviewonly' => 'getAllowpublicviewonly',
        'allowpublicuploadonly' => 'getAllowpublicuploadonly',
        'isdir' => 'getIsdir',
        'isvalid' => 'getIsvalid',
        'createddate' => 'getCreateddate',
        'allowedit' => 'getAllowedit',
        'allowdelete' => 'getAllowdelete',
        'allowsync' => 'getAllowsync',
        'allowshare' => 'getAllowshare',
        'shareowner' => 'getShareowner',
        'hidenotification' => 'getHidenotification',
        'ispublicsecure' => 'getIspublicsecure'
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
        $this->container['sharename'] = isset($data['sharename']) ? $data['sharename'] : null;
        $this->container['sharelocation'] = isset($data['sharelocation']) ? $data['sharelocation'] : null;
        $this->container['shareurl'] = isset($data['shareurl']) ? $data['shareurl'] : null;
        $this->container['viewmode'] = isset($data['viewmode']) ? $data['viewmode'] : null;
        $this->container['validityperiod'] = isset($data['validityperiod']) ? $data['validityperiod'] : null;
        $this->container['sharesizelimit'] = isset($data['sharesizelimit']) ? $data['sharesizelimit'] : null;
        $this->container['maxdownloads'] = isset($data['maxdownloads']) ? $data['maxdownloads'] : null;
        $this->container['downloadcount'] = isset($data['downloadcount']) ? $data['downloadcount'] : null;
        $this->container['viewsize'] = isset($data['viewsize']) ? $data['viewsize'] : null;
        $this->container['thumbsize'] = isset($data['thumbsize']) ? $data['thumbsize'] : null;
        $this->container['allowpublicaccess'] = isset($data['allowpublicaccess']) ? $data['allowpublicaccess'] : null;
        $this->container['allowpublicupload'] = isset($data['allowpublicupload']) ? $data['allowpublicupload'] : null;
        $this->container['allowpublicviewonly'] = isset($data['allowpublicviewonly']) ? $data['allowpublicviewonly'] : null;
        $this->container['allowpublicuploadonly'] = isset($data['allowpublicuploadonly']) ? $data['allowpublicuploadonly'] : null;
        $this->container['isdir'] = isset($data['isdir']) ? $data['isdir'] : null;
        $this->container['isvalid'] = isset($data['isvalid']) ? $data['isvalid'] : null;
        $this->container['createddate'] = isset($data['createddate']) ? $data['createddate'] : null;
        $this->container['allowedit'] = isset($data['allowedit']) ? $data['allowedit'] : null;
        $this->container['allowdelete'] = isset($data['allowdelete']) ? $data['allowdelete'] : null;
        $this->container['allowsync'] = isset($data['allowsync']) ? $data['allowsync'] : null;
        $this->container['allowshare'] = isset($data['allowshare']) ? $data['allowshare'] : null;
        $this->container['shareowner'] = isset($data['shareowner']) ? $data['shareowner'] : null;
        $this->container['hidenotification'] = isset($data['hidenotification']) ? $data['hidenotification'] : null;
        $this->container['ispublicsecure'] = isset($data['ispublicsecure']) ? $data['ispublicsecure'] : null;
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
        if ($this->container['sharename'] === null) {
            $invalidProperties[] = "'sharename' can't be null";
        }
        if ($this->container['sharelocation'] === null) {
            $invalidProperties[] = "'sharelocation' can't be null";
        }
        if ($this->container['shareurl'] === null) {
            $invalidProperties[] = "'shareurl' can't be null";
        }
        if ($this->container['viewmode'] === null) {
            $invalidProperties[] = "'viewmode' can't be null";
        }
        if ($this->container['validityperiod'] === null) {
            $invalidProperties[] = "'validityperiod' can't be null";
        }
        if ($this->container['sharesizelimit'] === null) {
            $invalidProperties[] = "'sharesizelimit' can't be null";
        }
        if ($this->container['maxdownloads'] === null) {
            $invalidProperties[] = "'maxdownloads' can't be null";
        }
        if ($this->container['downloadcount'] === null) {
            $invalidProperties[] = "'downloadcount' can't be null";
        }
        if ($this->container['viewsize'] === null) {
            $invalidProperties[] = "'viewsize' can't be null";
        }
        if ($this->container['thumbsize'] === null) {
            $invalidProperties[] = "'thumbsize' can't be null";
        }
        if ($this->container['allowpublicaccess'] === null) {
            $invalidProperties[] = "'allowpublicaccess' can't be null";
        }
        if ($this->container['allowpublicupload'] === null) {
            $invalidProperties[] = "'allowpublicupload' can't be null";
        }
        if ($this->container['allowpublicviewonly'] === null) {
            $invalidProperties[] = "'allowpublicviewonly' can't be null";
        }
        if ($this->container['allowpublicuploadonly'] === null) {
            $invalidProperties[] = "'allowpublicuploadonly' can't be null";
        }
        if ($this->container['isdir'] === null) {
            $invalidProperties[] = "'isdir' can't be null";
        }
        if ($this->container['isvalid'] === null) {
            $invalidProperties[] = "'isvalid' can't be null";
        }
        if ($this->container['createddate'] === null) {
            $invalidProperties[] = "'createddate' can't be null";
        }
        if ($this->container['allowedit'] === null) {
            $invalidProperties[] = "'allowedit' can't be null";
        }
        if ($this->container['allowdelete'] === null) {
            $invalidProperties[] = "'allowdelete' can't be null";
        }
        if ($this->container['allowsync'] === null) {
            $invalidProperties[] = "'allowsync' can't be null";
        }
        if ($this->container['allowshare'] === null) {
            $invalidProperties[] = "'allowshare' can't be null";
        }
        if ($this->container['shareowner'] === null) {
            $invalidProperties[] = "'shareowner' can't be null";
        }
        if ($this->container['hidenotification'] === null) {
            $invalidProperties[] = "'hidenotification' can't be null";
        }
        if ($this->container['ispublicsecure'] === null) {
            $invalidProperties[] = "'ispublicsecure' can't be null";
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
        if ($this->container['sharename'] === null) {
            return false;
        }
        if ($this->container['sharelocation'] === null) {
            return false;
        }
        if ($this->container['shareurl'] === null) {
            return false;
        }
        if ($this->container['viewmode'] === null) {
            return false;
        }
        if ($this->container['validityperiod'] === null) {
            return false;
        }
        if ($this->container['sharesizelimit'] === null) {
            return false;
        }
        if ($this->container['maxdownloads'] === null) {
            return false;
        }
        if ($this->container['downloadcount'] === null) {
            return false;
        }
        if ($this->container['viewsize'] === null) {
            return false;
        }
        if ($this->container['thumbsize'] === null) {
            return false;
        }
        if ($this->container['allowpublicaccess'] === null) {
            return false;
        }
        if ($this->container['allowpublicupload'] === null) {
            return false;
        }
        if ($this->container['allowpublicviewonly'] === null) {
            return false;
        }
        if ($this->container['allowpublicuploadonly'] === null) {
            return false;
        }
        if ($this->container['isdir'] === null) {
            return false;
        }
        if ($this->container['isvalid'] === null) {
            return false;
        }
        if ($this->container['createddate'] === null) {
            return false;
        }
        if ($this->container['allowedit'] === null) {
            return false;
        }
        if ($this->container['allowdelete'] === null) {
            return false;
        }
        if ($this->container['allowsync'] === null) {
            return false;
        }
        if ($this->container['allowshare'] === null) {
            return false;
        }
        if ($this->container['shareowner'] === null) {
            return false;
        }
        if ($this->container['hidenotification'] === null) {
            return false;
        }
        if ($this->container['ispublicsecure'] === null) {
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
     * @param string $shareid share id no.
     *
     * @return $this
     */
    public function setShareid($shareid)
    {
        $this->container['shareid'] = $shareid;

        return $this;
    }

    /**
     * Gets sharename
     *
     * @return string
     */
    public function getSharename()
    {
        return $this->container['sharename'];
    }

    /**
     * Sets sharename
     *
     * @param string $sharename share name
     *
     * @return $this
     */
    public function setSharename($sharename)
    {
        $this->container['sharename'] = $sharename;

        return $this;
    }

    /**
     * Gets sharelocation
     *
     * @return string
     */
    public function getSharelocation()
    {
        return $this->container['sharelocation'];
    }

    /**
     * Sets sharelocation
     *
     * @param string $sharelocation location of the shared file
     *
     * @return $this
     */
    public function setSharelocation($sharelocation)
    {
        $this->container['sharelocation'] = $sharelocation;

        return $this;
    }

    /**
     * Gets shareurl
     *
     * @return string
     */
    public function getShareurl()
    {
        return $this->container['shareurl'];
    }

    /**
     * Sets shareurl
     *
     * @param string $shareurl url of the shared file
     *
     * @return $this
     */
    public function setShareurl($shareurl)
    {
        $this->container['shareurl'] = $shareurl;

        return $this;
    }

    /**
     * Gets viewmode
     *
     * @return string
     */
    public function getViewmode()
    {
        return $this->container['viewmode'];
    }

    /**
     * Sets viewmode
     *
     * @param string $viewmode set if user sets any view mode
     *
     * @return $this
     */
    public function setViewmode($viewmode)
    {
        $this->container['viewmode'] = $viewmode;

        return $this;
    }

    /**
     * Gets validityperiod
     *
     * @return string
     */
    public function getValidityperiod()
    {
        return $this->container['validityperiod'];
    }

    /**
     * Sets validityperiod
     *
     * @param string $validityperiod expiry date of share
     *
     * @return $this
     */
    public function setValidityperiod($validityperiod)
    {
        $this->container['validityperiod'] = $validityperiod;

        return $this;
    }

    /**
     * Gets sharesizelimit
     *
     * @return string
     */
    public function getSharesizelimit()
    {
        return $this->container['sharesizelimit'];
    }

    /**
     * Sets sharesizelimit
     *
     * @param string $sharesizelimit size limit of share
     *
     * @return $this
     */
    public function setSharesizelimit($sharesizelimit)
    {
        $this->container['sharesizelimit'] = $sharesizelimit;

        return $this;
    }

    /**
     * Gets maxdownloads
     *
     * @return float
     */
    public function getMaxdownloads()
    {
        return $this->container['maxdownloads'];
    }

    /**
     * Sets maxdownloads
     *
     * @param float $maxdownloads maximum download limit is set
     *
     * @return $this
     */
    public function setMaxdownloads($maxdownloads)
    {
        $this->container['maxdownloads'] = $maxdownloads;

        return $this;
    }

    /**
     * Gets downloadcount
     *
     * @return float
     */
    public function getDownloadcount()
    {
        return $this->container['downloadcount'];
    }

    /**
     * Sets downloadcount
     *
     * @param float $downloadcount no. of time the file has been downloaded
     *
     * @return $this
     */
    public function setDownloadcount($downloadcount)
    {
        $this->container['downloadcount'] = $downloadcount;

        return $this;
    }

    /**
     * Gets viewsize
     *
     * @return float
     */
    public function getViewsize()
    {
        return $this->container['viewsize'];
    }

    /**
     * Sets viewsize
     *
     * @param float $viewsize specifies view size
     *
     * @return $this
     */
    public function setViewsize($viewsize)
    {
        $this->container['viewsize'] = $viewsize;

        return $this;
    }

    /**
     * Gets thumbsize
     *
     * @return float
     */
    public function getThumbsize()
    {
        return $this->container['thumbsize'];
    }

    /**
     * Sets thumbsize
     *
     * @param float $thumbsize specifies thumb size
     *
     * @return $this
     */
    public function setThumbsize($thumbsize)
    {
        $this->container['thumbsize'] = $thumbsize;

        return $this;
    }

    /**
     * Gets allowpublicaccess
     *
     * @return float
     */
    public function getAllowpublicaccess()
    {
        return $this->container['allowpublicaccess'];
    }

    /**
     * Sets allowpublicaccess
     *
     * @param float $allowpublicaccess whether is to allow public access or not
     *
     * @return $this
     */
    public function setAllowpublicaccess($allowpublicaccess)
    {
        $this->container['allowpublicaccess'] = $allowpublicaccess;

        return $this;
    }

    /**
     * Gets allowpublicupload
     *
     * @return float
     */
    public function getAllowpublicupload()
    {
        return $this->container['allowpublicupload'];
    }

    /**
     * Sets allowpublicupload
     *
     * @param float $allowpublicupload whether is to allow public upload or not
     *
     * @return $this
     */
    public function setAllowpublicupload($allowpublicupload)
    {
        $this->container['allowpublicupload'] = $allowpublicupload;

        return $this;
    }

    /**
     * Gets allowpublicviewonly
     *
     * @return float
     */
    public function getAllowpublicviewonly()
    {
        return $this->container['allowpublicviewonly'];
    }

    /**
     * Sets allowpublicviewonly
     *
     * @param float $allowpublicviewonly whether is to allow public view only or not
     *
     * @return $this
     */
    public function setAllowpublicviewonly($allowpublicviewonly)
    {
        $this->container['allowpublicviewonly'] = $allowpublicviewonly;

        return $this;
    }

    /**
     * Gets allowpublicuploadonly
     *
     * @return float
     */
    public function getAllowpublicuploadonly()
    {
        return $this->container['allowpublicuploadonly'];
    }

    /**
     * Sets allowpublicuploadonly
     *
     * @param float $allowpublicuploadonly whether is to allow public upload only or not
     *
     * @return $this
     */
    public function setAllowpublicuploadonly($allowpublicuploadonly)
    {
        $this->container['allowpublicuploadonly'] = $allowpublicuploadonly;

        return $this;
    }

    /**
     * Gets isdir
     *
     * @return float
     */
    public function getIsdir()
    {
        return $this->container['isdir'];
    }

    /**
     * Sets isdir
     *
     * @param float $isdir whether is directory or not
     *
     * @return $this
     */
    public function setIsdir($isdir)
    {
        $this->container['isdir'] = $isdir;

        return $this;
    }

    /**
     * Gets isvalid
     *
     * @return float
     */
    public function getIsvalid()
    {
        return $this->container['isvalid'];
    }

    /**
     * Sets isvalid
     *
     * @param float $isvalid whether is valid or not
     *
     * @return $this
     */
    public function setIsvalid($isvalid)
    {
        $this->container['isvalid'] = $isvalid;

        return $this;
    }

    /**
     * Gets createddate
     *
     * @return float
     */
    public function getCreateddate()
    {
        return $this->container['createddate'];
    }

    /**
     * Sets createddate
     *
     * @param float $createddate created date of share
     *
     * @return $this
     */
    public function setCreateddate($createddate)
    {
        $this->container['createddate'] = $createddate;

        return $this;
    }

    /**
     * Gets allowedit
     *
     * @return float
     */
    public function getAllowedit()
    {
        return $this->container['allowedit'];
    }

    /**
     * Sets allowedit
     *
     * @param float $allowedit whether to allow to edit or not
     *
     * @return $this
     */
    public function setAllowedit($allowedit)
    {
        $this->container['allowedit'] = $allowedit;

        return $this;
    }

    /**
     * Gets allowdelete
     *
     * @return float
     */
    public function getAllowdelete()
    {
        return $this->container['allowdelete'];
    }

    /**
     * Sets allowdelete
     *
     * @param float $allowdelete whether to allow to delete or not
     *
     * @return $this
     */
    public function setAllowdelete($allowdelete)
    {
        $this->container['allowdelete'] = $allowdelete;

        return $this;
    }

    /**
     * Gets allowsync
     *
     * @return float
     */
    public function getAllowsync()
    {
        return $this->container['allowsync'];
    }

    /**
     * Sets allowsync
     *
     * @param float $allowsync whether to allow to sync or not
     *
     * @return $this
     */
    public function setAllowsync($allowsync)
    {
        $this->container['allowsync'] = $allowsync;

        return $this;
    }

    /**
     * Gets allowshare
     *
     * @return float
     */
    public function getAllowshare()
    {
        return $this->container['allowshare'];
    }

    /**
     * Sets allowshare
     *
     * @param float $allowshare whether to allow share or not
     *
     * @return $this
     */
    public function setAllowshare($allowshare)
    {
        $this->container['allowshare'] = $allowshare;

        return $this;
    }

    /**
     * Gets shareowner
     *
     * @return string
     */
    public function getShareowner()
    {
        return $this->container['shareowner'];
    }

    /**
     * Sets shareowner
     *
     * @param string $shareowner share owner name
     *
     * @return $this
     */
    public function setShareowner($shareowner)
    {
        $this->container['shareowner'] = $shareowner;

        return $this;
    }

    /**
     * Gets hidenotification
     *
     * @return float
     */
    public function getHidenotification()
    {
        return $this->container['hidenotification'];
    }

    /**
     * Sets hidenotification
     *
     * @param float $hidenotification disable or enable email notification
     *
     * @return $this
     */
    public function setHidenotification($hidenotification)
    {
        $this->container['hidenotification'] = $hidenotification;

        return $this;
    }

    /**
     * Gets ispublicsecure
     *
     * @return float
     */
    public function getIspublicsecure()
    {
        return $this->container['ispublicsecure'];
    }

    /**
     * Sets ispublicsecure
     *
     * @param float $ispublicsecure 0 | 1 password protected share disabled or enabled
     *
     * @return $this
     */
    public function setIspublicsecure($ispublicsecure)
    {
        $this->container['ispublicsecure'] = $ispublicsecure;

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

