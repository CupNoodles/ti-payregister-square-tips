<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * SearchLoyaltyRewardsRequestLoyaltyRewardQuery Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 * Note: This endpoint is in beta.
 */
class SearchLoyaltyRewardsRequestLoyaltyRewardQuery implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'loyalty_account_id' => 'string',
        'status' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'loyalty_account_id' => 'loyalty_account_id',
        'status' => 'status'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'loyalty_account_id' => 'setLoyaltyAccountId',
        'status' => 'setStatus'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'loyalty_account_id' => 'getLoyaltyAccountId',
        'status' => 'getStatus'
    );
  
    /**
      * $loyalty_account_id The ID of the `loyalty account` to which the loyalty reward belongs.
      * @var string
      */
    protected $loyalty_account_id;
    /**
      * $status The status of the loyalty reward. See [LoyaltyRewardStatus](#type-loyaltyrewardstatus) for possible values
      * @var string
      */
    protected $status;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["loyalty_account_id"])) {
              $this->loyalty_account_id = $data["loyalty_account_id"];
            } else {
              $this->loyalty_account_id = null;
            }
            if (isset($data["status"])) {
              $this->status = $data["status"];
            } else {
              $this->status = null;
            }
        }
    }
    /**
     * Gets loyalty_account_id
     * @return string
     */
    public function getLoyaltyAccountId()
    {
        return $this->loyalty_account_id;
    }
  
    /**
     * Sets loyalty_account_id
     * @param string $loyalty_account_id The ID of the `loyalty account` to which the loyalty reward belongs.
     * @return $this
     */
    public function setLoyaltyAccountId($loyalty_account_id)
    {
        $this->loyalty_account_id = $loyalty_account_id;
        return $this;
    }
    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param string $status The status of the loyalty reward. See [LoyaltyRewardStatus](#type-loyaltyrewardstatus) for possible values
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}