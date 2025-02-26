<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * ProductsBySlug class.
 */
class ProductsBySlug
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
        // stub
    }

    /**
     * Get the path of this rest route.
     *
     * @return string
     */
    public static function get_path_regex()
    {
        // stub
    }

    /**
     * Get method arguments for this REST route.
     *
     * @return array An array of endpoints.
     */
    public function get_args()
    {
        // stub
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
        // stub
    }

    /**
     * Get a product  by slug.
     *
     * @param string $slug The slug of the product.
     */
    public function get_product_by_slug($slug)
    {
        // stub
    }

    /**
     * Get a product variation by slug.
     *
     * @param string $slug The slug of the product variation.
     */
    private function get_product_variation_by_slug($slug)
    {
        // stub
    }

}

