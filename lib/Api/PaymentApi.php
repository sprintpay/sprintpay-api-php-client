<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Payment
 *
 * @author Rainbow
 */

namespace SprintPay\Client\Api;

use \SprintPay\Client\ApiClient;
use \SprintPay\Client\ApiException;


class PaymentApi {
    
        /**
     * API Client
     *
     * @var \SprintPay\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \SprintPay\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\SprintPay\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \SprintPay\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \SprintPay\Client\ApiClient $apiClient set the API client
     *
     * @return PetApi
     */
    public function setApiClient(\SprintPay\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
    
    public function mobileMoneyPayment($body)
    {
        $resourcePath = "payment/mobilemoney/request";
        list($response) = $this->PaymentByMobile($body,$resourcePath);
        return $response;
    }
    
    public function orangeMoneyPayment($body)
    {
        $resourcePath = "payment/orangemoney/request";
        list($response) = $this->PaymentByMobile($body,$resourcePath);
        return $response;
    }
    public function checkStatus($body){
        $resourcePath = "payment/mobilemoney/check";
        list($response) = $this->checkPaymentStatus($body,$resourcePath);
        return $response;
    }
    public function cardPayment($body){
        $resourcePath = "payement/card/hosted/url";
        list($response) = $this->paymentByCard($body,$resourcePath);
        return $response;
    }
    public function checkCardPayment($body){
        $resourcePath = "payement/card/hosted/check";
        list($response) = $this->checkCardPaymentStatus($body,$resourcePath);
        return $response;
    }
    /**
     * Operation payment
     *
     * make a new payment
     *
     * @param \Sprintpay\Client\Model\payement $body Pet object that needs to be added to the store (required)
     * @throws \Sprintpay\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    
    public function PaymentByMobile($body,$resourcePath)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling addPet');
        }
        // parse inputs
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/xml', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] =  $this->apiClient->getAuthorizationHeader("sprintpay");
        }
        $headerParams['Authorization'] =  $this->apiClient->getAuthorizationHeader("sprintpay");
        $headerParams['DateTime'] =  $this->apiClient->getConfig()->getDefaultDate();
        // make the API Call
        // var_dump($headerParams);
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                $resourcePath
            );
            
            return [$this->apiClient->getSerializer()->deserialize($response, '\SprintPay\Client\Client\Transaction[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                   case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SprintPay\Client\Client\Transaction[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    public function paymentByCard($body,$resourcePath)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling addPet');
        }
        // parse inputs
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/xml', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
 
        $headerParams['Authorization'] =  $this->apiClient->getAuthorizationHeader("sprintpay");
        $headerParams['DateTime'] =  $this->apiClient->getConfig()->getDefaultDate();
        // make the API Call
         //echo $httpBody;
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                $resourcePath
            );
            return [$response, $statusCode, $httpHeader];
          
        } catch (ApiException $e) {
            switch ($e->getCode()) {

            }

            throw $e;
        }
    }
    public function checkPaymentStatus($processingNumber,$resourcePath)
    {
        // verify the required parameter 'body' is set
        if ($processingNumber === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling addPet');
        }
        // parse inputs
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/xml', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // query params
        if (is_array($processingNumber)) {
            $processingNumber = $this->apiClient->getSerializer()->serializeCollection($processingNumber, 'processingNumber', true);
        }
        if ($processingNumber !== null) {
            $queryParams['processingNumber'] = $this->apiClient->getSerializer()->toQueryValue($processingNumber);
        }
                   
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] =  $this->apiClient->getAuthorizationHeader("sprintpay");
        }
        $headerParams['Authorization'] =  $this->apiClient->getAuthorizationHeader("sprintpay");
        $headerParams['DateTime'] =  $this->apiClient->getConfig()->getDefaultDate();
        // make the API Call
        // var_dump($headerParams);
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                $resourcePath
            );
         //   var_dump($response);
            return [$this->apiClient->getSerializer()->deserialize($response, '\SprintPay\Client\Client\Transaction[]'), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SprintPay\Client\Client\Transaction[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    public function checkCardPaymentStatus($transaction,$resourcePath)
    {
        // verify the required parameter 'body' is set
        if ($transaction === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling addPet');
        }
        // parse inputs
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/xml', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // query params
        if (is_array($transaction)) {
            $transaction = $this->apiClient->getSerializer()->serializeCollection($transaction, 'transaction', true);
        }
        if ($transaction !== null) {
            $queryParams['transaction'] = $this->apiClient->getSerializer()->toQueryValue($transaction);
        }
                   
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] =  $this->apiClient->getAuthorizationHeader("sprintpay");
        }
        $headerParams['Authorization'] =  $this->apiClient->getAuthorizationHeader("sprintpay");
        $headerParams['DateTime'] =  $this->apiClient->getConfig()->getDefaultDate();
        // make the API Call
        // var_dump($headerParams);
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                $resourcePath
            );
         //   var_dump($response);
            return [$this->apiClient->getSerializer()->deserialize($response, '\SprintPay\Client\Client\PaymentStatus'), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SprintPay\Client\Client\PaymentStatus', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
