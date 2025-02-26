<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * MarketingCampaignTypes Controller.
 *
 * @internal
 * @extends WC_REST_Controller
 * @since x.x.x
 */
class MarketingCampaignTypes extends \WC_REST_Controller
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
    protected $rest_base = 'marketing/campaign-types';

    /**
     * Register routes.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Retrieves the query params for the collections.
     *
     * @return array Query parameters for the collection.
     */
    public function get_collection_params()
    {
        // stub
    }

    /**
     * Check whether a given request has permission to view marketing campaigns.
     *
     * @param WP_REST_Request $request Full details about the request.
     *
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
    {
        // stub
    }

    /**
     * Returns an aggregated array of marketing campaigns for all active marketing channels.
     *
     * @param WP_REST_Request $request Request data.
     *
     * @return WP_Error|WP_REST_Response
     */
    public function get_items($request)
    {
        // stub
    }

    /**
     * Prepares the item for the REST response.
     *
     * @param MarketingCampaignType $item    WordPress representation of the item.
     * @param WP_REST_Request       $request Request object.
     *
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function prepare_item_for_response($item, $request)
    {
        // stub
    }

    /**
     * Retrieves the item's schema, conforming to JSON Schema.
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
        // stub
    }

}

