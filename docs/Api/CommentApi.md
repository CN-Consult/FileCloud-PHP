# Swagger\Client\CommentApi

All URIs are relative to *https://swaggerfc.getfilecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addcommentforitem**](CommentApi.md#addcommentforitem) | **POST** /core/addcommentforitem | Comment_Related_API - addcommentforitem lets user add comments for a file or folder
[**getcommentsforitem**](CommentApi.md#getcommentsforitem) | **POST** /core/getcommentsforitem | Comment_Related_API - getcommentsforitem lets user read comments for a file or folder
[**removecommentforitem**](CommentApi.md#removecommentforitem) | **POST** /core/removecommentforitem | Comment_Related_API - removecommentforitem lets user delete comments for a file or folder


# **addcommentforitem**
> \Swagger\Client\Model\Comments addcommentforitem($fullpath, $parent, $isfile, $text)

Comment_Related_API - addcommentforitem lets user add comments for a file or folder

User can add details about the status of a file or the purpose for a folder in the Comments section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fullpath = "fullpath_example"; // string | Specify the full path where you want to add comment
$parent = "parent_example"; // string | Specify the parent name
$isfile = "isfile_example"; // string | Specify 0 if the path is a folder , 1 if the path is a file
$text = "text_example"; // string | Add the comment you want to add for a file/folder

try {
    $result = $apiInstance->addcommentforitem($fullpath, $parent, $isfile, $text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentApi->addcommentforitem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fullpath** | **string**| Specify the full path where you want to add comment |
 **parent** | **string**| Specify the parent name |
 **isfile** | **string**| Specify 0 if the path is a folder , 1 if the path is a file |
 **text** | **string**| Add the comment you want to add for a file/folder |

### Return type

[**\Swagger\Client\Model\Comments**](../Model/Comments.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getcommentsforitem**
> \Swagger\Client\Model\Comments getcommentsforitem($fullpath)

Comment_Related_API - getcommentsforitem lets user read comments for a file or folder

User can read all comments about the status of a file or the purpose for a folder in the Comments section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fullpath = "fullpath_example"; // string | Specify the full path where you want to add

try {
    $result = $apiInstance->getcommentsforitem($fullpath);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentApi->getcommentsforitem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fullpath** | **string**| Specify the full path where you want to add |

### Return type

[**\Swagger\Client\Model\Comments**](../Model/Comments.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removecommentforitem**
> \Swagger\Client\Model\Commands removecommentforitem($fullpath, $id)

Comment_Related_API - removecommentforitem lets user delete comments for a file or folder

User can delete a single or all comments associated with the file or folder in the Comments section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fullpath = "fullpath_example"; // string | Specify the full path where you want to remove the comment
$id = "id_example"; // string | Id number of the comment

try {
    $result = $apiInstance->removecommentforitem($fullpath, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentApi->removecommentforitem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fullpath** | **string**| Specify the full path where you want to remove the comment |
 **id** | **string**| Id number of the comment |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

