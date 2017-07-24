<?php
/**
 * Address
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
 * Address Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Address implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address_line1' => 'string',
        'address_line2' => 'string',
        'city' => 'string',
        'region' => 'string',
        'postal_code' => 'string',
        'country' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address_line1' => null,
        'address_line2' => null,
        'city' => null,
        'region' => null,
        'postal_code' => null,
        'country' => null
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
        'address_line1' => 'AddressLine1',
        'address_line2' => 'AddressLine2',
        'city' => 'City',
        'region' => 'Region',
        'postal_code' => 'PostalCode',
        'country' => 'Country'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'city' => 'setCity',
        'region' => 'setRegion',
        'postal_code' => 'setPostalCode',
        'country' => 'setCountry'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'city' => 'getCity',
        'region' => 'getRegion',
        'postal_code' => 'getPostalCode',
        'country' => 'getCountry'
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

    const COUNTRY_NOT_SPECIFIED = 'NotSpecified';
    const COUNTRY_AD = 'AD';
    const COUNTRY_AE = 'AE';
    const COUNTRY_AF = 'AF';
    const COUNTRY_AG = 'AG';
    const COUNTRY_AI = 'AI';
    const COUNTRY_AL = 'AL';
    const COUNTRY_AM = 'AM';
    const COUNTRY_AO = 'AO';
    const COUNTRY_AQ = 'AQ';
    const COUNTRY_AR = 'AR';
    const COUNTRY__AS = 'AS';
    const COUNTRY_AT = 'AT';
    const COUNTRY_AU = 'AU';
    const COUNTRY_AW = 'AW';
    const COUNTRY_AX = 'AX';
    const COUNTRY_AZ = 'AZ';
    const COUNTRY_BA = 'BA';
    const COUNTRY_BB = 'BB';
    const COUNTRY_BD = 'BD';
    const COUNTRY_BE = 'BE';
    const COUNTRY_BF = 'BF';
    const COUNTRY_BG = 'BG';
    const COUNTRY_BH = 'BH';
    const COUNTRY_BI = 'BI';
    const COUNTRY_BJ = 'BJ';
    const COUNTRY_BL = 'BL';
    const COUNTRY_BM = 'BM';
    const COUNTRY_BN = 'BN';
    const COUNTRY_BO = 'BO';
    const COUNTRY_BQ = 'BQ';
    const COUNTRY_BR = 'BR';
    const COUNTRY_BS = 'BS';
    const COUNTRY_BT = 'BT';
    const COUNTRY_BV = 'BV';
    const COUNTRY_BW = 'BW';
    const COUNTRY_BY = 'BY';
    const COUNTRY_BZ = 'BZ';
    const COUNTRY_CA = 'CA';
    const COUNTRY_CC = 'CC';
    const COUNTRY_CD = 'CD';
    const COUNTRY_CF = 'CF';
    const COUNTRY_CG = 'CG';
    const COUNTRY_CH = 'CH';
    const COUNTRY_CI = 'CI';
    const COUNTRY_CK = 'CK';
    const COUNTRY_CL = 'CL';
    const COUNTRY_CM = 'CM';
    const COUNTRY_CN = 'CN';
    const COUNTRY_CO = 'CO';
    const COUNTRY_CR = 'CR';
    const COUNTRY_CU = 'CU';
    const COUNTRY_CV = 'CV';
    const COUNTRY_CW = 'CW';
    const COUNTRY_CX = 'CX';
    const COUNTRY_CY = 'CY';
    const COUNTRY_CZ = 'CZ';
    const COUNTRY_DE = 'DE';
    const COUNTRY_DJ = 'DJ';
    const COUNTRY_DK = 'DK';
    const COUNTRY_DM = 'DM';
    const COUNTRY__DO = 'DO';
    const COUNTRY_DZ = 'DZ';
    const COUNTRY_EC = 'EC';
    const COUNTRY_EE = 'EE';
    const COUNTRY_EG = 'EG';
    const COUNTRY_EH = 'EH';
    const COUNTRY_ER = 'ER';
    const COUNTRY_ES = 'ES';
    const COUNTRY_ET = 'ET';
    const COUNTRY_FI = 'FI';
    const COUNTRY_FJ = 'FJ';
    const COUNTRY_FK = 'FK';
    const COUNTRY_FM = 'FM';
    const COUNTRY_FO = 'FO';
    const COUNTRY_FR = 'FR';
    const COUNTRY_GA = 'GA';
    const COUNTRY_GB = 'GB';
    const COUNTRY_GD = 'GD';
    const COUNTRY_GE = 'GE';
    const COUNTRY_GF = 'GF';
    const COUNTRY_GG = 'GG';
    const COUNTRY_GH = 'GH';
    const COUNTRY_GI = 'GI';
    const COUNTRY_GL = 'GL';
    const COUNTRY_GM = 'GM';
    const COUNTRY_GN = 'GN';
    const COUNTRY_GP = 'GP';
    const COUNTRY_GQ = 'GQ';
    const COUNTRY_GR = 'GR';
    const COUNTRY_GS = 'GS';
    const COUNTRY_GT = 'GT';
    const COUNTRY_GU = 'GU';
    const COUNTRY_GW = 'GW';
    const COUNTRY_GY = 'GY';
    const COUNTRY_HK = 'HK';
    const COUNTRY_HM = 'HM';
    const COUNTRY_HN = 'HN';
    const COUNTRY_HR = 'HR';
    const COUNTRY_HT = 'HT';
    const COUNTRY_HU = 'HU';
    const COUNTRY_ID = 'ID';
    const COUNTRY_IE = 'IE';
    const COUNTRY_IL = 'IL';
    const COUNTRY_IM = 'IM';
    const COUNTRY_IN = 'IN';
    const COUNTRY_IO = 'IO';
    const COUNTRY_IQ = 'IQ';
    const COUNTRY_IR = 'IR';
    const COUNTRY_IS = 'IS';
    const COUNTRY_IT = 'IT';
    const COUNTRY_JE = 'JE';
    const COUNTRY_JM = 'JM';
    const COUNTRY_JO = 'JO';
    const COUNTRY_JP = 'JP';
    const COUNTRY_KE = 'KE';
    const COUNTRY_KG = 'KG';
    const COUNTRY_KH = 'KH';
    const COUNTRY_KI = 'KI';
    const COUNTRY_KM = 'KM';
    const COUNTRY_KN = 'KN';
    const COUNTRY_KP = 'KP';
    const COUNTRY_KR = 'KR';
    const COUNTRY_KW = 'KW';
    const COUNTRY_KY = 'KY';
    const COUNTRY_KZ = 'KZ';
    const COUNTRY_LA = 'LA';
    const COUNTRY_LB = 'LB';
    const COUNTRY_LC = 'LC';
    const COUNTRY_LI = 'LI';
    const COUNTRY_LK = 'LK';
    const COUNTRY_LR = 'LR';
    const COUNTRY_LS = 'LS';
    const COUNTRY_LT = 'LT';
    const COUNTRY_LU = 'LU';
    const COUNTRY_LV = 'LV';
    const COUNTRY_LY = 'LY';
    const COUNTRY_MA = 'MA';
    const COUNTRY_MC = 'MC';
    const COUNTRY_MD = 'MD';
    const COUNTRY_ME = 'ME';
    const COUNTRY_MF = 'MF';
    const COUNTRY_MG = 'MG';
    const COUNTRY_MH = 'MH';
    const COUNTRY_MK = 'MK';
    const COUNTRY_ML = 'ML';
    const COUNTRY_MM = 'MM';
    const COUNTRY_MN = 'MN';
    const COUNTRY_MO = 'MO';
    const COUNTRY_MP = 'MP';
    const COUNTRY_MQ = 'MQ';
    const COUNTRY_MR = 'MR';
    const COUNTRY_MS = 'MS';
    const COUNTRY_MT = 'MT';
    const COUNTRY_MU = 'MU';
    const COUNTRY_MV = 'MV';
    const COUNTRY_MW = 'MW';
    const COUNTRY_MX = 'MX';
    const COUNTRY_MY = 'MY';
    const COUNTRY_MZ = 'MZ';
    const COUNTRY_NA = 'NA';
    const COUNTRY_NC = 'NC';
    const COUNTRY_NE = 'NE';
    const COUNTRY_NF = 'NF';
    const COUNTRY_NG = 'NG';
    const COUNTRY_NI = 'NI';
    const COUNTRY_NL = 'NL';
    const COUNTRY_NO = 'NO';
    const COUNTRY_NP = 'NP';
    const COUNTRY_NR = 'NR';
    const COUNTRY_NU = 'NU';
    const COUNTRY_NZ = 'NZ';
    const COUNTRY_OM = 'OM';
    const COUNTRY_PA = 'PA';
    const COUNTRY_PE = 'PE';
    const COUNTRY_PF = 'PF';
    const COUNTRY_PG = 'PG';
    const COUNTRY_PH = 'PH';
    const COUNTRY_PK = 'PK';
    const COUNTRY_PL = 'PL';
    const COUNTRY_PM = 'PM';
    const COUNTRY_PN = 'PN';
    const COUNTRY_PR = 'PR';
    const COUNTRY_PS = 'PS';
    const COUNTRY_PT = 'PT';
    const COUNTRY_PW = 'PW';
    const COUNTRY_PY = 'PY';
    const COUNTRY_QA = 'QA';
    const COUNTRY_RE = 'RE';
    const COUNTRY_RO = 'RO';
    const COUNTRY_RS = 'RS';
    const COUNTRY_RU = 'RU';
    const COUNTRY_RW = 'RW';
    const COUNTRY_SA = 'SA';
    const COUNTRY_SB = 'SB';
    const COUNTRY_SC = 'SC';
    const COUNTRY_SD = 'SD';
    const COUNTRY_SE = 'SE';
    const COUNTRY_SG = 'SG';
    const COUNTRY_SH = 'SH';
    const COUNTRY_SI = 'SI';
    const COUNTRY_SJ = 'SJ';
    const COUNTRY_SK = 'SK';
    const COUNTRY_SL = 'SL';
    const COUNTRY_SM = 'SM';
    const COUNTRY_SN = 'SN';
    const COUNTRY_SO = 'SO';
    const COUNTRY_SR = 'SR';
    const COUNTRY_SS = 'SS';
    const COUNTRY_ST = 'ST';
    const COUNTRY_SV = 'SV';
    const COUNTRY_SX = 'SX';
    const COUNTRY_SY = 'SY';
    const COUNTRY_SZ = 'SZ';
    const COUNTRY_TC = 'TC';
    const COUNTRY_TD = 'TD';
    const COUNTRY_TF = 'TF';
    const COUNTRY_TG = 'TG';
    const COUNTRY_TH = 'TH';
    const COUNTRY_TJ = 'TJ';
    const COUNTRY_TK = 'TK';
    const COUNTRY_TL = 'TL';
    const COUNTRY_TM = 'TM';
    const COUNTRY_TN = 'TN';
    const COUNTRY_TO = 'TO';
    const COUNTRY_TR = 'TR';
    const COUNTRY_TT = 'TT';
    const COUNTRY_TV = 'TV';
    const COUNTRY_TW = 'TW';
    const COUNTRY_TZ = 'TZ';
    const COUNTRY_UA = 'UA';
    const COUNTRY_UG = 'UG';
    const COUNTRY_UM = 'UM';
    const COUNTRY_US = 'US';
    const COUNTRY_UY = 'UY';
    const COUNTRY_UZ = 'UZ';
    const COUNTRY_VA = 'VA';
    const COUNTRY_VC = 'VC';
    const COUNTRY_VE = 'VE';
    const COUNTRY_VG = 'VG';
    const COUNTRY_VI = 'VI';
    const COUNTRY_VN = 'VN';
    const COUNTRY_VU = 'VU';
    const COUNTRY_WF = 'WF';
    const COUNTRY_WS = 'WS';
    const COUNTRY_YE = 'YE';
    const COUNTRY_YT = 'YT';
    const COUNTRY_ZA = 'ZA';
    const COUNTRY_ZM = 'ZM';
    const COUNTRY_ZW = 'ZW';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getCountryAllowableValues()
    {
        return [
            self::COUNTRY_NOT_SPECIFIED,
            self::COUNTRY_AD,
            self::COUNTRY_AE,
            self::COUNTRY_AF,
            self::COUNTRY_AG,
            self::COUNTRY_AI,
            self::COUNTRY_AL,
            self::COUNTRY_AM,
            self::COUNTRY_AO,
            self::COUNTRY_AQ,
            self::COUNTRY_AR,
            self::COUNTRY__AS,
            self::COUNTRY_AT,
            self::COUNTRY_AU,
            self::COUNTRY_AW,
            self::COUNTRY_AX,
            self::COUNTRY_AZ,
            self::COUNTRY_BA,
            self::COUNTRY_BB,
            self::COUNTRY_BD,
            self::COUNTRY_BE,
            self::COUNTRY_BF,
            self::COUNTRY_BG,
            self::COUNTRY_BH,
            self::COUNTRY_BI,
            self::COUNTRY_BJ,
            self::COUNTRY_BL,
            self::COUNTRY_BM,
            self::COUNTRY_BN,
            self::COUNTRY_BO,
            self::COUNTRY_BQ,
            self::COUNTRY_BR,
            self::COUNTRY_BS,
            self::COUNTRY_BT,
            self::COUNTRY_BV,
            self::COUNTRY_BW,
            self::COUNTRY_BY,
            self::COUNTRY_BZ,
            self::COUNTRY_CA,
            self::COUNTRY_CC,
            self::COUNTRY_CD,
            self::COUNTRY_CF,
            self::COUNTRY_CG,
            self::COUNTRY_CH,
            self::COUNTRY_CI,
            self::COUNTRY_CK,
            self::COUNTRY_CL,
            self::COUNTRY_CM,
            self::COUNTRY_CN,
            self::COUNTRY_CO,
            self::COUNTRY_CR,
            self::COUNTRY_CU,
            self::COUNTRY_CV,
            self::COUNTRY_CW,
            self::COUNTRY_CX,
            self::COUNTRY_CY,
            self::COUNTRY_CZ,
            self::COUNTRY_DE,
            self::COUNTRY_DJ,
            self::COUNTRY_DK,
            self::COUNTRY_DM,
            self::COUNTRY__DO,
            self::COUNTRY_DZ,
            self::COUNTRY_EC,
            self::COUNTRY_EE,
            self::COUNTRY_EG,
            self::COUNTRY_EH,
            self::COUNTRY_ER,
            self::COUNTRY_ES,
            self::COUNTRY_ET,
            self::COUNTRY_FI,
            self::COUNTRY_FJ,
            self::COUNTRY_FK,
            self::COUNTRY_FM,
            self::COUNTRY_FO,
            self::COUNTRY_FR,
            self::COUNTRY_GA,
            self::COUNTRY_GB,
            self::COUNTRY_GD,
            self::COUNTRY_GE,
            self::COUNTRY_GF,
            self::COUNTRY_GG,
            self::COUNTRY_GH,
            self::COUNTRY_GI,
            self::COUNTRY_GL,
            self::COUNTRY_GM,
            self::COUNTRY_GN,
            self::COUNTRY_GP,
            self::COUNTRY_GQ,
            self::COUNTRY_GR,
            self::COUNTRY_GS,
            self::COUNTRY_GT,
            self::COUNTRY_GU,
            self::COUNTRY_GW,
            self::COUNTRY_GY,
            self::COUNTRY_HK,
            self::COUNTRY_HM,
            self::COUNTRY_HN,
            self::COUNTRY_HR,
            self::COUNTRY_HT,
            self::COUNTRY_HU,
            self::COUNTRY_ID,
            self::COUNTRY_IE,
            self::COUNTRY_IL,
            self::COUNTRY_IM,
            self::COUNTRY_IN,
            self::COUNTRY_IO,
            self::COUNTRY_IQ,
            self::COUNTRY_IR,
            self::COUNTRY_IS,
            self::COUNTRY_IT,
            self::COUNTRY_JE,
            self::COUNTRY_JM,
            self::COUNTRY_JO,
            self::COUNTRY_JP,
            self::COUNTRY_KE,
            self::COUNTRY_KG,
            self::COUNTRY_KH,
            self::COUNTRY_KI,
            self::COUNTRY_KM,
            self::COUNTRY_KN,
            self::COUNTRY_KP,
            self::COUNTRY_KR,
            self::COUNTRY_KW,
            self::COUNTRY_KY,
            self::COUNTRY_KZ,
            self::COUNTRY_LA,
            self::COUNTRY_LB,
            self::COUNTRY_LC,
            self::COUNTRY_LI,
            self::COUNTRY_LK,
            self::COUNTRY_LR,
            self::COUNTRY_LS,
            self::COUNTRY_LT,
            self::COUNTRY_LU,
            self::COUNTRY_LV,
            self::COUNTRY_LY,
            self::COUNTRY_MA,
            self::COUNTRY_MC,
            self::COUNTRY_MD,
            self::COUNTRY_ME,
            self::COUNTRY_MF,
            self::COUNTRY_MG,
            self::COUNTRY_MH,
            self::COUNTRY_MK,
            self::COUNTRY_ML,
            self::COUNTRY_MM,
            self::COUNTRY_MN,
            self::COUNTRY_MO,
            self::COUNTRY_MP,
            self::COUNTRY_MQ,
            self::COUNTRY_MR,
            self::COUNTRY_MS,
            self::COUNTRY_MT,
            self::COUNTRY_MU,
            self::COUNTRY_MV,
            self::COUNTRY_MW,
            self::COUNTRY_MX,
            self::COUNTRY_MY,
            self::COUNTRY_MZ,
            self::COUNTRY_NA,
            self::COUNTRY_NC,
            self::COUNTRY_NE,
            self::COUNTRY_NF,
            self::COUNTRY_NG,
            self::COUNTRY_NI,
            self::COUNTRY_NL,
            self::COUNTRY_NO,
            self::COUNTRY_NP,
            self::COUNTRY_NR,
            self::COUNTRY_NU,
            self::COUNTRY_NZ,
            self::COUNTRY_OM,
            self::COUNTRY_PA,
            self::COUNTRY_PE,
            self::COUNTRY_PF,
            self::COUNTRY_PG,
            self::COUNTRY_PH,
            self::COUNTRY_PK,
            self::COUNTRY_PL,
            self::COUNTRY_PM,
            self::COUNTRY_PN,
            self::COUNTRY_PR,
            self::COUNTRY_PS,
            self::COUNTRY_PT,
            self::COUNTRY_PW,
            self::COUNTRY_PY,
            self::COUNTRY_QA,
            self::COUNTRY_RE,
            self::COUNTRY_RO,
            self::COUNTRY_RS,
            self::COUNTRY_RU,
            self::COUNTRY_RW,
            self::COUNTRY_SA,
            self::COUNTRY_SB,
            self::COUNTRY_SC,
            self::COUNTRY_SD,
            self::COUNTRY_SE,
            self::COUNTRY_SG,
            self::COUNTRY_SH,
            self::COUNTRY_SI,
            self::COUNTRY_SJ,
            self::COUNTRY_SK,
            self::COUNTRY_SL,
            self::COUNTRY_SM,
            self::COUNTRY_SN,
            self::COUNTRY_SO,
            self::COUNTRY_SR,
            self::COUNTRY_SS,
            self::COUNTRY_ST,
            self::COUNTRY_SV,
            self::COUNTRY_SX,
            self::COUNTRY_SY,
            self::COUNTRY_SZ,
            self::COUNTRY_TC,
            self::COUNTRY_TD,
            self::COUNTRY_TF,
            self::COUNTRY_TG,
            self::COUNTRY_TH,
            self::COUNTRY_TJ,
            self::COUNTRY_TK,
            self::COUNTRY_TL,
            self::COUNTRY_TM,
            self::COUNTRY_TN,
            self::COUNTRY_TO,
            self::COUNTRY_TR,
            self::COUNTRY_TT,
            self::COUNTRY_TV,
            self::COUNTRY_TW,
            self::COUNTRY_TZ,
            self::COUNTRY_UA,
            self::COUNTRY_UG,
            self::COUNTRY_UM,
            self::COUNTRY_US,
            self::COUNTRY_UY,
            self::COUNTRY_UZ,
            self::COUNTRY_VA,
            self::COUNTRY_VC,
            self::COUNTRY_VE,
            self::COUNTRY_VG,
            self::COUNTRY_VI,
            self::COUNTRY_VN,
            self::COUNTRY_VU,
            self::COUNTRY_WF,
            self::COUNTRY_WS,
            self::COUNTRY_YE,
            self::COUNTRY_YT,
            self::COUNTRY_ZA,
            self::COUNTRY_ZM,
            self::COUNTRY_ZW,
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
        $this->container['address_line1'] = isset($data['address_line1']) ? $data['address_line1'] : null;
        $this->container['address_line2'] = isset($data['address_line2']) ? $data['address_line2'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['address_line1'] === null) {
            $invalid_properties[] = "'address_line1' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalid_properties[] = "'city' can't be null";
        }
        if ($this->container['postal_code'] === null) {
            $invalid_properties[] = "'postal_code' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalid_properties[] = "'country' can't be null";
        }
        $allowed_values = $this->getCountryAllowableValues();
        if (!in_array($this->container['country'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'country', must be one of '%s'",
                implode("', '", $allowed_values)
            );
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

        if ($this->container['address_line1'] === null) {
            return false;
        }
        if ($this->container['city'] === null) {
            return false;
        }
        if ($this->container['postal_code'] === null) {
            return false;
        }
        if ($this->container['country'] === null) {
            return false;
        }
        $allowed_values = $this->getCountryAllowableValues();
        if (!in_array($this->container['country'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets address_line1
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     * @param string $address_line1 The first line of the address
     * @return $this
     */
    public function setAddressLine1($address_line1)
    {
        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2
     * @param string $address_line2 The second line of the address
     * @return $this
     */
    public function setAddressLine2($address_line2)
    {
        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     * @param string $city The city of the address
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets region
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     * @param string $region The region / state / province of the address - this is optional except if the Country is US, CA or MX
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets postal_code
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     * @param string $postal_code The postal code of the address - can be alphanumeric, dashes or spaces
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country The Country where the bank account is held
     * @return $this
     */
    public function setCountry($country)
    {
        $allowed_values = $this->getCountryAllowableValues();
        if (!in_array($country, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'country', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['country'] = $country;

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


