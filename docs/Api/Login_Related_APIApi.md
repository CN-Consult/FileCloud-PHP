# Swagger\Client\Login_Related_APIApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**core2faloginPost**](Login_Related_APIApi.md#core2faloginPost) | **POST** /core/2falogin | 
[**coreGet2fagasecretGet**](Login_Related_APIApi.md#coreGet2fagasecretGet) | **GET** /core/get2fagasecret | 
[**coreGet2fagasecretqrcodeGet**](Login_Related_APIApi.md#coreGet2fagasecretqrcodeGet) | **GET** /core/get2fagasecretqrcode | 
[**coreLocksessionPost**](Login_Related_APIApi.md#coreLocksessionPost) | **POST** /core/locksession | 
[**coreResend2facodePost**](Login_Related_APIApi.md#coreResend2facodePost) | **POST** /core/resend2facode | 
[**coreResetpasswordPost**](Login_Related_APIApi.md#coreResetpasswordPost) | **POST** /core/resetpassword | 
[**coreVerifyemailPost**](Login_Related_APIApi.md#coreVerifyemailPost) | **POST** /core/verifyemail | 


# **core2faloginPost**
> \Swagger\Client\Model\Model2faloginResponse[] core2faloginPost($userid, $code, $token)



User has to enter a code that has been sent to the email id configured with the account , to successfully login.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Login_Related_APIApi();
$userid = "userid_example"; // string | Users login name
$code = "code_example"; // string | Enter the code you have recieved in your email
$token = "token_example"; // string | Enter the token you had recieved in message field while performing loginguest api call

try {
    $result = $api_instance->core2faloginPost($userid, $code, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Login_Related_APIApi->core2faloginPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userid** | **string**| Users login name |
 **code** | **string**| Enter the code you have recieved in your email |
 **token** | **string**| Enter the token you had recieved in message field while performing loginguest api call |

### Return type

[**\Swagger\Client\Model\Model2faloginResponse[]**](../Model/Model2faloginResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGet2fagasecretGet**
> \Swagger\Client\Model\Get2fagasecretResponse[] coreGet2fagasecretGet($userid, $token)



Get 2FA secret code to login using Google Authenticator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Login_Related_APIApi();
$userid = "userid_example"; // string | Specify the user name
$token = "token_example"; // string | Enter the token you had recieved in message field while performing loginguest api call

try {
    $result = $api_instance->coreGet2fagasecretGet($userid, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Login_Related_APIApi->coreGet2fagasecretGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userid** | **string**| Specify the user name |
 **token** | **string**| Enter the token you had recieved in message field while performing loginguest api call |

### Return type

[**\Swagger\Client\Model\Get2fagasecretResponse[]**](../Model/Get2fagasecretResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGet2fagasecretqrcodeGet**
> coreGet2fagasecretqrcodeGet($userid, $token)



Get 2FA secret QR code to login using Google Authenticator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Login_Related_APIApi();
$userid = "userid_example"; // string | Specify the user name
$token = "token_example"; // string | Enter the token you had recieved in message field while performing loginguest api call

try {
    $api_instance->coreGet2fagasecretqrcodeGet($userid, $token);
} catch (Exception $e) {
    echo 'Exception when calling Login_Related_APIApi->coreGet2fagasecretqrcodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userid** | **string**| Specify the user name |
 **token** | **string**| Enter the token you had recieved in message field while performing loginguest api call |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreLocksessionPost**
> \Swagger\Client\Model\LocksessionResponse[] coreLocksessionPost()



User Logout api call to logout of filecloud system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Login_Related_APIApi();

try {
    $result = $api_instance->coreLocksessionPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Login_Related_APIApi->coreLocksessionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\LocksessionResponse[]**](../Model/LocksessionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreResend2facodePost**
> \Swagger\Client\Model\Resend2facodeResponse[] coreResend2facodePost($userid, $token)



Resend 2facode to get a new code to login via 2falogin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Login_Related_APIApi();
$userid = "userid_example"; // string | Users login name
$token = "token_example"; // string | Enter the token you had recieved in message field while performing loginguest api call

try {
    $result = $api_instance->coreResend2facodePost($userid, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Login_Related_APIApi->coreResend2facodePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userid** | **string**| Users login name |
 **token** | **string**| Enter the token you had recieved in message field while performing loginguest api call |

### Return type

[**\Swagger\Client\Model\Resend2facodeResponse[]**](../Model/Resend2facodeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreResetpasswordPost**
> \Swagger\Client\Model\ResetpasswordResponse[] coreResetpasswordPost($profile)



User can reset password of thier account, when they have forgotten the password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Login_Related_APIApi();
$profile = "profile_example"; // string | Profile name

try {
    $result = $api_instance->coreResetpasswordPost($profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Login_Related_APIApi->coreResetpasswordPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile** | **string**| Profile name |

### Return type

[**\Swagger\Client\Model\ResetpasswordResponse[]**](../Model/ResetpasswordResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreVerifyemailPost**
> \Swagger\Client\Model\VerifyemailResponse[] coreVerifyemailPost($u, $tag)



Verify user email id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Login_Related_APIApi();
$u = "u_example"; // string | User email id
$tag = "tag_example"; // string | Specify Verifytag

try {
    $result = $api_instance->coreVerifyemailPost($u, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Login_Related_APIApi->coreVerifyemailPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **u** | **string**| User email id |
 **tag** | **string**| Specify Verifytag |

### Return type

[**\Swagger\Client\Model\VerifyemailResponse[]**](../Model/VerifyemailResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

