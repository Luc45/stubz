<?php

namespace Automattic\WooCommerce\Blocks\Domain\Services;

/**
 * Service class for adding DraftOrder functionality to WooCommerce core.
 *
 * Sets up all logic related to the Checkout Draft Orders service
 *
 * @internal
 */
class DraftOrders
{
    const DB_STATUS = 'wc-checkout-draft';
    const STATUS = 'checkout-draft';
    /**
     * Constructor
     *
     * @param Package $package An instance of the package class.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Domain\Package $package)
    {
    }
    /**
     * Set all hooks related to adding Checkout Draft order functionality to Woo Core.
     */
    public function init()
    {
    }
    /**
     * Installation related logic for Draft order functionality.
     *
     * @internal
     */
    public function install()
    {
    }
    /**
     * Maybe create cron events.
     */
    protected function maybe_create_cronjobs()
    {
    }
    /**
     * Register custom order status for orders created via the API during checkout.
     *
     * Draft order status is used before payment is attempted, during checkout, when a cart is converted to an order.
     *
     * @param array $statuses Array of statuses.
     * @internal
     * @return array
     */
    public function register_draft_order_status(array $statuses)
    {
    }
    /**
     * Register custom order post status for orders created via the API during checkout.
     *
     * @param array $statuses Array of statuses.
     * @internal
     * @return array
     */
    public function register_draft_order_post_status(array $statuses)
    {
    }
    /**
     * Remove draft status from the 'status' argument of an $args array.
     *
     * @param array $args Array of arguments containing statuses in the status key.
     * @internal
     * @return array
     */
    public function delete_draft_order_post_status_from_args($args)
    {
    }
    /**
     * Append draft status to a list of statuses.
     *
     * @param array $statuses Array of statuses.
     * @internal
     * @return array
     */
    public function append_draft_order_post_status($statuses)
    {
    }
    /**
     * Delete draft orders older than a day in batches of 20.
     *
     * Ran on a daily cron schedule.
     *
     * @internal
     */
    public function delete_expired_draft_orders()
    {
    }
}