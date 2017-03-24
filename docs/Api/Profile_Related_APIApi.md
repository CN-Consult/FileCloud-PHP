# Swagger\Client\Profile_Related_APIApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**coreBeginprofilecreationPost**](Profile_Related_APIApi.md#coreBeginprofilecreationPost) | **POST** /core/beginprofilecreation | 
[**coreChangelanguageGet**](Profile_Related_APIApi.md#coreChangelanguageGet) | **GET** /core/changelanguage | 
[**coreCheckidGet**](Profile_Related_APIApi.md#coreCheckidGet) | **GET** /core/checkid | 
[**coreCreateprofileGet**](Profile_Related_APIApi.md#coreCreateprofileGet) | **GET** /core/createprofile | 
[**coreGetprofilesettingsGet**](Profile_Related_APIApi.md#coreGetprofilesettingsGet) | **GET** /core/getprofilesettings | 
[**coreSetdisplaynameGet**](Profile_Related_APIApi.md#coreSetdisplaynameGet) | **GET** /core/setdisplayname | 
[**coreSubscribePost**](Profile_Related_APIApi.md#coreSubscribePost) | **POST** /core/subscribe | 
[**coreUnsubscribePost**](Profile_Related_APIApi.md#coreUnsubscribePost) | **POST** /core/unsubscribe | 
[**coreUpdatepasswordPost**](Profile_Related_APIApi.md#coreUpdatepasswordPost) | **POST** /core/updatepassword | 


# **coreBeginprofilecreationPost**
> \Swagger\Client\Model\BeginprofilecreationResponse[] coreBeginprofilecreationPost()



Profile creation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Profile_Related_APIApi();

try {
    $result = $api_instance->coreBeginprofilecreationPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Profile_Related_APIApi->coreBeginprofilecreationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BeginprofilecreationResponse[]**](../Model/BeginprofilecreationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreChangelanguageGet**
> \Swagger\Client\Model\ChangelanguageResponse[] coreChangelanguageGet($lang)



User can change the language of the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Profile_Related_APIApi();
$lang = "lang_example"; // string | Specify the language you want to set

try {
    $result = $api_instance->coreChangelanguageGet($lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Profile_Related_APIApi->coreChangelanguageGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lang** | **string**| Specify the language you want to set |

### Return type

[**\Swagger\Client\Model\ChangelanguageResponse[]**](../Model/ChangelanguageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreCheckidGet**
> \Swagger\Client\Model\CheckidResponse[] coreCheckidGet($id)



User can check if the name available to create account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Profile_Related_APIApi();
$id = "id_example"; // string | Specify the name you want to check availablity

try {
    $result = $api_instance->coreCheckidGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Profile_Related_APIApi->coreCheckidGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Specify the name you want to check availablity |

### Return type

[**\Swagger\Client\Model\CheckidResponse[]**](../Model/CheckidResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreCreateprofileGet**
> \Swagger\Client\Model\CreateprofileResponse[] coreCreateprofileGet($profile, $email, $password)



New User can create an account if allowed by the administrator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Profile_Related_APIApi();
$profile = "profile_example"; // string | Name of the new user
$email = "email_example"; // string | Email id of the new user
$password = "password_example"; // string | Password for the new user

try {
    $result = $api_instance->coreCreateprofileGet($profile, $email, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Profile_Related_APIApi->coreCreateprofileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile** | **string**| Name of the new user |
 **email** | **string**| Email id of the new user |
 **password** | **string**| Password for the new user |

### Return type

[**\Swagger\Client\Model\CreateprofileResponse[]**](../Model/CreateprofileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGetprofilesettingsGet**
> \Swagger\Client\Model\GetprofilesettingsResponse[] coreGetprofilesettingsGet()



Profile settings details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Profile_Related_APIApi();

try {
    $result = $api_instance->coreGetprofilesettingsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Profile_Related_APIApi->coreGetprofilesettingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GetprofilesettingsResponse[]**](../Model/GetprofilesettingsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreSetdisplaynameGet**
> \Swagger\Client\Model\SetdisplaynameResponse[] coreSetdisplaynameGet($dispname)



User can change the display name in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Profile_Related_APIApi();
$dispname = "dispname_example"; // string | Specify the display name you want to set

try {
    $result = $api_instance->coreSetdisplaynameGet($dispname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Profile_Related_APIApi->coreSetdisplaynameGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispname** | **string**| Specify the display name you want to set |

### Return type

[**\Swagger\Client\Model\SetdisplaynameResponse[]**](../Model/SetdisplaynameResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreSubscribePost**
> coreSubscribePost($emailid)



Subscribe you emailid to recieve email from the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Profile_Related_APIApi();
$emailid = "emailid_example"; // string | Email Id of user

try {
    $api_instance->coreSubscribePost($emailid);
} catch (Exception $e) {
    echo 'Exception when calling Profile_Related_APIApi->coreSubscribePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **emailid** | **string**| Email Id of user |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreUnsubscribePost**
> coreUnsubscribePost($emailid)



Unsubscribe you emailid to not recieve email from the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Profile_Related_APIApi();
$emailid = "emailid_example"; // string | Email Id of user

try {
    $api_instance->coreUnsubscribePost($emailid);
} catch (Exception $e) {
    echo 'Exception when calling Profile_Related_APIApi->coreUnsubscribePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **emailid** | **string**| Email Id of user |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreUpdatepasswordPost**
> \Swagger\Client\Model\UpdatepasswordResponse[] coreUpdatepasswordPost($oldpassword, $newpassword)



User can change/update password of the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Profile_Related_APIApi();
$oldpassword = "oldpassword_example"; // string | Old password of the user.
$newpassword = "newpassword_example"; // string | New password the user wants to change too.

try {
    $result = $api_instance->coreUpdatepasswordPost($oldpassword, $newpassword);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Profile_Related_APIApi->coreUpdatepasswordPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oldpassword** | **string**| Old password of the user. |
 **newpassword** | **string**| New password the user wants to change too. |

### Return type

[**\Swagger\Client\Model\UpdatepasswordResponse[]**](../Model/UpdatepasswordResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

