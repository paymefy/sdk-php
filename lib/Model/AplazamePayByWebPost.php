<?php
/**
 * AplazamePayByWebPost
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
 * AplazamePayByWebPost Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AplazamePayByWebPost implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AplazamePayByWebPost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tag' => 'string',
        'user_id' => 'int',
        'credited_wallet_id' => 'string',
        'debited_funds' => '\Swagger\Client\Model\Money',
        'fees' => '\Swagger\Client\Model\Money',
        'shipping' => '\Swagger\Client\Model\Money',
        'cancel_url' => 'string',
        'success_url' => 'string',
        'checkout_url' => 'string',
        'order_items' => '\Swagger\Client\Model\AplazameOrderItem[]',
        'customer' => '\Swagger\Client\Model\Customer'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tag' => null,
        'user_id' => 'int64',
        'credited_wallet_id' => null,
        'debited_funds' => null,
        'fees' => null,
        'shipping' => null,
        'cancel_url' => null,
        'success_url' => null,
        'checkout_url' => null,
        'order_items' => null,
        'customer' => null
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
        'tag' => 'Tag',
        'user_id' => 'UserId',
        'credited_wallet_id' => 'CreditedWalletId',
        'debited_funds' => 'DebitedFunds',
        'fees' => 'Fees',
        'shipping' => 'Shipping',
        'cancel_url' => 'CancelUrl',
        'success_url' => 'SuccessUrl',
        'checkout_url' => 'CheckoutUrl',
        'order_items' => 'OrderItems',
        'customer' => 'Customer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tag' => 'setTag',
        'user_id' => 'setUserId',
        'credited_wallet_id' => 'setCreditedWalletId',
        'debited_funds' => 'setDebitedFunds',
        'fees' => 'setFees',
        'shipping' => 'setShipping',
        'cancel_url' => 'setCancelUrl',
        'success_url' => 'setSuccessUrl',
        'checkout_url' => 'setCheckoutUrl',
        'order_items' => 'setOrderItems',
        'customer' => 'setCustomer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tag' => 'getTag',
        'user_id' => 'getUserId',
        'credited_wallet_id' => 'getCreditedWalletId',
        'debited_funds' => 'getDebitedFunds',
        'fees' => 'getFees',
        'shipping' => 'getShipping',
        'cancel_url' => 'getCancelUrl',
        'success_url' => 'getSuccessUrl',
        'checkout_url' => 'getCheckoutUrl',
        'order_items' => 'getOrderItems',
        'customer' => 'getCustomer'
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
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['credited_wallet_id'] = isset($data['credited_wallet_id']) ? $data['credited_wallet_id'] : null;
        $this->container['debited_funds'] = isset($data['debited_funds']) ? $data['debited_funds'] : null;
        $this->container['fees'] = isset($data['fees']) ? $data['fees'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['cancel_url'] = isset($data['cancel_url']) ? $data['cancel_url'] : null;
        $this->container['success_url'] = isset($data['success_url']) ? $data['success_url'] : null;
        $this->container['checkout_url'] = isset($data['checkout_url']) ? $data['checkout_url'] : null;
        $this->container['order_items'] = isset($data['order_items']) ? $data['order_items'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['debited_funds'] === null) {
            $invalidProperties[] = "'debited_funds' can't be null";
        }
        if ($this->container['cancel_url'] === null) {
            $invalidProperties[] = "'cancel_url' can't be null";
        }
        if ($this->container['success_url'] === null) {
            $invalidProperties[] = "'success_url' can't be null";
        }
        if ($this->container['order_items'] === null) {
            $invalidProperties[] = "'order_items' can't be null";
        }
        if ($this->container['customer'] === null) {
            $invalidProperties[] = "'customer' can't be null";
        }
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

        if ($this->container['debited_funds'] === null) {
            return false;
        }
        if ($this->container['cancel_url'] === null) {
            return false;
        }
        if ($this->container['success_url'] === null) {
            return false;
        }
        if ($this->container['order_items'] === null) {
            return false;
        }
        if ($this->container['customer'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param string $tag tag
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets credited_wallet_id
     *
     * @return string
     */
    public function getCreditedWalletId()
    {
        return $this->container['credited_wallet_id'];
    }

    /**
     * Sets credited_wallet_id
     *
     * @param string $credited_wallet_id credited_wallet_id
     *
     * @return $this
     */
    public function setCreditedWalletId($credited_wallet_id)
    {
        $this->container['credited_wallet_id'] = $credited_wallet_id;

        return $this;
    }

    /**
     * Gets debited_funds
     *
     * @return \Swagger\Client\Model\Money
     */
    public function getDebitedFunds()
    {
        return $this->container['debited_funds'];
    }

    /**
     * Sets debited_funds
     *
     * @param \Swagger\Client\Model\Money $debited_funds debited_funds
     *
     * @return $this
     */
    public function setDebitedFunds($debited_funds)
    {
        $this->container['debited_funds'] = $debited_funds;

        return $this;
    }

    /**
     * Gets fees
     *
     * @return \Swagger\Client\Model\Money
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param \Swagger\Client\Model\Money $fees fees
     *
     * @return $this
     */
    public function setFees($fees)
    {
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return \Swagger\Client\Model\Money
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \Swagger\Client\Model\Money $shipping shipping
     *
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets cancel_url
     *
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->container['cancel_url'];
    }

    /**
     * Sets cancel_url
     *
     * @param string $cancel_url cancel_url
     *
     * @return $this
     */
    public function setCancelUrl($cancel_url)
    {
        $this->container['cancel_url'] = $cancel_url;

        return $this;
    }

    /**
     * Gets success_url
     *
     * @return string
     */
    public function getSuccessUrl()
    {
        return $this->container['success_url'];
    }

    /**
     * Sets success_url
     *
     * @param string $success_url success_url
     *
     * @return $this
     */
    public function setSuccessUrl($success_url)
    {
        $this->container['success_url'] = $success_url;

        return $this;
    }

    /**
     * Gets checkout_url
     *
     * @return string
     */
    public function getCheckoutUrl()
    {
        return $this->container['checkout_url'];
    }

    /**
     * Sets checkout_url
     *
     * @param string $checkout_url checkout_url
     *
     * @return $this
     */
    public function setCheckoutUrl($checkout_url)
    {
        $this->container['checkout_url'] = $checkout_url;

        return $this;
    }

    /**
     * Gets order_items
     *
     * @return \Swagger\Client\Model\AplazameOrderItem[]
     */
    public function getOrderItems()
    {
        return $this->container['order_items'];
    }

    /**
     * Sets order_items
     *
     * @param \Swagger\Client\Model\AplazameOrderItem[] $order_items order_items
     *
     * @return $this
     */
    public function setOrderItems($order_items)
    {
        $this->container['order_items'] = $order_items;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \Swagger\Client\Model\Customer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Swagger\Client\Model\Customer $customer customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

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


