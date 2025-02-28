<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Launch Your Store controller.
 *
 * @internal
 */
class LaunchYourStore
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
    protected $rest_base = 'launch-your-store';
    /**
     * Register routes.
     */
    public function register_routes()
    {
    }
    /**
     * User must be either shop_manager or administrator.
     *
     * @return bool
     */
    public function must_be_shop_manager_or_admin()
    {
    }
    /**
     * Initializes options for coming soon. Overwrites existing coming soon status but keeps the private link and share key.
     *
     * @return bool|void
     */
    public function initialize_coming_soon()
    {
    }
    /**
     * Count the test orders created during Woo Payments test mode.
     *
     * @return \WP_REST_Response
     */
    public function get_woopay_test_orders_count()
    {
    }
    /**
     * Delete WooPayments test orders.
     *
     * @return \WP_REST_Response
     */
    public function delete_woopay_test_orders()
    {
    }
    /**
     * Update woocommerce_admin_launch_your_store_survey_completed to yes or no
     *
     * @param \WP_REST_Request $request WP_REST_Request object.
     *
     * @return \WP_REST_Response
     */
    public function update_survey_status(\WP_REST_Request $request)
    {
    }
    /**
     * Return woocommerce_admin_launch_your_store_survey_completed option.
     *
     * @return \WP_REST_Response
     */
    public function has_survey_completed()
    {
    }
}