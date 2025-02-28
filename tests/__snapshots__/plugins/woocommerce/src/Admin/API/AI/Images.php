<?php

namespace Automattic\WooCommerce\Admin\API\AI;

/**
 * Images controller
 *
 * @internal
 */
class Images extends \Automattic\WooCommerce\Admin\API\AI\AIEndpoint
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'images';
    /**
     * Register routes.
     */
    public function register_routes()
{
}
    /**
     * Generate Images from Pexels
     *
     * @param WP_REST_Request $request Request object.
     *
     * @return WP_Error|WP_REST_Response
     */
    public function generate_images(WP_REST_Request $request)
{
}
}