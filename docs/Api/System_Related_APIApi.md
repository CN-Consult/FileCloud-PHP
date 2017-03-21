# Swagger\Client\System_Related_APIApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**coreGetauthenticationinfoGet**](System_Related_APIApi.md#coreGetauthenticationinfoGet) | **GET** /core/getauthenticationinfo | 
[**coreGetdiskusagedetailsGet**](System_Related_APIApi.md#coreGetdiskusagedetailsGet) | **GET** /core/getdiskusagedetails | 
[**coreGetlanguagelistGet**](System_Related_APIApi.md#coreGetlanguagelistGet) | **GET** /core/getlanguagelist | 
[**coreGetsystemstatusGet**](System_Related_APIApi.md#coreGetsystemstatusGet) | **GET** /core/getsystemstatus | 


# **coreGetauthenticationinfoGet**
> \Swagger\Client\Model\GetAuthenticationInfoResponse[] coreGetauthenticationinfoGet()



Returns whether the system has been authenticated or not

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\System_Related_APIApi();

try {
    $result = $api_instance->coreGetauthenticationinfoGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling System_Related_APIApi->coreGetauthenticationinfoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GetAuthenticationInfoResponse[]**](../Model/GetAuthenticationInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGetdiskusagedetailsGet**
> \Swagger\Client\Model\GetDiskUsageDetailsResponse[] coreGetdiskusagedetailsGet($username, $level)



Returns storage usage details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\System_Related_APIApi();
$username = "username_example"; // string | Profile Name
$level = "level_example"; // string | 0 - gives only details,1 - gives only space usage summary,2 - gives space usage summary + details

try {
    $result = $api_instance->coreGetdiskusagedetailsGet($username, $level);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling System_Related_APIApi->coreGetdiskusagedetailsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| Profile Name |
 **level** | **string**| 0 - gives only details,1 - gives only space usage summary,2 - gives space usage summary + details |

### Return type

[**\Swagger\Client\Model\GetDiskUsageDetailsResponse[]**](../Model/GetDiskUsageDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGetlanguagelistGet**
> \Swagger\Client\Model\GetlanguagelistResponse[] coreGetlanguagelistGet()



Get the list of Languages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\System_Related_APIApi();

try {
    $result = $api_instance->coreGetlanguagelistGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling System_Related_APIApi->coreGetlanguagelistGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GetlanguagelistResponse[]**](../Model/GetlanguagelistResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGetsystemstatusGet**
> \Swagger\Client\Model\GetSystemStatusResponse[] coreGetsystemstatusGet()



Will return full detail about the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\System_Related_APIApi();

try {
    $result = $api_instance->coreGetsystemstatusGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling System_Related_APIApi->coreGetsystemstatusGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GetSystemStatusResponse[]**](../Model/GetSystemStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

