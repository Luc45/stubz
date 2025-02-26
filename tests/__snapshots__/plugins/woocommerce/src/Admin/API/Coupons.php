<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Coupons controller.
 *
 * @internal
 * @extends WC_REST_Coupons_Controller
 */
class Coupons extends \WC_REST_Coupons_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-analytics';

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
     * Add coupon code searching to the WC API.
     *
     * @param WP_REST_Request $request Request data.
     * @return array
     */
    protected function prepare_objects_query($request)
    {
        // stub
    }

    /**
     * Get a collection of posts and add the code search option to WP_Query.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function get_items($request)
    {
        // stub
    }

    /**
     * Add code searching to the WP Query
     *
     * @internal
     * @param string $where Where clause used to search posts.
     * @param object $wp_query WP_Query object.
     * @return string
     */
    public static function add_wp_query_search_code_filter($where, $wp_query)
    {
        // stub
    }

}

