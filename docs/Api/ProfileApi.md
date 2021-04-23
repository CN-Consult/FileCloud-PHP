# Swagger\Client\ProfileApi

All URIs are relative to *https://swaggerfc.getfilecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**beginprofilecreation**](ProfileApi.md#beginprofilecreation) | **POST** /core/beginprofilecreation | Profile_Related_API - beginprofilecreation is used to create a profile for user
[**changelanguage**](ProfileApi.md#changelanguage) | **GET** /core/changelanguage | Profile_Related_API - changelanguage is used to change the language of FC system from the specified languages
[**checkid**](ProfileApi.md#checkid) | **GET** /core/checkid | Profile_Related_API - checkid is used to check if the mentioned username by the user is available or not in the FC system.
[**createprofile**](ProfileApi.md#createprofile) | **POST** /core/createprofile | Profile_Related_API - createprofile is used to create an account for a new user
[**getprofileimage**](ProfileApi.md#getprofileimage) | **GET** /core/getprofileimage | Profile_Related_API - getprofileimage is used to see the profile image of the user in FC system.
[**getprofilesettings**](ProfileApi.md#getprofilesettings) | **POST** /core/getprofilesettings | Profile_Related_API - getprofilesettings is used to get the saved settings of a profile
[**setdisplayname**](ProfileApi.md#setdisplayname) | **GET** /core/setdisplayname | Profile_Related_API - setdisplayname is used to change display name of the user in settings
[**subscribe**](ProfileApi.md#subscribe) | **POST** /core/subscribe | Profile_Related_API - subscribe is used to receive email about any notifications from the system
[**unsubscribe**](ProfileApi.md#unsubscribe) | **POST** /core/unsubscribe | Profile_Related_API - unsubscribe is used to not get any email notification from the system
[**updatepassword**](ProfileApi.md#updatepassword) | **POST** /core/updatepassword | Profile_Related_API - updatepassword is used to change the password of the user from their profile


# **beginprofilecreation**
> \Swagger\Client\Model\ProfilecreationProfilecreationrecord beginprofilecreation()

Profile_Related_API - beginprofilecreation is used to create a profile for user

This API is used to create a profile for the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->beginprofilecreation();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->beginprofilecreation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ProfilecreationProfilecreationrecord**](../Model/ProfilecreationProfilecreationrecord.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changelanguage**
> \Swagger\Client\Model\Commands changelanguage($lang)

Profile_Related_API - changelanguage is used to change the language of FC system from the specified languages

User can change the language of the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lang = "lang_example"; // string | Specify the language you want to set

try {
    $result = $apiInstance->changelanguage($lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->changelanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lang** | **string**| Specify the language you want to set |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkid**
> \Swagger\Client\Model\Commands checkid($id)

Profile_Related_API - checkid is used to check if the mentioned username by the user is available or not in the FC system.

User can check if the specified name by the user is available to create account in the FC system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Specify the name you want to check for availablity

try {
    $result = $apiInstance->checkid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->checkid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Specify the name you want to check for availablity |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createprofile**
> \Swagger\Client\Model\Commands createprofile($profile, $email, $password)

Profile_Related_API - createprofile is used to create an account for a new user

New User can create an account if allowed by the administrator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$profile = "profile_example"; // string | Name of the new user
$email = "email_example"; // string | Email id of the new user
$password = "password_example"; // string | Password for the new user

try {
    $result = $apiInstance->createprofile($profile, $email, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->createprofile: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getprofileimage**
> string getprofileimage($username, $height, $width)

Profile_Related_API - getprofileimage is used to see the profile image of the user in FC system.

Used to get the profile image of user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = "username_example"; // string | Specify the username you want to get profile image of
$height = "height_example"; // string | (optional) Specify the height
$width = "width_example"; // string | (optional) Specify the width

try {
    $result = $apiInstance->getprofileimage($username, $height, $width);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->getprofileimage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| Specify the username you want to get profile image of |
 **height** | **string**| (optional) Specify the height |
 **width** | **string**| (optional) Specify the width |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getprofilesettings**
> \Swagger\Client\Model\Settings getprofilesettings()

Profile_Related_API - getprofilesettings is used to get the saved settings of a profile

Used to get the profile settings of a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getprofilesettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->getprofilesettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Settings**](../Model/Settings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setdisplayname**
> \Swagger\Client\Model\Commands setdisplayname($dispname)

Profile_Related_API - setdisplayname is used to change display name of the user in settings

User can change the display name in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dispname = "dispname_example"; // string | Specify the display name you want to set

try {
    $result = $apiInstance->setdisplayname($dispname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->setdisplayname: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispname** | **string**| Specify the display name you want to set |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscribe**
> string subscribe($emailid)

Profile_Related_API - subscribe is used to receive email about any notifications from the system

User can Subscribe the emailid to recieve emails from the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$emailid = "emailid_example"; // string | Email Id of user

try {
    $result = $apiInstance->subscribe($emailid);
    print_r($result);
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

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unsubscribe**
> string unsubscribe($emailid)

Profile_Related_API - unsubscribe is used to not get any email notification from the system

User can unsubscribe the email id to not recieve any email from the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$emailid = "emailid_example"; // string | Email Id of user

try {
    $result = $apiInstance->unsubscribe($emailid);
    print_r($result);
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

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatepassword**
> \Swagger\Client\Model\Commands updatepassword($oldpassword, $newpassword)

Profile_Related_API - updatepassword is used to change the password of the user from their profile

User can change or update password of the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$oldpassword = "oldpassword_example"; // string | Old password of the user.
$newpassword = "newpassword_example"; // string | New password the user wants to change to

try {
    $result = $apiInstance->updatepassword($oldpassword, $newpassword);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->updatepassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oldpassword** | **string**| Old password of the user. |
 **newpassword** | **string**| New password the user wants to change to |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

