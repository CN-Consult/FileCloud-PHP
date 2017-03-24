# Swagger\Client\Notification_Related_APIApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**coreAddnotificationfilterPost**](Notification_Related_APIApi.md#coreAddnotificationfilterPost) | **POST** /core/addnotificationfilter | 
[**coreIsnotificationfiltersetPost**](Notification_Related_APIApi.md#coreIsnotificationfiltersetPost) | **POST** /core/isnotificationfilterset | 
[**coreRemovenotificationfilterPost**](Notification_Related_APIApi.md#coreRemovenotificationfilterPost) | **POST** /core/removenotificationfilter | 


# **coreAddnotificationfilterPost**
> \Swagger\Client\Model\AddnotificationfilterResponse[] coreAddnotificationfilterPost($path)



Add notification filter to a shared file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Notification_Related_APIApi();
$path = "path_example"; // string | Path name

try {
    $result = $api_instance->coreAddnotificationfilterPost($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Notification_Related_APIApi->coreAddnotificationfilterPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path name |

### Return type

[**\Swagger\Client\Model\AddnotificationfilterResponse[]**](../Model/AddnotificationfilterResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreIsnotificationfiltersetPost**
> \Swagger\Client\Model\IsnotificationfiltersetResponse[] coreIsnotificationfiltersetPost($path)



Is notification filter set or not of a shared file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Notification_Related_APIApi();
$path = "path_example"; // string | Path name

try {
    $result = $api_instance->coreIsnotificationfiltersetPost($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Notification_Related_APIApi->coreIsnotificationfiltersetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path name |

### Return type

[**\Swagger\Client\Model\IsnotificationfiltersetResponse[]**](../Model/IsnotificationfiltersetResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreRemovenotificationfilterPost**
> \Swagger\Client\Model\RemovenotificationfilterResponse[] coreRemovenotificationfilterPost($path)



Remove notification filter of a shared file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Notification_Related_APIApi();
$path = "path_example"; // string | Path name

try {
    $result = $api_instance->coreRemovenotificationfilterPost($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Notification_Related_APIApi->coreRemovenotificationfilterPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path name |

### Return type

[**\Swagger\Client\Model\RemovenotificationfilterResponse[]**](../Model/RemovenotificationfilterResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

