<?php

namespace Automattic\WooCommerce\Internal\Admin\EmailPreview;

/**
 * Controller for the REST endpoint to send an email preview.
 */
class EmailPreviewRestController
{
    const NONCE_KEY = 'email-preview-nonce';

    /**
     * Holds the EmailPreview instance for rendering email previews.
     *
     * @var EmailPreview
     */
    private Automattic\WooCommerce\Internal\Admin\EmailPreview\EmailPreview $email_preview;

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
        // stub
    }

    /**
     * The constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Register the REST API endpoints handled by this controller.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Get the accepted arguments for the POST send-preview request.
     *
     * @return array[]
     */
    private function get_args_for_send_preview()
    {
        // stub
    }

    /**
     * Get the accepted arguments for the GET preview-subject request.
     *
     * @return array[]
     */
    private function get_args_for_preview_subject()
    {
        // stub
    }

    /**
     * Get the accepted arguments for the POST save-transient request.
     *
     * @return array[]
     */
    private function get_args_for_save_transient()
    {
        // stub
    }

    /**
     * Get the schema for the POST send-preview and save-transient requests.
     *
     * @return array[]
     */
    private function get_schema_with_message()
    {
        // stub
    }

    /**
     * Get the schema for the GET preview_subject request.
     *
     * @return array[]
     */
    private function get_schema_for_preview_subject()
    {
        // stub
    }

    /**
     * Validate the email type.
     *
     * @param string $email_type The email type to validate.
     * @return bool|WP_Error True if the email type is valid, otherwise a WP_Error object.
     */
    private function validate_email_type(string $email_type)
    {
        // stub
    }

    /**
     * Permission check for REST API endpoint.
     *
     * @param WP_REST_Request $request The request for which the permission is checked.
     * @return bool|WP_Error True if the current user has the capability, otherwise a WP_Error object.
     */
    private function check_permissions(WP_REST_Request $request)
    {
        // stub
    }

    /**
     * Handle the POST /settings/email/send-preview.
     *
     * @param WP_REST_Request $request The received request.
     * @return array|WP_Error Request response or an error.
     */
    public function send_email_preview(WP_REST_Request $request)
    {
        // stub
    }

    /**
     * Handle the POST /settings/email/save-transient.
     *
     * @param WP_REST_Request $request The received request.
     * @return array|WP_Error Request response or an error.
     */
    public function save_transient(WP_REST_Request $request)
    {
        // stub
    }

}

