# Swagger\Client\Versioning_Related_APIApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**coreDeleteallversionsPost**](Versioning_Related_APIApi.md#coreDeleteallversionsPost) | **POST** /core/deleteallversions | 
[**coreDeleteversionPost**](Versioning_Related_APIApi.md#coreDeleteversionPost) | **POST** /core/deleteversion | 
[**coreDownloadversionedfilePost**](Versioning_Related_APIApi.md#coreDownloadversionedfilePost) | **POST** /core/downloadversionedfile | 
[**coreGetversionsGet**](Versioning_Related_APIApi.md#coreGetversionsGet) | **GET** /core/getversions | 


# **coreDeleteallversionsPost**
> \Swagger\Client\Model\DeleteallversionsResponse[] coreDeleteallversionsPost()



User can delete all the previous versions of all files in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Versioning_Related_APIApi();

try {
    $result = $api_instance->coreDeleteallversionsPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Versioning_Related_APIApi->coreDeleteallversionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DeleteallversionsResponse[]**](../Model/DeleteallversionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreDeleteversionPost**
> \Swagger\Client\Model\DeleteversionResponse[] coreDeleteversionPost($filepath, $filename, $fileid)



User can delete the previous version of a file in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Versioning_Related_APIApi();
$filepath = "filepath_example"; // string | Specify the path where the file resides
$filename = "filename_example"; // string | File name
$fileid = "fileid_example"; // string | File Id number

try {
    $result = $api_instance->coreDeleteversionPost($filepath, $filename, $fileid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Versioning_Related_APIApi->coreDeleteversionPost: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\DeleteversionResponse[]**](../Model/DeleteversionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreDownloadversionedfilePost**
> coreDownloadversionedfilePost($filepath, $filename, $fileid)



Download previous versioned file in FileCould System (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Versioning_Related_APIApi();
$filepath = "filepath_example"; // string | Path of the file where it resides and with the name of the file to be downloaded.
$filename = "filename_example"; // string | Name of the file to be downloaded
$fileid = "fileid_example"; // string | Id no of file

try {
    $api_instance->coreDownloadversionedfilePost($filepath, $filename, $fileid);
} catch (Exception $e) {
    echo 'Exception when calling Versioning_Related_APIApi->coreDownloadversionedfilePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filepath** | **string**| Path of the file where it resides and with the name of the file to be downloaded. |
 **filename** | **string**| Name of the file to be downloaded |
 **fileid** | **string**| Id no of file |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGetversionsGet**
> \Swagger\Client\Model\GetversionsResponse[] coreGetversionsGet($filepath, $filename)



User can get previous versions of a file in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Versioning_Related_APIApi();
$filepath = "filepath_example"; // string | Specify the path where the file resides
$filename = "filename_example"; // string | File name

try {
    $result = $api_instance->coreGetversionsGet($filepath, $filename);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Versioning_Related_APIApi->coreGetversionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filepath** | **string**| Specify the path where the file resides |
 **filename** | **string**| File name |

### Return type

[**\Swagger\Client\Model\GetversionsResponse[]**](../Model/GetversionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

