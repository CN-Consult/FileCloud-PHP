# Swagger\Client\SecurityPermissionApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAclEntry**](SecurityPermissionApi.md#addAclEntry) | **POST** /core/addaclentry | 
[**deleteAcl**](SecurityPermissionApi.md#deleteAcl) | **POST** /core/deleteacl | 
[**deleteAclEntry**](SecurityPermissionApi.md#deleteAclEntry) | **POST** /core/deleteaclentry | 
[**getAcl**](SecurityPermissionApi.md#getAcl) | **GET** /core/getacl | 
[**getEffectiveAcl**](SecurityPermissionApi.md#getEffectiveAcl) | **GET** /core/geteffectiveacl | 
[**setAclInheritance**](SecurityPermissionApi.md#setAclInheritance) | **POST** /core/setaclinheritance | 


# **addAclEntry**
> string addAclEntry($path, $type, $value, $perm, $flag)



Add security permissions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityPermissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Specify the path
$type = "type_example"; // string | Set as 'user' | 'group' to assign permissions to a user or a group
$value = "value_example"; // string | If type is 'user' then specify the user email id, for 'group' specify groud id
$perm = "perm_example"; // string | R - Read, W - Write, D - Delete, S - Share
$flag = "flag_example"; // string | Set as 'allow' / 'deny'

try {
    $result = $apiInstance->addAclEntry($path, $type, $value, $perm, $flag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityPermissionApi->addAclEntry: ', $e->getMessage(), PHP_EOL;
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

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAcl**
> string deleteAcl($path)



Delete security permissions on the specified path

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityPermissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Specify the path

try {
    $result = $apiInstance->deleteAcl($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityPermissionApi->deleteAcl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Specify the path |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAclEntry**
> string deleteAclEntry($path, $type, $value)



Delete security permissions on the path for a specific user or group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityPermissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Specify the path
$type = "type_example"; // string | Set as 'user' | 'group' to assign permissions to a user or a group
$value = "value_example"; // string | If type is 'user' then specify the user email id, for 'group' specify groud id

try {
    $result = $apiInstance->deleteAclEntry($path, $type, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityPermissionApi->deleteAclEntry: ', $e->getMessage(), PHP_EOL;
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

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAcl**
> string getAcl($path)



Get security permission details for specified path

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityPermissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Specify the path

try {
    $result = $apiInstance->getAcl($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityPermissionApi->getAcl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Specify the path |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEffectiveAcl**
> string getEffectiveAcl($path, $emailid)



Set security permissions on the specified path to inherit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityPermissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Specify the path
$emailid = "emailid_example"; // string | Emaild of the user

try {
    $result = $apiInstance->getEffectiveAcl($path, $emailid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityPermissionApi->getEffectiveAcl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Specify the path |
 **emailid** | **string**| Emaild of the user |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAclInheritance**
> string setAclInheritance($path, $inherit)



Set security permissions on the specified path to inherit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityPermissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Specify the path
$inherit = "inherit_example"; // string | 1|0 Set 1 to enable inheritance and 0 to disable it

try {
    $result = $apiInstance->setAclInheritance($path, $inherit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityPermissionApi->setAclInheritance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Specify the path |
 **inherit** | **string**| 1|0 Set 1 to enable inheritance and 0 to disable it |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

