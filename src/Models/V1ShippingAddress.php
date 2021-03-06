<?php
/**
 * V1ShippingAddress
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
 * V1ShippingAddress Class Doc Comment
 *
 * @category Class
 * @package  EkmPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class V1ShippingAddress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'V1ShippingAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'firstName' => 'string',
        'lastName' => 'string',
        'address' => 'string',
        'town' => 'string',
        'country' => 'string',
        'postCode' => 'string',
        'id' => 'int',
        'createdDate' => '\DateTime',
        'modifiedDate' => '\DateTime',
        'customerId' => 'int',
        'isPreferredBillingAddress' => 'bool',
        'isPreferredShippingAddress' => 'bool',
        'company' => 'string',
        'address2' => 'string',
        'county' => 'string',
        'friendlyCountry' => 'string',
        'telephone' => 'string',
        'fax' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'firstName' => null,
        'lastName' => null,
        'address' => null,
        'town' => null,
        'country' => null,
        'postCode' => null,
        'id' => 'int64',
        'createdDate' => 'date-time',
        'modifiedDate' => 'date-time',
        'customerId' => 'int64',
        'isPreferredBillingAddress' => null,
        'isPreferredShippingAddress' => null,
        'company' => null,
        'address2' => null,
        'county' => null,
        'friendlyCountry' => null,
        'telephone' => null,
        'fax' => null
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
        'firstName' => 'first_name',
        'lastName' => 'last_name',
        'address' => 'address',
        'town' => 'town',
        'country' => 'country',
        'postCode' => 'post_code',
        'id' => 'id',
        'createdDate' => 'created_date',
        'modifiedDate' => 'modified_date',
        'customerId' => 'customer_id',
        'isPreferredBillingAddress' => 'is_preferred_billing_address',
        'isPreferredShippingAddress' => 'is_preferred_shipping_address',
        'company' => 'company',
        'address2' => 'address2',
        'county' => 'county',
        'friendlyCountry' => 'friendly_country',
        'telephone' => 'telephone',
        'fax' => 'fax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'address' => 'setAddress',
        'town' => 'setTown',
        'country' => 'setCountry',
        'postCode' => 'setPostCode',
        'id' => 'setId',
        'createdDate' => 'setCreatedDate',
        'modifiedDate' => 'setModifiedDate',
        'customerId' => 'setCustomerId',
        'isPreferredBillingAddress' => 'setIsPreferredBillingAddress',
        'isPreferredShippingAddress' => 'setIsPreferredShippingAddress',
        'company' => 'setCompany',
        'address2' => 'setAddress2',
        'county' => 'setCounty',
        'friendlyCountry' => 'setFriendlyCountry',
        'telephone' => 'setTelephone',
        'fax' => 'setFax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'address' => 'getAddress',
        'town' => 'getTown',
        'country' => 'getCountry',
        'postCode' => 'getPostCode',
        'id' => 'getId',
        'createdDate' => 'getCreatedDate',
        'modifiedDate' => 'getModifiedDate',
        'customerId' => 'getCustomerId',
        'isPreferredBillingAddress' => 'getIsPreferredBillingAddress',
        'isPreferredShippingAddress' => 'getIsPreferredShippingAddress',
        'company' => 'getCompany',
        'address2' => 'getAddress2',
        'county' => 'getCounty',
        'friendlyCountry' => 'getFriendlyCountry',
        'telephone' => 'getTelephone',
        'fax' => 'getFax'
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
        $this->container['firstName'] = $data['firstName'] ?? null;
        $this->container['lastName'] = $data['lastName'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['town'] = $data['town'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['postCode'] = $data['postCode'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['createdDate'] = $data['createdDate'] ?? null;
        $this->container['modifiedDate'] = $data['modifiedDate'] ?? null;
        $this->container['customerId'] = $data['customerId'] ?? null;
        $this->container['isPreferredBillingAddress'] = $data['isPreferredBillingAddress'] ?? null;
        $this->container['isPreferredShippingAddress'] = $data['isPreferredShippingAddress'] ?? null;
        $this->container['company'] = $data['company'] ?? null;
        $this->container['address2'] = $data['address2'] ?? null;
        $this->container['county'] = $data['county'] ?? null;
        $this->container['friendlyCountry'] = $data['friendlyCountry'] ?? null;
        $this->container['telephone'] = $data['telephone'] ?? null;
        $this->container['fax'] = $data['fax'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['firstName'] === null) {
            $invalidProperties[] = "'firstName' can't be null";
        }
        if ($this->container['lastName'] === null) {
            $invalidProperties[] = "'lastName' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['town'] === null) {
            $invalidProperties[] = "'town' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['postCode'] === null) {
            $invalidProperties[] = "'postCode' can't be null";
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
     * Gets firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string $firstName firstName
     *
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     *
     * @param string $lastName lastName
     *
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->container['lastName'] = $lastName;

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
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->container['town'];
    }

    /**
     * Sets town
     *
     * @param string $town town
     *
     * @return self
     */
    public function setTown($town)
    {
        $this->container['town'] = $town;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets postCode
     *
     * @return string
     */
    public function getPostCode()
    {
        return $this->container['postCode'];
    }

    /**
     * Sets postCode
     *
     * @param string $postCode postCode
     *
     * @return self
     */
    public function setPostCode($postCode)
    {
        $this->container['postCode'] = $postCode;

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
     * Gets createdDate
     *
     * @return \DateTime|null
     */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
     * Sets createdDate
     *
     * @param \DateTime|null $createdDate createdDate
     *
     * @return self
     */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;

        return $this;
    }

    /**
     * Gets modifiedDate
     *
     * @return \DateTime|null
     */
    public function getModifiedDate()
    {
        return $this->container['modifiedDate'];
    }

    /**
     * Sets modifiedDate
     *
     * @param \DateTime|null $modifiedDate modifiedDate
     *
     * @return self
     */
    public function setModifiedDate($modifiedDate)
    {
        $this->container['modifiedDate'] = $modifiedDate;

        return $this;
    }

    /**
     * Gets customerId
     *
     * @return int|null
     */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
     * Sets customerId
     *
     * @param int|null $customerId customerId
     *
     * @return self
     */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;

        return $this;
    }

    /**
     * Gets isPreferredBillingAddress
     *
     * @return bool|null
     */
    public function getIsPreferredBillingAddress()
    {
        return $this->container['isPreferredBillingAddress'];
    }

    /**
     * Sets isPreferredBillingAddress
     *
     * @param bool|null $isPreferredBillingAddress isPreferredBillingAddress
     *
     * @return self
     */
    public function setIsPreferredBillingAddress($isPreferredBillingAddress)
    {
        $this->container['isPreferredBillingAddress'] = $isPreferredBillingAddress;

        return $this;
    }

    /**
     * Gets isPreferredShippingAddress
     *
     * @return bool|null
     */
    public function getIsPreferredShippingAddress()
    {
        return $this->container['isPreferredShippingAddress'];
    }

    /**
     * Sets isPreferredShippingAddress
     *
     * @param bool|null $isPreferredShippingAddress isPreferredShippingAddress
     *
     * @return self
     */
    public function setIsPreferredShippingAddress($isPreferredShippingAddress)
    {
        $this->container['isPreferredShippingAddress'] = $isPreferredShippingAddress;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string|null $company company
     *
     * @return self
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets address2
     *
     * @return string|null
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     *
     * @param string|null $address2 address2
     *
     * @return self
     */
    public function setAddress2($address2)
    {
        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets county
     *
     * @return string|null
     */
    public function getCounty()
    {
        return $this->container['county'];
    }

    /**
     * Sets county
     *
     * @param string|null $county county
     *
     * @return self
     */
    public function setCounty($county)
    {
        $this->container['county'] = $county;

        return $this;
    }

    /**
     * Gets friendlyCountry
     *
     * @return string|null
     */
    public function getFriendlyCountry()
    {
        return $this->container['friendlyCountry'];
    }

    /**
     * Sets friendlyCountry
     *
     * @param string|null $friendlyCountry friendlyCountry
     *
     * @return self
     */
    public function setFriendlyCountry($friendlyCountry)
    {
        $this->container['friendlyCountry'] = $friendlyCountry;

        return $this;
    }

    /**
     * Gets telephone
     *
     * @return string|null
     */
    public function getTelephone()
    {
        return $this->container['telephone'];
    }

    /**
     * Sets telephone
     *
     * @param string|null $telephone telephone
     *
     * @return self
     */
    public function setTelephone($telephone)
    {
        $this->container['telephone'] = $telephone;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string|null
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string|null $fax fax
     *
     * @return self
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

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


