<?php
/**
 * MailHeaderFooterFlat
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
 * MailHeaderFooterFlat Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MailHeaderFooterFlat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'mail_header_footer_flat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'system_default' => 'bool',
'name' => 'string',
'description' => 'string',
'header_html' => 'string',
'header_plain' => 'string',
'footer_html' => 'string',
'footer_plain' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'translated' => 'object',
'sales_channels' => '\Swagger\Client\Model\SalesChannelFlat'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'system_default' => null,
'name' => null,
'description' => null,
'header_html' => null,
'header_plain' => null,
'footer_html' => null,
'footer_plain' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'translated' => null,
'sales_channels' => null    ];

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
'system_default' => 'systemDefault',
'name' => 'name',
'description' => 'description',
'header_html' => 'headerHtml',
'header_plain' => 'headerPlain',
'footer_html' => 'footerHtml',
'footer_plain' => 'footerPlain',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'translated' => 'translated',
'sales_channels' => 'salesChannels'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'system_default' => 'setSystemDefault',
'name' => 'setName',
'description' => 'setDescription',
'header_html' => 'setHeaderHtml',
'header_plain' => 'setHeaderPlain',
'footer_html' => 'setFooterHtml',
'footer_plain' => 'setFooterPlain',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'translated' => 'setTranslated',
'sales_channels' => 'setSalesChannels'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'system_default' => 'getSystemDefault',
'name' => 'getName',
'description' => 'getDescription',
'header_html' => 'getHeaderHtml',
'header_plain' => 'getHeaderPlain',
'footer_html' => 'getFooterHtml',
'footer_plain' => 'getFooterPlain',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'translated' => 'getTranslated',
'sales_channels' => 'getSalesChannels'    ];

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
        $this->container['system_default'] = isset($data['system_default']) ? $data['system_default'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['header_html'] = isset($data['header_html']) ? $data['header_html'] : null;
        $this->container['header_plain'] = isset($data['header_plain']) ? $data['header_plain'] : null;
        $this->container['footer_html'] = isset($data['footer_html']) ? $data['footer_html'] : null;
        $this->container['footer_plain'] = isset($data['footer_plain']) ? $data['footer_plain'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['translated'] = isset($data['translated']) ? $data['translated'] : null;
        $this->container['sales_channels'] = isset($data['sales_channels']) ? $data['sales_channels'] : null;
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
     * Gets system_default
     *
     * @return bool
     */
    public function getSystemDefault()
    {
        return $this->container['system_default'];
    }

    /**
     * Sets system_default
     *
     * @param bool $system_default system_default
     *
     * @return $this
     */
    public function setSystemDefault($system_default)
    {
        $this->container['system_default'] = $system_default;

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
     * Gets header_html
     *
     * @return string
     */
    public function getHeaderHtml()
    {
        return $this->container['header_html'];
    }

    /**
     * Sets header_html
     *
     * @param string $header_html header_html
     *
     * @return $this
     */
    public function setHeaderHtml($header_html)
    {
        $this->container['header_html'] = $header_html;

        return $this;
    }

    /**
     * Gets header_plain
     *
     * @return string
     */
    public function getHeaderPlain()
    {
        return $this->container['header_plain'];
    }

    /**
     * Sets header_plain
     *
     * @param string $header_plain header_plain
     *
     * @return $this
     */
    public function setHeaderPlain($header_plain)
    {
        $this->container['header_plain'] = $header_plain;

        return $this;
    }

    /**
     * Gets footer_html
     *
     * @return string
     */
    public function getFooterHtml()
    {
        return $this->container['footer_html'];
    }

    /**
     * Sets footer_html
     *
     * @param string $footer_html footer_html
     *
     * @return $this
     */
    public function setFooterHtml($footer_html)
    {
        $this->container['footer_html'] = $footer_html;

        return $this;
    }

    /**
     * Gets footer_plain
     *
     * @return string
     */
    public function getFooterPlain()
    {
        return $this->container['footer_plain'];
    }

    /**
     * Sets footer_plain
     *
     * @param string $footer_plain footer_plain
     *
     * @return $this
     */
    public function setFooterPlain($footer_plain)
    {
        $this->container['footer_plain'] = $footer_plain;

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
     * Gets translated
     *
     * @return object
     */
    public function getTranslated()
    {
        return $this->container['translated'];
    }

    /**
     * Sets translated
     *
     * @param object $translated translated
     *
     * @return $this
     */
    public function setTranslated($translated)
    {
        $this->container['translated'] = $translated;

        return $this;
    }

    /**
     * Gets sales_channels
     *
     * @return \Swagger\Client\Model\SalesChannelFlat
     */
    public function getSalesChannels()
    {
        return $this->container['sales_channels'];
    }

    /**
     * Sets sales_channels
     *
     * @param \Swagger\Client\Model\SalesChannelFlat $sales_channels sales_channels
     *
     * @return $this
     */
    public function setSalesChannels($sales_channels)
    {
        $this->container['sales_channels'] = $sales_channels;

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
