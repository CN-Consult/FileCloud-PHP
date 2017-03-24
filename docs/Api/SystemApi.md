# Swagger\Client\SystemApi

All URIs are relative to *https://filecloud.cn-consult.eu*

Method | HTTP request | Description
------------- | ------------- | -------------
[**coreGetauthenticationinfoGet**](SystemApi.md#coreGetauthenticationinfoGet) | **GET** /core/getauthenticationinfo | 
[**coreGetcustomheaderGet**](SystemApi.md#coreGetcustomheaderGet) | **GET** /core/getcustomheader | 
[**coreGetdiskusagedetailsGet**](SystemApi.md#coreGetdiskusagedetailsGet) | **GET** /core/getdiskusagedetails | 
[**coreGetprofilesettingsGet**](SystemApi.md#coreGetprofilesettingsGet) | **GET** /core/getprofilesettings | 
[**coreGetsystemstatusGet**](SystemApi.md#coreGetsystemstatusGet) | **GET** /core/getsystemstatus | 


# **coreGetauthenticationinfoGet**
> \Swagger\Client\Model\GetAuthenticationInfoResponse[] coreGetauthenticationinfoGet()



Returns whether the system has been authenticated or not

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SystemApi();

try {
    $result = $api_instance->coreGetauthenticationinfoGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->coreGetauthenticationinfoGet: ', $e->getMessage(), PHP_EOL;
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

# **coreGetcustomheaderGet**
> \Swagger\Client\Model\GetCustomHeaderResponse[] coreGetcustomheaderGet()



Returns custom header information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SystemApi();

try {
    $result = $api_instance->coreGetcustomheaderGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->coreGetcustomheaderGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GetCustomHeaderResponse[]**](../Model/GetCustomHeaderResponse.md)

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

$api_instance = new Swagger\Client\Api\SystemApi();
$username = "username_example"; // string | Profile Name
$level = "level_example"; // string | 0 - gives only details,1 - gives only space usage summary,2 - gives space usage summary + details

try {
    $result = $api_instance->coreGetdiskusagedetailsGet($username, $level);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->coreGetdiskusagedetailsGet: ', $e->getMessage(), PHP_EOL;
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

# **coreGetprofilesettingsGet**
> \Swagger\Client\Model\GetProfileSettingsResponse[] coreGetprofilesettingsGet()



Returns profile information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SystemApi();

try {
    $result = $api_instance->coreGetprofilesettingsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->coreGetprofilesettingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GetProfileSettingsResponse[]**](../Model/GetProfileSettingsResponse.md)

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

$api_instance = new Swagger\Client\Api\SystemApi();

try {
    $result = $api_instance->coreGetsystemstatusGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->coreGetsystemstatusGet: ', $e->getMessage(), PHP_EOL;
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

