<?php

namespace ;

/**
 * REST API Products controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_CRUD_Controller
 */
class WC_REST_Products_V2_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v2';

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
     * If object is hierarchical.
     *
     * @var bool
     */
    protected $hierarchical = true;

    /**
     * Initialize product actions.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Register the routes for products.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Get object.
     *
     * @param int $id Object ID.
     *
     * @since  3.0.0
     * @return WC_Data
     */
    protected function get_object($id)
    {
        // stub
    }

    /**
     * Prepare a single product output for response.
     *
     * @param WC_Data         $object  Object data.
     * @param WP_REST_Request $request Request object.
     *
     * @since  3.0.0
     * @return WP_REST_Response
     */
    public function prepare_object_for_response($object, $request)
    {
        // stub
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
    protected function prepare_object_for_response_core($object_data, $request, $context): array
    {
        // stub
    }

    /**
     * Prepare objects query.
     *
     * @param WP_REST_Request $request Full details about the request.
     *
     * @since  3.0.0
     * @return array
     */
    protected function prepare_objects_query($request)
    {
        // stub
    }

    /**
     * Get the downloads for a product or product variation.
     *
     * @param WC_Product|WC_Product_Variation $product Product instance.
     *
     * @return array
     */
    protected function get_downloads($product)
    {
        // stub
    }

    /**
     * Get taxonomy terms.
     *
     * @param WC_Product $product  Product instance.
     * @param string     $taxonomy Taxonomy slug.
     *
     * @return array
     */
    protected function get_taxonomy_terms($product, $taxonomy = 'cat')
    {
        // stub
    }

    /**
     * Get the images for a product or product variation.
     *
     * @param WC_Product|WC_Product_Variation $product Product instance.
     *
     * @return array
     */
    protected function get_images($product)
    {
        // stub
    }

    /**
     * Get attribute taxonomy label.
     *
     * @param string $name Taxonomy name.
     *
     * @deprecated 3.0.0
     * @return     string
     */
    protected function get_attribute_taxonomy_label($name)
    {
        // stub
    }

    /**
     * Get product attribute taxonomy name.
     *
     * @param string     $slug    Taxonomy name.
     * @param WC_Product $product Product data.
     *
     * @since  3.0.0
     * @return string
     */
    protected function get_attribute_taxonomy_name($slug, $product)
    {
        // stub
    }

    /**
     * Get default attributes.
     *
     * @param WC_Product $product Product instance.
     *
     * @return array
     */
    protected function get_default_attributes($product)
    {
        // stub
    }

    /**
     * Get attribute options.
     *
     * @param int   $product_id Product ID.
     * @param array $attribute  Attribute data.
     *
     * @return array
     */
    protected function get_attribute_options($product_id, $attribute)
    {
        // stub
    }

    /**
     * Get the attributes for a product or product variation.
     *
     * @param WC_Product|WC_Product_Variation $product Product instance.
     *
     * @return array
     */
    protected function get_attributes($product)
    {
        // stub
    }

    /**
     * Fetch price HTML.
     *
     * @param WC_Product $product Product object.
     * @param string     $context Context of request, can be `view` or `edit`.
     *
     * @return string
     */
    protected function api_get_price_html($product, $context)
    {
        // stub
    }

    /**
     * Fetch related IDs.
     *
     * @param WC_Product $product Product object.
     * @param string     $context Context of request, can be `view` or `edit`.
     *
     * @return array
     */
    protected function api_get_related_ids($product, $context)
    {
        // stub
    }

    /**
     * Fetch meta data.
     *
     * @param WC_Product $product Product object.
     * @param string     $context Context of request, can be `view` or `edit`.
     *
     * @return array
     */
    protected function api_get_meta_data($product, $context)
    {
        // stub
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
        // stub
    }

    /**
     * Prepare links for the request.
     *
     * @param WC_Data         $object  Object data.
     * @param WP_REST_Request $request Request object.
     *
     * @return array Links for the given post.
     */
    protected function prepare_links($object, $request)
    {
        // stub
    }

    /**
     * Prepare a single product for create or update.
     *
     * @param WP_REST_Request $request Request object.
     * @param bool            $creating If is creating a new object.
     *
     * @return WP_Error|WC_Data
     */
    protected function prepare_object_for_database($request, $creating = false)
    {
        // stub
    }

    /**
     * Set product images.
     *
     * @param WC_Product $product Product instance.
     * @param array      $images  Images data.
     *
     * @throws WC_REST_Exception REST API exceptions.
     * @return WC_Product
     */
    protected function set_product_images($product, $images)
    {
        // stub
    }

    /**
     * Save product shipping data.
     *
     * @param WC_Product $product Product instance.
     * @param array      $data    Shipping data.
     *
     * @return WC_Product
     */
    protected function save_product_shipping_data($product, $data)
    {
        // stub
    }

    /**
     * Save downloadable files.
     *
     * @param WC_Product $product    Product instance.
     * @param array      $downloads  Downloads data.
     * @param int        $deprecated Deprecated since 3.0.
     *
     * @return WC_Product
     */
    protected function save_downloadable_files($product, $downloads, $deprecated = 0)
    {
        // stub
    }

    /**
     * Save taxonomy terms.
     *
     * @param WC_Product $product  Product instance.
     * @param array      $terms    Terms data.
     * @param string     $taxonomy Taxonomy name.
     *
     * @return WC_Product
     */
    protected function save_taxonomy_terms($product, $terms, $taxonomy = 'cat')
    {
        // stub
    }

    /**
     * Save default attributes.
     *
     * @param WC_Product      $product Product instance.
     * @param WP_REST_Request $request Request data.
     *
     * @since  3.0.0
     * @return WC_Product
     */
    protected function save_default_attributes($product, $request)
    {
        // stub
    }

    /**
     * Clear caches here so in sync with any new variations/children.
     *
     * @param WC_Data $object Object data.
     */
    public function clear_transients($object)
    {
        // stub
    }

    /**
     * Delete a single item.
     *
     * @param WP_REST_Request $request Full details about the request.
     *
     * @return WP_REST_Response|WP_Error
     */
    public function delete_item($request)
    {
        // stub
    }

    /**
     * Get the Product's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
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

}

