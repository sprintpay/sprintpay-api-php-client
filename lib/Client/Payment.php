<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace SprintPay\Client\Client;
use \ArrayAccess;
/**
 * Description of Payment
 *
 * @author Rainbow
 */
class Payment implements ArrayAccess{


    const DISCRIMINATOR = null;

    /**
      * The original amount of the model.
      * @var string
      */
    protected static $sprintPayModelName = 'Payment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $sprintPayTypes = [
        'phone' => 'int',
        'amount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $sprintPayFormats = [
        'phone' => 'int64',
        'amount' => 'int64'
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
        'phone' => 'phone',
        'amount' => 'amount'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'phone' => 'setPhone',
        'amount' => 'setAmount'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'phone' => 'getPhone',
        'amount' => 'getAmount'
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
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
    }
    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * show all the invalphone properties with reasons.
     *
     * @return array invalphone properties with reasons
     */
    public function listInvalphoneProperties()
    {
        $invalphone_properties = [];

        return $invalphone_properties;
    }

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
     * Gets phone
     * @return int
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     * @param int $phone
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets amount
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param string $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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
