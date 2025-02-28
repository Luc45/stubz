<?php

/**
 * REST API Products controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Posts_Controller
 */
class WC_REST_Products_V1_Controller extends \WC_REST_Posts_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v1';

    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'products';

    /**
     * Post type.
     *
     * @var string
     */
    protected $post_type = 'product';

    /**
     * Initialize product actions.
     */
    public function __construct()
{
}
    /**
     * Register the routes for products.
     */
    public function register_routes()
{
}
    /**
     * Get post types.
     *
     * @return array
     */
    protected function get_post_types()
{
}
    /**
     * Query args.
     *
     * @param array           $args    Request args.
     * @param WP_REST_Request $request Request data.
     * @return array
     */
    public function query_args($args, $request)
{
}
    /**
     * Get the downloads for a product or product variation.
     *
     * @param WC_Product|WC_Product_Variation $product Product instance.
     * @return array
     */
    protected function get_downloads($product)
{
}
    /**
     * Get taxonomy terms.
     *
     * @param WC_Product $product  Product instance.
     * @param string     $taxonomy Taxonomy slug.
     * @return array
     */
    protected function get_taxonomy_terms($product, $taxonomy = 'cat')
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
     * Get attribute taxonomy label.
     *
     * @param  string $name Taxonomy name.
     * @return string
     */
    protected function get_attribute_taxonomy_label($name)
{
}
    /**
     * Get default attributes.
     *
     * @param WC_Product $product Product instance.
     * @return array
     */
    protected function get_default_attributes($product)
{
}
    /**
     * Get attribute options.
     *
     * @param int   $product_id Product ID.
     * @param array $attribute  Attribute data.
     * @return array
     */
    protected function get_attribute_options($product_id, $attribute)
{
}
    /**
     * Get the attributes for a product or product variation.
     *
     * @param WC_Product|WC_Product_Variation $product Product instance.
     * @return array
     */
    protected function get_attributes($product)
{
}
    /**
     * Get product menu order.
     *
     * @deprecated 3.0.0
     * @param WC_Product $product Product instance.
     * @return int
     */
    protected function get_product_menu_order($product)
{
}
    /**
     * Get product data.
     *
     * @param WC_Product $product Product instance.
     * @return array
     */
    protected function get_product_data($product)
{
}
    /**
     * Get an individual variation's data.
     *
     * @param WC_Product $product Product instance.
     * @return array
     */
    protected function get_variation_data($product)
{
}
    /**
     * Prepare a single product output for response.
     *
     * @param WP_Post         $post    Post object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    public function prepare_item_for_response($post, $request)
{
}
    /**
     * Prepare links for the request.
     *
     * @param WC_Product      $product Product object.
     * @param WP_REST_Request $request Request object.
     * @return array Links for the given product.
     */
    protected function prepare_links($product, $request)
{
}
    /**
     * Prepare a single product for create or update.
     *
     * @param WP_REST_Request $request Request object.
     * @return WP_Error|stdClass $data Post object.
     */
    protected function prepare_item_for_database($request)
{
}
    /**
     * Create a single product.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function create_item($request)
{
}
    /**
     * Update a single product.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function update_item($request)
{
}
    /**
     * Saves a product to the database.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return int
     */
    public function save_product($request)
{
}
    /**
     * Save product images.
     *
     * @deprecated 3.0.0
     * @param int $product_id
     * @param array $images
     * @throws WC_REST_Exception
     */
    protected function save_product_images($product_id, $images)
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
     * Save product shipping data.
     *
     * @param WC_Product $product Product instance.
     * @param array      $data    Shipping data.
     * @return WC_Product
     */
    protected function save_product_shipping_data($product, $data)
{
}
    /**
     * Save downloadable files.
     *
     * @param WC_Product $product    Product instance.
     * @param array      $downloads  Downloads data.
     * @param int        $deprecated Deprecated since 3.0.
     * @return WC_Product
     */
    protected function save_downloadable_files($product, $downloads, $deprecated = 0)
{
}
    /**
     * Save taxonomy terms.
     *
     * @param WC_Product $product  Product instance.
     * @param array      $terms    Terms data.
     * @param string     $taxonomy Taxonomy name.
     * @return WC_Product
     */
    protected function save_taxonomy_terms($product, $terms, $taxonomy = 'cat')
{
}
    /**
     * Save default attributes.
     *
     * @since 3.0.0
     *
     * @param WC_Product      $product Product instance.
     * @param WP_REST_Request $request Request data.
     * @return WC_Product
     */
    protected function save_default_attributes($product, $request)
{
}
    /**
     * Save product meta.
     *
     * @deprecated 3.0.0
     * @param WC_Product $product
     * @param WP_REST_Request $request
     * @return bool
     * @throws WC_REST_Exception
     */
    protected function save_product_meta($product, $request)
{
}
    /**
     * Set product meta.
     *
     * @throws WC_REST_Exception REST API exceptions.
     * @param WC_Product      $product Product instance.
     * @param WP_REST_Request $request Request data.
     * @return WC_Product
     */
    protected function set_product_meta($product, $request)
{
}
    /**
     * Save variations.
     *
     * @throws WC_REST_Exception REST API exceptions.
     * @param WC_Product      $product          Product instance.
     * @param WP_REST_Request $request          Request data.
     * @return bool
     */
    protected function save_variations_data($product, $request)
{
}
    /**
     * Add post meta fields.
     *
     * @param WP_Post         $post    Post data.
     * @param WP_REST_Request $request Request data.
     * @return bool|WP_Error
     */
    protected function add_post_meta_fields($post, $request)
{
}
    /**
     * Update post meta fields.
     *
     * @param WP_Post         $post    Post data.
     * @param WP_REST_Request $request Request data.
     * @return bool|WP_Error
     */
    protected function update_post_meta_fields($post, $request)
{
}
    /**
     * Clear cache/transients.
     *
     * @param WP_Post $post Post data.
     */
    public function clear_transients($post)
{
}
    /**
     * Delete post.
     *
     * @param int|WP_Post $id Post ID or WP_Post instance.
     */
    protected function delete_post($id)
{
}
    /**
     * Delete a single item.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error
     */
    public function delete_item($request)
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
     * Get the query params for collections of attachments.
     *
     * @return array
     */
    public function get_collection_params()
{
}
}
