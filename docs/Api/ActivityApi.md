# Swagger\Client\ActivityApi

All URIs are relative to *https://swaggerfc.getfilecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getactivitystream**](ActivityApi.md#getactivitystream) | **POST** /core/getactivitystream | Activity_Related_API - getactivitystream gets all the activities of the file/folder
[**getauditgeoipdata**](ActivityApi.md#getauditgeoipdata) | **POST** /core/getauditgeoipdata | Activity_Related_API - getauditgeoipdata displays the geo-location of a request made
[**showhideactivity**](ActivityApi.md#showhideactivity) | **GET** /core/showhideactivity | Activity_Related_API - showhideactivity is used to hide the activity panel from user portal


# **getactivitystream**
> \Swagger\Client\Model\Activities getactivitystream($parent)

Activity_Related_API - getactivitystream gets all the activities of the file/folder

Users can track the actions which are performed on a file or folder, which are displayed in the User Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$parent = "parent_example"; // string | Specify the path for which you want to get the activity list

try {
    $result = $apiInstance->getactivitystream($parent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getactivitystream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent** | **string**| Specify the path for which you want to get the activity list |

### Return type

[**\Swagger\Client\Model\Activities**](../Model/Activities.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getauditgeoipdata**
> \Swagger\Client\Model\Results getauditgeoipdata($op, $ipaddress)

Activity_Related_API - getauditgeoipdata displays the geo-location of a request made

USer will be able to see the geo-location and ip information about the activities.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$op = "op_example"; // string | Specify the operation name
$ipaddress = "ipaddress_example"; // string | Specify the ipaddress of the request made

try {
    $result = $apiInstance->getauditgeoipdata($op, $ipaddress);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getauditgeoipdata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **op** | **string**| Specify the operation name |
 **ipaddress** | **string**| Specify the ipaddress of the request made |

### Return type

[**\Swagger\Client\Model\Results**](../Model/Results.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showhideactivity**
> \Swagger\Client\Model\Commands showhideactivity($collapse)

Activity_Related_API - showhideactivity is used to hide the activity panel from user portal

Users will not be able to see the Activity panel if the activity column is disabled or hidden.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collapse = "collapse_example"; // string | Set as 1 to hide activity panel

try {
    $result = $apiInstance->showhideactivity($collapse);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->showhideactivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collapse** | **string**| Set as 1 to hide activity panel |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

