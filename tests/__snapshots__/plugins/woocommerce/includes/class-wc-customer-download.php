<?php

namespace ;

/**
 * Customer download class.
 */
class WC_Customer_Download
{
    /**
     * This is the name of this object type.
     *
     * @var string
     */
    protected $object_type = 'customer_download';

    /**
     * Download Data array.
     *
     * @since 3.0.0
     * @var array
     */
    protected $data = array (
  'download_id' => '',
  'product_id' => 0,
  'user_id' => 0,
  'user_email' => '',
  'order_id' => 0,
  'order_key' => '',
  'downloads_remaining' => '',
  'access_granted' => null,
  'access_expires' => null,
  'download_count' => 0,
);

    /**
     * Constructor.
     *
     * @param int|object|array $download Download ID, instance or data.
     */
    public function __construct($download = 0)
    {
        // stub
    }

    /**
     * Get download id.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_download_id($context = 'view')
    {
        // stub
    }

    /**
     * Get product id.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return integer
     */
    public function get_product_id($context = 'view')
    {
        // stub
    }

    /**
     * Get user id.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return integer
     */
    public function get_user_id($context = 'view')
    {
        // stub
    }

    /**
     * Get user_email.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_user_email($context = 'view')
    {
        // stub
    }

    /**
     * Get order_id.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return integer
     */
    public function get_order_id($context = 'view')
    {
        // stub
    }

    /**
     * Get order_key.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_order_key($context = 'view')
    {
        // stub
    }

    /**
     * Get downloads_remaining.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return integer|string
     */
    public function get_downloads_remaining($context = 'view')
    {
        // stub
    }

    /**
     * Get access_granted.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return WC_DateTime|null Object if the date is set or null if there is no date.
     */
    public function get_access_granted($context = 'view')
    {
        // stub
    }

    /**
     * Get access_expires.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return WC_DateTime|null Object if the date is set or null if there is no date.
     */
    public function get_access_expires($context = 'view')
    {
        // stub
    }

    /**
     * Get download_count.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return integer
     */
    public function get_download_count($context = 'view')
    {
        // stub
    }

    /**
     * Set download id.
     *
     * @param string $value Download ID.
     */
    public function set_download_id($value)
    {
        // stub
    }

    /**
     * Set product id.
     *
     * @param int $value Product ID.
     */
    public function set_product_id($value)
    {
        // stub
    }

    /**
     * Set user id.
     *
     * @param int $value User ID.
     */
    public function set_user_id($value)
    {
        // stub
    }

    /**
     * Set user_email.
     *
     * @param int $value User email.
     */
    public function set_user_email($value)
    {
        // stub
    }

    /**
     * Set order_id.
     *
     * @param int $value Order ID.
     */
    public function set_order_id($value)
    {
        // stub
    }

    /**
     * Set order_key.
     *
     * @param string $value Order key.
     */
    public function set_order_key($value)
    {
        // stub
    }

    /**
     * Set downloads_remaining.
     *
     * @param integer|string $value Amount of downloads remaining.
     */
    public function set_downloads_remaining($value)
    {
        // stub
    }

    /**
     * Set access_granted.
     *
     * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if their is no date.
     */
    public function set_access_granted($date = null)
    {
        // stub
    }

    /**
     * Set access_expires.
     *
     * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if their is no date.
     */
    public function set_access_expires($date = null)
    {
        // stub
    }

    /**
     * Set download_count.
     *
     * @param int $value Download count.
     */
    public function set_download_count($value)
    {
        // stub
    }

    /**
     * Track a download on this permission.
     *
     * @since 3.3.0
     * @throws Exception When permission ID is invalid.
     * @param int    $user_id         Id of the user performing the download.
     * @param string $user_ip_address IP Address of the user performing the download.
     */
    public function track_download($user_id = null, $user_ip_address = null)
    {
        // stub
    }

    /**
     * OffsetGet.
     *
     * @param mixed $offset Offset.
     * @return mixed
     */
    #[ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        // stub
    }

    /**
     * OffsetSet.
     *
     * @param mixed $offset Offset.
     * @param mixed $value  Value.
     */
    #[ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        // stub
    }

    /**
     * OffsetUnset
     *
     * @param mixed $offset Offset.
     */
    #[ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        // stub
    }

    /**
     * OffsetExists.
     *
     * @param mixed $offset Offset.
     * @return bool
     */
    #[ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        // stub
    }

    /**
     * Magic __isset method for backwards compatibility. Legacy properties which could be accessed directly in the past.
     *
     * @param  string $key Key name.
     * @return bool
     */
    public function __isset($key)
    {
        // stub
    }

    /**
     * Magic __get method for backwards compatibility. Maps legacy vars to new getters.
     *
     * @param  string $key Key name.
     * @return mixed
     */
    public function __get($key)
    {
        // stub
    }

}

