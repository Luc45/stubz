<?php

namespace Automattic\WooCommerce\StoreApi;

/**
 * RoutesController class.
 */
class RoutesController extends \
{
    /**
     * Stores schema_controller.
     *
     * @var SchemaController
     */
    protected $schema_controller = null;

    /**
     * Stores routes.
     *
     * @var array
     */
    protected $routes = array(
);

    /**
     * Namespace for the API.
     *
     * @var string
     */
    private static $api_namespace = 'wc/store';

    /**
     * Constructor.
     *
     * @param SchemaController $schema_controller Schema controller class passed to each route.
     */
    public function __construct(Automattic\WooCommerce\StoreApi\SchemaController $schema_controller)
    {
        // stub
    }

    /**
     * Register all Store API routes. This includes routes under specific version namespaces.
     */
    public function register_all_routes()
    {
        // stub
    }

    /**
     * Get a route class instance.
     *
     * Each route class is instantized with the SchemaController instance, and its main Schema Type.
     *
     * @throws \Exception If the schema does not exist.
     * @param string $name Name of schema.
     * @param string $version API Version being requested.
     * @return AbstractRoute
     */
    public function get($name, $version = 'v1')
    {
        // stub
    }

    /**
     * Get a route path without instantiating the corresponding RoutesController object.
     *
     * @throws \Exception If the schema does not exist.
     *
     * @param string $version API Version being requested.
     * @param string $controller Whether to return controller name. If false, returns empty array. Note:
     * When $controller param is true, the output should not be used directly in front-end code, to prevent class names from leaking. It's not a security issue necessarily, but it's not a good practice.
     * When $controller param is false, it currently returns and empty array. But it can be modified in future to return include more details about the route info that can be used in frontend.
     *
     * @return string[] List of route paths.
     */
    public function get_all_routes($version = 'v1', $controller = false)
    {
        // stub
    }

    /**
     * Register defined list of routes with WordPress.
     *
     * @param string $version API Version being registered..
     * @param string $namespace Overrides the default route namespace.
     */
    protected function register_routes($version = 'v1', $namespace = 'wc/store/v1')
    {
        // stub
    }

}

