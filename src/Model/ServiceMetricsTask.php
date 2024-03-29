<?php
/**
 * ServiceMetricsTask
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
 * ServiceMetricsTask Class Doc Comment
 *
 * @category Class
 * @package  Ansas\Ebay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ServiceMetricsTask implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ServiceMetricsTask';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'completionDate' => 'string',
        'creationDate' => 'string',
        'detailHref' => 'string',
        'feedType' => 'string',
        'filterCriteria' => '\Ansas\Ebay\Model\CustomerServiceMetricsFilterCriteria',
        'schemaVersion' => 'string',
        'status' => 'string',
        'taskId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'completionDate' => null,
        'creationDate' => null,
        'detailHref' => null,
        'feedType' => null,
        'filterCriteria' => null,
        'schemaVersion' => null,
        'status' => null,
        'taskId' => null
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
        'completionDate' => 'completionDate',
        'creationDate' => 'creationDate',
        'detailHref' => 'detailHref',
        'feedType' => 'feedType',
        'filterCriteria' => 'filterCriteria',
        'schemaVersion' => 'schemaVersion',
        'status' => 'status',
        'taskId' => 'taskId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'completionDate' => 'setCompletionDate',
        'creationDate' => 'setCreationDate',
        'detailHref' => 'setDetailHref',
        'feedType' => 'setFeedType',
        'filterCriteria' => 'setFilterCriteria',
        'schemaVersion' => 'setSchemaVersion',
        'status' => 'setStatus',
        'taskId' => 'setTaskId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'completionDate' => 'getCompletionDate',
        'creationDate' => 'getCreationDate',
        'detailHref' => 'getDetailHref',
        'feedType' => 'getFeedType',
        'filterCriteria' => 'getFilterCriteria',
        'schemaVersion' => 'getSchemaVersion',
        'status' => 'getStatus',
        'taskId' => 'getTaskId'
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
        $this->container['completionDate'] = $data['completionDate'] ?? null;
        $this->container['creationDate'] = $data['creationDate'] ?? null;
        $this->container['detailHref'] = $data['detailHref'] ?? null;
        $this->container['feedType'] = $data['feedType'] ?? null;
        $this->container['filterCriteria'] = $data['filterCriteria'] ?? null;
        $this->container['schemaVersion'] = $data['schemaVersion'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['taskId'] = $data['taskId'] ?? null;
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
     * Gets completionDate
     *
     * @return string|null
     */
    public function getCompletionDate()
    {
        return $this->container['completionDate'];
    }

    /**
     * Sets completionDate
     *
     * @param string|null $completionDate The timestamp when the customer service metrics task went into the <code>COMPLETED</code> or <code>COMPLETED_WITH_ERROR</code> state. This field is only returned if the status is one of the two completed values. This state means that eBay has compiled the report for the seller based on the seller’s filter criteria, and the seller can run a <strong>getResultFile</strong> call to download the report.
     *
     * @return self
     */
    public function setCompletionDate($completionDate)
    {
        $this->container['completionDate'] = $completionDate;

        return $this;
    }

    /**
     * Gets creationDate
     *
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
     * Sets creationDate
     *
     * @param string|null $creationDate The date the customer service metrics task was created.
     *
     * @return self
     */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;

        return $this;
    }

    /**
     * Gets detailHref
     *
     * @return string|null
     */
    public function getDetailHref()
    {
        return $this->container['detailHref'];
    }

    /**
     * Sets detailHref
     *
     * @param string|null $detailHref The relative <strong>getCustomerServiceMetricTask</strong> call URI path to retrieve the corresponding task.
     *
     * @return self
     */
    public function setDetailHref($detailHref)
    {
        $this->container['detailHref'] = $detailHref;

        return $this;
    }

    /**
     * Gets feedType
     *
     * @return string|null
     */
    public function getFeedType()
    {
        return $this->container['feedType'];
    }

    /**
     * Sets feedType
     *
     * @param string|null $feedType The feed type associated with the task.
     *
     * @return self
     */
    public function setFeedType($feedType)
    {
        $this->container['feedType'] = $feedType;

        return $this;
    }

    /**
     * Gets filterCriteria
     *
     * @return \Ansas\Ebay\Model\CustomerServiceMetricsFilterCriteria|null
     */
    public function getFilterCriteria()
    {
        return $this->container['filterCriteria'];
    }

    /**
     * Sets filterCriteria
     *
     * @param \Ansas\Ebay\Model\CustomerServiceMetricsFilterCriteria|null $filterCriteria filterCriteria
     *
     * @return self
     */
    public function setFilterCriteria($filterCriteria)
    {
        $this->container['filterCriteria'] = $filterCriteria;

        return $this;
    }

    /**
     * Gets schemaVersion
     *
     * @return string|null
     */
    public function getSchemaVersion()
    {
        return $this->container['schemaVersion'];
    }

    /**
     * Sets schemaVersion
     *
     * @param string|null $schemaVersion The schema version number of the file format. If omitted, the default value is used. <p><b>Default value: </b><code>1.0</code><p>
     *
     * @return self
     */
    public function setSchemaVersion($schemaVersion)
    {
        $this->container['schemaVersion'] = $schemaVersion;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status An enumeration value that indicates the state of the task. See <strong>FeedStatusEnum</strong> for values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:FeedStatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets taskId
     *
     * @return string|null
     */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
     * Sets taskId
     *
     * @param string|null $taskId The unique eBay-assigned ID of the task.
     *
     * @return self
     */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;

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


