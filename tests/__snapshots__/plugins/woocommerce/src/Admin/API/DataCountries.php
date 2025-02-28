<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * REST API Data countries controller class.
 *
 * @internal
 * @extends WC_REST_Data_Countries_Controller
 */
class DataCountries extends \WC_REST_Data_Countries_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-analytics';
    /**
     * Register routes.
     *
     * @since 3.5.0
     */
    public function register_routes()
{
}
    /**
     * Get country fields.
     *
     * @return array
     */
    public function get_locales()
{
}
}