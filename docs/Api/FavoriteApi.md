# Swagger\Client\FavoriteApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addFavoriteList**](FavoriteApi.md#addFavoriteList) | **POST** /core/addfavoritelist | 
[**clearFavoritesInNamedList**](FavoriteApi.md#clearFavoritesInNamedList) | **POST** /core/clearfavoritesinnamedlist | 
[**getAllFavoriteLists**](FavoriteApi.md#getAllFavoriteLists) | **GET** /core/getallfavoritelists | 
[**getFavoriteListForItem**](FavoriteApi.md#getFavoriteListForItem) | **GET** /core/getfavoritelistforitem | 
[**getFavoritesInList**](FavoriteApi.md#getFavoritesInList) | **GET** /core/getfavoritesinlist | 
[**getFavoritesInNamedList**](FavoriteApi.md#getFavoritesInNamedList) | **GET** /core/getfavoritesinnamedlist | 
[**removeFavoriteList**](FavoriteApi.md#removeFavoriteList) | **POST** /core/removefavoritelist | 
[**replaceFavoriteList**](FavoriteApi.md#replaceFavoriteList) | **POST** /core/replacefavoritelist | 
[**setFavorite**](FavoriteApi.md#setFavorite) | **POST** /core/setfavorite | 
[**unsetFavorite**](FavoriteApi.md#unsetFavorite) | **POST** /core/unsetfavorite | 
[**updateFavoriteList**](FavoriteApi.md#updateFavoriteList) | **POST** /core/updatefavoritelist | 


# **addFavoriteList**
> string addFavoriteList($name)



User can add new favorite list in the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FavoriteApi();
$name = "name_example"; // string | Name of the file to be added to favorites.

try {
    $result = $api_instance->addFavoriteList($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoriteApi->addFavoriteList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the file to be added to favorites. |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearFavoritesInNamedList**
> string clearFavoritesInNamedList($name)



User can clear favorites from the named list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FavoriteApi();
$name = "name_example"; // string | Name of the Favorite List

try {
    $result = $api_instance->clearFavoritesInNamedList($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoriteApi->clearFavoritesInNamedList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the Favorite List |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllFavoriteLists**
> string getAllFavoriteLists($type)



User can get all the favorites list of the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FavoriteApi();
$type = "type_example"; // string | Type here is favorites

try {
    $result = $api_instance->getAllFavoriteLists($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoriteApi->getAllFavoriteLists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Type here is favorites |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFavoriteListForItem**
> string getFavoriteListForItem($path)



User can get favorite list available for the item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FavoriteApi();
$path = "path_example"; // string | Specify the path of file

try {
    $result = $api_instance->getFavoriteListForItem($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoriteApi->getFavoriteListForItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Specify the path of file |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFavoritesInList**
> string getFavoritesInList($id)



User can get all the favorites from list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FavoriteApi();
$id = "id_example"; // string | Id of the Favorite List

try {
    $result = $api_instance->getFavoritesInList($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoriteApi->getFavoritesInList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of the Favorite List |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFavoritesInNamedList**
> string getFavoritesInNamedList($name)



User can get all the favorites from named list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FavoriteApi();
$name = "name_example"; // string | Name of the Favorite List

try {
    $result = $api_instance->getFavoritesInNamedList($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoriteApi->getFavoritesInNamedList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the Favorite List |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeFavoriteList**
> string removeFavoriteList($id)



User can remove favorite list from the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FavoriteApi();
$id = "id_example"; // string | Id no. of the favorite list to be deleted

try {
    $result = $api_instance->removeFavoriteList($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoriteApi->removeFavoriteList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id no. of the favorite list to be deleted |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceFavoriteList**
> string replaceFavoriteList($id, $count)



User replace favorite list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FavoriteApi();
$id = "id_example"; // string | Id number of the Favorite list
$count = "count_example"; // string | Number of files

try {
    $result = $api_instance->replaceFavoriteList($id, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoriteApi->replaceFavoriteList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id number of the Favorite list |
 **count** | **string**| Number of files |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setFavorite**
> string setFavorite($name, $id)



User can add file to their Favorite list in the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FavoriteApi();
$name = "name_example"; // string | Name of the file to be added to favorites.
$id = "id_example"; // string | Id number of the Favorite list

try {
    $result = $api_instance->setFavorite($name, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoriteApi->setFavorite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the file to be added to favorites. |
 **id** | **string**| Id number of the Favorite list |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unsetFavorite**
> string unsetFavorite($id, $name)



User can remove file from their Favorite list in the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FavoriteApi();
$id = "id_example"; // string | Id number of the Favorite list
$name = "name_example"; // string | Name of the file to be added to favorites.

try {
    $result = $api_instance->unsetFavorite($id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoriteApi->unsetFavorite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id number of the Favorite list |
 **name** | **string**| Name of the file to be added to favorites. |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFavoriteList**
> string updateFavoriteList($id, $name)



User can update favorite list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FavoriteApi();
$id = "id_example"; // string | Id number of the Favorite list
$name = "name_example"; // string | Name of the file to be added to favorites.

try {
    $result = $api_instance->updateFavoriteList($id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoriteApi->updateFavoriteList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id number of the Favorite list |
 **name** | **string**| Name of the file to be added to favorites. |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

