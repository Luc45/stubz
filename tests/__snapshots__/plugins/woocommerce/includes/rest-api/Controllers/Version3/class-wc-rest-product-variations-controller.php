<?php

namespace ;

/**
 * REST API variations controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Product_Variations_V2_Controller
 */
class WC_REST_Product_Variations_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';

    /**
     * Product statuses to exclude from the query.
     *
     * @var array
     */
    private $exclude_status = array (
);

    /**
     * Register the routes for products.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Get the downloads for a product variation.
     *
     * @param WC_Product_Variation $product Product variation instance.
     * @param string               $context Context of the request: 'view' or 'edit'.
     *
     * @return array
     */
    protected function get_downloads($product, $context = 'view')
    {
        // stub
    }

    /**
     * Prepare a single variation output for response.
     *
     * @param  WC_Data         $object  Object data.
     * @param  WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    public function prepare_object_for_response($object, $request)
    {
        // stub
    }

    /**
     * Prepare a single variation for create or update.
     *
     * @param  WP_REST_Request $request Request object.
     * @param  bool            $creating If is creating a new object.
     * @return WP_Error|WC_Data
     */
    protected function prepare_object_for_database($request, $creating = false)
    {
        // stub
    }

    /**
     * Get the image for a product variation.
     *
     * @param WC_Product_Variation $variation Variation data.
     * @param string               $context   Context of the request: 'view' or 'edit'.
     * @return array
     */
    protected function get_image($variation, $context = 'view')
    {
        // stub
    }

    /**
     * Set variation image.
     *
     * @throws WC_REST_Exception REST API exceptions.
     * @param  WC_Product_Variation $variation Variation instance.
     * @param  array                $image    Image data.
     * @return WC_Product_Variation
     */
    protected function set_variation_image($variation, $image)
    {
        // stub
    }

    /**
     * Get the Variation's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
        // stub
    }

    /**
     * Prepare objects query.
     *
     * @since  3.0.0
     * @param  WP_REST_Request $request Full details about the request.
     * @return array
     */
    protected function prepare_objects_query($request)
    {
        // stub
    }

    /**
     * Get objects.
     *
     * @param array $query_args Query args.
     * @return array
     */
    protected function get_objects($query_args)
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
     * Deletes all unmatched variations (aka duplicates).
     *
     * @param  WC_Product $product Variable product.
     * @return int        Number of deleted variations.
     */
    private function delete_unmatched_product_variations($product)
    {
        // stub
    }

    /**
     * Generate all variations for a given product.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function generate($request)
    {
        // stub
    }

    /**
     * Exclude product variation statuses from the query.
     *
     * @param string $where Where clause used to search posts.
     * @return string
     */
    public function exclude_product_variation_statuses($where)
    {
        // stub
    }

}

