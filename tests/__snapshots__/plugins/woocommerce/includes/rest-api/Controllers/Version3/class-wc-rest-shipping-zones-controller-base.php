<?php

namespace ;

/**
 * REST API Shipping Zones base class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Controller
 */
abstract class WC_REST_Shipping_Zones_Controller_Base extends \WC_REST_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v2';

    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'shipping/zones';

    /**
     * Retrieve a Shipping Zone by it's ID.
     *
     * @param int $zone_id Shipping Zone ID.
     * @return WC_Shipping_Zone|WP_Error
     */
    protected function get_zone($zone_id)
    {
        // stub
    }

    /**
     * Check whether a given request has permission to read Shipping Zones.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
    {
        // stub
    }

    /**
     * Check if a given request has access to create Shipping Zones.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function create_item_permissions_check($request)
    {
        // stub
    }

    /**
     * Check whether a given request has permission to edit Shipping Zones.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function update_items_permissions_check($request)
    {
        // stub
    }

    /**
     * Check whether a given request has permission to delete Shipping Zones.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function delete_items_permissions_check($request)
    {
        // stub
    }

}

