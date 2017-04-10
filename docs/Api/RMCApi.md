# Swagger\Client\RMCApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ackrmcCommands**](RMCApi.md#ackrmcCommands) | **POST** /core/ackrmccommands | 
[**approveDeviceAccess**](RMCApi.md#approveDeviceAccess) | **POST** /core/approvedeviceaccess | 
[**deleteDevice**](RMCApi.md#deleteDevice) | **POST** /core/deletedevice | 
[**getRmcClients**](RMCApi.md#getRmcClients) | **GET** /core/getrmcclients | 
[**getRmcCommands**](RMCApi.md#getRmcCommands) | **GET** /core/getrmccommands | 
[**loginGuest**](RMCApi.md#loginGuest) | **POST** /core/loginguest | 
[**requestDeviceAccess**](RMCApi.md#requestDeviceAccess) | **POST** /core/requestdeviceaccess | 


# **ackrmcCommands**
> string ackrmcCommands($commandRids)



Acknowledge RMC Commands

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RMCApi();
$commandRids = "commandRids_example"; // string | Command Id number

try {
    $result = $api_instance->ackrmcCommands($commandRids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RMCApi->ackrmcCommands: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **commandRids** | **string**| Command Id number |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **approveDeviceAccess**
> string approveDeviceAccess($op, $remoteClientId)



Approve RMC Client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RMCApi();
$op = "op_example"; // string | Operation name
$remoteClientId = "remoteClientId_example"; // string | Remote Client ID

try {
    $result = $api_instance->approveDeviceAccess($op, $remoteClientId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RMCApi->approveDeviceAccess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **op** | **string**| Operation name |
 **remoteClientId** | **string**| Remote Client ID |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDevice**
> string deleteDevice($op, $remoteClientId)



Delete RMC Device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RMCApi();
$op = "op_example"; // string | Operation name
$remoteClientId = "remoteClientId_example"; // string | Remote Client ID

try {
    $result = $api_instance->deleteDevice($op, $remoteClientId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RMCApi->deleteDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **op** | **string**| Operation name |
 **remoteClientId** | **string**| Remote Client ID |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRmcClients**
> string getRmcClients($op, $userid, $start, $end)



Get details of all the RMC clients logged in

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RMCApi();
$op = "op_example"; // string | Operation name
$userid = "userid_example"; // string | Username
$start = "start_example"; // string | Start index of records to retrieve, Note: Index starts from 0. Default 0
$end = "end_example"; // string | Set to any number of record you want to view at once. Default 10

try {
    $result = $api_instance->getRmcClients($op, $userid, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RMCApi->getRmcClients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **op** | **string**| Operation name |
 **userid** | **string**| Username |
 **start** | **string**| Start index of records to retrieve, Note: Index starts from 0. Default 0 |
 **end** | **string**| Set to any number of record you want to view at once. Default 10 |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRmcCommands**
> string getRmcCommands($userid, $remoteClientId)



Get RMC Commands

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RMCApi();
$userid = "userid_example"; // string | User email id
$remoteClientId = "remoteClientId_example"; // string | Remote Client Id

try {
    $result = $api_instance->getRmcCommands($userid, $remoteClientId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RMCApi->getRmcCommands: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userid** | **string**| User email id |
 **remoteClientId** | **string**| Remote Client Id |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginGuest**
> string loginGuest($userid, $password, $remoteClientId, $remoteClientDispName, $remoteClientApiLevel, $remoteClientOsType, $remoteClientAppVersion, $remoteClientOsVersion)



Client login API

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RMCApi();
$userid = "userid_example"; // string | Specify the username
$password = "password_example"; // string | Specify the password
$remoteClientId = "remoteClientId_example"; // string | Specify the unique identifier from the client (It can be the device MAC ID or the phone device ID. It just needs to be an unique number that identifies the device).
$remoteClientDispName = "remoteClientDispName_example"; // string | Specify the client device name
$remoteClientApiLevel = "remoteClientApiLevel_example"; // string | Set the api-level to 4 (latest required client api-level is 4)
$remoteClientOsType = "remoteClientOsType_example"; // string | Specify the client OS type
$remoteClientAppVersion = "remoteClientAppVersion_example"; // string | Specify the client app version
$remoteClientOsVersion = "remoteClientOsVersion_example"; // string | Specify the client OS version

try {
    $result = $api_instance->loginGuest($userid, $password, $remoteClientId, $remoteClientDispName, $remoteClientApiLevel, $remoteClientOsType, $remoteClientAppVersion, $remoteClientOsVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RMCApi->loginGuest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userid** | **string**| Specify the username |
 **password** | **string**| Specify the password |
 **remoteClientId** | **string**| Specify the unique identifier from the client (It can be the device MAC ID or the phone device ID. It just needs to be an unique number that identifies the device). |
 **remoteClientDispName** | **string**| Specify the client device name |
 **remoteClientApiLevel** | **string**| Set the api-level to 4 (latest required client api-level is 4) |
 **remoteClientOsType** | **string**| Specify the client OS type |
 **remoteClientAppVersion** | **string**| Specify the client app version |
 **remoteClientOsVersion** | **string**| Specify the client OS version |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestDeviceAccess**
> string requestDeviceAccess($userid)



Requesr RMC device access permission

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RMCApi();
$userid = "userid_example"; // string | Username

try {
    $result = $api_instance->requestDeviceAccess($userid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RMCApi->requestDeviceAccess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userid** | **string**| Username |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

