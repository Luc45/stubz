<?php

namespace Automattic\WooCommerce\Database\Migrations\CustomOrderTable;

/**
 * CLI tool for migrating order data to/from custom table.
 *
 * Credits https://github.com/liquidweb/woocommerce-custom-orders-table/blob/develop/includes/class-woocommerce-custom-orders-table-cli.php.
 *
 * Class CLIRunner
 */
class CLIRunner extends \
{
    /**
     * CustomOrdersTableController instance.
     *
     * @var CustomOrdersTableController
     */
    private $controller = null;

    /**
     * DataSynchronizer instance.
     *
     * @var DataSynchronizer;
     */
    private $synchronizer = null;

    /**
     * PostsToOrdersMigrationController instance.
     *
     * @var PostsToOrdersMigrationController
     */
    private $post_to_cot_migrator = null;

    /**
     * Init method, invoked by DI container.
     *
     * @param CustomOrdersTableController      $controller Instance.
     * @param DataSynchronizer                 $synchronizer Instance.
     * @param PostsToOrdersMigrationController $posts_to_orders_migration_controller Instance.
     *
     * @internal
     */
    public final function init(Automattic\WooCommerce\Internal\DataStores\Orders\CustomOrdersTableController $controller, Automattic\WooCommerce\Internal\DataStores\Orders\DataSynchronizer $synchronizer, Automattic\WooCommerce\Database\Migrations\CustomOrderTable\PostsToOrdersMigrationController $posts_to_orders_migration_controller)
    {
        // stub
    }

    /**
     * Registers commands for CLI.
     */
    public function register_commands()
    {
        // stub
    }

    /**
     * Check if the COT feature is enabled.
     *
     * @param bool $log Optionally log a error message.
     *
     * @return bool Whether the COT feature is enabled.
     */
    private function is_enabled($log = true): bool
    {
        // stub
    }

    /**
     * Free some in-memory usage.
     */
    private function free_in_memory_usage()
    {
        // stub
    }

    /**
     * Count how many orders have yet to be migrated into the custom orders table.
     *
     * ## EXAMPLES
     *
     *     wp wc hpos count_unmigrated
     *
     * @param array $args Positional arguments passed to the command.
     *
     * @param array $assoc_args Associative arguments (options) passed to the command.
     *
     * @return int The number of orders to be migrated.*
     */
    public function count_unmigrated($args = array(
), $assoc_args = array(
)): int
    {
        // stub
    }

    /**
     * Sync order data between the custom order tables and the core WordPress post tables.
     *
     * ## OPTIONS
     *
     * [--batch-size=<batch-size>]
     * : The number of orders to process in each batch.
     * ---
     * default: 500
     * ---
     *
     * ## EXAMPLES
     *
     *     wp wc hpos sync --batch-size=500
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    public function sync($args = array(
), $assoc_args = array(
))
    {
        // stub
    }

    /**
     * [Deprecated] Use `wp wc hpos sync` instead.
     * Copy order data into the postmeta table.
     *
     * Note that this could dramatically increase the size of your postmeta table, but is recommended
     * if you wish to stop using the custom orders table plugin.
     *
     * ## OPTIONS
     *
     * [--batch-size=<batch-size>]
     * : The number of orders to process in each batch. Passing a value of 0 will disable batching.
     * ---
     * default: 500
     * ---
     *
     * ## EXAMPLES
     *
     *     # Copy all order data into the post meta table, 500 posts at a time.
     *     wp wc cot migrate --batch-size=500
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    public function migrate(array $args = array(
), array $assoc_args = array(
))
    {
        // stub
    }

    /**
     * Verify migrated order data with original posts data.
     *
     * ## OPTIONS
     *
     * [--batch-size=<batch-size>]
     * : The number of orders to verify in each batch.
     * ---
     * default: 500
     * ---
     *
     * [--start-from=<order_id>]
     * : Order ID to start from.
     * ---
     * default: 0
     * ---
     *
     * [--end-at=<order_id>]
     * : Order ID to end at.
     * ---
     * default: -1
     * ---
     *
     * [--verbose]
     * : Whether to output errors as they happen in batch, or output them all together at the end.
     * ---
     * default: false
     * ---
     *
     * [--order-types]
     * : Comma-separated list of order types that needs to be verified. For example, --order-types=shop_order,shop_order_refund
     * ---
     * default: Output of function `wc_get_order_types( 'cot-migration' )`
     *
     * [--re-migrate]
     * : Attempt to re-migrate orders that failed verification. You should only use this option when you have never run the site with HPOS as authoritative source of order data yet, or you have manually checked the reported errors, otherwise, you risk stale data overwriting the more recent data.
     * default: false
     *
     * ## EXAMPLES
     *
     *     # Verify migrated order data, 500 orders at a time.
     *     wp wc hpos verify_cot_data --batch-size=500 --start-from=0 --end-at=10000
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    public function verify_cot_data($args = array(
), $assoc_args = array(
))
    {
        // stub
    }

    /**
     * Helper method to get count for orders needing verification.
     *
     * @param int   $order_id_start Order ID to start from.
     * @param int   $order_id_end Order ID to end at.
     * @param array $order_types List of order types to verify.
     * @param bool  $log Whether to also log an error message.
     *
     * @return int Order count.
     */
    private function get_verify_order_count(int $order_id_start, int $order_id_end, array $order_types, bool $log = true): int
    {
        // stub
    }

    /**
     * Verify meta data as part of verifying the order object.
     *
     * @param array $order_ids Order IDs.
     * @param array $failed_ids Array for storing failed IDs.
     *
     * @return array Failed IDs with meta details.
     */
    private function verify_meta_data(array $order_ids, array $failed_ids): array
    {
        // stub
    }

    /**
     * Helper method to normalize response from meta queries into order_id > meta_key > meta_values.
     *
     * @param array $data Data fetched from meta queries.
     *
     * @return array Normalized data.
     */
    private function normalize_raw_meta_data(array $data): array
    {
        // stub
    }

    /**
     * Set custom order tables (HPOS) to authoritative if: 1). HPOS and posts tables are in sync, or, 2). This is a new shop (in this case also create tables). Additionally, all installed WC plugins should be compatible.
     *
     * ## OPTIONS
     *
     * [--for-new-shop]
     * : Enable only if this is a new shop, irrespective of whether tables are in sync.
     * ---
     * default: false
     * ---
     *
     * [--with-sync]
     * : Also enables sync (if it's currently not enabled).
     * ---
     * default: false
     * ---
     *
     * [--ignore-plugin-compatibility]
     * : Enable even if there are active plugins that are incompatible with HPOS.
     *
     * ### EXAMPLES
     *
     *      # Enable HPOS on new shops.
     *      wp wc hpos enable --for-new-shop
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     *
     * @return void
     */
    public function enable(array $args = array(
), array $assoc_args = array(
))
    {
        // stub
    }

    /**
     * Disables custom order tables (HPOS) and posts to authoritative if HPOS and post tables are in sync.
     *
     * ## OPTIONS
     *
     * [--with-sync]
     * : Also disables sync (if it's currently enabled).
     * ---
     * default: false
     * ---
     *
     * ### EXAMPLES
     *
     *  # Disable HPOS.
     *  wp wc hpos disable
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    public function disable($args, $assoc_args)
    {
        // stub
    }

    /**
     * When HPOS is enabled, this command lets you remove redundant data from the postmeta table for migrated orders.
     *
     * ## OPTIONS
     *
     * <all|id|range>...
     * : ID or range of orders to clean up.
     *
     * [--batch-size=<batch-size>]
     * : Number of orders to process per batch. Applies only to cleaning up of 'all' orders.
     * ---
     * default: 500
     * ---
     *
     * [--force]
     * : When true, post meta will be cleaned up even if the post appears to have been updated more recently than the order.
     * ---
     * default: false
     * ---
     *
     * ## EXAMPLES
     *
     *    # Cleanup post data for order 314.
     *    $ wp wc hpos cleanup 314
     *
     *    # Cleanup postmeta for orders with IDs between 10 and 100 and order 314.
     *    $ wp wc hpos cleanup 10-100 314
     *
     *    # Cleanup postmeta for all orders.
     *    wp wc hpos cleanup all
     *
     *    # Cleanup postmeta for all orders with a batch size of 200 (instead of the default 500).
     *    wp wc hpos cleanup all --batch-size=200
     *
     * @param array $args       Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     * @return void
     */
    public function cleanup_post_data(array $args = array(
), array $assoc_args = array(
))
    {
        // stub
    }

    /**
     * Displays a summary of HPOS situation on this site.
     *
     * @since 8.6.0
     *
     * @param array $args       Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    public function status(array $args = array(
), array $assoc_args = array(
))
    {
        // stub
    }

    /**
     * Displays differences for an order between the HPOS and post datastore.
     *
     * ## OPTIONS
     *
     * <order_id>
     * :The ID of the order.
     *
     * [--format=<format>]
     * : Render output in a particular format.
     * ---
     * default: table
     * options:
     *   - table
     *   - csv
     *   - json
     *   - yaml
     * ---
     *
     * ## EXAMPLES
     *
     *    # Find differences between datastores for order 123.
     *    $ wp wc hpos diff 123
     *
     *    # Find differences for order 123 and display as CSV.
     *    $ wp wc hpos diff 123 --format=csv
     *
     * @since 8.6.0
     *
     * @param array $args       Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    public function diff(array $args = array(
), array $assoc_args = array(
))
    {
        // stub
    }

    /**
     * Backfills an order from either the HPOS or the posts datastore.
     *
     * ## OPTIONS
     *
     * <order_id>
     * : The ID of the order.
     *
     * --from=<datastore>
     * : Source datastore. Either 'hpos' or 'posts'.
     * ---
     * options:
     *   - hpos
     *   - posts
     * ---
     *
     * --to=<datastore>
     * : Destination datastore. Either 'hpos' or 'posts'.
     * ---
     * options:
     *   - hpos
     *   - posts
     * ---
     *
     * [--meta_keys=<meta_keys>]
     * : Comma-separated list of meta keys to backfill.
     *
     * [--props=<props>]
     * : Comma-separated list of order properties to backfill.
     *
     * @since 8.6.0
     *
     * @param array $args       Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    public function backfill(array $args = array(
), array $assoc_args = array(
))
    {
        // stub
    }

    /**
     * Show the list of WooCommerce-aware plugins known to be compatible, incompatible or without compatibility declaration for HPOS. Note that inactive plugins will always be listed in the "uncertain" list.
     *
     * [--include-inactive]
     * : Include inactive plugins in the list.
     *
     * [--display-filenames]
     * : Print plugin file names instead of plugin names.
     *
     * @since 9.1.0
     *
     * @param array $args       Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    public function compatibility_info(array $args = array(
), array $assoc_args = array(
)): void
    {
        // stub
    }

    /**
     * Get the printable names for a set of plugins given their file names.
     *
     * @param array $plugins The plugin file names.
     * @param bool  $display_filenames True to simply return the sorted list of plugin file names.
     * @return array A sorted array of plugin names or file names.
     */
    private function get_printable_plugin_names(array $plugins, bool $display_filenames): array
    {
        // stub
    }

    /**
     * Print a list of plugin names.
     *
     * @param array $plugins The names to print.
     */
    private function print_plugin_names(array $plugins): void
    {
        // stub
    }

    /**
     * Show a log message using the WP_CLI text colorization feature.
     *
     * @param string $text Text to show.
     */
    private function log(string $text)
    {
        // stub
    }

    /**
     * Enables compatibility mode, which keeps the HPOS and posts datastore in sync.
     *
     * @since 9.1.0
     */
    public function enable_compat_mode(): void
    {
        // stub
    }

    /**
     * Disables compatibility mode, which keeps the HPOS and posts datastore in sync.
     *
     * @since 9.1.0
     */
    public function disable_compat_mode(): void
    {
        // stub
    }

    /**
     * Toggles compatibility mode on or off.
     *
     * @since 9.1.0
     *
     * @param bool $enabled TRUE to enable compatibility mode, FALSE to disable.
     */
    private function toggle_compat_mode(bool $enabled): void
    {
        // stub
    }

}

