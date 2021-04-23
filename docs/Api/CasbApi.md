# Swagger\Client\CasbApi

All URIs are relative to *https://swaggerfc.getfilecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**delete**](CasbApi.md#delete) | **POST** /app/casb/deletefile | Delete_Related_API - This api call is used to delete a file
[**deleteshare**](CasbApi.md#deleteshare) | **POST** /app/casb/deleteshare | Share_Related_API - This api call is used to delete an exsisting share
[**deregister**](CasbApi.md#deregister) | **POST** /app/casb/deregister | Register_Related_API - This api call is used to cancel/deregister with casb
[**getuserinformation**](CasbApi.md#getuserinformation) | **POST** /app/casb/getuserinformation | Share_Related_API - This api call is used get information about a user
[**register**](CasbApi.md#register) | **POST** /app/casb/register | Register_Related_API - This api call is used to regsiter with casb
[**register_0**](CasbApi.md#register_0) | **POST** /app/casb/getwebhook | Webhook_Related_API - This api call is used to check your connection status to webhook
[**register_1**](CasbApi.md#register_1) | **POST** /app/casb/downloadfile | Download_Related_API - This api call is used to download a file from a given path
[**removegroupfromshare**](CasbApi.md#removegroupfromshare) | **POST** /app/casb/removegroupfromshare | Share_Related_API - This api call is used to remove a group from share
[**removeuserfromshare**](CasbApi.md#removeuserfromshare) | **POST** /app/casb/removeuserfromshare | Share_Related_API - This api call is used to remove a user from share
[**shareinformation**](CasbApi.md#shareinformation) | **POST** /app/casb/getshareinformation | Share_Related_API - This api call is used to get share information about a file
[**upload**](CasbApi.md#upload) | **POST** /app/casb/upload | Upload_Related_API - This api call is used to upload file to a target path


# **delete**
> string delete($filepath)

Delete_Related_API - This api call is used to delete a file

This API allows users to delete a file using casb (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CasbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filepath = "filepath_example"; // string | the full path to the file to be deleted

try {
    $result = $apiInstance->delete($filepath);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CasbApi->delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filepath** | **string**| the full path to the file to be deleted |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/JSON

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteshare**
> string deleteshare($shareid)

Share_Related_API - This api call is used to delete an exsisting share

This API allows you to delete an exsisting share (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CasbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shareid = "shareid_example"; // string | id of the share from which needs to be deleted

try {
    $result = $apiInstance->deleteshare($shareid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CasbApi->deleteshare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shareid** | **string**| id of the share from which needs to be deleted |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/JSON

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deregister**
> string deregister()

Register_Related_API - This api call is used to cancel/deregister with casb

This API allows user to remove the registered webhook (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CasbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->deregister();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CasbApi->deregister: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/JSON

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getuserinformation**
> string getuserinformation($user_id)

Share_Related_API - This api call is used get information about a user

This API allows you to get information about a user (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CasbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = "user_id_example"; // string | id of the user who's infomation needs to be retrived

try {
    $result = $apiInstance->getuserinformation($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CasbApi->getuserinformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| id of the user who&#39;s infomation needs to be retrived |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/JSON

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **register**
> string register($url)

Register_Related_API - This api call is used to regsiter with casb

This API allows user to register an external webhook url to wich casb will post CASB relevant event information.(HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CasbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$url = "url_example"; // string | This paramenter allows to provide the server URL

try {
    $result = $apiInstance->register($url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CasbApi->register: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **url** | **string**| This paramenter allows to provide the server URL |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/JSON

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **register_0**
> string register_0()

Webhook_Related_API - This api call is used to check your connection status to webhook

This API allows user to retrieve the webhook url registered to casb URL (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CasbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->register_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CasbApi->register_0: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/JSON

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **register_1**
> string register_1($filepath)

Download_Related_API - This api call is used to download a file from a given path

This API allows users to download files using casb (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CasbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filepath = "filepath_example"; // string | the full path to the file

try {
    $result = $apiInstance->register_1($filepath);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CasbApi->register_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filepath** | **string**| the full path to the file |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/JSON

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removegroupfromshare**
> string removegroupfromshare($shareid, $group_id)

Share_Related_API - This api call is used to remove a group from share

This API allows you to remove a group from a share (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CasbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shareid = "shareid_example"; // string | id of the share from which the group needs to be removed
$group_id = "group_id_example"; // string | id of the group to be removed

try {
    $result = $apiInstance->removegroupfromshare($shareid, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CasbApi->removegroupfromshare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shareid** | **string**| id of the share from which the group needs to be removed |
 **group_id** | **string**| id of the group to be removed |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/JSON

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeuserfromshare**
> string removeuserfromshare($shareid, $user_id)

Share_Related_API - This api call is used to remove a user from share

This API allows you to remove a user from share (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CasbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shareid = "shareid_example"; // string | id of the share from which the user needs to be removed
$user_id = "user_id_example"; // string | id of the user who is to be removed

try {
    $result = $apiInstance->removeuserfromshare($shareid, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CasbApi->removeuserfromshare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shareid** | **string**| id of the share from which the user needs to be removed |
 **user_id** | **string**| id of the user who is to be removed |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/JSON

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shareinformation**
> string shareinformation($file_id)

Share_Related_API - This api call is used to get share information about a file

This API allows to get share information about a file (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CasbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = "file_id_example"; // string | the full path to the file to be deleted

try {
    $result = $apiInstance->shareinformation($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CasbApi->shareinformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | **string**| the full path to the file to be deleted |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/JSON

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **upload**
> string upload($path)

Upload_Related_API - This api call is used to upload file to a target path

This API allows users to upload a file using casb (HTTP POST). For this api you need to pass the file to be uploaded as form(please see the example)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CasbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | the full path to the file

try {
    $result = $apiInstance->upload($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CasbApi->upload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| the full path to the file |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/JSON

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

