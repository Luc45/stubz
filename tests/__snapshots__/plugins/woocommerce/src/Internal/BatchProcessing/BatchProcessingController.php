<?php

namespace Automattic\WooCommerce\Internal\BatchProcessing;

/**
 * Class BatchProcessingController
 *
 * @package Automattic\WooCommerce\Internal\BatchProcessing.
 */
class BatchProcessingController
{
    const WATCHDOG_ACTION_NAME = 'wc_schedule_pending_batch_processes';

    const PROCESS_SINGLE_BATCH_ACTION_NAME = 'wc_run_batch_process';

    const ENQUEUED_PROCESSORS_OPTION_NAME = 'wc_pending_batch_processes';

    const ACTION_GROUP = 'wc_batch_processes';

    const FAILING_PROCESS_MAX_ATTEMPTS_DEFAULT = 5;

    /**
     * Instance of WC_Logger class.
     *
     * @var \WC_Logger_Interface
     */
    private $logger = null;

    /**
     * BatchProcessingController constructor.
     *
     * Schedules the necessary actions to process batches.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Enqueue a processor so that it will get batch processing requests from within scheduled actions.
     *
     * @param string $processor_class_name Fully qualified class name of the processor, must implement `BatchProcessorInterface`.
     */
    public function enqueue_processor(string $processor_class_name): void
    {
        // stub
    }

    /**
     * Schedule the watchdog action.
     *
     * @param bool $with_delay Whether to delay the action execution. Should be true when rescheduling, false when enqueueing.
     * @param bool $unique     Whether to make the action unique.
     */
    private function schedule_watchdog_action(bool $with_delay = false, bool $unique = false): void
    {
        // stub
    }

    /**
     * Schedule a processing action for all the processors that are enqueued but not scheduled
     * (because they have just been enqueued, or because the processing for a batch failed).
     */
    private function handle_watchdog_action(): void
    {
        // stub
    }

    /**
     * Process a batch for a single processor, and handle any required rescheduling or state cleanup.
     *
     * @param string $processor_class_name Fully qualified class name of the processor.
     *
     * @throws \Exception If error occurred during batch processing.
     */
    private function process_next_batch_for_single_processor(string $processor_class_name): void
    {
        // stub
    }

    /**
     * Process a batch for a single processor, updating state and logging any error.
     *
     * @param BatchProcessorInterface $batch_processor Batch processor instance.
     *
     * @return null|\Exception Exception if error occurred, null otherwise.
     */
    private function process_next_batch_for_single_processor_core(Automattic\WooCommerce\Internal\BatchProcessing\BatchProcessorInterface $batch_processor): Exception|null
    {
        // stub
    }

    /**
     * Get the current state for a given enqueued processor.
     *
     * @param BatchProcessorInterface $batch_processor Batch processor instance.
     *
     * @return array Current state for the processor, or a "blank" state if none exists yet.
     */
    private function get_process_details(Automattic\WooCommerce\Internal\BatchProcessing\BatchProcessorInterface $batch_processor): array
    {
        // stub
    }

    /**
     * Get the name of the option where we will be saving state for a given processor.
     *
     * @param BatchProcessorInterface|string $batch_processor Batch processor instance or class name.
     *
     * @return string Option name.
     */
    private function get_processor_state_option_name($batch_processor): string
    {
        // stub
    }

    /**
     * Update the state for a processor after a batch has completed processing.
     *
     * @param BatchProcessorInterface $batch_processor Batch processor instance.
     * @param float                   $time_taken Time take by the batch to complete processing.
     * @param \Exception|null         $last_error Exception object in processing the batch, if there was one.
     */
    private function update_processor_state(Automattic\WooCommerce\Internal\BatchProcessing\BatchProcessorInterface $batch_processor, float $time_taken, Exception|null $last_error = null): void
    {
        // stub
    }

    /**
     * Removes the option where we store state for a given processor.
     *
     * @since 9.1.0
     *
     * @param string $processor_class_name Fully qualified class name of the processor.
     */
    private function clear_processor_state(string $processor_class_name): void
    {
        // stub
    }

    /**
     * Schedule a processing action for a single processor.
     *
     * @param string $processor_class_name Fully qualified class name of the processor.
     * @param bool   $with_delay   Whether to schedule the action for immediate execution or for later.
     */
    private function schedule_batch_processing(string $processor_class_name, bool $with_delay = false): void
    {
        // stub
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
        // stub
    }

    /**
     * Get an instance of a processor given its class name.
     *
     * @param string $processor_class_name Full class name of the batch processor.
     *
     * @return BatchProcessorInterface Instance of batch processor for the given class.
     * @throws \Exception If it's not possible to get an instance of the class.
     */
    private function get_processor_instance(string $processor_class_name): Automattic\WooCommerce\Internal\BatchProcessing\BatchProcessorInterface
    {
        // stub
    }

    /**
     * Helper method to get list of all the enqueued processors.
     *
     * @return array List (of string) of the class names of the enqueued processors.
     */
    public function get_enqueued_processors(): array
    {
        // stub
    }

    /**
     * Dequeue a processor once it has no more items pending processing.
     *
     * @param string $processor_class_name Full processor class name.
     */
    private function dequeue_processor(string $processor_class_name): void
    {
        // stub
    }

    /**
     * Helper method to set the enqueued processor class names.
     *
     * @param array $processors List of full processor class names.
     */
    private function set_enqueued_processors(array $processors): void
    {
        // stub
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
        // stub
    }

    /**
     * Dequeue and de-schedule a processor instance so that it won't be processed anymore.
     *
     * @param string $processor_class_name Fully qualified class name of the processor.
     * @return bool True if the processor has been dequeued, false if the processor wasn't enqueued (so nothing has been done).
     */
    public function remove_processor(string $processor_class_name): bool
    {
        // stub
    }

    /**
     * Dequeues and de-schedules all the processors.
     */
    public function force_clear_all_processes(): void
    {
        // stub
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
        // stub
    }

    /**
     * Determines whether a given processor is consistently failing based on how many recent consecutive failures it has had.
     *
     * @since 9.1.0
     *
     * @param BatchProcessorInterface $batch_processor The processor that we want to check.
     * @return boolean TRUE if processor is consistently failing. FALSE otherwise.
     */
    private function is_consistently_failing(Automattic\WooCommerce\Internal\BatchProcessing\BatchProcessorInterface $batch_processor): bool
    {
        // stub
    }

    /**
     * Creates log entry with details about a batch processor that is consistently failing.
     *
     * @since 9.1.0
     *
     * @param BatchProcessorInterface $batch_processor The batch processor instance.
     * @param array                   $process_details Failing process details.
     */
    private function log_consistent_failure(Automattic\WooCommerce\Internal\BatchProcessing\BatchProcessorInterface $batch_processor, array $process_details): void
    {
        // stub
    }

    /**
     * Hooked onto 'shutdown'. This cleanup routine checks enqueued processors and whether they are scheduled or not to
     * either re-eschedule them or remove them from the queue.
     * This prevents stale states where Action Scheduler won't schedule any more attempts but we still report the
     * processor as enqueued.
     *
     * @since 9.1.0
     */
    private function remove_or_retry_failed_processors(): void
    {
        // stub
    }

}

