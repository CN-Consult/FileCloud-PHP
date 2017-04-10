<?php
/**
 * ProfileApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * FileCloud API
 *
 * The FileCloud APIs provide developers with the tools necessary to build a variety of apps and clients. This allows extensibility and integration of FileCloud with your existing enterprise systems and frameworks. FileCloud developer API is simple to use and integrate.
 *
 * OpenAPI spec version: 14.0.0.34184
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * ProfileApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProfileApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://localhost');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return ProfileApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation beginProfileCreation
     *
     * 
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return string
     */
    public function beginProfileCreation()
    {
        list($response) = $this->beginProfileCreationWithHttpInfo();
        return $response;
    }

    /**
     * Operation beginProfileCreationWithHttpInfo
     *
     * 
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function beginProfileCreationWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/core/beginprofilecreation";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'string',
                '/core/beginprofilecreation'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation changeLanguage
     *
     * 
     *
     * @param string $lang Specify the language you want to set (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return string
     */
    public function changeLanguage($lang)
    {
        list($response) = $this->changeLanguageWithHttpInfo($lang);
        return $response;
    }

    /**
     * Operation changeLanguageWithHttpInfo
     *
     * 
     *
     * @param string $lang Specify the language you want to set (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function changeLanguageWithHttpInfo($lang)
    {
        // verify the required parameter 'lang' is set
        if ($lang === null) {
            throw new \InvalidArgumentException('Missing the required parameter $lang when calling changeLanguage');
        }
        // parse inputs
        $resourcePath = "/core/changelanguage";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($lang !== null) {
            $queryParams['lang'] = $this->apiClient->getSerializer()->toQueryValue($lang);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'string',
                '/core/changelanguage'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation checkId
     *
     * 
     *
     * @param string $id Specify the name you want to check availablity (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return string
     */
    public function checkId($id)
    {
        list($response) = $this->checkIdWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation checkIdWithHttpInfo
     *
     * 
     *
     * @param string $id Specify the name you want to check availablity (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkIdWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling checkId');
        }
        // parse inputs
        $resourcePath = "/core/checkid";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($id !== null) {
            $queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'string',
                '/core/checkid'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation createProfile
     *
     * 
     *
     * @param string $profile Name of the new user (required)
     * @param string $email Email id of the new user (required)
     * @param string $password Password for the new user (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return string
     */
    public function createProfile($profile, $email, $password)
    {
        list($response) = $this->createProfileWithHttpInfo($profile, $email, $password);
        return $response;
    }

    /**
     * Operation createProfileWithHttpInfo
     *
     * 
     *
     * @param string $profile Name of the new user (required)
     * @param string $email Email id of the new user (required)
     * @param string $password Password for the new user (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function createProfileWithHttpInfo($profile, $email, $password)
    {
        // verify the required parameter 'profile' is set
        if ($profile === null) {
            throw new \InvalidArgumentException('Missing the required parameter $profile when calling createProfile');
        }
        // verify the required parameter 'email' is set
        if ($email === null) {
            throw new \InvalidArgumentException('Missing the required parameter $email when calling createProfile');
        }
        // verify the required parameter 'password' is set
        if ($password === null) {
            throw new \InvalidArgumentException('Missing the required parameter $password when calling createProfile');
        }
        // parse inputs
        $resourcePath = "/core/createprofile";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($profile !== null) {
            $queryParams['profile'] = $this->apiClient->getSerializer()->toQueryValue($profile);
        }
        // query params
        if ($email !== null) {
            $queryParams['email'] = $this->apiClient->getSerializer()->toQueryValue($email);
        }
        // query params
        if ($password !== null) {
            $queryParams['password'] = $this->apiClient->getSerializer()->toQueryValue($password);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'string',
                '/core/createprofile'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getProfileSettings
     *
     * 
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return string
     */
    public function getProfileSettings()
    {
        list($response) = $this->getProfileSettingsWithHttpInfo();
        return $response;
    }

    /**
     * Operation getProfileSettingsWithHttpInfo
     *
     * 
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProfileSettingsWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/core/getprofilesettings";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'string',
                '/core/getprofilesettings'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation setDisplayName
     *
     * 
     *
     * @param string $dispname Specify the display name you want to set (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return string
     */
    public function setDisplayName($dispname)
    {
        list($response) = $this->setDisplayNameWithHttpInfo($dispname);
        return $response;
    }

    /**
     * Operation setDisplayNameWithHttpInfo
     *
     * 
     *
     * @param string $dispname Specify the display name you want to set (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function setDisplayNameWithHttpInfo($dispname)
    {
        // verify the required parameter 'dispname' is set
        if ($dispname === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dispname when calling setDisplayName');
        }
        // parse inputs
        $resourcePath = "/core/setdisplayname";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($dispname !== null) {
            $queryParams['dispname'] = $this->apiClient->getSerializer()->toQueryValue($dispname);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'string',
                '/core/setdisplayname'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation subscribe
     *
     * 
     *
     * @param string $emailid Email Id of user (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function subscribe($emailid)
    {
        list($response) = $this->subscribeWithHttpInfo($emailid);
        return $response;
    }

    /**
     * Operation subscribeWithHttpInfo
     *
     * 
     *
     * @param string $emailid Email Id of user (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function subscribeWithHttpInfo($emailid)
    {
        // verify the required parameter 'emailid' is set
        if ($emailid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $emailid when calling subscribe');
        }
        // parse inputs
        $resourcePath = "/core/subscribe";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($emailid !== null) {
            $formParams['emailid'] = $this->apiClient->getSerializer()->toFormValue($emailid);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/core/subscribe'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation unsubscribe
     *
     * 
     *
     * @param string $emailid Email Id of user (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function unsubscribe($emailid)
    {
        list($response) = $this->unsubscribeWithHttpInfo($emailid);
        return $response;
    }

    /**
     * Operation unsubscribeWithHttpInfo
     *
     * 
     *
     * @param string $emailid Email Id of user (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function unsubscribeWithHttpInfo($emailid)
    {
        // verify the required parameter 'emailid' is set
        if ($emailid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $emailid when calling unsubscribe');
        }
        // parse inputs
        $resourcePath = "/core/unsubscribe";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($emailid !== null) {
            $formParams['emailid'] = $this->apiClient->getSerializer()->toFormValue($emailid);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/core/unsubscribe'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation updatePassword
     *
     * 
     *
     * @param string $oldpassword Old password of the user. (required)
     * @param string $newpassword New password the user wants to change too. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return string
     */
    public function updatePassword($oldpassword, $newpassword)
    {
        list($response) = $this->updatePasswordWithHttpInfo($oldpassword, $newpassword);
        return $response;
    }

    /**
     * Operation updatePasswordWithHttpInfo
     *
     * 
     *
     * @param string $oldpassword Old password of the user. (required)
     * @param string $newpassword New password the user wants to change too. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function updatePasswordWithHttpInfo($oldpassword, $newpassword)
    {
        // verify the required parameter 'oldpassword' is set
        if ($oldpassword === null) {
            throw new \InvalidArgumentException('Missing the required parameter $oldpassword when calling updatePassword');
        }
        // verify the required parameter 'newpassword' is set
        if ($newpassword === null) {
            throw new \InvalidArgumentException('Missing the required parameter $newpassword when calling updatePassword');
        }
        // parse inputs
        $resourcePath = "/core/updatepassword";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($oldpassword !== null) {
            $formParams['oldpassword'] = $this->apiClient->getSerializer()->toFormValue($oldpassword);
        }
        // form params
        if ($newpassword !== null) {
            $formParams['newpassword'] = $this->apiClient->getSerializer()->toFormValue($newpassword);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'string',
                '/core/updatepassword'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}