<?php
/**
 * OptionValueVariant
 *
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\Api\v3
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BigCommerce API
 *
 * A Swagger Document for the BigCommmerce v3 API.
 *
 * OpenAPI spec version: 3.0.0b
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\v3\Model;

use \ArrayAccess;

/**
 * OptionValueVariant Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     BigCommerce\Api\v3
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OptionValueVariant implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OptionValueVariant';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'option_display_name' => 'string',
        'label' => 'string',
        'id' => 'int',
        'option_id' => 'int'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'option_display_name' => 'option_display_name',
        'label' => 'label',
        'id' => 'id',
        'option_id' => 'option_id'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'option_display_name' => 'setOptionDisplayName',
        'label' => 'setLabel',
        'id' => 'setId',
        'option_id' => 'setOptionId'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'option_display_name' => 'getOptionDisplayName',
        'label' => 'getLabel',
        'id' => 'getId',
        'option_id' => 'getOptionId'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = [])
    {
        $this->container['option_display_name'] = array_key_exists('option_display_name', $data) ? $data['option_display_name'] : new \stdClass();
        $this->container['label'] = array_key_exists('label', $data) ? $data['label'] : new \stdClass();
        $this->container['id'] = array_key_exists('id', $data) ? $data['id'] : new \stdClass();
        $this->container['option_id'] = array_key_exists('option_id', $data) ? $data['option_id'] : new \stdClass();
    }

    /**
     * returns container
     * @return array
     */
    public function get()
    {
        return $this->container;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if (strlen($this->container['option_display_name']) > 255) {
            $invalid_properties[] = "invalid value for 'option_display_name', the character length must be smaller than or equal to 255.";
        }
        if (strlen($this->container['option_display_name']) < 1) {
            $invalid_properties[] = "invalid value for 'option_display_name', the character length must be bigger than or equal to 1.";
        }
        if (strlen($this->container['label']) > 255) {
            $invalid_properties[] = "invalid value for 'label', the character length must be smaller than or equal to 255.";
        }
        if (strlen($this->container['label']) < 1) {
            $invalid_properties[] = "invalid value for 'label', the character length must be bigger than or equal to 1.";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if (strlen($this->container['option_display_name']) > 255) {
            return false;
        }
        if (strlen($this->container['option_display_name']) < 1) {
            return false;
        }
        if (strlen($this->container['label']) > 255) {
            return false;
        }
        if (strlen($this->container['label']) < 1) {
            return false;
        }
        return true;
    }


    /**
     * Gets option_display_name
     * @return string
     */
    public function getOptionDisplayName()
    {
        return $this->container['option_display_name'];
    }

    /**
     * Sets option_display_name
     * @param string $option_display_name The name of the option.
     * @return $this
     */
    public function setOptionDisplayName($option_display_name)
    {
        if (strlen($option_display_name) > 255) {
            throw new \InvalidArgumentException('invalid length for $option_display_name when calling OptionValueVariant., must be smaller than or equal to 255.');
        }
        if (strlen($option_display_name) < 1) {
            throw new \InvalidArgumentException('invalid length for $option_display_name when calling OptionValueVariant., must be bigger than or equal to 1.');
        }
        $this->container['option_display_name'] = $option_display_name;

        return $this;
    }

    /**
     * Gets label
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     * @param string $label The label of the option value.
     * @return $this
     */
    public function setLabel($label)
    {
        if (strlen($label) > 255) {
            throw new \InvalidArgumentException('invalid length for $label when calling OptionValueVariant., must be smaller than or equal to 255.');
        }
        if (strlen($label) < 1) {
            throw new \InvalidArgumentException('invalid length for $label when calling OptionValueVariant., must be bigger than or equal to 1.');
        }
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets option_id
     * @return int
     */
    public function getOptionId()
    {
        return $this->container['option_id'];
    }

    /**
     * Sets option_id
     * @param int $option_id
     * @return $this
     */
    public function setOptionId($option_id)
    {
        $this->container['option_id'] = $option_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\BigCommerce\Api\v3\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BigCommerce\Api\v3\ObjectSerializer::sanitizeForSerialization($this));
    }
}


