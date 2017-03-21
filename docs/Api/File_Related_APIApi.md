# Swagger\Client\File_Related_APIApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appExplorerCreatefolderPost**](File_Related_APIApi.md#appExplorerCreatefolderPost) | **POST** /app/explorer/createfolder | 
[**appSearchextPost**](File_Related_APIApi.md#appSearchextPost) | **POST** /app/searchext/ | 
[**coreCopyfilePost**](File_Related_APIApi.md#coreCopyfilePost) | **POST** /core/copyfile | 
[**coreDeletefilePost**](File_Related_APIApi.md#coreDeletefilePost) | **POST** /core/deletefile | 
[**coreDeletepartialuploadsPost**](File_Related_APIApi.md#coreDeletepartialuploadsPost) | **POST** /core/deletepartialuploads | 
[**coreDoceditPost**](File_Related_APIApi.md#coreDoceditPost) | **POST** /core/docedit | 
[**coreDownloadfileGet**](File_Related_APIApi.md#coreDownloadfileGet) | **GET** /core/downloadfile | 
[**coreDownloadfilemultiGet**](File_Related_APIApi.md#coreDownloadfilemultiGet) | **GET** /core/downloadfilemulti | 
[**coreEmptyrecyclebinPost**](File_Related_APIApi.md#coreEmptyrecyclebinPost) | **POST** /core/emptyrecyclebin | 
[**coreFileexistsPost**](File_Related_APIApi.md#coreFileexistsPost) | **POST** /core/fileexists | 
[**coreFileinfoPost**](File_Related_APIApi.md#coreFileinfoPost) | **POST** /core/fileinfo | 
[**coreGetaccessdetailsforpathGet**](File_Related_APIApi.md#coreGetaccessdetailsforpathGet) | **GET** /core/getaccessdetailsforpath | 
[**coreGetfilelistGet**](File_Related_APIApi.md#coreGetfilelistGet) | **GET** /core/getfilelist | 
[**coreGetfolderpropertiesGet**](File_Related_APIApi.md#coreGetfolderpropertiesGet) | **GET** /core/getfolderproperties | 
[**coreRenamefilePost**](File_Related_APIApi.md#coreRenamefilePost) | **POST** /core/renamefile | 
[**coreRenameormovePost**](File_Related_APIApi.md#coreRenameormovePost) | **POST** /core/renameormove | 
[**coreSearchPost**](File_Related_APIApi.md#coreSearchPost) | **POST** /core/search | 
[**coreUploadPost**](File_Related_APIApi.md#coreUploadPost) | **POST** /core/upload | 


# **appExplorerCreatefolderPost**
> \Swagger\Client\Model\CreatefolderResponse[] appExplorerCreatefolderPost($name, $path)



User can create folder in the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\File_Related_APIApi();
$name = "name_example"; // string | Name of the folder to be created
$path = "path_example"; // string | Path where you want to create the folder

try {
    $result = $api_instance->appExplorerCreatefolderPost($name, $path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling File_Related_APIApi->appExplorerCreatefolderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the folder to be created |
 **path** | **string**| Path where you want to create the folder |

### Return type

[**\Swagger\Client\Model\CreatefolderResponse[]**](../Model/CreatefolderResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appSearchextPost**
> \Swagger\Client\Model\SearchcontentResponse[] appSearchextPost($op, $searchname, $searchtext, $searchloc, $minsize, $maxsize, $modifiedstart, $modifiedend)



User can perform context search for a file/folder. It is mandatory to either specify searchname or searchtext to perform this search.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\File_Related_APIApi();
$op = "op_example"; // string | Operantion name - searchcontent
$searchname = "searchname_example"; // string | Specify the filename to be searched.
$searchtext = "searchtext_example"; // string | Specify the text to search
$searchloc = "searchloc_example"; // string | (optional) Specify the directory path in which you want to perform search (if not specified user's home directory will be the path)
$minsize = "minsize_example"; // string | (optional)Specify the size in kb, the search will show files that is greater than and equal to the size mentioned.
$maxsize = "maxsize_example"; // string | (optional)Specify the size in kb, the search will show files that is lesser than and equal to the size mentioned.
$modifiedstart = "modifiedstart_example"; // string | (optional)Specify the value in date format, the search will show files that was created on and after the date mentioned
$modifiedend = "modifiedend_example"; // string | (optional)Specify the value in date format, the search will show files that was created before the date mentioned

try {
    $result = $api_instance->appSearchextPost($op, $searchname, $searchtext, $searchloc, $minsize, $maxsize, $modifiedstart, $modifiedend);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling File_Related_APIApi->appSearchextPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **op** | **string**| Operantion name - searchcontent |
 **searchname** | **string**| Specify the filename to be searched. |
 **searchtext** | **string**| Specify the text to search |
 **searchloc** | **string**| (optional) Specify the directory path in which you want to perform search (if not specified user&#39;s home directory will be the path) | [optional]
 **minsize** | **string**| (optional)Specify the size in kb, the search will show files that is greater than and equal to the size mentioned. | [optional]
 **maxsize** | **string**| (optional)Specify the size in kb, the search will show files that is lesser than and equal to the size mentioned. | [optional]
 **modifiedstart** | **string**| (optional)Specify the value in date format, the search will show files that was created on and after the date mentioned | [optional]
 **modifiedend** | **string**| (optional)Specify the value in date format, the search will show files that was created before the date mentioned | [optional]

### Return type

[**\Swagger\Client\Model\SearchcontentResponse[]**](../Model/SearchcontentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreCopyfilePost**
> \Swagger\Client\Model\CopyfileResponse[] coreCopyfilePost($copyto, $path, $name)



User can copy files from one location to another in the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\File_Related_APIApi();
$copyto = "copyto_example"; // string | Path where the files has to be copied
$path = "path_example"; // string | Path where the files reside
$name = "name_example"; // string | Name of the image file, eg: /Path/Image file name.

try {
    $result = $api_instance->coreCopyfilePost($copyto, $path, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling File_Related_APIApi->coreCopyfilePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **copyto** | **string**| Path where the files has to be copied |
 **path** | **string**| Path where the files reside |
 **name** | **string**| Name of the image file, eg: /Path/Image file name. |

### Return type

[**\Swagger\Client\Model\CopyfileResponse[]**](../Model/CopyfileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreDeletefilePost**
> \Swagger\Client\Model\DeletefileResponse[] coreDeletefilePost($path, $name)



User can delete file/folder in the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\File_Related_APIApi();
$path = "path_example"; // string | Path of the file where it resides.
$name = "name_example"; // string | Name of the file to be deleted.

try {
    $result = $api_instance->coreDeletefilePost($path, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling File_Related_APIApi->coreDeletefilePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path of the file where it resides. |
 **name** | **string**| Name of the file to be deleted. |

### Return type

[**\Swagger\Client\Model\DeletefileResponse[]**](../Model/DeletefileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreDeletepartialuploadsPost**
> \Swagger\Client\Model\DeletepartialuploadsResponse[] coreDeletepartialuploadsPost($ignorets)



User can delete partially uploaded files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\File_Related_APIApi();
$ignorets = 56; // int | Set value to 1 to delete partial uploads using API call

try {
    $result = $api_instance->coreDeletepartialuploadsPost($ignorets);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling File_Related_APIApi->coreDeletepartialuploadsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ignorets** | **int**| Set value to 1 to delete partial uploads using API call |

### Return type

[**\Swagger\Client\Model\DeletepartialuploadsResponse[]**](../Model/DeletepartialuploadsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreDoceditPost**
> coreDoceditPost($path)



User can edit documents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\File_Related_APIApi();
$path = "path_example"; // string | Path of the file where it resides

try {
    $api_instance->coreDoceditPost($path);
} catch (Exception $e) {
    echo 'Exception when calling File_Related_APIApi->coreDoceditPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path of the file where it resides |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreDownloadfileGet**
> coreDownloadfileGet($filepath, $filename)



Download file in FileCould System (HTTP GET)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\File_Related_APIApi();
$filepath = "filepath_example"; // string | Path of the file where it resides and with the name of the file to be downloaded.
$filename = "filename_example"; // string | Name of the file to be downloaded

try {
    $api_instance->coreDownloadfileGet($filepath, $filename);
} catch (Exception $e) {
    echo 'Exception when calling File_Related_APIApi->coreDownloadfileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filepath** | **string**| Path of the file where it resides and with the name of the file to be downloaded. |
 **filename** | **string**| Name of the file to be downloaded |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreDownloadfilemultiGet**
> coreDownloadfilemultiGet($count, $filepath, $fn1, $fn2)



Download multiple file in FileCould System (HTTP GET)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\File_Related_APIApi();
$count = 3.4; // float | Number of files to be downloaded
$filepath = "filepath_example"; // string | Path of the file where it resides.
$fn1 = "fn1_example"; // string | First file name selected for download
$fn2 = "fn2_example"; // string | Second file name selected for download {To downlaod more keep adding param's like fn3, fn4..}

try {
    $api_instance->coreDownloadfilemultiGet($count, $filepath, $fn1, $fn2);
} catch (Exception $e) {
    echo 'Exception when calling File_Related_APIApi->coreDownloadfilemultiGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **float**| Number of files to be downloaded |
 **filepath** | **string**| Path of the file where it resides. |
 **fn1** | **string**| First file name selected for download |
 **fn2** | **string**| Second file name selected for download {To downlaod more keep adding param&#39;s like fn3, fn4..} |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreEmptyrecyclebinPost**
> \Swagger\Client\Model\EmptyrecyclebinResponse[] coreEmptyrecyclebinPost()



User can empty recycle bin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\File_Related_APIApi();

try {
    $result = $api_instance->coreEmptyrecyclebinPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling File_Related_APIApi->coreEmptyrecyclebinPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\EmptyrecyclebinResponse[]**](../Model/EmptyrecyclebinResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreFileexistsPost**
> \Swagger\Client\Model\FileexistsResponse[] coreFileexistsPost($file)



User can check if the file exist in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\File_Related_APIApi();
$file = "file_example"; // string | Path of the file where it resides

try {
    $result = $api_instance->coreFileexistsPost($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling File_Related_APIApi->coreFileexistsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string**| Path of the file where it resides |

### Return type

[**\Swagger\Client\Model\FileexistsResponse[]**](../Model/FileexistsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreFileinfoPost**
> \Swagger\Client\Model\FileinfoResponse[] coreFileinfoPost($path)



User can fetch information about a file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\File_Related_APIApi();
$path = "path_example"; // string | Path of file to be specified

try {
    $result = $api_instance->coreFileinfoPost($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling File_Related_APIApi->coreFileinfoPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path of file to be specified |

### Return type

[**\Swagger\Client\Model\FileinfoResponse[]**](../Model/FileinfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGetaccessdetailsforpathGet**
> \Swagger\Client\Model\GetaccessdetailsforpathResponse[] coreGetaccessdetailsforpathGet($fullpath)



User can delete file/folder in the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\File_Related_APIApi();
$fullpath = "fullpath_example"; // string | Path of the file/folder

try {
    $result = $api_instance->coreGetaccessdetailsforpathGet($fullpath);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling File_Related_APIApi->coreGetaccessdetailsforpathGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fullpath** | **string**| Path of the file/folder |

### Return type

[**\Swagger\Client\Model\GetaccessdetailsforpathResponse[]**](../Model/GetaccessdetailsforpathResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGetfilelistGet**
> \Swagger\Client\Model\GetfilelistResponse[] coreGetfilelistGet($path, $sortdir, $sortby, $start, $limit)



User can navigate through the file in system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\File_Related_APIApi();
$path = "path_example"; // string | Path Name to be specified, If the user wants to access MyFiles then use the username as path.
$sortdir = "sortdir_example"; // string | Set it to 1 for ascending sort , -1 for descending sort
$sortby = "sortby_example"; // string | You can sort by name, date or size.
$start = "start_example"; // string | Start index of records to retrieve, Note: Index starts from 0. Default 0
$limit = "limit_example"; // string | Set to any number of record you want to view at once. Default 10

try {
    $result = $api_instance->coreGetfilelistGet($path, $sortdir, $sortby, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling File_Related_APIApi->coreGetfilelistGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path Name to be specified, If the user wants to access MyFiles then use the username as path. |
 **sortdir** | **string**| Set it to 1 for ascending sort , -1 for descending sort |
 **sortby** | **string**| You can sort by name, date or size. |
 **start** | **string**| Start index of records to retrieve, Note: Index starts from 0. Default 0 |
 **limit** | **string**| Set to any number of record you want to view at once. Default 10 |

### Return type

[**\Swagger\Client\Model\GetfilelistResponse[]**](../Model/GetfilelistResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreGetfolderpropertiesGet**
> \Swagger\Client\Model\GetfolderpropertiesResponse[] coreGetfolderpropertiesGet($path)



User can get total number of files, versioned files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\File_Related_APIApi();
$path = "path_example"; // string | Path of the folder

try {
    $result = $api_instance->coreGetfolderpropertiesGet($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling File_Related_APIApi->coreGetfolderpropertiesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path of the folder |

### Return type

[**\Swagger\Client\Model\GetfolderpropertiesResponse[]**](../Model/GetfolderpropertiesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreRenamefilePost**
> \Swagger\Client\Model\RenamefileResponse[] coreRenamefilePost($path, $name, $newname)



User can rename file in the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\File_Related_APIApi();
$path = "path_example"; // string | Path of the file where it resides.
$name = "name_example"; // string | Name of the file to be renamed.
$newname = "newname_example"; // string | Name of the file with the path where the file has to be moved.

try {
    $result = $api_instance->coreRenamefilePost($path, $name, $newname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling File_Related_APIApi->coreRenamefilePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path of the file where it resides. |
 **name** | **string**| Name of the file to be renamed. |
 **newname** | **string**| Name of the file with the path where the file has to be moved. |

### Return type

[**\Swagger\Client\Model\RenamefileResponse[]**](../Model/RenamefileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreRenameormovePost**
> \Swagger\Client\Model\RenameormoveResponse[] coreRenameormovePost($fromname, $toname)



User can move files from one location to another in the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\File_Related_APIApi();
$fromname = "fromname_example"; // string | Name of the file with the path where the file resides.
$toname = "toname_example"; // string | Name of the file with the path where the file has to be moved.

try {
    $result = $api_instance->coreRenameormovePost($fromname, $toname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling File_Related_APIApi->coreRenameormovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromname** | **string**| Name of the file with the path where the file resides. |
 **toname** | **string**| Name of the file with the path where the file has to be moved. |

### Return type

[**\Swagger\Client\Model\RenameormoveResponse[]**](../Model/RenameormoveResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreSearchPost**
> \Swagger\Client\Model\SearchResponse[] coreSearchPost($keyword, $location, $minsize, $maxsize, $modifiedstart, $modifiedend)



User can search for a file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\File_Related_APIApi();
$keyword = "keyword_example"; // string | Keyword to search
$location = "location_example"; // string | Specify the directory path in which you want to perform search.
$minsize = "minsize_example"; // string | (optional)Specify the size in kb, the search will show files that is greater than and equal to the size mentioned.
$maxsize = "maxsize_example"; // string | (optional)Specify the size in kb, the search will show files that is lesser than and equal to the size mentioned.
$modifiedstart = "modifiedstart_example"; // string | (optional)Specify the value in date format, the search will show files that was created on and after the date mentioned
$modifiedend = "modifiedend_example"; // string | (optional)Specify the value in date format, the search will show files that was created before the date mentioned

try {
    $result = $api_instance->coreSearchPost($keyword, $location, $minsize, $maxsize, $modifiedstart, $modifiedend);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling File_Related_APIApi->coreSearchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keyword** | **string**| Keyword to search |
 **location** | **string**| Specify the directory path in which you want to perform search. |
 **minsize** | **string**| (optional)Specify the size in kb, the search will show files that is greater than and equal to the size mentioned. | [optional]
 **maxsize** | **string**| (optional)Specify the size in kb, the search will show files that is lesser than and equal to the size mentioned. | [optional]
 **modifiedstart** | **string**| (optional)Specify the value in date format, the search will show files that was created on and after the date mentioned | [optional]
 **modifiedend** | **string**| (optional)Specify the value in date format, the search will show files that was created before the date mentioned | [optional]

### Return type

[**\Swagger\Client\Model\SearchResponse[]**](../Model/SearchResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coreUploadPost**
> coreUploadPost($appname, $path, $offset, $complete, $filename)



Upload file to FileCould System (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\File_Related_APIApi();
$appname = "appname_example"; // string | Agent use to upload files to system
$path = "path_example"; // string | Specify the path where you want to upload the file
$offset = 3.4; // float | Offset set to 0
$complete = 3.4; // float | Complete set to 1
$filename = "filename_example"; // string | File name to be uploaded inside the folder

try {
    $api_instance->coreUploadPost($appname, $path, $offset, $complete, $filename);
} catch (Exception $e) {
    echo 'Exception when calling File_Related_APIApi->coreUploadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appname** | **string**| Agent use to upload files to system |
 **path** | **string**| Specify the path where you want to upload the file |
 **offset** | **float**| Offset set to 0 |
 **complete** | **float**| Complete set to 1 |
 **filename** | **string**| File name to be uploaded inside the folder |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

