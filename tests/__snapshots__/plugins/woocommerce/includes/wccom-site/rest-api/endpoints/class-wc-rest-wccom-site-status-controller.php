<?php

/**
 * REST API WCCOM Site Status Controller Class.
 *
 * @extends WC_REST_WCCOM_Site_Status_Controller
 */
class WC_REST_WCCOM_Site_Status_Controller
{
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'status';

    /**
     * Register the routes for Site Status Controller.
     *
     * @since 8.7.0
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Check whether user has permission to access controller's endpoints.
     *
     * @since 8.7.0
     * @param WP_USER $user User object.
     * @return bool
     */
    public function user_has_permission($user): bool
    {
        // stub
    }

    /**
     * Get the status details of the site.
     *
     * @since  8.7.0
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response
     */
    public function handle_status_request($request)
    {
        // stub
    }

}
