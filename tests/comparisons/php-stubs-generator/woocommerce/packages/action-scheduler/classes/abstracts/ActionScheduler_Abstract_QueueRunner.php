<?php

/**
 * Abstract class with common Queue Cleaner functionality.
 */
abstract class ActionScheduler_Abstract_QueueRunner extends \ActionScheduler_Abstract_QueueRunner_Deprecated
{
    /**
     * ActionScheduler_QueueCleaner instance.
     *
     * @var ActionScheduler_QueueCleaner
     */
    protected $cleaner;
    /**
     * ActionScheduler_FatalErrorMonitor instance.
     *
     * @var ActionScheduler_FatalErrorMonitor
     */
    protected $monitor;
    /**
     * ActionScheduler_Store instance.
     *
     * @var ActionScheduler_Store
     */
    protected $store;
    /**
     * ActionScheduler_Abstract_QueueRunner constructor.
     *
     * @param ActionScheduler_Store|null             $store Store object.
     * @param ActionScheduler_FatalErrorMonitor|null $monitor Monitor object.
     * @param ActionScheduler_QueueCleaner|null      $cleaner Cleaner object.
     */
    public function __construct(?\ActionScheduler_Store $store = \null, ?\ActionScheduler_FatalErrorMonitor $monitor = \null, ?\ActionScheduler_QueueCleaner $cleaner = \null)
    {
    }
    /**
     * Process an individual action.
     *
     * @param int    $action_id The action ID to process.
     * @param string $context Optional identifier for the context in which this action is being processed, e.g. 'WP CLI' or 'WP Cron'
     *                        Generally, this should be capitalised and not localised as it's a proper noun.
     * @throws \Exception When error running action.
     */
    public function process_action($action_id, $context = '')
    {
    }
    /**
     * Schedule the next instance of the action if necessary.
     *
     * @param ActionScheduler_Action $action Action.
     * @param int                    $action_id Action ID.
     */
    protected function schedule_next_instance(\ActionScheduler_Action $action, $action_id)
    {
    }
    /**
     * Run the queue cleaner.
     */
    protected function run_cleanup()
    {
    }
    /**
     * Get the number of concurrent batches a runner allows.
     *
     * @return int
     */
    public function get_allowed_concurrent_batches()
    {
    }
    /**
     * Check if the number of allowed concurrent batches is met or exceeded.
     *
     * @return bool
     */
    public function has_maximum_concurrent_batches()
    {
    }
    /**
     * Get the maximum number of seconds a batch can run for.
     *
     * @return int The number of seconds.
     */
    protected function get_time_limit()
    {
    }
    /**
     * Get the number of seconds the process has been running.
     *
     * @return int The number of seconds.
     */
    protected function get_execution_time()
    {
    }
    /**
     * Check if the host's max execution time is (likely) to be exceeded if processing more actions.
     *
     * @param int $processed_actions The number of actions processed so far - used to determine the likelihood of exceeding the time limit if processing another action.
     * @return bool
     */
    protected function time_likely_to_be_exceeded($processed_actions)
    {
    }
    /**
     * Get memory limit
     *
     * Based on WP_Background_Process::get_memory_limit()
     *
     * @return int
     */
    protected function get_memory_limit()
    {
    }
    /**
     * Memory exceeded
     *
     * Ensures the batch process never exceeds 90% of the maximum WordPress memory.
     *
     * Based on WP_Background_Process::memory_exceeded()
     *
     * @return bool
     */
    protected function memory_exceeded()
    {
    }
    /**
     * See if the batch limits have been exceeded, which is when memory usage is almost at
     * the maximum limit, or the time to process more actions will exceed the max time limit.
     *
     * Based on WC_Background_Process::batch_limits_exceeded()
     *
     * @param int $processed_actions The number of actions processed so far - used to determine the likelihood of exceeding the time limit if processing another action.
     * @return bool
     */
    protected function batch_limits_exceeded($processed_actions)
    {
    }
    /**
     * Process actions in the queue.
     *
     * @param string $context Optional identifier for the context in which this action is being processed, e.g. 'WP CLI' or 'WP Cron'
     *        Generally, this should be capitalised and not localised as it's a proper noun.
     * @return int The number of actions processed.
     */
    abstract public function run($context = '');
}
