<?php
/**
 * UniversalPayTokenRequestPost
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
 * UniversalPayTokenRequestPost Class Doc Comment
 *
 * @category    Class
 * @package     MarketPay
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UniversalPayTokenRequestPost implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UniversalPayTokenRequestPost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'authorization_funds' => '\MarketPay\Model\Money',
        'tag' => 'string',
        'credited_wallet_id' => 'string',
        'secure_mode' => 'string',
        'success_url' => 'string',
        'cancel_url' => 'string',
        'language' => 'string',
        'customer' => '\MarketPay\Model\CustomerDetail'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'authorization_funds' => null,
        'tag' => null,
        'credited_wallet_id' => null,
        'secure_mode' => null,
        'success_url' => null,
        'cancel_url' => null,
        'language' => null,
        'customer' => null
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
        'authorization_funds' => 'AuthorizationFunds',
        'tag' => 'Tag',
        'credited_wallet_id' => 'CreditedWalletId',
        'secure_mode' => 'SecureMode',
        'success_url' => 'SuccessUrl',
        'cancel_url' => 'CancelUrl',
        'language' => 'Language',
        'customer' => 'Customer'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'authorization_funds' => 'setAuthorizationFunds',
        'tag' => 'setTag',
        'credited_wallet_id' => 'setCreditedWalletId',
        'secure_mode' => 'setSecureMode',
        'success_url' => 'setSuccessUrl',
        'cancel_url' => 'setCancelUrl',
        'language' => 'setLanguage',
        'customer' => 'setCustomer'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'authorization_funds' => 'getAuthorizationFunds',
        'tag' => 'getTag',
        'credited_wallet_id' => 'getCreditedWalletId',
        'secure_mode' => 'getSecureMode',
        'success_url' => 'getSuccessUrl',
        'cancel_url' => 'getCancelUrl',
        'language' => 'getLanguage',
        'customer' => 'getCustomer'
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

    const SECURE_MODE_NOT_SPECIFIED = 'NotSpecified';
    const SECURE_MODE__DEFAULT = 'DEFAULT';
    const SECURE_MODE_FORCE = 'FORCE';
    const LANGUAGE_NOT_SPECIFIED = 'NotSpecified';
    const LANGUAGE_CA = 'CA';
    const LANGUAGE_DE = 'DE';
    const LANGUAGE_EN = 'EN';
    const LANGUAGE_DA = 'DA';
    const LANGUAGE_ES = 'ES';
    const LANGUAGE_ET = 'ET';
    const LANGUAGE_GL = 'GL';
    const LANGUAGE_FI = 'FI';
    const LANGUAGE_FR = 'FR';
    const LANGUAGE_EL = 'EL';
    const LANGUAGE_EU = 'EU';
    const LANGUAGE_HU = 'HU';
    const LANGUAGE_IT = 'IT';
    const LANGUAGE_NL = 'NL';
    const LANGUAGE_NO = 'NO';
    const LANGUAGE_PL = 'PL';
    const LANGUAGE_PT = 'PT';
    const LANGUAGE_SK = 'SK';
    const LANGUAGE_SV = 'SV';
    const LANGUAGE_CS = 'CS';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSecureModeAllowableValues()
    {
        return [
            self::SECURE_MODE_NOT_SPECIFIED,
            self::SECURE_MODE__DEFAULT,
            self::SECURE_MODE_FORCE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getLanguageAllowableValues()
    {
        return [
            self::LANGUAGE_NOT_SPECIFIED,
            self::LANGUAGE_CA,
            self::LANGUAGE_DE,
            self::LANGUAGE_EN,
            self::LANGUAGE_DA,
            self::LANGUAGE_ES,
            self::LANGUAGE_ET,
            self::LANGUAGE_GL,
            self::LANGUAGE_FI,
            self::LANGUAGE_FR,
            self::LANGUAGE_EL,
            self::LANGUAGE_EU,
            self::LANGUAGE_HU,
            self::LANGUAGE_IT,
            self::LANGUAGE_NL,
            self::LANGUAGE_NO,
            self::LANGUAGE_PL,
            self::LANGUAGE_PT,
            self::LANGUAGE_SK,
            self::LANGUAGE_SV,
            self::LANGUAGE_CS,
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
        $this->container['authorization_funds'] = isset($data['authorization_funds']) ? $data['authorization_funds'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['credited_wallet_id'] = isset($data['credited_wallet_id']) ? $data['credited_wallet_id'] : null;
        $this->container['secure_mode'] = isset($data['secure_mode']) ? $data['secure_mode'] : null;
        $this->container['success_url'] = isset($data['success_url']) ? $data['success_url'] : null;
        $this->container['cancel_url'] = isset($data['cancel_url']) ? $data['cancel_url'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['credited_wallet_id'] === null) {
            $invalid_properties[] = "'credited_wallet_id' can't be null";
        }
        $allowed_values = $this->getSecureModeAllowableValues();
        if (!in_array($this->container['secure_mode'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'secure_mode', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getLanguageAllowableValues();
        if (!in_array($this->container['language'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'language', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if ($this->container['customer'] === null) {
            $invalid_properties[] = "'customer' can't be null";
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

        if ($this->container['credited_wallet_id'] === null) {
            return false;
        }
        $allowed_values = $this->getSecureModeAllowableValues();
        if (!in_array($this->container['secure_mode'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getLanguageAllowableValues();
        if (!in_array($this->container['language'], $allowed_values)) {
            return false;
        }
        if ($this->container['customer'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets authorization_funds
     * @return \MarketPay\Model\Money
     */
    public function getAuthorizationFunds()
    {
        return $this->container['authorization_funds'];
    }

    /**
     * Sets authorization_funds
     * @param \MarketPay\Model\Money $authorization_funds
     * @return $this
     */
    public function setAuthorizationFunds($authorization_funds)
    {
        $this->container['authorization_funds'] = $authorization_funds;

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
     * @param string $tag
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

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
     * @param string $credited_wallet_id
     * @return $this
     */
    public function setCreditedWalletId($credited_wallet_id)
    {
        $this->container['credited_wallet_id'] = $credited_wallet_id;

        return $this;
    }

    /**
     * Gets secure_mode
     * @return string
     */
    public function getSecureMode()
    {
        return $this->container['secure_mode'];
    }

    /**
     * Sets secure_mode
     * @param string $secure_mode
     * @return $this
     */
    public function setSecureMode($secure_mode)
    {
        $allowed_values = $this->getSecureModeAllowableValues();
        if (!is_null($secure_mode) && !in_array($secure_mode, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'secure_mode', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['secure_mode'] = $secure_mode;

        return $this;
    }

    /**
     * Gets success_url
     * @return string
     */
    public function getSuccessUrl()
    {
        return $this->container['success_url'];
    }

    /**
     * Sets success_url
     * @param string $success_url
     * @return $this
     */
    public function setSuccessUrl($success_url)
    {
        $this->container['success_url'] = $success_url;

        return $this;
    }

    /**
     * Gets cancel_url
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->container['cancel_url'];
    }

    /**
     * Sets cancel_url
     * @param string $cancel_url
     * @return $this
     */
    public function setCancelUrl($cancel_url)
    {
        $this->container['cancel_url'] = $cancel_url;

        return $this;
    }

    /**
     * Gets language
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     * @param string $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $allowed_values = $this->getLanguageAllowableValues();
        if (!is_null($language) && !in_array($language, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'language', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets customer
     * @return \MarketPay\Model\CustomerDetail
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     * @param \MarketPay\Model\CustomerDetail $customer
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

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


