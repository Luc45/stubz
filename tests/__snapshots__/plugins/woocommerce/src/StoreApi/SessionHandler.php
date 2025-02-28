<?php

namespace Automattic\WooCommerce\StoreApi;

/**
 * SessionHandler class
 */
final class SessionHandler extends \WC_Session
{
    /**
     * Token from HTTP headers.
     *
     * @var string
     */
    protected $token = null;

    /**
     * Table name for session data.
     *
     * @var string Custom session table name
     */
    protected $table = null;

    /**
     * Expiration timestamp.
     *
     * @var int
     */
    protected $session_expiration = null;

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
     * Process the token header to load the correct session.
     */
    protected function init_session_from_token()
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