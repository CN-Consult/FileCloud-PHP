# Swagger\Client\Lock_APIApi

All URIs are relative to *https://filecloud.cn-consult.eu*

Method | HTTP request | Description
------------- | ------------- | -------------
[**coreGetalllocksGet**](Lock_APIApi.md#coreGetalllocksGet) | **GET** /core/getalllocks | 
[**coreLockPost**](Lock_APIApi.md#coreLockPost) | **POST** /core/lock | 
[**coreUnlockPost**](Lock_APIApi.md#coreUnlockPost) | **POST** /core/unlock | 


# **coreGetalllocksGet**
> \Swagger\Client\Model\GetalllocksResponse[] coreGetalllocksGet($userid)



User can get all the locked file/folder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Lock_APIApi();
$userid = "userid_example"; // string | Specify the user-name.

try {
    $result = $api_instance->coreGetalllocksGet($userid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Lock_APIApi->coreGetalllocksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userid** | **string**| Specify the user-name. |

### Return type

[**\Swagger\Client\Model\GetalllocksResponse[]**](../Model/GetalllocksResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreLockPost**
> \Swagger\Client\Model\LockResponse[] coreLockPost($path, $expiration, $readlock)



User can lock a file/folder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Lock_APIApi();
$path = "path_example"; // string | Specify the path you want to lock
$expiration = "expiration_example"; // string | (Optional) Set an expiration date for locked file/folder
$readlock = "readlock_example"; // string | (Optional) Set if you want to restrict download of the locked file/folder.

try {
    $result = $api_instance->coreLockPost($path, $expiration, $readlock);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Lock_APIApi->coreLockPost: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\LockResponse[]**](../Model/LockResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreUnlockPost**
> \Swagger\Client\Model\UnlockResponse[] coreUnlockPost($path)



User can unlock a file/folder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Lock_APIApi();
$path = "path_example"; // string | Specify the path you want to unlock

try {
    $result = $api_instance->coreUnlockPost($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Lock_APIApi->coreUnlockPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Specify the path you want to unlock |

### Return type

[**\Swagger\Client\Model\UnlockResponse[]**](../Model/UnlockResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

