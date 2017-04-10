# Swagger\Client\VersioningApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAllVersions**](VersioningApi.md#deleteAllVersions) | **POST** /core/deleteallversions | 
[**deleteVersion**](VersioningApi.md#deleteVersion) | **POST** /core/deleteversion | 
[**downloadVersionedFile**](VersioningApi.md#downloadVersionedFile) | **POST** /core/downloadversionedfile | 
[**getVersions**](VersioningApi.md#getVersions) | **GET** /core/getversions | 


# **deleteAllVersions**
> string deleteAllVersions()



User can delete all the previous versions of all files in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VersioningApi();

try {
    $result = $api_instance->deleteAllVersions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VersioningApi->deleteAllVersions: ', $e->getMessage(), PHP_EOL;
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

# **deleteVersion**
> string deleteVersion($filepath, $filename, $fileid)



User can delete the previous version of a file in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VersioningApi();
$filepath = "filepath_example"; // string | Specify the path where the file resides
$filename = "filename_example"; // string | File name
$fileid = "fileid_example"; // string | File Id number

try {
    $result = $api_instance->deleteVersion($filepath, $filename, $fileid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VersioningApi->deleteVersion: ', $e->getMessage(), PHP_EOL;
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
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadVersionedFile**
> downloadVersionedFile($filepath, $filename, $fileid)



Download previous versioned file in FileCould System (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VersioningApi();
$filepath = "filepath_example"; // string | Path of the file where it resides and with the name of the file to be downloaded.
$filename = "filename_example"; // string | Name of the file to be downloaded
$fileid = "fileid_example"; // string | Id no of file

try {
    $api_instance->downloadVersionedFile($filepath, $filename, $fileid);
} catch (Exception $e) {
    echo 'Exception when calling VersioningApi->downloadVersionedFile: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVersions**
> string getVersions($filepath, $filename)



User can get previous versions of a file in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VersioningApi();
$filepath = "filepath_example"; // string | Specify the path where the file resides
$filename = "filename_example"; // string | File name

try {
    $result = $api_instance->getVersions($filepath, $filename);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VersioningApi->getVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filepath** | **string**| Specify the path where the file resides |
 **filename** | **string**| File name |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

