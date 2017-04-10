# Swagger\Client\ProfileApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**beginProfileCreation**](ProfileApi.md#beginProfileCreation) | **POST** /core/beginprofilecreation | 
[**changeLanguage**](ProfileApi.md#changeLanguage) | **GET** /core/changelanguage | 
[**checkId**](ProfileApi.md#checkId) | **GET** /core/checkid | 
[**createProfile**](ProfileApi.md#createProfile) | **GET** /core/createprofile | 
[**getProfileSettings**](ProfileApi.md#getProfileSettings) | **GET** /core/getprofilesettings | 
[**setDisplayName**](ProfileApi.md#setDisplayName) | **GET** /core/setdisplayname | 
[**subscribe**](ProfileApi.md#subscribe) | **POST** /core/subscribe | 
[**unsubscribe**](ProfileApi.md#unsubscribe) | **POST** /core/unsubscribe | 
[**updatePassword**](ProfileApi.md#updatePassword) | **POST** /core/updatepassword | 


# **beginProfileCreation**
> string beginProfileCreation()



Profile creation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProfileApi();

try {
    $result = $api_instance->beginProfileCreation();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->beginProfileCreation: ', $e->getMessage(), PHP_EOL;
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

# **changeLanguage**
> string changeLanguage($lang)



User can change the language of the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProfileApi();
$lang = "lang_example"; // string | Specify the language you want to set

try {
    $result = $api_instance->changeLanguage($lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->changeLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lang** | **string**| Specify the language you want to set |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkId**
> string checkId($id)



User can check if the name available to create account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProfileApi();
$id = "id_example"; // string | Specify the name you want to check availablity

try {
    $result = $api_instance->checkId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->checkId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Specify the name you want to check availablity |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProfile**
> string createProfile($profile, $email, $password)



New User can create an account if allowed by the administrator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProfileApi();
$profile = "profile_example"; // string | Name of the new user
$email = "email_example"; // string | Email id of the new user
$password = "password_example"; // string | Password for the new user

try {
    $result = $api_instance->createProfile($profile, $email, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->createProfile: ', $e->getMessage(), PHP_EOL;
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

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProfileSettings**
> string getProfileSettings()



Profile settings details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProfileApi();

try {
    $result = $api_instance->getProfileSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->getProfileSettings: ', $e->getMessage(), PHP_EOL;
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

# **setDisplayName**
> string setDisplayName($dispname)



User can change the display name in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProfileApi();
$dispname = "dispname_example"; // string | Specify the display name you want to set

try {
    $result = $api_instance->setDisplayName($dispname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->setDisplayName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispname** | **string**| Specify the display name you want to set |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscribe**
> subscribe($emailid)



Subscribe you emailid to recieve email from the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProfileApi();
$emailid = "emailid_example"; // string | Email Id of user

try {
    $api_instance->subscribe($emailid);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->subscribe: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unsubscribe**
> unsubscribe($emailid)



Unsubscribe you emailid to not recieve email from the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProfileApi();
$emailid = "emailid_example"; // string | Email Id of user

try {
    $api_instance->unsubscribe($emailid);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->unsubscribe: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePassword**
> string updatePassword($oldpassword, $newpassword)



User can change/update password of the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProfileApi();
$oldpassword = "oldpassword_example"; // string | Old password of the user.
$newpassword = "newpassword_example"; // string | New password the user wants to change too.

try {
    $result = $api_instance->updatePassword($oldpassword, $newpassword);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->updatePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oldpassword** | **string**| Old password of the user. |
 **newpassword** | **string**| New password the user wants to change too. |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

