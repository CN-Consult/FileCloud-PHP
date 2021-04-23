# Swagger\Client\SystemApi

All URIs are relative to *https://swaggerfc.getfilecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getauthenticationinfo**](SystemApi.md#getauthenticationinfo) | **GET** /core/getauthenticationinfo | System_Related_API - getauthenticationinfo is used get authentication details of the FileCloud server
[**getdiskusagedetails**](SystemApi.md#getdiskusagedetails) | **GET** /core/getdiskusagedetails | System_Related_API - getdiskusagedetails is used to get information about the storage space for a user
[**getlanguagelist**](SystemApi.md#getlanguagelist) | **GET** /core/getlanguagelist | System_Related_API - getlanguagelist is used to get the list of languages present in FC server.
[**getsystemstatus**](SystemApi.md#getsystemstatus) | **GET** /core/getsystemstatus | System_Related_API - getsystemstatus is used to get full details and status of the system


# **getauthenticationinfo**
> \Swagger\Client\Model\Authenticationinfo getauthenticationinfo()

System_Related_API - getauthenticationinfo is used get authentication details of the FileCloud server

It will return whether the system has been authenticated or not

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
    $result = $apiInstance->getauthenticationinfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->getauthenticationinfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Authenticationinfo**](../Model/Authenticationinfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getdiskusagedetails**
> \Swagger\Client\Model\Usage getdiskusagedetails($username, $level)

System_Related_API - getdiskusagedetails is used to get information about the storage space for a user

Returns storage usage details such as used and allocated space for a particular user

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
    $result = $apiInstance->getdiskusagedetails($username, $level);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->getdiskusagedetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| Profile Name |
 **level** | **string**| 0 - gives only details,1 - gives only space usage summary,2 - gives space usage summary + details |

### Return type

[**\Swagger\Client\Model\Usage**](../Model/Usage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getlanguagelist**
> \Swagger\Client\Model\Languages getlanguagelist()

System_Related_API - getlanguagelist is used to get the list of languages present in FC server.

Returns details about all the languages present in system

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
    $result = $apiInstance->getlanguagelist();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->getlanguagelist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Languages**](../Model/Languages.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getsystemstatus**
> \Swagger\Client\Model\Systemstatus getsystemstatus()

System_Related_API - getsystemstatus is used to get full details and status of the system

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
    $result = $apiInstance->getsystemstatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->getsystemstatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Systemstatus**](../Model/Systemstatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

