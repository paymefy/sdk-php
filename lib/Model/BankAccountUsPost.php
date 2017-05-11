<?php
/**
 * BankAccountUsPost
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
 * BankAccountUsPost Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BankAccountUsPost implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BankAccountUsPost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_number' => 'string',
        'aba' => 'string',
        'deposit_account_type' => 'string',
        'tag' => 'string',
        'owner_address' => '\Swagger\Client\Model\V201PayInsAplazamepaymentswebCustomerAddress',
        'owner_name' => 'string'
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
        'account_number' => 'AccountNumber',
        'aba' => 'ABA',
        'deposit_account_type' => 'DepositAccountType',
        'tag' => 'Tag',
        'owner_address' => 'OwnerAddress',
        'owner_name' => 'OwnerName'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'account_number' => 'setAccountNumber',
        'aba' => 'setAba',
        'deposit_account_type' => 'setDepositAccountType',
        'tag' => 'setTag',
        'owner_address' => 'setOwnerAddress',
        'owner_name' => 'setOwnerName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'account_number' => 'getAccountNumber',
        'aba' => 'getAba',
        'deposit_account_type' => 'getDepositAccountType',
        'tag' => 'getTag',
        'owner_address' => 'getOwnerAddress',
        'owner_name' => 'getOwnerName'
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

    const DEPOSIT_ACCOUNT_TYPE_NOT_SPECIFIED = 'NotSpecified';
    const DEPOSIT_ACCOUNT_TYPE_CHECKING = 'CHECKING';
    const DEPOSIT_ACCOUNT_TYPE_SAVINGS = 'SAVINGS';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDepositAccountTypeAllowableValues()
    {
        return [
            self::DEPOSIT_ACCOUNT_TYPE_NOT_SPECIFIED,
            self::DEPOSIT_ACCOUNT_TYPE_CHECKING,
            self::DEPOSIT_ACCOUNT_TYPE_SAVINGS,
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
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['aba'] = isset($data['aba']) ? $data['aba'] : null;
        $this->container['deposit_account_type'] = isset($data['deposit_account_type']) ? $data['deposit_account_type'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['owner_address'] = isset($data['owner_address']) ? $data['owner_address'] : null;
        $this->container['owner_name'] = isset($data['owner_name']) ? $data['owner_name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["NotSpecified", "CHECKING", "SAVINGS"];
        if (!in_array($this->container['deposit_account_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'deposit_account_type', must be one of 'NotSpecified', 'CHECKING', 'SAVINGS'.";
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

        $allowed_values = ["NotSpecified", "CHECKING", "SAVINGS"];
        if (!in_array($this->container['deposit_account_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets account_number
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     * @param string $account_number The account number of the bank account. US account numbers must be digits only
     * @return $this
     */
    public function setAccountNumber($account_number)
    {
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets aba
     * @return string
     */
    public function getAba()
    {
        return $this->container['aba'];
    }

    /**
     * Sets aba
     * @param string $aba The ABA of the bank account. Must be numbers only, and 9 digits long
     * @return $this
     */
    public function setAba($aba)
    {
        $this->container['aba'] = $aba;

        return $this;
    }

    /**
     * Gets deposit_account_type
     * @return string
     */
    public function getDepositAccountType()
    {
        return $this->container['deposit_account_type'];
    }

    /**
     * Sets deposit_account_type
     * @param string $deposit_account_type The type of account
     * @return $this
     */
    public function setDepositAccountType($deposit_account_type)
    {
        $allowed_values = array('NotSpecified', 'CHECKING', 'SAVINGS');
        if (!is_null($deposit_account_type) && (!in_array($deposit_account_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'deposit_account_type', must be one of 'NotSpecified', 'CHECKING', 'SAVINGS'");
        }
        $this->container['deposit_account_type'] = $deposit_account_type;

        return $this;
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
     * Gets owner_address
     * @return \Swagger\Client\Model\V201PayInsAplazamepaymentswebCustomerAddress
     */
    public function getOwnerAddress()
    {
        return $this->container['owner_address'];
    }

    /**
     * Sets owner_address
     * @param \Swagger\Client\Model\V201PayInsAplazamepaymentswebCustomerAddress $owner_address
     * @return $this
     */
    public function setOwnerAddress($owner_address)
    {
        $this->container['owner_address'] = $owner_address;

        return $this;
    }

    /**
     * Gets owner_name
     * @return string
     */
    public function getOwnerName()
    {
        return $this->container['owner_name'];
    }

    /**
     * Sets owner_name
     * @param string $owner_name The name of the owner of the bank account
     * @return $this
     */
    public function setOwnerName($owner_name)
    {
        $this->container['owner_name'] = $owner_name;

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


