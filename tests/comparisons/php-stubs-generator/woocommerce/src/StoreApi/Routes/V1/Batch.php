<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * Batch Route class.
 */
class Batch extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractRoute implements \Automattic\WooCommerce\StoreApi\Routes\RouteInterface
{
    /**
     * The route identifier.
     *
     * @var string
     */
    public const IDENTIFIER = 'batch';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    public const SCHEMA_TYPE = 'batch';
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
     * Get arguments for this REST route.
     *
     * @return array An array of endpoints.
     */
    public function get_args()
    {
    }
    /**
     * Get the route response.
     *
     * @see WP_REST_Server::serve_batch_request_v1
     * https://developer.wordpress.org/reference/classes/wp_rest_server/serve_batch_request_v1/
     *
     * @throws RouteException On error.
     *
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    public function get_response(\WP_REST_Request $request)
    {
    }
}
