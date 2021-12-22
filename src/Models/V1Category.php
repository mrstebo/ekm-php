<?php
/**
 * V1Category
 *
 * PHP version 7.3
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
 * OpenAPI Generator version: 5.4.0-SNAPSHOT
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
 * V1Category Class Doc Comment
 *
 * @category Class
 * @package  EkmPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class V1Category implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'V1Category';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'id' => 'int',
        'description' => 'string',
        'inCategoryDescription' => 'string',
        'metaDescription' => 'string',
        'metaKeywords' => 'string',
        'metaTitle' => 'string',
        'orderLocation' => 'int',
        'live' => 'bool',
        'parentCategoryId' => 'int',
        'imageId' => 'int',
        'inCategoryImageId' => 'int',
        'lastUpdated' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'id' => 'int64',
        'description' => null,
        'inCategoryDescription' => null,
        'metaDescription' => null,
        'metaKeywords' => null,
        'metaTitle' => null,
        'orderLocation' => 'int64',
        'live' => null,
        'parentCategoryId' => 'int64',
        'imageId' => 'int64',
        'inCategoryImageId' => 'int64',
        'lastUpdated' => 'date-time'
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
        'name' => 'name',
        'id' => 'id',
        'description' => 'description',
        'inCategoryDescription' => 'in_category_description',
        'metaDescription' => 'meta_description',
        'metaKeywords' => 'meta_keywords',
        'metaTitle' => 'meta_title',
        'orderLocation' => 'order_location',
        'live' => 'live',
        'parentCategoryId' => 'parent_category_id',
        'imageId' => 'image_id',
        'inCategoryImageId' => 'in_category_image_id',
        'lastUpdated' => 'last_updated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'id' => 'setId',
        'description' => 'setDescription',
        'inCategoryDescription' => 'setInCategoryDescription',
        'metaDescription' => 'setMetaDescription',
        'metaKeywords' => 'setMetaKeywords',
        'metaTitle' => 'setMetaTitle',
        'orderLocation' => 'setOrderLocation',
        'live' => 'setLive',
        'parentCategoryId' => 'setParentCategoryId',
        'imageId' => 'setImageId',
        'inCategoryImageId' => 'setInCategoryImageId',
        'lastUpdated' => 'setLastUpdated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'id' => 'getId',
        'description' => 'getDescription',
        'inCategoryDescription' => 'getInCategoryDescription',
        'metaDescription' => 'getMetaDescription',
        'metaKeywords' => 'getMetaKeywords',
        'metaTitle' => 'getMetaTitle',
        'orderLocation' => 'getOrderLocation',
        'live' => 'getLive',
        'parentCategoryId' => 'getParentCategoryId',
        'imageId' => 'getImageId',
        'inCategoryImageId' => 'getInCategoryImageId',
        'lastUpdated' => 'getLastUpdated'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['inCategoryDescription'] = $data['inCategoryDescription'] ?? null;
        $this->container['metaDescription'] = $data['metaDescription'] ?? null;
        $this->container['metaKeywords'] = $data['metaKeywords'] ?? null;
        $this->container['metaTitle'] = $data['metaTitle'] ?? null;
        $this->container['orderLocation'] = $data['orderLocation'] ?? null;
        $this->container['live'] = $data['live'] ?? null;
        $this->container['parentCategoryId'] = $data['parentCategoryId'] ?? null;
        $this->container['imageId'] = $data['imageId'] ?? null;
        $this->container['inCategoryImageId'] = $data['inCategoryImageId'] ?? null;
        $this->container['lastUpdated'] = $data['lastUpdated'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * Gets inCategoryDescription
     *
     * @return string|null
     */
    public function getInCategoryDescription()
    {
        return $this->container['inCategoryDescription'];
    }

    /**
     * Sets inCategoryDescription
     *
     * @param string|null $inCategoryDescription inCategoryDescription
     *
     * @return self
     */
    public function setInCategoryDescription($inCategoryDescription)
    {
        $this->container['inCategoryDescription'] = $inCategoryDescription;

        return $this;
    }

    /**
     * Gets metaDescription
     *
     * @return string|null
     */
    public function getMetaDescription()
    {
        return $this->container['metaDescription'];
    }

    /**
     * Sets metaDescription
     *
     * @param string|null $metaDescription metaDescription
     *
     * @return self
     */
    public function setMetaDescription($metaDescription)
    {
        $this->container['metaDescription'] = $metaDescription;

        return $this;
    }

    /**
     * Gets metaKeywords
     *
     * @return string|null
     */
    public function getMetaKeywords()
    {
        return $this->container['metaKeywords'];
    }

    /**
     * Sets metaKeywords
     *
     * @param string|null $metaKeywords metaKeywords
     *
     * @return self
     */
    public function setMetaKeywords($metaKeywords)
    {
        $this->container['metaKeywords'] = $metaKeywords;

        return $this;
    }

    /**
     * Gets metaTitle
     *
     * @return string|null
     */
    public function getMetaTitle()
    {
        return $this->container['metaTitle'];
    }

    /**
     * Sets metaTitle
     *
     * @param string|null $metaTitle metaTitle
     *
     * @return self
     */
    public function setMetaTitle($metaTitle)
    {
        $this->container['metaTitle'] = $metaTitle;

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
     * Gets imageId
     *
     * @return int|null
     */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
     * Sets imageId
     *
     * @param int|null $imageId imageId
     *
     * @return self
     */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;

        return $this;
    }

    /**
     * Gets inCategoryImageId
     *
     * @return int|null
     */
    public function getInCategoryImageId()
    {
        return $this->container['inCategoryImageId'];
    }

    /**
     * Sets inCategoryImageId
     *
     * @param int|null $inCategoryImageId inCategoryImageId
     *
     * @return self
     */
    public function setInCategoryImageId($inCategoryImageId)
    {
        $this->container['inCategoryImageId'] = $inCategoryImageId;

        return $this;
    }

    /**
     * Gets lastUpdated
     *
     * @return \DateTime|null
     */
    public function getLastUpdated()
    {
        return $this->container['lastUpdated'];
    }

    /**
     * Sets lastUpdated
     *
     * @param \DateTime|null $lastUpdated lastUpdated
     *
     * @return self
     */
    public function setLastUpdated($lastUpdated)
    {
        $this->container['lastUpdated'] = $lastUpdated;

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


