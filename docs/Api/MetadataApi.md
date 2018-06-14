# Swagger\Client\MetadataApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addSetToFileObject**](MetadataApi.md#addSetToFileObject) | **POST** /core/addsettofileobject | 
[**getAvailableMetaDataSets**](MetadataApi.md#getAvailableMetaDataSets) | **POST** /core/getavailablemetadatasets | 
[**getMetaDataSetsForSearch**](MetadataApi.md#getMetaDataSetsForSearch) | **POST** /core/getmetadatasetsforsearch | 
[**removeSetFromFileObject**](MetadataApi.md#removeSetFromFileObject) | **POST** /core/removesetfromfileobject | 
[**saveAttributeValues**](MetadataApi.md#saveAttributeValues) | **POST** /core/saveattributevalues | 


# **addSetToFileObject**
> string addSetToFileObject($fullpath, $setid)



Add set to available Metadata sets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fullpath = "fullpath_example"; // string | Path location
$setid = "setid_example"; // string | Metadataset id

try {
    $result = $apiInstance->addSetToFileObject($fullpath, $setid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->addSetToFileObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fullpath** | **string**| Path location |
 **setid** | **string**| Metadataset id |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAvailableMetaDataSets**
> string getAvailableMetaDataSets($fullpath)



List the available metadata sets for a particular path

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
    $result = $apiInstance->getAvailableMetaDataSets($fullpath);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->getAvailableMetaDataSets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fullpath** | **string**| Full path of metadata set |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMetaDataSetsForSearch**
> string getMetaDataSetsForSearch($fullpath)



Search based on metadata

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
    $result = $apiInstance->getMetaDataSetsForSearch($fullpath);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->getMetaDataSetsForSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fullpath** | **string**| Full path of metadata set |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeSetFromFileObject**
> string removeSetFromFileObject($fullpath, $setid)



Remove set from available Metadata sets

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
    $result = $apiInstance->removeSetFromFileObject($fullpath, $setid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->removeSetFromFileObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fullpath** | **string**| Full path of metadata set |
 **setid** | **string**| Metadataset id |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveAttributeValues**
> string saveAttributeValues($fullpath, $setid, $attribute0_attributeid, $attribute0_value, $attributes_total)



Save the value of attribute

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
$attribute0_attributeid = "attribute0_attributeid_example"; // string | Specify the Attribute ID
$attribute0_value = "attribute0_value_example"; // string | Specify the Attribute value
$attributes_total = "attributes_total_example"; // string | Total number of attributes

try {
    $result = $apiInstance->saveAttributeValues($fullpath, $setid, $attribute0_attributeid, $attribute0_value, $attributes_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->saveAttributeValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fullpath** | **string**| Full path of metadata set |
 **setid** | **string**| Metadataset id |
 **attribute0_attributeid** | **string**| Specify the Attribute ID |
 **attribute0_value** | **string**| Specify the Attribute value |
 **attributes_total** | **string**| Total number of attributes |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

