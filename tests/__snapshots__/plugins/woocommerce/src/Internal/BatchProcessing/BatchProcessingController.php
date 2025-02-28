<?php

namespace Automattic\WooCommerce\Internal\BatchProcessing;

/**
 * Class BatchProcessingController
 *
 * @package Automattic\WooCommerce\Internal\BatchProcessing.
 */
class BatchProcessingController
{
    public const WATCHDOG_ACTION_NAME = 'wc_schedule_pending_batch_processes';
    public const PROCESS_SINGLE_BATCH_ACTION_NAME = 'wc_run_batch_process';
    public const ENQUEUED_PROCESSORS_OPTION_NAME = 'wc_pending_batch_processes';
    public const ACTION_GROUP = 'wc_batch_processes';
    public const FAILING_PROCESS_MAX_ATTEMPTS_DEFAULT = 5;
    /**
     * BatchProcessingController constructor.
     *
     * Schedules the necessary actions to process batches.
     */
    public function __construct()
{
}
    /**
     * Enqueue a processor so that it will get batch processing requests from within scheduled actions.
     *
     * @param string $processor_class_name Fully qualified class name of the processor, must implement `BatchProcessorInterface`.
     */
    public function enqueue_processor(string $processor_class_name): void
{
}
    /**
     * Check if a batch processing action is already scheduled for a given processor.
     * Differs from `as_has_scheduled_action` in that this excludes actions in progress.
     *
     * @param string $processor_class_name Fully qualified class name of the batch processor.
     *
     * @return bool True if a batch processing action is already scheduled for the processor.
     */
    public function is_scheduled(string $processor_class_name): bool
{
}
    /**
     * Helper method to get list of all the enqueued processors.
     *
     * @return array List (of string) of the class names of the enqueued processors.
     */
    public function get_enqueued_processors(): array
{
}
    /**
     * Check if a particular processor is enqueued.
     *
     * @param string $processor_class_name Fully qualified class name of the processor.
     *
     * @return bool True if the processor is enqueued.
     */
    public function is_enqueued(string $processor_class_name): bool
{
}
    /**
     * Dequeue and de-schedule a processor instance so that it won't be processed anymore.
     *
     * @param string $processor_class_name Fully qualified class name of the processor.
     * @return bool True if the processor has been dequeued, false if the processor wasn't enqueued (so nothing has been done).
     */
    public function remove_processor(string $processor_class_name): bool
{
}
    /**
     * Dequeues and de-schedules all the processors.
     */
    public function force_clear_all_processes(): void
{
}
    /**
     * Log an error that happened while processing a batch.
     *
     * @param \Exception              $error Exception object to log.
     * @param BatchProcessorInterface $batch_processor Batch processor instance.
     * @param array                   $batch Batch that was being processed.
     */
    protected function log_error(Exception $error, Automattic\WooCommerce\Internal\BatchProcessing\BatchProcessorInterface $batch_processor, array $batch): void
{
}
}