<?php
/**
 * V1SubCategory
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  EkmPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * EKM Partner API
 *
 * Our new API allows partners to build significantly better integrations with the EKM platform.    To try out the below endpoints, or for full up to date representations of the request / response models, please see the [swagger page](https://api.ekm.net/swagger/index.html). (We display examples here, but the swagger page is guaranteed to show the complete model.)    To keep up to date with the latest updates, please see our [RSS feed](https://partners.ekm.net/ChangeLog/Feed) or the [partner dashboard](https://partners.ekm.net/).
 *
 * The version of the OpenAPI document: Latest
 * Contact: api-support@ekm.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace EkmPHP\Models;

use \ArrayAccess;
use \EkmPHP\ObjectSerializer;

/**
 * V1SubCategory Class Doc Comment
 *
 * @category Class
 * @package  EkmPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class V1SubCategory implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'V1SubCategory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'parentCategoryId' => 'int',
        'categoryId' => 'int',
        'name' => 'string',
        'description' => 'string',
        'orderLocation' => 'int',
        'live' => 'bool',
        'isCategoryManaged' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'parentCategoryId' => 'int64',
        'categoryId' => 'int64',
        'name' => null,
        'description' => null,
        'orderLocation' => 'int64',
        'live' => null,
        'isCategoryManaged' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'parentCategoryId' => 'parent_category_id',
        'categoryId' => 'category_id',
        'name' => 'name',
        'description' => 'description',
        'orderLocation' => 'order_location',
        'live' => 'live',
        'isCategoryManaged' => 'is_category_managed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'parentCategoryId' => 'setParentCategoryId',
        'categoryId' => 'setCategoryId',
        'name' => 'setName',
        'description' => 'setDescription',
        'orderLocation' => 'setOrderLocation',
        'live' => 'setLive',
        'isCategoryManaged' => 'setIsCategoryManaged'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'parentCategoryId' => 'getParentCategoryId',
        'categoryId' => 'getCategoryId',
        'name' => 'getName',
        'description' => 'getDescription',
        'orderLocation' => 'getOrderLocation',
        'live' => 'getLive',
        'isCategoryManaged' => 'getIsCategoryManaged'
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
        return self::$openAPIModelName;
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
        $this->container['parentCategoryId'] = $data['parentCategoryId'] ?? null;
        $this->container['categoryId'] = $data['categoryId'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['orderLocation'] = $data['orderLocation'] ?? null;
        $this->container['live'] = $data['live'] ?? null;
        $this->container['isCategoryManaged'] = $data['isCategoryManaged'] ?? null;
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
     * Gets parentCategoryId
     *
     * @return int|null
     */
    public function getParentCategoryId()
    {
        return $this->container['parentCategoryId'];
    }

    /**
     * Sets parentCategoryId
     *
     * @param int|null $parentCategoryId parentCategoryId
     *
     * @return self
     */
    public function setParentCategoryId($parentCategoryId)
    {
        $this->container['parentCategoryId'] = $parentCategoryId;

        return $this;
    }

    /**
     * Gets categoryId
     *
     * @return int|null
     */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
     * Sets categoryId
     *
     * @param int|null $categoryId categoryId
     *
     * @return self
     */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets orderLocation
     *
     * @return int|null
     */
    public function getOrderLocation()
    {
        return $this->container['orderLocation'];
    }

    /**
     * Sets orderLocation
     *
     * @param int|null $orderLocation orderLocation
     *
     * @return self
     */
    public function setOrderLocation($orderLocation)
    {
        $this->container['orderLocation'] = $orderLocation;

        return $this;
    }

    /**
     * Gets live
     *
     * @return bool|null
     */
    public function getLive()
    {
        return $this->container['live'];
    }

    /**
     * Sets live
     *
     * @param bool|null $live live
     *
     * @return self
     */
    public function setLive($live)
    {
        $this->container['live'] = $live;

        return $this;
    }

    /**
     * Gets isCategoryManaged
     *
     * @return bool|null
     */
    public function getIsCategoryManaged()
    {
        return $this->container['isCategoryManaged'];
    }

    /**
     * Sets isCategoryManaged
     *
     * @param bool|null $isCategoryManaged isCategoryManaged
     *
     * @return self
     */
    public function setIsCategoryManaged($isCategoryManaged)
    {
        $this->container['isCategoryManaged'] = $isCategoryManaged;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


