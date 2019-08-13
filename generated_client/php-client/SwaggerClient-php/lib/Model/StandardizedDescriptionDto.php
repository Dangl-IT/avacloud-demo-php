<?php
/**
 * StandardizedDescriptionDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AVACloud API 1.7.5
 *
 * AVACloud API specification
 *
 * OpenAPI spec version: 1.7.5
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.4
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
 * StandardizedDescriptionDto Class Doc Comment
 *
 * @category Class
 * @description This class represents a standardized description. This means that instead of solely relying on texts to describe a service, external standards and definitions are referenced for a common understanding.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StandardizedDescriptionDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StandardizedDescriptionDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'standard_reference_type' => '\Swagger\Client\Model\StandardReferenceTypeDto',
        'standard_reference' => 'string',
        'stlb_reference' => '\Swagger\Client\Model\STLBReferenceDto'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'standard_reference_type' => null,
        'standard_reference' => null,
        'stlb_reference' => null
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
        'standard_reference_type' => 'standardReferenceType',
        'standard_reference' => 'standardReference',
        'stlb_reference' => 'stlbReference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'standard_reference_type' => 'setStandardReferenceType',
        'standard_reference' => 'setStandardReference',
        'stlb_reference' => 'setStlbReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'standard_reference_type' => 'getStandardReferenceType',
        'standard_reference' => 'getStandardReference',
        'stlb_reference' => 'getStlbReference'
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
        $this->container['standard_reference_type'] = isset($data['standard_reference_type']) ? $data['standard_reference_type'] : null;
        $this->container['standard_reference'] = isset($data['standard_reference']) ? $data['standard_reference'] : null;
        $this->container['stlb_reference'] = isset($data['stlb_reference']) ? $data['stlb_reference'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['standard_reference_type'] === null) {
            $invalidProperties[] = "'standard_reference_type' can't be null";
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
     * Gets standard_reference_type
     *
     * @return \Swagger\Client\Model\StandardReferenceTypeDto
     */
    public function getStandardReferenceType()
    {
        return $this->container['standard_reference_type'];
    }

    /**
     * Sets standard_reference_type
     *
     * @param \Swagger\Client\Model\StandardReferenceTypeDto $standard_reference_type This enumeration identifies a pre-known standard used for referencing standardized descriptions.
     *
     * @return $this
     */
    public function setStandardReferenceType($standard_reference_type)
    {
        $this->container['standard_reference_type'] = $standard_reference_type;

        return $this;
    }

    /**
     * Gets standard_reference
     *
     * @return string
     */
    public function getStandardReference()
    {
        return $this->container['standard_reference'];
    }

    /**
     * Sets standard_reference
     *
     * @param string $standard_reference This string property is the identifier to map to the references standard. Its type is given in the StandardReferenceType
     *
     * @return $this
     */
    public function setStandardReference($standard_reference)
    {
        $this->container['standard_reference'] = $standard_reference;

        return $this;
    }

    /**
     * Gets stlb_reference
     *
     * @return \Swagger\Client\Model\STLBReferenceDto
     */
    public function getStlbReference()
    {
        return $this->container['stlb_reference'];
    }

    /**
     * Sets stlb_reference
     *
     * @param \Swagger\Client\Model\STLBReferenceDto $stlb_reference This is a special reference to the German STLB \"Standardleistungsbuch Bau\" reference. If this is used, the StandardReference property should not be set.
     *
     * @return $this
     */
    public function setStlbReference($stlb_reference)
    {
        $this->container['stlb_reference'] = $stlb_reference;

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


