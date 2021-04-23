# Swagger\Client\LockApi

All URIs are relative to *https://swaggerfc.getfilecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getalllocks**](LockApi.md#getalllocks) | **POST** /core/getalllocks | Lock_Related_API - getalllocks is used to get all the files and folders which are locked in the system
[**getfilelockinfo**](LockApi.md#getfilelockinfo) | **GET** /core/getfilelockinfo | Lock_Related_API - getfilelockinfo is used to get the information about locked files
[**lock**](LockApi.md#lock) | **POST** /core/lock | Lock_Related_API - lock is used to lock a file or folder
[**unlock**](LockApi.md#unlock) | **POST** /core/unlock | Lock_Related_API - unlock is used to unlock the already locked file/folder


# **getalllocks**
> \Swagger\Client\Model\Locks getalllocks()

Lock_Related_API - getalllocks is used to get all the files and folders which are locked in the system

User can get all the locked file/folders in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getalllocks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LockApi->getalllocks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Locks**](../Model/Locks.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getfilelockinfo**
> \Swagger\Client\Model\Filelockinfos getfilelockinfo($path)

Lock_Related_API - getfilelockinfo is used to get the information about locked files

Gets the details about locked files if user specifies the path

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Specify the path you want to get information about locks

try {
    $result = $apiInstance->getfilelockinfo($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LockApi->getfilelockinfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Specify the path you want to get information about locks |

### Return type

[**\Swagger\Client\Model\Filelockinfos**](../Model/Filelockinfos.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lock**
> \Swagger\Client\Model\Commands lock($path, $expiration, $readlock)

Lock_Related_API - lock is used to lock a file or folder

User can lock a file/folder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Specify the path you want to lock
$expiration = "expiration_example"; // string | (Optional) Set an expiration date for locked file/folder
$readlock = "readlock_example"; // string | (Optional) Set if you want to restrict download of the locked file/folder.

try {
    $result = $apiInstance->lock($path, $expiration, $readlock);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LockApi->lock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Specify the path you want to lock |
 **expiration** | **string**| (Optional) Set an expiration date for locked file/folder |
 **readlock** | **string**| (Optional) Set if you want to restrict download of the locked file/folder. |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unlock**
> \Swagger\Client\Model\Commands unlock($path)

Lock_Related_API - unlock is used to unlock the already locked file/folder

User can unlock a file/folder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Specify the path you want to unlock

try {
    $result = $apiInstance->unlock($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LockApi->unlock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Specify the path you want to unlock |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

