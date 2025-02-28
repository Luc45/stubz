<?php

namespace Automattic\WooCommerce\Internal\ProductDownloads\ApprovedDirectories;

/**
 * Ensures that any downloadable files have a corresponding entry in the Approved Product
 * Download Directories list.
 */
class Synchronize
{
    /**
     * Scheduled action hook used to facilitate scanning the product catalog for downloadable products.
     */
    public const SYNC_TASK = 'woocommerce_download_dir_sync';
    /**
     * The group under which synchronization tasks run (our standard 'woocommerce-db-updates' group).
     */
    public const SYNC_TASK_GROUP = 'woocommerce-db-updates';
    /**
     * Used to track progress throughout the sync process.
     */
    public const SYNC_TASK_PAGE = 'wc_product_download_dir_sync_page';
    /**
     * Used to record an estimation of progress on the current synchronization process. 0 means 0%,
     * 100 means 100%.
     *
     * @param int
     */
    public const SYNC_TASK_PROGRESS = 'wc_product_download_dir_sync_progress';
    /**
     * Number of downloadable products to be processed in each atomic sync task.
     */
    public const SYNC_TASK_BATCH_SIZE = 20;
    /**
     * Sets up our checks and controls for downloadable asset URLs, as appropriate for
     * the current approved download directory mode.
     *
     * @internal
     * @throws Exception If the WC_Queue instance cannot be obtained.
     *
     * @param Register $register The active approved download directories instance in use.
     */
    final public function init(Automattic\WooCommerce\Internal\ProductDownloads\ApprovedDirectories\Register $register)
{
}
    /**
     * Performs any work needed to add hooks and otherwise integrate with the wider system.
     */
    final public function init_hooks()
{
}
    /**
     * Initializes the Approved Download Directories feature, typically following an update or
     * during initial installation.
     *
     * @param bool $synchronize    Synchronize with existing product downloads. Not needed in a fresh installation.
     * @param bool $enable_feature Enable (default) or disable the feature.
     */
    public function init_feature(bool $synchronize = true, bool $enable_feature = true)
{
}
    /**
     * By default we add the woocommerce_uploads directory (file path plus web URL) to the list
     * of approved download directories.
     *
     * @throws Exception If the default directories cannot be added to the Approved List.
     */
    public function add_default_directories()
{
}
    /**
     * Starts the synchronization process.
     *
     * @return bool
     */
    public function start(): bool
{
}
    /**
     * Runs the synchronization task.
     */
    public function run()
{
}
    /**
     * Stops/cancels the current synchronization task.
     */
    public function stop()
{
}
    /**
     * Indicates if a synchronization of product download directories is in progress.
     *
     * @return bool
     */
    public function in_progress(): bool
{
}
    /**
     * Returns a value between 0 and 100 representing the percentage complete of the current sync.
     *
     * @return int
     */
    public function get_progress(): int
{
}
}