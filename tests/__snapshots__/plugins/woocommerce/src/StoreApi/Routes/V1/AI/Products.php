<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1\AI;

/**
 * Products class.
 *
 * @internal
 */
class Products extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractRoute
{
    const IDENTIFIER = 'ai/products';

    const SCHEMA_TYPE = 'ai/products';

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
     * Generate the content for the products.
     *
     * @param  \WP_REST_Request $request Request object.
     *
     * @return bool|string|\WP_Error|\WP_REST_Response
     */
    protected function get_route_post_response(WP_REST_Request $request)
{
}
    /**
     * Remove products generated by AI.
     *
     * @param  \WP_REST_Request $request Request object.
     *
     * @return bool|string|\WP_Error|\WP_REST_Response
     */
    protected function get_route_delete_response(WP_REST_Request $request)
{
}
}