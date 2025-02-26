<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * MarketingCampaigns Controller.
 *
 * @internal
 * @extends WC_REST_Controller
 * @since x.x.x
 */
class MarketingCampaigns
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
    protected $rest_base = 'marketing/campaigns';

    /**
     * Register routes.
     */
    public function register_routes()
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
     * Get formatted price based on Price type.
     *
     * This uses plugins/woocommerce/i18n/currency-info.php and plugins/woocommerce/i18n/locale-info.php to get option object based on $price->currency.
     *
     * Example:
     *
     * - When $price->currency is 'USD' and $price->value is '1000', it should return '$1000.00'.
     * - When $price->currency is 'JPY' and $price->value is '1000', it should return '¥1,000'.
     * - When $price->currency is 'AED' and $price->value is '1000', it should return '5.000,00 د.إ'.
     *
     * @param Price $price Price object.
     * @return String formatted price.
     */
    private function get_formatted_price($price)
    {
        // stub
    }

    /**
     * Prepares the item for the REST response.
     *
     * @param MarketingCampaign $item    WordPress representation of the item.
     * @param WP_REST_Request   $request Request object.
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

    /**
     * Retrieves the query params for the collections.
     *
     * @return array Query parameters for the collection.
     */
    public function get_collection_params()
    {
        // stub
    }

}

