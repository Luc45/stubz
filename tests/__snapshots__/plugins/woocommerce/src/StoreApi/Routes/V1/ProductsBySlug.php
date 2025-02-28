<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * ProductsBySlug class.
 */
class ProductsBySlug extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractRoute
{
    const IDENTIFIER = 'products-by-slug';

    const SCHEMA_TYPE = 'product';

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
     * Get a single item.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_response(WP_REST_Request $request)
{
}
    /**
     * Get a product  by slug.
     *
     * @param string $slug The slug of the product.
     */
    public function get_product_by_slug($slug)
{
}
    /**
     * Get a product variation by slug.
     *
     * @param string $slug The slug of the product variation.
     */
    private function get_product_variation_by_slug($slug)
{
}
}