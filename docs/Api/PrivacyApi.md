# Swagger\Client\PrivacyApi

All URIs are relative to *https://swaggerfc.getfilecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getanonymoususerconsent**](PrivacyApi.md#getanonymoususerconsent) | **GET** /core/getanonymoususerconsent | Privacy_Related_API - getanonymoususerconsent is used such that that all anonymous users provide explicit consent to track personally identifiable information (PII).
[**getuserconsent**](PrivacyApi.md#getuserconsent) | **GET** /core/getuserconsent | Privacy_Related_API - getuserconsent is used such that that all users provide explicit consent to track personally identifiable information (PII).
[**privacyconsentaccept**](PrivacyApi.md#privacyconsentaccept) | **GET** /core/privacyconsentaccept | Privacy_Related_API - privacyconsentaccept is used to accept the privacy notice when user logs into the system if the setting is set


# **getanonymoususerconsent**
> \Swagger\Client\Model\Getuserconsent getanonymoususerconsent()

Privacy_Related_API - getanonymoususerconsent is used such that that all anonymous users provide explicit consent to track personally identifiable information (PII).

API that displays the privacy information for the anonymous user (when accessing public share) in the user UI in order to get acknowledgement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PrivacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getanonymoususerconsent();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivacyApi->getanonymoususerconsent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Getuserconsent**](../Model/Getuserconsent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getuserconsent**
> \Swagger\Client\Model\Getuserconsent getuserconsent()

Privacy_Related_API - getuserconsent is used such that that all users provide explicit consent to track personally identifiable information (PII).

API that displays the privacy information for the user in the user UI in order to get acknowledgement. This API will ask for consent from users while accessing, viewing or downloading files from FileCloud.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PrivacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getuserconsent();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivacyApi->getuserconsent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Getuserconsent**](../Model/Getuserconsent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **privacyconsentaccept**
> \Swagger\Client\Model\Commands privacyconsentaccept()

Privacy_Related_API - privacyconsentaccept is used to accept the privacy notice when user logs into the system if the setting is set

API that updates the privacy consent for the user when user accepts the privay notice when he logs into user portal if the setting is set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PrivacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->privacyconsentaccept();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivacyApi->privacyconsentaccept: ', $e->getMessage(), PHP_EOL;
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

