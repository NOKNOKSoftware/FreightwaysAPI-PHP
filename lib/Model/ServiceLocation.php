<?php
/**
 * ServiceLocation
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
 * ServiceLocation Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServiceLocation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ServiceLocation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'type' => '\Swagger\Client\Model\ServiceLocationType',
'lat' => 'double',
'lon' => 'double',
'valid_for_drop_off' => 'bool',
'valid_for_delivery' => 'bool',
'address' => 'string',
'phone_number' => 'string',
'description' => 'string',
'external_reference' => 'string',
'image_url' => 'string',
'carrier_id' => 'string',
'status' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'type' => null,
'lat' => 'double',
'lon' => 'double',
'valid_for_drop_off' => null,
'valid_for_delivery' => null,
'address' => null,
'phone_number' => null,
'description' => null,
'external_reference' => null,
'image_url' => null,
'carrier_id' => null,
'status' => null    ];

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
        'id' => 'id',
'type' => 'type',
'lat' => 'lat',
'lon' => 'lon',
'valid_for_drop_off' => 'validForDropOff',
'valid_for_delivery' => 'validForDelivery',
'address' => 'address',
'phone_number' => 'phoneNumber',
'description' => 'description',
'external_reference' => 'externalReference',
'image_url' => 'imageUrl',
'carrier_id' => 'carrierId',
'status' => 'status'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'type' => 'setType',
'lat' => 'setLat',
'lon' => 'setLon',
'valid_for_drop_off' => 'setValidForDropOff',
'valid_for_delivery' => 'setValidForDelivery',
'address' => 'setAddress',
'phone_number' => 'setPhoneNumber',
'description' => 'setDescription',
'external_reference' => 'setExternalReference',
'image_url' => 'setImageUrl',
'carrier_id' => 'setCarrierId',
'status' => 'setStatus'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'type' => 'getType',
'lat' => 'getLat',
'lon' => 'getLon',
'valid_for_drop_off' => 'getValidForDropOff',
'valid_for_delivery' => 'getValidForDelivery',
'address' => 'getAddress',
'phone_number' => 'getPhoneNumber',
'description' => 'getDescription',
'external_reference' => 'getExternalReference',
'image_url' => 'getImageUrl',
'carrier_id' => 'getCarrierId',
'status' => 'getStatus'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['lat'] = isset($data['lat']) ? $data['lat'] : null;
        $this->container['lon'] = isset($data['lon']) ? $data['lon'] : null;
        $this->container['valid_for_drop_off'] = isset($data['valid_for_drop_off']) ? $data['valid_for_drop_off'] : null;
        $this->container['valid_for_delivery'] = isset($data['valid_for_delivery']) ? $data['valid_for_delivery'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['external_reference'] = isset($data['external_reference']) ? $data['external_reference'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['carrier_id'] = isset($data['carrier_id']) ? $data['carrier_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Swagger\Client\Model\ServiceLocationType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Swagger\Client\Model\ServiceLocationType $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets lat
     *
     * @return double
     */
    public function getLat()
    {
        return $this->container['lat'];
    }

    /**
     * Sets lat
     *
     * @param double $lat lat
     *
     * @return $this
     */
    public function setLat($lat)
    {
        $this->container['lat'] = $lat;

        return $this;
    }

    /**
     * Gets lon
     *
     * @return double
     */
    public function getLon()
    {
        return $this->container['lon'];
    }

    /**
     * Sets lon
     *
     * @param double $lon lon
     *
     * @return $this
     */
    public function setLon($lon)
    {
        $this->container['lon'] = $lon;

        return $this;
    }

    /**
     * Gets valid_for_drop_off
     *
     * @return bool
     */
    public function getValidForDropOff()
    {
        return $this->container['valid_for_drop_off'];
    }

    /**
     * Sets valid_for_drop_off
     *
     * @param bool $valid_for_drop_off valid_for_drop_off
     *
     * @return $this
     */
    public function setValidForDropOff($valid_for_drop_off)
    {
        $this->container['valid_for_drop_off'] = $valid_for_drop_off;

        return $this;
    }

    /**
     * Gets valid_for_delivery
     *
     * @return bool
     */
    public function getValidForDelivery()
    {
        return $this->container['valid_for_delivery'];
    }

    /**
     * Sets valid_for_delivery
     *
     * @param bool $valid_for_delivery valid_for_delivery
     *
     * @return $this
     */
    public function setValidForDelivery($valid_for_delivery)
    {
        $this->container['valid_for_delivery'] = $valid_for_delivery;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number phone_number
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets external_reference
     *
     * @return string
     */
    public function getExternalReference()
    {
        return $this->container['external_reference'];
    }

    /**
     * Sets external_reference
     *
     * @param string $external_reference external_reference
     *
     * @return $this
     */
    public function setExternalReference($external_reference)
    {
        $this->container['external_reference'] = $external_reference;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string $image_url image_url
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets carrier_id
     *
     * @return string
     */
    public function getCarrierId()
    {
        return $this->container['carrier_id'];
    }

    /**
     * Sets carrier_id
     *
     * @param string $carrier_id carrier_id
     *
     * @return $this
     */
    public function setCarrierId($carrier_id)
    {
        $this->container['carrier_id'] = $carrier_id;

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
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
