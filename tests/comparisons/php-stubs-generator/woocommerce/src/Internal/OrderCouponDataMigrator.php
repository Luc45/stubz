<?php

namespace Automattic\WooCommerce\Internal;

/**
 * This class is intended to be used with BatchProcessingController and converts verbose
 * 'coupon_data' metadata entries in coupon line items (corresponding to coupons applied to orders)
 * into simplified 'coupon_info' entries. See WC_Coupon::get_short_info.
 *
 * Additionally, this class manages the "Convert order coupon data" tool.
 */
class OrderCouponDataMigrator implements \Automattic\WooCommerce\Internal\BatchProcessing\BatchProcessorInterface, \Automattic\WooCommerce\Internal\RegisterHooksInterface
{
    /**
     * Register hooks for the class.
     */
    public function register()
    {
    }
    /**
     * Get a user-friendly name for this processor.
     *
     * @return string Name of the processor.
     */
    public function get_name() : string
    {
    }
    /**
     * Get a user-friendly description for this processor.
     *
     * @return string Description of what this processor does.
     */
    public function get_description() : string
    {
    }
    /**
     * Get the total number of pending items that require processing.
     *
     * @return int Number of items pending processing.
     */
    public function get_total_pending_count() : int
    {
    }
    /**
     * Returns the next batch of items that need to be processed.
     * A batch in this context is a list of 'meta_id' values from the wp_woocommerce_order_itemmeta table.
     *
     * @param int $size Maximum size of the batch to be returned.
     *
     * @return array Batch of items to process, containing $size or less items.
     */
    public function get_next_batch_to_process(int $size) : array
    {
    }
    /**
     * Process data for the supplied batch. See the convert_item method.
     *
     * @throw \Exception Something went wrong while processing the batch.
     *
     * @param array $batch Batch to process, as returned by 'get_next_batch_to_process'.
     */
    public function process_batch(array $batch) : void
    {
    }
    /**
     * Default (preferred) batch size to pass to 'get_next_batch_to_process'.
     *
     * @return int Default batch size.
     */
    public function get_default_batch_size() : int
    {
    }
    /**
     * Add the tool to start or stop the background process that converts order coupon metadata entries.
     *
     * @param array $tools Old tools array.
     * @return array Updated tools array.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function handle_woocommerce_debug_tools(array $tools) : array
    {
    }
    /**
     * Start the background process for coupon data conversion.
     *
     * @return string Informative string to show after the tool is triggered in UI.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function enqueue() : string
    {
    }
    /**
     * Stop the background process for coupon data conversion.
     *
     * @return string Informative string to show after the tool is triggered in UI.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function dequeue() : string
    {
    }
}