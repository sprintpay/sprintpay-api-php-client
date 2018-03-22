<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace SprintPay\Client\Client;

/**
 * Description of Transaction
 *
 * @author Rainbow
 */
class Transaction {

        
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
        "transactionID"=> 'int',
        "statusDesc"=> 'string',
        "amount"=> 'int',
        "recieverNumber"=> 'string',
        "senderNumber"=> 'int',
        "operationType"=> 'string',
        "statusCode"=> 'string',
        "opComment"=> 'string',
        "processingNumber"=> 'int',
        "operationDate"=> '\DateTime',
        "idSpMarchand"=>'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $sprintPayFormats = [
        "transactionID"=> 'int64',
        "statusDesc"=> null,
        "amount"=> 'int64',
        "recieverNumber"=> null,
        "senderNumber"=> 'int64',
        "operationType"=> null,
        "statusCode"=> null,
        "opComment"=> null,
        "processingNumber"=> 'int64',
        "operationDate"=> 'date-time',
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
        "transactionID"=> "transactionID",
        "statusDesc"=> "statusDesc",
        "amount"=> "amount",
        "recieverNumber"=>"recieverNumber",
        "senderNumber"=> "senderNumber",
        "operationType"=> "operationType",
        "statusCode"=> "statusCode",
        "opComment"=>"opComment",
        "processingNumber"=> "processingNumber",
        "operationDate"=> "operationDate",
        "idSpMarchand"=>"idSpMarchand"
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        "transactionID"=> "setTransactionID",
        "statusDesc"=> "setStatusDesc",
        "amount"=> "setAmount",
        "recieverNumber"=>"setRecieverNumber",
        "senderNumber"=> "setSenderNumber",
        "operationType"=> "setOperationType",
        "statusCode"=> "setStatusCode",
        "opComment"=>"setOpComment",
        "processingNumber"=> "setProcessingNumber",
        "operationDate"=> "setOperationDate",
        "idSpMarchand"=>"setIdSpMarchand"
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        "transactionID"=> "getTransactionID",
        "statusDesc"=> "getStatusDesc",
        "amount"=> "getAmount",
        "recieverNumber"=>"getRecieverNumber",
        "senderNumber"=> "getSenderNumber",
        "operationType"=> "getOperationType",
        "statusCode"=> "getStatusCode",
        "opComment"=>"getOpComment",
        "processingNumber"=> "getProcessingNumber",
        "operationDate"=> "getOperationDate",
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
        $this->container['transactionID'] = isset($data['transactionID']) ? $data['transactionID'] : null;
        $this->container['statusDesc'] = isset($data['statusDesc']) ? $data['statusDesc'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['recieverNumber'] = isset($data['recieverNumber']) ? $data['recieverNumber'] : null;
        $this->container['senderNumber'] = isset($data['senderNumber']) ? $data['senderNumber'] : null;
        $this->container['operationType'] = isset($data['operationType']) ? $data['operationType'] : null;
        $this->container['statusCode'] = isset($data['statusCode']) ? $data['statusCode'] : null;
        $this->container['opComment'] = isset($data['opComment']) ? $data['opComment'] : null;
        $this->container['processingNumber'] = isset($data['processingNumber']) ? $data['processingNumber'] : null;
        $this->container['operationDate'] = isset($data['operationDate']) ? $data['operationDate'] : null;
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
     * Gets transactionID
     * @return int
     */
    public function getTransactionID()
    {
        return $this->container['transactionID'];
    }

    /**
     * Sets transactionID
     * @param int $transactionID
     * @return $this
     */
    public function setTransactionID($transactionID)
    {
        $this->container['transactionID'] = $transactionID;

        return $this;
    }
    /**
     * Gets statusDesc
     * @return string
     */
    public function getStatusDesc()
    {
        return $this->container['statusDesc'];
    }

    /**
     * Sets statusDesc
     * @param string $statusDesc
     * @return $this
     */
    public function setStatusDesc($statusDesc)
    {
        $this->container['statusDesc'] = $statusDesc;

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
     * Gets recieverNumber
     * @return int
     */
    public function getRecieverNumber()
    {
        return $this->container['recieverNumber'];
    }

    /**
     * Sets recieverNumber
     * @param int $recieverNumber
     * @return $this
     */
    public function setRecieverNumber($recieverNumber)
    {
        $this->container['recieverNumber'] = $recieverNumber;

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
     * Gets statusCode
     * @return string
     */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
     * Sets statusCode
     * @param string $statusCode
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->container['statusCode'] = $statusCode;

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
