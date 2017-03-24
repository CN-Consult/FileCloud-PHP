# Swagger\Client\Image_Related_APIApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**coreGetfsslideimageGet**](Image_Related_APIApi.md#coreGetfsslideimageGet) | **GET** /core/getfsslideimage | 
[**coreRotatefsimageGet**](Image_Related_APIApi.md#coreRotatefsimageGet) | **GET** /core/rotatefsimage | 


# **coreGetfsslideimageGet**
> coreGetfsslideimageGet($name, $width, $height)



User can view image in the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Image_Related_APIApi();
$name = "name_example"; // string | Name of the image file, eg: /Path/Image file name.
$width = 3.4; // float | Width of the image to open
$height = 3.4; // float | Height of the image to open

try {
    $api_instance->coreGetfsslideimageGet($name, $width, $height);
} catch (Exception $e) {
    echo 'Exception when calling Image_Related_APIApi->coreGetfsslideimageGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the image file, eg: /Path/Image file name. |
 **width** | **float**| Width of the image to open |
 **height** | **float**| Height of the image to open |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreRotatefsimageGet**
> \Swagger\Client\Model\RotatefsimageResponse[] coreRotatefsimageGet($name, $angle)



User can rotate image in the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Image_Related_APIApi();
$name = "name_example"; // string | Name of the image file, eg: /Path/Image file name.
$angle = 3.4; // float | Angle od rotation is either 90 or -90

try {
    $result = $api_instance->coreRotatefsimageGet($name, $angle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Image_Related_APIApi->coreRotatefsimageGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the image file, eg: /Path/Image file name. |
 **angle** | **float**| Angle od rotation is either 90 or -90 |

### Return type

[**\Swagger\Client\Model\RotatefsimageResponse[]**](../Model/RotatefsimageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

