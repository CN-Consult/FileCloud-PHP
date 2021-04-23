# Swagger\Client\FavoriteApi

All URIs are relative to *https://swaggerfc.getfilecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addfavoritelist**](FavoriteApi.md#addfavoritelist) | **POST** /core/addfavoritelist | Favorite_Related_API - addfavoritelist is used to add files to a favorite list in the system
[**clearfavoritesinnamedlist**](FavoriteApi.md#clearfavoritesinnamedlist) | **POST** /core/clearfavoritesinnamedlist | Favorite_Related_API - clearfavoritesinnamedlist is used to remove files from the favorite list
[**getallfavoritelists**](FavoriteApi.md#getallfavoritelists) | **GET** /core/getallfavoritelists | Favorite_Related_API - getallfavoritelists is used to retrieve all the favorite lists in system
[**getfavoritelistforitem**](FavoriteApi.md#getfavoritelistforitem) | **GET** /core/getfavoritelistforitem | Favorite_Related_API - getfavoritelistforitem is used to get all the available favorite lists for a selected item
[**getfavoritesinlist**](FavoriteApi.md#getfavoritesinlist) | **GET** /core/getfavoritesinlist | Favorite_Related_API - getfavoritesinlist is used to get all the items in a favorite list
[**getfavoritesinnamedlist**](FavoriteApi.md#getfavoritesinnamedlist) | **GET** /core/getfavoritesinnamedlist | Favorite_Related_API - getfavoritesinnamedlist is used to get all the items from the name of favorite list specified
[**removefavoritelist**](FavoriteApi.md#removefavoritelist) | **POST** /core/removefavoritelist | Favorite_Related_API - removefavoritelist is used to remove the favorite list from system
[**replacefavoritelist**](FavoriteApi.md#replacefavoritelist) | **POST** /core/replacefavoritelist | Favorite_Related_API - replacefavoritelist is used to replace a favorite list
[**setfavorite**](FavoriteApi.md#setfavorite) | **POST** /core/setfavorite | Favorite_Related_API - setfavorite is used to add a file to a favorite list
[**unsetfavorite**](FavoriteApi.md#unsetfavorite) | **POST** /core/unsetfavorite | Favorite_Related_API - unsetfavorite is used to remove a file from the favorite list
[**updatefavoritelist**](FavoriteApi.md#updatefavoritelist) | **POST** /core/updatefavoritelist | Favorite_Related_API - updatefavoritelist is used to update an existing favorite list


# **addfavoritelist**
> \Swagger\Client\Model\Commands addfavoritelist($name)

Favorite_Related_API - addfavoritelist is used to add files to a favorite list in the system

User can add files to either an existing or new favorite list in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FavoriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Name of the file to be added to favorites.

try {
    $result = $apiInstance->addfavoritelist($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoriteApi->addfavoritelist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the file to be added to favorites. |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearfavoritesinnamedlist**
> \Swagger\Client\Model\Commands clearfavoritesinnamedlist($name)

Favorite_Related_API - clearfavoritesinnamedlist is used to remove files from the favorite list

User can remove files from the existing favorite lists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FavoriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Name of the Favorite List

try {
    $result = $apiInstance->clearfavoritesinnamedlist($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoriteApi->clearfavoritesinnamedlist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the Favorite List |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getallfavoritelists**
> \Swagger\Client\Model\Favoritelists getallfavoritelists($type)

Favorite_Related_API - getallfavoritelists is used to retrieve all the favorite lists in system

User can view all the existing favorites lists which are present in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FavoriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = "type_example"; // string | Type here is favorites

try {
    $result = $apiInstance->getallfavoritelists($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoriteApi->getallfavoritelists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Type here is favorites |

### Return type

[**\Swagger\Client\Model\Favoritelists**](../Model/Favoritelists.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getfavoritelistforitem**
> \Swagger\Client\Model\Favoritelists getfavoritelistforitem($path)

Favorite_Related_API - getfavoritelistforitem is used to get all the available favorite lists for a selected item

User can get all the available favorite lists for the item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FavoriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Specify the path of file

try {
    $result = $apiInstance->getfavoritelistforitem($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoriteApi->getfavoritelistforitem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Specify the path of file |

### Return type

[**\Swagger\Client\Model\Favoritelists**](../Model/Favoritelists.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getfavoritesinlist**
> \Swagger\Client\Model\Entries getfavoritesinlist($id)

Favorite_Related_API - getfavoritesinlist is used to get all the items in a favorite list

User can get all the items which are associated to a selected favorite list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FavoriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Id of the Favorite List

try {
    $result = $apiInstance->getfavoritesinlist($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoriteApi->getfavoritesinlist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of the Favorite List |

### Return type

[**\Swagger\Client\Model\Entries**](../Model/Entries.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getfavoritesinnamedlist**
> \Swagger\Client\Model\Entries getfavoritesinnamedlist($name)

Favorite_Related_API - getfavoritesinnamedlist is used to get all the items from the name of favorite list specified

User can get all the items which are present by specifying the name of a favorite list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FavoriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Name of the Favorite List

try {
    $result = $apiInstance->getfavoritesinnamedlist($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoriteApi->getfavoritesinnamedlist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the Favorite List |

### Return type

[**\Swagger\Client\Model\Entries**](../Model/Entries.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removefavoritelist**
> \Swagger\Client\Model\Commands removefavoritelist($id)

Favorite_Related_API - removefavoritelist is used to remove the favorite list from system

User can remove the existing favorite list from the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FavoriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Id number of the favorite list to be deleted

try {
    $result = $apiInstance->removefavoritelist($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoriteApi->removefavoritelist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id number of the favorite list to be deleted |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replacefavoritelist**
> \Swagger\Client\Model\Commands replacefavoritelist($id, $count)

Favorite_Related_API - replacefavoritelist is used to replace a favorite list

User can replace a favorite list in system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FavoriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Id number of the favorite list
$count = "count_example"; // string | Number of files

try {
    $result = $apiInstance->replacefavoritelist($id, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoriteApi->replacefavoritelist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id number of the favorite list |
 **count** | **string**| Number of files |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setfavorite**
> \Swagger\Client\Model\Commands setfavorite($id, $name)

Favorite_Related_API - setfavorite is used to add a file to a favorite list

User can add file to their Favorite list in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FavoriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Id number of the favorite list
$name = "name_example"; // string | Name of the file to be added to favorites.

try {
    $result = $apiInstance->setfavorite($id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoriteApi->setfavorite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id number of the favorite list |
 **name** | **string**| Name of the file to be added to favorites. |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unsetfavorite**
> \Swagger\Client\Model\Commands unsetfavorite($id, $name)

Favorite_Related_API - unsetfavorite is used to remove a file from the favorite list

User can remove a file from their Favorite list in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FavoriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Id number of the favorite list
$name = "name_example"; // string | Name of the file to be added to favorites.

try {
    $result = $apiInstance->unsetfavorite($id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoriteApi->unsetfavorite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id number of the favorite list |
 **name** | **string**| Name of the file to be added to favorites. |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatefavoritelist**
> \Swagger\Client\Model\Commands updatefavoritelist($id, $name)

Favorite_Related_API - updatefavoritelist is used to update an existing favorite list

User can update an existing favorite list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FavoriteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Id number of the favorite list
$name = "name_example"; // string | Name of the file to be added to favorites.

try {
    $result = $apiInstance->updatefavoritelist($id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoriteApi->updatefavoritelist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id number of the favorite list |
 **name** | **string**| Name of the file to be added to favorites. |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

