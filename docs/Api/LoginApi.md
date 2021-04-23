# Swagger\Client\LoginApi

All URIs are relative to *https://swaggerfc.getfilecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**2falogin**](LoginApi.md#2falogin) | **POST** /core/2falogin | Two-step-verification process for login of a user
[**get2fagasecret**](LoginApi.md#get2fagasecret) | **GET** /core/get2fagasecret | Login_Related_API - get2fagasecret lets a user login to the user portal using google authenticator verification process.
[**locksession**](LoginApi.md#locksession) | **POST** /core/locksession | Login_Related_API - locksession is a user logout call
[**loginguest**](LoginApi.md#loginguest) | **POST** /core/loginguest | Login_Related_API - loginguest Lets user login to the FileCloud User Portal to access files
[**resend2facode**](LoginApi.md#resend2facode) | **POST** /core/resend2facode | Login_Related_API - resend2facode lets user to resend 2fa code to the user&#39;s email.
[**resetpassword**](LoginApi.md#resetpassword) | **POST** /core/resetpassword | Login_Related_API - resetpassword lets user to reset password
[**verifyemail**](LoginApi.md#verifyemail) | **POST** /core/verifyemail | Login_Related_API - verifyemail lets a new user to verify his/her email id


# **2falogin**
> \Swagger\Client\Model\Commands 2falogin($userid, $code, $token)

Two-step-verification process for login of a user

User has to enter a code that has been sent to the email id configured with the account, to successfully login (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userid = "userid_example"; // string | User's login name.
$code = "code_example"; // string | Enter the code you have recieved in your email
$token = "token_example"; // string | Enter the token you had recieved in message field while performing loginguest api call

try {
    $result = $apiInstance->2falogin($userid, $code, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->2falogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userid** | **string**| User&#39;s login name. |
 **code** | **string**| Enter the code you have recieved in your email |
 **token** | **string**| Enter the token you had recieved in message field while performing loginguest api call |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get2fagasecret**
> \Swagger\Client\Model\Commands get2fagasecret($userid, $token)

Login_Related_API - get2fagasecret lets a user login to the user portal using google authenticator verification process.

Gets 2FA secret code to login using Google Authenticator (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userid = "userid_example"; // string | Specify the user name
$token = "token_example"; // string | Enter the token you had recieved in message field while performing loginguest api call

try {
    $result = $apiInstance->get2fagasecret($userid, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->get2fagasecret: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userid** | **string**| Specify the user name |
 **token** | **string**| Enter the token you had recieved in message field while performing loginguest api call |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locksession**
> \Swagger\Client\Model\Commands locksession()

Login_Related_API - locksession is a user logout call

User Logout api call to logout of the filecloud system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->locksession();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->locksession: ', $e->getMessage(), PHP_EOL;
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

# **loginguest**
> \Swagger\Client\Model\Commands loginguest($userid, $password)

Login_Related_API - loginguest Lets user login to the FileCloud User Portal to access files

This API allows user to login into filecloud system and access their respective data (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userid = "userid_example"; // string | This paramenter allows to enter the user's login name.
$password = "password_example"; // string | This parameter allows to enter the user's Password.

try {
    $result = $apiInstance->loginguest($userid, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->loginguest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userid** | **string**| This paramenter allows to enter the user&#39;s login name. |
 **password** | **string**| This parameter allows to enter the user&#39;s Password. |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resend2facode**
> \Swagger\Client\Model\Commands resend2facode($userid, $token)

Login_Related_API - resend2facode lets user to resend 2fa code to the user's email.

Resend 2facode to get a new code to login via 2falogin (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userid = "userid_example"; // string | Users login name
$token = "token_example"; // string | Enter the token you had recieved in message field while performing loginguest api call (HTTP POST)

try {
    $result = $apiInstance->resend2facode($userid, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->resend2facode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userid** | **string**| Users login name |
 **token** | **string**| Enter the token you had recieved in message field while performing loginguest api call (HTTP POST) |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetpassword**
> \Swagger\Client\Model\Commands resetpassword($profile)

Login_Related_API - resetpassword lets user to reset password

User can reset password of their account, when they have forgotten the password (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$profile = "profile_example"; // string | Profile name of the user

try {
    $result = $apiInstance->resetpassword($profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->resetpassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile** | **string**| Profile name of the user |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verifyemail**
> \Swagger\Client\Model\Commands verifyemail($u, $tag)

Login_Related_API - verifyemail lets a new user to verify his/her email id

New users can verify their respective email ids by clicking on the verification link sent to their email (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$u = "u_example"; // string | Email id of the user
$tag = "tag_example"; // string | Specify Verify tag

try {
    $result = $apiInstance->verifyemail($u, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->verifyemail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **u** | **string**| Email id of the user |
 **tag** | **string**| Specify Verify tag |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

