<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Onboarding Payments Controller.
 *
 * @internal
 * @extends WC_REST_Data_Controller
 */
class OnboardingFreeExtensions
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
    protected $rest_base = 'onboarding/free-extensions';

    /**
     * Register routes.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Check whether a given request has permission to read onboarding profile data.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
    {
        // stub
    }

    /**
     * Return available payment methods.
     *
     * @param WP_REST_Request $request Request data.
     *
     * @return WP_Error|WP_REST_Response
     */
    public function get_available_extensions($request)
    {
        // stub
    }

}

