<?php
/**
 * CatalogueReferenceDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AVACloud API 1.4.0
 *
 * AVACloud API specification
 *
 * OpenAPI spec version: 1.4.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.1-SNAPSHOT
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
 * CatalogueReferenceDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CatalogueReferenceDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CatalogueReferenceDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'catalogue_reference_key' => 'string',
        'catalogue_reference_id' => 'string',
        'project_catalogues' => '\Swagger\Client\Model\CatalogueDto[]',
        'catalogue' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'guid',
        'catalogue_reference_key' => null,
        'catalogue_reference_id' => 'guid',
        'project_catalogues' => null,
        'catalogue' => null
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
        'catalogue_reference_key' => 'catalogueReferenceKey',
        'catalogue_reference_id' => 'catalogueReferenceId',
        'project_catalogues' => 'projectCatalogues',
        'catalogue' => 'catalogue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'catalogue_reference_key' => 'setCatalogueReferenceKey',
        'catalogue_reference_id' => 'setCatalogueReferenceId',
        'project_catalogues' => 'setProjectCatalogues',
        'catalogue' => 'setCatalogue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'catalogue_reference_key' => 'getCatalogueReferenceKey',
        'catalogue_reference_id' => 'getCatalogueReferenceId',
        'project_catalogues' => 'getProjectCatalogues',
        'catalogue' => 'getCatalogue'
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
        $this->container['catalogue_reference_key'] = isset($data['catalogue_reference_key']) ? $data['catalogue_reference_key'] : null;
        $this->container['catalogue_reference_id'] = isset($data['catalogue_reference_id']) ? $data['catalogue_reference_id'] : null;
        $this->container['project_catalogues'] = isset($data['project_catalogues']) ? $data['project_catalogues'] : null;
        $this->container['catalogue'] = isset($data['catalogue']) ? $data['catalogue'] : null;
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
        if ($this->container['catalogue_reference_id'] === null) {
            $invalidProperties[] = "'catalogue_reference_id' can't be null";
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
     * Gets catalogue_reference_key
     *
     * @return string
     */
    public function getCatalogueReferenceKey()
    {
        return $this->container['catalogue_reference_key'];
    }

    /**
     * Sets catalogue_reference_key
     *
     * @param string $catalogue_reference_key catalogue_reference_key
     *
     * @return $this
     */
    public function setCatalogueReferenceKey($catalogue_reference_key)
    {
        $this->container['catalogue_reference_key'] = $catalogue_reference_key;

        return $this;
    }

    /**
     * Gets catalogue_reference_id
     *
     * @return string
     */
    public function getCatalogueReferenceId()
    {
        return $this->container['catalogue_reference_id'];
    }

    /**
     * Sets catalogue_reference_id
     *
     * @param string $catalogue_reference_id catalogue_reference_id
     *
     * @return $this
     */
    public function setCatalogueReferenceId($catalogue_reference_id)
    {
        $this->container['catalogue_reference_id'] = $catalogue_reference_id;

        return $this;
    }

    /**
     * Gets project_catalogues
     *
     * @return \Swagger\Client\Model\CatalogueDto[]
     */
    public function getProjectCatalogues()
    {
        return $this->container['project_catalogues'];
    }

    /**
     * Sets project_catalogues
     *
     * @param \Swagger\Client\Model\CatalogueDto[] $project_catalogues project_catalogues
     *
     * @return $this
     */
    public function setProjectCatalogues($project_catalogues)
    {
        $this->container['project_catalogues'] = $project_catalogues;

        return $this;
    }

    /**
     * Gets catalogue
     *
     * @return object
     */
    public function getCatalogue()
    {
        return $this->container['catalogue'];
    }

    /**
     * Sets catalogue
     *
     * @param object $catalogue catalogue
     *
     * @return $this
     */
    public function setCatalogue($catalogue)
    {
        $this->container['catalogue'] = $catalogue;

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


