<?php

namespace Automattic\WooCommerce\Admin\API\AI;

/**
 * Patterns controller
 *
 * @internal
 */
class Patterns extends \Automattic\WooCommerce\Admin\API\AI\AIEndpoint
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'patterns';

    /**
     * Register routes.
     */
    public function register_routes()
{
}
    /**
     * Update patterns with the content and images powered by AI.
     *
     * @param  WP_REST_Request $request Request object.
     *
     * @return WP_Error|WP_REST_Response
     */
    public function update_patterns(WP_REST_Request $request)
{
}
    /**
     * Remove patterns generated by AI.
     *
     * @return WP_Error|WP_REST_Response
     */
    public function delete_patterns()
{
}
}