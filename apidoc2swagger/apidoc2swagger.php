<?php
/**
 *
 * @file
 * @version 1.0
 * @copyright 2017 CN-Consult GmbH
 * @author Pascal Stiemer <pascal.stiemer@cn-consult.eu>
 */

/**
 * This class converts an apidoc generated, json encoded filecloud api, to a swagger compatible json file.
 */
class apidoc2swagger
{
    private $swaggerArray;

    /**
     * This is the main function of the class, it reads the apidoc file and creates a swagger compatible json file.
     *
     * @param $_apiDocFileName String The filename of the apidoc json file.
     * @param $_swaggerFileName String The filename of the swagger json file that will be created.
     */
    public function convert($_apiDocFileName, $_swaggerFileName)
    {
        $apidoc = json_decode(file_get_contents($_apiDocFileName), true);

        $this->swaggerArray = [
            "swagger" => '2.0', //The swagger version which we are using
            "info" => [
                "title" => "FileCloud API",
                "description" => "Auto generated API documentation.",
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
                        "tags" => array($apiCall["group"]),
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
                        if ($type == "date") $type = "string";
                        $required = true;
                        if (strpos(strtolower($parameter["description"]), "(optional)") !== false) $required = false;

                        array_push($pathArray->$requestType->parameters, (object)array(
                            "name" => $parameter["field"],
                            "in" => "query",
                            "type" => $type,
                            "description" => trim(strip_tags($parameter["description"])),
                            "required" => $required
                        ));
                    }
                }

                // Ensure that the url starts with a slash.
                if (substr( $apiCall["url"], 0, 1 ) !== "/") $url = "/".$apiCall["url"];
                else $url = $apiCall["url"];

                $this->swaggerArray["paths"][$url] = $pathArray;
            }
        }

        file_put_contents($_swaggerFileName, json_encode($this->swaggerArray));
    }

    /**
     * Creates an associative array of a response reference with defining values like "description", "title" etc.
     *
     * @param arrayObject $_apiCall The object of an api call like "createfolder".
     * @return array $response The response reference for given api call.
     */
    function createResponseReference($_apiCall)
    {
        if (array_key_exists("name", $_apiCall) && array_key_exists("success", $_apiCall) && array_key_exists("fields", $_apiCall["success"]) && array_key_exists("Success 200", $_apiCall["success"]["fields"]))
        {
            $name = ucfirst($_apiCall["name"])."Response";

            $response = array(
                "description" => "Standard response for successful HTTP requests. The actual response will depend on the request method used. In a GET request, the response will contain an entity corresponding to the requested resource. In a POST request, the response will contain an entity describing or containing the result of the action.",
                "schema" => array(
                    "title" => $name."s",
                    "type" => "array"
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
    function createResponseDefinitions($_apiCall)
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
}

$converter = new apidoc2swagger();
$converter->convert($argv[1], $argv[2]);