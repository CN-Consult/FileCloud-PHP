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
> string ackrmcCommands($command_rids)



Acknowledge RMC Commands

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RMCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$command_rids = "command_rids_example"; // string | Command Id number

try {
    $result = $apiInstance->ackrmcCommands($command_rids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RMCApi->ackrmcCommands: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_rids** | **string**| Command Id number |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **approveDeviceAccess**
> string approveDeviceAccess($op, $remote_client_id)



Approve RMC Client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RMCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$op = "op_example"; // string | Operation name
$remote_client_id = "remote_client_id_example"; // string | Remote Client ID

try {
    $result = $apiInstance->approveDeviceAccess($op, $remote_client_id);
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
 **remote_client_id** | **string**| Remote Client ID |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDevice**
> string deleteDevice($op, $remote_client_id)



Delete RMC Device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RMCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$op = "op_example"; // string | Operation name
$remote_client_id = "remote_client_id_example"; // string | Remote Client ID

try {
    $result = $apiInstance->deleteDevice($op, $remote_client_id);
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
 **remote_client_id** | **string**| Remote Client ID |

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

$apiInstance = new Swagger\Client\Api\RMCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$op = "op_example"; // string | Operation name
$userid = "userid_example"; // string | Username
$start = "start_example"; // string | Start index of records to retrieve, Note: Index starts from 0. Default 0
$end = "end_example"; // string | Set to any number of record you want to view at once. Default 10

try {
    $result = $apiInstance->getRmcClients($op, $userid, $start, $end);
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
> string getRmcCommands($userid, $remote_client_id)



Get RMC Commands

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RMCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userid = "userid_example"; // string | User email id
$remote_client_id = "remote_client_id_example"; // string | Remote Client Id

try {
    $result = $apiInstance->getRmcCommands($userid, $remote_client_id);
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
 **remote_client_id** | **string**| Remote Client Id |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginGuest**
> string loginGuest($userid, $password, $remote_client_id, $remote_client_disp_name, $remote_client_api_level, $remote_client_os_type, $remote_client_app_version, $remote_client_os_version)



Client login API

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RMCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userid = "userid_example"; // string | Specify the username
$password = "password_example"; // string | Specify the password
$remote_client_id = "remote_client_id_example"; // string | Specify the unique identifier from the client (It can be the device MAC ID or the phone device ID. It just needs to be an unique number that identifies the device).
$remote_client_disp_name = "remote_client_disp_name_example"; // string | Specify the client device name
$remote_client_api_level = "remote_client_api_level_example"; // string | Set the api-level to 4 (latest required client api-level is 4)
$remote_client_os_type = "remote_client_os_type_example"; // string | Specify the client OS type
$remote_client_app_version = "remote_client_app_version_example"; // string | Specify the client app version
$remote_client_os_version = "remote_client_os_version_example"; // string | Specify the client OS version

try {
    $result = $apiInstance->loginGuest($userid, $password, $remote_client_id, $remote_client_disp_name, $remote_client_api_level, $remote_client_os_type, $remote_client_app_version, $remote_client_os_version);
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
 **remote_client_id** | **string**| Specify the unique identifier from the client (It can be the device MAC ID or the phone device ID. It just needs to be an unique number that identifies the device). |
 **remote_client_disp_name** | **string**| Specify the client device name |
 **remote_client_api_level** | **string**| Set the api-level to 4 (latest required client api-level is 4) |
 **remote_client_os_type** | **string**| Specify the client OS type |
 **remote_client_app_version** | **string**| Specify the client app version |
 **remote_client_os_version** | **string**| Specify the client OS version |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestDeviceAccess**
> string requestDeviceAccess($userid, $remote_client_id, $remote_client_disp_name)



Requesr RMC device access permission

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RMCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userid = "userid_example"; // string | Username
$remote_client_id = "remote_client_id_example"; // string | Specify the client id
$remote_client_disp_name = "remote_client_disp_name_example"; // string | Specify the clients display name

try {
    $result = $apiInstance->requestDeviceAccess($userid, $remote_client_id, $remote_client_disp_name);
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
 **remote_client_id** | **string**| Specify the client id |
 **remote_client_disp_name** | **string**| Specify the clients display name |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

