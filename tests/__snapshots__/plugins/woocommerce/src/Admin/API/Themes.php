<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Themes controller.
 *
 * @internal
 * @extends WC_REST_Data_Controller
 */
class Themes extends \WC_REST_Data_Controller
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
    protected $rest_base = 'themes';

    /**
     * Register routes.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Check whether a given request has permission to edit upload plugins/themes.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function upload_theme_permissions_check($request)
    {
        // stub
    }

    /**
     * Upload and install a theme.
     *
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function upload_theme($request)
    {
        // stub
    }

    /**
     * Prepare the data object for response.
     *
     * @param object          $item Data object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($item, $request)
    {
        // stub
    }

    /**
     * Get the schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
        // stub
    }

    /**
     * Get the query params for collections.
     *
     * @return array
     */
    public function get_collection_params()
    {
        // stub
    }

}

