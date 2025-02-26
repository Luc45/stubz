<?php

namespace ;

/**
 * This class adds actions to track usage of WooCommerce Orders.
 */
class WC_Orders_Tracking
{
    /**
     * Init tracking.
     */
    public function init()
    {
        // stub
    }

    /**
     * Send a track event when on the Order Listing page, and search results are being displayed.
     *
     * @deprecated 8.6.0
     *
     * @param array  $order_ids Array of order_ids that are matches for the search.
     * @param string $term The string that was used in the search.
     * @param array  $search_fields Fields that were used in the original search.
     */
    public function track_order_search($order_ids, $term, $search_fields)
    {
        // stub
    }

    /**
     * Send a track event when on the Order Listing page, and search results are being displayed.
     *
     * @since 8.6.0
     */
    public function track_search_in_orders_list()
    {
        // stub
    }

    /**
     * Send a Tracks event when the Orders page is viewed.
     */
    public function track_orders_view()
    {
        // stub
    }

    /**
     * Send a Tracks event when an order status is changed.
     *
     * @param int    $id Order id.
     * @param string $previous_status the old WooCommerce order status.
     * @param string $next_status the new WooCommerce order status.
     */
    public function track_order_status_change($id, $previous_status, $next_status)
    {
        // stub
    }

    /**
     * Send a Tracks event when an order date is changed.
     *
     * @param int $id Order id.
     */
    public function track_created_date_change($id)
    {
        // stub
    }

    /**
     * Track order actions taken.
     *
     * @param int $order_id Order ID.
     */
    public function track_order_action($order_id)
    {
        // stub
    }

    /**
     * Track "add order" button on the Edit Order screen.
     */
    public function track_add_order_from_edit()
    {
        // stub
    }

    /**
     * Adds the tracking scripts for product setting pages.
     */
    public function possibly_add_order_tracking_scripts()
    {
        // stub
    }

}

