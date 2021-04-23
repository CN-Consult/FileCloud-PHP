# Swagger\Client\WebeditApi

All URIs are relative to *https://swaggerfc.getfilecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getoourl**](WebeditApi.md#getoourl) | **GET** /core/getoourl | WebEdit_Related_API - getoourl is used to get the Microsoft Office Online URL which allows the users to edit documents in a browser
[**verifyoourl**](WebeditApi.md#verifyoourl) | **GET** /core/verifyoourl | WebEdit_Related_API - verifyoourl is used to verify the Microsoft Office Online URL which allows the users to edit documents in a browser


# **getoourl**
> \Swagger\Client\Model\Commands getoourl()

WebEdit_Related_API - getoourl is used to get the Microsoft Office Online URL which allows the users to edit documents in a browser

USed to Get Office Online URL which is used to edit documents in the browser

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebeditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getoourl();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebeditApi->getoourl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verifyoourl**
> \Swagger\Client\Model\Commands verifyoourl()

WebEdit_Related_API - verifyoourl is used to verify the Microsoft Office Online URL which allows the users to edit documents in a browser

USed to Verify Office Online URL which is used for editing documents in the browser

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebeditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->verifyoourl();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebeditApi->verifyoourl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

