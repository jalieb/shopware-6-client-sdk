<?php
/**
 * ScheduledTaskFlat
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Shopware Sales Channel API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
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
 * ScheduledTaskFlat Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ScheduledTaskFlat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'scheduled_task_flat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'name' => 'string',
'scheduled_task_class' => 'string',
'run_interval' => 'int',
'status' => 'string',
'last_execution_time' => '\DateTime',
'next_execution_time' => '\DateTime',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'dead_messages' => '\Swagger\Client\Model\DeadMessageFlat'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'name' => null,
'scheduled_task_class' => null,
'run_interval' => 'int64',
'status' => null,
'last_execution_time' => 'date-time',
'next_execution_time' => 'date-time',
'created_at' => 'date-time',
'updated_at' => 'date-time',
'dead_messages' => null    ];

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
'name' => 'name',
'scheduled_task_class' => 'scheduledTaskClass',
'run_interval' => 'runInterval',
'status' => 'status',
'last_execution_time' => 'lastExecutionTime',
'next_execution_time' => 'nextExecutionTime',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'dead_messages' => 'deadMessages'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'scheduled_task_class' => 'setScheduledTaskClass',
'run_interval' => 'setRunInterval',
'status' => 'setStatus',
'last_execution_time' => 'setLastExecutionTime',
'next_execution_time' => 'setNextExecutionTime',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'dead_messages' => 'setDeadMessages'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'scheduled_task_class' => 'getScheduledTaskClass',
'run_interval' => 'getRunInterval',
'status' => 'getStatus',
'last_execution_time' => 'getLastExecutionTime',
'next_execution_time' => 'getNextExecutionTime',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'dead_messages' => 'getDeadMessages'    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['scheduled_task_class'] = isset($data['scheduled_task_class']) ? $data['scheduled_task_class'] : null;
        $this->container['run_interval'] = isset($data['run_interval']) ? $data['run_interval'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['last_execution_time'] = isset($data['last_execution_time']) ? $data['last_execution_time'] : null;
        $this->container['next_execution_time'] = isset($data['next_execution_time']) ? $data['next_execution_time'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['dead_messages'] = isset($data['dead_messages']) ? $data['dead_messages'] : null;
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
        if ($this->container['scheduled_task_class'] === null) {
            $invalidProperties[] = "'scheduled_task_class' can't be null";
        }
        if ($this->container['run_interval'] === null) {
            $invalidProperties[] = "'run_interval' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['next_execution_time'] === null) {
            $invalidProperties[] = "'next_execution_time' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
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
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets scheduled_task_class
     *
     * @return string
     */
    public function getScheduledTaskClass()
    {
        return $this->container['scheduled_task_class'];
    }

    /**
     * Sets scheduled_task_class
     *
     * @param string $scheduled_task_class scheduled_task_class
     *
     * @return $this
     */
    public function setScheduledTaskClass($scheduled_task_class)
    {
        $this->container['scheduled_task_class'] = $scheduled_task_class;

        return $this;
    }

    /**
     * Gets run_interval
     *
     * @return int
     */
    public function getRunInterval()
    {
        return $this->container['run_interval'];
    }

    /**
     * Sets run_interval
     *
     * @param int $run_interval run_interval
     *
     * @return $this
     */
    public function setRunInterval($run_interval)
    {
        $this->container['run_interval'] = $run_interval;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets last_execution_time
     *
     * @return \DateTime
     */
    public function getLastExecutionTime()
    {
        return $this->container['last_execution_time'];
    }

    /**
     * Sets last_execution_time
     *
     * @param \DateTime $last_execution_time last_execution_time
     *
     * @return $this
     */
    public function setLastExecutionTime($last_execution_time)
    {
        $this->container['last_execution_time'] = $last_execution_time;

        return $this;
    }

    /**
     * Gets next_execution_time
     *
     * @return \DateTime
     */
    public function getNextExecutionTime()
    {
        return $this->container['next_execution_time'];
    }

    /**
     * Sets next_execution_time
     *
     * @param \DateTime $next_execution_time next_execution_time
     *
     * @return $this
     */
    public function setNextExecutionTime($next_execution_time)
    {
        $this->container['next_execution_time'] = $next_execution_time;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets dead_messages
     *
     * @return \Swagger\Client\Model\DeadMessageFlat
     */
    public function getDeadMessages()
    {
        return $this->container['dead_messages'];
    }

    /**
     * Sets dead_messages
     *
     * @param \Swagger\Client\Model\DeadMessageFlat $dead_messages dead_messages
     *
     * @return $this
     */
    public function setDeadMessages($dead_messages)
    {
        $this->container['dead_messages'] = $dead_messages;

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
