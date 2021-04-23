# Swagger\Client\NotificationApi

All URIs are relative to *https://swaggerfc.getfilecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acktoasts**](NotificationApi.md#acktoasts) | **GET** /core/acktoasts | Notification_Related_API - acktoasts is used to acknowledge the user alert notification
[**addnotificationfilter**](NotificationApi.md#addnotificationfilter) | **POST** /core/addnotificationfilter | Notification_Related_API - addnotificationfilter is used to add a notification filter to selected path by the user
[**deletetoasts**](NotificationApi.md#deletetoasts) | **GET** /core/deletetoasts | Notification_Related_API - deletetoasts is used to delete a notification regarding changed made to a file in a particular path
[**getnotificationstream**](NotificationApi.md#getnotificationstream) | **POST** /core/getnotificationstream | Notification_Related_API - getnotificationstream is used to get the list of notifications regarding changes made to a file by a user
[**gettoasts**](NotificationApi.md#gettoasts) | **GET** /core/gettoasts | Notification_Related_API - gettoasts is used to get the list of toast notifications
[**isnotificationfilterset**](NotificationApi.md#isnotificationfilterset) | **POST** /core/isnotificationfilterset | Notification_Related_API - isnotificationfilterset is used to check if notification filter is set for a particular path
[**removenotificationfilter**](NotificationApi.md#removenotificationfilter) | **POST** /core/removenotificationfilter | Notification_Related_API - removenotificationfilter is used to remove notification filter which is set for a particular path


# **acktoasts**
> \Swagger\Client\Model\Commands acktoasts($acktoastids)

Notification_Related_API - acktoasts is used to acknowledge the user alert notification

USed to acknowledge the user alert notifications such as when user makes changes to a file.

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
    $result = $apiInstance->acktoasts($acktoastids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->acktoasts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **acktoastids** | **string**| Specify the toast id |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addnotificationfilter**
> \Swagger\Client\Model\Commands addnotificationfilter($path)

Notification_Related_API - addnotificationfilter is used to add a notification filter to selected path by the user

USer can add a notification filter to a shared file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Path name which needs notification filter to be added

try {
    $result = $apiInstance->addnotificationfilter($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->addnotificationfilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path name which needs notification filter to be added |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletetoasts**
> \Swagger\Client\Model\Commands deletetoasts($toastrid, $clearallforuser)

Notification_Related_API - deletetoasts is used to delete a notification regarding changed made to a file in a particular path

User can delete a notification alert received regarding a change made to a file by a user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$toastrid = "toastrid_example"; // string | Specify the toast id to be deleted
$clearallforuser = "clearallforuser_example"; // string | (optional) Specify the username (Incase you want to clear all the user alerts for a single user)

try {
    $result = $apiInstance->deletetoasts($toastrid, $clearallforuser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->deletetoasts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **toastrid** | **string**| Specify the toast id to be deleted |
 **clearallforuser** | **string**| (optional) Specify the username (Incase you want to clear all the user alerts for a single user) |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getnotificationstream**
> \Swagger\Client\Model\Notificationstreams getnotificationstream()

Notification_Related_API - getnotificationstream is used to get the list of notifications regarding changes made to a file by a user

USer can get the list of notifications in the system to see the changes made to a file.

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
    $result = $apiInstance->getnotificationstream();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->getnotificationstream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Notificationstreams**](../Model/Notificationstreams.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gettoasts**
> \Swagger\Client\Model\Toasts gettoasts()

Notification_Related_API - gettoasts is used to get the list of toast notifications

USed to get the list of toast Notifications

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
    $result = $apiInstance->gettoasts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->gettoasts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Toasts**](../Model/Toasts.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **isnotificationfilterset**
> \Swagger\Client\Model\Commands isnotificationfilterset($path)

Notification_Related_API - isnotificationfilterset is used to check if notification filter is set for a particular path

USer can check if notification filter is set or not for a shared file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Path name which needs notification filter to be set

try {
    $result = $apiInstance->isnotificationfilterset($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->isnotificationfilterset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path name which needs notification filter to be set |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removenotificationfilter**
> \Swagger\Client\Model\Commands removenotificationfilter($path)

Notification_Related_API - removenotificationfilter is used to remove notification filter which is set for a particular path

USer can remove the notification filter which is set for a shared file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Path name which requires notification filter to be removed

try {
    $result = $apiInstance->removenotificationfilter($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->removenotificationfilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path name which requires notification filter to be removed |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

