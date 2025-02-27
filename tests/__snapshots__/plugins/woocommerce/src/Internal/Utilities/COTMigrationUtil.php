<?php

namespace Automattic\WooCommerce\Internal\Utilities;

/**
 * Utility functions meant for helping in migration from posts tables to custom order tables.
 */
class COTMigrationUtil
{
    /**
     * Custom order table controller.
     *
     * @var CustomOrdersTableController
     */
    private $table_controller = null;

    /**
     * Data synchronizer.
     *
     * @var DataSynchronizer
     */
    private $data_synchronizer = null;

    /**
     * Initialize method, invoked by the DI container.
     *
     * @internal Automatically called by the container.
     * @param CustomOrdersTableController $table_controller Custom order table controller.
     * @param DataSynchronizer            $data_synchronizer Data synchronizer.
     *
     * @return void
     */
    public final function init(Automattic\WooCommerce\Internal\DataStores\Orders\CustomOrdersTableController $table_controller, Automattic\WooCommerce\Internal\DataStores\Orders\DataSynchronizer $data_synchronizer)
    {
        // stub
    }

    /**
     * Helper function to get screen name of orders page in wp-admin.
     *
     * @throws \Exception If called from outside of wp-admin.
     *
     * @return string
     */
    public function get_order_admin_screen(): string
    {
        // stub
    }

    /**
     * Helper function to get whether custom order tables are enabled or not.
     *
     * @return bool
     */
    private function custom_orders_table_usage_is_enabled(): bool
    {
        // stub
    }

    /**
     * Checks if posts and order custom table sync is enabled and there are no pending orders.
     *
     * @return bool
     */
    public function is_custom_order_tables_in_sync(): bool
    {
        // stub
    }

    /**
     * Gets value of a meta key from WC_Data object if passed, otherwise from the post object.
     * This helper function support backward compatibility for meta box functions, when moving from posts based store to custom tables.
     *
     * @param WP_Post|null  $post Post object, meta will be fetched from this only when `$data` is not passed.
     * @param \WC_Data|null $data WC_Data object, will be preferred over post object when passed.
     * @param string        $key Key to fetch metadata for.
     * @param bool          $single Whether metadata is single.
     *
     * @return array|mixed|string Value of the meta key.
     */
    public function get_post_or_object_meta(WP_Post|null $post, WC_Data|null $data, string $key, bool $single)
    {
        // stub
    }

    /**
     * Helper function to initialize the global $theorder object, mostly used during order meta boxes rendering.
     *
     * @param WC_Order|WP_Post $post_or_order_object Post or order object.
     *
     * @return bool|WC_Order|WC_Order_Refund WC_Order object.
     */
    public function init_theorder_object($post_or_order_object)
    {
        // stub
    }

    /**
     * Helper function to get ID from a post or order object.
     *
     * @param WP_Post/WC_Order $post_or_order_object WP_Post/WC_Order object to get ID for.
     *
     * @return int Order or post ID.
     */
    public function get_post_or_order_id($post_or_order_object): int
    {
        // stub
    }

    /**
     * Checks if passed id, post or order object is a WC_Order object.
     *
     * @param int|WP_Post|WC_Order $order_id Order ID, post object or order object.
     * @param string[]             $types    Types to match against.
     *
     * @return bool Whether the passed param is an order.
     */
    public function is_order($order_id, array $types = array (
  0 => 'shop_order',
)): bool
    {
        // stub
    }

    /**
     * Returns type pf passed id, post or order object.
     *
     * @param int|WP_Post|WC_Order $order_id Order ID, post object or order object.
     *
     * @return string|null Type of the order.
     */
    public function get_order_type($order_id)
    {
        // stub
    }

    /**
     * Get the name of the database table that's currently in use for orders.
     *
     * @return string
     */
    public function get_table_for_orders()
    {
        // stub
    }

    /**
     * Get the name of the database table that's currently in use for orders.
     *
     * @return string
     */
    public function get_table_for_order_meta()
    {
        // stub
    }

}