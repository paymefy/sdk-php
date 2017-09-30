<?php
/**
 * UniversalPayPayByWebPost
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
 * UniversalPayPayByWebPost Class Doc Comment
 *
 * @category    Class
 * @package     MarketPay
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UniversalPayPayByWebPost implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UniversalPayPayByWebPost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'debited_funds' => '\MarketPay\Model\Money',
        'fees' => '\MarketPay\Model\Money',
        'card_id' => 'string',
        'save_card' => 'bool',
        'statement_descriptor' => 'string',
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
        'debited_funds' => null,
        'fees' => null,
        'card_id' => null,
        'save_card' => null,
        'statement_descriptor' => null,
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
        'debited_funds' => 'DebitedFunds',
        'fees' => 'Fees',
        'card_id' => 'CardId',
        'save_card' => 'SaveCard',
        'statement_descriptor' => 'StatementDescriptor',
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
        'debited_funds' => 'setDebitedFunds',
        'fees' => 'setFees',
        'card_id' => 'setCardId',
        'save_card' => 'setSaveCard',
        'statement_descriptor' => 'setStatementDescriptor',
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
        'debited_funds' => 'getDebitedFunds',
        'fees' => 'getFees',
        'card_id' => 'getCardId',
        'save_card' => 'getSaveCard',
        'statement_descriptor' => 'getStatementDescriptor',
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
        $this->container['debited_funds'] = isset($data['debited_funds']) ? $data['debited_funds'] : null;
        $this->container['fees'] = isset($data['fees']) ? $data['fees'] : null;
        $this->container['card_id'] = isset($data['card_id']) ? $data['card_id'] : null;
        $this->container['save_card'] = isset($data['save_card']) ? $data['save_card'] : null;
        $this->container['statement_descriptor'] = isset($data['statement_descriptor']) ? $data['statement_descriptor'] : null;
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

        if ($this->container['debited_funds'] === null) {
            $invalid_properties[] = "'debited_funds' can't be null";
        }
        if ($this->container['fees'] === null) {
            $invalid_properties[] = "'fees' can't be null";
        }
        if ($this->container['statement_descriptor'] === null) {
            $invalid_properties[] = "'statement_descriptor' can't be null";
        }
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

        if ($this->container['debited_funds'] === null) {
            return false;
        }
        if ($this->container['fees'] === null) {
            return false;
        }
        if ($this->container['statement_descriptor'] === null) {
            return false;
        }
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
     * Gets debited_funds
     * @return \MarketPay\Model\Money
     */
    public function getDebitedFunds()
    {
        return $this->container['debited_funds'];
    }

    /**
     * Sets debited_funds
     * @param \MarketPay\Model\Money $debited_funds Information about the funds that are being debited
     * @return $this
     */
    public function setDebitedFunds($debited_funds)
    {
        $this->container['debited_funds'] = $debited_funds;

        return $this;
    }

    /**
     * Gets fees
     * @return \MarketPay\Model\Money
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     * @param \MarketPay\Model\Money $fees Information about the fees that were taken by the client for this transaction (and were hence transferred to the Client's platform wallet)
     * @return $this
     */
    public function setFees($fees)
    {
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets card_id
     * @return string
     */
    public function getCardId()
    {
        return $this->container['card_id'];
    }

    /**
     * Sets card_id
     * @param string $card_id The id of a previous saved card. SaveCard and CardId are mutually exclusive
     * @return $this
     */
    public function setCardId($card_id)
    {
        $this->container['card_id'] = $card_id;

        return $this;
    }

    /**
     * Gets save_card
     * @return bool
     */
    public function getSaveCard()
    {
        return $this->container['save_card'];
    }

    /**
     * Sets save_card
     * @param bool $save_card Whether to save or not the card for future use. SaveCard and CardId are mutually exclusive
     * @return $this
     */
    public function setSaveCard($save_card)
    {
        $this->container['save_card'] = $save_card;

        return $this;
    }

    /**
     * Gets statement_descriptor
     * @return string
     */
    public function getStatementDescriptor()
    {
        return $this->container['statement_descriptor'];
    }

    /**
     * Sets statement_descriptor
     * @param string $statement_descriptor
     * @return $this
     */
    public function setStatementDescriptor($statement_descriptor)
    {
        $this->container['statement_descriptor'] = $statement_descriptor;

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
     * @param string $success_url Url to redirect the browser in case the payment is completed successfully
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
     * @param string $cancel_url Url to redirect the browser in case the payment is not completed successfully
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
     * @param string $language Valid values are ES, EN, FR
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


