<?php
/**
 * TransactionResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  MarketPay
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
 * Swagger Codegen version: 2.4.2
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MarketPay\Model;

use \ArrayAccess;
use \MarketPay\ObjectSerializer;

/**
 * TransactionResponse Class Doc Comment
 *
 * @category Class
 * @package  MarketPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransactionResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransactionResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'debited_funds' => '\MarketPay\Model\Money',
        'credited_funds' => '\MarketPay\Model\Money',
        'fees' => '\MarketPay\Model\Money',
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
        'transaction_source' => 'string',
        'transaction_destination' => 'string',
        'id' => 'string',
        'creation_date' => 'int',
        'tag' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'debited_funds' => null,
        'credited_funds' => null,
        'fees' => null,
        'debited_wallet_id' => null,
        'credited_wallet_id' => null,
        'author_id' => null,
        'credited_user_id' => null,
        'nature' => null,
        'status' => null,
        'execution_date' => 'int64',
        'result_code' => null,
        'result_message' => null,
        'type' => null,
        'transaction_source' => null,
        'transaction_destination' => null,
        'id' => null,
        'creation_date' => 'int64',
        'tag' => null
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
        'transaction_source' => 'TransactionSource',
        'transaction_destination' => 'TransactionDestination',
        'id' => 'Id',
        'creation_date' => 'CreationDate',
        'tag' => 'Tag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
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
        'transaction_source' => 'setTransactionSource',
        'transaction_destination' => 'setTransactionDestination',
        'id' => 'setId',
        'creation_date' => 'setCreationDate',
        'tag' => 'setTag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
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
        'transaction_source' => 'getTransactionSource',
        'transaction_destination' => 'getTransactionDestination',
        'id' => 'getId',
        'creation_date' => 'getCreationDate',
        'tag' => 'getTag'
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
    const TRANSACTION_SOURCE_WALLET = 'WALLET';
    const TRANSACTION_SOURCE_WALLETCLIENT = 'WALLETCLIENT';
    const TRANSACTION_SOURCE_PAYINSFEES = 'PAYINSFEES';
    const TRANSACTION_SOURCE_PAYINSAPLAZAME = 'PAYINSAPLAZAME';
    const TRANSACTION_SOURCE_PAYINSBANKWIRE = 'PAYINSBANKWIRE';
    const TRANSACTION_SOURCE_PAYINSREDSYS = 'PAYINSREDSYS';
    const TRANSACTION_SOURCE_PAYINSUNIVERSALPAY = 'PAYINSUNIVERSALPAY';
    const TRANSACTION_SOURCE_PAYINADDONPAYMENTS = 'PAYINADDONPAYMENTS';
    const TRANSACTION_SOURCE_PAYINWEBPAY = 'PAYINWEBPAY';
    const TRANSACTION_SOURCE_PLUGIN = 'PLUGIN';
    const TRANSACTION_SOURCE_PAYOUTSBANKWIRE = 'PAYOUTSBANKWIRE';
    const TRANSACTION_DESTINATION_WALLET = 'WALLET';
    const TRANSACTION_DESTINATION_WALLETCLIENT = 'WALLETCLIENT';
    const TRANSACTION_DESTINATION_PAYINSFEES = 'PAYINSFEES';
    const TRANSACTION_DESTINATION_PAYINSAPLAZAME = 'PAYINSAPLAZAME';
    const TRANSACTION_DESTINATION_PAYINSBANKWIRE = 'PAYINSBANKWIRE';
    const TRANSACTION_DESTINATION_PAYINSREDSYS = 'PAYINSREDSYS';
    const TRANSACTION_DESTINATION_PAYINSUNIVERSALPAY = 'PAYINSUNIVERSALPAY';
    const TRANSACTION_DESTINATION_PAYINADDONPAYMENTS = 'PAYINADDONPAYMENTS';
    const TRANSACTION_DESTINATION_PAYINWEBPAY = 'PAYINWEBPAY';
    const TRANSACTION_DESTINATION_PLUGIN = 'PLUGIN';
    const TRANSACTION_DESTINATION_PAYOUTSBANKWIRE = 'PAYOUTSBANKWIRE';
    

    
    /**
     * Gets allowable values of the enum
     *
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
     *
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
     *
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
     *
     * @return string[]
     */
    public function getTransactionSourceAllowableValues()
    {
        return [
            self::TRANSACTION_SOURCE_WALLET,
            self::TRANSACTION_SOURCE_WALLETCLIENT,
            self::TRANSACTION_SOURCE_PAYINSFEES,
            self::TRANSACTION_SOURCE_PAYINSAPLAZAME,
            self::TRANSACTION_SOURCE_PAYINSBANKWIRE,
            self::TRANSACTION_SOURCE_PAYINSREDSYS,
            self::TRANSACTION_SOURCE_PAYINSUNIVERSALPAY,
            self::TRANSACTION_SOURCE_PAYINADDONPAYMENTS,
            self::TRANSACTION_SOURCE_PAYINWEBPAY,
            self::TRANSACTION_SOURCE_PLUGIN,
            self::TRANSACTION_SOURCE_PAYOUTSBANKWIRE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransactionDestinationAllowableValues()
    {
        return [
            self::TRANSACTION_DESTINATION_WALLET,
            self::TRANSACTION_DESTINATION_WALLETCLIENT,
            self::TRANSACTION_DESTINATION_PAYINSFEES,
            self::TRANSACTION_DESTINATION_PAYINSAPLAZAME,
            self::TRANSACTION_DESTINATION_PAYINSBANKWIRE,
            self::TRANSACTION_DESTINATION_PAYINSREDSYS,
            self::TRANSACTION_DESTINATION_PAYINSUNIVERSALPAY,
            self::TRANSACTION_DESTINATION_PAYINADDONPAYMENTS,
            self::TRANSACTION_DESTINATION_PAYINWEBPAY,
            self::TRANSACTION_DESTINATION_PLUGIN,
            self::TRANSACTION_DESTINATION_PAYOUTSBANKWIRE,
        ];
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
        $this->container['transaction_source'] = isset($data['transaction_source']) ? $data['transaction_source'] : null;
        $this->container['transaction_destination'] = isset($data['transaction_destination']) ? $data['transaction_destination'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getNatureAllowableValues();
        if (!is_null($this->container['nature']) && !in_array($this->container['nature'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'nature', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTransactionSourceAllowableValues();
        if (!is_null($this->container['transaction_source']) && !in_array($this->container['transaction_source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'transaction_source', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTransactionDestinationAllowableValues();
        if (!is_null($this->container['transaction_destination']) && !in_array($this->container['transaction_destination'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'transaction_destination', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets debited_funds
     *
     * @return \MarketPay\Model\Money
     */
    public function getDebitedFunds()
    {
        return $this->container['debited_funds'];
    }

    /**
     * Sets debited_funds
     *
     * @param \MarketPay\Model\Money $debited_funds Information about the funds that are being debited
     *
     * @return $this
     */
    public function setDebitedFunds($debited_funds)
    {
        $this->container['debited_funds'] = $debited_funds;

        return $this;
    }

    /**
     * Gets credited_funds
     *
     * @return \MarketPay\Model\Money
     */
    public function getCreditedFunds()
    {
        return $this->container['credited_funds'];
    }

    /**
     * Sets credited_funds
     *
     * @param \MarketPay\Model\Money $credited_funds Details about the funds that are being credited (DebitedFunds – Fees = CreditedFunds)
     *
     * @return $this
     */
    public function setCreditedFunds($credited_funds)
    {
        $this->container['credited_funds'] = $credited_funds;

        return $this;
    }

    /**
     * Gets fees
     *
     * @return \MarketPay\Model\Money
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param \MarketPay\Model\Money $fees Information about the fees that were taken by the client for this transaction (and were hence transferred to the Client's platform wallet)
     *
     * @return $this
     */
    public function setFees($fees)
    {
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets debited_wallet_id
     *
     * @return string
     */
    public function getDebitedWalletId()
    {
        return $this->container['debited_wallet_id'];
    }

    /**
     * Sets debited_wallet_id
     *
     * @param string $debited_wallet_id The ID of the wallet that was debited
     *
     * @return $this
     */
    public function setDebitedWalletId($debited_wallet_id)
    {
        $this->container['debited_wallet_id'] = $debited_wallet_id;

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
     * @param string $credited_wallet_id The ID of the wallet where money will be credited
     *
     * @return $this
     */
    public function setCreditedWalletId($credited_wallet_id)
    {
        $this->container['credited_wallet_id'] = $credited_wallet_id;

        return $this;
    }

    /**
     * Gets author_id
     *
     * @return string
     */
    public function getAuthorId()
    {
        return $this->container['author_id'];
    }

    /**
     * Sets author_id
     *
     * @param string $author_id A user's ID
     *
     * @return $this
     */
    public function setAuthorId($author_id)
    {
        $this->container['author_id'] = $author_id;

        return $this;
    }

    /**
     * Gets credited_user_id
     *
     * @return string
     */
    public function getCreditedUserId()
    {
        return $this->container['credited_user_id'];
    }

    /**
     * Sets credited_user_id
     *
     * @param string $credited_user_id The user ID who was credited
     *
     * @return $this
     */
    public function setCreditedUserId($credited_user_id)
    {
        $this->container['credited_user_id'] = $credited_user_id;

        return $this;
    }

    /**
     * Gets nature
     *
     * @return string
     */
    public function getNature()
    {
        return $this->container['nature'];
    }

    /**
     * Sets nature
     *
     * @param string $nature The nature of the transaction
     *
     * @return $this
     */
    public function setNature($nature)
    {
        $allowedValues = $this->getNatureAllowableValues();
        if (!is_null($nature) && !in_array($nature, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'nature', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['nature'] = $nature;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The status of the transaction
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets execution_date
     *
     * @return int
     */
    public function getExecutionDate()
    {
        return $this->container['execution_date'];
    }

    /**
     * Sets execution_date
     *
     * @param int $execution_date When the transaction happened
     *
     * @return $this
     */
    public function setExecutionDate($execution_date)
    {
        $this->container['execution_date'] = $execution_date;

        return $this;
    }

    /**
     * Gets result_code
     *
     * @return string
     */
    public function getResultCode()
    {
        return $this->container['result_code'];
    }

    /**
     * Sets result_code
     *
     * @param string $result_code The result code
     *
     * @return $this
     */
    public function setResultCode($result_code)
    {
        $this->container['result_code'] = $result_code;

        return $this;
    }

    /**
     * Gets result_message
     *
     * @return string
     */
    public function getResultMessage()
    {
        return $this->container['result_message'];
    }

    /**
     * Sets result_message
     *
     * @param string $result_message A verbal explanation of the ResultCode
     *
     * @return $this
     */
    public function setResultMessage($result_message)
    {
        $this->container['result_message'] = $result_message;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The type of the transaction
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets transaction_source
     *
     * @return string
     */
    public function getTransactionSource()
    {
        return $this->container['transaction_source'];
    }

    /**
     * Sets transaction_source
     *
     * @param string $transaction_source transaction_source
     *
     * @return $this
     */
    public function setTransactionSource($transaction_source)
    {
        $allowedValues = $this->getTransactionSourceAllowableValues();
        if (!is_null($transaction_source) && !in_array($transaction_source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'transaction_source', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transaction_source'] = $transaction_source;

        return $this;
    }

    /**
     * Gets transaction_destination
     *
     * @return string
     */
    public function getTransactionDestination()
    {
        return $this->container['transaction_destination'];
    }

    /**
     * Sets transaction_destination
     *
     * @param string $transaction_destination transaction_destination
     *
     * @return $this
     */
    public function setTransactionDestination($transaction_destination)
    {
        $allowedValues = $this->getTransactionDestinationAllowableValues();
        if (!is_null($transaction_destination) && !in_array($transaction_destination, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'transaction_destination', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transaction_destination'] = $transaction_destination;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The item's ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return int
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param int $creation_date When the item was created
     *
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
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
     * @param string $tag Custom data that you can add to this item
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

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


