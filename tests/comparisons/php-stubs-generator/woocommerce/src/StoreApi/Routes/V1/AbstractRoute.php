<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * AbstractRoute class.
 */
abstract class AbstractRoute implements \Automattic\WooCommerce\StoreApi\Routes\RouteInterface
{
    /**
     * Schema class instance.
     *
     * @var AbstractSchema
     */
    protected $schema;
    /**
     * Route namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/store/v1';
    /**
     * Schema Controller instance.
     *
     * @var SchemaController
     */
    protected $schema_controller;
    /**
     * The routes schema.
     *
     * @var string
     */
    const SCHEMA_TYPE = '';
    /**
     * The routes schema version.
     *
     * @var integer
     */
    const SCHEMA_VERSION = 1;
    /**
     * Constructor.
     *
     * @param SchemaController $schema_controller Schema Controller instance.
     * @param AbstractSchema   $schema Schema class for this route.
     */
    public function __construct(\Automattic\WooCommerce\StoreApi\SchemaController $schema_controller, \Automattic\WooCommerce\StoreApi\Schemas\v1\AbstractSchema $schema)
    {
    }
    /**
     * Get the namespace for this route.
     *
     * @return string
     */
    public function get_namespace()
    {
    }
    /**
     * Set the namespace for this route.
     *
     * @param string $namespace Given namespace.
     */
    public function set_namespace($namespace)
    {
    }
    /**
     * Get item schema properties.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
    /**
     * Get the route response based on the type of request.
     *
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    public function get_response(\WP_REST_Request $request)
    {
    }
    /**
     * Get the route response based on the type of request.
     *
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_response_by_request_method(\WP_REST_Request $request)
    {
    }
    /**
     * Converts an error to a response object. Based on \WP_REST_Server.
     *
     * @param \WP_Error $error WP_Error instance.
     * @return \WP_REST_Response List of associative arrays with code and message keys.
     */
    protected function error_to_response($error)
    {
    }
    /**
     * Get route response for GET requests.
     *
     * When implemented, should return a \WP_REST_Response.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_response(\WP_REST_Request $request)
    {
    }
    /**
     * Get route response for POST requests.
     *
     * When implemented, should return a \WP_REST_Response.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_post_response(\WP_REST_Request $request)
    {
    }
    /**
     * Get route response for PUT requests.
     *
     * When implemented, should return a \WP_REST_Response.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_update_response(\WP_REST_Request $request)
    {
    }
    /**
     * Get route response for DELETE requests.
     *
     * When implemented, should return a \WP_REST_Response.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_delete_response(\WP_REST_Request $request)
    {
    }
    /**
     * Get route response when something went wrong.
     *
     * @param string $error_code String based error code.
     * @param string $error_message User facing error message.
     * @param int    $http_status_code HTTP status. Defaults to 500.
     * @param array  $additional_data  Extra data (key value pairs) to expose in the error response.
     * @return \WP_Error WP Error object.
     */
    protected function get_route_error_response($error_code, $error_message, $http_status_code = 500, $additional_data = [])
    {
    }
    /**
     * Get route response when something went wrong and the supplied error is a WP_Error. This currently only happens
     * when an item in the cart is out of stock, partially out of stock, can only be bought individually, or when the
     * item is not purchasable.
     *
     * @param WP_Error $error_object The WP_Error object containing the error.
     * @param int      $http_status_code HTTP status. Defaults to 500.
     * @param array    $additional_data  Extra data (key value pairs) to expose in the error response.
     * @return WP_Error WP Error object.
     */
    protected function get_route_error_response_from_object($error_object, $http_status_code = 500, $additional_data = [])
    {
    }
    /**
     * Prepare a single item for response.
     *
     * @param mixed            $item Item to format to schema.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($item, \WP_REST_Request $request)
    {
    }
    /**
     * Retrieves the context param.
     *
     * Ensures consistent descriptions between endpoints, and populates enum from schema.
     *
     * @param array $args Optional. Additional arguments for context parameter. Default empty array.
     * @return array Context parameter details.
     */
    protected function get_context_param($args = array())
    {
    }
    /**
     * Prepares a response for insertion into a collection.
     *
     * @param \WP_REST_Response $response Response object.
     * @return array|mixed Response data, ready for insertion into collection data.
     */
    protected function prepare_response_for_collection(\WP_REST_Response $response)
    {
    }
    /**
     * Prepare links for the request.
     *
     * @param mixed            $item Item to prepare.
     * @param \WP_REST_Request $request Request object.
     * @return array
     */
    protected function prepare_links($item, $request)
    {
    }
    /**
     * Retrieves the query params for the collections.
     *
     * @return array Query parameters for the collection.
     */
    public function get_collection_params()
    {
    }
}