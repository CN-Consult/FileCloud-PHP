<?php
/**
 *
 * @file
 * @version 1.0
 * @copyright 2018 CN-Consult GmbH
 * @author Pascal Stiemer <pascal.stiemer@cn-consult.eu>
 */

/**
 * This class updates half of the operationidmapping.txt file.
 * It adds missing operationIds from FileCloud-apidoc.json.
 * If you want to know more please take a look at README.md.
 */
class updateOperationIdMappingFile
{
    private $apidoc;
    private $mappingFile;

    /**
     * Updates the operationidmappingfile if new operations have been added to the filecloud API.
     */
    public function update()
    {
        $this->parseFiles();
        foreach ($this->apidoc["api"] as $apiCall)
        {
            if ($apiCall["url"] != "")
            {
                $operationUrl = $apiCall["url"];
                if (strpos($this->mappingFile, $operationUrl) === false)
                { //The boolean compare "===" is very important here. The first line will equal to 0 with strpos which evaluates to false.
                    file_put_contents(__DIR__."/operationidmapping.txt", $operationUrl."=\n", FILE_APPEND);
                }
            }
        }
    }

    /**
     * Parses the needed files and saves them in a variable.
     */
    private function parseFiles()
    {
        $this->apidoc = json_decode(file_get_contents(__DIR__."/FileCloud-apidoc.json"), true);
        $this->mappingFile = file_get_contents(__DIR__."/operationidmapping.txt");
    }
}

$updateOperationIdMappingFile = new updateOperationIdMappingFile();
$updateOperationIdMappingFile->update();
