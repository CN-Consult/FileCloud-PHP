# Swagger\Client\Share_Related_APIApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**coreAddgrouptosharePost**](Share_Related_APIApi.md#coreAddgrouptosharePost) | **POST** /core/addgrouptoshare | 
[**coreAddusertosharePost**](Share_Related_APIApi.md#coreAddusertosharePost) | **POST** /core/addusertoshare | 
[**coreCreateprofileoninvitePost**](Share_Related_APIApi.md#coreCreateprofileoninvitePost) | **POST** /core/createprofileoninvite | 
[**coreDeletegroupfromsharePost**](Share_Related_APIApi.md#coreDeletegroupfromsharePost) | **POST** /core/deletegroupfromshare | 
[**coreDeletesharePost**](Share_Related_APIApi.md#coreDeletesharePost) | **POST** /core/deleteshare | 
[**coreDeleteuserfromsharePost**](Share_Related_APIApi.md#coreDeleteuserfromsharePost) | **POST** /core/deleteuserfromshare | 
[**coreGetemailsubjectGet**](Share_Related_APIApi.md#coreGetemailsubjectGet) | **GET** /core/getemailsubject | 
[**coreGetemailtemplateGet**](Share_Related_APIApi.md#coreGetemailtemplateGet) | **GET** /core/getemailtemplate | 
[**coreGetgroupaccessforshareGet**](Share_Related_APIApi.md#coreGetgroupaccessforshareGet) | **GET** /core/getgroupaccessforshare | 
[**coreGetprivateurlforemailGet**](Share_Related_APIApi.md#coreGetprivateurlforemailGet) | **GET** /core/getprivateurlforemail | 
[**coreGetpublicshareauthinfoGet**](Share_Related_APIApi.md#coreGetpublicshareauthinfoGet) | **GET** /core/getpublicshareauthinfo | 
[**coreGetrandompasswordGet**](Share_Related_APIApi.md#coreGetrandompasswordGet) | **GET** /core/getrandompassword | 
[**coreGetshareforidGet**](Share_Related_APIApi.md#coreGetshareforidGet) | **GET** /core/getshareforid | 
[**coreGetshareforpathGet**](Share_Related_APIApi.md#coreGetshareforpathGet) | **GET** /core/getshareforpath | 
[**coreGetsharepasswordGet**](Share_Related_APIApi.md#coreGetsharepasswordGet) | **GET** /core/getsharepassword | 
[**coreGetsharesGet**](Share_Related_APIApi.md#coreGetsharesGet) | **GET** /core/getshares | 
[**coreGetsharesfilterGet**](Share_Related_APIApi.md#coreGetsharesfilterGet) | **GET** /core/getsharesfilter | 
[**coreGetuploadformGet**](Share_Related_APIApi.md#coreGetuploadformGet) | **GET** /core/getuploadform | 
[**coreGeturlforemailGet**](Share_Related_APIApi.md#coreGeturlforemailGet) | **GET** /core/geturlforemail | 
[**coreGetuseraccessforshareGet**](Share_Related_APIApi.md#coreGetuseraccessforshareGet) | **GET** /core/getuseraccessforshare | 
[**coreGetusersforshareGet**](Share_Related_APIApi.md#coreGetusersforshareGet) | **GET** /core/getusersforshare | 
[**coreLeaveshareGet**](Share_Related_APIApi.md#coreLeaveshareGet) | **GET** /core/leaveshare | 
[**coreLoginprotectedsharePost**](Share_Related_APIApi.md#coreLoginprotectedsharePost) | **POST** /core/loginprotectedshare | 
[**coreQuicksharePost**](Share_Related_APIApi.md#coreQuicksharePost) | **POST** /core/quickshare | 
[**coreSearchgroupsGet**](Share_Related_APIApi.md#coreSearchgroupsGet) | **GET** /core/searchgroups | 
[**coreSearchprofileGet**](Share_Related_APIApi.md#coreSearchprofileGet) | **GET** /core/searchprofile | 
[**coreSendemailPost**](Share_Related_APIApi.md#coreSendemailPost) | **POST** /core/sendemail | 
[**coreSendsharetoemailPost**](Share_Related_APIApi.md#coreSendsharetoemailPost) | **POST** /core/sendsharetoemail | 
[**coreSetallowpublicaccessGet**](Share_Related_APIApi.md#coreSetallowpublicaccessGet) | **GET** /core/setallowpublicaccess | 
[**coreSetgroupaccessforshareGet**](Share_Related_APIApi.md#coreSetgroupaccessforshareGet) | **GET** /core/setgroupaccessforshare | 
[**coreSetuseraccessforshareGet**](Share_Related_APIApi.md#coreSetuseraccessforshareGet) | **GET** /core/setuseraccessforshare | 
[**coreSharePost**](Share_Related_APIApi.md#coreSharePost) | **POST** /core/share | 
[**coreShortenGet**](Share_Related_APIApi.md#coreShortenGet) | **GET** /core/shorten | 
[**coreUpdatesharePost**](Share_Related_APIApi.md#coreUpdatesharePost) | **POST** /core/updateshare | 
[**coreUpdatesharelinkGet**](Share_Related_APIApi.md#coreUpdatesharelinkGet) | **GET** /core/updatesharelink | 


# **coreAddgrouptosharePost**
> \Swagger\Client\Model\AddgrouptoshareResponse[] coreAddgrouptosharePost($groupid, $shareid)



User can add a group to access privately  shared files in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$groupid = "groupid_example"; // string | Group Id number
$shareid = "shareid_example"; // string | Share Id number

try {
    $result = $api_instance->coreAddgrouptosharePost($groupid, $shareid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreAddgrouptosharePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupid** | **string**| Group Id number |
 **shareid** | **string**| Share Id number |

### Return type

[**\Swagger\Client\Model\AddgrouptoshareResponse[]**](../Model/AddgrouptoshareResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreAddusertosharePost**
> \Swagger\Client\Model\AddusertoshareResponse[] coreAddusertosharePost($userid, $shareid)



User can add selective user's to access private shared files in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$userid = "userid_example"; // string | Specify the user's email id
$shareid = "shareid_example"; // string | Share Id number

try {
    $result = $api_instance->coreAddusertosharePost($userid, $shareid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreAddusertosharePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userid** | **string**| Specify the user&#39;s email id |
 **shareid** | **string**| Share Id number |

### Return type

[**\Swagger\Client\Model\AddusertoshareResponse[]**](../Model/AddusertoshareResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreCreateprofileoninvitePost**
> \Swagger\Client\Model\CreateprofileoninviteResponse[] coreCreateprofileoninvitePost($emailid)



Create a user profile on share invite

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$emailid = "emailid_example"; // string | Specify the emailid of the user to invite

try {
    $result = $api_instance->coreCreateprofileoninvitePost($emailid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreCreateprofileoninvitePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **emailid** | **string**| Specify the emailid of the user to invite |

### Return type

[**\Swagger\Client\Model\CreateprofileoninviteResponse[]**](../Model/CreateprofileoninviteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreDeletegroupfromsharePost**
> \Swagger\Client\Model\DeletegroupfromshareResponse[] coreDeletegroupfromsharePost($groupid, $shareid)



User can remove the group from access to privately  shared files in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$groupid = "groupid_example"; // string | Group Id number
$shareid = "shareid_example"; // string | Share Id number

try {
    $result = $api_instance->coreDeletegroupfromsharePost($groupid, $shareid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreDeletegroupfromsharePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupid** | **string**| Group Id number |
 **shareid** | **string**| Share Id number |

### Return type

[**\Swagger\Client\Model\DeletegroupfromshareResponse[]**](../Model/DeletegroupfromshareResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreDeletesharePost**
> \Swagger\Client\Model\DeleteshareResponse[] coreDeletesharePost($shareid)



User can delete share

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$shareid = "shareid_example"; // string | Share Id number

try {
    $result = $api_instance->coreDeletesharePost($shareid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreDeletesharePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shareid** | **string**| Share Id number |

### Return type

[**\Swagger\Client\Model\DeleteshareResponse[]**](../Model/DeleteshareResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreDeleteuserfromsharePost**
> \Swagger\Client\Model\DeleteuserfromshareResponse[] coreDeleteuserfromsharePost($userid, $shareid)



User can remove a user from access to private shared files in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$userid = "userid_example"; // string | Specify the user's email id
$shareid = "shareid_example"; // string | Share Id number

try {
    $result = $api_instance->coreDeleteuserfromsharePost($userid, $shareid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreDeleteuserfromsharePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userid** | **string**| Specify the user&#39;s email id |
 **shareid** | **string**| Share Id number |

### Return type

[**\Swagger\Client\Model\DeleteuserfromshareResponse[]**](../Model/DeleteuserfromshareResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGetemailsubjectGet**
> \Swagger\Client\Model\GetemailsubjectResponse[] coreGetemailsubjectGet($op, $param)



Get email subject

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$op = "op_example"; // string | Operation
$param = "param_example"; // string | Template name

try {
    $result = $api_instance->coreGetemailsubjectGet($op, $param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreGetemailsubjectGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **op** | **string**| Operation |
 **param** | **string**| Template name |

### Return type

[**\Swagger\Client\Model\GetemailsubjectResponse[]**](../Model/GetemailsubjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGetemailtemplateGet**
> coreGetemailtemplateGet($op, $templatename, $sharename, $shareurl, $toemailid)



Get email template to send it to the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$op = "op_example"; // string | Operation name
$templatename = "templatename_example"; // string | Template Name
$sharename = "sharename_example"; // string | Share Name
$shareurl = "shareurl_example"; // string | Share URL
$toemailid = "toemailid_example"; // string | To email id

try {
    $api_instance->coreGetemailtemplateGet($op, $templatename, $sharename, $shareurl, $toemailid);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreGetemailtemplateGet: ', $e->getMessage(), PHP_EOL;
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

# **coreGetgroupaccessforshareGet**
> \Swagger\Client\Model\GetgroupaccessforshareResponse[] coreGetgroupaccessforshareGet($shareid)



User can get group access details for share

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$shareid = "shareid_example"; // string | Share Id number

try {
    $result = $api_instance->coreGetgroupaccessforshareGet($shareid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreGetgroupaccessforshareGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shareid** | **string**| Share Id number |

### Return type

[**\Swagger\Client\Model\GetgroupaccessforshareResponse[]**](../Model/GetgroupaccessforshareResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGetprivateurlforemailGet**
> coreGetprivateurlforemailGet($shareid)



Get Private Url for the shared file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$shareid = "shareid_example"; // string | Share Id number

try {
    $api_instance->coreGetprivateurlforemailGet($shareid);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreGetprivateurlforemailGet: ', $e->getMessage(), PHP_EOL;
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

# **coreGetpublicshareauthinfoGet**
> \Swagger\Client\Model\GetpublicshareauthinfoResponse[] coreGetpublicshareauthinfoGet($path)



Get public share authentication info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$path = "path_example"; // string | Specify the share path

try {
    $result = $api_instance->coreGetpublicshareauthinfoGet($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreGetpublicshareauthinfoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Specify the share path |

### Return type

[**\Swagger\Client\Model\GetpublicshareauthinfoResponse[]**](../Model/GetpublicshareauthinfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGetrandompasswordGet**
> \Swagger\Client\Model\GetrandompasswordResponse[] coreGetrandompasswordGet()



Get random password for protected share

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();

try {
    $result = $api_instance->coreGetrandompasswordGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreGetrandompasswordGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GetrandompasswordResponse[]**](../Model/GetrandompasswordResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGetshareforidGet**
> \Swagger\Client\Model\GetshareforidResponse[] coreGetshareforidGet($shareid)



User can get share details by using shareid

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$shareid = "shareid_example"; // string | Share Id number

try {
    $result = $api_instance->coreGetshareforidGet($shareid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreGetshareforidGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shareid** | **string**| Share Id number |

### Return type

[**\Swagger\Client\Model\GetshareforidResponse[]**](../Model/GetshareforidResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGetshareforpathGet**
> \Swagger\Client\Model\GetshareforpathResponse[] coreGetshareforpathGet($path)



User can get share details by using path

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$path = "path_example"; // string | Path of shared file/folder

try {
    $result = $api_instance->coreGetshareforpathGet($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreGetshareforpathGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path of shared file/folder |

### Return type

[**\Swagger\Client\Model\GetshareforpathResponse[]**](../Model/GetshareforpathResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGetsharepasswordGet**
> \Swagger\Client\Model\GetsharepasswordResponse[] coreGetsharepasswordGet($shareid)



Get protected share password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$shareid = "shareid_example"; // string | Specify the share Id

try {
    $result = $api_instance->coreGetsharepasswordGet($shareid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreGetsharepasswordGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shareid** | **string**| Specify the share Id |

### Return type

[**\Swagger\Client\Model\GetsharepasswordResponse[]**](../Model/GetsharepasswordResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGetsharesGet**
> \Swagger\Client\Model\GetsharesResponse[] coreGetsharesGet()



User can get all the shares in system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();

try {
    $result = $api_instance->coreGetsharesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreGetsharesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GetsharesResponse[]**](../Model/GetsharesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGetsharesfilterGet**
> \Swagger\Client\Model\GetsharesfilterResponse[] coreGetsharesfilterGet($location)



User can get the share information of shared file/folder in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$location = "location_example"; // string | Specify the location with the filename to be shared

try {
    $result = $api_instance->coreGetsharesfilterGet($location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreGetsharesfilterGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location** | **string**| Specify the location with the filename to be shared |

### Return type

[**\Swagger\Client\Model\GetsharesfilterResponse[]**](../Model/GetsharesfilterResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGetuploadformGet**
> coreGetuploadformGet($shareid)



User get the upload form for publicly shared folder with upload permissions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$shareid = "shareid_example"; // string | Share Id number

try {
    $api_instance->coreGetuploadformGet($shareid);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreGetuploadformGet: ', $e->getMessage(), PHP_EOL;
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

# **coreGeturlforemailGet**
> coreGeturlforemailGet($shareid, $sharename)



Get Url for the shared file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$shareid = "shareid_example"; // string | Share Id number
$sharename = "sharename_example"; // string | Share name

try {
    $api_instance->coreGeturlforemailGet($shareid, $sharename);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreGeturlforemailGet: ', $e->getMessage(), PHP_EOL;
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

# **coreGetuseraccessforshareGet**
> \Swagger\Client\Model\GetuseraccessforshareResponse[] coreGetuseraccessforshareGet($shareid)



User can get user access details for share

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$shareid = "shareid_example"; // string | Share Id number

try {
    $result = $api_instance->coreGetuseraccessforshareGet($shareid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreGetuseraccessforshareGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shareid** | **string**| Share Id number |

### Return type

[**\Swagger\Client\Model\GetuseraccessforshareResponse[]**](../Model/GetuseraccessforshareResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGetusersforshareGet**
> \Swagger\Client\Model\GetusersforshareResponse[] coreGetusersforshareGet($shareid)



User can get a list of users added to that share.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$shareid = "shareid_example"; // string | Share Id number

try {
    $result = $api_instance->coreGetusersforshareGet($shareid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreGetusersforshareGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shareid** | **string**| Share Id number |

### Return type

[**\Swagger\Client\Model\GetusersforshareResponse[]**](../Model/GetusersforshareResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreLeaveshareGet**
> \Swagger\Client\Model\LeaveshareResponse[] coreLeaveshareGet($path)



User can leave a shared file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$path = "path_example"; // string | Path of the shared file/folder

try {
    $result = $api_instance->coreLeaveshareGet($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreLeaveshareGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path of the shared file/folder |

### Return type

[**\Swagger\Client\Model\LeaveshareResponse[]**](../Model/LeaveshareResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreLoginprotectedsharePost**
> \Swagger\Client\Model\LoginprotectedshareResponse[] coreLoginprotectedsharePost($fullquerystring, $password, $path)



Login to protected share

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$fullquerystring = "fullquerystring_example"; // string | Specify the full query string
$password = "password_example"; // string | Password for protected share
$path = "path_example"; // string | Specify the shared path

try {
    $result = $api_instance->coreLoginprotectedsharePost($fullquerystring, $password, $path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreLoginprotectedsharePost: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\LoginprotectedshareResponse[]**](../Model/LoginprotectedshareResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreQuicksharePost**
> \Swagger\Client\Model\QuickshareResponse[] coreQuicksharePost($sharelocation)



User can share file's to other by generating a link in the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$sharelocation = "sharelocation_example"; // string | Specify the location with the filename to be shared

try {
    $result = $api_instance->coreQuicksharePost($sharelocation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreQuicksharePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharelocation** | **string**| Specify the location with the filename to be shared |

### Return type

[**\Swagger\Client\Model\QuickshareResponse[]**](../Model/QuickshareResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreSearchgroupsGet**
> \Swagger\Client\Model\SearchgroupsResponse[] coreSearchgroupsGet()



Search for groups in system to share a file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();

try {
    $result = $api_instance->coreSearchgroupsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreSearchgroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SearchgroupsResponse[]**](../Model/SearchgroupsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreSearchprofileGet**
> \Swagger\Client\Model\SearchprofileResponse[] coreSearchprofileGet($filter)



Search for profile in system to share a file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$filter = "filter_example"; // string | Partial name/email for search

try {
    $result = $api_instance->coreSearchprofileGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreSearchprofileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Partial name/email for search |

### Return type

[**\Swagger\Client\Model\SearchprofileResponse[]**](../Model/SearchprofileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreSendemailPost**
> \Swagger\Client\Model\SendemailResponse[] coreSendemailPost($from, $toemailid, $message, $subject, $userid, $publicshare, $replyto)



Send email to the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$from = "from_example"; // string | From user name
$toemailid = "toemailid_example"; // string | To email id
$message = "message_example"; // string | Email template
$subject = "subject_example"; // string | subject of email
$userid = "userid_example"; // string | user id
$publicshare = "publicshare_example"; // string | share Id
$replyto = "replyto_example"; // string | Reply to email id

try {
    $result = $api_instance->coreSendemailPost($from, $toemailid, $message, $subject, $userid, $publicshare, $replyto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreSendemailPost: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\SendemailResponse[]**](../Model/SendemailResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreSendsharetoemailPost**
> coreSendsharetoemailPost($from, $toemailid, $sharename, $sharelocation, $url, $message, $publicshare, $replyto)



Send shared file/folder to email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$from = "from_example"; // string | from name
$toemailid = "toemailid_example"; // string | to email id
$sharename = "sharename_example"; // string | share name of file/folder
$sharelocation = "sharelocation_example"; // string | share location of the file/folder
$url = "url_example"; // string | share url of the file/folder
$message = "message_example"; // string | message text
$publicshare = "publicshare_example"; // string | public share id
$replyto = "replyto_example"; // string | reply to email

try {
    $api_instance->coreSendsharetoemailPost($from, $toemailid, $sharename, $sharelocation, $url, $message, $publicshare, $replyto);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreSendsharetoemailPost: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreSetallowpublicaccessGet**
> \Swagger\Client\Model\SetallowpublicaccessResponse[] coreSetallowpublicaccessGet($shareid, $allowpublicaccess, $allowpublicupload, $allowpublicviewonly)



User can set a shared file to public or private access in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$shareid = "shareid_example"; // string | Share Id number
$allowpublicaccess = 3.4; // float | If set to 1 - allow public access , 0 - private access only
$allowpublicupload = 3.4; // float | If set to 1 - allow public upload , 0 - private upload only
$allowpublicviewonly = 3.4; // float | If set to 1 - allow public view , 0 - private view only

try {
    $result = $api_instance->coreSetallowpublicaccessGet($shareid, $allowpublicaccess, $allowpublicupload, $allowpublicviewonly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreSetallowpublicaccessGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\SetallowpublicaccessResponse[]**](../Model/SetallowpublicaccessResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreSetgroupaccessforshareGet**
> \Swagger\Client\Model\SetgroupaccessforshareResponse[] coreSetgroupaccessforshareGet($shareid, $groupid, $downloadwritesharesync)



User can set download/write/share/sync permission for the shared file/folder in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$shareid = "shareid_example"; // string | Share Id
$groupid = "groupid_example"; // string | Group Id
$downloadwritesharesync = "downloadwritesharesync_example"; // string | Set to true or false

try {
    $result = $api_instance->coreSetgroupaccessforshareGet($shareid, $groupid, $downloadwritesharesync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreSetgroupaccessforshareGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\SetgroupaccessforshareResponse[]**](../Model/SetgroupaccessforshareResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreSetuseraccessforshareGet**
> \Swagger\Client\Model\SetuseraccessforshareResponse[] coreSetuseraccessforshareGet($shareid, $userid, $downloadwritesharesync)



User can set download/write/share/sync permission for the shared file/folder in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$shareid = "shareid_example"; // string | Share Id number
$userid = "userid_example"; // string | User email id
$downloadwritesharesync = "downloadwritesharesync_example"; // string | Set to true or false

try {
    $result = $api_instance->coreSetuseraccessforshareGet($shareid, $userid, $downloadwritesharesync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreSetuseraccessforshareGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\SetuseraccessforshareResponse[]**](../Model/SetuseraccessforshareResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreSharePost**
> coreSharePost($mode, $path)



Downloads publicly shared file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$mode = "mode_example"; // string | single file download
$path = "path_example"; // string | Shared file path

try {
    $api_instance->coreSharePost($mode, $path);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreSharePost: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreShortenGet**
> coreShortenGet($longurl)



Shorten the long url

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$longurl = "longurl_example"; // string | URL

try {
    $api_instance->coreShortenGet($longurl);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreShortenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **longurl** | **string**| URL |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreUpdatesharePost**
> \Swagger\Client\Model\UpdateshareResponse[] coreUpdatesharePost($shareid, $sharename, $sharelocation, $viewmode, $validityperiod, $sharesizelimit, $maxdownloads, $hidenotification, $sharepassword)



User can update the share information in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$shareid = "shareid_example"; // string | Share Id number
$sharename = "sharename_example"; // string | Share name
$sharelocation = "sharelocation_example"; // string | Specify the location with the filename to be shared
$viewmode = "viewmode_example"; // string | DEFAULT
$validityperiod = 3.4; // float | Set the expiry date of share here
$sharesizelimit = 3.4; // float | Set the limit
$maxdownloads = 3.4; // float | Set the maximum times download limit
$hidenotification = 3.4; // float | Set 1 to disable email notification
$sharepassword = 3.4; // float | Set the password for protected share

try {
    $result = $api_instance->coreUpdatesharePost($shareid, $sharename, $sharelocation, $viewmode, $validityperiod, $sharesizelimit, $maxdownloads, $hidenotification, $sharepassword);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreUpdatesharePost: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\UpdateshareResponse[]**](../Model/UpdateshareResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreUpdatesharelinkGet**
> \Swagger\Client\Model\UpdatesharelinkResponse[] coreUpdatesharelinkGet($shareid, $oldsharelink, $newsharelink)



User can set download/write/share/sync permission for the shared file/folder in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Share_Related_APIApi();
$shareid = "shareid_example"; // string | Share Id number
$oldsharelink = "oldsharelink_example"; // string | Old share link
$newsharelink = "newsharelink_example"; // string | New share link

try {
    $result = $api_instance->coreUpdatesharelinkGet($shareid, $oldsharelink, $newsharelink);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Share_Related_APIApi->coreUpdatesharelinkGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\UpdatesharelinkResponse[]**](../Model/UpdatesharelinkResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

