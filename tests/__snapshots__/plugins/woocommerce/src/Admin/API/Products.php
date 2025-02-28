<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Products controller.
 *
 * @internal
 * @extends WC_REST_Products_Controller
 */
class Products extends \WC_REST_Products_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-analytics';

    /**
     * Local cache of last order dates by ID.
     *
     * @var array
     */
    protected $last_order_dates = array();

    /**
     * Adds properties that can be embed via ?_embed=1.
     *
     * @return array
     */
    public function get_item_schema()
{
}
    /**
     * Get the query params for collections.
     *
     * @return array
     */
    public function get_collection_params()
{
}
    /**
     * Add product name and sku filtering to the WC API.
     *
     * @param WP_REST_Request $request Request data.
     * @return array
     */
    protected function prepare_objects_query($request)
{
}
    /**
     * Get a collection of posts and add the post title filter option to WP_Query.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function get_items($request)
{
}
    /**
     * Check whether the request is for products low in stock.
     *
     * It matches requests with parameters:
     *
     * low_in_stock = true
     * page = 1
     * fields[0] = id
     *
     * @param string $request WP REST API request.
     * @return boolean Whether the request matches.
     */
    private function is_low_in_stock_request($request)
{
}
    /**
     * Hang onto last order date since it will get removed by wc_get_product().
     *
     * @param stdClass $object_data Single row from query results.
     * @return WC_Data
     */
    public function get_object($object_data)
{
}
    /**
     * Add `low_stock_amount` property to product data
     *
     * @param WC_Data         $object  Object data.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    public function prepare_object_for_response($object, $request)
{
}
    /**
     * Add in conditional select fields to the query.
     *
     * @internal
     * @param string $select Select clause used to select fields from the query.
     * @param object $wp_query WP_Query object.
     * @return string
     */
    public static function add_wp_query_fields($select, $wp_query)
{
}
    /**
     * Add in conditional search filters for products.
     *
     * @internal
     * @param string $where Where clause used to search posts.
     * @param object $wp_query WP_Query object.
     * @return string
     */
    public static function add_wp_query_filter($where, $wp_query)
{
}
    /**
     * Join posts meta tables when product search or low stock query is present.
     *
     * @internal
     * @param string $join Join clause used to search posts.
     * @param object $wp_query WP_Query object.
     * @return string
     */
    public static function add_wp_query_join($join, $wp_query)
{
}
    /**
     * Join wc_product_meta_lookup to posts if not already joined.
     *
     * @internal
     * @param string $sql SQL join.
     * @return string
     */
    protected static function append_product_sorting_table_join($sql)
{
}
    /**
     * Group by post ID to prevent duplicates.
     *
     * @internal
     * @param string $groupby Group by clause used to organize posts.
     * @param object $wp_query WP_Query object.
     * @return string
     */
    public static function add_wp_query_group_by($groupby, $wp_query)
{
}
}