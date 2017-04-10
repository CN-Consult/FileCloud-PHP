# Swagger\Client\LoginApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**2FaLogin**](LoginApi.md#2FaLogin) | **POST** /core/2falogin | 
[**get2FaGaSecret**](LoginApi.md#get2FaGaSecret) | **GET** /core/get2fagasecret | 
[**get2FaGaSecretQrCode**](LoginApi.md#get2FaGaSecretQrCode) | **GET** /core/get2fagasecretqrcode | 
[**lockSession**](LoginApi.md#lockSession) | **POST** /core/locksession | 
[**resend2FaCode**](LoginApi.md#resend2FaCode) | **POST** /core/resend2facode | 
[**resetPassword**](LoginApi.md#resetPassword) | **POST** /core/resetpassword | 
[**verifyEmail**](LoginApi.md#verifyEmail) | **POST** /core/verifyemail | 


# **2FaLogin**
> string 2FaLogin($userid, $code, $token)



User has to enter a code that has been sent to the email id configured with the account , to successfully login.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LoginApi();
$userid = "userid_example"; // string | Users login name
$code = "code_example"; // string | Enter the code you have recieved in your email
$token = "token_example"; // string | Enter the token you had recieved in message field while performing loginguest api call

try {
    $result = $api_instance->2FaLogin($userid, $code, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->2FaLogin: ', $e->getMessage(), PHP_EOL;
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

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get2FaGaSecret**
> string get2FaGaSecret($userid, $token)



Get 2FA secret code to login using Google Authenticator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LoginApi();
$userid = "userid_example"; // string | Specify the user name
$token = "token_example"; // string | Enter the token you had recieved in message field while performing loginguest api call

try {
    $result = $api_instance->get2FaGaSecret($userid, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->get2FaGaSecret: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userid** | **string**| Specify the user name |
 **token** | **string**| Enter the token you had recieved in message field while performing loginguest api call |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get2FaGaSecretQrCode**
> get2FaGaSecretQrCode($userid, $token)



Get 2FA secret QR code to login using Google Authenticator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LoginApi();
$userid = "userid_example"; // string | Specify the user name
$token = "token_example"; // string | Enter the token you had recieved in message field while performing loginguest api call

try {
    $api_instance->get2FaGaSecretQrCode($userid, $token);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->get2FaGaSecretQrCode: ', $e->getMessage(), PHP_EOL;
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

# **lockSession**
> string lockSession()



User Logout api call to logout of filecloud system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LoginApi();

try {
    $result = $api_instance->lockSession();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->lockSession: ', $e->getMessage(), PHP_EOL;
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

# **resend2FaCode**
> string resend2FaCode($userid, $token)



Resend 2facode to get a new code to login via 2falogin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LoginApi();
$userid = "userid_example"; // string | Users login name
$token = "token_example"; // string | Enter the token you had recieved in message field while performing loginguest api call

try {
    $result = $api_instance->resend2FaCode($userid, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->resend2FaCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userid** | **string**| Users login name |
 **token** | **string**| Enter the token you had recieved in message field while performing loginguest api call |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetPassword**
> string resetPassword($profile)



User can reset password of thier account, when they have forgotten the password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LoginApi();
$profile = "profile_example"; // string | Profile name

try {
    $result = $api_instance->resetPassword($profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->resetPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile** | **string**| Profile name |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verifyEmail**
> string verifyEmail($u, $tag)



Verify user email id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LoginApi();
$u = "u_example"; // string | User email id
$tag = "tag_example"; // string | Specify Verifytag

try {
    $result = $api_instance->verifyEmail($u, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->verifyEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **u** | **string**| User email id |
 **tag** | **string**| Specify Verifytag |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

