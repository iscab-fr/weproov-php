<?php
/**
 * TemplateShort
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * WeProov Api
 *
 * WeProov public API
 *
 * OpenAPI spec version: 1.0.0-oas3
 * Contact: support@weproov.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.7
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
 * TemplateShort Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TemplateShort implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TemplateShort';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'title' => 'string',
'description' => 'string',
'dropoff' => 'bool',
'full_dropoff' => 'bool',
'category_id' => 'int',
'category' => 'string',
'sub_category_id' => 'int',
'sub_category' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
'title' => null,
'description' => null,
'dropoff' => null,
'full_dropoff' => null,
'category_id' => null,
'category' => null,
'sub_category_id' => null,
'sub_category' => null    ];

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
'title' => 'title',
'description' => 'description',
'dropoff' => 'dropoff',
'full_dropoff' => 'full_dropoff',
'category_id' => 'category_id',
'category' => 'category',
'sub_category_id' => 'sub_category_id',
'sub_category' => 'sub_category'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'title' => 'setTitle',
'description' => 'setDescription',
'dropoff' => 'setDropoff',
'full_dropoff' => 'setFullDropoff',
'category_id' => 'setCategoryId',
'category' => 'setCategory',
'sub_category_id' => 'setSubCategoryId',
'sub_category' => 'setSubCategory'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'title' => 'getTitle',
'description' => 'getDescription',
'dropoff' => 'getDropoff',
'full_dropoff' => 'getFullDropoff',
'category_id' => 'getCategoryId',
'category' => 'getCategory',
'sub_category_id' => 'getSubCategoryId',
'sub_category' => 'getSubCategory'    ];

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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dropoff'] = isset($data['dropoff']) ? $data['dropoff'] : null;
        $this->container['full_dropoff'] = isset($data['full_dropoff']) ? $data['full_dropoff'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['sub_category_id'] = isset($data['sub_category_id']) ? $data['sub_category_id'] : null;
        $this->container['sub_category'] = isset($data['sub_category']) ? $data['sub_category'] : null;
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
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * Gets dropoff
     *
     * @return bool
     */
    public function getDropoff()
    {
        return $this->container['dropoff'];
    }

    /**
     * Sets dropoff
     *
     * @param bool $dropoff dropoff
     *
     * @return $this
     */
    public function setDropoff($dropoff)
    {
        $this->container['dropoff'] = $dropoff;

        return $this;
    }

    /**
     * Gets full_dropoff
     *
     * @return bool
     */
    public function getFullDropoff()
    {
        return $this->container['full_dropoff'];
    }

    /**
     * Sets full_dropoff
     *
     * @param bool $full_dropoff full_dropoff
     *
     * @return $this
     */
    public function setFullDropoff($full_dropoff)
    {
        $this->container['full_dropoff'] = $full_dropoff;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return int
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param int $category_id category_id
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets sub_category_id
     *
     * @return int
     */
    public function getSubCategoryId()
    {
        return $this->container['sub_category_id'];
    }

    /**
     * Sets sub_category_id
     *
     * @param int $sub_category_id sub_category_id
     *
     * @return $this
     */
    public function setSubCategoryId($sub_category_id)
    {
        $this->container['sub_category_id'] = $sub_category_id;

        return $this;
    }

    /**
     * Gets sub_category
     *
     * @return string
     */
    public function getSubCategory()
    {
        return $this->container['sub_category'];
    }

    /**
     * Sets sub_category
     *
     * @param string $sub_category sub_category
     *
     * @return $this
     */
    public function setSubCategory($sub_category)
    {
        $this->container['sub_category'] = $sub_category;

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
