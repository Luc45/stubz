<?php

/**
 * REST API WC_REST_WCCOM_Site_Connection_Controller Class.
 *
 * @extends WC_REST_WCCOM_Site_Status_Controller
 */
class WC_REST_WCCOM_Site_Connection_Controller
{
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'connection';

    /**
     * Register the routes for Site Connection Controller.
     *
     * @since 9.6.0
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Check whether user has permission to access controller's endpoints.
     *
     * @since 9.6.0
     * @param WP_USER $user User object.
     * @return bool
     */
    public function user_has_permission($user): bool
    {
        // stub
    }

    /**
     * Disconnect the site from WooCommerce.com.
     *
     * @since  9.6.0
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response
     */
    public function handle_disconnect_request($request)
    {
        // stub
    }

}
