<?php

/**
 * REST API Layout Templates controller class.
 */
class WC_REST_Layout_Templates_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';

    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'layout-templates';

    /**
     * Register the routes for template layouts.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Check if a given request has access to read template layouts.
     *
     * @param WP_REST_Request $request The request.
     */
    public function get_items_permissions_check($request): bool
    {
        // stub
    }

    /**
     * Check if a given request has access to read a template layout.
     *
     * @param WP_REST_Request $request The request.
     */
    public function get_item_permissions_check($request): bool
    {
        // stub
    }

    /**
     * Handle request for template layouts.
     *
     * @param WP_REST_Request $request The request.
     */
    public function get_items($request)
    {
        // stub
    }

    /**
     * Handle request for a single template layout.
     *
     * @param WP_REST_Request $request The request.
     */
    public function get_item($request)
    {
        // stub
    }

    /**
     * Get layout templates.
     *
     * @param array $query_params Query params.
     */
    private function get_layout_templates(array $query_params): array
    {
        // stub
    }

}
