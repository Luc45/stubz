<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * ShippingPartnerSuggestions Controller.
 *
 * @internal
 * @extends WC_REST_Data_Controller
 */
class ShippingPartnerSuggestions extends \WC_REST_Data_Controller
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
    protected $rest_base = 'shipping-partner-suggestions';

    /**
     * Register routes.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Check if a given request has access to manage plugins.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_permission_check($request)
    {
        // stub
    }

    /**
     * Check if suggestions should be shown in the settings screen.
     *
     * @return bool
     */
    private function should_display()
    {
        // stub
    }

    /**
     * Return suggested shipping partners.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return \WP_Error|\WP_HTTP_Response|\WP_REST_Response
     */
    public function get_suggestions($request)
    {
        // stub
    }

    /**
     * Get the schema, conforming to JSON Schema.
     *
     * @return array
     */
    public static function get_suggestions_schema()
    {
        // stub
    }

}

