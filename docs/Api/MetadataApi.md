# Swagger\Client\MetadataApi

All URIs are relative to *https://swaggerfc.getfilecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addsettofileobject**](MetadataApi.md#addsettofileobject) | **POST** /core/addsettofileobject | Metadata_Related_API - addsettofileobject lets a user to add set to the list of available metadata sets
[**getavailablemetadatasets**](MetadataApi.md#getavailablemetadatasets) | **POST** /core/getavailablemetadatasets | Metadata_Related_API - getavailablemetadatasets is used to retrieve the list of all available metadata sets
[**getmetadatasetsforsearch**](MetadataApi.md#getmetadatasetsforsearch) | **POST** /core/getmetadatasetsforsearch | Metadata_Related_API - getmetadatasetsforsearch is used to perform an exact match search
[**removesetfromfileobject**](MetadataApi.md#removesetfromfileobject) | **POST** /core/removesetfromfileobject | Metadata_Related_API - removesetfromfileobject lets a user to remove set from the list of available metadata sets
[**saveattributevalues**](MetadataApi.md#saveattributevalues) | **POST** /core/saveattributevalues | Metadata_Related_API - saveattributevalues allows user to save the metadata after providing additional information


# **addsettofileobject**
> \Swagger\Client\Model\Commands addsettofileobject($fullpath, $setid)

Metadata_Related_API - addsettofileobject lets a user to add set to the list of available metadata sets

User can add a set to list of available metadata sets which are associated with a selected file or folder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fullpath = "fullpath_example"; // string | Full path of metadata set
$setid = "setid_example"; // string | Metadataset id

try {
    $result = $apiInstance->addsettofileobject($fullpath, $setid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->addsettofileobject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fullpath** | **string**| Full path of metadata set |
 **setid** | **string**| Metadataset id |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getavailablemetadatasets**
> \Swagger\Client\Model\Metadatasets getavailablemetadatasets($fullpath)

Metadata_Related_API - getavailablemetadatasets is used to retrieve the list of all available metadata sets

User can see the list of all available metadata sets of a file or folder for a particular path

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fullpath = "fullpath_example"; // string | Lists the full path of a metadata set

try {
    $result = $apiInstance->getavailablemetadatasets($fullpath);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->getavailablemetadatasets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fullpath** | **string**| Lists the full path of a metadata set |

### Return type

[**\Swagger\Client\Model\Metadatasets**](../Model/Metadatasets.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getmetadatasetsforsearch**
> \Swagger\Client\Model\Metadatasets getmetadatasetsforsearch($fullpath)

Metadata_Related_API - getmetadatasetsforsearch is used to perform an exact match search

User should specify the whole value inorder for a metadata search and every metadata search condition is used to narrow down the search.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fullpath = "fullpath_example"; // string | Full path of metadata set

try {
    $result = $apiInstance->getmetadatasetsforsearch($fullpath);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->getmetadatasetsforsearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fullpath** | **string**| Full path of metadata set |

### Return type

[**\Swagger\Client\Model\Metadatasets**](../Model/Metadatasets.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removesetfromfileobject**
> \Swagger\Client\Model\Commands removesetfromfileobject($fullpath, $setid)

Metadata_Related_API - removesetfromfileobject lets a user to remove set from the list of available metadata sets

User can remove a set from list of available metadata sets which are associated with a selected file or folder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fullpath = "fullpath_example"; // string | Full path of metadata set
$setid = "setid_example"; // string | Metadata SetID

try {
    $result = $apiInstance->removesetfromfileobject($fullpath, $setid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->removesetfromfileobject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fullpath** | **string**| Full path of metadata set |
 **setid** | **string**| Metadata SetID |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveattributevalues**
> \Swagger\Client\Model\Commands saveattributevalues($fullpath, $setid, $attribute, $attributes_total)

Metadata_Related_API - saveattributevalues allows user to save the metadata after providing additional information

This API allows user to save the attribute values of a metadata i.e., after providing additional information about files and folders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fullpath = "fullpath_example"; // string | Full path of metadata set
$setid = "setid_example"; // string | Metadata SetID
$attribute = "attribute_example"; // string | n_attributeid Attribute n set from 0 to any number (eg. attribute0_attributeid, attribute1_attributeid, etc)
$attributes_total = "attributes_total_example"; // string | Total number of attributes

try {
    $result = $apiInstance->saveattributevalues($fullpath, $setid, $attribute, $attributes_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->saveattributevalues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fullpath** | **string**| Full path of metadata set |
 **setid** | **string**| Metadata SetID |
 **attribute** | **string**| n_attributeid Attribute n set from 0 to any number (eg. attribute0_attributeid, attribute1_attributeid, etc) |
 **attributes_total** | **string**| Total number of attributes |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

