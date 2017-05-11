<?php
/**
 * InlineResponse204RefundReason
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
 * InlineResponse204RefundReason Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse204RefundReason implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_204_RefundReason';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'message' => 'string'
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
        'type' => 'Type',
        'message' => 'Message'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'message' => 'setMessage'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'message' => 'getMessage'
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

    const TYPE_NOT_SPECIFIED = 'NotSpecified';
    const TYPE_BANKACCOUNT_INCORRECT = 'BANKACCOUNT_INCORRECT';
    const TYPE_BANKACCOUNT_HAS_BEEN_CLOSED = 'BANKACCOUNT_HAS_BEEN_CLOSED';
    const TYPE_OWNER_DOT_NOT_MATCH_BANKACCOUNT = 'OWNER_DOT_NOT_MATCH_BANKACCOUNT';
    const TYPE_WITHDRAWAL_IMPOSSIBLE_ON_SAVINGS_ACCOUNTS = 'WITHDRAWAL_IMPOSSIBLE_ON_SAVINGS_ACCOUNTS';
    const TYPE_INITIALIZED_BY_CLIENT = 'INITIALIZED_BY_CLIENT';
    const TYPE_OTHER = 'OTHER';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_NOT_SPECIFIED,
            self::TYPE_BANKACCOUNT_INCORRECT,
            self::TYPE_BANKACCOUNT_HAS_BEEN_CLOSED,
            self::TYPE_OWNER_DOT_NOT_MATCH_BANKACCOUNT,
            self::TYPE_WITHDRAWAL_IMPOSSIBLE_ON_SAVINGS_ACCOUNTS,
            self::TYPE_INITIALIZED_BY_CLIENT,
            self::TYPE_OTHER,
        ];
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["NotSpecified", "BANKACCOUNT_INCORRECT", "BANKACCOUNT_HAS_BEEN_CLOSED", "OWNER_DOT_NOT_MATCH_BANKACCOUNT", "WITHDRAWAL_IMPOSSIBLE_ON_SAVINGS_ACCOUNTS", "INITIALIZED_BY_CLIENT", "OTHER"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of 'NotSpecified', 'BANKACCOUNT_INCORRECT', 'BANKACCOUNT_HAS_BEEN_CLOSED', 'OWNER_DOT_NOT_MATCH_BANKACCOUNT', 'WITHDRAWAL_IMPOSSIBLE_ON_SAVINGS_ACCOUNTS', 'INITIALIZED_BY_CLIENT', 'OTHER'.";
        }

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

        $allowed_values = ["NotSpecified", "BANKACCOUNT_INCORRECT", "BANKACCOUNT_HAS_BEEN_CLOSED", "OWNER_DOT_NOT_MATCH_BANKACCOUNT", "WITHDRAWAL_IMPOSSIBLE_ON_SAVINGS_ACCOUNTS", "INITIALIZED_BY_CLIENT", "OTHER"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type The type of reason for refusal
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('NotSpecified', 'BANKACCOUNT_INCORRECT', 'BANKACCOUNT_HAS_BEEN_CLOSED', 'OWNER_DOT_NOT_MATCH_BANKACCOUNT', 'WITHDRAWAL_IMPOSSIBLE_ON_SAVINGS_ACCOUNTS', 'INITIALIZED_BY_CLIENT', 'OTHER');
        if (!is_null($type) && (!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'NotSpecified', 'BANKACCOUNT_INCORRECT', 'BANKACCOUNT_HAS_BEEN_CLOSED', 'OWNER_DOT_NOT_MATCH_BANKACCOUNT', 'WITHDRAWAL_IMPOSSIBLE_ON_SAVINGS_ACCOUNTS', 'INITIALIZED_BY_CLIENT', 'OTHER'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param string $message The message accompanying a refusal
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

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


