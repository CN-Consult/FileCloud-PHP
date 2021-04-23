# Swagger\Client\ImageApi

All URIs are relative to *https://swaggerfc.getfilecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getfsslideimage**](ImageApi.md#getfsslideimage) | **POST** /core/getfsslideimage | Image_Related_API - getfsslideimage is used to view the images in the form of slide show.
[**getfsthumbimage**](ImageApi.md#getfsthumbimage) | **GET** /core/getfsthumbimage | Image_Related_API - getfsthumbimage
[**rotatefsimage**](ImageApi.md#rotatefsimage) | **GET** /core/rotatefsimage | Image_Related_API - rotatefsimage is used to rotate the image in FC system


# **getfsslideimage**
> string getfsslideimage($width, $height, $name)

Image_Related_API - getfsslideimage is used to view the images in the form of slide show.

User can view a single image or multiple images in the form of slideshow in the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$width = 8.14; // float | Width of the image to open
$height = 8.14; // float | Height of the image to open
$name = "name_example"; // string | Name of the image file, eg /Path/Image file name.

try {
    $result = $apiInstance->getfsslideimage($width, $height, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->getfsslideimage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **width** | **float**| Width of the image to open |
 **height** | **float**| Height of the image to open |
 **name** | **string**| Name of the image file, eg /Path/Image file name. | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getfsthumbimage**
> string getfsthumbimage($width, $height, $name, $id)

Image_Related_API - getfsthumbimage

User can view image in the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$width = 8.14; // float | Width of the image to open
$height = 8.14; // float | Height of the image to open
$name = "name_example"; // string | FileCloud specific location of the file
$id = "id_example"; // string | id of the file

try {
    $result = $apiInstance->getfsthumbimage($width, $height, $name, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->getfsthumbimage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **width** | **float**| Width of the image to open |
 **height** | **float**| Height of the image to open |
 **name** | **string**| FileCloud specific location of the file | [optional]
 **id** | **string**| id of the file | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rotatefsimage**
> \Swagger\Client\Model\Commands rotatefsimage($name, $angle)

Image_Related_API - rotatefsimage is used to rotate the image in FC system

User can rotate the image either clock-wise or anti clock-wise  in the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Name of the image file to be rotated, eg /Path/Image file name.
$angle = 8.14; // float | Angle od rotation is either 90 or -90

try {
    $result = $apiInstance->rotatefsimage($name, $angle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->rotatefsimage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the image file to be rotated, eg /Path/Image file name. |
 **angle** | **float**| Angle od rotation is either 90 or -90 |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

