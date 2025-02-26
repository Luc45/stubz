<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Leaderboards controller.
 *
 * @internal
 * @extends WC_REST_Data_Controller
 */
class Leaderboards extends \WC_REST_Data_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-analytics';

    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'leaderboards';

    /**
     * Register routes.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Get the data for the coupons leaderboard.
     *
     * @param int    $per_page Number of rows.
     * @param string $after Items after date.
     * @param string $before Items before date.
     * @param string $persisted_query URL query string.
     */
    protected function get_coupons_leaderboard($per_page, $after, $before, $persisted_query)
    {
        // stub
    }

    /**
     * Get the data for the categories leaderboard.
     *
     * @param int    $per_page Number of rows.
     * @param string $after Items after date.
     * @param string $before Items before date.
     * @param string $persisted_query URL query string.
     */
    protected function get_categories_leaderboard($per_page, $after, $before, $persisted_query)
    {
        // stub
    }

    /**
     * Get the data for the customers leaderboard.
     *
     * @param int    $per_page Number of rows.
     * @param string $after Items after date.
     * @param string $before Items before date.
     * @param string $persisted_query URL query string.
     */
    protected function get_customers_leaderboard($per_page, $after, $before, $persisted_query)
    {
        // stub
    }

    /**
     * Get the data for the products leaderboard.
     *
     * @param int    $per_page Number of rows.
     * @param string $after Items after date.
     * @param string $before Items before date.
     * @param string $persisted_query URL query string.
     */
    protected function get_products_leaderboard($per_page, $after, $before, $persisted_query)
    {
        // stub
    }

    /**
     * Get an array of all leaderboards.
     *
     * @param int    $per_page Number of rows.
     * @param string $after Items after date.
     * @param string $before Items before date.
     * @param string $persisted_query URL query string.
     * @return array
     */
    public function get_leaderboards($per_page, $after, $before, $persisted_query)
    {
        // stub
    }

    /**
     * Return all leaderboards.
     *
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function get_items($request)
    {
        // stub
    }

    /**
     * Returns a list of allowed leaderboards.
     *
     * @param  WP_REST_Request $request Request data.
     * @return array|WP_Error
     */
    public function get_allowed_items($request)
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
     * Get the query params for collections.
     *
     * @return array
     */
    public function get_collection_params()
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
     * Get schema for the list of allowed leaderboards.
     *
     * @return array $schema
     */
    public function get_public_allowed_item_schema()
    {
        // stub
    }

}

