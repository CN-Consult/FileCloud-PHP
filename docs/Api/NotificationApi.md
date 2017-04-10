# Swagger\Client\NotificationApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addNotificationFilter**](NotificationApi.md#addNotificationFilter) | **POST** /core/addnotificationfilter | 
[**isNotificationFilterSet**](NotificationApi.md#isNotificationFilterSet) | **POST** /core/isnotificationfilterset | 
[**removeNotificationFilter**](NotificationApi.md#removeNotificationFilter) | **POST** /core/removenotificationfilter | 


# **addNotificationFilter**
> string addNotificationFilter($path)



Add notification filter to a shared file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\NotificationApi();
$path = "path_example"; // string | Path name

try {
    $result = $api_instance->addNotificationFilter($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->addNotificationFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path name |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **isNotificationFilterSet**
> string isNotificationFilterSet($path)



Is notification filter set or not of a shared file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\NotificationApi();
$path = "path_example"; // string | Path name

try {
    $result = $api_instance->isNotificationFilterSet($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->isNotificationFilterSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path name |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeNotificationFilter**
> string removeNotificationFilter($path)



Remove notification filter of a shared file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\NotificationApi();
$path = "path_example"; // string | Path name

try {
    $result = $api_instance->removeNotificationFilter($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->removeNotificationFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path name |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

