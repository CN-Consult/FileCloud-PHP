# Swagger\Client\VersioningApi

All URIs are relative to *https://swaggerfc.getfilecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteallversions**](VersioningApi.md#deleteallversions) | **POST** /core/deleteallversions | Versioning_Related_API - deleteallversions is used to delete all the older versions of a file which are present on the site
[**deleteversion**](VersioningApi.md#deleteversion) | **POST** /core/deleteversion | Versioning_Related_API - deleteversion
[**downloadversionedfile**](VersioningApi.md#downloadversionedfile) | **POST** /core/downloadversionedfile | Versioning_Related_API - downloadversionedfile is used to download a file which was uploaded previously with changes to the system
[**getversions**](VersioningApi.md#getversions) | **POST** /core/getversions | Versioning_Related_API - getversions is used to get all the previous versio of files which are stored in the system


# **deleteallversions**
> \Swagger\Client\Model\Commands deleteallversions()

Versioning_Related_API - deleteallversions is used to delete all the older versions of a file which are present on the site

User can delete all the previous versions of all files in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VersioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->deleteallversions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VersioningApi->deleteallversions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteversion**
> \Swagger\Client\Model\Commands deleteversion($filepath, $filename, $fileid)

Versioning_Related_API - deleteversion

User can delete the previous version of a file in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VersioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filepath = "filepath_example"; // string | Specify the path where the file resides
$filename = "filename_example"; // string | File name
$fileid = "fileid_example"; // string | File Id number

try {
    $result = $apiInstance->deleteversion($filepath, $filename, $fileid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VersioningApi->deleteversion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filepath** | **string**| Specify the path where the file resides |
 **filename** | **string**| File name |
 **fileid** | **string**| File Id number |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadversionedfile**
> string downloadversionedfile($filepath, $filename, $fileid)

Versioning_Related_API - downloadversionedfile is used to download a file which was uploaded previously with changes to the system

USer can download the previous versioned file in FileCould System from a specific path (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VersioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filepath = "filepath_example"; // string | Specify the path where the file resides
$filename = "filename_example"; // string | File name
$fileid = "fileid_example"; // string | File Id number

try {
    $result = $apiInstance->downloadversionedfile($filepath, $filename, $fileid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VersioningApi->downloadversionedfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filepath** | **string**| Specify the path where the file resides |
 **filename** | **string**| File name |
 **fileid** | **string**| File Id number |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getversions**
> \Swagger\Client\Model\Versions getversions($filepath, $filename)

Versioning_Related_API - getversions is used to get all the previous versio of files which are stored in the system

User can get all the available previous versions of a file which are present in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VersioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filepath = "filepath_example"; // string | Specify the path where the file resides
$filename = "filename_example"; // string | File name

try {
    $result = $apiInstance->getversions($filepath, $filename);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VersioningApi->getversions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filepath** | **string**| Specify the path where the file resides |
 **filename** | **string**| File name |

### Return type

[**\Swagger\Client\Model\Versions**](../Model/Versions.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

