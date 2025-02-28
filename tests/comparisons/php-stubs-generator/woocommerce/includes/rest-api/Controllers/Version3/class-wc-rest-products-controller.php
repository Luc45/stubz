<?php

/**
 * REST API Products controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Products_V2_Controller
 */
class WC_REST_Products_Controller extends \WC_REST_Products_V2_Controller
{
    use \Automattic\WooCommerce\Internal\CostOfGoodsSold\CogsAwareRestControllerTrait;
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';
    /**
     * Register the routes for products.
     */
    public function register_routes()
    {
    }
    /**
     * Duplicate a product and returns the duplicated product.
     * The product status is set to "draft" and the name includes a "(copy)" at the end by default.
     *
     * @param WP_REST_Request $request Request data.
     * @return WP_REST_Response|WP_Error
     */
    public function duplicate_product($request)
    {
    }
    /**
     * Get the images for a product or product variation.
     *
     * @param WC_Product|WC_Product_Variation $product Product instance.
     * @return array
     */
    protected function get_images($product)
    {
    }
    /**
     * Make extra product orderby features supported by WooCommerce available to the WC API.
     * This includes 'price', 'popularity', and 'rating'.
     *
     * @param WP_REST_Request $request Request data.
     * @return array
     */
    protected function prepare_objects_query($request)
    {
    }
    /**
     * Get objects.
     *
     * @param array $query_args Query args.
     * @return array
     */
    protected function get_objects($query_args)
    {
    }
    /**
     * Join `wc_product_meta_lookup` table when SKU search query is present.
     *
     * @param string $join Join clause used to search posts.
     * @return string
     */
    public function add_search_criteria_to_wp_query_join($join)
    {
    }
    /**
     * Add a where clause for matching the SKU field.
     *
     * @param string $where Where clause used to search posts.
     * @return string
     */
    public function add_search_criteria_to_wp_query_where($where)
    {
    }
    /**
     * Exclude product statuses from the query.
     *
     * @param string $where Where clause used to search posts.
     * @return string
     */
    public function exclude_product_statuses($where)
    {
    }
    /**
     * Set product images.
     *
     * @throws WC_REST_Exception REST API exceptions.
     * @param WC_Product $product Product instance.
     * @param array      $images  Images data.
     * @return WC_Product
     */
    protected function set_product_images($product, $images)
    {
    }
    /**
     * Prepare a single product for create or update.
     *
     * @param  WP_REST_Request $request Request object.
     * @param  bool            $creating If is creating a new object.
     * @return WP_Error|WC_Data
     */
    protected function prepare_object_for_database($request, $creating = \false)
    {
    }
    /**
     * Get the Product's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
    /**
     * Add new options for 'orderby' to the collection params.
     *
     * @return array
     */
    public function get_collection_params()
    {
    }
    /**
     * Add new options for the suggested-products endpoint.
     *
     * @return array
     */
    public function get_suggested_products_collection_params()
    {
    }
    /**
     * Get the downloads for a product.
     *
     * @param WC_Product $product Product instance.
     *
     * @return array
     */
    protected function get_downloads($product)
    {
    }
    /**
     * Get product data.
     *
     * @param WC_Product $product Product instance.
     * @param string     $context Request context. Options: 'view' and 'edit'.
     *
     * @return array
     */
    protected function get_product_data($product, $context = 'view')
    {
    }
    /**
     * Get the suggested products.
     *
     * @param WP_REST_Request $request Request object.
     * @return object
     */
    public function get_suggested_products($request)
    {
    }
    /**
     * Core function to prepare a single product output for response
     * (doesn't fire hooks, ensure_response, or add links).
     *
     * @param WC_Data         $object_data Object data.
     * @param WP_REST_Request $request Request object.
     * @param string          $context Request context.
     * @return array Product data to be included in the response.
     */
    protected function prepare_object_for_response_core($object_data, $request, $context) : array
    {
    }
}