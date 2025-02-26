<?php

namespace Automattic\WooCommerce\Admin\API\AI;

/**
 * Product controller
 *
 * @internal
 */
class Product
{
    const AI_CONTENT_GENERATED = 'ai_content_generated';

    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'product';

    /**
     * Register routes.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Update product with the content and images powered by AI.
     *
     * @param  WP_REST_Request $request Request object.
     *
     * @return WP_REST_Response
     */
    public function update_product(WP_REST_Request $request)
    {
        // stub
    }

}

