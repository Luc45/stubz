<?php

namespace Automattic\WooCommerce\Internal\DataStores\Orders;

/**
 * This class handles the background process in charge of cleaning up legacy data for orders when HPOS is authoritative.
 */
class LegacyDataCleanup extends \
{
    const OPTION_NAME = 'woocommerce_hpos_legacy_data_cleanup_in_progress';

    const BATCH_SIZE = 25;

    /**
     * The batch processing controller to use.
     *
     * @var BatchProcessingController
     */
    private $batch_processing = null;

    /**
     * The legacy handler to use for the actual cleanup.
     *
     * @var LegacyHandler
     */
    private $legacy_handler = null;

    /**
     * The data synchronizer object to use.
     *
     * @var DataSynchronizer
     */
    private $data_synchronizer = null;

    /**
     * Logger object to be used to log events.
     *
     * @var \WC_Logger
     */
    private $error_logger = null;

    /**
     * Class initialization, invoked by the DI container.
     *
     * @param BatchProcessingController $batch_processing  The batch processing controller to use.
     * @param LegacyDataHandler         $legacy_handler    Legacy order data handler instance.
     * @param DataSynchronizer          $data_synchronizer Data synchronizer instance.
     * @internal
     */
    public final function init(Automattic\WooCommerce\Internal\BatchProcessing\BatchProcessingController $batch_processing, Automattic\WooCommerce\Internal\DataStores\Orders\LegacyDataHandler $legacy_handler, Automattic\WooCommerce\Internal\DataStores\Orders\DataSynchronizer $data_synchronizer)
    {
        // stub
    }

    /**
     * A user friendly name for this process.
     *
     * @return string Name of the process.
     */
    public function get_name(): string
    {
        // stub
    }

    /**
     * A user friendly description for this process.
     *
     * @return string Description.
     */
    public function get_description(): string
    {
        // stub
    }

    /**
     * Get total number of pending records that require update.
     *
     * @return int Number of pending records.
     */
    public function get_total_pending_count(): int
    {
        // stub
    }

    /**
     * Returns the batch with records that needs to be processed for a given size.
     *
     * @param int $size Size of the batch.
     * @return array Batch of records.
     */
    public function get_next_batch_to_process(int $size): array
    {
        // stub
    }

    /**
     * Process data for current batch.
     *
     * @param array $batch Batch details.
     */
    public function process_batch(array $batch): void
    {
        // stub
    }

    /**
     * Default batch size to use.
     *
     * @return int Default batch size.
     */
    public function get_default_batch_size(): int
    {
        // stub
    }

    /**
     * Determine whether the cleanup process can be initiated. Legacy data cleanup requires HPOS to be authoritative and
     * compatibility mode to be disabled.
     *
     * @return boolean TRUE if the cleanup process can be enabled, FALSE otherwise.
     */
    public function can_run()
    {
        // stub
    }

    /**
     * Whether the user has initiated the cleanup process.
     *
     * @return boolean TRUE if the user has initiated the cleanup process, FALSE otherwise.
     */
    public function is_flag_set()
    {
        // stub
    }

    /**
     * Sets the flag that indicates that the cleanup process should be initiated.
     *
     * @param boolean $enabled TRUE if the process should be initiated, FALSE if it should be canceled.
     * @return boolean Whether the legacy data cleanup was initiated or not.
     */
    public function toggle_flag(bool $enabled): bool
    {
        // stub
    }

    /**
     * Returns an array in format required by 'woocommerce_debug_tools' to register the cleanup tool in WC.
     *
     * @return array Tools entries to register with WC.
     */
    public function get_tools_entries()
    {
        // stub
    }

    /**
     * Checks whether there are any orders in need of cleanup and cleanup can run.
     *
     * @return bool TRUE if there are orders in need of cleanup, FALSE otherwise.
     */
    private function orders_pending()
    {
        // stub
    }

}

