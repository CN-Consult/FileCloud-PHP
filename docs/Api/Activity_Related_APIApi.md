# Swagger\Client\Activity_Related_APIApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**coreGetactivitystreamGet**](Activity_Related_APIApi.md#coreGetactivitystreamGet) | **GET** /core/getactivitystream | 
[**coreShowhideactivityPost**](Activity_Related_APIApi.md#coreShowhideactivityPost) | **POST** /core/showhideactivity | 


# **coreGetactivitystreamGet**
> \Swagger\Client\Model\GetactivitystreamResponse[] coreGetactivitystreamGet($parent)



Get all the activity of the file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Activity_Related_APIApi();
$parent = "parent_example"; // string | Specify the path for which you want to get the activity list

try {
    $result = $api_instance->coreGetactivitystreamGet($parent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Activity_Related_APIApi->coreGetactivitystreamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent** | **string**| Specify the path for which you want to get the activity list |

### Return type

[**\Swagger\Client\Model\GetactivitystreamResponse[]**](../Model/GetactivitystreamResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreShowhideactivityPost**
> \Swagger\Client\Model\ShowhideactivityResponse[] coreShowhideactivityPost($collapse)



Hide Activity panel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Activity_Related_APIApi();
$collapse = "collapse_example"; // string | Set as 1 to hide activity panel

try {
    $result = $api_instance->coreShowhideactivityPost($collapse);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Activity_Related_APIApi->coreShowhideactivityPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collapse** | **string**| Set as 1 to hide activity panel |

### Return type

[**\Swagger\Client\Model\ShowhideactivityResponse[]**](../Model/ShowhideactivityResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

