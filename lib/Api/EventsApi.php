<?php
/**
 * EventsApi
 * PHP version 5
 *
 * @category Class
 * @package  MarketPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MarketPay API
 *
 * API for Smart Contracts and Payments
 *
 * OpenAPI spec version: v2.01
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MarketPay\Api;

use \MarketPay\ApiClient;
use \MarketPay\ApiException;
use \MarketPay\Configuration;
use \MarketPay\ObjectSerializer;

/**
 * EventsApi Class Doc Comment
 *
 * @category Class
 * @package  MarketPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EventsApi
{
    /**
     * API Client
     *
     * @var \MarketPay\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \MarketPay\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\MarketPay\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \MarketPay\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \MarketPay\ApiClient $apiClient set the API client
     *
     * @return EventsApi
     */
    public function setApiClient(\MarketPay\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation eventsGet
     *
     * Values List
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \MarketPay\ApiException on non-2xx response
     * @return \MarketPay\Model\EventResponse[]
     */
    public function eventsGet($page = null, $per_page = null)
    {
        list($response) = $this->eventsGetWithHttpInfo($page, $per_page);
        return $response;
    }

    /**
     * Operation eventsGetWithHttpInfo
     *
     * Values List
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \MarketPay\ApiException on non-2xx response
     * @return array of \MarketPay\Model\EventResponse[], HTTP status code, HTTP response headers (array of strings)
     */
    public function eventsGetWithHttpInfo($page = null, $per_page = null)
    {
        // parse inputs
        $resourcePath = "/v2.01/Events";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = $this->apiClient->getSerializer()->toQueryValue($per_page);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MarketPay\Model\EventResponse[]',
                '/v2.01/Events'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\MarketPay\Model\EventResponse[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MarketPay\Model\EventResponse[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MarketPay\Model\CustomApiErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
