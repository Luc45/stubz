<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * Batch Route class.
 */
class Batch
{
    const IDENTIFIER = 'batch';

    const SCHEMA_TYPE = 'batch';

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
     * Get arguments for this REST route.
     *
     * @return array An array of endpoints.
     */
    public function get_args()
    {
        // stub
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
    public function get_response(WP_REST_Request $request)
    {
        // stub
    }

}

