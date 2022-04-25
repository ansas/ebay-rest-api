<?php
/**
 * OrderFilterCriteria
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Ansas\Ebay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Feed API
 *
 * <p>The <strong>Feed API</strong> lets sellers upload input files, download reports and files including their status, filter reports using URI parameters, and retrieve customer service metrics task details.</p>
 *
 * The version of the OpenAPI document: v1.3.1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ansas\Ebay\Model;

use \ArrayAccess;
use \Ansas\Ebay\ObjectSerializer;

/**
 * OrderFilterCriteria Class Doc Comment
 *
 * @category Class
 * @description The type that defines the fields for the order filters.
 * @package  Ansas\Ebay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OrderFilterCriteria implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderFilterCriteria';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'creationDateRange' => '\Ansas\Ebay\Model\DateRange',
        'modifiedDateRange' => '\Ansas\Ebay\Model\DateRange',
        'orderStatus' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'creationDateRange' => null,
        'modifiedDateRange' => null,
        'orderStatus' => null
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
        'creationDateRange' => 'creationDateRange',
        'modifiedDateRange' => 'modifiedDateRange',
        'orderStatus' => 'orderStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'creationDateRange' => 'setCreationDateRange',
        'modifiedDateRange' => 'setModifiedDateRange',
        'orderStatus' => 'setOrderStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'creationDateRange' => 'getCreationDateRange',
        'modifiedDateRange' => 'getModifiedDateRange',
        'orderStatus' => 'getOrderStatus'
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
        $this->container['creationDateRange'] = $data['creationDateRange'] ?? null;
        $this->container['modifiedDateRange'] = $data['modifiedDateRange'] ?? null;
        $this->container['orderStatus'] = $data['orderStatus'] ?? null;
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
     * Gets creationDateRange
     *
     * @return \Ansas\Ebay\Model\DateRange|null
     */
    public function getCreationDateRange()
    {
        return $this->container['creationDateRange'];
    }

    /**
     * Sets creationDateRange
     *
     * @param \Ansas\Ebay\Model\DateRange|null $creationDateRange creationDateRange
     *
     * @return self
     */
    public function setCreationDateRange($creationDateRange)
    {
        $this->container['creationDateRange'] = $creationDateRange;

        return $this;
    }

    /**
     * Gets modifiedDateRange
     *
     * @return \Ansas\Ebay\Model\DateRange|null
     */
    public function getModifiedDateRange()
    {
        return $this->container['modifiedDateRange'];
    }

    /**
     * Sets modifiedDateRange
     *
     * @param \Ansas\Ebay\Model\DateRange|null $modifiedDateRange modifiedDateRange
     *
     * @return self
     */
    public function setModifiedDateRange($modifiedDateRange)
    {
        $this->container['modifiedDateRange'] = $modifiedDateRange;

        return $this;
    }

    /**
     * Gets orderStatus
     *
     * @return string|null
     */
    public function getOrderStatus()
    {
        return $this->container['orderStatus'];
    }

    /**
     * Sets orderStatus
     *
     * @param string|null $orderStatus The order status of the orders returned. If the filter is omitted from createOrderTask call, orders that are in both <code>ACTIVE </code>and<code> COMPLETED</code> states are returned. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:OrderStatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setOrderStatus($orderStatus)
    {
        $this->container['orderStatus'] = $orderStatus;

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


