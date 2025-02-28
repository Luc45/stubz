<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Notice Controller.
 *
 * @internal
 * @extends WC_REST_Data_Controller
 */
class Notice extends \WC_REST_Data_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-admin';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'notice';
    /**
     * Register the routes for admin notes.
     */
    public function register_routes()
{
}
    /**
     * Save notice dismiss information in user meta.
     *
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response|WP_Error
     */
    public function dissmiss_notice($request)
{
}
    /**
     * Check user has the necessary permissions to perform this action.
     *
     * @return bool
     */
    public function get_permission(): bool
{
}
}