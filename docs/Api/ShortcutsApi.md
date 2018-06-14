# Swagger\Client\ShortcutsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addShortcut**](ShortcutsApi.md#addShortcut) | **GET** /core/addshortcut | 
[**deleteShortcut**](ShortcutsApi.md#deleteShortcut) | **GET** /core/deleteshortcut | 
[**getShortcuts**](ShortcutsApi.md#getShortcuts) | **GET** /core/getshortcuts | 


# **addShortcut**
> string addShortcut($scname, $scvalue, $sctype)



Add Shortcut

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShortcutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$scname = "scname_example"; // string | Specify the folder name you want to add in the shortcuts
$scvalue = "scvalue_example"; // string | Specify the path of the folder
$sctype = "sctype_example"; // string | Specify the type of shortcuts

try {
    $result = $apiInstance->addShortcut($scname, $scvalue, $sctype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShortcutsApi->addShortcut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scname** | **string**| Specify the folder name you want to add in the shortcuts |
 **scvalue** | **string**| Specify the path of the folder |
 **sctype** | **string**| Specify the type of shortcuts |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteShortcut**
> string deleteShortcut($rid)



Delete Shortcut

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShortcutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$rid = "rid_example"; // string | Specify the id

try {
    $result = $apiInstance->deleteShortcut($rid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShortcutsApi->deleteShortcut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rid** | **string**| Specify the id |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShortcuts**
> string getShortcuts($start, $limit)



Get list of Shortcuts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShortcutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start = "start_example"; // string | Specify as 0
$limit = "limit_example"; // string | Specify as 10

try {
    $result = $apiInstance->getShortcuts($start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShortcutsApi->getShortcuts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **string**| Specify as 0 |
 **limit** | **string**| Specify as 10 |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

