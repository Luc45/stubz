<?php

namespace Automattic\WooCommerce\StoreApi;

/**
 * SessionHandler class
 */
final class SessionHandler extends \WC_Session
{
    /**
     * Constructor for the session class.
     */
    public function __construct()
    {
    }
    /**
     * Init hooks and session data.
     */
    public function init()
    {
    }
    /**
     * Returns the session.
     *
     * @param string $customer_id Customer ID.
     * @param mixed  $default Default session value.
     *
     * @return string|array|bool
     */
    public function get_session($customer_id, $default = false)
    {
    }
    /**
     * Save data and delete user session.
     */
    public function save_data()
    {
    }
}