<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace SprintPay\Client\Client;

/**
 * Description of PaymentStatus
 *
 * @author Rainbow
 */
class PaymentStatus {
   
        
    const DISCRIMINATOR = null;

    /**
      * The original amount of the model.
      * @var string
      */
    protected static $sprintPayModelName = 'Transaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $sprintPayTypes = [
        "spTransactionId"=> 'int',
        "orderStatus"=> 'string',
        "amount"=> 'int',
        "invoiceNumber"=> 'string',
        "currency"=> 'string',
        "idSpMarchand"=>'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $sprintPayFormats = [
        "spTransactionId"=> 'int64',
        "orderStatus"=> 'string',
        "amount"=> 'int64',
        "invoiceNumber"=> 'int64',
        "currency"=> 'string',
        "idSpMarchand"=>'int64'
    ];

    public static function sprintPayTypes()
    {
        return self::$sprintPayTypes;
    }

    public static function sprintPayFormats()
    {
        return self::$sprintPayFormats;
    }

    /**
     * Array of attributes where the key is the local amount, and the value is the original amount
     * @var string[]
     */
    protected static $attributeMap = [
        "spTransactionId"=> "spTransactionId",
        "orderStatus"=> "orderStatus",
        "amount"=> "amount",
        "invoiceNumber"=>"invoiceNumber",
        "currency"=> "currency",
        "idSpMarchand"=>"idSpMarchand"
    ];



    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        "spTransactionId"=> "setSpTransactionId",
        "orderStatus"=> "setOrderStatus",
        "amount"=> "setAmount",
        "invoiceNumber"=>"setInvoiceNumber",
        "currency"=> "setCurrency",
        "idSpMarchand"=>"setIdSpMarchand"
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        "spTransactionId"=> "getSpTransactionId",
        "orderStatus"=> "getOrderStatus",
        "amount"=> "getAmount",
        "invoiceNumber"=>"getInvoiceNumber",
        "currency"=> "getCurrency",
        "idSpMarchand"=>"getIdSpMarchand"
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['spTransactionId'] = isset($data['spTransactionId']) ? $data['spTransactionId'] : null;
        $this->container['orderStatus'] = isset($data['orderStatus']) ? $data['orderStatus'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['invoiceNumber'] = isset($data['invoiceNumber']) ? $data['invoiceNumber'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['idSpMarchand'] = isset($data['idSpMarchand']) ? $data['idSpMarchand'] : null;
    }
    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];



    /**
     * valphoneate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valphone
     */
    public function valphone()
    {

        return true;
    }


    /**
     * Gets spTransactionId
     * @return int
     */
    public function getSpTransactionId()
    {
        return $this->container['spTransactionId'];
    }

    /**
     * Sets spTransactionId
     * @param int $spTransactionId
     * @return $this
     */
    public function setSpTransactionId($spTransactionId)
    {
        $this->container['spTransactionId'] = $spTransactionId;

        return $this;
    }
    /**
     * Gets orderStatus
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->container['orderStatus'];
    }

    /**
     * Sets orderStatus
     * @param string $orderStatus
     * @return $this
     */
    public function setOrderStatus($orderStatus)
    {
        $this->container['orderStatus'] = $orderStatus;

        return $this;
    }
    /**
     * Gets amount
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param int $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }
    /**
     * Gets invoiceNumber
     * @return int
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoiceNumber'];
    }

    /**
     * Sets invoiceNumber
     * @param int $invoiceNumber
     * @return $this
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->container['invoiceNumber'] = $invoiceNumber;

        return $this;
    }
    /**
     * Gets senderNumber
     * @return int
     */
    public function getSenderNumber()
    {
        return $this->container['senderNumber'];
    }

    /**
     * Sets senderNumber
     * @param int $senderNumber
     * @return $this
     */
    public function setSenderNumber($senderNumber)
    {
        $this->container['senderNumber'] = $senderNumber;

        return $this;
    }
    /**
     * Gets operationType
     * @return string
     */
    public function getOperationType()
    {
        return $this->container['operationType'];
    }

    /**
     * Sets operationType
     * @param string $operationType
     * @return $this
     */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;

        return $this;
    }
    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }
    /**
    * Gets opComment
    * @return string
    */
    public function getOpComment()
    {
        return $this->container['opComment'];
    }

    /**
     * Sets opComment
     * @param string $opComment
     * @return $this
     */
    public function setOpComment($opComment)
    {
        $this->container['opComment'] = $opComment;

        return $this;
    }
    /**
    * Gets operationDate
    * @return datetime
    */
    public function getOperationDate()
    {
        return $this->container['operationDate'];
    }

    /**
     * Sets operationDate
     * @param datetime $operationDate
     * @return $this
     */
    public function setOperationDate($operationDate)
    {
        $this->container['operationDate'] = $operationDate;

        return $this;
    }
    /**
    * Gets processingNumber
    * @return int
    */
    public function getProcessingNumber()
    {
        return $this->container['processingNumber'];
    }

    /**
     * Sets processingNumber
     * @param int $processingNumber
     * @return $this
     */
    public function setProcessingNumber($processingNumber)
    {
        $this->container['processingNumber'] = $processingNumber;

        return $this;
    }
        /**
    * Gets idSpMarchand
    * @return int
    */
    public function getIdSpMarchand()
    {
        return $this->container['idSpMarchand'];
    }

    /**
     * Sets idSpMarchand
     * @param int $idSpMarchand
     * @return $this
     */
    public function setIdSpMarchand($idSpMarchand)
    {
        $this->container['idSpMarchand'] = $idSpMarchand;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return vophone
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return vophone
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\SprintPay\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\SprintPay\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}
