<?php
/**
 * Login_Related_APIApi
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
 * Login_Related_APIApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Login_Related_APIApi
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
     * @return Login_Related_APIApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation core2faloginPost
     *
     * 
     *
     * @param string $userid Users login name (required)
     * @param string $code Enter the code you have recieved in your email (required)
     * @param string $token Enter the token you had recieved in message field while performing loginguest api call (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Model2faloginResponse[]
     */
    public function core2faloginPost($userid, $code, $token)
    {
        list($response) = $this->core2faloginPostWithHttpInfo($userid, $code, $token);
        return $response;
    }

    /**
     * Operation core2faloginPostWithHttpInfo
     *
     * 
     *
     * @param string $userid Users login name (required)
     * @param string $code Enter the code you have recieved in your email (required)
     * @param string $token Enter the token you had recieved in message field while performing loginguest api call (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Model2faloginResponse[], HTTP status code, HTTP response headers (array of strings)
     */
    public function core2faloginPostWithHttpInfo($userid, $code, $token)
    {
        // verify the required parameter 'userid' is set
        if ($userid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $userid when calling core2faloginPost');
        }
        // verify the required parameter 'code' is set
        if ($code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $code when calling core2faloginPost');
        }
        // verify the required parameter 'token' is set
        if ($token === null) {
            throw new \InvalidArgumentException('Missing the required parameter $token when calling core2faloginPost');
        }
        // parse inputs
        $resourcePath = "/core/2falogin";
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
        if ($userid !== null) {
            $queryParams['userid'] = $this->apiClient->getSerializer()->toQueryValue($userid);
        }
        // query params
        if ($code !== null) {
            $queryParams['code'] = $this->apiClient->getSerializer()->toQueryValue($code);
        }
        // query params
        if ($token !== null) {
            $queryParams['token'] = $this->apiClient->getSerializer()->toQueryValue($token);
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Model2faloginResponse[]',
                '/core/2falogin'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Model2faloginResponse[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Model2faloginResponse[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation coreGet2fagasecretGet
     *
     * 
     *
     * @param string $userid Specify the user name (required)
     * @param string $token Enter the token you had recieved in message field while performing loginguest api call (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Get2fagasecretResponse[]
     */
    public function coreGet2fagasecretGet($userid, $token)
    {
        list($response) = $this->coreGet2fagasecretGetWithHttpInfo($userid, $token);
        return $response;
    }

    /**
     * Operation coreGet2fagasecretGetWithHttpInfo
     *
     * 
     *
     * @param string $userid Specify the user name (required)
     * @param string $token Enter the token you had recieved in message field while performing loginguest api call (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Get2fagasecretResponse[], HTTP status code, HTTP response headers (array of strings)
     */
    public function coreGet2fagasecretGetWithHttpInfo($userid, $token)
    {
        // verify the required parameter 'userid' is set
        if ($userid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $userid when calling coreGet2fagasecretGet');
        }
        // verify the required parameter 'token' is set
        if ($token === null) {
            throw new \InvalidArgumentException('Missing the required parameter $token when calling coreGet2fagasecretGet');
        }
        // parse inputs
        $resourcePath = "/core/get2fagasecret";
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
        if ($userid !== null) {
            $queryParams['userid'] = $this->apiClient->getSerializer()->toQueryValue($userid);
        }
        // query params
        if ($token !== null) {
            $queryParams['token'] = $this->apiClient->getSerializer()->toQueryValue($token);
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
                '\Swagger\Client\Model\Get2fagasecretResponse[]',
                '/core/get2fagasecret'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Get2fagasecretResponse[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Get2fagasecretResponse[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation coreGet2fagasecretqrcodeGet
     *
     * 
     *
     * @param string $userid Specify the user name (required)
     * @param string $token Enter the token you had recieved in message field while performing loginguest api call (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function coreGet2fagasecretqrcodeGet($userid, $token)
    {
        list($response) = $this->coreGet2fagasecretqrcodeGetWithHttpInfo($userid, $token);
        return $response;
    }

    /**
     * Operation coreGet2fagasecretqrcodeGetWithHttpInfo
     *
     * 
     *
     * @param string $userid Specify the user name (required)
     * @param string $token Enter the token you had recieved in message field while performing loginguest api call (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function coreGet2fagasecretqrcodeGetWithHttpInfo($userid, $token)
    {
        // verify the required parameter 'userid' is set
        if ($userid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $userid when calling coreGet2fagasecretqrcodeGet');
        }
        // verify the required parameter 'token' is set
        if ($token === null) {
            throw new \InvalidArgumentException('Missing the required parameter $token when calling coreGet2fagasecretqrcodeGet');
        }
        // parse inputs
        $resourcePath = "/core/get2fagasecretqrcode";
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
        if ($userid !== null) {
            $queryParams['userid'] = $this->apiClient->getSerializer()->toQueryValue($userid);
        }
        // query params
        if ($token !== null) {
            $queryParams['token'] = $this->apiClient->getSerializer()->toQueryValue($token);
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
                null,
                '/core/get2fagasecretqrcode'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation coreLocksessionPost
     *
     * 
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LocksessionResponse[]
     */
    public function coreLocksessionPost()
    {
        list($response) = $this->coreLocksessionPostWithHttpInfo();
        return $response;
    }

    /**
     * Operation coreLocksessionPostWithHttpInfo
     *
     * 
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LocksessionResponse[], HTTP status code, HTTP response headers (array of strings)
     */
    public function coreLocksessionPostWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/core/locksession";
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
                '\Swagger\Client\Model\LocksessionResponse[]',
                '/core/locksession'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LocksessionResponse[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LocksessionResponse[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation coreResend2facodePost
     *
     * 
     *
     * @param string $userid Users login name (required)
     * @param string $token Enter the token you had recieved in message field while performing loginguest api call (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Resend2facodeResponse[]
     */
    public function coreResend2facodePost($userid, $token)
    {
        list($response) = $this->coreResend2facodePostWithHttpInfo($userid, $token);
        return $response;
    }

    /**
     * Operation coreResend2facodePostWithHttpInfo
     *
     * 
     *
     * @param string $userid Users login name (required)
     * @param string $token Enter the token you had recieved in message field while performing loginguest api call (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Resend2facodeResponse[], HTTP status code, HTTP response headers (array of strings)
     */
    public function coreResend2facodePostWithHttpInfo($userid, $token)
    {
        // verify the required parameter 'userid' is set
        if ($userid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $userid when calling coreResend2facodePost');
        }
        // verify the required parameter 'token' is set
        if ($token === null) {
            throw new \InvalidArgumentException('Missing the required parameter $token when calling coreResend2facodePost');
        }
        // parse inputs
        $resourcePath = "/core/resend2facode";
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
        if ($userid !== null) {
            $queryParams['userid'] = $this->apiClient->getSerializer()->toQueryValue($userid);
        }
        // query params
        if ($token !== null) {
            $queryParams['token'] = $this->apiClient->getSerializer()->toQueryValue($token);
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Resend2facodeResponse[]',
                '/core/resend2facode'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Resend2facodeResponse[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Resend2facodeResponse[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation coreResetpasswordPost
     *
     * 
     *
     * @param string $profile Profile name (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ResetpasswordResponse[]
     */
    public function coreResetpasswordPost($profile)
    {
        list($response) = $this->coreResetpasswordPostWithHttpInfo($profile);
        return $response;
    }

    /**
     * Operation coreResetpasswordPostWithHttpInfo
     *
     * 
     *
     * @param string $profile Profile name (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ResetpasswordResponse[], HTTP status code, HTTP response headers (array of strings)
     */
    public function coreResetpasswordPostWithHttpInfo($profile)
    {
        // verify the required parameter 'profile' is set
        if ($profile === null) {
            throw new \InvalidArgumentException('Missing the required parameter $profile when calling coreResetpasswordPost');
        }
        // parse inputs
        $resourcePath = "/core/resetpassword";
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
                '\Swagger\Client\Model\ResetpasswordResponse[]',
                '/core/resetpassword'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ResetpasswordResponse[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ResetpasswordResponse[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation coreVerifyemailPost
     *
     * 
     *
     * @param string $u User email id (required)
     * @param string $tag Specify Verifytag (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\VerifyemailResponse[]
     */
    public function coreVerifyemailPost($u, $tag)
    {
        list($response) = $this->coreVerifyemailPostWithHttpInfo($u, $tag);
        return $response;
    }

    /**
     * Operation coreVerifyemailPostWithHttpInfo
     *
     * 
     *
     * @param string $u User email id (required)
     * @param string $tag Specify Verifytag (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\VerifyemailResponse[], HTTP status code, HTTP response headers (array of strings)
     */
    public function coreVerifyemailPostWithHttpInfo($u, $tag)
    {
        // verify the required parameter 'u' is set
        if ($u === null) {
            throw new \InvalidArgumentException('Missing the required parameter $u when calling coreVerifyemailPost');
        }
        // verify the required parameter 'tag' is set
        if ($tag === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tag when calling coreVerifyemailPost');
        }
        // parse inputs
        $resourcePath = "/core/verifyemail";
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
        if ($u !== null) {
            $queryParams['u'] = $this->apiClient->getSerializer()->toQueryValue($u);
        }
        // query params
        if ($tag !== null) {
            $queryParams['tag'] = $this->apiClient->getSerializer()->toQueryValue($tag);
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\VerifyemailResponse[]',
                '/core/verifyemail'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\VerifyemailResponse[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\VerifyemailResponse[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
