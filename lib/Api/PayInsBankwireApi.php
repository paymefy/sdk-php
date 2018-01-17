<?php
/**
 * PayInsBankwireApi
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
 * PayInsBankwireApi Class Doc Comment
 *
 * @category Class
 * @package  MarketPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PayInsBankwireApi
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
     * @return PayInsBankwireApi
     */
    public function setApiClient(\MarketPay\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation payInsBankwireBankwireGetPayment
     *
     * @param int $pay_in_id  (required)
     * @throws \MarketPay\ApiException on non-2xx response
     * @return \MarketPay\Model\PayInBankwireResponse
     */
    public function payInsBankwireBankwireGetPayment($pay_in_id)
    {
        list($response) = $this->payInsBankwireBankwireGetPaymentWithHttpInfo($pay_in_id);
        return $response;
    }

    /**
     * Operation payInsBankwireBankwireGetPaymentWithHttpInfo
     *
     * @param int $pay_in_id  (required)
     * @throws \MarketPay\ApiException on non-2xx response
     * @return array of \MarketPay\Model\PayInBankwireResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function payInsBankwireBankwireGetPaymentWithHttpInfo($pay_in_id)
    {
        // verify the required parameter 'pay_in_id' is set
        if ($pay_in_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pay_in_id when calling payInsBankwireBankwireGetPayment');
        }
        // parse inputs
        $resourcePath = "/v2.01/PayInsBankwire/payments/{PayInId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($pay_in_id !== null) {
            $resourcePath = str_replace(
                "{" . "PayInId" . "}",
                $this->apiClient->getSerializer()->toPathValue($pay_in_id),
                $resourcePath
            );
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
                '\MarketPay\Model\PayInBankwireResponse',
                '/v2.01/PayInsBankwire/payments/{PayInId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\MarketPay\Model\PayInBankwireResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MarketPay\Model\PayInBankwireResponse', $e->getResponseHeaders());
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

    /**
     * Operation payInsBankwireBankwirePaymentByDirect
     *
     * @param \MarketPay\Model\PayInBankwirePost $bankwire_pay_in  (optional)
     * @throws \MarketPay\ApiException on non-2xx response
     * @return \MarketPay\Model\PayInBankwireResponse
     */
    public function payInsBankwireBankwirePaymentByDirect($bankwire_pay_in = null)
    {
        list($response) = $this->payInsBankwireBankwirePaymentByDirectWithHttpInfo($bankwire_pay_in);
        return $response;
    }

    /**
     * Operation payInsBankwireBankwirePaymentByDirectWithHttpInfo
     *
     * @param \MarketPay\Model\PayInBankwirePost $bankwire_pay_in  (optional)
     * @throws \MarketPay\ApiException on non-2xx response
     * @return array of \MarketPay\Model\PayInBankwireResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function payInsBankwireBankwirePaymentByDirectWithHttpInfo($bankwire_pay_in = null)
    {
        // parse inputs
        $resourcePath = "/v2.01/PayInsBankwire/payments/direct";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']);

        // body params
        $_tempBody = null;
        if (isset($bankwire_pay_in)) {
            $_tempBody = $bankwire_pay_in;
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MarketPay\Model\PayInBankwireResponse',
                '/v2.01/PayInsBankwire/payments/direct'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\MarketPay\Model\PayInBankwireResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MarketPay\Model\PayInBankwireResponse', $e->getResponseHeaders());
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

    /**
     * Operation payInsBankwireBankwirePostRefund
     *
     * @param int $pay_in_id  (required)
     * @param \MarketPay\Model\PayInBankwireRefundPost $bankwire_refund  (optional)
     * @throws \MarketPay\ApiException on non-2xx response
     * @return \MarketPay\Model\PayInBankwireRefundResponse
     */
    public function payInsBankwireBankwirePostRefund($pay_in_id, $bankwire_refund = null)
    {
        list($response) = $this->payInsBankwireBankwirePostRefundWithHttpInfo($pay_in_id, $bankwire_refund);
        return $response;
    }

    /**
     * Operation payInsBankwireBankwirePostRefundWithHttpInfo
     *
     * @param int $pay_in_id  (required)
     * @param \MarketPay\Model\PayInBankwireRefundPost $bankwire_refund  (optional)
     * @throws \MarketPay\ApiException on non-2xx response
     * @return array of \MarketPay\Model\PayInBankwireRefundResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function payInsBankwireBankwirePostRefundWithHttpInfo($pay_in_id, $bankwire_refund = null)
    {
        // verify the required parameter 'pay_in_id' is set
        if ($pay_in_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pay_in_id when calling payInsBankwireBankwirePostRefund');
        }
        // parse inputs
        $resourcePath = "/v2.01/PayInsBankwire/payments/{PayInId}/refunds";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']);

        // path params
        if ($pay_in_id !== null) {
            $resourcePath = str_replace(
                "{" . "PayInId" . "}",
                $this->apiClient->getSerializer()->toPathValue($pay_in_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($bankwire_refund)) {
            $_tempBody = $bankwire_refund;
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MarketPay\Model\PayInBankwireRefundResponse',
                '/v2.01/PayInsBankwire/payments/{PayInId}/refunds'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\MarketPay\Model\PayInBankwireRefundResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MarketPay\Model\PayInBankwireRefundResponse', $e->getResponseHeaders());
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
