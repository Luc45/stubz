<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * ProductCollectionData route.
 * Get aggregate data from a collection of products.
 *
 * Supports the same parameters as /products, but returns a different response.
 */
class ProductCollectionData extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractRoute
{
    const IDENTIFIER = 'product-collection-data';
    const SCHEMA_TYPE = 'product-collection-data';
    /**
     * Get the path of this REST route.
     *
     * @return string
     */
    public function get_path()
{
}
    /**
     * Get the path of this rest route.
     *
     * @return string
     */
    public static function get_path_regex()
{
}
    /**
     * Get method arguments for this REST route.
     *
     * @return array An array of endpoints.
     */
    public function get_args()
{
}
    /**
     * Get a collection of posts and add the post title filter option to \WP_Query.
     *
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_response(WP_REST_Request $request)
{
}
    /**
     * Get the query params for collections of products.
     *
     * @return array
     */
    public function get_collection_params()
{
}
}