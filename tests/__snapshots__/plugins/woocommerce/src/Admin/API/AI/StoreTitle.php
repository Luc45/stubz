<?php

namespace Automattic\WooCommerce\Admin\API\AI;

/**
 * Store Title controller
 *
 * @internal
 */
class StoreTitle extends \Automattic\WooCommerce\Admin\API\AI\AIEndpoint
{
    public const STORE_TITLE_OPTION_NAME = 'blogname';
    public const AI_STORE_TITLE_OPTION_NAME = 'ai_generated_site_title';
    public const DEFAULT_TITLE = 'Site Title';
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'store-title';
    /**
     * Register routes.
     */
    public function register_routes()
{
}
    /**
     * Update the store title powered by AI.
     *
     * @param  WP_REST_Request $request Request object.
     *
     * @return WP_Error|WP_REST_Response
     */
    public function update_store_title($request)
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