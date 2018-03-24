# Sprintpay\Client\MobilePaymentApi

All URIs are relative to *http://197.159.2.146:7086/sprintpayapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mobilemoney**](MobilePaymentApi.md#mobilemoney) | **POST** /payment/mobilemoney/request | Make a new mobilemoney payment
[**mobilestatus**](MobilePaymentApi.md#mobilestatus) | **GET** /payement/mobilemoney/check | check the status of mobile payment request using processingNumber
[**orangemoney**](MobilePaymentApi.md#orangemoney) | **POST** /payment/orangemoney/request | Make an payment using orangemoney


# **mobilemoney**
> \Sprintpay\Client\Model\PaymentMobileReponse mobilemoney($body)

Make a new mobilemoney payment

Make an payment using MobileMoney

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

$apiInstance = new Sprintpay\Client\Api\MobilePaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Sprintpay\Client\Model\Orangemoney(); // \Sprintpay\Client\Model\Orangemoney | Mobilemoney object that needs to be added to the body of request

try {
    $result = $apiInstance->mobilemoney($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobilePaymentApi->mobilemoney: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Sprintpay\Client\Model\Orangemoney**](../Model/Orangemoney.md)| Mobilemoney object that needs to be added to the body of request |

### Return type

[**\Sprintpay\Client\Model\PaymentMobileReponse**](../Model/PaymentMobileReponse.md)

### Authorization

[DateTime](../../README.md#DateTime), [autorization](../../README.md#autorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mobilestatus**
> \Sprintpay\Client\Model\PaymentMobileReponse mobilestatus($processing_number)

check the status of mobile payment request using processingNumber

processingNumber returned by the previous endpoint(Alpha-numeric, space and some special characters)

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

$apiInstance = new Sprintpay\Client\Api\MobilePaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processing_number = array("processing_number_example"); // string[] | status by processingNumber

try {
    $result = $apiInstance->mobilestatus($processing_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobilePaymentApi->mobilestatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **processing_number** | [**string[]**](../Model/string.md)| status by processingNumber |

### Return type

[**\Sprintpay\Client\Model\PaymentMobileReponse**](../Model/PaymentMobileReponse.md)

### Authorization

[DateTime](../../README.md#DateTime), [autorization](../../README.md#autorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orangemoney**
> \Sprintpay\Client\Model\PaymentMobileReponse orangemoney($body)

Make an payment using orangemoney



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

$apiInstance = new Sprintpay\Client\Api\MobilePaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Sprintpay\Client\Model\Orangemoney(); // \Sprintpay\Client\Model\Orangemoney | object that needs to be added to the body of request

try {
    $result = $apiInstance->orangemoney($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobilePaymentApi->orangemoney: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Sprintpay\Client\Model\Orangemoney**](../Model/Orangemoney.md)| object that needs to be added to the body of request |

### Return type

[**\Sprintpay\Client\Model\PaymentMobileReponse**](../Model/PaymentMobileReponse.md)

### Authorization

[DateTime](../../README.md#DateTime), [autorization](../../README.md#autorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

