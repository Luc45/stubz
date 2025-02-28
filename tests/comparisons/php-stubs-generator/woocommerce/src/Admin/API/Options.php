<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Options Controller.
 *
 * @deprecated since 6.2.0
 *
 * @extends WC_REST_Data_Controller
 */
class Options extends \WC_REST_Data_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-admin';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'options';
    /**
     * Register routes.
     */
    public function register_routes()
    {
    }
    /**
     * Check if a given request has access to get options.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Check if the user has permission given an option name.
     *
     * @param  string          $option Option name.
     * @param  WP_REST_Request $request Full details about the request.
     * @param  bool            $is_update If the request is to update the option.
     * @return boolean
     */
    public function user_has_permission($option, $request, $is_update = false)
    {
    }
    /**
     * Check if a given request has access to update options.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function update_item_permissions_check($request)
    {
    }
    /**
     * Get an array of options and respective permissions for the current user.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return array
     */
    public function get_option_permissions($request)
    {
    }
    /**
     * Get the default available option permissions.
     *
     * @return array
     */
    public static function get_default_option_permissions()
    {
    }
    /**
     * Gets an array of options and respective values.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return array Options object with option values.
     */
    public function get_options($request)
    {
    }
    /**
     * Updates an array of objects.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return array Options object with a boolean if the option was updated.
     */
    public function update_options($request)
    {
    }
    /**
     * Get the schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
}
