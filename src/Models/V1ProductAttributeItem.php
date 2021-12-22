<?php
/**
 * V1ProductAttributeItem
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
 * V1ProductAttributeItem Class Doc Comment
 *
 * @category Class
 * @package  EkmPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class V1ProductAttributeItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'V1ProductAttributeItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'attributeKey' => 'string',
        'productId' => 'int',
        'attributeValue' => 'string',
        'visible' => 'bool',
        'ebayAttributeName' => 'string',
        'orderLocation' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'attributeKey' => null,
        'productId' => 'int64',
        'attributeValue' => null,
        'visible' => null,
        'ebayAttributeName' => null,
        'orderLocation' => 'int64'
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
        'id' => 'id',
        'attributeKey' => 'attribute_key',
        'productId' => 'product_id',
        'attributeValue' => 'attribute_value',
        'visible' => 'visible',
        'ebayAttributeName' => 'ebay_attribute_name',
        'orderLocation' => 'order_location'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'attributeKey' => 'setAttributeKey',
        'productId' => 'setProductId',
        'attributeValue' => 'setAttributeValue',
        'visible' => 'setVisible',
        'ebayAttributeName' => 'setEbayAttributeName',
        'orderLocation' => 'setOrderLocation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'attributeKey' => 'getAttributeKey',
        'productId' => 'getProductId',
        'attributeValue' => 'getAttributeValue',
        'visible' => 'getVisible',
        'ebayAttributeName' => 'getEbayAttributeName',
        'orderLocation' => 'getOrderLocation'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['attributeKey'] = $data['attributeKey'] ?? null;
        $this->container['productId'] = $data['productId'] ?? null;
        $this->container['attributeValue'] = $data['attributeValue'] ?? null;
        $this->container['visible'] = $data['visible'] ?? null;
        $this->container['ebayAttributeName'] = $data['ebayAttributeName'] ?? null;
        $this->container['orderLocation'] = $data['orderLocation'] ?? null;
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
     * Gets attributeKey
     *
     * @return string|null
     */
    public function getAttributeKey()
    {
        return $this->container['attributeKey'];
    }

    /**
     * Sets attributeKey
     *
     * @param string|null $attributeKey attributeKey
     *
     * @return self
     */
    public function setAttributeKey($attributeKey)
    {
        $this->container['attributeKey'] = $attributeKey;

        return $this;
    }

    /**
     * Gets productId
     *
     * @return int|null
     */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
     * Sets productId
     *
     * @param int|null $productId productId
     *
     * @return self
     */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;

        return $this;
    }

    /**
     * Gets attributeValue
     *
     * @return string|null
     */
    public function getAttributeValue()
    {
        return $this->container['attributeValue'];
    }

    /**
     * Sets attributeValue
     *
     * @param string|null $attributeValue attributeValue
     *
     * @return self
     */
    public function setAttributeValue($attributeValue)
    {
        $this->container['attributeValue'] = $attributeValue;

        return $this;
    }

    /**
     * Gets visible
     *
     * @return bool|null
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     *
     * @param bool|null $visible visible
     *
     * @return self
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

        return $this;
    }

    /**
     * Gets ebayAttributeName
     *
     * @return string|null
     */
    public function getEbayAttributeName()
    {
        return $this->container['ebayAttributeName'];
    }

    /**
     * Sets ebayAttributeName
     *
     * @param string|null $ebayAttributeName ebayAttributeName
     *
     * @return self
     */
    public function setEbayAttributeName($ebayAttributeName)
    {
        $this->container['ebayAttributeName'] = $ebayAttributeName;

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


