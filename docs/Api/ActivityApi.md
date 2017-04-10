# Swagger\Client\ActivityApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getActivityStream**](ActivityApi.md#getActivityStream) | **GET** /core/getactivitystream | 
[**showHideActivity**](ActivityApi.md#showHideActivity) | **POST** /core/showhideactivity | 


# **getActivityStream**
> string getActivityStream($parent)



Get all the activity of the file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ActivityApi();
$parent = "parent_example"; // string | Specify the path for which you want to get the activity list

try {
    $result = $api_instance->getActivityStream($parent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getActivityStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent** | **string**| Specify the path for which you want to get the activity list |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showHideActivity**
> string showHideActivity($collapse)



Hide Activity panel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ActivityApi();
$collapse = "collapse_example"; // string | Set as 1 to hide activity panel

try {
    $result = $api_instance->showHideActivity($collapse);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->showHideActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collapse** | **string**| Set as 1 to hide activity panel |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

