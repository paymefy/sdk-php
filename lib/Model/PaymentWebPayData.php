<?php
/**
 * PaymentWebPayData
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
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
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * PaymentWebPayData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentWebPayData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentWebPayData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_credit' => 'bool',
        'authorization_code' => 'string',
        'is_secure' => 'bool',
        'payment_type_code' => 'string',
        'response_code' => 'int',
        'response_message' => 'string',
        'voucher_url' => 'string',
        'card_number' => 'string',
        'transaction_date' => 'int',
        'order_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_credit' => null,
        'authorization_code' => null,
        'is_secure' => null,
        'payment_type_code' => null,
        'response_code' => 'int32',
        'response_message' => null,
        'voucher_url' => null,
        'card_number' => null,
        'transaction_date' => 'int64',
        'order_id' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'is_credit' => 'IsCredit',
        'authorization_code' => 'AuthorizationCode',
        'is_secure' => 'IsSecure',
        'payment_type_code' => 'PaymentTypeCode',
        'response_code' => 'ResponseCode',
        'response_message' => 'ResponseMessage',
        'voucher_url' => 'VoucherUrl',
        'card_number' => 'CardNumber',
        'transaction_date' => 'TransactionDate',
        'order_id' => 'OrderId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_credit' => 'setIsCredit',
        'authorization_code' => 'setAuthorizationCode',
        'is_secure' => 'setIsSecure',
        'payment_type_code' => 'setPaymentTypeCode',
        'response_code' => 'setResponseCode',
        'response_message' => 'setResponseMessage',
        'voucher_url' => 'setVoucherUrl',
        'card_number' => 'setCardNumber',
        'transaction_date' => 'setTransactionDate',
        'order_id' => 'setOrderId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_credit' => 'getIsCredit',
        'authorization_code' => 'getAuthorizationCode',
        'is_secure' => 'getIsSecure',
        'payment_type_code' => 'getPaymentTypeCode',
        'response_code' => 'getResponseCode',
        'response_message' => 'getResponseMessage',
        'voucher_url' => 'getVoucherUrl',
        'card_number' => 'getCardNumber',
        'transaction_date' => 'getTransactionDate',
        'order_id' => 'getOrderId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['is_credit'] = isset($data['is_credit']) ? $data['is_credit'] : null;
        $this->container['authorization_code'] = isset($data['authorization_code']) ? $data['authorization_code'] : null;
        $this->container['is_secure'] = isset($data['is_secure']) ? $data['is_secure'] : null;
        $this->container['payment_type_code'] = isset($data['payment_type_code']) ? $data['payment_type_code'] : null;
        $this->container['response_code'] = isset($data['response_code']) ? $data['response_code'] : null;
        $this->container['response_message'] = isset($data['response_message']) ? $data['response_message'] : null;
        $this->container['voucher_url'] = isset($data['voucher_url']) ? $data['voucher_url'] : null;
        $this->container['card_number'] = isset($data['card_number']) ? $data['card_number'] : null;
        $this->container['transaction_date'] = isset($data['transaction_date']) ? $data['transaction_date'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets is_credit
     *
     * @return bool
     */
    public function getIsCredit()
    {
        return $this->container['is_credit'];
    }

    /**
     * Sets is_credit
     *
     * @param bool $is_credit is_credit
     *
     * @return $this
     */
    public function setIsCredit($is_credit)
    {
        $this->container['is_credit'] = $is_credit;

        return $this;
    }

    /**
     * Gets authorization_code
     *
     * @return string
     */
    public function getAuthorizationCode()
    {
        return $this->container['authorization_code'];
    }

    /**
     * Sets authorization_code
     *
     * @param string $authorization_code authorization_code
     *
     * @return $this
     */
    public function setAuthorizationCode($authorization_code)
    {
        $this->container['authorization_code'] = $authorization_code;

        return $this;
    }

    /**
     * Gets is_secure
     *
     * @return bool
     */
    public function getIsSecure()
    {
        return $this->container['is_secure'];
    }

    /**
     * Sets is_secure
     *
     * @param bool $is_secure is_secure
     *
     * @return $this
     */
    public function setIsSecure($is_secure)
    {
        $this->container['is_secure'] = $is_secure;

        return $this;
    }

    /**
     * Gets payment_type_code
     *
     * @return string
     */
    public function getPaymentTypeCode()
    {
        return $this->container['payment_type_code'];
    }

    /**
     * Sets payment_type_code
     *
     * @param string $payment_type_code payment_type_code
     *
     * @return $this
     */
    public function setPaymentTypeCode($payment_type_code)
    {
        $this->container['payment_type_code'] = $payment_type_code;

        return $this;
    }

    /**
     * Gets response_code
     *
     * @return int
     */
    public function getResponseCode()
    {
        return $this->container['response_code'];
    }

    /**
     * Sets response_code
     *
     * @param int $response_code response_code
     *
     * @return $this
     */
    public function setResponseCode($response_code)
    {
        $this->container['response_code'] = $response_code;

        return $this;
    }

    /**
     * Gets response_message
     *
     * @return string
     */
    public function getResponseMessage()
    {
        return $this->container['response_message'];
    }

    /**
     * Sets response_message
     *
     * @param string $response_message response_message
     *
     * @return $this
     */
    public function setResponseMessage($response_message)
    {
        $this->container['response_message'] = $response_message;

        return $this;
    }

    /**
     * Gets voucher_url
     *
     * @return string
     */
    public function getVoucherUrl()
    {
        return $this->container['voucher_url'];
    }

    /**
     * Sets voucher_url
     *
     * @param string $voucher_url voucher_url
     *
     * @return $this
     */
    public function setVoucherUrl($voucher_url)
    {
        $this->container['voucher_url'] = $voucher_url;

        return $this;
    }

    /**
     * Gets card_number
     *
     * @return string
     */
    public function getCardNumber()
    {
        return $this->container['card_number'];
    }

    /**
     * Sets card_number
     *
     * @param string $card_number card_number
     *
     * @return $this
     */
    public function setCardNumber($card_number)
    {
        $this->container['card_number'] = $card_number;

        return $this;
    }

    /**
     * Gets transaction_date
     *
     * @return int
     */
    public function getTransactionDate()
    {
        return $this->container['transaction_date'];
    }

    /**
     * Sets transaction_date
     *
     * @param int $transaction_date transaction_date
     *
     * @return $this
     */
    public function setTransactionDate($transaction_date)
    {
        $this->container['transaction_date'] = $transaction_date;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id order_id
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


