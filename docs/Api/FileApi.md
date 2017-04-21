# Swagger\Client\FileApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**copyFile**](FileApi.md#copyFile) | **POST** /core/copyfile | 
[**createFolder**](FileApi.md#createFolder) | **POST** /app/explorer/createfolder | 
[**deleteFile**](FileApi.md#deleteFile) | **POST** /core/deletefile | 
[**deletePartialUploads**](FileApi.md#deletePartialUploads) | **POST** /core/deletepartialuploads | 
[**docEdit**](FileApi.md#docEdit) | **POST** /core/docedit | 
[**downloadFile**](FileApi.md#downloadFile) | **GET** /core/downloadfile | 
[**downloadFileMulti**](FileApi.md#downloadFileMulti) | **GET** /core/downloadfilemulti | 
[**emptyRecycleBin**](FileApi.md#emptyRecycleBin) | **POST** /core/emptyrecyclebin | 
[**fileExists**](FileApi.md#fileExists) | **POST** /core/fileexists | 
[**fileInfo**](FileApi.md#fileInfo) | **POST** /core/fileinfo | 
[**getAccessDetailsForPath**](FileApi.md#getAccessDetailsForPath) | **GET** /core/getaccessdetailsforpath | 
[**getFileList**](FileApi.md#getFileList) | **GET** /core/getfilelist | 
[**getFolderProperties**](FileApi.md#getFolderProperties) | **GET** /core/getfolderproperties | 
[**renameFile**](FileApi.md#renameFile) | **POST** /core/renamefile | 
[**renameOrMove**](FileApi.md#renameOrMove) | **POST** /core/renameormove | 
[**search**](FileApi.md#search) | **POST** /core/search | 
[**searchExt**](FileApi.md#searchExt) | **POST** /app/searchext/ | 
[**upload**](FileApi.md#upload) | **POST** /core/upload | 


# **copyFile**
> string copyFile($copyto, $path, $name)



User can copy files from one location to another in the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FileApi();
$copyto = "copyto_example"; // string | Path where the files has to be copied
$path = "path_example"; // string | Path where the files reside
$name = "name_example"; // string | Name of the image file, eg: /Path/Image file name.

try {
    $result = $api_instance->copyFile($copyto, $path, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->copyFile: ', $e->getMessage(), PHP_EOL;
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

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createFolder**
> string createFolder($name, $path)



User can create folder in the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FileApi();
$name = "name_example"; // string | Name of the folder to be created
$path = "path_example"; // string | Path where you want to create the folder

try {
    $result = $api_instance->createFolder($name, $path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->createFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the folder to be created |
 **path** | **string**| Path where you want to create the folder |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFile**
> string deleteFile($path, $name)



User can delete file/folder in the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FileApi();
$path = "path_example"; // string | Path of the file where it resides.
$name = "name_example"; // string | Name of the file to be deleted.

try {
    $result = $api_instance->deleteFile($path, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->deleteFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path of the file where it resides. |
 **name** | **string**| Name of the file to be deleted. |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePartialUploads**
> string deletePartialUploads($ignorets)



User can delete partially uploaded files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FileApi();
$ignorets = 56; // int | Set value to 1 to delete partial uploads using API call

try {
    $result = $api_instance->deletePartialUploads($ignorets);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->deletePartialUploads: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ignorets** | **int**| Set value to 1 to delete partial uploads using API call |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **docEdit**
> docEdit($path)



User can edit documents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FileApi();
$path = "path_example"; // string | Path of the file where it resides

try {
    $api_instance->docEdit($path);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->docEdit: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadFile**
> downloadFile($filepath, $filename)



Download file in FileCould System (HTTP GET)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FileApi();
$filepath = "filepath_example"; // string | Path of the file where it resides and with the name of the file to be downloaded.
$filename = "filename_example"; // string | Name of the file to be downloaded

try {
    $api_instance->downloadFile($filepath, $filename);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->downloadFile: ', $e->getMessage(), PHP_EOL;
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

# **downloadFileMulti**
> downloadFileMulti($count, $filepath, $fn1, $fn2)



Download multiple file in FileCould System (HTTP GET)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FileApi();
$count = 3.4; // float | Number of files to be downloaded
$filepath = "filepath_example"; // string | Path of the file where it resides.
$fn1 = "fn1_example"; // string | First file name selected for download
$fn2 = "fn2_example"; // string | Second file name selected for download {To downlaod more keep adding param's like fn3, fn4..}

try {
    $api_instance->downloadFileMulti($count, $filepath, $fn1, $fn2);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->downloadFileMulti: ', $e->getMessage(), PHP_EOL;
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

# **emptyRecycleBin**
> string emptyRecycleBin()



User can empty recycle bin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FileApi();

try {
    $result = $api_instance->emptyRecycleBin();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->emptyRecycleBin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fileExists**
> string fileExists($file)



User can check if the file exist in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FileApi();
$file = "file_example"; // string | Path of the file where it resides

try {
    $result = $api_instance->fileExists($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->fileExists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string**| Path of the file where it resides |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fileInfo**
> string fileInfo($path)



User can fetch information about a file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FileApi();
$path = "path_example"; // string | Path of file to be specified

try {
    $result = $api_instance->fileInfo($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->fileInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path of file to be specified |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccessDetailsForPath**
> string getAccessDetailsForPath($fullpath)



User can delete file/folder in the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FileApi();
$fullpath = "fullpath_example"; // string | Path of the file/folder

try {
    $result = $api_instance->getAccessDetailsForPath($fullpath);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->getAccessDetailsForPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fullpath** | **string**| Path of the file/folder |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileList**
> string getFileList($path, $sortdir, $sortby, $start, $limit)



User can navigate through the file in system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FileApi();
$path = "path_example"; // string | Path Name to be specified, If the user wants to access MyFiles then use the username as path.
$sortdir = "sortdir_example"; // string | Set it to 1 for ascending sort , -1 for descending sort
$sortby = "sortby_example"; // string | You can sort by name, date or size.
$start = "start_example"; // string | Start index of records to retrieve, Note: Index starts from 0. Default 0
$limit = "limit_example"; // string | Set to any number of record you want to view at once. Default 10

try {
    $result = $api_instance->getFileList($path, $sortdir, $sortby, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->getFileList: ', $e->getMessage(), PHP_EOL;
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

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFolderProperties**
> string getFolderProperties($path)



User can get total number of files, versioned files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FileApi();
$path = "path_example"; // string | Path of the folder

try {
    $result = $api_instance->getFolderProperties($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->getFolderProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path of the folder |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **renameFile**
> string renameFile($path, $name, $newname)



User can rename file in the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FileApi();
$path = "path_example"; // string | Path of the file where it resides.
$name = "name_example"; // string | Name of the file to be renamed.
$newname = "newname_example"; // string | Name of the file with the path where the file has to be moved.

try {
    $result = $api_instance->renameFile($path, $name, $newname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->renameFile: ', $e->getMessage(), PHP_EOL;
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

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **renameOrMove**
> string renameOrMove($fromname, $toname)



User can move files from one location to another in the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FileApi();
$fromname = "fromname_example"; // string | Name of the file with the path where the file resides.
$toname = "toname_example"; // string | Name of the file with the path where the file has to be moved.

try {
    $result = $api_instance->renameOrMove($fromname, $toname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->renameOrMove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromname** | **string**| Name of the file with the path where the file resides. |
 **toname** | **string**| Name of the file with the path where the file has to be moved. |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search**
> string search($keyword, $location, $minsize, $maxsize, $modifiedstart, $modifiedend)



User can search for a file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FileApi();
$keyword = "keyword_example"; // string | Keyword to search
$location = "location_example"; // string | Specify the directory path in which you want to perform search.
$minsize = "minsize_example"; // string | (optional)Specify the size in kb, the search will show files that is greater than and equal to the size mentioned.
$maxsize = "maxsize_example"; // string | (optional)Specify the size in kb, the search will show files that is lesser than and equal to the size mentioned.
$modifiedstart = "modifiedstart_example"; // string | (optional)Specify the value in date format, the search will show files that was created on and after the date mentioned
$modifiedend = "modifiedend_example"; // string | (optional)Specify the value in date format, the search will show files that was created before the date mentioned

try {
    $result = $api_instance->search($keyword, $location, $minsize, $maxsize, $modifiedstart, $modifiedend);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->search: ', $e->getMessage(), PHP_EOL;
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

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchExt**
> string searchExt($op, $searchname, $searchtext, $searchloc, $minsize, $maxsize, $modifiedstart, $modifiedend)



User can perform context search for a file/folder. It is mandatory to either specify searchname or searchtext to perform this search.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FileApi();
$op = "op_example"; // string | Operantion name - searchcontent
$searchname = "searchname_example"; // string | Specify the filename to be searched.
$searchtext = "searchtext_example"; // string | Specify the text to search
$searchloc = "searchloc_example"; // string | (optional) Specify the directory path in which you want to perform search (if not specified user's home directory will be the path)
$minsize = "minsize_example"; // string | (optional)Specify the size in kb, the search will show files that is greater than and equal to the size mentioned.
$maxsize = "maxsize_example"; // string | (optional)Specify the size in kb, the search will show files that is lesser than and equal to the size mentioned.
$modifiedstart = "modifiedstart_example"; // string | (optional)Specify the value in date format, the search will show files that was created on and after the date mentioned
$modifiedend = "modifiedend_example"; // string | (optional)Specify the value in date format, the search will show files that was created before the date mentioned

try {
    $result = $api_instance->searchExt($op, $searchname, $searchtext, $searchloc, $minsize, $maxsize, $modifiedstart, $modifiedend);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->searchExt: ', $e->getMessage(), PHP_EOL;
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

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **upload**
> upload($appname, $path, $offset, $complete, $filename, $fileContents)



Upload file to FileCould System (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FileApi();
$appname = "appname_example"; // string | Agent use to upload files to system
$path = "path_example"; // string | Specify the path where you want to upload the file
$offset = 3.4; // float | Offset set to 0
$complete = 3.4; // float | Complete set to 1
$filename = "filename_example"; // string | File name to be uploaded
$fileContents = "/path/to/file.txt"; // \SplFileObject | The path to the file you want to upload.

try {
    $api_instance->upload($appname, $path, $offset, $complete, $filename, $fileContents);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->upload: ', $e->getMessage(), PHP_EOL;
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
 **filename** | **string**| File name to be uploaded |
 **fileContents** | **\SplFileObject**| The path to the file you want to upload. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

