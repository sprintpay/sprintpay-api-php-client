# SprintPayClient-php
This is a sample integration module  to use our sprint-pay payment api.

This PHP package is created [SprintPay Team](https://github.com/sprintpay/sprintPay-api-php-client) project:

- API version: 1.0.0
- Build package: io.sprintpay

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/sprintpay/sprintpay-api-php-client.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SprintPayClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: DateTime
$config = SprintPay\Client\Configuration::getDefaultConfiguration()->setApiKeyParameter('datetime', 'YOUR_DATETIME');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SprintPay\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('datetime', 'Bearer');
// Configure API key authorization: autorization
$config = SprintPay\Client\Configuration::getDefaultConfiguration()->setApiKeyParameter('authorization', 'YOUR_AUTORIZATION');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SprintPay\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$apiInstance = new SprintPay\Client\Api\CardPaymentApi(
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

## Documentation for API Endpoints

All URIs are relative to *http://197.159.2.146:7086/sprintpayapi*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CardPaymentApi* | [**cardStatus**](docs/Api/CardPaymentApi.md#cardstatus) | **GET** /payement/card/hosted/check | check the status of card payment request by transaction id
*CardPaymentApi* | [**paymentcard**](docs/Api/CardPaymentApi.md#paymentcard) | **POST** /payement/card/hosted/url | Card payment
*MobilePaymentApi* | [**mobilemoney**](docs/Api/MobilePaymentApi.md#mobilemoney) | **POST** /payment/mobilemoney/request | Make a new mobilemoney payment
*MobilePaymentApi* | [**mobilestatus**](docs/Api/MobilePaymentApi.md#mobilestatus) | **GET** /payement/mobilemoney/check | check the status of mobile payment request using processingNumber
*MobilePaymentApi* | [**orangemoney**](docs/Api/MobilePaymentApi.md#orangemoney) | **POST** /payment/orangemoney/request | Make an payment using orangemoney


## Documentation For Models

 - [ApiResponse](docs/Model/ApiResponse.md)
 - [Card](docs/Model/Card.md)
 - [Mobilemoney](docs/Model/Mobilemoney.md)
 - [Orangemoney](docs/Model/Orangemoney.md)
 - [PaymentCardReponse](docs/Model/PaymentCardReponse.md)
 - [PaymentMobileReponse](docs/Model/PaymentMobileReponse.md)


## Documentation For Authorization


## DateTime

- **Type**: API key
- **API key parameter name**: datetime
- **Location**: HTTP header

## autorization

- **Type**: API key
- **API key parameter name**: authorization
- **Location**: HTTP header


## Author

sprint-pay@sprint-pay.com


