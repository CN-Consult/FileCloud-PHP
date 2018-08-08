# Swagger\Client\ShareApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addGroupToShare**](ShareApi.md#addGroupToShare) | **POST** /core/addgrouptoshare | 
[**addUserToShare**](ShareApi.md#addUserToShare) | **POST** /core/addusertoshare | 
[**createProfileOnInvite**](ShareApi.md#createProfileOnInvite) | **POST** /core/createprofileoninvite | 
[**deleteGroupFromShare**](ShareApi.md#deleteGroupFromShare) | **POST** /core/deletegroupfromshare | 
[**deleteShare**](ShareApi.md#deleteShare) | **POST** /core/deleteshare | 
[**deleteUserFromShare**](ShareApi.md#deleteUserFromShare) | **POST** /core/deleteuserfromshare | 
[**getEmailSubject**](ShareApi.md#getEmailSubject) | **GET** /core/getemailsubject | 
[**getEmailTemplate**](ShareApi.md#getEmailTemplate) | **GET** /core/getemailtemplate | 
[**getGroupAccessForShare**](ShareApi.md#getGroupAccessForShare) | **GET** /core/getgroupaccessforshare | 
[**getMostActiveShares**](ShareApi.md#getMostActiveShares) | **GET** /core/getmostactiveshares | 
[**getPrivateUrlForEmail**](ShareApi.md#getPrivateUrlForEmail) | **GET** /core/getprivateurlforemail | 
[**getPublicShareAuthInfo**](ShareApi.md#getPublicShareAuthInfo) | **GET** /core/getpublicshareauthinfo | 
[**getRandomPassword**](ShareApi.md#getRandomPassword) | **GET** /core/getrandompassword | 
[**getRecentShareActivityForUser**](ShareApi.md#getRecentShareActivityForUser) | **GET** /core/getrecentshareactivityforuser | 
[**getShareActivityForShare**](ShareApi.md#getShareActivityForShare) | **POST** /core/getshareactivityforshare | 
[**getShareForId**](ShareApi.md#getShareForId) | **GET** /core/getshareforid | 
[**getShareForPath**](ShareApi.md#getShareForPath) | **GET** /core/getshareforpath | 
[**getSharePassword**](ShareApi.md#getSharePassword) | **GET** /core/getsharepassword | 
[**getShares**](ShareApi.md#getShares) | **GET** /core/getshares | 
[**getSharesFilter**](ShareApi.md#getSharesFilter) | **GET** /core/getsharesfilter | 
[**getUploadForm**](ShareApi.md#getUploadForm) | **GET** /core/getuploadform | 
[**getUrlForEmail**](ShareApi.md#getUrlForEmail) | **GET** /core/geturlforemail | 
[**getUserAccessForShare**](ShareApi.md#getUserAccessForShare) | **GET** /core/getuseraccessforshare | 
[**getUsersForShare**](ShareApi.md#getUsersForShare) | **GET** /core/getusersforshare | 
[**leaveShare**](ShareApi.md#leaveShare) | **GET** /core/leaveshare | 
[**loginProtectedShare**](ShareApi.md#loginProtectedShare) | **POST** /core/loginprotectedshare | 
[**quickShare**](ShareApi.md#quickShare) | **POST** /core/quickshare | 
[**searchGroups**](ShareApi.md#searchGroups) | **GET** /core/searchgroups | 
[**searchProfile**](ShareApi.md#searchProfile) | **GET** /core/searchprofile | 
[**sendEmail**](ShareApi.md#sendEmail) | **POST** /core/sendemail | 
[**sendShareToEmail**](ShareApi.md#sendShareToEmail) | **POST** /core/sendsharetoemail | 
[**setAllowPublicAccess**](ShareApi.md#setAllowPublicAccess) | **GET** /core/setallowpublicaccess | 
[**setGroupAccessForShare**](ShareApi.md#setGroupAccessForShare) | **GET** /core/setgroupaccessforshare | 
[**setUserAccessForShare**](ShareApi.md#setUserAccessForShare) | **GET** /core/setuseraccessforshare | 
[**share**](ShareApi.md#share) | **POST** /core/share | 
[**updateShare**](ShareApi.md#updateShare) | **POST** /core/updateshare | 
[**updateShareLink**](ShareApi.md#updateShareLink) | **GET** /core/updatesharelink | 


# **addGroupToShare**
> string addGroupToShare($groupid, $shareid)



User can add a group to access privately  shared files in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$groupid = "groupid_example"; // string | Group Id number
$shareid = "shareid_example"; // string | Share Id number

try {
    $result = $apiInstance->addGroupToShare($groupid, $shareid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->addGroupToShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupid** | **string**| Group Id number |
 **shareid** | **string**| Share Id number |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addUserToShare**
> string addUserToShare($userid, $shareid)



User can add selective user's to access private shared files in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userid = "userid_example"; // string | Specify the user's email id
$shareid = "shareid_example"; // string | Share Id number

try {
    $result = $apiInstance->addUserToShare($userid, $shareid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->addUserToShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userid** | **string**| Specify the user&#39;s email id |
 **shareid** | **string**| Share Id number |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProfileOnInvite**
> string createProfileOnInvite($emailid)



Create a user profile on share invite

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$emailid = "emailid_example"; // string | Specify the emailid of the user to invite

try {
    $result = $apiInstance->createProfileOnInvite($emailid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->createProfileOnInvite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **emailid** | **string**| Specify the emailid of the user to invite |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGroupFromShare**
> string deleteGroupFromShare($groupid, $shareid)



User can remove the group from access to privately  shared files in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$groupid = "groupid_example"; // string | Group Id number
$shareid = "shareid_example"; // string | Share Id number

try {
    $result = $apiInstance->deleteGroupFromShare($groupid, $shareid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->deleteGroupFromShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupid** | **string**| Group Id number |
 **shareid** | **string**| Share Id number |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteShare**
> string deleteShare($shareid)



User can delete share

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shareid = "shareid_example"; // string | Share Id number

try {
    $result = $apiInstance->deleteShare($shareid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->deleteShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shareid** | **string**| Share Id number |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUserFromShare**
> string deleteUserFromShare($userid, $shareid)



User can remove a user from access to private shared files in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userid = "userid_example"; // string | Specify the user's email id
$shareid = "shareid_example"; // string | Share Id number

try {
    $result = $apiInstance->deleteUserFromShare($userid, $shareid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->deleteUserFromShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userid** | **string**| Specify the user&#39;s email id |
 **shareid** | **string**| Share Id number |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailSubject**
> string getEmailSubject($op, $param)



Get email subject

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$op = "op_example"; // string | Operation
$param = "param_example"; // string | Template name

try {
    $result = $apiInstance->getEmailSubject($op, $param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->getEmailSubject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **op** | **string**| Operation |
 **param** | **string**| Template name |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailTemplate**
> getEmailTemplate($op, $templatename, $sharename, $shareurl, $toemailid)



Get email template to send it to the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$op = "op_example"; // string | Operation name
$templatename = "templatename_example"; // string | Template Name
$sharename = "sharename_example"; // string | Share Name
$shareurl = "shareurl_example"; // string | Share URL
$toemailid = "toemailid_example"; // string | To email id

try {
    $apiInstance->getEmailTemplate($op, $templatename, $sharename, $shareurl, $toemailid);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->getEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **op** | **string**| Operation name |
 **templatename** | **string**| Template Name |
 **sharename** | **string**| Share Name |
 **shareurl** | **string**| Share URL |
 **toemailid** | **string**| To email id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupAccessForShare**
> string getGroupAccessForShare($shareid)



User can get group access details for share

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shareid = "shareid_example"; // string | Share Id number

try {
    $result = $apiInstance->getGroupAccessForShare($shareid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->getGroupAccessForShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shareid** | **string**| Share Id number |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMostActiveShares**
> string getMostActiveShares()



API that gets the most active shares for the user logged in. Most active share is defined by the number of times the share is accessed for any reason.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getMostActiveShares();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->getMostActiveShares: ', $e->getMessage(), PHP_EOL;
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

# **getPrivateUrlForEmail**
> getPrivateUrlForEmail($shareid)



Get Private Url for the shared file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shareid = "shareid_example"; // string | Share Id number

try {
    $apiInstance->getPrivateUrlForEmail($shareid);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->getPrivateUrlForEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shareid** | **string**| Share Id number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicShareAuthInfo**
> string getPublicShareAuthInfo($path)



Get public share authentication info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Specify the share path

try {
    $result = $apiInstance->getPublicShareAuthInfo($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->getPublicShareAuthInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Specify the share path |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRandomPassword**
> string getRandomPassword()



Get random password for protected share

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getRandomPassword();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->getRandomPassword: ', $e->getMessage(), PHP_EOL;
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

# **getRecentShareActivityForUser**
> string getRecentShareActivityForUser()



API to get the recent share activity from all shares for the user logged in.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getRecentShareActivityForUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->getRecentShareActivityForUser: ', $e->getMessage(), PHP_EOL;
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

# **getShareActivityForShare**
> string getShareActivityForShare()



Get the list of share activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getShareActivityForShare();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->getShareActivityForShare: ', $e->getMessage(), PHP_EOL;
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

# **getShareForId**
> string getShareForId($shareid)



User can get share details by using shareid

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shareid = "shareid_example"; // string | Share Id number

try {
    $result = $apiInstance->getShareForId($shareid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->getShareForId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shareid** | **string**| Share Id number |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShareForPath**
> string getShareForPath($path)



User can get share details by using path

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Path of shared file/folder

try {
    $result = $apiInstance->getShareForPath($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->getShareForPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path of shared file/folder |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSharePassword**
> string getSharePassword($shareid)



Get protected share password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shareid = "shareid_example"; // string | Specify the share Id

try {
    $result = $apiInstance->getSharePassword($shareid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->getSharePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shareid** | **string**| Specify the share Id |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShares**
> string getShares()



User can get all the shares in system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getShares();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->getShares: ', $e->getMessage(), PHP_EOL;
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

# **getSharesFilter**
> string getSharesFilter($location)



User can get the share information of shared file/folder in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$location = "location_example"; // string | Specify the location with the filename to be shared

try {
    $result = $apiInstance->getSharesFilter($location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->getSharesFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location** | **string**| Specify the location with the filename to be shared |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUploadForm**
> getUploadForm($shareid)



User get the upload form for publicly shared folder with upload permissions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shareid = "shareid_example"; // string | Share Id number

try {
    $apiInstance->getUploadForm($shareid);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->getUploadForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shareid** | **string**| Share Id number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUrlForEmail**
> getUrlForEmail($shareid, $sharename)



Get Url for the shared file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shareid = "shareid_example"; // string | Share Id number
$sharename = "sharename_example"; // string | Share name

try {
    $apiInstance->getUrlForEmail($shareid, $sharename);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->getUrlForEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shareid** | **string**| Share Id number |
 **sharename** | **string**| Share name |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserAccessForShare**
> string getUserAccessForShare($shareid)



User can get user access details for share

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shareid = "shareid_example"; // string | Share Id number

try {
    $result = $apiInstance->getUserAccessForShare($shareid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->getUserAccessForShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shareid** | **string**| Share Id number |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsersForShare**
> string getUsersForShare($shareid)



User can get a list of users added to that share.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shareid = "shareid_example"; // string | Share Id number

try {
    $result = $apiInstance->getUsersForShare($shareid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->getUsersForShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shareid** | **string**| Share Id number |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leaveShare**
> string leaveShare($path)



User can leave a shared file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Path of the shared file/folder

try {
    $result = $apiInstance->leaveShare($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->leaveShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path of the shared file/folder |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginProtectedShare**
> string loginProtectedShare($fullquerystring, $password, $path)



Login to protected share

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fullquerystring = "fullquerystring_example"; // string | Specify the full query string
$password = "password_example"; // string | Password for protected share
$path = "path_example"; // string | Specify the shared path

try {
    $result = $apiInstance->loginProtectedShare($fullquerystring, $password, $path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->loginProtectedShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fullquerystring** | **string**| Specify the full query string |
 **password** | **string**| Password for protected share |
 **path** | **string**| Specify the shared path |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quickShare**
> string quickShare($sharelocation)



User can share file's to other by generating a link in the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sharelocation = "sharelocation_example"; // string | Specify the location with the filename to be shared

try {
    $result = $apiInstance->quickShare($sharelocation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->quickShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharelocation** | **string**| Specify the location with the filename to be shared |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchGroups**
> string searchGroups()



Search for groups in system to share a file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->searchGroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->searchGroups: ', $e->getMessage(), PHP_EOL;
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

# **searchProfile**
> string searchProfile($filter)



Search for profile in system to share a file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = "filter_example"; // string | Partial name/email for search

try {
    $result = $apiInstance->searchProfile($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->searchProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Partial name/email for search |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendEmail**
> string sendEmail($from, $toemailid, $message, $subject, $userid, $publicshare, $replyto)



Send email to the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from = "from_example"; // string | From user name
$toemailid = "toemailid_example"; // string | To email id
$message = "message_example"; // string | Email template
$subject = "subject_example"; // string | subject of email
$userid = "userid_example"; // string | user id
$publicshare = "publicshare_example"; // string | share Id
$replyto = "replyto_example"; // string | Reply to email id

try {
    $result = $apiInstance->sendEmail($from, $toemailid, $message, $subject, $userid, $publicshare, $replyto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->sendEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| From user name |
 **toemailid** | **string**| To email id |
 **message** | **string**| Email template |
 **subject** | **string**| subject of email |
 **userid** | **string**| user id |
 **publicshare** | **string**| share Id |
 **replyto** | **string**| Reply to email id |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendShareToEmail**
> sendShareToEmail($from, $toemailid, $sharename, $sharelocation, $url, $message, $publicshare, $replyto)



Send shared file/folder to email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from = "from_example"; // string | from name
$toemailid = "toemailid_example"; // string | to email id
$sharename = "sharename_example"; // string | share name of file/folder
$sharelocation = "sharelocation_example"; // string | share location of the file/folder
$url = "url_example"; // string | share url of the file/folder
$message = "message_example"; // string | message text
$publicshare = "publicshare_example"; // string | public share id
$replyto = "replyto_example"; // string | reply to email

try {
    $apiInstance->sendShareToEmail($from, $toemailid, $sharename, $sharelocation, $url, $message, $publicshare, $replyto);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->sendShareToEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| from name |
 **toemailid** | **string**| to email id |
 **sharename** | **string**| share name of file/folder |
 **sharelocation** | **string**| share location of the file/folder |
 **url** | **string**| share url of the file/folder |
 **message** | **string**| message text |
 **publicshare** | **string**| public share id |
 **replyto** | **string**| reply to email |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAllowPublicAccess**
> string setAllowPublicAccess($shareid, $allowpublicaccess, $allowpublicupload, $allowpublicviewonly)



User can set a shared file to public or private access in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shareid = "shareid_example"; // string | Share Id number
$allowpublicaccess = 8.14; // float | If set to 1 - allow public access , 0 - private access only
$allowpublicupload = 8.14; // float | If set to 1 - allow public upload , 0 - private upload only
$allowpublicviewonly = 8.14; // float | If set to 1 - allow public view , 0 - private view only

try {
    $result = $apiInstance->setAllowPublicAccess($shareid, $allowpublicaccess, $allowpublicupload, $allowpublicviewonly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->setAllowPublicAccess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shareid** | **string**| Share Id number |
 **allowpublicaccess** | **float**| If set to 1 - allow public access , 0 - private access only |
 **allowpublicupload** | **float**| If set to 1 - allow public upload , 0 - private upload only |
 **allowpublicviewonly** | **float**| If set to 1 - allow public view , 0 - private view only |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setGroupAccessForShare**
> string setGroupAccessForShare($shareid, $groupid, $downloadwritesharesync)



User can set download/write/share/sync permission for the shared file/folder in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shareid = "shareid_example"; // string | Share Id
$groupid = "groupid_example"; // string | Group Id
$downloadwritesharesync = "downloadwritesharesync_example"; // string | Set to true or false

try {
    $result = $apiInstance->setGroupAccessForShare($shareid, $groupid, $downloadwritesharesync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->setGroupAccessForShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shareid** | **string**| Share Id |
 **groupid** | **string**| Group Id |
 **downloadwritesharesync** | **string**| Set to true or false |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setUserAccessForShare**
> string setUserAccessForShare($shareid, $userid, $downloadwritesharesync)



User can set download/write/share/sync permission for the shared file/folder in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shareid = "shareid_example"; // string | Share Id number
$userid = "userid_example"; // string | User email id
$downloadwritesharesync = "downloadwritesharesync_example"; // string | Set to true or false

try {
    $result = $apiInstance->setUserAccessForShare($shareid, $userid, $downloadwritesharesync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->setUserAccessForShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shareid** | **string**| Share Id number |
 **userid** | **string**| User email id |
 **downloadwritesharesync** | **string**| Set to true or false |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **share**
> share($mode, $path)



Downloads publicly shared file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mode = "mode_example"; // string | single file download
$path = "path_example"; // string | Shared file path

try {
    $apiInstance->share($mode, $path);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->share: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mode** | **string**| single file download |
 **path** | **string**| Shared file path |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateShare**
> string updateShare($shareid, $sharename, $sharelocation, $viewmode, $validityperiod, $sharesizelimit, $maxdownloads, $hidenotification, $sharepassword)



User can update the share information in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shareid = "shareid_example"; // string | Share Id number
$sharename = "sharename_example"; // string | Share name
$sharelocation = "sharelocation_example"; // string | Specify the location with the filename to be shared
$viewmode = "viewmode_example"; // string | DEFAULT
$validityperiod = 8.14; // float | Set the expiry date of share here
$sharesizelimit = 8.14; // float | Set the limit
$maxdownloads = 8.14; // float | Set the maximum times download limit
$hidenotification = 8.14; // float | Set 1 to disable email notification
$sharepassword = 8.14; // float | Set the password for protected share

try {
    $result = $apiInstance->updateShare($shareid, $sharename, $sharelocation, $viewmode, $validityperiod, $sharesizelimit, $maxdownloads, $hidenotification, $sharepassword);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->updateShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shareid** | **string**| Share Id number |
 **sharename** | **string**| Share name |
 **sharelocation** | **string**| Specify the location with the filename to be shared |
 **viewmode** | **string**| DEFAULT |
 **validityperiod** | **float**| Set the expiry date of share here |
 **sharesizelimit** | **float**| Set the limit |
 **maxdownloads** | **float**| Set the maximum times download limit |
 **hidenotification** | **float**| Set 1 to disable email notification |
 **sharepassword** | **float**| Set the password for protected share |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateShareLink**
> string updateShareLink($shareid, $oldsharelink, $newsharelink)



User can set download/write/share/sync permission for the shared file/folder in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shareid = "shareid_example"; // string | Share Id number
$oldsharelink = "oldsharelink_example"; // string | Old share link
$newsharelink = "newsharelink_example"; // string | New share link

try {
    $result = $apiInstance->updateShareLink($shareid, $oldsharelink, $newsharelink);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareApi->updateShareLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shareid** | **string**| Share Id number |
 **oldsharelink** | **string**| Old share link |
 **newsharelink** | **string**| New share link |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

