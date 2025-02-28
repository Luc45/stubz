<?php

namespace Automattic\WooCommerce\Admin\API\AI;

/**
 * Store Info controller
 *
 * @internal
 */
class StoreInfo extends \Automattic\WooCommerce\Admin\API\AI\AIEndpoint
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'store-info';
    /**
     * Register routes.
     */
    public function register_routes()
{
}
    /**
     * Update the store title powered by AI.
     *
     * @return WP_Error|WP_REST_Response
     */
    public function get_response()
{
}
    /**
     * Get the Business Description response.
     *
     * @return array
     */
    public function get_schema()
{
}
}