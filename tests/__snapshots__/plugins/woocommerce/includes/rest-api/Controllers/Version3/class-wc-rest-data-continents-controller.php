<?php

namespace ;

/**
 * REST API Data continents controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Controller
 */
class WC_REST_Data_Continents_Controller
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
    protected $rest_base = 'data/continents';

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
     * Return the list of countries and states for a given continent.
     *
     * @since  3.5.0
     * @param  string          $continent_code Continent code.
     * @param  WP_REST_Request $request        Request data.
     * @return array|mixed Response data, ready for insertion into collection data.
     */
    public function get_continent($continent_code, $request)
    {
        // stub
    }

    /**
     * Return the list of states for all continents.
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
     * Return the list of locations for a given continent.
     *
     * @since  3.5.0
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function get_item($request)
    {
        // stub
    }

    /**
     * Prepare the data object for response.
     *
     * @since  3.5.0
     * @param object          $item Data object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($item, $request)
    {
        // stub
    }

    /**
     * Prepare links for the request.
     *
     * @param object $item Data object.
     * @return array Links for the given continent.
     */
    protected function prepare_links($item)
    {
        // stub
    }

    /**
     * Get the location schema, conforming to JSON Schema.
     *
     * @since  3.5.0
     * @return array
     */
    public function get_item_schema()
    {
        // stub
    }

}

