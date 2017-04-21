# How to update to newer FileCloud APIs

### Archive the current FileCloud API
- First you need to move the content of the current FileCloud-apidoc.json and FileCloud-swagger.json to new files in the folder "deprecated"
- These file should be called "FileCloud-apidoc-{{versionnumber}}.json" and "FileCloud-swagger-{{versionnumber}}.json"
(you can find the versionnumber in the apidoc file)

### Fetch the new API
- Go to the FileCloud User API website:
https://www.getfilecloud.com/apidocs/fcuser/userapi/doc/index.html
- Open developer tools in your browser (F12) and switch to the sources tab (located in the debugger when using firefox)
- Now reload the site to receive the api data
- If done correctly you will see a file that has a name like: "api_data.js?v=1489739961213" in the folder "apidocs/fcuser/userapi/doc"
- Now copy the object located in the define function (the object extends over the whole file, so you just have to get rid of "define(" and ");")
- Paste the copied object into the now empty "FileCloud-apidoc.json" file

### Add the new versionnumber
- Go to https://www.getfilecloud.com/releasenotes/ and copy the latest version number (with build number!) e.g. 14.0.0.34184
- Add the version number to the FileCloud-apidoc.json file like so:
```
{ 
"version":"14.0.0.34184",
"api": [
  {
    [...]
  }
}
```

### Update operationidmapping.txt
- If a new filecloud api version comes with new operations you need to add them into the mapping file.
- You need to create a camelCase operationId from the operation url.
- The format is url=operationId
```
/core/operationname=operationName
```

### Run apidoc2swagger.php to create the swagger file