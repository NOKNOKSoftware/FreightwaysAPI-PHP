<?php
/**
 * ConsignmentItemRequestResponse
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
 * ConsignmentItemRequestResponse Class Doc Comment
 *
 * @category Class
 * @description Returns identifier information for items created within the consignment
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConsignmentItemRequestResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConsignmentItemRequestResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'consignment_item_id' => 'string',
'item_reference' => 'string',
'barcode' => 'string',
'rate_service_code' => 'string',
'total_rate_breakdown' => '\Swagger\Client\Model\BreakdownComponent[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'consignment_item_id' => null,
'item_reference' => null,
'barcode' => null,
'rate_service_code' => null,
'total_rate_breakdown' => null    ];

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
        'consignment_item_id' => 'consignmentItemId',
'item_reference' => 'itemReference',
'barcode' => 'barcode',
'rate_service_code' => 'rateServiceCode',
'total_rate_breakdown' => 'totalRateBreakdown'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'consignment_item_id' => 'setConsignmentItemId',
'item_reference' => 'setItemReference',
'barcode' => 'setBarcode',
'rate_service_code' => 'setRateServiceCode',
'total_rate_breakdown' => 'setTotalRateBreakdown'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'consignment_item_id' => 'getConsignmentItemId',
'item_reference' => 'getItemReference',
'barcode' => 'getBarcode',
'rate_service_code' => 'getRateServiceCode',
'total_rate_breakdown' => 'getTotalRateBreakdown'    ];

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
        $this->container['consignment_item_id'] = isset($data['consignment_item_id']) ? $data['consignment_item_id'] : null;
        $this->container['item_reference'] = isset($data['item_reference']) ? $data['item_reference'] : null;
        $this->container['barcode'] = isset($data['barcode']) ? $data['barcode'] : null;
        $this->container['rate_service_code'] = isset($data['rate_service_code']) ? $data['rate_service_code'] : null;
        $this->container['total_rate_breakdown'] = isset($data['total_rate_breakdown']) ? $data['total_rate_breakdown'] : null;
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
     * Gets consignment_item_id
     *
     * @return string
     */
    public function getConsignmentItemId()
    {
        return $this->container['consignment_item_id'];
    }

    /**
     * Sets consignment_item_id
     *
     * @param string $consignment_item_id The unique identifier in of hte consignment item
     *
     * @return $this
     */
    public function setConsignmentItemId($consignment_item_id)
    {
        $this->container['consignment_item_id'] = $consignment_item_id;

        return $this;
    }

    /**
     * Gets item_reference
     *
     * @return string
     */
    public function getItemReference()
    {
        return $this->container['item_reference'];
    }

    /**
     * Sets item_reference
     *
     * @param string $item_reference customer specified item reference
     *
     * @return $this
     */
    public function setItemReference($item_reference)
    {
        $this->container['item_reference'] = $item_reference;

        return $this;
    }

    /**
     * Gets barcode
     *
     * @return string
     */
    public function getBarcode()
    {
        return $this->container['barcode'];
    }

    /**
     * Sets barcode
     *
     * @param string $barcode The barcode string generated for the consignment item
     *
     * @return $this
     */
    public function setBarcode($barcode)
    {
        $this->container['barcode'] = $barcode;

        return $this;
    }

    /**
     * Gets rate_service_code
     *
     * @return string
     */
    public function getRateServiceCode()
    {
        return $this->container['rate_service_code'];
    }

    /**
     * Sets rate_service_code
     *
     * @param string $rate_service_code The service code used to rate the consignment
     *
     * @return $this
     */
    public function setRateServiceCode($rate_service_code)
    {
        $this->container['rate_service_code'] = $rate_service_code;

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
