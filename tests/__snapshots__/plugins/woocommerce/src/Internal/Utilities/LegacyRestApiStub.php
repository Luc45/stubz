<?php

namespace Automattic\WooCommerce\Internal\Utilities;

/**
 * The Legacy REST API was removed in WooCommerce 9.0 and is now available as a dedicated extension.
 * A stub is kept in WooCommerce core that acts when the extension is not installed and has two purposes:
 *
 * 1. Return a "The WooCommerce API is disabled on this site" error for any request to the Legacy REST API endpoints.
 *
 * 2. Provide the not-endpoint related utility methods that were previously supplied by the WC_API class,
 *    this is achieved by setting the value of WooCommerce::api (typically accessed via 'WC()->api') to an instance of this class.
 *
 * DO NOT add any additional public method to this class unless the method existed with the same signature in the old WC_API class.
 *
 * See: https://developer.woocommerce.com/2023/10/03/the-legacy-rest-api-will-move-to-a-dedicated-extension-in-woocommerce-9-0/
 */
class LegacyRestApiStub
{
    /**
     * The instance of RestApiUtil to use.
     *
     * @var RestApiUtil
     */
    private Automattic\WooCommerce\Utilities\RestApiUtil $rest_api_util;

    /**
     * Set up the Legacy REST API endpoints stub.
     */
    public function register()
{
}
    /**
     * Initialize the class dependencies.
     *
     * @internal
     * @param RestApiUtil $rest_api_util The instance of RestApiUtil to use.
     */
    final public function init(Automattic\WooCommerce\Utilities\RestApiUtil $rest_api_util)
{
}
    /**
     * Add the necessary rewrite rules for the Legacy REST API
     * (either the dedicated extension if it's installed, or the stub otherwise).
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public static function add_rewrite_rules_for_legacy_rest_api_stub()
{
}
    /**
     * Add the necessary request query variables for the Legacy REST API
     * (either the dedicated extension if it's installed, or the stub otherwise).
     *
     * @param array $vars The query variables array to extend.
     * @return array The extended query variables array.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public static function add_query_vars_for_legacy_rest_api_stub($vars)
{
}
    /**
     * Process an incoming request for the Legacy REST API.
     *
     * If the dedicated Legacy REST API extension is installed and active, this method does nothing.
     * Otherwise it returns a "The WooCommerce API is disabled on this site" error,
     * unless the request contains a "wc-api" variable and the appropriate
     * "woocommerce_api_*" hook is set.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public static function parse_legacy_rest_api_request()
{
}
    /**
     * Process a "wc-api" variable if present in the query, by triggering the appropriate hooks.
     */
    private static function maybe_process_wc_api_query_var()
{
}
    /**
     * Get data from a WooCommerce API endpoint.
     * This method used to be part of the WooCommerce Legacy REST API.
     *
     * @since 9.1.0
     *
     * @param string $endpoint Endpoint.
     * @param array  $params Params to pass with request.
     * @return array|\WP_Error
     */
    public function get_endpoint_data($endpoint, $params = array())
{
}
}