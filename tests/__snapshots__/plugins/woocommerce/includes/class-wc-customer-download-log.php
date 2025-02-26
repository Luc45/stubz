<?php

namespace ;

/**
 * Customer download log class.
 */
class WC_Customer_Download_Log extends \WC_Data
{
    /**
     * This is the name of this object type.
     *
     * @var string
     */
    protected $object_type = 'customer_download_log';

    /**
     * Download Log Data array.
     *
     * @var array
     */
    protected $data = array(
  'timestamp' => null,
  'permission_id' => 0,
  'user_id' => null,
  'user_ip_address' => null,
);

    /**
     * Constructor.
     *
     * @param int|object|array $download_log Download log ID.
     */
    public function __construct($download_log = 0)
    {
        // stub
    }

    /**
     * Get timestamp.
     *
     * @param  string $context Get context.
     * @return WC_DateTime|null Object if the date is set or null if there is no date.
     */
    public function get_timestamp($context = 'view')
    {
        // stub
    }

    /**
     * Get permission id.
     *
     * @param  string $context Get context.
     * @return integer
     */
    public function get_permission_id($context = 'view')
    {
        // stub
    }

    /**
     * Get user id.
     *
     * @param  string $context Get context.
     * @return integer
     */
    public function get_user_id($context = 'view')
    {
        // stub
    }

    /**
     * Get user ip address.
     *
     * @param  string $context Get context.
     * @return string
     */
    public function get_user_ip_address($context = 'view')
    {
        // stub
    }

    /**
     * Set timestamp.
     *
     * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if their is no date.
     */
    public function set_timestamp($date = null)
    {
        // stub
    }

    /**
     * Set permission id.
     *
     * @param int $value Value to set.
     */
    public function set_permission_id($value)
    {
        // stub
    }

    /**
     * Set user id.
     *
     * @param int $value Value to set.
     */
    public function set_user_id($value)
    {
        // stub
    }

    /**
     * Set user ip address.
     *
     * @param string $value Value to set.
     */
    public function set_user_ip_address($value)
    {
        // stub
    }

}

