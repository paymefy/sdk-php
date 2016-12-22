<?php
/**
 * PayInsResponse
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
 * PayInsResponse Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PayInsResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PayInsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'debited_funds' => '\Swagger\Client\Model\Money',
        'credited_funds' => '\Swagger\Client\Model\Money',
        'fees' => '\Swagger\Client\Model\Money',
        'credited_wallet_id' => 'string',
        'nature' => 'string',
        'status' => 'string',
        'execution_date' => 'int',
        'result_code' => 'string',
        'result_message' => 'string',
        'type' => 'string',
        'payment_type' => 'string',
        'execution_type' => 'string',
        'card_id' => 'string',
        'statement_descriptor' => 'string',
        'author_id' => 'string',
        'credited_user_id' => 'string',
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
        'credited_wallet_id' => 'CreditedWalletId',
        'nature' => 'Nature',
        'status' => 'Status',
        'execution_date' => 'ExecutionDate',
        'result_code' => 'ResultCode',
        'result_message' => 'ResultMessage',
        'type' => 'Type',
        'payment_type' => 'PaymentType',
        'execution_type' => 'ExecutionType',
        'card_id' => 'CardId',
        'statement_descriptor' => 'StatementDescriptor',
        'author_id' => 'AuthorId',
        'credited_user_id' => 'CreditedUserId',
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
        'credited_wallet_id' => 'setCreditedWalletId',
        'nature' => 'setNature',
        'status' => 'setStatus',
        'execution_date' => 'setExecutionDate',
        'result_code' => 'setResultCode',
        'result_message' => 'setResultMessage',
        'type' => 'setType',
        'payment_type' => 'setPaymentType',
        'execution_type' => 'setExecutionType',
        'card_id' => 'setCardId',
        'statement_descriptor' => 'setStatementDescriptor',
        'author_id' => 'setAuthorId',
        'credited_user_id' => 'setCreditedUserId',
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
        'credited_wallet_id' => 'getCreditedWalletId',
        'nature' => 'getNature',
        'status' => 'getStatus',
        'execution_date' => 'getExecutionDate',
        'result_code' => 'getResultCode',
        'result_message' => 'getResultMessage',
        'type' => 'getType',
        'payment_type' => 'getPaymentType',
        'execution_type' => 'getExecutionType',
        'card_id' => 'getCardId',
        'statement_descriptor' => 'getStatementDescriptor',
        'author_id' => 'getAuthorId',
        'credited_user_id' => 'getCreditedUserId',
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
    const PAYMENT_TYPE_NOT_SPECIFIED = 'NotSpecified';
    const PAYMENT_TYPE_CARD = 'CARD';
    const PAYMENT_TYPE_BANK_WIRE = 'BANK_WIRE';
    const PAYMENT_TYPE_DIRECT_DEBIT = 'DIRECT_DEBIT';
    const PAYMENT_TYPE_PREAUTHORIZED = 'PREAUTHORIZED';
    const EXECUTION_TYPE_NOT_SPECIFIED = 'NotSpecified';
    const EXECUTION_TYPE_WEB = 'WEB';
    const EXECUTION_TYPE_DIRECT = 'DIRECT';
    

    
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
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPaymentTypeAllowableValues()
    {
        return [
            self::PAYMENT_TYPE_NOT_SPECIFIED,
            self::PAYMENT_TYPE_CARD,
            self::PAYMENT_TYPE_BANK_WIRE,
            self::PAYMENT_TYPE_DIRECT_DEBIT,
            self::PAYMENT_TYPE_PREAUTHORIZED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getExecutionTypeAllowableValues()
    {
        return [
            self::EXECUTION_TYPE_NOT_SPECIFIED,
            self::EXECUTION_TYPE_WEB,
            self::EXECUTION_TYPE_DIRECT,
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
        $this->container['credited_wallet_id'] = isset($data['credited_wallet_id']) ? $data['credited_wallet_id'] : null;
        $this->container['nature'] = isset($data['nature']) ? $data['nature'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['execution_date'] = isset($data['execution_date']) ? $data['execution_date'] : null;
        $this->container['result_code'] = isset($data['result_code']) ? $data['result_code'] : null;
        $this->container['result_message'] = isset($data['result_message']) ? $data['result_message'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['payment_type'] = isset($data['payment_type']) ? $data['payment_type'] : null;
        $this->container['execution_type'] = isset($data['execution_type']) ? $data['execution_type'] : null;
        $this->container['card_id'] = isset($data['card_id']) ? $data['card_id'] : null;
        $this->container['statement_descriptor'] = isset($data['statement_descriptor']) ? $data['statement_descriptor'] : null;
        $this->container['author_id'] = isset($data['author_id']) ? $data['author_id'] : null;
        $this->container['credited_user_id'] = isset($data['credited_user_id']) ? $data['credited_user_id'] : null;
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

        $allowed_values = ["NotSpecified", "CARD", "BANK_WIRE", "DIRECT_DEBIT", "PREAUTHORIZED"];
        if (!in_array($this->container['payment_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'payment_type', must be one of #{allowed_values}.";
        }

        $allowed_values = ["NotSpecified", "WEB", "DIRECT"];
        if (!in_array($this->container['execution_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'execution_type', must be one of #{allowed_values}.";
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
        $allowed_values = ["NotSpecified", "CARD", "BANK_WIRE", "DIRECT_DEBIT", "PREAUTHORIZED"];
        if (!in_array($this->container['payment_type'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["NotSpecified", "WEB", "DIRECT"];
        if (!in_array($this->container['execution_type'], $allowed_values)) {
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
     * @param \Swagger\Client\Model\Money $debited_funds Information about the funds that are being debited
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
     * @param \Swagger\Client\Model\Money $credited_funds Details about the funds that are being credited (DebitedFunds – Fees = CreditedFunds)
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
     * @param \Swagger\Client\Model\Money $fees Information about the fees that were taken by the client for this transaction (and were hence transferred to the Client's platform wallet)
     * @return $this
     */
    public function setFees($fees)
    {
        $this->container['fees'] = $fees;

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
     * Gets nature
     * @return string
     */
    public function getNature()
    {
        return $this->container['nature'];
    }

    /**
     * Sets nature
     * @param string $nature The nature of the transaction
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
     * @param string $status The status of the transaction
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
     * @param int $execution_date When the transaction happened
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
     * @param string $result_code The result code
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
     * @param string $result_message A verbal explanation of the ResultCode
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
     * @param string $type The type of the transaction
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
     * Gets payment_type
     * @return string
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     * @param string $payment_type The type of payin
     * @return $this
     */
    public function setPaymentType($payment_type)
    {
        $allowed_values = array('NotSpecified', 'CARD', 'BANK_WIRE', 'DIRECT_DEBIT', 'PREAUTHORIZED');
        if (!is_null($payment_type) && (!in_array($payment_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'payment_type', must be one of 'NotSpecified', 'CARD', 'BANK_WIRE', 'DIRECT_DEBIT', 'PREAUTHORIZED'");
        }
        $this->container['payment_type'] = $payment_type;

        return $this;
    }

    /**
     * Gets execution_type
     * @return string
     */
    public function getExecutionType()
    {
        return $this->container['execution_type'];
    }

    /**
     * Sets execution_type
     * @param string $execution_type The type of execution for the payin
     * @return $this
     */
    public function setExecutionType($execution_type)
    {
        $allowed_values = array('NotSpecified', 'WEB', 'DIRECT');
        if (!is_null($execution_type) && (!in_array($execution_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'execution_type', must be one of 'NotSpecified', 'WEB', 'DIRECT'");
        }
        $this->container['execution_type'] = $execution_type;

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
     * @param string $card_id The Id of the card saved, if any.
     * @return $this
     */
    public function setCardId($card_id)
    {
        $this->container['card_id'] = $card_id;

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
     * @param string $statement_descriptor A custom description to appear on the user's bank statement. It can be up to 10 characters long, and can only include alphanumeric characters or spaces
     * @return $this
     */
    public function setStatementDescriptor($statement_descriptor)
    {
        $this->container['statement_descriptor'] = $statement_descriptor;

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


