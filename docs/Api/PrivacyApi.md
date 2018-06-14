# Swagger\Client\PrivacyApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAnonymousUserConsent**](PrivacyApi.md#getAnonymousUserConsent) | **GET** /core/getanonymoususerconsent | 
[**getUserConsent**](PrivacyApi.md#getUserConsent) | **GET** /core/getuserconsent | 
[**privacyConsentAccept**](PrivacyApi.md#privacyConsentAccept) | **GET** /core/privacyconsentaccept | 


# **getAnonymousUserConsent**
> string getAnonymousUserConsent()



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
    $result = $apiInstance->getAnonymousUserConsent();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivacyApi->getAnonymousUserConsent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserConsent**
> string getUserConsent()



API that displays the privacy information for the user in the user UI in order to get acknowledgement.

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
    $result = $apiInstance->getUserConsent();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivacyApi->getUserConsent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **privacyConsentAccept**
> string privacyConsentAccept()



API that updates the privacy consent for the user.

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
    $result = $apiInstance->privacyConsentAccept();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivacyApi->privacyConsentAccept: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

