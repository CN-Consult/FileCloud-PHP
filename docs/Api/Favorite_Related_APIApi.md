# Swagger\Client\Favorite_Related_APIApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**coreAddfavoritelistPost**](Favorite_Related_APIApi.md#coreAddfavoritelistPost) | **POST** /core/addfavoritelist | 
[**coreClearfavoritesinnamedlistPost**](Favorite_Related_APIApi.md#coreClearfavoritesinnamedlistPost) | **POST** /core/clearfavoritesinnamedlist | 
[**coreGetallfavoritelistsGet**](Favorite_Related_APIApi.md#coreGetallfavoritelistsGet) | **GET** /core/getallfavoritelists | 
[**coreGetfavoritelistforitemGet**](Favorite_Related_APIApi.md#coreGetfavoritelistforitemGet) | **GET** /core/getfavoritelistforitem | 
[**coreGetfavoritesinlistGet**](Favorite_Related_APIApi.md#coreGetfavoritesinlistGet) | **GET** /core/getfavoritesinlist | 
[**coreGetfavoritesinnamedlistGet**](Favorite_Related_APIApi.md#coreGetfavoritesinnamedlistGet) | **GET** /core/getfavoritesinnamedlist | 
[**coreRemovefavoritelistPost**](Favorite_Related_APIApi.md#coreRemovefavoritelistPost) | **POST** /core/removefavoritelist | 
[**coreReplacefavoritelistPost**](Favorite_Related_APIApi.md#coreReplacefavoritelistPost) | **POST** /core/replacefavoritelist | 
[**coreSetfavoritePost**](Favorite_Related_APIApi.md#coreSetfavoritePost) | **POST** /core/setfavorite | 
[**coreUnsetfavoritePost**](Favorite_Related_APIApi.md#coreUnsetfavoritePost) | **POST** /core/unsetfavorite | 
[**coreUpdatefavoritelistPost**](Favorite_Related_APIApi.md#coreUpdatefavoritelistPost) | **POST** /core/updatefavoritelist | 


# **coreAddfavoritelistPost**
> \Swagger\Client\Model\AddfavoritelistResponse[] coreAddfavoritelistPost($name)



User can add new favorite list in the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Favorite_Related_APIApi();
$name = "name_example"; // string | Name of the file to be added to favorites.

try {
    $result = $api_instance->coreAddfavoritelistPost($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Favorite_Related_APIApi->coreAddfavoritelistPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the file to be added to favorites. |

### Return type

[**\Swagger\Client\Model\AddfavoritelistResponse[]**](../Model/AddfavoritelistResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreClearfavoritesinnamedlistPost**
> \Swagger\Client\Model\ClearfavoritesinnamedlistResponse[] coreClearfavoritesinnamedlistPost($name)



User can clear favorites from the named list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Favorite_Related_APIApi();
$name = "name_example"; // string | Name of the Favorite List

try {
    $result = $api_instance->coreClearfavoritesinnamedlistPost($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Favorite_Related_APIApi->coreClearfavoritesinnamedlistPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the Favorite List |

### Return type

[**\Swagger\Client\Model\ClearfavoritesinnamedlistResponse[]**](../Model/ClearfavoritesinnamedlistResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGetallfavoritelistsGet**
> \Swagger\Client\Model\GetallfavoritelistsResponse[] coreGetallfavoritelistsGet($type)



User can get all the favorites list of the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Favorite_Related_APIApi();
$type = "type_example"; // string | Type here is favorites

try {
    $result = $api_instance->coreGetallfavoritelistsGet($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Favorite_Related_APIApi->coreGetallfavoritelistsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Type here is favorites |

### Return type

[**\Swagger\Client\Model\GetallfavoritelistsResponse[]**](../Model/GetallfavoritelistsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGetfavoritelistforitemGet**
> \Swagger\Client\Model\GetfavoritelistforitemResponse[] coreGetfavoritelistforitemGet($path)



User can get favorite list available for the item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Favorite_Related_APIApi();
$path = "path_example"; // string | Specify the path of file

try {
    $result = $api_instance->coreGetfavoritelistforitemGet($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Favorite_Related_APIApi->coreGetfavoritelistforitemGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Specify the path of file |

### Return type

[**\Swagger\Client\Model\GetfavoritelistforitemResponse[]**](../Model/GetfavoritelistforitemResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGetfavoritesinlistGet**
> \Swagger\Client\Model\GetfavoritesinlistResponse[] coreGetfavoritesinlistGet($id)



User can get all the favorites from list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Favorite_Related_APIApi();
$id = "id_example"; // string | Id of the Favorite List

try {
    $result = $api_instance->coreGetfavoritesinlistGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Favorite_Related_APIApi->coreGetfavoritesinlistGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of the Favorite List |

### Return type

[**\Swagger\Client\Model\GetfavoritesinlistResponse[]**](../Model/GetfavoritesinlistResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGetfavoritesinnamedlistGet**
> \Swagger\Client\Model\GetfavoritesinnamedlistResponse[] coreGetfavoritesinnamedlistGet($name)



User can get all the favorites from named list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Favorite_Related_APIApi();
$name = "name_example"; // string | Name of the Favorite List

try {
    $result = $api_instance->coreGetfavoritesinnamedlistGet($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Favorite_Related_APIApi->coreGetfavoritesinnamedlistGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the Favorite List |

### Return type

[**\Swagger\Client\Model\GetfavoritesinnamedlistResponse[]**](../Model/GetfavoritesinnamedlistResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreRemovefavoritelistPost**
> \Swagger\Client\Model\RemovefavoritelistResponse[] coreRemovefavoritelistPost($id)



User can remove favorite list from the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Favorite_Related_APIApi();
$id = "id_example"; // string | Id no. of the favorite list to be deleted

try {
    $result = $api_instance->coreRemovefavoritelistPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Favorite_Related_APIApi->coreRemovefavoritelistPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id no. of the favorite list to be deleted |

### Return type

[**\Swagger\Client\Model\RemovefavoritelistResponse[]**](../Model/RemovefavoritelistResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreReplacefavoritelistPost**
> \Swagger\Client\Model\ReplacefavoritelistResponse[] coreReplacefavoritelistPost($id, $count)



User replace favorite list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Favorite_Related_APIApi();
$id = "id_example"; // string | Id number of the Favorite list
$count = "count_example"; // string | Number of files

try {
    $result = $api_instance->coreReplacefavoritelistPost($id, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Favorite_Related_APIApi->coreReplacefavoritelistPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id number of the Favorite list |
 **count** | **string**| Number of files |

### Return type

[**\Swagger\Client\Model\ReplacefavoritelistResponse[]**](../Model/ReplacefavoritelistResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreSetfavoritePost**
> \Swagger\Client\Model\SetfavoriteResponse[] coreSetfavoritePost($name, $id)



User can add file to their Favorite list in the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Favorite_Related_APIApi();
$name = "name_example"; // string | Name of the file to be added to favorites.
$id = "id_example"; // string | Id number of the Favorite list

try {
    $result = $api_instance->coreSetfavoritePost($name, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Favorite_Related_APIApi->coreSetfavoritePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the file to be added to favorites. |
 **id** | **string**| Id number of the Favorite list |

### Return type

[**\Swagger\Client\Model\SetfavoriteResponse[]**](../Model/SetfavoriteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreUnsetfavoritePost**
> \Swagger\Client\Model\UnsetfavoriteResponse[] coreUnsetfavoritePost($id, $name)



User can remove file from their Favorite list in the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Favorite_Related_APIApi();
$id = "id_example"; // string | Id number of the Favorite list
$name = "name_example"; // string | Name of the file to be added to favorites.

try {
    $result = $api_instance->coreUnsetfavoritePost($id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Favorite_Related_APIApi->coreUnsetfavoritePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id number of the Favorite list |
 **name** | **string**| Name of the file to be added to favorites. |

### Return type

[**\Swagger\Client\Model\UnsetfavoriteResponse[]**](../Model/UnsetfavoriteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreUpdatefavoritelistPost**
> \Swagger\Client\Model\UpdatefavoritelistResponse[] coreUpdatefavoritelistPost($id, $name)



User can update favorite list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\Favorite_Related_APIApi();
$id = "id_example"; // string | Id number of the Favorite list
$name = "name_example"; // string | Name of the file to be added to favorites.

try {
    $result = $api_instance->coreUpdatefavoritelistPost($id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Favorite_Related_APIApi->coreUpdatefavoritelistPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id number of the Favorite list |
 **name** | **string**| Name of the file to be added to favorites. |

### Return type

[**\Swagger\Client\Model\UpdatefavoritelistResponse[]**](../Model/UpdatefavoritelistResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

