# MarketPay\PayInsBankwireApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**payInsBankwireBankwireGetPayment**](PayInsBankwireApi.md#payInsBankwireBankwireGetPayment) | **GET** /v2.1/PayInsBankwire/payments/{PayInId} | 
[**payInsBankwireBankwirePaymentByDirect**](PayInsBankwireApi.md#payInsBankwireBankwirePaymentByDirect) | **POST** /v2.1/PayInsBankwire/payments/direct | 
[**payInsBankwireBankwirePostRefund**](PayInsBankwireApi.md#payInsBankwireBankwirePostRefund) | **POST** /v2.1/PayInsBankwire/payments/{PayInId}/refunds | 


# **payInsBankwireBankwireGetPayment**
> \MarketPay\Model\PayInBankwireResponse payInsBankwireBankwireGetPayment($pay_in_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\PayInsBankwireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pay_in_id = 789; // int | 

try {
    $result = $apiInstance->payInsBankwireBankwireGetPayment($pay_in_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsBankwireApi->payInsBankwireBankwireGetPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pay_in_id** | **int**|  |

### Return type

[**\MarketPay\Model\PayInBankwireResponse**](../Model/PayInBankwireResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsBankwireBankwirePaymentByDirect**
> \MarketPay\Model\PayInBankwireResponse payInsBankwireBankwirePaymentByDirect($x_webhook, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\PayInsBankwireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_webhook = "x_webhook_example"; // string | 
$body = new \MarketPay\Model\PayInBankwirePost(); // \MarketPay\Model\PayInBankwirePost | 

try {
    $result = $apiInstance->payInsBankwireBankwirePaymentByDirect($x_webhook, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsBankwireApi->payInsBankwireBankwirePaymentByDirect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_webhook** | **string**|  | [optional]
 **body** | [**\MarketPay\Model\PayInBankwirePost**](../Model/PayInBankwirePost.md)|  | [optional]

### Return type

[**\MarketPay\Model\PayInBankwireResponse**](../Model/PayInBankwireResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsBankwireBankwirePostRefund**
> \MarketPay\Model\PayInBankwireRefundResponse payInsBankwireBankwirePostRefund($pay_in_id, $x_webhook, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\PayInsBankwireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pay_in_id = 789; // int | 
$x_webhook = "x_webhook_example"; // string | 
$body = new \MarketPay\Model\PayInBankwireRefundPost(); // \MarketPay\Model\PayInBankwireRefundPost | 

try {
    $result = $apiInstance->payInsBankwireBankwirePostRefund($pay_in_id, $x_webhook, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsBankwireApi->payInsBankwireBankwirePostRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pay_in_id** | **int**|  |
 **x_webhook** | **string**|  | [optional]
 **body** | [**\MarketPay\Model\PayInBankwireRefundPost**](../Model/PayInBankwireRefundPost.md)|  | [optional]

### Return type

[**\MarketPay\Model\PayInBankwireRefundResponse**](../Model/PayInBankwireRefundResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

