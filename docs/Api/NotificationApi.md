# Swagger\Client\NotificationApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ackToasts**](NotificationApi.md#ackToasts) | **GET** /core/acktoasts | 
[**addNotificationFilter**](NotificationApi.md#addNotificationFilter) | **POST** /core/addnotificationfilter | 
[**deleteToasts**](NotificationApi.md#deleteToasts) | **GET** /core/deletetoasts | 
[**getNotificationStream**](NotificationApi.md#getNotificationStream) | **POST** /core/getnotificationstream | 
[**getToasts**](NotificationApi.md#getToasts) | **GET** /core/gettoasts | 
[**isNotificationFilterSet**](NotificationApi.md#isNotificationFilterSet) | **POST** /core/isnotificationfilterset | 
[**removeNotificationFilter**](NotificationApi.md#removeNotificationFilter) | **POST** /core/removenotificationfilter | 


# **ackToasts**
> string ackToasts($acktoastids)



Acknowledge the user alert notifications

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$acktoastids = "acktoastids_example"; // string | Specify the toast id

try {
    $result = $apiInstance->ackToasts($acktoastids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->ackToasts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **acktoastids** | **string**| Specify the toast id |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addNotificationFilter**
> string addNotificationFilter($path)



Add notification filter to a shared file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Path name

try {
    $result = $apiInstance->addNotificationFilter($path);
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

# **deleteToasts**
> string deleteToasts($toastrid, $clearallforuser)



Delete a user alerts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$toastrid = "toastrid_example"; // string | Specify the toast id
$clearallforuser = "clearallforuser_example"; // string | (optional) Specify the username (Incase you want to clear all the user alerts for a single user)

try {
    $result = $apiInstance->deleteToasts($toastrid, $clearallforuser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->deleteToasts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **toastrid** | **string**| Specify the toast id |
 **clearallforuser** | **string**| (optional) Specify the username (Incase you want to clear all the user alerts for a single user) | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNotificationStream**
> string getNotificationStream()



Get the list of notifications

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getNotificationStream();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->getNotificationStream: ', $e->getMessage(), PHP_EOL;
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

# **getToasts**
> string getToasts()



Get the list of user alert Notifications

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getToasts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->getToasts: ', $e->getMessage(), PHP_EOL;
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

# **isNotificationFilterSet**
> string isNotificationFilterSet($path)



Is notification filter set or not of a shared file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Path name

try {
    $result = $apiInstance->isNotificationFilterSet($path);
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

$apiInstance = new Swagger\Client\Api\NotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Path name

try {
    $result = $apiInstance->removeNotificationFilter($path);
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

