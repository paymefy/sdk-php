<?php
/**
 * TransferPost
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * TransferPost Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TransferPost implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TransferPost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tag' => 'string',
        'author_id' => 'string',
        'credited_user_id' => 'string',
        'debited_funds' => '\Swagger\Client\Model\InlineResponse2001DebitedFunds',
        'fees' => '\Swagger\Client\Model\InlineResponse2001DebitedFunds',
        'debited_wallet_id' => 'string',
        'credited_wallet_id' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'tag' => 'Tag',
        'author_id' => 'AuthorId',
        'credited_user_id' => 'CreditedUserId',
        'debited_funds' => 'DebitedFunds',
        'fees' => 'Fees',
        'debited_wallet_id' => 'DebitedWalletId',
        'credited_wallet_id' => 'CreditedWalletId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'tag' => 'setTag',
        'author_id' => 'setAuthorId',
        'credited_user_id' => 'setCreditedUserId',
        'debited_funds' => 'setDebitedFunds',
        'fees' => 'setFees',
        'debited_wallet_id' => 'setDebitedWalletId',
        'credited_wallet_id' => 'setCreditedWalletId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'tag' => 'getTag',
        'author_id' => 'getAuthorId',
        'credited_user_id' => 'getCreditedUserId',
        'debited_funds' => 'getDebitedFunds',
        'fees' => 'getFees',
        'debited_wallet_id' => 'getDebitedWalletId',
        'credited_wallet_id' => 'getCreditedWalletId'
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
        $this->container['author_id'] = isset($data['author_id']) ? $data['author_id'] : null;
        $this->container['credited_user_id'] = isset($data['credited_user_id']) ? $data['credited_user_id'] : null;
        $this->container['debited_funds'] = isset($data['debited_funds']) ? $data['debited_funds'] : null;
        $this->container['fees'] = isset($data['fees']) ? $data['fees'] : null;
        $this->container['debited_wallet_id'] = isset($data['debited_wallet_id']) ? $data['debited_wallet_id'] : null;
        $this->container['credited_wallet_id'] = isset($data['credited_wallet_id']) ? $data['credited_wallet_id'] : null;
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
     * @param string $tag Custom data that you can add to this item
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets author_id
     * @return string
     */
    public function getAuthorId()
    {
        return $this->container['author_id'];
    }

    /**
     * Sets author_id
     * @param string $author_id A user's ID
     * @return $this
     */
    public function setAuthorId($author_id)
    {
        $this->container['author_id'] = $author_id;

        return $this;
    }

    /**
     * Gets credited_user_id
     * @return string
     */
    public function getCreditedUserId()
    {
        return $this->container['credited_user_id'];
    }

    /**
     * Sets credited_user_id
     * @param string $credited_user_id The user ID who was credited
     * @return $this
     */
    public function setCreditedUserId($credited_user_id)
    {
        $this->container['credited_user_id'] = $credited_user_id;

        return $this;
    }

    /**
     * Gets debited_funds
     * @return \Swagger\Client\Model\InlineResponse2001DebitedFunds
     */
    public function getDebitedFunds()
    {
        return $this->container['debited_funds'];
    }

    /**
     * Sets debited_funds
     * @param \Swagger\Client\Model\InlineResponse2001DebitedFunds $debited_funds
     * @return $this
     */
    public function setDebitedFunds($debited_funds)
    {
        $this->container['debited_funds'] = $debited_funds;

        return $this;
    }

    /**
     * Gets fees
     * @return \Swagger\Client\Model\InlineResponse2001DebitedFunds
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     * @param \Swagger\Client\Model\InlineResponse2001DebitedFunds $fees
     * @return $this
     */
    public function setFees($fees)
    {
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets debited_wallet_id
     * @return string
     */
    public function getDebitedWalletId()
    {
        return $this->container['debited_wallet_id'];
    }

    /**
     * Sets debited_wallet_id
     * @param string $debited_wallet_id The ID of the wallet that was debited
     * @return $this
     */
    public function setDebitedWalletId($debited_wallet_id)
    {
        $this->container['debited_wallet_id'] = $debited_wallet_id;

        return $this;
    }

    /**
     * Gets credited_wallet_id
     * @return string
     */
    public function getCreditedWalletId()
    {
        return $this->container['credited_wallet_id'];
    }

    /**
     * Sets credited_wallet_id
     * @param string $credited_wallet_id The ID of the wallet where money will be credited
     * @return $this
     */
    public function setCreditedWalletId($credited_wallet_id)
    {
        $this->container['credited_wallet_id'] = $credited_wallet_id;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


