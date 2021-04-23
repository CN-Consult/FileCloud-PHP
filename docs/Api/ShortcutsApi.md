# Swagger\Client\ShortcutsApi

All URIs are relative to *https://swaggerfc.getfilecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addshortcut**](ShortcutsApi.md#addshortcut) | **POST** /core/addshortcut | Shortcut_Related_API - addshortcut is used to create a shortcut to access a path easily.
[**deleteshortcut**](ShortcutsApi.md#deleteshortcut) | **POST** /core/deleteshortcut | Shortcut_Related_API - deleteshortcut is used to delete the existing shortcut in the system
[**getshortcuts**](ShortcutsApi.md#getshortcuts) | **POST** /core/getshortcuts | Shortcut_Related_API - getshortcuts is used to get the list of all shortcuts


# **addshortcut**
> \Swagger\Client\Model\Commands addshortcut($scname, $scvalue, $sctype)

Shortcut_Related_API - addshortcut is used to create a shortcut to access a path easily.

User can add a Shortcut which creates a link for the user to access any path

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
    $result = $apiInstance->addshortcut($scname, $scvalue, $sctype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShortcutsApi->addshortcut: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteshortcut**
> \Swagger\Client\Model\Commands deleteshortcut($rid)

Shortcut_Related_API - deleteshortcut is used to delete the existing shortcut in the system

USer can delete the shortcut which was created for easy access to any path

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
    $result = $apiInstance->deleteshortcut($rid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShortcutsApi->deleteshortcut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rid** | **string**| Specify the id |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getshortcuts**
> \Swagger\Client\Model\Shortcuts getshortcuts($start, $limit)

Shortcut_Related_API - getshortcuts is used to get the list of all shortcuts

USer can get the list of all available shortcuts in the system

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
    $result = $apiInstance->getshortcuts($start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShortcutsApi->getshortcuts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **string**| Specify as 0 |
 **limit** | **string**| Specify as 10 |

### Return type

[**\Swagger\Client\Model\Shortcuts**](../Model/Shortcuts.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

