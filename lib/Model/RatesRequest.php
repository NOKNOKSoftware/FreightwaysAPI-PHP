<?php
/**
 * RatesRequest
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
 * RatesRequest Class Doc Comment
 *
 * @category Class
 * @description Consignment details required in order for it to be rated.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RatesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RatesRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pickup_address' => '\Swagger\Client\Model\Address',
'delivery_address' => '\Swagger\Client\Model\Address',
'signature_required' => 'bool',
'saturday_delivery' => 'bool',
'txt_notification' => 'bool',
'service_standard' => 'string',
'standard_items' => '\Swagger\Client\Model\StandardItemRateRequest[]',
'base_plus_items' => '\Swagger\Client\Model\BasePlusItemRateRequest',
'satchel_items' => '\Swagger\Client\Model\SatchelItemRateRequest[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pickup_address' => null,
'delivery_address' => null,
'signature_required' => null,
'saturday_delivery' => null,
'txt_notification' => null,
'service_standard' => null,
'standard_items' => null,
'base_plus_items' => null,
'satchel_items' => null    ];

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
        'pickup_address' => 'pickupAddress',
'delivery_address' => 'deliveryAddress',
'signature_required' => 'signatureRequired',
'saturday_delivery' => 'saturdayDelivery',
'txt_notification' => 'txtNotification',
'service_standard' => 'serviceStandard',
'standard_items' => 'standardItems',
'base_plus_items' => 'basePlusItems',
'satchel_items' => 'satchelItems'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pickup_address' => 'setPickupAddress',
'delivery_address' => 'setDeliveryAddress',
'signature_required' => 'setSignatureRequired',
'saturday_delivery' => 'setSaturdayDelivery',
'txt_notification' => 'setTxtNotification',
'service_standard' => 'setServiceStandard',
'standard_items' => 'setStandardItems',
'base_plus_items' => 'setBasePlusItems',
'satchel_items' => 'setSatchelItems'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pickup_address' => 'getPickupAddress',
'delivery_address' => 'getDeliveryAddress',
'signature_required' => 'getSignatureRequired',
'saturday_delivery' => 'getSaturdayDelivery',
'txt_notification' => 'getTxtNotification',
'service_standard' => 'getServiceStandard',
'standard_items' => 'getStandardItems',
'base_plus_items' => 'getBasePlusItems',
'satchel_items' => 'getSatchelItems'    ];

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
        $this->container['pickup_address'] = isset($data['pickup_address']) ? $data['pickup_address'] : null;
        $this->container['delivery_address'] = isset($data['delivery_address']) ? $data['delivery_address'] : null;
        $this->container['signature_required'] = isset($data['signature_required']) ? $data['signature_required'] : null;
        $this->container['saturday_delivery'] = isset($data['saturday_delivery']) ? $data['saturday_delivery'] : null;
        $this->container['txt_notification'] = isset($data['txt_notification']) ? $data['txt_notification'] : null;
        $this->container['service_standard'] = isset($data['service_standard']) ? $data['service_standard'] : null;
        $this->container['standard_items'] = isset($data['standard_items']) ? $data['standard_items'] : null;
        $this->container['base_plus_items'] = isset($data['base_plus_items']) ? $data['base_plus_items'] : null;
        $this->container['satchel_items'] = isset($data['satchel_items']) ? $data['satchel_items'] : null;
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
     * Gets pickup_address
     *
     * @return \Swagger\Client\Model\Address
     */
    public function getPickupAddress()
    {
        return $this->container['pickup_address'];
    }

    /**
     * Sets pickup_address
     *
     * @param \Swagger\Client\Model\Address $pickup_address pickup_address
     *
     * @return $this
     */
    public function setPickupAddress($pickup_address)
    {
        $this->container['pickup_address'] = $pickup_address;

        return $this;
    }

    /**
     * Gets delivery_address
     *
     * @return \Swagger\Client\Model\Address
     */
    public function getDeliveryAddress()
    {
        return $this->container['delivery_address'];
    }

    /**
     * Sets delivery_address
     *
     * @param \Swagger\Client\Model\Address $delivery_address delivery_address
     *
     * @return $this
     */
    public function setDeliveryAddress($delivery_address)
    {
        $this->container['delivery_address'] = $delivery_address;

        return $this;
    }

    /**
     * Gets signature_required
     *
     * @return bool
     */
    public function getSignatureRequired()
    {
        return $this->container['signature_required'];
    }

    /**
     * Sets signature_required
     *
     * @param bool $signature_required Defines either signature is required or not
     *
     * @return $this
     */
    public function setSignatureRequired($signature_required)
    {
        $this->container['signature_required'] = $signature_required;

        return $this;
    }

    /**
     * Gets saturday_delivery
     *
     * @return bool
     */
    public function getSaturdayDelivery()
    {
        return $this->container['saturday_delivery'];
    }

    /**
     * Sets saturday_delivery
     *
     * @param bool $saturday_delivery Defines either saturday delivery is required or not
     *
     * @return $this
     */
    public function setSaturdayDelivery($saturday_delivery)
    {
        $this->container['saturday_delivery'] = $saturday_delivery;

        return $this;
    }

    /**
     * Gets txt_notification
     *
     * @return bool
     */
    public function getTxtNotification()
    {
        return $this->container['txt_notification'];
    }

    /**
     * Sets txt_notification
     *
     * @param bool $txt_notification Defines either text notification is required or not
     *
     * @return $this
     */
    public function setTxtNotification($txt_notification)
    {
        $this->container['txt_notification'] = $txt_notification;

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
     * @param string $service_standard service_standard
     *
     * @return $this
     */
    public function setServiceStandard($service_standard)
    {
        $this->container['service_standard'] = $service_standard;

        return $this;
    }

    /**
     * Gets standard_items
     *
     * @return \Swagger\Client\Model\StandardItemRateRequest[]
     */
    public function getStandardItems()
    {
        return $this->container['standard_items'];
    }

    /**
     * Sets standard_items
     *
     * @param \Swagger\Client\Model\StandardItemRateRequest[] $standard_items List of standard items within the consignment to rate
     *
     * @return $this
     */
    public function setStandardItems($standard_items)
    {
        $this->container['standard_items'] = $standard_items;

        return $this;
    }

    /**
     * Gets base_plus_items
     *
     * @return \Swagger\Client\Model\BasePlusItemRateRequest
     */
    public function getBasePlusItems()
    {
        return $this->container['base_plus_items'];
    }

    /**
     * Sets base_plus_items
     *
     * @param \Swagger\Client\Model\BasePlusItemRateRequest $base_plus_items base_plus_items
     *
     * @return $this
     */
    public function setBasePlusItems($base_plus_items)
    {
        $this->container['base_plus_items'] = $base_plus_items;

        return $this;
    }

    /**
     * Gets satchel_items
     *
     * @return \Swagger\Client\Model\SatchelItemRateRequest[]
     */
    public function getSatchelItems()
    {
        return $this->container['satchel_items'];
    }

    /**
     * Sets satchel_items
     *
     * @param \Swagger\Client\Model\SatchelItemRateRequest[] $satchel_items List of base plus items within the consignment to rate
     *
     * @return $this
     */
    public function setSatchelItems($satchel_items)
    {
        $this->container['satchel_items'] = $satchel_items;

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
