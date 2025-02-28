<?php

namespace Automattic\WooCommerce\Admin\API\AI;

/**
 * Store Title controller
 *
 * @internal
 */
class BusinessDescription
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'business-description';

    /**
     * Register routes.
     */
    public function register_routes()
{
}
    /**
     * Update the business description.
     *
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response|WP_Error Response object.
     */
    public function update_business_description($request)
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