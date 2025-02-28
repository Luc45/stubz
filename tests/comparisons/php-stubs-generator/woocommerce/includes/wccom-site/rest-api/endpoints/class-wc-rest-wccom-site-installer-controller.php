<?php

/**
 * REST API WCCOM Site Installer Controller Class.
 *
 * @extends WC_REST_WCCOM_Site_Controller
 */
class WC_REST_WCCOM_Site_Installer_Controller extends \WC_REST_WCCOM_Site_Controller
{
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'installer';
    /**
     * Register the routes for plugin auto-installer.
     *
     * @since 7.7.0
     */
    public function register_routes()
    {
    }
    /**
     * Check whether user has permission to access controller's endpoints.
     *
     * @since 8.6.0
     * @param WP_USER $user User object.
     * @return bool
     */
    public function user_has_permission($user) : bool
    {
    }
    /**
     * Install WooCommerce.com products.
     *
     * @since 7.7.0
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error
     */
    public function install($request)
    {
    }
    /**
     * Reset installation state.
     *
     * @since 7.7.0
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error
     */
    public function reset_install($request)
    {
    }
    /**
     * Generate a standardized response for a successful request.
     *
     * @param int $product_id Product ID.
     * @return WP_REST_Response|WP_Error
     */
    protected function success_response($product_id)
    {
    }
    /**
     * Generate a standardized response for a failed request.
     *
     * @param int             $product_id Product ID.
     * @param Installer_Error $exception The exception.
     * @return WP_REST_Response|WP_Error
     */
    protected function failure_response($product_id, $exception)
    {
    }
    /**
     * Map the installation state to a response.
     *
     * @param WC_WCCOM_Site_Installation_State $state The installation state.
     * @return array
     */
    protected function map_state_to_response($state)
    {
    }
}