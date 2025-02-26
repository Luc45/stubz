<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * ProductsLowInStock controller.
 *
 * @internal
 * @extends WC_REST_Products_Controller
 */
final class ProductsLowInStock
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-analytics';

    /**
     * Register routes.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Return # of low in stock count.
     *
     * @param WP_REST_Request $request request object.
     *
     * @return \WP_Error|\WP_HTTP_Response|\WP_REST_Response
     */
    public function get_low_in_stock_count($request)
    {
        // stub
    }

    /**
     * Get low in stock products.
     *
     * @param WP_REST_Request $request request object.
     *
     * @return WP_REST_Response|WP_ERROR
     */
    public function get_items($request)
    {
        // stub
    }

    /**
     * Set the last order date for each data.
     *
     * @param array $results query result from get_low_in_stock_products.
     *
     * @return mixed
     */
    protected function set_last_order_date($results = array (
))
    {
        // stub
    }

    /**
     * Get low in stock products data.
     *
     * @param int    $page current page.
     * @param int    $per_page items per page.
     * @param string $status post status.
     *
     * @return array
     */
    protected function get_low_in_stock_products($page = 1, $per_page = 1, $status)
    {
        // stub
    }

    /**
     * Check to see if store is using sitewide threshold only. Meaning that it does not have any custom
     * stock threshold for a product.
     *
     * @return bool
     */
    protected function is_using_sitewide_stock_threshold_only()
    {
        // stub
    }

    /**
     * Transform post object to expected API response.
     *
     * @param object $query_result a row of query result from get_low_in_stock_products().
     *
     * @return array
     */
    protected function transform_post_to_api_response($query_result)
    {
        // stub
    }

    /**
     * Return a query string for low in stock products.
     * The query string includes the following replacement strings:
     * - :selects
     * - :postmeta_join
     * - :postmeta_wheres
     * - :orderAndLimit
     *
     * @param array $replacements  of replacement strings.
     *
     * @return string
     */
    private function get_base_query($replacements = array (
))
    {
        // stub
    }

    /**
     * Add sitewide stock query string to base query string.
     *
     * @param string $query Base query string.
     *
     * @return string
     */
    private function add_sitewide_stock_query_str($query)
    {
        // stub
    }

    /**
     * Generate a query.
     *
     * @param bool $sitewide_only generates a query for sitewide low stock threshold only query.
     *
     * @return string
     */
    protected function get_query($sitewide_only = false)
    {
        // stub
    }

    /**
     * Generate a count query.
     *
     * @param bool $sitewide_only generates a query for sitewide low stock threshold only query.
     *
     * @return string
     */
    protected function get_count_query($sitewide_only = false)
    {
        // stub
    }

    /**
     * Get the query params for collections of attachments.
     *
     * @return array
     */
    public function get_collection_params()
    {
        // stub
    }

    /**
     * Get the query params for collections for /count-low-in-stock endpoint.
     *
     * @return array
     */
    public function get_low_in_stock_count_params()
    {
        // stub
    }

    /**
     * Get the schema for /count-low-in-stock response.
     *
     * @return array
     */
    public function get_low_in_stock_count_schema()
    {
        // stub
    }

}

