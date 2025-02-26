<?php

namespace Automattic\WooCommerce\RestApi;

/**
 * Class responsible for loading the REST API and all REST API namespaces.
 */
class Server extends \
{
    /**
     * REST API namespaces and endpoints.
     *
     * @var array
     */
    protected $controllers = array(
);

    /**
     * Hook into WordPress ready to init the REST API as needed.
     */
    public function init()
    {
        // stub
    }

    /**
     * Register REST API routes.
     */
    public function register_rest_routes()
    {
        // stub
    }

    /**
     * Get API namespaces - new namespaces should be registered here.
     *
     * @return array List of Namespaces and Main controller classes.
     */
    protected function get_rest_namespaces()
    {
        // stub
    }

    /**
     * List of controllers in the wc/v1 namespace.
     *
     * @return array
     */
    protected function get_v1_controllers()
    {
        // stub
    }

    /**
     * List of controllers in the wc/v2 namespace.
     *
     * @return array
     */
    protected function get_v2_controllers()
    {
        // stub
    }

    /**
     * List of controllers in the wc/v3 namespace.
     *
     * @return array
     */
    protected function get_v3_controllers()
    {
        // stub
    }

    /**
     * List of controllers in the telemetry namespace.
     *
     * @return array
     */
    protected function get_telemetry_controllers()
    {
        // stub
    }

    /**
     * Return the path to the package.
     *
     * @return string
     */
    public static function get_path()
    {
        // stub
    }

}

