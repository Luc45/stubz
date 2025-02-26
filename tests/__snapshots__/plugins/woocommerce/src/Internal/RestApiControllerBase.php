<?php

namespace Automattic\WooCommerce\Internal;

/**
 * Base class for REST API controllers defined inside the 'src' directory.
 *
 * Besides implementing the abstract methods, derived classes must be registered in the dependency injection
 * container with the 'share_with_implements_tags' method inside a service provider that inherits from
 * 'AbstractInterfaceServiceProvider'. This ensures that 'register_routes' is invoked.
 *
 * Also, the following must be added at the end of the 'init_hooks' method in the 'WooCommerce' class,
 * otherwise the routes won't be registered:
 * $container->get( <full class name>::class )->register();
 *
 * Minimal controller example:
 *
 * class FoobarsController extends RestApiControllerBase {
 *
 * protected function get_rest_api_namespace(): string {
 *   return 'foobars';
 * }
 *
 * public function register_routes() {
 *   register_rest_route(
 *     $this->route_namespace,
 *     '/foobars/(?P<id>[\d]+)',
 *     array(
 *       array(
 *         'methods'             => \WP_REST_Server::READABLE,
 *         'callback'            => fn( $request ) => $this->run( $request, 'get_foobar' ),
 *         'permission_callback' => fn( $request ) => $this->check_permission( $request, 'read_foobars', $request->get_param( 'id' ) ),
 *         'args'                => $this->get_args_for_get_foobar(),
 *         'schema'              => $this->get_schema_for_get_foobar(),
 *       ),
 *     )
 *   );
 * }
 *
 * protected function get_foobar( \WP_REST_Request $request ) {
 *     return array( 'message' => 'Get foobar with id ' . $request->get_param(' id' ) );
 * }
 *
 * private function get_args_for_get_foobar(): array {
 *   return array(
 *     'id' => array(
 *       'description' => __( 'Unique identifier of the foobar.', 'woocommerce' ),
 *       'type'        => 'integer',
 *       'context'     => array( 'view', 'edit' ),
 *       'readonly'    => true,
 *     ),
 *   );
 * }
 *
 * private function get_schema_for_get_foobar(): array {
 *   $schema               = $this->get_base_schema();
 *   $schema['properties'] = array(
 *     'message'     => array(
 *       'description' => __( 'A message.', 'woocommerce' ),
 *       'type'        => 'string',
 *       'context'     => array( 'view', 'edit' ),
 *       'readonly'    => true,
 *     ),
 *   );
 *   return $schema;
 * }
 *
 * }
 */
abstract class RestApiControllerBase extends \
{
    /**
     * The root namespace for the JSON REST API endpoints.
     *
     * @var string
     */
    protected string $route_namespace = 'wc/v3';

    /**
     * Register the hooks used by the class.
     */
    public function register()
    {
        // stub
    }

    /**
     * Handle the woocommerce_rest_api_get_rest_namespaces filter
     * to add ourselves to the list of REST API controllers registered by WooCommerce.
     *
     * @param array $namespaces The original list of WooCommerce REST API namespaces/controllers.
     * @return array The updated list of WooCommerce REST API namespaces/controllers.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function handle_woocommerce_rest_api_get_rest_namespaces(array $namespaces): array
    {
        // stub
    }

    /**
     * Get the WooCommerce REST API namespace for the class. It must be unique across all other derived classes
     * and the keys returned by the 'get_vX_controllers' methods in includes/rest-api/Server.php.
     * Note that this value is NOT related to the route namespace.
     *
     * @return string
     */
    protected abstract function get_rest_api_namespace(): string;

    /**
     * Register the REST API endpoints handled by this controller.
     *
     * Use 'register_rest_route' in the usual way, it's recommended to use the 'run' method for 'callback'
     * and the 'check_permission' method for 'permission_check', see the example in the class comment.
     */
    public abstract function register_routes();

    /**
     * Handle a request for one of the provided REST API endpoints.
     *
     * If an exception is thrown, the exception message will be returned as part of the response
     * if the user has the 'manage_woocommerce' capability.
     *
     * Note that the method specified in $method_name must have a 'protected' visibility and accept one argument of type 'WP_REST_Request'.
     *
     * @param WP_REST_Request $request The incoming HTTP REST request.
     * @param string          $method_name The name of the class method to execute. It must be protected and accept one argument of type 'WP_REST_Request'.
     * @return WP_Error|WP_HTTP_Response|WP_REST_Response The response to send back to the client.
     */
    protected function run(WP_REST_Request $request, string $method_name)
    {
        // stub
    }

    /**
     * Return an WP_Error object for an internal server error, with exception information if the current user is an admin.
     *
     * @param Exception $exception The exception to maybe include information from.
     * @return WP_Error
     */
    protected function internal_wp_error(Exception $exception): WP_Error
    {
        // stub
    }

    /**
     * Returns an authentication error message for a given HTTP verb.
     *
     * @param string $method HTTP method.
     * @return array|null Error information on success, null otherwise.
     */
    protected function get_authentication_error_by_method(string $method)
    {
        // stub
    }

    /**
     * Permission check for REST API endpoints, given the request method.
     *
     * @param WP_REST_Request $request The request for which the permission is checked.
     * @param string          $required_capability_name The name of the required capability.
     * @param mixed           ...$extra_args Extra arguments to be used for the permission check.
     * @return bool|WP_Error True if the current user has the capability, otherwise an "Unauthorized" error or False if no error is available for the request method.
     */
    protected function check_permission(WP_REST_Request $request, string $required_capability_name, ...$extra_args)
    {
        // stub
    }

    /**
     * Get the base schema for the REST API endpoints.
     *
     * @return array
     */
    protected function get_base_schema(): array
    {
        // stub
    }

}

