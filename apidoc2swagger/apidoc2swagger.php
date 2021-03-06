<?php
/**
 * This file is part of FileCloud-PHP.
 * Please check the file LICENSE for information about the license.
 *
 * This is a script that is used to generate a swagger-file from an apidoc-file.
 * When used without parameters the source and destination files will have the following default names:
 * Source: "FileCloud-apidoc.json"; Destination: "FileCloud-swagger.json".
 * By providing parameters you can change these file names as you wish.
 * Example: php apidoc2swagger.php apidocFile.json swaggerFile.json
 *
 * @file
 * @version 1.0
 * @copyright 2017 CN-Consult GmbH
 * @author Pascal Stiemer <pascal.stiemer@cn-consult.eu>
 */

/**
 * This class converts an apidoc generated, json encoded filecloud api, to a swagger compatible json file.
 * Use the method convert() to convert an apidoc-file to a swagger-file.
 */
class apidoc2swagger
{
    private $swaggerArray;
    private $operationMapping;

    /**
     * This is the main function of the class, it reads the apidoc file and creates a swagger compatible json file.
     *
     * @param $_apiDocFileName String The filename of the apidoc json file.
     * @param $_swaggerFileName String The filename of the swagger json file that will be created.
     */
    public function convert($_apiDocFileName = "FileCloud-apidoc.json", $_swaggerFileName = "FileCloud-swagger.json")
    {
        $apidoc = json_decode(file_get_contents(__DIR__."/".$_apiDocFileName), true);

        $this->swaggerArray = [
            "swagger" => '2.0', //The swagger version which we are using
            "info" => [
                "title" => "FileCloud API",
                "description" => "The FileCloud APIs provide developers with the tools necessary to build a variety of apps and clients. This allows extensibility and integration of FileCloud with your existing enterprise systems and frameworks. FileCloud developer API is simple to use and integrate.",
                "version" => $apidoc["version"]
            ],
            "schemes" => array("https", "http"),
            "paths" => array(),
            "definitions" => array()
        ];

        foreach ($apidoc["api"] as $apiCall)
        {
            if ($apiCall["url"] != "")
            {
                $response = $this->createResponseReference($apiCall);

                $requestType = strtolower($apiCall["type"]);
                $pathArray = (object)array(
                    $requestType => (object)array(
                        "description" => strip_tags($apiCall["description"]),
                        "operationId" => $this->getOperationId($apiCall["url"]),
                        "tags" => array(str_replace("RelatedAPI", "", str_replace("_", "", $apiCall["group"]))),
                        "responses" => array(
                            200 => $response,
                        )
                    )
                );

                if (array_key_exists("parameter", $apiCall))
                {
                    $pathArray->$requestType->parameters = array();
                    foreach ($apiCall["parameter"]["fields"]["Parameter"] as $parameter)
                    {
                        $type = trim(strtolower(strip_tags($parameter["type"])));
                        if ($type == "date") $type = "string"; // swagger doesn't support date as a type so we handle it like a string
                        $required = true;
                        if (strpos(strtolower($parameter["description"]), "(optional)") !== false) $required = false;

                        $in = "";
                        if (strtolower($apiCall["type"]) == "get") $in = "query";
                        else if (strtolower($apiCall["type"]) == "post" && $apiCall["url"] != "/core/upload")
                        {// post requests need the value formData for "in" but /core/upload is a special case which is handled in the next case
                            $in = "formData";
                            $pathArray->$requestType->consumes = array("application/x-www-form-urlencoded");
                        }
                        else if (strtolower($apiCall["type"]) == "post" && $apiCall["url"] == "/core/upload")
                        {// /core/upload is a special case where the most parameters are "in" query and the consumes property needs to be "multipart/form-data"
                            $in = "query";
                            $pathArray->$requestType->consumes = array("multipart/form-data");
                        }

                        array_push($pathArray->$requestType->parameters, (object)array(
                            "name" => $parameter["field"],
                            "in" => $in,
                            "type" => $type,
                            "description" => trim(strip_tags($parameter["description"])),
                            "required" => $required
                        ));
                    }
                    if ($apiCall["url"] == "/core/upload")
                    {// /core/upload is a special case where only the parameter "file_contents" is "in" formData so we add this parameter here
                        array_push($pathArray->$requestType->parameters, (object)array(
                            "name" => "file_contents",
                            "in" => "formData",
                            "type" => "file",
                            "description" => "The path to the file you want to upload.",
                            "required" => true
                        ));
                    }
                }

                // Ensure that the url starts with a slash.
                if (substr( $apiCall["url"], 0, 1 ) !== "/") $url = "/".$apiCall["url"];
                else $url = $apiCall["url"];

                $this->swaggerArray["paths"][$url] = $pathArray;
            }
        }

        file_put_contents(__DIR__."/".$_swaggerFileName, json_encode($this->swaggerArray));
    }

    /**
     * Creates an associative array of a response reference with defining values like "description", "title" etc.
     *
     * @param arrayObject $_apiCall The object of an api call like "createfolder".
     * @return array $response The response reference for given api call.
     */
    private function createResponseReference($_apiCall)
    {
        if (array_key_exists("name", $_apiCall) && array_key_exists("success", $_apiCall) && array_key_exists("fields", $_apiCall["success"]) && array_key_exists("Success 200", $_apiCall["success"]["fields"]))
        {
            $name = ucfirst($_apiCall["name"])."Response";

            $response = array(
                "description" => "Standard response for successful HTTP requests. The actual response will depend on the request method used. In a GET request, the response will contain an entity corresponding to the requested resource. In a POST request, the response will contain an entity describing or containing the result of the action.",
                "schema" => array(
                    "title" => $name."s",
                    "type" => "string"
                )
            );

            $response["schema"]["items"] = array(
                "\$ref" => "#/definitions/$name"
            );

            $this->createResponseDefinitions($_apiCall);
        }
        else
        {// Currently the only response clarified in the filecloud api is 200. If this will change in the future the code has to be adapted.
            $response = array(
                "description" => "Returns an object with multiple fields."
            );
        }

        return $response;
    }

    /**
     * Creates an array of response definitions and adds them to the $swaggerArray.
     *
     * @param arrayObject $_apiCall The object of an api call like "createfolder".
     */
    private function createResponseDefinitions($_apiCall)
    {
        $name = ucfirst($_apiCall["name"])."Response";
        $definitions = array();
        $required = array();

        foreach ($_apiCall["success"]["fields"]["Success 200"] as $responseField)
        {
            if (array_key_exists("type", $responseField))
            {
                $type = trim(strtolower(strip_tags($responseField["type"])));
            }
            else $type = "string";

            $definitions[$responseField["field"]] = array(
                "description" => trim(strtolower(strip_tags($responseField["description"]))),
                "type" => $type
            );

            if ($responseField["optional"] == false)
            {
                array_push($required, $responseField["field"]);
            }
        }

        $this->swaggerArray["definitions"][$name]["properties"] = $definitions;
        $this->swaggerArray["definitions"][$name]["required"] = $required;
    }

    /**
     * Searches the operationidmapping.txt file for a "camelCased" operationId.
     * This file contains mapping for the operation urls like so: /core/renameormove=renameOrMove.
     *
     * @param String $_url The ulr of an operation. E.g. /core/renameormove
     * @return mixed The "camelCased" operationId for the given url. E.g. renameOrMove
     * @throws Exception when $_url is missing in operationidmapping.txt
     */
    private function getOperationId($_url)
    {
        if (!$this->operationMapping) $this->operationMapping=parse_ini_file(__DIR__."/operationidmapping.txt");
        if (isset($this->operationMapping[$_url])) return $this->operationMapping[$_url];
        else throw new Exception('The URL $_url is missing in operationidmapping.txt!');
    }
}

$converter = new apidoc2swagger();
if (isset($argv[1]) && isset($argv[2])) $converter->convert($argv[1], $argv[2]);
else $converter->convert();