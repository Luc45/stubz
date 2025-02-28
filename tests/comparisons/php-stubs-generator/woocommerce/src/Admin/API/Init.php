<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Init class.
 *
 * @internal
 */
#[\AllowDynamicProperties]
class Init
{
    /**
     * The single instance of the class.
     *
     * @var object
     */
    protected static $instance = null;
    /**
     * Get class instance.
     *
     * @return object Instance.
     */
    public static final function instance()
    {
    }
    /**
     * Bootstrap REST API.
     */
    public function __construct()
    {
    }
    /**
     * Init REST API.
     */
    public function rest_api_init()
    {
    }
    /**
     * Adds data stores.
     *
     * @internal
     * @param array $data_stores List of data stores.
     * @return array
     */
    public static function add_data_stores($data_stores)
    {
    }
    /**
     * Add the currency symbol (in addition to currency code) to each Order
     * object in REST API responses. For use in formatAmount().
     *
     * @internal
     * @param WP_REST_Response $response REST response object.
     * @returns WP_REST_Response
     */
    public static function add_currency_symbol_to_order_response($response)
    {
    }
}