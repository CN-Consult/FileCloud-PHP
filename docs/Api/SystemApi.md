# Swagger\Client\SystemApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAuthenticationInfo**](SystemApi.md#getAuthenticationInfo) | **GET** /core/getauthenticationinfo | 
[**getDiskUsageDetails**](SystemApi.md#getDiskUsageDetails) | **GET** /core/getdiskusagedetails | 
[**getLanguageList**](SystemApi.md#getLanguageList) | **GET** /core/getlanguagelist | 
[**getSystemStatus**](SystemApi.md#getSystemStatus) | **GET** /core/getsystemstatus | 


# **getAuthenticationInfo**
> string getAuthenticationInfo()



Returns whether the system has been authenticated or not

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAuthenticationInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->getAuthenticationInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDiskUsageDetails**
> string getDiskUsageDetails($username, $level)



Returns storage usage details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = "username_example"; // string | Profile Name
$level = "level_example"; // string | 0 - gives only details,1 - gives only space usage summary,2 - gives space usage summary + details

try {
    $result = $apiInstance->getDiskUsageDetails($username, $level);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->getDiskUsageDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| Profile Name |
 **level** | **string**| 0 - gives only details,1 - gives only space usage summary,2 - gives space usage summary + details |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLanguageList**
> string getLanguageList()



Get the list of Languages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getLanguageList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->getLanguageList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSystemStatus**
> string getSystemStatus()



Will return full detail about the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getSystemStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->getSystemStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

