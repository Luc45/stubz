<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * ProductCategoriesById class.
 */
class ProductCategoriesById extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractRoute
{
    /**
     * The route identifier.
     *
     * @var string
     */
    public const IDENTIFIER = 'product-categories-by-id';
    /**
     * The routes schema.
     *
     * @var string
     */
    public const SCHEMA_TYPE = 'product-category';
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
}