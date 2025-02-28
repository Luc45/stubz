<?php

namespace Automattic\WooCommerce\Internal\Admin\EmailPreview;

/**
 * Controller for the REST endpoint to send an email preview.
 */
class EmailPreviewRestController extends \Automattic\WooCommerce\Internal\RestApiControllerBase
{
    /**
     * Email preview nonce.
     *
     * @var string
     */
    public const NONCE_KEY = 'email-preview-nonce';
    /**
     * The root namespace for the JSON REST API endpoints.
     *
     * @var string
     */
    protected string $route_namespace = 'wc-admin-email';
    /**
     * Route base.
     *
     * @var string
     */
    protected string $rest_base = 'settings/email';
    /**
     * Get the WooCommerce REST API namespace for the class.
     *
     * @return string
     */
    protected function get_rest_api_namespace(): string
{
}
    /**
     * The constructor.
     */
    public function __construct()
{
}
    /**
     * Register the REST API endpoints handled by this controller.
     */
    public function register_routes()
{
}
    /**
     * Handle the POST /settings/email/send-preview.
     *
     * @param WP_REST_Request $request The received request.
     * @return array|WP_Error Request response or an error.
     */
    public function send_email_preview(WP_REST_Request $request)
{
}
    /**
     * Handle the POST /settings/email/save-transient.
     *
     * @param WP_REST_Request $request The received request.
     * @return array|WP_Error Request response or an error.
     */
    public function save_transient(WP_REST_Request $request)
{
}
}