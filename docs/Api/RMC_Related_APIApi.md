# Swagger\Client\RMC_Related_APIApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**coreAckrmccommandsPost**](RMC_Related_APIApi.md#coreAckrmccommandsPost) | **POST** /core/ackrmccommands | 
[**coreApprovedeviceaccessPost**](RMC_Related_APIApi.md#coreApprovedeviceaccessPost) | **POST** /core/approvedeviceaccess | 
[**coreDeletedevicePost**](RMC_Related_APIApi.md#coreDeletedevicePost) | **POST** /core/deletedevice | 
[**coreGetrmcclientsGet**](RMC_Related_APIApi.md#coreGetrmcclientsGet) | **GET** /core/getrmcclients | 
[**coreGetrmccommandsGet**](RMC_Related_APIApi.md#coreGetrmccommandsGet) | **GET** /core/getrmccommands | 
[**coreLoginguestPost**](RMC_Related_APIApi.md#coreLoginguestPost) | **POST** /core/loginguest | 
[**coreRequestdeviceaccessPost**](RMC_Related_APIApi.md#coreRequestdeviceaccessPost) | **POST** /core/requestdeviceaccess | 


# **coreAckrmccommandsPost**
> \Swagger\Client\Model\AckrmccommandsResponse[] coreAckrmccommandsPost($command_rids)



Acknowledge RMC Commands

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RMC_Related_APIApi();
$command_rids = "command_rids_example"; // string | Command Id number

try {
    $result = $api_instance->coreAckrmccommandsPost($command_rids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RMC_Related_APIApi->coreAckrmccommandsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_rids** | **string**| Command Id number |

### Return type

[**\Swagger\Client\Model\AckrmccommandsResponse[]**](../Model/AckrmccommandsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreApprovedeviceaccessPost**
> \Swagger\Client\Model\ApprovedeviceaccessResponse[] coreApprovedeviceaccessPost($op, $remote_client_id)



Approve RMC Client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RMC_Related_APIApi();
$op = "op_example"; // string | Operation name
$remote_client_id = "remote_client_id_example"; // string | Remote Client ID

try {
    $result = $api_instance->coreApprovedeviceaccessPost($op, $remote_client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RMC_Related_APIApi->coreApprovedeviceaccessPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **op** | **string**| Operation name |
 **remote_client_id** | **string**| Remote Client ID |

### Return type

[**\Swagger\Client\Model\ApprovedeviceaccessResponse[]**](../Model/ApprovedeviceaccessResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreDeletedevicePost**
> \Swagger\Client\Model\DeletedeviceResponse[] coreDeletedevicePost($op, $remote_client_id)



Delete RMC Device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RMC_Related_APIApi();
$op = "op_example"; // string | Operation name
$remote_client_id = "remote_client_id_example"; // string | Remote Client ID

try {
    $result = $api_instance->coreDeletedevicePost($op, $remote_client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RMC_Related_APIApi->coreDeletedevicePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **op** | **string**| Operation name |
 **remote_client_id** | **string**| Remote Client ID |

### Return type

[**\Swagger\Client\Model\DeletedeviceResponse[]**](../Model/DeletedeviceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGetrmcclientsGet**
> \Swagger\Client\Model\GetrmcclientsResponse[] coreGetrmcclientsGet($op, $userid, $start, $end)



Get details of all the RMC clients logged in

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RMC_Related_APIApi();
$op = "op_example"; // string | Operation name
$userid = "userid_example"; // string | Username
$start = "start_example"; // string | Start index of records to retrieve, Note: Index starts from 0. Default 0
$end = "end_example"; // string | Set to any number of record you want to view at once. Default 10

try {
    $result = $api_instance->coreGetrmcclientsGet($op, $userid, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RMC_Related_APIApi->coreGetrmcclientsGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\GetrmcclientsResponse[]**](../Model/GetrmcclientsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGetrmccommandsGet**
> \Swagger\Client\Model\GetrmccommandsResponse[] coreGetrmccommandsGet($userid, $remote_client_id)



Get RMC Commands

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RMC_Related_APIApi();
$userid = "userid_example"; // string | User email id
$remote_client_id = "remote_client_id_example"; // string | Remote Client Id

try {
    $result = $api_instance->coreGetrmccommandsGet($userid, $remote_client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RMC_Related_APIApi->coreGetrmccommandsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userid** | **string**| User email id |
 **remote_client_id** | **string**| Remote Client Id |

### Return type

[**\Swagger\Client\Model\GetrmccommandsResponse[]**](../Model/GetrmccommandsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreLoginguestPost**
> \Swagger\Client\Model\LoginguestResponse[] coreLoginguestPost($userid, $password, $remote_client_id, $remote_client_disp_name, $remote_client_api_level, $remote_client_os_type, $remote_client_app_version, $remote_client_os_version)



Client login API

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RMC_Related_APIApi();
$userid = "userid_example"; // string | Specify the username
$password = "password_example"; // string | Specify the password
$remote_client_id = "remote_client_id_example"; // string | Specify the unique identifier from the client (It can be the device MAC ID or the phone device ID. It just needs to be an unique number that identifies the device).
$remote_client_disp_name = "remote_client_disp_name_example"; // string | Specify the client device name
$remote_client_api_level = "remote_client_api_level_example"; // string | Set the api-level to 4 (latest required client api-level is 4)
$remote_client_os_type = "remote_client_os_type_example"; // string | Specify the client OS type
$remote_client_app_version = "remote_client_app_version_example"; // string | Specify the client app version
$remote_client_os_version = "remote_client_os_version_example"; // string | Specify the client OS version

try {
    $result = $api_instance->coreLoginguestPost($userid, $password, $remote_client_id, $remote_client_disp_name, $remote_client_api_level, $remote_client_os_type, $remote_client_app_version, $remote_client_os_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RMC_Related_APIApi->coreLoginguestPost: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\LoginguestResponse[]**](../Model/LoginguestResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreRequestdeviceaccessPost**
> \Swagger\Client\Model\RequestdeviceaccessResponse[] coreRequestdeviceaccessPost($userid)



Requesr RMC device access permission

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RMC_Related_APIApi();
$userid = "userid_example"; // string | Username

try {
    $result = $api_instance->coreRequestdeviceaccessPost($userid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RMC_Related_APIApi->coreRequestdeviceaccessPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userid** | **string**| Username |

### Return type

[**\Swagger\Client\Model\RequestdeviceaccessResponse[]**](../Model/RequestdeviceaccessResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

