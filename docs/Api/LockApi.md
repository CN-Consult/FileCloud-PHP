# Swagger\Client\LockApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllLocks**](LockApi.md#getAllLocks) | **GET** /core/getalllocks | 
[**getFileLockInfo**](LockApi.md#getFileLockInfo) | **GET** /core/getfilelockinfo | 
[**lock**](LockApi.md#lock) | **POST** /core/lock | 
[**unlock**](LockApi.md#unlock) | **POST** /core/unlock | 


# **getAllLocks**
> string getAllLocks($userid)



User can get all the locked file/folder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LockApi();
$userid = "userid_example"; // string | Specify the user-name.

try {
    $result = $api_instance->getAllLocks($userid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LockApi->getAllLocks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userid** | **string**| Specify the user-name. |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileLockInfo**
> string getFileLockInfo($path)



Get lock details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LockApi();
$path = "path_example"; // string | Specify the path you want to unlock

try {
    $result = $api_instance->getFileLockInfo($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LockApi->getFileLockInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Specify the path you want to unlock |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lock**
> string lock($path, $expiration, $readlock)



User can lock a file/folder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LockApi();
$path = "path_example"; // string | Specify the path you want to lock
$expiration = "expiration_example"; // string | (Optional) Set an expiration date for locked file/folder
$readlock = "readlock_example"; // string | (Optional) Set if you want to restrict download of the locked file/folder.

try {
    $result = $api_instance->lock($path, $expiration, $readlock);
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
 **expiration** | **string**| (Optional) Set an expiration date for locked file/folder | [optional]
 **readlock** | **string**| (Optional) Set if you want to restrict download of the locked file/folder. | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unlock**
> string unlock($path)



User can unlock a file/folder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LockApi();
$path = "path_example"; // string | Specify the path you want to unlock

try {
    $result = $api_instance->unlock($path);
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

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

