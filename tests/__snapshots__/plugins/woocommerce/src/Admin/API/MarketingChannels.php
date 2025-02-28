<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * MarketingChannels Controller.
 *
 * @internal
 * @extends WC_REST_Controller
 * @since x.x.x
 */
class MarketingChannels extends \WC_REST_Controller
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
    protected $rest_base = 'marketing/channels';
    /**
     * Register routes.
     */
    public function register_routes()
{
}
    /**
     * Check whether a given request has permission to view marketing channels.
     *
     * @param WP_REST_Request $request Full details about the request.
     *
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
{
}
    /**
     * Return installed marketing channels.
     *
     * @param WP_REST_Request $request Request data.
     *
     * @return WP_Error|WP_REST_Response
     */
    public function get_items($request)
{
}
    /**
     * Prepares the item for the REST response.
     *
     * @param MarketingChannelInterface $item    WordPress representation of the item.
     * @param WP_REST_Request           $request Request object.
     *
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function prepare_item_for_response($item, $request)
{
}
    /**
     * Retrieves the item's schema, conforming to JSON Schema.
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
{
}
}