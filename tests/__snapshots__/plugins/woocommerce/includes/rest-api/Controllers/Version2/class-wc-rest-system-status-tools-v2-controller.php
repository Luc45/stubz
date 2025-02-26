<?php

namespace ;

/**
 * System status tools controller.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Controller
 */
class WC_REST_System_Status_Tools_V2_Controller extends \WC_REST_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v2';

    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'system_status/tools';

    /**
     * Register the routes for /system_status/tools/*.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Check whether a given request has permission to view system status tools.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
    {
        // stub
    }

    /**
     * Check whether a given request has permission to view a specific system status tool.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_item_permissions_check($request)
    {
        // stub
    }

    /**
     * Check whether a given request has permission to execute a specific system status tool.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function update_item_permissions_check($request)
    {
        // stub
    }

    /**
     * A list of available tools for use in the system status section.
     * 'button' becomes 'action' in the API.
     *
     * @return array
     */
    public function get_tools()
    {
        // stub
    }

    /**
     * Get a list of system status tools.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function get_items($request)
    {
        // stub
    }

    /**
     * Return a single tool.
     *
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function get_item($request)
    {
        // stub
    }

    /**
     * Update (execute) a tool.
     *
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function update_item($request)
    {
        // stub
    }

    /**
     * Prepare a tool item for serialization.
     *
     * @param  array           $item     Object.
     * @param  WP_REST_Request $request  Request object.
     * @return WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($item, $request)
    {
        // stub
    }

    /**
     * Get the system status tools schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
        // stub
    }

    /**
     * Prepare links for the request.
     *
     * @param string $id ID.
     * @return array
     */
    protected function prepare_links($id)
    {
        // stub
    }

    /**
     * Get any query params needed.
     *
     * @return array
     */
    public function get_collection_params()
    {
        // stub
    }

    /**
     * Actually executes a tool.
     *
     * @param  string $tool Tool.
     * @return array
     */
    public function execute_tool($tool)
    {
        // stub
    }

    /**
     * Get a printable name for a callback.
     *
     * @param mixed  $callback The callback to get a name for.
     * @param string $default The default name, to be returned when the callback is an inline function.
     * @return string A printable name for the callback.
     */
    private function get_printable_callback_name($callback, $default)
    {
        // stub
    }

}

