# Swagger\Client\ActivityApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getActivityStream**](ActivityApi.md#getActivityStream) | **GET** /core/getactivitystream | 
[**getAuditGeoIpData**](ActivityApi.md#getAuditGeoIpData) | **POST** /core/getauditgeoipdata | 
[**showHideActivity**](ActivityApi.md#showHideActivity) | **POST** /core/showhideactivity | 


# **getActivityStream**
> string getActivityStream($parent)



Get all the activity of the file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$parent = "parent_example"; // string | Specify the path for which you want to get the activity list

try {
    $result = $apiInstance->getActivityStream($parent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getActivityStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent** | **string**| Specify the path for which you want to get the activity list |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuditGeoIpData**
> string getAuditGeoIpData($op, $ipaddress)



Get the geoip data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$op = "op_example"; // string | Specify the operation name
$ipaddress = "ipaddress_example"; // string | Specify the ipaddress

try {
    $result = $apiInstance->getAuditGeoIpData($op, $ipaddress);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getAuditGeoIpData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **op** | **string**| Specify the operation name |
 **ipaddress** | **string**| Specify the ipaddress |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showHideActivity**
> string showHideActivity($collapse)



Hide Activity panel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collapse = "collapse_example"; // string | Set as 1 to hide activity panel

try {
    $result = $apiInstance->showHideActivity($collapse);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->showHideActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collapse** | **string**| Set as 1 to hide activity panel |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

