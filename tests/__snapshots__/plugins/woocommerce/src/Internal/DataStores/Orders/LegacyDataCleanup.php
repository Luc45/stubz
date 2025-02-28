<?php

namespace Automattic\WooCommerce\Internal\DataStores\Orders;

/**
 * This class handles the background process in charge of cleaning up legacy data for orders when HPOS is authoritative.
 */
class LegacyDataCleanup implements \Automattic\WooCommerce\Internal\BatchProcessing\BatchProcessorInterface
{
    /**
     * Option name for this feature.
     *
     * @deprecated 9.1.0
     */
    public const OPTION_NAME = 'woocommerce_hpos_legacy_data_cleanup_in_progress';
    /**
     * The default number of orders to process per batch.
     */
    /**
     * Class initialization, invoked by the DI container.
     *
     * @param BatchProcessingController $batch_processing  The batch processing controller to use.
     * @param LegacyDataHandler         $legacy_handler    Legacy order data handler instance.
     * @param DataSynchronizer          $data_synchronizer Data synchronizer instance.
     * @internal
     */
    final public function init(Automattic\WooCommerce\Internal\BatchProcessing\BatchProcessingController $batch_processing, Automattic\WooCommerce\Internal\DataStores\Orders\LegacyDataHandler $legacy_handler, Automattic\WooCommerce\Internal\DataStores\Orders\DataSynchronizer $data_synchronizer)
{
}
    /**
     * A user friendly name for this process.
     *
     * @return string Name of the process.
     */
    public function get_name(): string
{
}
    /**
     * A user friendly description for this process.
     *
     * @return string Description.
     */
    public function get_description(): string
{
}
    /**
     * Get total number of pending records that require update.
     *
     * @return int Number of pending records.
     */
    public function get_total_pending_count(): int
{
}
    /**
     * Returns the batch with records that needs to be processed for a given size.
     *
     * @param int $size Size of the batch.
     * @return array Batch of records.
     */
    public function get_next_batch_to_process(int $size): array
{
}
    /**
     * Process data for current batch.
     *
     * @param array $batch Batch details.
     */
    public function process_batch(array $batch): void
{
}
    /**
     * Default batch size to use.
     *
     * @return int Default batch size.
     */
    public function get_default_batch_size(): int
{
}
    /**
     * Determine whether the cleanup process can be initiated. Legacy data cleanup requires HPOS to be authoritative and
     * compatibility mode to be disabled.
     *
     * @return boolean TRUE if the cleanup process can be enabled, FALSE otherwise.
     */
    public function can_run()
{
}
    /**
     * Whether the user has initiated the cleanup process.
     *
     * @return boolean TRUE if the user has initiated the cleanup process, FALSE otherwise.
     */
    public function is_flag_set()
{
}
    /**
     * Sets the flag that indicates that the cleanup process should be initiated.
     *
     * @param boolean $enabled TRUE if the process should be initiated, FALSE if it should be canceled.
     * @return boolean Whether the legacy data cleanup was initiated or not.
     */
    public function toggle_flag(bool $enabled): bool
{
}
    /**
     * Returns an array in format required by 'woocommerce_debug_tools' to register the cleanup tool in WC.
     *
     * @return array Tools entries to register with WC.
     */
    public function get_tools_entries()
{
}
}