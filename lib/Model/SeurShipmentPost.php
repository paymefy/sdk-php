<?php
/**
 * SeurShipmentPost
 *
 * PHP version 5
 *
 * @category Class
 * @package  MarketPay
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MarketPay API
 *
 * API for Smart Contracts and Payments
 *
 * OpenAPI spec version: v2.01
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MarketPay\Model;

use \ArrayAccess;

/**
 * SeurShipmentPost Class Doc Comment
 *
 * @category    Class
 * @package     MarketPay
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SeurShipmentPost implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SeurShipmentPost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tag' => 'string',
        'pick_up_date' => 'int',
        'sender' => '\MarketPay\Model\ShipmentActor',
        'receiver' => '\MarketPay\Model\ShipmentActor',
        'sender_user_id' => 'string',
        'receiver_user_id' => 'string',
        'product' => '\MarketPay\Model\Product',
        'observations' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tag' => null,
        'pick_up_date' => 'int64',
        'sender' => null,
        'receiver' => null,
        'sender_user_id' => null,
        'receiver_user_id' => null,
        'product' => null,
        'observations' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'tag' => 'Tag',
        'pick_up_date' => 'PickUpDate',
        'sender' => 'Sender',
        'receiver' => 'Receiver',
        'sender_user_id' => 'SenderUserId',
        'receiver_user_id' => 'ReceiverUserId',
        'product' => 'Product',
        'observations' => 'Observations'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'tag' => 'setTag',
        'pick_up_date' => 'setPickUpDate',
        'sender' => 'setSender',
        'receiver' => 'setReceiver',
        'sender_user_id' => 'setSenderUserId',
        'receiver_user_id' => 'setReceiverUserId',
        'product' => 'setProduct',
        'observations' => 'setObservations'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'tag' => 'getTag',
        'pick_up_date' => 'getPickUpDate',
        'sender' => 'getSender',
        'receiver' => 'getReceiver',
        'sender_user_id' => 'getSenderUserId',
        'receiver_user_id' => 'getReceiverUserId',
        'product' => 'getProduct',
        'observations' => 'getObservations'
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
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['pick_up_date'] = isset($data['pick_up_date']) ? $data['pick_up_date'] : null;
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
        $this->container['receiver'] = isset($data['receiver']) ? $data['receiver'] : null;
        $this->container['sender_user_id'] = isset($data['sender_user_id']) ? $data['sender_user_id'] : null;
        $this->container['receiver_user_id'] = isset($data['receiver_user_id']) ? $data['receiver_user_id'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['observations'] = isset($data['observations']) ? $data['observations'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets tag
     * @return string
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     * @param string $tag
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets pick_up_date
     * @return int
     */
    public function getPickUpDate()
    {
        return $this->container['pick_up_date'];
    }

    /**
     * Sets pick_up_date
     * @param int $pick_up_date
     * @return $this
     */
    public function setPickUpDate($pick_up_date)
    {
        $this->container['pick_up_date'] = $pick_up_date;

        return $this;
    }

    /**
     * Gets sender
     * @return \MarketPay\Model\ShipmentActor
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     * @param \MarketPay\Model\ShipmentActor $sender
     * @return $this
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets receiver
     * @return \MarketPay\Model\ShipmentActor
     */
    public function getReceiver()
    {
        return $this->container['receiver'];
    }

    /**
     * Sets receiver
     * @param \MarketPay\Model\ShipmentActor $receiver
     * @return $this
     */
    public function setReceiver($receiver)
    {
        $this->container['receiver'] = $receiver;

        return $this;
    }

    /**
     * Gets sender_user_id
     * @return string
     */
    public function getSenderUserId()
    {
        return $this->container['sender_user_id'];
    }

    /**
     * Sets sender_user_id
     * @param string $sender_user_id
     * @return $this
     */
    public function setSenderUserId($sender_user_id)
    {
        $this->container['sender_user_id'] = $sender_user_id;

        return $this;
    }

    /**
     * Gets receiver_user_id
     * @return string
     */
    public function getReceiverUserId()
    {
        return $this->container['receiver_user_id'];
    }

    /**
     * Sets receiver_user_id
     * @param string $receiver_user_id
     * @return $this
     */
    public function setReceiverUserId($receiver_user_id)
    {
        $this->container['receiver_user_id'] = $receiver_user_id;

        return $this;
    }

    /**
     * Gets product
     * @return \MarketPay\Model\Product
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     * @param \MarketPay\Model\Product $product
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets observations
     * @return string
     */
    public function getObservations()
    {
        return $this->container['observations'];
    }

    /**
     * Sets observations
     * @param string $observations
     * @return $this
     */
    public function setObservations($observations)
    {
        $this->container['observations'] = $observations;

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
     * @return void
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
     * @return void
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
            return json_encode(\MarketPay\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\MarketPay\ObjectSerializer::sanitizeForSerialization($this));
    }
}


