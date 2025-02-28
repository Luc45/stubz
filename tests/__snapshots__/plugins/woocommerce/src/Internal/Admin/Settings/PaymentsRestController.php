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
     * The payments settings page service.
     *
     * @var Payments
     */
    private Automattic\WooCommerce\Internal\Admin\Settings\Payments $payments;
    /**
     * Get the WooCommerce REST API namespace for the class.
     *
     * @return string
     */
    protected function get_rest_api_namespace(): string
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
    final public function init(Automattic\WooCommerce\Internal\Admin\Settings\Payments $payments): void
{
}
    /**
     * Get the payment providers for the given location.
     *
     * @param WP_REST_Request $request The request object.
     * @return WP_Error|WP_REST_Response
     */
    protected function get_providers(WP_REST_Request $request)
{
}
    /**
     * Set the country for the payment providers.
     *
     * @param WP_REST_Request $request The request object.
     *
     * @return WP_Error|WP_REST_Response
     */
    protected function set_country(WP_REST_Request $request)
{
}
    /**
     * Update the payment providers order.
     *
     * @param WP_REST_Request $request The request object.
     *
     * @return WP_Error|WP_REST_Response
     */
    protected function update_providers_order(WP_REST_Request $request)
{
}
    /**
     * Hide a payment extension suggestion.
     *
     * @param WP_REST_Request $request The request object.
     *
     * @return WP_Error|WP_REST_Response
     */
    protected function hide_payment_extension_suggestion(WP_REST_Request $request)
{
}
    /**
     * Dismiss a payment extension suggestion incentive.
     *
     * @param WP_REST_Request $request The request object.
     *
     * @return WP_Error|WP_REST_Response
     */
    protected function dismiss_payment_extension_suggestion_incentive(WP_REST_Request $request)
{
}
    /**
     * Get the payment extension suggestions (other) for the given location.
     *
     * @param string $location The location for which the suggestions are being fetched.
     *
     * @return array[]   The payment extension suggestions for the given location,
     *                   excluding the ones part of the main providers list.
     * @throws Exception If there are malformed or invalid suggestions.
     */
    private function get_extension_suggestions(string $location): array
{
}
    /**
     * General permissions check for payments settings REST API endpoint.
     *
     * @param WP_REST_Request $request The request for which the permission is checked.
     * @return bool|WP_Error True if the current user has the capability, otherwise an "Unauthorized" error or False if no error is available for the request method.
     */
    private function check_permissions(WP_REST_Request $request)
{
}
    /**
     * Validate the location argument.
     *
     * @param mixed           $value   Value of the argument.
     * @param WP_REST_Request $request The current request object.
     *
     * @return WP_Error|true True if the location argument is valid, otherwise a WP_Error object.
     */
    private function check_location_arg($value, WP_REST_Request $request)
{
}
    /**
     * Validate the providers order map argument.
     *
     * @param mixed $value Value of the argument.
     *
     * @return WP_Error|true True if the providers order map argument is valid, otherwise a WP_Error object.
     */
    private function check_providers_order_map_arg($value)
{
}
    /**
     * Sanitize the providers ordering argument.
     *
     * @param array $value Value of the argument.
     *
     * @return array
     */
    private function sanitize_providers_order_arg(array $value): array
{
}
    /**
     * Prepare the response for the GET payment providers request.
     *
     * @param array $response The response to prepare.
     *
     * @return array The prepared response.
     */
    private function prepare_payment_providers_response(array $response): array
{
}
    /**
     * Recursively prepare the response items for the GET payment providers request.
     *
     * @param mixed $response_item The response item to prepare.
     * @param array $schema        The schema to use for preparing the response.
     *
     * @return mixed The prepared response item.
     */
    private function prepare_payment_providers_response_recursive($response_item, array $schema)
{
}
    /**
     * Add links to providers list items.
     *
     * @param array $providers The providers list.
     *
     * @return array The providers list with added links.
     */
    private function add_provider_links(array $providers): array
{
}
    /**
     * Get the schema for the GET payment providers request.
     *
     * @return array[]
     */
    private function get_schema_for_get_payment_providers(): array
{
}
    /**
     * Get the schema for a payment provider.
     *
     * @return array The schema for a payment provider.
     */
    private function get_schema_for_payment_provider(): array
{
}
    /**
     * Get the schema for a suggestion.
     *
     * @return array The schema for a suggestion.
     */
    private function get_schema_for_suggestion(): array
{
}
}