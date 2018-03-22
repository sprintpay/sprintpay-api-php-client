<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace SprintPay\Client\Client;

/**
 * Description of Card
 *
 * @author Rainbow
 */
class Card {
         
    const DISCRIMINATOR = null;

    /**
      * The original amount of the model.
      * @var string
      */
    protected static $sprintPayModelName = 'Card';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $sprintPayTypes = [
	"amount"=>"string",
	"currency"=>"string",
	"firstName"=>"string",
	"lastName"=>"string",
	"address1"=>"string",
	"address2"=>"string",
	"city"=>"string",
	"state"=>"string",
	"country"=>"string",
	"postal"=>"string",
	"mobileNumber"=>"string",
	"emailId"=>"string",
	"spMerchandUrl" => "string"
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $sprintPayFormats = [
	"amount"=>null,
	"currency"=>null,
	"firstName"=>null,
	"lastName"=>null,
	"address1"=>null,
	"address2"=>null,
	"city"=>null,
	"state"=>null,
	"country"=>null,
	"postal"=>null,
	"mobileNumber"=>null,
	"emailId"=>null,
	"spMerchandUrl" => null
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
	"amount"=>"amount",
	"currency"=>"currency",
	"firstName"=>"firstName",
	"lastName"=>"lastName",
	"address1"=>"address1",
	"address2"=>"address2",
	"city"=>"city",
	"state"=>"state",
	"country"=>"country",
	"postal"=>"postal",
	"mobileNumber"=>"mobileNumber",
	"emailId"=>"emailId",
	"spMerchandUrl" => "spMerchandUrl"
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
	"amount"=>"setAmount",
	"currency"=>"setCurrency",
	"firstName"=>"setFirstName",
	"lastName"=>"setLastName",
	"address1"=>"setAddress1",
	"address2"=>"setAddress2",
	"city"=>"setCity",
	"state"=>"setState",
	"country"=>"setCountry",
	"postal"=>"setPostal",
	"mobileNumber"=>"setMobileNumber",
	"emailId"=>"setEmailId",
	"spMerchandUrl" => "setSpMerchandUrl"
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
	"amount"=>"getAmount",
	"currency"=>"getCurrency",
	"firstName"=>"getFirstName",
	"lastName"=>"getLastName",
	"address1"=>"getAddress1",
	"address2"=>"getAddress2",
	"city"=>"getCity",
	"state"=>"getState",
	"country"=>"getCountry",
	"postal"=>"getPostal",
	"mobileNumber"=>"getMobileNumber",
	"emailId"=>"getEmailId",
	"spMerchandUrl" => "getSpMerchandUrl"
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
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
        $this->container['address1'] = isset($data['address1']) ? $data['address1'] : null;
        $this->container['address2'] = isset($data['address2']) ? $data['address2'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['postal'] = isset($data['postal']) ? $data['postal'] : null;
        $this->container['mobileNumber'] = isset($data['mobileNumber']) ? $data['mobileNumber'] : null;
        $this->container['emailId'] = isset($data['emailId']) ? $data['emailId'] : null;
        $this->container['spMerchandUrl'] = isset($data['spMerchandUrl']) ? $data['spMerchandUrl'] : null;
    }
    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];


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
     * Gets firstName
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     * @param string $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->container['firstName'] = $firstName;

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
     * Gets recieverNumber
     * @return string
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets recieverNumber
     * @param string $recieverNumber
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->container['lastName'] = $lastName;

        return $this;
    }
  /**
     * Gets address1
     * @return string
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     * @param string $address1
     * @return $this
     */
    public function setAddress1($address1)
    {
        $this->container['address1'] = $address1;

        return $this;
    }  
      /**
     * Gets address2
     * @return string
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     * @param string $address2
     * @return $this
     */
    public function setAddress2($address2)
    {
        $this->container['address2'] = $address2;

        return $this;
    }
    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }
    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }
    /**
    * Gets country
    * @return string
    */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }
    /**
    * Gets postal
    * @return datetime
    */
    public function getPostal()
    {
        return $this->container['postal'];
    }

    /**
     * Sets postal
     * @param datetime $postal
     * @return $this
     */
    public function setPostal($postal)
    {
        $this->container['postal'] = $postal;

        return $this;
    }
    /**
    * Gets mobileNumber
    * @return string
    */
    public function getMobileNumber()
    {
        return $this->container['mobileNumber'];
    }

    /**
     * Sets mobileNumber
     * @param string $mobileNumber
     * @return $this
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->container['mobileNumber'] = $mobileNumber;

        return $this;
    }
        /**
    * Gets emailId
    * @return string
    */
    public function getEmailId()
    {
        return $this->container['emailId'];
    }

    /**
     * Sets emailId
     * @param string $emailId
     * @return $this
     */
    public function setEmailId($emailId)
    {
        $this->container['emailId'] = $emailId;

        return $this;
    }
            /**
    * Gets spMerchandUrl
    * @return string
    */
    public function getSpMerchandUrl()
    {
        return $this->container['spMerchandUrl'];
    }

    /**
     * Sets spMerchandUrl
     * @param string $spMerchandUrl
     * @return $this
     */
    public function setSpMerchandUrl($spMerchandUrl)
    {
        $this->container['spMerchandUrl'] = $spMerchandUrl;

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
