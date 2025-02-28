<?php

namespace Automattic\WooCommerce\Internal\ProductDownloads\ApprovedDirectories;

/**
 * Ensures that any downloadable files have a corresponding entry in the Approved Product
 * Download Directories list.
 */
class Synchronize
{
    const SYNC_TASK = 'woocommerce_download_dir_sync';

    const SYNC_TASK_GROUP = 'woocommerce-db-updates';

    const SYNC_TASK_PAGE = 'wc_product_download_dir_sync_page';

    const SYNC_TASK_PROGRESS = 'wc_product_download_dir_sync_progress';

    const SYNC_TASK_BATCH_SIZE = 20;

    /**
     * WC Queue.
     *
     * @var WC_Queue_Interface
     */
    private $queue = null;

    /**
     * Register of approved directories.
     *
     * @var Register
     */
    private $register = null;

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
     * Queries for the next batch of downloadable products, applying logic to ensure we only fetch those that actually
     * have downloadable files (a downloadable product can be created that does not have downloadable files and/or
     * downloadable files can be removed from existing downloadable products).
     *
     * @return array
     */
    private function get_next_set_of_downloadable_products(): array
{
}
    /**
     * Processes an individual downloadable product, adding the parent paths for any downloadable files to the
     * Approved Download Directories list.
     *
     * Any such paths will be added with the disabled flag set, because we want a site administrator to review
     * and approve first.
     *
     * @param WC_Product $product The product we wish to examine for downloadable file paths.
     */
    private function process_product(WC_Product $product)
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