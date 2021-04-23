# Swagger\Client\RmcApi

All URIs are relative to *https://swaggerfc.getfilecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ackrmccommands**](RmcApi.md#ackrmccommands) | **POST** /core/ackrmccommands | RMC_Related_API - ackrmccommands is used to acknowledge the received rmc command
[**approvedeviceaccess**](RmcApi.md#approvedeviceaccess) | **POST** /core/approvedeviceaccess | RMC_Related_API - approvedeviceaccess is used to approve the status of a device from pending so that user can access FC system
[**deletedevice**](RmcApi.md#deletedevice) | **POST** /core/deletedevice | RMC_Related_API - deletedevice is used to delete the device which is connected to the user&#39;s profile
[**getrmcclients**](RmcApi.md#getrmcclients) | **POST** /core/getrmcclients | RMC_Related_API - getrmcclients is used to get all details about the rmc clients connected to system
[**getrmccommands**](RmcApi.md#getrmccommands) | **POST** /core/getrmccommands | RMC_Related_API - getrmccommands is used to get the generated rmc commands
[**registerclientforrmc**](RmcApi.md#registerclientforrmc) | **POST** /core/registerclientforrmc | RMC_Related_API - registerclientforrmc is used to register a rmc device while logging in using SSO login
[**requestdeviceaccess**](RmcApi.md#requestdeviceaccess) | **POST** /core/requestdeviceaccess | RMC_Related_API - requestdeviceaccess is used to request device access permission before logging in to a client application
[**rmcloginguest**](RmcApi.md#rmcloginguest) | **POST** /core/rmcloginguest | RMC_Related_API - rmcloginguest is a remote client login api


# **ackrmccommands**
> \Swagger\Client\Model\Commands ackrmccommands($command_rids)

RMC_Related_API - ackrmccommands is used to acknowledge the received rmc command

Acknowledge RMC Commands

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RmcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$command_rids = "command_rids_example"; // string | Command Id number

try {
    $result = $apiInstance->ackrmccommands($command_rids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmcApi->ackrmccommands: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_rids** | **string**| Command Id number |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **approvedeviceaccess**
> \Swagger\Client\Model\Commands approvedeviceaccess($remote_client_id)

RMC_Related_API - approvedeviceaccess is used to approve the status of a device from pending so that user can access FC system

User can approve the RMC Client so the FC system can be used in a client application.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RmcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$remote_client_id = "remote_client_id_example"; // string | Command Id number

try {
    $result = $apiInstance->approvedeviceaccess($remote_client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmcApi->approvedeviceaccess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **remote_client_id** | **string**| Command Id number |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletedevice**
> \Swagger\Client\Model\Commands deletedevice($remote_client_id)

RMC_Related_API - deletedevice is used to delete the device which is connected to the user's profile

User can delete the RMC Device connected to profile from settings of the user portal from FC system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RmcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$remote_client_id = "remote_client_id_example"; // string | Remote Client ID

try {
    $result = $apiInstance->deletedevice($remote_client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmcApi->deletedevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **remote_client_id** | **string**| Remote Client ID |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getrmcclients**
> \Swagger\Client\Model\RmcClients getrmcclients($userid, $start, $end)

RMC_Related_API - getrmcclients is used to get all details about the rmc clients connected to system

User can see information such as the device's operating system, display name, os version, etc.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RmcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userid = "userid_example"; // string | Username
$start = "start_example"; // string | Start index of records to retrieve, Note- Index starts from 0. Default 0
$end = "end_example"; // string | Set to any number of record you want to view at once. Default 10

try {
    $result = $apiInstance->getrmcclients($userid, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmcApi->getrmcclients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userid** | **string**| Username |
 **start** | **string**| Start index of records to retrieve, Note- Index starts from 0. Default 0 |
 **end** | **string**| Set to any number of record you want to view at once. Default 10 |

### Return type

[**\Swagger\Client\Model\RmcClients**](../Model/RmcClients.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getrmccommands**
> \Swagger\Client\Model\RmcCommands getrmccommands($userid, $remote_client_id)

RMC_Related_API - getrmccommands is used to get the generated rmc commands

Used to get RMC Commands for a selected client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RmcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userid = "userid_example"; // string | User email id
$remote_client_id = "remote_client_id_example"; // string | Remote Client Id

try {
    $result = $apiInstance->getrmccommands($userid, $remote_client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmcApi->getrmccommands: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userid** | **string**| User email id |
 **remote_client_id** | **string**| Remote Client Id |

### Return type

[**\Swagger\Client\Model\RmcCommands**](../Model/RmcCommands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerclientforrmc**
> \Swagger\Client\Model\Commands registerclientforrmc($userid, $remote_client_id, $remote_client_disp_name, $remote_client_api_level, $remote_client_os_type, $remote_client_app_version, $remote_client_os_version)

RMC_Related_API - registerclientforrmc is used to register a rmc device while logging in using SSO login

Register the client application when you want to login using SSO

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RmcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userid = "userid_example"; // string | Specify the username
$remote_client_id = "remote_client_id_example"; // string | Specify the unique identifier from the client (It can be the device MAC ID or the phone device ID. It just needs to be an unique number that identifies the device).
$remote_client_disp_name = "remote_client_disp_name_example"; // string | Specify the client device name
$remote_client_api_level = "remote_client_api_level_example"; // string | Set the api-level to 4 (latest required client api-level is 4)
$remote_client_os_type = "remote_client_os_type_example"; // string | Specify the client OS type
$remote_client_app_version = "remote_client_app_version_example"; // string | Specify the client app version
$remote_client_os_version = "remote_client_os_version_example"; // string | Specify the client OS version

try {
    $result = $apiInstance->registerclientforrmc($userid, $remote_client_id, $remote_client_disp_name, $remote_client_api_level, $remote_client_os_type, $remote_client_app_version, $remote_client_os_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmcApi->registerclientforrmc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userid** | **string**| Specify the username |
 **remote_client_id** | **string**| Specify the unique identifier from the client (It can be the device MAC ID or the phone device ID. It just needs to be an unique number that identifies the device). |
 **remote_client_disp_name** | **string**| Specify the client device name |
 **remote_client_api_level** | **string**| Set the api-level to 4 (latest required client api-level is 4) |
 **remote_client_os_type** | **string**| Specify the client OS type |
 **remote_client_app_version** | **string**| Specify the client app version |
 **remote_client_os_version** | **string**| Specify the client OS version |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestdeviceaccess**
> \Swagger\Client\Model\Commands requestdeviceaccess($userid, $remote_client_id, $remote_client_disp_name)

RMC_Related_API - requestdeviceaccess is used to request device access permission before logging in to a client application

Used to request a RMC device access permission before logging into the client application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RmcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userid = "userid_example"; // string | Username
$remote_client_id = "remote_client_id_example"; // string | Specify the client id
$remote_client_disp_name = "remote_client_disp_name_example"; // string | Specify the clients display name

try {
    $result = $apiInstance->requestdeviceaccess($userid, $remote_client_id, $remote_client_disp_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmcApi->requestdeviceaccess: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rmcloginguest**
> \Swagger\Client\Model\Commands rmcloginguest($userid, $password, $remote_client_id, $remote_client_disp_name, $remote_client_api_level, $remote_client_os_type, $remote_client_app_version, $remote_client_os_version)

RMC_Related_API - rmcloginguest is a remote client login api

Client login API

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RmcApi(
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
    $result = $apiInstance->rmcloginguest($userid, $password, $remote_client_id, $remote_client_disp_name, $remote_client_api_level, $remote_client_os_type, $remote_client_app_version, $remote_client_os_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmcApi->rmcloginguest: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

