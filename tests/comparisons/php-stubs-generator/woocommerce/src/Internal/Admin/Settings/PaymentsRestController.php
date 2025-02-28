<?php

namespace Automattic\WooCommerce\Internal\Admin\Settings;

/**
 * Controller for the REST endpoints to service the Payments settings page.
 */
class PaymentsRestController extends \Automattic\WooCommerce\Internal\RestApiControllerBase
{
    /**
     * The root namespace for the JSON REST API endpoints.
     *
     * @var string
     */
    protected string $route_namespace = 'wc-admin';
    /**
     * Route base.
     *
     * @var string
     */
    protected string $rest_base = 'settings/payments';
    /**
     * Get the WooCommerce REST API namespace for the class.
     *
     * @return string
     */
    protected function get_rest_api_namespace() : string
    {
    }
    /**
     * Register the REST API endpoints handled by this controller.
     *
     * @param bool $override Whether to override the existing routes. Useful for testing.
     */
    public function register_routes(bool $override = false)
    {
    }
    /**
     * Initialize the class instance.
     *
     * @param Payments $payments The payments settings page service.
     *
     * @internal
     */
    public final function init(\Automattic\WooCommerce\Internal\Admin\Settings\Payments $payments) : void
    {
    }
    /**
     * Get the payment providers for the given location.
     *
     * @param WP_REST_Request $request The request object.
     * @return WP_Error|WP_REST_Response
     */
    protected function get_providers(\WP_REST_Request $request)
    {
    }
    /**
     * Set the country for the payment providers.
     *
     * @param WP_REST_Request $request The request object.
     *
     * @return WP_Error|WP_REST_Response
     */
    protected function set_country(\WP_REST_Request $request)
    {
    }
    /**
     * Update the payment providers order.
     *
     * @param WP_REST_Request $request The request object.
     *
     * @return WP_Error|WP_REST_Response
     */
    protected function update_providers_order(\WP_REST_Request $request)
    {
    }
    /**
     * Hide a payment extension suggestion.
     *
     * @param WP_REST_Request $request The request object.
     *
     * @return WP_Error|WP_REST_Response
     */
    protected function hide_payment_extension_suggestion(\WP_REST_Request $request)
    {
    }
    /**
     * Dismiss a payment extension suggestion incentive.
     *
     * @param WP_REST_Request $request The request object.
     *
     * @return WP_Error|WP_REST_Response
     */
    protected function dismiss_payment_extension_suggestion_incentive(\WP_REST_Request $request)
    {
    }
}