<?php

namespace ;

/**
 * WC_Session
 */
abstract class WC_Session
{
    /**
     * Customer ID.
     *
     * @var int $_customer_id Customer ID.
     */
    protected $_customer_id = null;

    /**
     * Session Data.
     *
     * @var array $_data Data array.
     */
    protected $_data = array (
);

    /**
     * Dirty when the session needs saving.
     *
     * @var bool $_dirty When something changes
     */
    protected $_dirty = false;

    /**
     * Init hooks and session data. Extended by child classes.
     *
     * @since 3.3.0
     */
    public function init()
    {
        // stub
    }

    /**
     * Cleanup session data. Extended by child classes.
     */
    public function cleanup_sessions()
    {
        // stub
    }

    /**
     * Magic get method.
     *
     * @param mixed $key Key to get.
     * @return mixed
     */
    public function __get($key)
    {
        // stub
    }

    /**
     * Magic set method.
     *
     * @param mixed $key Key to set.
     * @param mixed $value Value to set.
     */
    public function __set($key, $value)
    {
        // stub
    }

    /**
     * Magic isset method.
     *
     * @param mixed $key Key to check.
     * @return bool
     */
    public function __isset($key)
    {
        // stub
    }

    /**
     * Magic unset method.
     *
     * @param mixed $key Key to unset.
     */
    public function __unset($key)
    {
        // stub
    }

    /**
     * Get a session variable.
     *
     * @param string $key Key to get.
     * @param mixed  $default used if the session variable isn't set.
     * @return array|string value of session variable
     */
    public function get($key, $default = null)
    {
        // stub
    }

    /**
     * Set a session variable.
     *
     * @param string $key Key to set.
     * @param mixed  $value Value to set.
     */
    public function set($key, $value)
    {
        // stub
    }

    /**
     * Get customer ID.
     *
     * @return int
     */
    public function get_customer_id()
    {
        // stub
    }

}

