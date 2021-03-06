<?php
/**
 * Rate
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Freightways Customer Integration
 *
 * Provisioning Freightways services as REST APIs
 *
 * OpenAPI spec version: 1.9
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
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
 * Rate Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Rate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Rate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'warnings' => 'string[]',
'carrier_name' => 'string',
'customer_id' => 'string',
'service_standard' => 'string',
'total_rate_excluding_gst' => 'double',
'total_rate_breakdown' => '\Swagger\Client\Model\BreakdownComponent[]',
'options' => '\Swagger\Client\Model\RateOption[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'warnings' => null,
'carrier_name' => null,
'customer_id' => null,
'service_standard' => null,
'total_rate_excluding_gst' => 'double',
'total_rate_breakdown' => null,
'options' => null    ];

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
        'warnings' => 'warnings',
'carrier_name' => 'carrierName',
'customer_id' => 'customerId',
'service_standard' => 'serviceStandard',
'total_rate_excluding_gst' => 'totalRateExcludingGst',
'total_rate_breakdown' => 'totalRateBreakdown',
'options' => 'options'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'warnings' => 'setWarnings',
'carrier_name' => 'setCarrierName',
'customer_id' => 'setCustomerId',
'service_standard' => 'setServiceStandard',
'total_rate_excluding_gst' => 'setTotalRateExcludingGst',
'total_rate_breakdown' => 'setTotalRateBreakdown',
'options' => 'setOptions'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'warnings' => 'getWarnings',
'carrier_name' => 'getCarrierName',
'customer_id' => 'getCustomerId',
'service_standard' => 'getServiceStandard',
'total_rate_excluding_gst' => 'getTotalRateExcludingGst',
'total_rate_breakdown' => 'getTotalRateBreakdown',
'options' => 'getOptions'    ];

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
        $this->container['warnings'] = isset($data['warnings']) ? $data['warnings'] : null;
        $this->container['carrier_name'] = isset($data['carrier_name']) ? $data['carrier_name'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['service_standard'] = isset($data['service_standard']) ? $data['service_standard'] : null;
        $this->container['total_rate_excluding_gst'] = isset($data['total_rate_excluding_gst']) ? $data['total_rate_excluding_gst'] : null;
        $this->container['total_rate_breakdown'] = isset($data['total_rate_breakdown']) ? $data['total_rate_breakdown'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets warnings
     *
     * @return string[]
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param string[] $warnings Warnings which were encountered during processing
     *
     * @return $this
     */
    public function setWarnings($warnings)
    {
        $this->container['warnings'] = $warnings;

        return $this;
    }

    /**
     * Gets carrier_name
     *
     * @return string
     */
    public function getCarrierName()
    {
        return $this->container['carrier_name'];
    }

    /**
     * Sets carrier_name
     *
     * @param string $carrier_name carrier_name
     *
     * @return $this
     */
    public function setCarrierName($carrier_name)
    {
        $this->container['carrier_name'] = $carrier_name;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string $customer_id customer_id
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets service_standard
     *
     * @return string
     */
    public function getServiceStandard()
    {
        return $this->container['service_standard'];
    }

    /**
     * Sets service_standard
     *
     * @param string $service_standard The type of service for which the rate applies. This can affect delivery timeframes. If multiple rates are available, choose the rate with the appropriate service level.
     *
     * @return $this
     */
    public function setServiceStandard($service_standard)
    {
        $this->container['service_standard'] = $service_standard;

        return $this;
    }

    /**
     * Gets total_rate_excluding_gst
     *
     * @return double
     */
    public function getTotalRateExcludingGst()
    {
        return $this->container['total_rate_excluding_gst'];
    }

    /**
     * Sets total_rate_excluding_gst
     *
     * @param double $total_rate_excluding_gst Total cost excluding Goods and Services Tax.
     *
     * @return $this
     */
    public function setTotalRateExcludingGst($total_rate_excluding_gst)
    {
        $this->container['total_rate_excluding_gst'] = $total_rate_excluding_gst;

        return $this;
    }

    /**
     * Gets total_rate_breakdown
     *
     * @return \Swagger\Client\Model\BreakdownComponent[]
     */
    public function getTotalRateBreakdown()
    {
        return $this->container['total_rate_breakdown'];
    }

    /**
     * Sets total_rate_breakdown
     *
     * @param \Swagger\Client\Model\BreakdownComponent[] $total_rate_breakdown total_rate_breakdown
     *
     * @return $this
     */
    public function setTotalRateBreakdown($total_rate_breakdown)
    {
        $this->container['total_rate_breakdown'] = $total_rate_breakdown;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \Swagger\Client\Model\RateOption[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \Swagger\Client\Model\RateOption[] $options options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

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
