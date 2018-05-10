# Swagger\Client\PayInsBankwireApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**payInsBankwireBankwireGetPayment**](PayInsBankwireApi.md#payInsBankwireBankwireGetPayment) | **GET** /v2.01/PayInsBankwire/payments/{PayInId} | 
[**payInsBankwireBankwirePaymentByDirect**](PayInsBankwireApi.md#payInsBankwireBankwirePaymentByDirect) | **POST** /v2.01/PayInsBankwire/payments/direct | 
[**payInsBankwireBankwirePostRefund**](PayInsBankwireApi.md#payInsBankwireBankwirePostRefund) | **POST** /v2.01/PayInsBankwire/payments/{PayInId}/refunds | 


# **payInsBankwireBankwireGetPayment**
> \Swagger\Client\Model\PayInBankwireResponse payInsBankwireBankwireGetPayment($pay_in_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayInsBankwireApi(
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

[**\Swagger\Client\Model\PayInBankwireResponse**](../Model/PayInBankwireResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsBankwireBankwirePaymentByDirect**
> \Swagger\Client\Model\PayInBankwireResponse payInsBankwireBankwirePaymentByDirect($bankwire_pay_in)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayInsBankwireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bankwire_pay_in = new \Swagger\Client\Model\PayInBankwirePost(); // \Swagger\Client\Model\PayInBankwirePost | 

try {
    $result = $apiInstance->payInsBankwireBankwirePaymentByDirect($bankwire_pay_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsBankwireApi->payInsBankwireBankwirePaymentByDirect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankwire_pay_in** | [**\Swagger\Client\Model\PayInBankwirePost**](../Model/PayInBankwirePost.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PayInBankwireResponse**](../Model/PayInBankwireResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsBankwireBankwirePostRefund**
> \Swagger\Client\Model\PayInBankwireRefundResponse payInsBankwireBankwirePostRefund($pay_in_id, $bankwire_refund)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayInsBankwireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pay_in_id = 789; // int | 
$bankwire_refund = new \Swagger\Client\Model\PayInBankwireRefundPost(); // \Swagger\Client\Model\PayInBankwireRefundPost | 

try {
    $result = $apiInstance->payInsBankwireBankwirePostRefund($pay_in_id, $bankwire_refund);
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
 **bankwire_refund** | [**\Swagger\Client\Model\PayInBankwireRefundPost**](../Model/PayInBankwireRefundPost.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PayInBankwireRefundResponse**](../Model/PayInBankwireRefundResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
