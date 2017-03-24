# Swagger\Client\Comment_Related_APIApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**coreAddcommentforitemPost**](Comment_Related_APIApi.md#coreAddcommentforitemPost) | **POST** /core/addcommentforitem | 
[**coreGetcommentsforitemGet**](Comment_Related_APIApi.md#coreGetcommentsforitemGet) | **GET** /core/getcommentsforitem | 
[**coreRemovecommentforitemPost**](Comment_Related_APIApi.md#coreRemovecommentforitemPost) | **POST** /core/removecommentforitem | 


# **coreAddcommentforitemPost**
> \Swagger\Client\Model\AddcommentforitemResponse[] coreAddcommentforitemPost($fullpath, $parent, $isfile, $text)



Add a comment to a file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Comment_Related_APIApi();
$fullpath = "fullpath_example"; // string | Specify the full path where you want to add comment
$parent = "parent_example"; // string | Specify the parent name
$isfile = "isfile_example"; // string | Specify 0 if the path is a folder , 1 if the path is a file
$text = "text_example"; // string | Add the comment you want to add

try {
    $result = $api_instance->coreAddcommentforitemPost($fullpath, $parent, $isfile, $text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Comment_Related_APIApi->coreAddcommentforitemPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fullpath** | **string**| Specify the full path where you want to add comment |
 **parent** | **string**| Specify the parent name |
 **isfile** | **string**| Specify 0 if the path is a folder , 1 if the path is a file |
 **text** | **string**| Add the comment you want to add |

### Return type

[**\Swagger\Client\Model\AddcommentforitemResponse[]**](../Model/AddcommentforitemResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGetcommentsforitemGet**
> \Swagger\Client\Model\GetcommentsforitemResponse[] coreGetcommentsforitemGet($fullpath)



Gets all the comment of a file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Comment_Related_APIApi();
$fullpath = "fullpath_example"; // string | Specify the full path where you want to add comment

try {
    $result = $api_instance->coreGetcommentsforitemGet($fullpath);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Comment_Related_APIApi->coreGetcommentsforitemGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fullpath** | **string**| Specify the full path where you want to add comment |

### Return type

[**\Swagger\Client\Model\GetcommentsforitemResponse[]**](../Model/GetcommentsforitemResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreRemovecommentforitemPost**
> \Swagger\Client\Model\RemovecommentforitemResponse[] coreRemovecommentforitemPost($fullpath, $id)



Remove the comment from the file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Comment_Related_APIApi();
$fullpath = "fullpath_example"; // string | Specify the full path where you want to remove the comment
$id = "id_example"; // string | Id number of the comment

try {
    $result = $api_instance->coreRemovecommentforitemPost($fullpath, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Comment_Related_APIApi->coreRemovecommentforitemPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fullpath** | **string**| Specify the full path where you want to remove the comment |
 **id** | **string**| Id number of the comment |

### Return type

[**\Swagger\Client\Model\RemovecommentforitemResponse[]**](../Model/RemovecommentforitemResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

