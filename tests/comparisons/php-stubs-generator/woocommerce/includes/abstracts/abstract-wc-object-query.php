<?php

/**
 * Abstract WC Object Query Class
 *
 * Extended by classes to provide a query abstraction layer for safe object searching.
 *
 * @version  3.1.0
 * @package  WooCommerce\Abstracts
 */
abstract class WC_Object_Query
{
    /**
     * Stores query data.
     *
     * @var array
     */
    protected $query_vars = array();
    /**
     * Create a new query.
     *
     * @param array $args Criteria to query on in a format similar to WP_Query.
     */
    public function __construct($args = array())
    {
    }
    /**
     * Get the current query vars.
     *
     * @return array
     */
    public function get_query_vars()
    {
    }
    /**
     * Get the value of a query variable.
     *
     * @param string $query_var Query variable to get value for.
     * @param mixed  $default Default value if query variable is not set.
     * @return mixed Query variable value if set, otherwise default.
     */
    public function get($query_var, $default = '')
    {
    }
    /**
     * Set a query variable.
     *
     * @param string $query_var Query variable to set.
     * @param mixed  $value Value to set for query variable.
     */
    public function set($query_var, $value)
    {
    }
    /**
     * Get the default allowed query vars.
     *
     * @return array
     */
    protected function get_default_query_vars()
    {
    }
}
