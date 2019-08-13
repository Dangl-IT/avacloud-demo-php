<?php
/**
 * ItemNumberDto
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
 * ItemNumberDto Class Doc Comment
 *
 * @category Class
 * @description This class represents as identifier of a certain service specification&#39;s element and is uniquely within the service specification.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemNumberDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemNumberDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'string_representation' => 'string',
        'is_schema_compliant' => 'bool',
        'item_number_schema' => '\Swagger\Client\Model\ItemNumberSchemaDto',
        'identifiers' => 'string[]',
        'is_lot' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'guid',
        'string_representation' => null,
        'is_schema_compliant' => null,
        'item_number_schema' => null,
        'identifiers' => null,
        'is_lot' => null
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
        'id' => 'id',
        'string_representation' => 'stringRepresentation',
        'is_schema_compliant' => 'isSchemaCompliant',
        'item_number_schema' => 'itemNumberSchema',
        'identifiers' => 'identifiers',
        'is_lot' => 'isLot'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'string_representation' => 'setStringRepresentation',
        'is_schema_compliant' => 'setIsSchemaCompliant',
        'item_number_schema' => 'setItemNumberSchema',
        'identifiers' => 'setIdentifiers',
        'is_lot' => 'setIsLot'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'string_representation' => 'getStringRepresentation',
        'is_schema_compliant' => 'getIsSchemaCompliant',
        'item_number_schema' => 'getItemNumberSchema',
        'identifiers' => 'getIdentifiers',
        'is_lot' => 'getIsLot'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['string_representation'] = isset($data['string_representation']) ? $data['string_representation'] : null;
        $this->container['is_schema_compliant'] = isset($data['is_schema_compliant']) ? $data['is_schema_compliant'] : null;
        $this->container['item_number_schema'] = isset($data['item_number_schema']) ? $data['item_number_schema'] : null;
        $this->container['identifiers'] = isset($data['identifiers']) ? $data['identifiers'] : null;
        $this->container['is_lot'] = isset($data['is_lot']) ? $data['is_lot'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['is_schema_compliant'] === null) {
            $invalidProperties[] = "'is_schema_compliant' can't be null";
        }
        if ($this->container['is_lot'] === null) {
            $invalidProperties[] = "'is_lot' can't be null";
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
     * @param string $id Elements GUID identifier.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets string_representation
     *
     * @return string
     */
    public function getStringRepresentation()
    {
        return $this->container['string_representation'];
    }

    /**
     * Sets string_representation
     *
     * @param string $string_representation Will return this ItemNumber as point delimited string. Will not distinguish between upper- and lowercase and return an all-lowercase representation. Will consider first numbers, then characters, e.g. 1a is considered preceding aa.
     *
     * @return $this
     */
    public function setStringRepresentation($string_representation)
    {
        $this->container['string_representation'] = $string_representation;

        return $this;
    }

    /**
     * Gets is_schema_compliant
     *
     * @return bool
     */
    public function getIsSchemaCompliant()
    {
        return $this->container['is_schema_compliant'];
    }

    /**
     * Sets is_schema_compliant
     *
     * @param bool $is_schema_compliant Indicates if the characters and the length of the Identifiers match the current ItemNumberSchema.
     *
     * @return $this
     */
    public function setIsSchemaCompliant($is_schema_compliant)
    {
        $this->container['is_schema_compliant'] = $is_schema_compliant;

        return $this;
    }

    /**
     * Gets item_number_schema
     *
     * @return \Swagger\Client\Model\ItemNumberSchemaDto
     */
    public function getItemNumberSchema()
    {
        return $this->container['item_number_schema'];
    }

    /**
     * Sets item_number_schema
     *
     * @param \Swagger\Client\Model\ItemNumberSchemaDto $item_number_schema Used for representing and validating this ItemNumber.
     *
     * @return $this
     */
    public function setItemNumberSchema($item_number_schema)
    {
        $this->container['item_number_schema'] = $item_number_schema;

        return $this;
    }

    /**
     * Gets identifiers
     *
     * @return string[]
     */
    public function getIdentifiers()
    {
        return $this->container['identifiers'];
    }

    /**
     * Sets identifiers
     *
     * @param string[] $identifiers Collection of the single identifiers in this ItemNumber. P.e., \"02.03.004\" will have three elements \"02\", \"03\", and \"004\". Since ReadOnlyObservableCollection`1 does have the event set to protected, it can be accessed like this: (itemNumber.Identifiers as INotifyCollectionChanged).CollectionChanged
     *
     * @return $this
     */
    public function setIdentifiers($identifiers)
    {
        $this->container['identifiers'] = $identifiers;

        return $this;
    }

    /**
     * Gets is_lot
     *
     * @return bool
     */
    public function getIsLot()
    {
        return $this->container['is_lot'];
    }

    /**
     * Sets is_lot
     *
     * @param bool $is_lot This indicates if this item number is at the lot level. Find out more about lots in the documentation.
     *
     * @return $this
     */
    public function setIsLot($is_lot)
    {
        $this->container['is_lot'] = $is_lot;

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


