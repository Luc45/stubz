<?php

namespace ;

/**
 * Abstract WP_Async_Request class.
 */
abstract class WP_Async_Request extends \
{
    /**
     * Prefix
     *
     * (default value: 'wp')
     *
     * @var string
     * @access protected
     */
    protected $prefix = 'wp';

    /**
     * Action
     *
     * (default value: 'async_request')
     *
     * @var string
     * @access protected
     */
    protected $action = 'async_request';

    /**
     * Identifier
     *
     * @var mixed
     * @access protected
     */
    protected $identifier = null;

    /**
     * Data
     *
     * (default value: array())
     *
     * @var array
     * @access protected
     */
    protected $data = array(
);

    /**
     * Initiate new async request
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Set data used during the request
     *
     * @param array $data Data.
     *
     * @return $this
     */
    public function data($data)
    {
        // stub
    }

    /**
     * Dispatch the async request
     *
     * @return array|WP_Error
     */
    public function dispatch()
    {
        // stub
    }

    /**
     * Get query args
     *
     * @return array
     */
    protected function get_query_args()
    {
        // stub
    }

    /**
     * Get query URL
     *
     * @return string
     */
    protected function get_query_url()
    {
        // stub
    }

    /**
     * Get post args
     *
     * @return array
     */
    protected function get_post_args()
    {
        // stub
    }

    /**
     * Maybe handle
     *
     * Check for correct nonce and pass to handler.
     */
    public function maybe_handle()
    {
        // stub
    }

    /**
     * Handle
     *
     * Override this method to perform any actions required
     * during the async request.
     */
    protected abstract function handle();

}

