<?php

/**
 * REST API Layout Templates controller class.
 */
class WC_REST_Layout_Templates_Controller extends \WC_REST_Controller
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
    }
    /**
     * Check if a given request has access to read template layouts.
     *
     * @param WP_REST_Request $request The request.
     */
    public function get_items_permissions_check($request): bool
    {
    }
    /**
     * Check if a given request has access to read a template layout.
     *
     * @param WP_REST_Request $request The request.
     */
    public function get_item_permissions_check($request): bool
    {
    }
    /**
     * Handle request for template layouts.
     *
     * @param WP_REST_Request $request The request.
     */
    public function get_items($request)
    {
    }
    /**
     * Handle request for a single template layout.
     *
     * @param WP_REST_Request $request The request.
     */
    public function get_item($request)
    {
    }
}
