<?php

namespace ;

/**
 * REST API WCCOM System Status Report Controller Class.
 *
 * @extends WC_REST_WCCOM_Site_Controller
 */
class WC_REST_WCCOM_Site_SSR_Controller extends \WC_REST_WCCOM_Site_Controller
{
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'ssr';

    /**
     * Register the routes for SSR Controller.
     *
     * @since 7.8.0
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Check whether user has permission to access controller's endpoints.
     *
     * @since 8.6.0
     * @param WP_USER $user User object.
     * @return bool
     */
    public function user_has_permission($user): bool
    {
        // stub
    }

    /**
     * Generate SSR data and submit it to WooCommerce.com.
     *
     * @since  7.8.0
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response
     */
    public function handle_ssr_request($request)
    {
        // stub
    }

}

