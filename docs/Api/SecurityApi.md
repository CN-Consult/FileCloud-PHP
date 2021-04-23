# Swagger\Client\SecurityApi

All URIs are relative to *https://swaggerfc.getfilecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addaclentry**](SecurityApi.md#addaclentry) | **POST** /core/addaclentry | Security_Permission_Related_API - addaclentry is used to add folder level permissions to a selected folder for a user or group in a particular path
[**deleteacl**](SecurityApi.md#deleteacl) | **POST** /core/deleteacl | Security_Permission_Related_API - deleteacl is used to delete folder level security permissions for a particular path
[**deleteaclentry**](SecurityApi.md#deleteaclentry) | **POST** /core/deleteaclentry | Security_Permission_Related_API - deleteaclentry is used to delete folder level permissions to a selected folder for a user or group in a particular path
[**getacl**](SecurityApi.md#getacl) | **POST** /core/getacl | Security_Permission_Related_API - getacl is used to view the security permission details for a specific path
[**geteffectiveacl**](SecurityApi.md#geteffectiveacl) | **POST** /core/geteffectiveacl | Security_Permission_Related_API - geteffectiveacl is used to check effective permissions for any user when a particular path is shared with them
[**setaclinheritance**](SecurityApi.md#setaclinheritance) | **POST** /core/setaclinheritance | Security_Permission_Related_API - setaclinheritance is used to set permissions for a folder which are exactly the same as the top level folder&#39;s permissions


# **addaclentry**
> \Swagger\Client\Model\Commands addaclentry($path, $type, $value, $perm, $flag)

Security_Permission_Related_API - addaclentry is used to add folder level permissions to a selected folder for a user or group in a particular path

User can add folder level security permission settings which are applicable only when sharing with particular user or group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityApi(
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
    $result = $apiInstance->addaclentry($path, $type, $value, $perm, $flag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->addaclentry: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteacl**
> \Swagger\Client\Model\Commands deleteacl($path)

Security_Permission_Related_API - deleteacl is used to delete folder level security permissions for a particular path

Used to delete security permissions on the specified path

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Specify the path

try {
    $result = $apiInstance->deleteacl($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->deleteacl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Specify the path |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteaclentry**
> \Swagger\Client\Model\Commands deleteaclentry($path, $type, $value)

Security_Permission_Related_API - deleteaclentry is used to delete folder level permissions to a selected folder for a user or group in a particular path

User can delete folder level security permission settings which are applicable only when sharing with particular user or group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Specify the path
$type = "type_example"; // string | Set as 'user' | 'group' to assign permissions to a user or a group
$value = "value_example"; // string | If type is 'user' then specify the user email id, for 'group' specify groud id

try {
    $result = $apiInstance->deleteaclentry($path, $type, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->deleteaclentry: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getacl**
> \Swagger\Client\Model\Acls getacl($path)

Security_Permission_Related_API - getacl is used to view the security permission details for a specific path

USed to get security permission details for specified path

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | User email id

try {
    $result = $apiInstance->getacl($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->getacl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| User email id |

### Return type

[**\Swagger\Client\Model\Acls**](../Model/Acls.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **geteffectiveacl**
> \Swagger\Client\Model\Permissions geteffectiveacl($path, $emailid)

Security_Permission_Related_API - geteffectiveacl is used to check effective permissions for any user when a particular path is shared with them

Used to check for effective permissions for a user for a particular shared path such as read, write, delete, share or manage permissions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Specify the path
$emailid = "emailid_example"; // string | Emaild of the user

try {
    $result = $apiInstance->geteffectiveacl($path, $emailid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->geteffectiveacl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Specify the path |
 **emailid** | **string**| Emaild of the user |

### Return type

[**\Swagger\Client\Model\Permissions**](../Model/Permissions.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setaclinheritance**
> \Swagger\Client\Model\Commands setaclinheritance($path, $inherit)

Security_Permission_Related_API - setaclinheritance is used to set permissions for a folder which are exactly the same as the top level folder's permissions

User can set same security permissions on the specified path to inherit as it's parent folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Specify the path to set acl permissions as it's parent folder
$inherit = "inherit_example"; // string | 1|0 Set 1 to enable inheritance and 0 to disable it

try {
    $result = $apiInstance->setaclinheritance($path, $inherit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->setaclinheritance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Specify the path to set acl permissions as it&#39;s parent folder |
 **inherit** | **string**| 1|0 Set 1 to enable inheritance and 0 to disable it |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

