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
     * Holds the Package instance
     *
     * @var Package
     */
    private $package = null;

    /**
     * Constructor
     *
     * @param Package $package An instance of the package class.
     */
    public function __construct(Automattic\WooCommerce\Blocks\Domain\Package $package)
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
     * Returns the properties of this post status for registration.
     *
     * @return array
     */
    private function get_post_status_properties()
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
    /**
     * Since it's possible for third party code to clobber the `$wp_post_statuses` global,
     * we need to do a final check here to make sure the draft post status is
     * registered with the global so that it is not removed by WP_Query status
     * validation checks.
     */
    private function ensure_draft_status_registered()
{
}
    /**
     * Asserts whether incoming order results are expected given the query
     * this service class executes.
     *
     * @param WC_Order[] $order_results The order results being asserted.
     * @param int        $expected_batch_size The expected batch size for the results.
     * @throws Exception If any assertions fail, an exception is thrown.
     */
    private function assert_order_results($order_results, $expected_batch_size)
{
}
}