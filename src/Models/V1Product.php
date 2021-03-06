<?php
/**
 * V1Product
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
 * V1Product Class Doc Comment
 *
 * @category Class
 * @package  EkmPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class V1Product implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'V1Product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'id' => 'int',
        'categoryId' => 'int',
        'description' => 'string',
        'shortDescription' => 'string',
        'numberInStock' => 'int',
        'price' => 'double',
        'rrp' => 'double',
        'productCode' => 'string',
        'chargeDelivery' => 'bool',
        'specialOffer' => 'bool',
        'brand' => 'string',
        'condition' => 'string',
        'gtin' => 'string',
        'mpn' => 'string',
        'productWeight' => 'double',
        'canBeAddedToCart' => 'bool',
        'taxApplicable' => 'bool',
        'taxRateId' => 'int',
        'live' => 'bool',
        'orderNote' => 'string',
        'redirectUrl' => 'string',
        'lastModified' => '\DateTime',
        'metaDescription' => 'string',
        'metaKeywords' => 'string',
        'metaTitle' => 'string',
        'totalProductStock' => 'int',
        'parentProductId' => 'int',
        'options' => '\EkmPHP\Models\V1ProductOption[]',
        'variants' => '\EkmPHP\Models\V1ProductVariant[]',
        'categories' => '\EkmPHP\Models\V1ProductCategory[]',
        'attributeItems' => '\EkmPHP\Models\V1ProductAttributeItem[]',
        'orderLocation' => 'int',
        'seoFriendlyUrl' => 'string'
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
        'categoryId' => 'int64',
        'description' => null,
        'shortDescription' => null,
        'numberInStock' => 'int64',
        'price' => 'double',
        'rrp' => 'double',
        'productCode' => null,
        'chargeDelivery' => null,
        'specialOffer' => null,
        'brand' => null,
        'condition' => null,
        'gtin' => null,
        'mpn' => null,
        'productWeight' => 'double',
        'canBeAddedToCart' => null,
        'taxApplicable' => null,
        'taxRateId' => 'int32',
        'live' => null,
        'orderNote' => null,
        'redirectUrl' => null,
        'lastModified' => 'date-time',
        'metaDescription' => null,
        'metaKeywords' => null,
        'metaTitle' => null,
        'totalProductStock' => 'int64',
        'parentProductId' => 'int64',
        'options' => null,
        'variants' => null,
        'categories' => null,
        'attributeItems' => null,
        'orderLocation' => 'int64',
        'seoFriendlyUrl' => null
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
        'categoryId' => 'category_id',
        'description' => 'description',
        'shortDescription' => 'short_description',
        'numberInStock' => 'number_in_stock',
        'price' => 'price',
        'rrp' => 'rrp',
        'productCode' => 'product_code',
        'chargeDelivery' => 'charge_delivery',
        'specialOffer' => 'special_offer',
        'brand' => 'brand',
        'condition' => 'condition',
        'gtin' => 'gtin',
        'mpn' => 'mpn',
        'productWeight' => 'product_weight',
        'canBeAddedToCart' => 'can_be_added_to_cart',
        'taxApplicable' => 'tax_applicable',
        'taxRateId' => 'tax_rate_id',
        'live' => 'live',
        'orderNote' => 'order_note',
        'redirectUrl' => 'redirect_url',
        'lastModified' => 'last_modified',
        'metaDescription' => 'meta_description',
        'metaKeywords' => 'meta_keywords',
        'metaTitle' => 'meta_title',
        'totalProductStock' => 'total_product_stock',
        'parentProductId' => 'parent_product_id',
        'options' => 'options',
        'variants' => 'variants',
        'categories' => 'categories',
        'attributeItems' => 'attribute_items',
        'orderLocation' => 'order_location',
        'seoFriendlyUrl' => 'seo_friendly_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'id' => 'setId',
        'categoryId' => 'setCategoryId',
        'description' => 'setDescription',
        'shortDescription' => 'setShortDescription',
        'numberInStock' => 'setNumberInStock',
        'price' => 'setPrice',
        'rrp' => 'setRrp',
        'productCode' => 'setProductCode',
        'chargeDelivery' => 'setChargeDelivery',
        'specialOffer' => 'setSpecialOffer',
        'brand' => 'setBrand',
        'condition' => 'setCondition',
        'gtin' => 'setGtin',
        'mpn' => 'setMpn',
        'productWeight' => 'setProductWeight',
        'canBeAddedToCart' => 'setCanBeAddedToCart',
        'taxApplicable' => 'setTaxApplicable',
        'taxRateId' => 'setTaxRateId',
        'live' => 'setLive',
        'orderNote' => 'setOrderNote',
        'redirectUrl' => 'setRedirectUrl',
        'lastModified' => 'setLastModified',
        'metaDescription' => 'setMetaDescription',
        'metaKeywords' => 'setMetaKeywords',
        'metaTitle' => 'setMetaTitle',
        'totalProductStock' => 'setTotalProductStock',
        'parentProductId' => 'setParentProductId',
        'options' => 'setOptions',
        'variants' => 'setVariants',
        'categories' => 'setCategories',
        'attributeItems' => 'setAttributeItems',
        'orderLocation' => 'setOrderLocation',
        'seoFriendlyUrl' => 'setSeoFriendlyUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'id' => 'getId',
        'categoryId' => 'getCategoryId',
        'description' => 'getDescription',
        'shortDescription' => 'getShortDescription',
        'numberInStock' => 'getNumberInStock',
        'price' => 'getPrice',
        'rrp' => 'getRrp',
        'productCode' => 'getProductCode',
        'chargeDelivery' => 'getChargeDelivery',
        'specialOffer' => 'getSpecialOffer',
        'brand' => 'getBrand',
        'condition' => 'getCondition',
        'gtin' => 'getGtin',
        'mpn' => 'getMpn',
        'productWeight' => 'getProductWeight',
        'canBeAddedToCart' => 'getCanBeAddedToCart',
        'taxApplicable' => 'getTaxApplicable',
        'taxRateId' => 'getTaxRateId',
        'live' => 'getLive',
        'orderNote' => 'getOrderNote',
        'redirectUrl' => 'getRedirectUrl',
        'lastModified' => 'getLastModified',
        'metaDescription' => 'getMetaDescription',
        'metaKeywords' => 'getMetaKeywords',
        'metaTitle' => 'getMetaTitle',
        'totalProductStock' => 'getTotalProductStock',
        'parentProductId' => 'getParentProductId',
        'options' => 'getOptions',
        'variants' => 'getVariants',
        'categories' => 'getCategories',
        'attributeItems' => 'getAttributeItems',
        'orderLocation' => 'getOrderLocation',
        'seoFriendlyUrl' => 'getSeoFriendlyUrl'
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
        $this->container['categoryId'] = $data['categoryId'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['shortDescription'] = $data['shortDescription'] ?? null;
        $this->container['numberInStock'] = $data['numberInStock'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['rrp'] = $data['rrp'] ?? null;
        $this->container['productCode'] = $data['productCode'] ?? null;
        $this->container['chargeDelivery'] = $data['chargeDelivery'] ?? null;
        $this->container['specialOffer'] = $data['specialOffer'] ?? null;
        $this->container['brand'] = $data['brand'] ?? null;
        $this->container['condition'] = $data['condition'] ?? null;
        $this->container['gtin'] = $data['gtin'] ?? null;
        $this->container['mpn'] = $data['mpn'] ?? null;
        $this->container['productWeight'] = $data['productWeight'] ?? null;
        $this->container['canBeAddedToCart'] = $data['canBeAddedToCart'] ?? null;
        $this->container['taxApplicable'] = $data['taxApplicable'] ?? null;
        $this->container['taxRateId'] = $data['taxRateId'] ?? null;
        $this->container['live'] = $data['live'] ?? null;
        $this->container['orderNote'] = $data['orderNote'] ?? null;
        $this->container['redirectUrl'] = $data['redirectUrl'] ?? null;
        $this->container['lastModified'] = $data['lastModified'] ?? null;
        $this->container['metaDescription'] = $data['metaDescription'] ?? null;
        $this->container['metaKeywords'] = $data['metaKeywords'] ?? null;
        $this->container['metaTitle'] = $data['metaTitle'] ?? null;
        $this->container['totalProductStock'] = $data['totalProductStock'] ?? null;
        $this->container['parentProductId'] = $data['parentProductId'] ?? null;
        $this->container['options'] = $data['options'] ?? null;
        $this->container['variants'] = $data['variants'] ?? null;
        $this->container['categories'] = $data['categories'] ?? null;
        $this->container['attributeItems'] = $data['attributeItems'] ?? null;
        $this->container['orderLocation'] = $data['orderLocation'] ?? null;
        $this->container['seoFriendlyUrl'] = $data['seoFriendlyUrl'] ?? null;
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
        if (!is_null($this->container['price']) && ($this->container['price'] < 0)) {
            $invalidProperties[] = "invalid value for 'price', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['rrp']) && ($this->container['rrp'] < 0)) {
            $invalidProperties[] = "invalid value for 'rrp', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['productWeight']) && ($this->container['productWeight'] < 0)) {
            $invalidProperties[] = "invalid value for 'productWeight', must be bigger than or equal to 0.";
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
     * Gets shortDescription
     *
     * @return string|null
     */
    public function getShortDescription()
    {
        return $this->container['shortDescription'];
    }

    /**
     * Sets shortDescription
     *
     * @param string|null $shortDescription shortDescription
     *
     * @return self
     */
    public function setShortDescription($shortDescription)
    {
        $this->container['shortDescription'] = $shortDescription;

        return $this;
    }

    /**
     * Gets numberInStock
     *
     * @return int|null
     */
    public function getNumberInStock()
    {
        return $this->container['numberInStock'];
    }

    /**
     * Sets numberInStock
     *
     * @param int|null $numberInStock numberInStock
     *
     * @return self
     */
    public function setNumberInStock($numberInStock)
    {
        $this->container['numberInStock'] = $numberInStock;

        return $this;
    }

    /**
     * Gets price
     *
     * @return double|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {

        if (!is_null($price) && ($price < 0)) {
            throw new \InvalidArgumentException('invalid value for $price when calling V1Product., must be bigger than or equal to 0.');
        }

        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets rrp
     *
     * @return double|null
     */
    public function getRrp()
    {
        return $this->container['rrp'];
    }

    /**
     * Sets rrp
     *
     * @param double|null $rrp rrp
     *
     * @return self
     */
    public function setRrp($rrp)
    {

        if (!is_null($rrp) && ($rrp < 0)) {
            throw new \InvalidArgumentException('invalid value for $rrp when calling V1Product., must be bigger than or equal to 0.');
        }

        $this->container['rrp'] = $rrp;

        return $this;
    }

    /**
     * Gets productCode
     *
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->container['productCode'];
    }

    /**
     * Sets productCode
     *
     * @param string|null $productCode productCode
     *
     * @return self
     */
    public function setProductCode($productCode)
    {
        $this->container['productCode'] = $productCode;

        return $this;
    }

    /**
     * Gets chargeDelivery
     *
     * @return bool|null
     */
    public function getChargeDelivery()
    {
        return $this->container['chargeDelivery'];
    }

    /**
     * Sets chargeDelivery
     *
     * @param bool|null $chargeDelivery chargeDelivery
     *
     * @return self
     */
    public function setChargeDelivery($chargeDelivery)
    {
        $this->container['chargeDelivery'] = $chargeDelivery;

        return $this;
    }

    /**
     * Gets specialOffer
     *
     * @return bool|null
     */
    public function getSpecialOffer()
    {
        return $this->container['specialOffer'];
    }

    /**
     * Sets specialOffer
     *
     * @param bool|null $specialOffer specialOffer
     *
     * @return self
     */
    public function setSpecialOffer($specialOffer)
    {
        $this->container['specialOffer'] = $specialOffer;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand brand
     *
     * @return self
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return string|null
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string|null $condition condition
     *
     * @return self
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets gtin
     *
     * @return string|null
     */
    public function getGtin()
    {
        return $this->container['gtin'];
    }

    /**
     * Sets gtin
     *
     * @param string|null $gtin gtin
     *
     * @return self
     */
    public function setGtin($gtin)
    {
        $this->container['gtin'] = $gtin;

        return $this;
    }

    /**
     * Gets mpn
     *
     * @return string|null
     */
    public function getMpn()
    {
        return $this->container['mpn'];
    }

    /**
     * Sets mpn
     *
     * @param string|null $mpn mpn
     *
     * @return self
     */
    public function setMpn($mpn)
    {
        $this->container['mpn'] = $mpn;

        return $this;
    }

    /**
     * Gets productWeight
     *
     * @return double|null
     */
    public function getProductWeight()
    {
        return $this->container['productWeight'];
    }

    /**
     * Sets productWeight
     *
     * @param double|null $productWeight productWeight
     *
     * @return self
     */
    public function setProductWeight($productWeight)
    {

        if (!is_null($productWeight) && ($productWeight < 0)) {
            throw new \InvalidArgumentException('invalid value for $productWeight when calling V1Product., must be bigger than or equal to 0.');
        }

        $this->container['productWeight'] = $productWeight;

        return $this;
    }

    /**
     * Gets canBeAddedToCart
     *
     * @return bool|null
     */
    public function getCanBeAddedToCart()
    {
        return $this->container['canBeAddedToCart'];
    }

    /**
     * Sets canBeAddedToCart
     *
     * @param bool|null $canBeAddedToCart canBeAddedToCart
     *
     * @return self
     */
    public function setCanBeAddedToCart($canBeAddedToCart)
    {
        $this->container['canBeAddedToCart'] = $canBeAddedToCart;

        return $this;
    }

    /**
     * Gets taxApplicable
     *
     * @return bool|null
     */
    public function getTaxApplicable()
    {
        return $this->container['taxApplicable'];
    }

    /**
     * Sets taxApplicable
     *
     * @param bool|null $taxApplicable taxApplicable
     *
     * @return self
     */
    public function setTaxApplicable($taxApplicable)
    {
        $this->container['taxApplicable'] = $taxApplicable;

        return $this;
    }

    /**
     * Gets taxRateId
     *
     * @return int|null
     */
    public function getTaxRateId()
    {
        return $this->container['taxRateId'];
    }

    /**
     * Sets taxRateId
     *
     * @param int|null $taxRateId taxRateId
     *
     * @return self
     */
    public function setTaxRateId($taxRateId)
    {
        $this->container['taxRateId'] = $taxRateId;

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
     * Gets orderNote
     *
     * @return string|null
     */
    public function getOrderNote()
    {
        return $this->container['orderNote'];
    }

    /**
     * Sets orderNote
     *
     * @param string|null $orderNote orderNote
     *
     * @return self
     */
    public function setOrderNote($orderNote)
    {
        $this->container['orderNote'] = $orderNote;

        return $this;
    }

    /**
     * Gets redirectUrl
     *
     * @return string|null
     */
    public function getRedirectUrl()
    {
        return $this->container['redirectUrl'];
    }

    /**
     * Sets redirectUrl
     *
     * @param string|null $redirectUrl redirectUrl
     *
     * @return self
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->container['redirectUrl'] = $redirectUrl;

        return $this;
    }

    /**
     * Gets lastModified
     *
     * @return \DateTime|null
     */
    public function getLastModified()
    {
        return $this->container['lastModified'];
    }

    /**
     * Sets lastModified
     *
     * @param \DateTime|null $lastModified lastModified
     *
     * @return self
     */
    public function setLastModified($lastModified)
    {
        $this->container['lastModified'] = $lastModified;

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
     * Gets totalProductStock
     *
     * @return int|null
     */
    public function getTotalProductStock()
    {
        return $this->container['totalProductStock'];
    }

    /**
     * Sets totalProductStock
     *
     * @param int|null $totalProductStock totalProductStock
     *
     * @return self
     */
    public function setTotalProductStock($totalProductStock)
    {
        $this->container['totalProductStock'] = $totalProductStock;

        return $this;
    }

    /**
     * Gets parentProductId
     *
     * @return int|null
     */
    public function getParentProductId()
    {
        return $this->container['parentProductId'];
    }

    /**
     * Sets parentProductId
     *
     * @param int|null $parentProductId parentProductId
     *
     * @return self
     */
    public function setParentProductId($parentProductId)
    {
        $this->container['parentProductId'] = $parentProductId;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \EkmPHP\Models\V1ProductOption[]|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \EkmPHP\Models\V1ProductOption[]|null $options options
     *
     * @return self
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets variants
     *
     * @return \EkmPHP\Models\V1ProductVariant[]|null
     */
    public function getVariants()
    {
        return $this->container['variants'];
    }

    /**
     * Sets variants
     *
     * @param \EkmPHP\Models\V1ProductVariant[]|null $variants variants
     *
     * @return self
     */
    public function setVariants($variants)
    {
        $this->container['variants'] = $variants;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return \EkmPHP\Models\V1ProductCategory[]|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \EkmPHP\Models\V1ProductCategory[]|null $categories categories
     *
     * @return self
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets attributeItems
     *
     * @return \EkmPHP\Models\V1ProductAttributeItem[]|null
     */
    public function getAttributeItems()
    {
        return $this->container['attributeItems'];
    }

    /**
     * Sets attributeItems
     *
     * @param \EkmPHP\Models\V1ProductAttributeItem[]|null $attributeItems attributeItems
     *
     * @return self
     */
    public function setAttributeItems($attributeItems)
    {
        $this->container['attributeItems'] = $attributeItems;

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
     * Gets seoFriendlyUrl
     *
     * @return string|null
     */
    public function getSeoFriendlyUrl()
    {
        return $this->container['seoFriendlyUrl'];
    }

    /**
     * Sets seoFriendlyUrl
     *
     * @param string|null $seoFriendlyUrl seoFriendlyUrl
     *
     * @return self
     */
    public function setSeoFriendlyUrl($seoFriendlyUrl)
    {
        $this->container['seoFriendlyUrl'] = $seoFriendlyUrl;

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


