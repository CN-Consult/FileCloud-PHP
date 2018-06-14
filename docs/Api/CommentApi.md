# Swagger\Client\CommentApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCommentForItem**](CommentApi.md#addCommentForItem) | **POST** /core/addcommentforitem | 
[**getCommentsForItem**](CommentApi.md#getCommentsForItem) | **GET** /core/getcommentsforitem | 
[**removeCommentForItem**](CommentApi.md#removeCommentForItem) | **POST** /core/removecommentforitem | 


# **addCommentForItem**
> string addCommentForItem($fullpath, $parent, $isfile, $text)



Add a comment to a file/folder

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
$text = "text_example"; // string | Add the comment you want to add

try {
    $result = $apiInstance->addCommentForItem($fullpath, $parent, $isfile, $text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentApi->addCommentForItem: ', $e->getMessage(), PHP_EOL;
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

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommentsForItem**
> string getCommentsForItem($fullpath)



Gets all the comment of a file/folder

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

try {
    $result = $apiInstance->getCommentsForItem($fullpath);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentApi->getCommentsForItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fullpath** | **string**| Specify the full path where you want to add comment |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeCommentForItem**
> string removeCommentForItem($fullpath, $id)



Remove the comment from the file/folder

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
    $result = $apiInstance->removeCommentForItem($fullpath, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentApi->removeCommentForItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fullpath** | **string**| Specify the full path where you want to remove the comment |
 **id** | **string**| Id number of the comment |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

