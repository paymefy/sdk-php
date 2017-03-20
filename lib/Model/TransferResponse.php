<?php
/**
 * TransferResponse
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
 * TransferResponse Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TransferResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TransferResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'debited_funds' => '\Swagger\Client\Model\Money',
        'credited_funds' => '\Swagger\Client\Model\Money',
        'fees' => '\Swagger\Client\Model\Money',
        'debited_wallet_id' => 'string',
        'credited_wallet_id' => 'string',
        'author_id' => 'string',
        'credited_user_id' => 'string',
        'nature' => 'string',
        'status' => 'string',
        'execution_date' => 'int',
        'result_code' => 'string',
        'result_message' => 'string',
        'type' => 'string',
        'id' => 'string',
        'creation_date' => 'int',
        'tag' => 'string'
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
        'debited_funds' => 'DebitedFunds',
        'credited_funds' => 'CreditedFunds',
        'fees' => 'Fees',
        'debited_wallet_id' => 'DebitedWalletId',
        'credited_wallet_id' => 'CreditedWalletId',
        'author_id' => 'AuthorId',
        'credited_user_id' => 'CreditedUserId',
        'nature' => 'Nature',
        'status' => 'Status',
        'execution_date' => 'ExecutionDate',
        'result_code' => 'ResultCode',
        'result_message' => 'ResultMessage',
        'type' => 'Type',
        'id' => 'Id',
        'creation_date' => 'CreationDate',
        'tag' => 'Tag'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'debited_funds' => 'setDebitedFunds',
        'credited_funds' => 'setCreditedFunds',
        'fees' => 'setFees',
        'debited_wallet_id' => 'setDebitedWalletId',
        'credited_wallet_id' => 'setCreditedWalletId',
        'author_id' => 'setAuthorId',
        'credited_user_id' => 'setCreditedUserId',
        'nature' => 'setNature',
        'status' => 'setStatus',
        'execution_date' => 'setExecutionDate',
        'result_code' => 'setResultCode',
        'result_message' => 'setResultMessage',
        'type' => 'setType',
        'id' => 'setId',
        'creation_date' => 'setCreationDate',
        'tag' => 'setTag'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'debited_funds' => 'getDebitedFunds',
        'credited_funds' => 'getCreditedFunds',
        'fees' => 'getFees',
        'debited_wallet_id' => 'getDebitedWalletId',
        'credited_wallet_id' => 'getCreditedWalletId',
        'author_id' => 'getAuthorId',
        'credited_user_id' => 'getCreditedUserId',
        'nature' => 'getNature',
        'status' => 'getStatus',
        'execution_date' => 'getExecutionDate',
        'result_code' => 'getResultCode',
        'result_message' => 'getResultMessage',
        'type' => 'getType',
        'id' => 'getId',
        'creation_date' => 'getCreationDate',
        'tag' => 'getTag'
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

    const NATURE_REGULAR = 'REGULAR';
    const NATURE_REFUND = 'REFUND';
    const NATURE_REPUDIATION = 'REPUDIATION';
    const NATURE_SETTLEMENT = 'SETTLEMENT';
    const STATUS_CREATED = 'CREATED';
    const STATUS_SUCCEEDED = 'SUCCEEDED';
    const STATUS_FAILED = 'FAILED';
    const TYPE_PAYIN = 'PAYIN';
    const TYPE_PAYOUT = 'PAYOUT';
    const TYPE_TRANSFER = 'TRANSFER';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getNatureAllowableValues()
    {
        return [
            self::NATURE_REGULAR,
            self::NATURE_REFUND,
            self::NATURE_REPUDIATION,
            self::NATURE_SETTLEMENT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATED,
            self::STATUS_SUCCEEDED,
            self::STATUS_FAILED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PAYIN,
            self::TYPE_PAYOUT,
            self::TYPE_TRANSFER,
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
        $this->container['credited_funds'] = isset($data['credited_funds']) ? $data['credited_funds'] : null;
        $this->container['fees'] = isset($data['fees']) ? $data['fees'] : null;
        $this->container['debited_wallet_id'] = isset($data['debited_wallet_id']) ? $data['debited_wallet_id'] : null;
        $this->container['credited_wallet_id'] = isset($data['credited_wallet_id']) ? $data['credited_wallet_id'] : null;
        $this->container['author_id'] = isset($data['author_id']) ? $data['author_id'] : null;
        $this->container['credited_user_id'] = isset($data['credited_user_id']) ? $data['credited_user_id'] : null;
        $this->container['nature'] = isset($data['nature']) ? $data['nature'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['execution_date'] = isset($data['execution_date']) ? $data['execution_date'] : null;
        $this->container['result_code'] = isset($data['result_code']) ? $data['result_code'] : null;
        $this->container['result_message'] = isset($data['result_message']) ? $data['result_message'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        $allowed_values = ["REGULAR", "REFUND", "REPUDIATION", "SETTLEMENT"];
        if (!in_array($this->container['nature'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'nature', must be one of #{allowed_values}.";
        }

        $allowed_values = ["CREATED", "SUCCEEDED", "FAILED"];
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of #{allowed_values}.";
        }

        $allowed_values = ["PAYIN", "PAYOUT", "TRANSFER"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        $allowed_values = ["REGULAR", "REFUND", "REPUDIATION", "SETTLEMENT"];
        if (!in_array($this->container['nature'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["CREATED", "SUCCEEDED", "FAILED"];
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["PAYIN", "PAYOUT", "TRANSFER"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets debited_funds
     * @return \Swagger\Client\Model\Money
     */
    public function getDebitedFunds()
    {
        return $this->container['debited_funds'];
    }

    /**
     * Sets debited_funds
     * @param \Swagger\Client\Model\Money $debited_funds
     * @return $this
     */
    public function setDebitedFunds($debited_funds)
    {
        $this->container['debited_funds'] = $debited_funds;

        return $this;
    }

    /**
     * Gets credited_funds
     * @return \Swagger\Client\Model\Money
     */
    public function getCreditedFunds()
    {
        return $this->container['credited_funds'];
    }

    /**
     * Sets credited_funds
     * @param \Swagger\Client\Model\Money $credited_funds
     * @return $this
     */
    public function setCreditedFunds($credited_funds)
    {
        $this->container['credited_funds'] = $credited_funds;

        return $this;
    }

    /**
     * Gets fees
     * @return \Swagger\Client\Model\Money
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     * @param \Swagger\Client\Model\Money $fees
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
     * @param string $debited_wallet_id
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
     * @param string $credited_wallet_id
     * @return $this
     */
    public function setCreditedWalletId($credited_wallet_id)
    {
        $this->container['credited_wallet_id'] = $credited_wallet_id;

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
     * @param string $author_id
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
     * @param string $credited_user_id
     * @return $this
     */
    public function setCreditedUserId($credited_user_id)
    {
        $this->container['credited_user_id'] = $credited_user_id;

        return $this;
    }

    /**
     * Gets nature
     * @return string
     */
    public function getNature()
    {
        return $this->container['nature'];
    }

    /**
     * Sets nature
     * @param string $nature
     * @return $this
     */
    public function setNature($nature)
    {
        $allowed_values = array('REGULAR', 'REFUND', 'REPUDIATION', 'SETTLEMENT');
        if (!is_null($nature) && (!in_array($nature, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'nature', must be one of 'REGULAR', 'REFUND', 'REPUDIATION', 'SETTLEMENT'");
        }
        $this->container['nature'] = $nature;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('CREATED', 'SUCCEEDED', 'FAILED');
        if (!is_null($status) && (!in_array($status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'CREATED', 'SUCCEEDED', 'FAILED'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets execution_date
     * @return int
     */
    public function getExecutionDate()
    {
        return $this->container['execution_date'];
    }

    /**
     * Sets execution_date
     * @param int $execution_date
     * @return $this
     */
    public function setExecutionDate($execution_date)
    {
        $this->container['execution_date'] = $execution_date;

        return $this;
    }

    /**
     * Gets result_code
     * @return string
     */
    public function getResultCode()
    {
        return $this->container['result_code'];
    }

    /**
     * Sets result_code
     * @param string $result_code
     * @return $this
     */
    public function setResultCode($result_code)
    {
        $this->container['result_code'] = $result_code;

        return $this;
    }

    /**
     * Gets result_message
     * @return string
     */
    public function getResultMessage()
    {
        return $this->container['result_message'];
    }

    /**
     * Sets result_message
     * @param string $result_message
     * @return $this
     */
    public function setResultMessage($result_message)
    {
        $this->container['result_message'] = $result_message;

        return $this;
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
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('PAYIN', 'PAYOUT', 'TRANSFER');
        if (!is_null($type) && (!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'PAYIN', 'PAYOUT', 'TRANSFER'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id The item's ID
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets creation_date
     * @return int
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     * @param int $creation_date When the item was created
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

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


