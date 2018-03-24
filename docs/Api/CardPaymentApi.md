# Sprintpay\Client\CardPaymentApi

All URIs are relative to *http://197.159.2.146:7086/sprintpayapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cardStatus**](CardPaymentApi.md#cardStatus) | **GET** /payement/card/hosted/check | check the status of card payment request by transaction id
[**paymentcard**](CardPaymentApi.md#paymentcard) | **POST** /payement/card/hosted/url | Card payment


# **cardStatus**
> \Sprintpay\Client\Model\PaymentCardReponse cardStatus($transaction)

check the status of card payment request by transaction id

check the status of card payment request using transaction id who are provider in the url of payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: DateTime
$config = Sprintpay\Client\Configuration::getDefaultConfiguration()->setApiKey('datetime', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sprintpay\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('datetime', 'Bearer');
// Configure API key authorization: autorization
$config = Sprintpay\Client\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sprintpay\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$apiInstance = new Sprintpay\Client\Api\CardPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction = array("transaction_example"); // string[] | status of card payment

try {
    $result = $apiInstance->cardStatus($transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardPaymentApi->cardStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction** | [**string[]**](../Model/string.md)| status of card payment |

### Return type

[**\Sprintpay\Client\Model\PaymentCardReponse**](../Model/PaymentCardReponse.md)

### Authorization

[DateTime](../../README.md#DateTime), [autorization](../../README.md#autorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentcard**
> string paymentcard($body)

Card payment

Make an payment using credit card

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: DateTime
$config = Sprintpay\Client\Configuration::getDefaultConfiguration()->setApiKey('datetime', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sprintpay\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('datetime', 'Bearer');
// Configure API key authorization: autorization
$config = Sprintpay\Client\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sprintpay\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$apiInstance = new Sprintpay\Client\Api\CardPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Sprintpay\Client\Model\Card(); // \Sprintpay\Client\Model\Card | Created card object

try {
    $result = $apiInstance->paymentcard($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardPaymentApi->paymentcard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Sprintpay\Client\Model\Card**](../Model/Card.md)| Created card object |

### Return type

**string**

### Authorization

[DateTime](../../README.md#DateTime), [autorization](../../README.md#autorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

