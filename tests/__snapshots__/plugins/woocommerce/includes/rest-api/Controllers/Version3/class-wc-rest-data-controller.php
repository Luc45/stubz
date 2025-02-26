<?php

namespace ;

/**
 * REST API Data controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Controller
 */
class WC_REST_Data_Controller extends \WC_REST_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';

    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'data';

    /**
     * Register routes.
     *
     * @since 3.5.0
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Check whether a given request has permission to read site data.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
    {
        // stub
    }

    /**
     * Check whether a given request has permission to read site settings.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_item_permissions_check($request)
    {
        // stub
    }

    /**
     * Return the list of data resources.
     *
     * @since  3.5.0
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function get_items($request)
    {
        // stub
    }

    /**
     * Prepare a data resource object for serialization.
     *
     * @param stdClass        $resource Resource data.
     * @param WP_REST_Request $request  Request object.
     * @return WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($resource, $request)
    {
        // stub
    }

    /**
     * Prepare links for the request.
     *
     * @param object $item Data object.
     * @return array Links for the given country.
     */
    protected function prepare_links($item)
    {
        // stub
    }

    /**
     * Get the data index schema, conforming to JSON Schema.
     *
     * @since  3.5.0
     * @return array
     */
    public function get_item_schema()
    {
        // stub
    }

}

