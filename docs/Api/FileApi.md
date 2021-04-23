# Swagger\Client\FileApi

All URIs are relative to *https://swaggerfc.getfilecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelsearch**](FileApi.md#cancelsearch) | **POST** /core/cancelsearch | File_Related_API - cancelsearch lets user to cancel search while the search is in progress
[**clearsavedsearchterms**](FileApi.md#clearsavedsearchterms) | **POST** /core/clearsavedsearchterms | File_Related_API - clearsavedsearchterms is used to clear the previously saved search term
[**copyfile**](FileApi.md#copyfile) | **POST** /core/copyfile | File_Related_API - copyfile is used to copy files from one path to another path
[**createfolder**](FileApi.md#createfolder) | **POST** /app/explorer/createfolder | File_Related_API - createfolder lets user to create a folder in a particular path
[**deletefile**](FileApi.md#deletefile) | **POST** /core/deletefile | File_Related_API - deletefile is used to delete a file/folder from particular location
[**deletepartialuploads**](FileApi.md#deletepartialuploads) | **POST** /core/deletepartialuploads | File_Related_API - deletepartialuploads is used to delete files which were uploaded partially
[**docconvert**](FileApi.md#docconvert) | **POST** /core/docconvert | File_Related_API - docconvert is used to preview files
[**docedit**](FileApi.md#docedit) | **POST** /core/docedit | File_Related_API - docedit is used to edit documents
[**dosearch**](FileApi.md#dosearch) | **POST** /core/dosearch | File_Related_API - dosearch is used to search for a file or folder
[**downloadfile**](FileApi.md#downloadfile) | **GET** /core/downloadfile | File_Related_API - downloadfile is used to download files from a location
[**downloadfilemulti**](FileApi.md#downloadfilemulti) | **GET** /core/downloadfilemulti | File_Related_API - downloadfilemulti is used to download multiple files
[**emptyrecyclebin**](FileApi.md#emptyrecyclebin) | **POST** /core/emptyrecyclebin | File_Related_API - emptyrecyclebin is used to empty the user&#39;s recycly bin
[**fileexists**](FileApi.md#fileexists) | **POST** /core/fileexists | File_Related_API - fileexists is used to check if a file exists or not
[**fileinfo**](FileApi.md#fileinfo) | **POST** /core/fileinfo | File_Related_API - fileinfo is used to view information about file
[**getaccessdetailsforpath**](FileApi.md#getaccessdetailsforpath) | **POST** /core/getaccessdetailsforpath | File_Related_API - getaccessdetailsforpath is used to get permission a file/folder has in the system
[**getfilelist**](FileApi.md#getfilelist) | **POST** /core/getfilelist | File_Related_API - getfilelist is used to navigate through files
[**getfolderproperties**](FileApi.md#getfolderproperties) | **POST** /core/getfolderproperties | File_Related_API - getfolderproperties is used to see the contents of the folder
[**getwopiediturl**](FileApi.md#getwopiediturl) | **POST** /core/getwopiediturl | File_Related_API - getwopiediturl is used for online editing for supported documents
[**renamefile**](FileApi.md#renamefile) | **POST** /core/renamefile | File_Related_API - renamefile is used to rename a file in any particular location
[**renameormove**](FileApi.md#renameormove) | **POST** /core/renameormove | File_Related_API - renameormove is used to move files within the FC system
[**searchtermsearch**](FileApi.md#searchtermsearch) | **POST** /core/searchtermsearch | File_Related_API - searchtermsearch api is used to specify the search term
[**upload**](FileApi.md#upload) | **POST** /core/upload | File_Related_API - uploadfile is used to upload files to the system


# **cancelsearch**
> \Swagger\Client\Model\Commands cancelsearch($searchid)

File_Related_API - cancelsearch lets user to cancel search while the search is in progress

User can cancel the search while an ongoing search is in progress for the entered search term

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$searchid = "searchid_example"; // string | Specify the search ID

try {
    $result = $apiInstance->cancelsearch($searchid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->cancelsearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **searchid** | **string**| Specify the search ID |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearsavedsearchterms**
> \Swagger\Client\Model\Commands clearsavedsearchterms()

File_Related_API - clearsavedsearchterms is used to clear the previously saved search term

Users will be able to clear the saved search terms which was entered previously while performing the search action

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->clearsavedsearchterms();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->clearsavedsearchterms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **copyfile**
> \Swagger\Client\Model\Commands copyfile($copyto, $path, $name)

File_Related_API - copyfile is used to copy files from one path to another path

User can copy files from one location to another in the FC system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$copyto = "copyto_example"; // string | Path where the files has to be copied
$path = "path_example"; // string | Path where the files reside
$name = "name_example"; // string | Name of the image file, eg- /Path/Image file name.

try {
    $result = $apiInstance->copyfile($copyto, $path, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->copyfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **copyto** | **string**| Path where the files has to be copied |
 **path** | **string**| Path where the files reside |
 **name** | **string**| Name of the image file, eg- /Path/Image file name. |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createfolder**
> \Swagger\Client\Model\Commands createfolder($name, $path)

File_Related_API - createfolder lets user to create a folder in a particular path

User can create folder in FC system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Name of the folder to be created
$path = "path_example"; // string | Path where you want to create the folder

try {
    $result = $apiInstance->createfolder($name, $path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->createfolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the folder to be created |
 **path** | **string**| Path where you want to create the folder |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletefile**
> \Swagger\Client\Model\Commands deletefile($path, $name)

File_Related_API - deletefile is used to delete a file/folder from particular location

User can delete file/folder in the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Path of the file where it resides.
$name = "name_example"; // string | Name of the file to be deleted.

try {
    $result = $apiInstance->deletefile($path, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->deletefile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path of the file where it resides. |
 **name** | **string**| Name of the file to be deleted. |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletepartialuploads**
> \Swagger\Client\Model\Commands deletepartialuploads($ignorets)

File_Related_API - deletepartialuploads is used to delete files which were uploaded partially

Users can delete files that have only been partially uploaded by them

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ignorets = 56; // int | Set value to 1 to delete partial uploads using API call

try {
    $result = $apiInstance->deletepartialuploads($ignorets);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->deletepartialuploads: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ignorets** | **int**| Set value to 1 to delete partial uploads using API call |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **docconvert**
> string docconvert($name)

File_Related_API - docconvert is used to preview files

Users can preview files of different formats supported by FC system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Specify the file location

try {
    $result = $apiInstance->docconvert($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->docconvert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Specify the file location |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **docedit**
> string docedit($path)

File_Related_API - docedit is used to edit documents

User can edit documents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Path of the file where it resides

try {
    $result = $apiInstance->docedit($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->docedit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path of the file where it resides |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dosearch**
> \Swagger\Client\Model\Entries dosearch($searchstring, $searchloc, $minsize, $maxsize, $searchscope, $start, $size, $maxsearchentries, $modifiedstart, $modifiedend)

File_Related_API - dosearch is used to search for a file or folder

Users can perform search operation for a file/folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$searchstring = "searchstring_example"; // string | Keyword to search
$searchloc = "searchloc_example"; // string | Specify the directory path in which you want to perform search.
$minsize = "minsize_example"; // string | (optional)Specify the size in kb, the search will show files that is greater than and equal to the size mentioned.
$maxsize = "maxsize_example"; // string | (optional)Specify the size in kb, the search will show files that is lesser than and equal to the size mentioned.
$searchscope = 8.14; // float | Specify the search scope
$start = 8.14; // float | Set to 0
$size = 8.14; // float | Specify the search record limit value
$maxsearchentries = 8.14; // float | Maximum number of search entries
$modifiedstart = new \DateTime("2013-10-20"); // \DateTime | (optional)Specify the value in date format, the search will show files that was created on and after the date mentioned
$modifiedend = new \DateTime("2013-10-20"); // \DateTime | (optional)Specify the value in date format, the search will show files that was created before the date mentioned

try {
    $result = $apiInstance->dosearch($searchstring, $searchloc, $minsize, $maxsize, $searchscope, $start, $size, $maxsearchentries, $modifiedstart, $modifiedend);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->dosearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **searchstring** | **string**| Keyword to search |
 **searchloc** | **string**| Specify the directory path in which you want to perform search. |
 **minsize** | **string**| (optional)Specify the size in kb, the search will show files that is greater than and equal to the size mentioned. |
 **maxsize** | **string**| (optional)Specify the size in kb, the search will show files that is lesser than and equal to the size mentioned. |
 **searchscope** | **float**| Specify the search scope |
 **start** | **float**| Set to 0 |
 **size** | **float**| Specify the search record limit value |
 **maxsearchentries** | **float**| Maximum number of search entries |
 **modifiedstart** | **\DateTime**| (optional)Specify the value in date format, the search will show files that was created on and after the date mentioned | [optional]
 **modifiedend** | **\DateTime**| (optional)Specify the value in date format, the search will show files that was created before the date mentioned | [optional]

### Return type

[**\Swagger\Client\Model\Entries**](../Model/Entries.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadfile**
> string downloadfile($filepath, $filename, $redirect)

File_Related_API - downloadfile is used to download files from a location

Download file in FileCould System (HTTP GET)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filepath = "filepath_example"; // string | Path of the file where it resides and with the name of the file to be downloaded.
$filename = "filename_example"; // string | Name of the file to be downloaded
$redirect = "redirect_example"; // string | (Optional)Set it to 1 to directly download from Amazon S3

try {
    $result = $apiInstance->downloadfile($filepath, $filename, $redirect);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->downloadfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filepath** | **string**| Path of the file where it resides and with the name of the file to be downloaded. |
 **filename** | **string**| Name of the file to be downloaded |
 **redirect** | **string**| (Optional)Set it to 1 to directly download from Amazon S3 | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadfilemulti**
> string downloadfilemulti($count, $filepath, $fn1, $fn2)

File_Related_API - downloadfilemulti is used to download multiple files

User can download multiple files from FileCould System (HTTP GET)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$count = 8.14; // float | Number of files to be downloaded
$filepath = "filepath_example"; // string | Path of the file where it resides.
$fn1 = "fn1_example"; // string | First file name selected for download
$fn2 = "fn2_example"; // string | Second file name selected for download {To downlaod more keep adding param's like fn3, fn4..}

try {
    $result = $apiInstance->downloadfilemulti($count, $filepath, $fn1, $fn2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->downloadfilemulti: ', $e->getMessage(), PHP_EOL;
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

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emptyrecyclebin**
> \Swagger\Client\Model\Commands emptyrecyclebin()

File_Related_API - emptyrecyclebin is used to empty the user's recycly bin

Users can delete either few selected files or clearing all the files by going to the recycle bin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->emptyrecyclebin();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->emptyrecyclebin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fileexists**
> \Swagger\Client\Model\Commands fileexists($file, $caseinsensitive)

File_Related_API - fileexists is used to check if a file exists or not

User can check if the file exists in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = "file_example"; // string | Path of the file where it resides
$caseinsensitive = true; // bool | when this param is set to 1, fileexist call will disable the upper/lower case check in filenames.(can be 0 or 1)

try {
    $result = $apiInstance->fileexists($file, $caseinsensitive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->fileexists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string**| Path of the file where it resides |
 **caseinsensitive** | **bool**| when this param is set to 1, fileexist call will disable the upper/lower case check in filenames.(can be 0 or 1) | [optional]

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fileinfo**
> \Swagger\Client\Model\Fileinfo fileinfo($file)

File_Related_API - fileinfo is used to view information about file

User can fetch information about a file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = "file_example"; // string | Path of file to be specified

try {
    $result = $apiInstance->fileinfo($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->fileinfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string**| Path of file to be specified |

### Return type

[**\Swagger\Client\Model\Fileinfo**](../Model/Fileinfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getaccessdetailsforpath**
> \Swagger\Client\Model\Permissions getaccessdetailsforpath($fullpath)

File_Related_API - getaccessdetailsforpath is used to get permission a file/folder has in the system

User can check the permission details of file or folder in the system (Read, write, download, etc.) (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fullpath = "fullpath_example"; // string | Path of the file/folder

try {
    $result = $apiInstance->getaccessdetailsforpath($fullpath);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->getaccessdetailsforpath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fullpath** | **string**| Path of the file/folder |

### Return type

[**\Swagger\Client\Model\Permissions**](../Model/Permissions.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getfilelist**
> \Swagger\Client\Model\Entries getfilelist($path, $sortdir, $sortby, $start, $limit, $sendcommentinfo, $sendmetadatasetinfo)

File_Related_API - getfilelist is used to navigate through files

Users can get list of files and navigate through the files in system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Path Name to be specified, If the user wants to access MyFiles then use the username as path.
$sortdir = "sortdir_example"; // string | Set it to 1 for ascending sort , -1 for descending sort
$sortby = "sortby_example"; // string | You can sort by name, date or size.
$start = "start_example"; // string | Start index of records to retrieve, Note- Index starts from 0. Default 0
$limit = "limit_example"; // string | Set to any number of record you want to view at once. Default 10
$sendcommentinfo = "sendcommentinfo_example"; // string | whether to send comment info...value is either 1 or 0
$sendmetadatasetinfo = "sendmetadatasetinfo_example"; // string | whether to send metadata set info...value is either 1 or 0

try {
    $result = $apiInstance->getfilelist($path, $sortdir, $sortby, $start, $limit, $sendcommentinfo, $sendmetadatasetinfo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->getfilelist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path Name to be specified, If the user wants to access MyFiles then use the username as path. |
 **sortdir** | **string**| Set it to 1 for ascending sort , -1 for descending sort |
 **sortby** | **string**| You can sort by name, date or size. |
 **start** | **string**| Start index of records to retrieve, Note- Index starts from 0. Default 0 |
 **limit** | **string**| Set to any number of record you want to view at once. Default 10 |
 **sendcommentinfo** | **string**| whether to send comment info...value is either 1 or 0 |
 **sendmetadatasetinfo** | **string**| whether to send metadata set info...value is either 1 or 0 |

### Return type

[**\Swagger\Client\Model\Entries**](../Model/Entries.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getfolderproperties**
> \Swagger\Client\Model\Folderproperties getfolderproperties($path)

File_Related_API - getfolderproperties is used to see the contents of the folder

User can view the total number of files and versioned files of a folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Path of the folder

try {
    $result = $apiInstance->getfolderproperties($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->getfolderproperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path of the folder |

### Return type

[**\Swagger\Client\Model\Folderproperties**](../Model/Folderproperties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getwopiediturl**
> string getwopiediturl($path)

File_Related_API - getwopiediturl is used for online editing for supported documents

Users can edit Office online web document files and the changes made will be saved automatically.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Specify the location of file

try {
    $result = $apiInstance->getwopiediturl($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->getwopiediturl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Specify the location of file |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **renamefile**
> \Swagger\Client\Model\Commands renamefile($path, $name, $newname)

File_Related_API - renamefile is used to rename a file in any particular location

User can rename file in the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Path of the file where it resides.
$name = "name_example"; // string | Name of the file to be renamed.
$newname = "newname_example"; // string | Name of the file with the path where the file has to be moved.

try {
    $result = $apiInstance->renamefile($path, $name, $newname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->renamefile: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **renameormove**
> \Swagger\Client\Model\Commands renameormove($fromname, $toname)

File_Related_API - renameormove is used to move files within the FC system

User can move files from one location to another in the system (HTTP POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fromname = "fromname_example"; // string | Name of the file with the path where the file resides.
$toname = "toname_example"; // string | Name of the file with the path where the file has to be moved.

try {
    $result = $apiInstance->renameormove($fromname, $toname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->renameormove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromname** | **string**| Name of the file with the path where the file resides. |
 **toname** | **string**| Name of the file with the path where the file has to be moved. |

### Return type

[**\Swagger\Client\Model\Commands**](../Model/Commands.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchtermsearch**
> \Swagger\Client\Model\Searchterms searchtermsearch($searchterm)

File_Related_API - searchtermsearch api is used to specify the search term

Specify the search term

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$searchterm = "searchterm_example"; // string | Specify the search term

try {
    $result = $apiInstance->searchtermsearch($searchterm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->searchtermsearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **searchterm** | **string**| Specify the search term |

### Return type

[**\Swagger\Client\Model\Searchterms**](../Model/Searchterms.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **upload**
> string upload($appname, $path, $offset, $complete, $filename, $file, $date)

File_Related_API - uploadfile is used to upload files to the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$appname = "appname_example"; // string | Agent use to upload files to system
$path = "path_example"; // string | Specify the path where you want to upload the file
$offset = 8.14; // float | Offset set to 0
$complete = 8.14; // float | Complete set to 1
$filename = "filename_example"; // string | File name to be uploaded inside the folder
$file = "/path/to/file.txt"; // \SplFileObject | 
$date = new \DateTime("2013-10-20"); // \DateTime | (Optional)Specify UTC date format

try {
    $result = $apiInstance->upload($appname, $path, $offset, $complete, $filename, $file, $date);
    print_r($result);
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
 **filename** | **string**| File name to be uploaded inside the folder |
 **file** | **\SplFileObject**|  | [optional]
 **date** | **\DateTime**| (Optional)Specify UTC date format | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

