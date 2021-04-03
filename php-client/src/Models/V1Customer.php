<?php
/**
 * V1Customer
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Mrstebo\EkmPHP
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

namespace Mrstebo\EkmPHP\Models;

use \ArrayAccess;
use \Mrstebo\EkmPHP\ObjectSerializer;

/**
 * V1Customer Class Doc Comment
 *
 * @category Class
 * @package  Mrstebo\EkmPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class V1Customer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'V1Customer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'firstName' => 'string',
        'lastName' => 'string',
        'id' => 'int',
        'emailAddress' => 'string',
        'orderCount' => 'int',
        'loyaltyPoints' => 'double',
        'createdDate' => '\DateTime',
        'modifiedDate' => '\DateTime',
        'lastLoginDate' => '\DateTime',
        'lastLoginAttemptDate' => '\DateTime',
        'locked' => 'bool',
        'lockedDate' => '\DateTime',
        'lockedEndDate' => '\DateTime',
        'isSubscribedToNewsletter' => 'bool',
        'addresses' => '\Mrstebo\EkmPHP\Models\V1CustomerAddress[]'
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
        'id' => 'int64',
        'emailAddress' => null,
        'orderCount' => 'int32',
        'loyaltyPoints' => 'double',
        'createdDate' => 'date-time',
        'modifiedDate' => 'date-time',
        'lastLoginDate' => 'date-time',
        'lastLoginAttemptDate' => 'date-time',
        'locked' => null,
        'lockedDate' => 'date-time',
        'lockedEndDate' => 'date-time',
        'isSubscribedToNewsletter' => null,
        'addresses' => null
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
        'id' => 'id',
        'emailAddress' => 'email_address',
        'orderCount' => 'order_count',
        'loyaltyPoints' => 'loyalty_points',
        'createdDate' => 'created_date',
        'modifiedDate' => 'modified_date',
        'lastLoginDate' => 'last_login_date',
        'lastLoginAttemptDate' => 'last_login_attempt_date',
        'locked' => 'locked',
        'lockedDate' => 'locked_date',
        'lockedEndDate' => 'locked_end_date',
        'isSubscribedToNewsletter' => 'is_subscribed_to_newsletter',
        'addresses' => 'addresses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'id' => 'setId',
        'emailAddress' => 'setEmailAddress',
        'orderCount' => 'setOrderCount',
        'loyaltyPoints' => 'setLoyaltyPoints',
        'createdDate' => 'setCreatedDate',
        'modifiedDate' => 'setModifiedDate',
        'lastLoginDate' => 'setLastLoginDate',
        'lastLoginAttemptDate' => 'setLastLoginAttemptDate',
        'locked' => 'setLocked',
        'lockedDate' => 'setLockedDate',
        'lockedEndDate' => 'setLockedEndDate',
        'isSubscribedToNewsletter' => 'setIsSubscribedToNewsletter',
        'addresses' => 'setAddresses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'id' => 'getId',
        'emailAddress' => 'getEmailAddress',
        'orderCount' => 'getOrderCount',
        'loyaltyPoints' => 'getLoyaltyPoints',
        'createdDate' => 'getCreatedDate',
        'modifiedDate' => 'getModifiedDate',
        'lastLoginDate' => 'getLastLoginDate',
        'lastLoginAttemptDate' => 'getLastLoginAttemptDate',
        'locked' => 'getLocked',
        'lockedDate' => 'getLockedDate',
        'lockedEndDate' => 'getLockedEndDate',
        'isSubscribedToNewsletter' => 'getIsSubscribedToNewsletter',
        'addresses' => 'getAddresses'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['emailAddress'] = $data['emailAddress'] ?? null;
        $this->container['orderCount'] = $data['orderCount'] ?? null;
        $this->container['loyaltyPoints'] = $data['loyaltyPoints'] ?? null;
        $this->container['createdDate'] = $data['createdDate'] ?? null;
        $this->container['modifiedDate'] = $data['modifiedDate'] ?? null;
        $this->container['lastLoginDate'] = $data['lastLoginDate'] ?? null;
        $this->container['lastLoginAttemptDate'] = $data['lastLoginAttemptDate'] ?? null;
        $this->container['locked'] = $data['locked'] ?? null;
        $this->container['lockedDate'] = $data['lockedDate'] ?? null;
        $this->container['lockedEndDate'] = $data['lockedEndDate'] ?? null;
        $this->container['isSubscribedToNewsletter'] = $data['isSubscribedToNewsletter'] ?? null;
        $this->container['addresses'] = $data['addresses'] ?? null;
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
     * Gets emailAddress
     *
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->container['emailAddress'];
    }

    /**
     * Sets emailAddress
     *
     * @param string|null $emailAddress emailAddress
     *
     * @return self
     */
    public function setEmailAddress($emailAddress)
    {
        $this->container['emailAddress'] = $emailAddress;

        return $this;
    }

    /**
     * Gets orderCount
     *
     * @return int|null
     */
    public function getOrderCount()
    {
        return $this->container['orderCount'];
    }

    /**
     * Sets orderCount
     *
     * @param int|null $orderCount orderCount
     *
     * @return self
     */
    public function setOrderCount($orderCount)
    {
        $this->container['orderCount'] = $orderCount;

        return $this;
    }

    /**
     * Gets loyaltyPoints
     *
     * @return double|null
     */
    public function getLoyaltyPoints()
    {
        return $this->container['loyaltyPoints'];
    }

    /**
     * Sets loyaltyPoints
     *
     * @param double|null $loyaltyPoints loyaltyPoints
     *
     * @return self
     */
    public function setLoyaltyPoints($loyaltyPoints)
    {
        $this->container['loyaltyPoints'] = $loyaltyPoints;

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
     * Gets lastLoginDate
     *
     * @return \DateTime|null
     */
    public function getLastLoginDate()
    {
        return $this->container['lastLoginDate'];
    }

    /**
     * Sets lastLoginDate
     *
     * @param \DateTime|null $lastLoginDate lastLoginDate
     *
     * @return self
     */
    public function setLastLoginDate($lastLoginDate)
    {
        $this->container['lastLoginDate'] = $lastLoginDate;

        return $this;
    }

    /**
     * Gets lastLoginAttemptDate
     *
     * @return \DateTime|null
     */
    public function getLastLoginAttemptDate()
    {
        return $this->container['lastLoginAttemptDate'];
    }

    /**
     * Sets lastLoginAttemptDate
     *
     * @param \DateTime|null $lastLoginAttemptDate lastLoginAttemptDate
     *
     * @return self
     */
    public function setLastLoginAttemptDate($lastLoginAttemptDate)
    {
        $this->container['lastLoginAttemptDate'] = $lastLoginAttemptDate;

        return $this;
    }

    /**
     * Gets locked
     *
     * @return bool|null
     */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
     * Sets locked
     *
     * @param bool|null $locked locked
     *
     * @return self
     */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;

        return $this;
    }

    /**
     * Gets lockedDate
     *
     * @return \DateTime|null
     */
    public function getLockedDate()
    {
        return $this->container['lockedDate'];
    }

    /**
     * Sets lockedDate
     *
     * @param \DateTime|null $lockedDate lockedDate
     *
     * @return self
     */
    public function setLockedDate($lockedDate)
    {
        $this->container['lockedDate'] = $lockedDate;

        return $this;
    }

    /**
     * Gets lockedEndDate
     *
     * @return \DateTime|null
     */
    public function getLockedEndDate()
    {
        return $this->container['lockedEndDate'];
    }

    /**
     * Sets lockedEndDate
     *
     * @param \DateTime|null $lockedEndDate lockedEndDate
     *
     * @return self
     */
    public function setLockedEndDate($lockedEndDate)
    {
        $this->container['lockedEndDate'] = $lockedEndDate;

        return $this;
    }

    /**
     * Gets isSubscribedToNewsletter
     *
     * @return bool|null
     */
    public function getIsSubscribedToNewsletter()
    {
        return $this->container['isSubscribedToNewsletter'];
    }

    /**
     * Sets isSubscribedToNewsletter
     *
     * @param bool|null $isSubscribedToNewsletter isSubscribedToNewsletter
     *
     * @return self
     */
    public function setIsSubscribedToNewsletter($isSubscribedToNewsletter)
    {
        $this->container['isSubscribedToNewsletter'] = $isSubscribedToNewsletter;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \Mrstebo\EkmPHP\Models\V1CustomerAddress[]|null
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \Mrstebo\EkmPHP\Models\V1CustomerAddress[]|null $addresses addresses
     *
     * @return self
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

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


