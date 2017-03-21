# Swagger\Client\Security_Permission_Related_APIApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**coreAddaclentryPost**](Security_Permission_Related_APIApi.md#coreAddaclentryPost) | **POST** /core/addaclentry | 
[**coreDeleteaclPost**](Security_Permission_Related_APIApi.md#coreDeleteaclPost) | **POST** /core/deleteacl | 
[**coreDeleteaclentryPost**](Security_Permission_Related_APIApi.md#coreDeleteaclentryPost) | **POST** /core/deleteaclentry | 
[**coreGetaclGet**](Security_Permission_Related_APIApi.md#coreGetaclGet) | **GET** /core/getacl | 
[**coreGeteffectiveaclGet**](Security_Permission_Related_APIApi.md#coreGeteffectiveaclGet) | **GET** /core/geteffectiveacl | 
[**coreSetaclinheritancePost**](Security_Permission_Related_APIApi.md#coreSetaclinheritancePost) | **POST** /core/setaclinheritance | 


# **coreAddaclentryPost**
> \Swagger\Client\Model\AddaclentryResponse[] coreAddaclentryPost($path, $type, $value, $perm, $flag)



Add security permissions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Security_Permission_Related_APIApi();
$path = "path_example"; // string | Specify the path
$type = "type_example"; // string | Set as 'user' | 'group' to assign permissions to a user or a group
$value = "value_example"; // string | If type is 'user' then specify the user email id, for 'group' specify groud id
$perm = "perm_example"; // string | R - Read, W - Write, D - Delete, S - Share
$flag = "flag_example"; // string | Set as 'allow' / 'deny'

try {
    $result = $api_instance->coreAddaclentryPost($path, $type, $value, $perm, $flag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Security_Permission_Related_APIApi->coreAddaclentryPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Specify the path |
 **type** | **string**| Set as &#39;user&#39; | &#39;group&#39; to assign permissions to a user or a group |
 **value** | **string**| If type is &#39;user&#39; then specify the user email id, for &#39;group&#39; specify groud id |
 **perm** | **string**| R - Read, W - Write, D - Delete, S - Share |
 **flag** | **string**| Set as &#39;allow&#39; / &#39;deny&#39; |

### Return type

[**\Swagger\Client\Model\AddaclentryResponse[]**](../Model/AddaclentryResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreDeleteaclPost**
> \Swagger\Client\Model\DeleteaclResponse[] coreDeleteaclPost($path)



Delete security permissions on the specified path

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Security_Permission_Related_APIApi();
$path = "path_example"; // string | Specify the path

try {
    $result = $api_instance->coreDeleteaclPost($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Security_Permission_Related_APIApi->coreDeleteaclPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Specify the path |

### Return type

[**\Swagger\Client\Model\DeleteaclResponse[]**](../Model/DeleteaclResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreDeleteaclentryPost**
> \Swagger\Client\Model\DeleteaclentryResponse[] coreDeleteaclentryPost($path, $type, $value)



Delete security permissions on the path for a specific user or group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Security_Permission_Related_APIApi();
$path = "path_example"; // string | Specify the path
$type = "type_example"; // string | Set as 'user' | 'group' to assign permissions to a user or a group
$value = "value_example"; // string | If type is 'user' then specify the user email id, for 'group' specify groud id

try {
    $result = $api_instance->coreDeleteaclentryPost($path, $type, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Security_Permission_Related_APIApi->coreDeleteaclentryPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Specify the path |
 **type** | **string**| Set as &#39;user&#39; | &#39;group&#39; to assign permissions to a user or a group |
 **value** | **string**| If type is &#39;user&#39; then specify the user email id, for &#39;group&#39; specify groud id |

### Return type

[**\Swagger\Client\Model\DeleteaclentryResponse[]**](../Model/DeleteaclentryResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGetaclGet**
> \Swagger\Client\Model\GetaclResponse[] coreGetaclGet($path)



Get security permission details for specified path

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Security_Permission_Related_APIApi();
$path = "path_example"; // string | Specify the path

try {
    $result = $api_instance->coreGetaclGet($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Security_Permission_Related_APIApi->coreGetaclGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Specify the path |

### Return type

[**\Swagger\Client\Model\GetaclResponse[]**](../Model/GetaclResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGeteffectiveaclGet**
> \Swagger\Client\Model\GeteffectiveaclResponse[] coreGeteffectiveaclGet($path, $emailid)



Set security permissions on the specified path to inherit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Security_Permission_Related_APIApi();
$path = "path_example"; // string | Specify the path
$emailid = "emailid_example"; // string | Emaild of the user

try {
    $result = $api_instance->coreGeteffectiveaclGet($path, $emailid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Security_Permission_Related_APIApi->coreGeteffectiveaclGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Specify the path |
 **emailid** | **string**| Emaild of the user |

### Return type

[**\Swagger\Client\Model\GeteffectiveaclResponse[]**](../Model/GeteffectiveaclResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreSetaclinheritancePost**
> \Swagger\Client\Model\SetaclinheritanceResponse[] coreSetaclinheritancePost($path, $inherit)



Set security permissions on the specified path to inherit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Security_Permission_Related_APIApi();
$path = "path_example"; // string | Specify the path
$inherit = "inherit_example"; // string | 1|0 Set 1 to enable inheritance and 0 to disable it

try {
    $result = $api_instance->coreSetaclinheritancePost($path, $inherit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Security_Permission_Related_APIApi->coreSetaclinheritancePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Specify the path |
 **inherit** | **string**| 1|0 Set 1 to enable inheritance and 0 to disable it |

### Return type

[**\Swagger\Client\Model\SetaclinheritanceResponse[]**](../Model/SetaclinheritanceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

