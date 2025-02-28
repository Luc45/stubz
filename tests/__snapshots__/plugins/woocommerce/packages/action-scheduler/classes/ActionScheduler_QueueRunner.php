<?php
/**
 * Class ActionScheduler_QueueRunner
 */
class ActionScheduler_QueueRunner extends \ActionScheduler_Abstract_QueueRunner
{
    public const WP_CRON_HOOK = 'action_scheduler_run_queue';
    public const WP_CRON_SCHEDULE = 'every_minute';
    /**
     * ActionScheduler_AsyncRequest_QueueRunner instance.
     *
     * @var ActionScheduler_AsyncRequest_QueueRunner
     */
    protected $async_request;
    /**
     * Get instance.
     *
     * @return ActionScheduler_QueueRunner
     * @codeCoverageIgnore
     */
    public static function instance()
{
}
    /**
     * ActionScheduler_QueueRunner constructor.
     *
     * @param ActionScheduler_Store|null                    $store Store object.
     * @param ActionScheduler_FatalErrorMonitor|null        $monitor Monitor object.
     * @param ActionScheduler_QueueCleaner|null             $cleaner Cleaner object.
     * @param ActionScheduler_AsyncRequest_QueueRunner|null $async_request Async request runner object.
     */
    public function __construct(ActionScheduler_Store|null $store = null, ActionScheduler_FatalErrorMonitor|null $monitor = null, ActionScheduler_QueueCleaner|null $cleaner = null, ActionScheduler_AsyncRequest_QueueRunner|null $async_request = null)
{
}
    /**
     * Initialize.
     *
     * @codeCoverageIgnore
     */
    public function init()
{
}
    /**
     * Hook check for dispatching an async request.
     */
    public function hook_dispatch_async_request()
{
}
    /**
     * Unhook check for dispatching an async request.
     */
    public function unhook_dispatch_async_request()
{
}
    /**
     * Check if we should dispatch an async request to process actions.
     *
     * This method is attached to 'shutdown', so is called frequently. To avoid slowing down
     * the site, it mitigates the work performed in each request by:
     * 1. checking if it's in the admin context and then
     * 2. haven't run on the 'shutdown' hook within the lock time (60 seconds by default)
     * 3. haven't exceeded the number of allowed batches.
     *
     * The order of these checks is important, because they run from a check on a value:
     * 1. in memory - is_admin() maps to $GLOBALS or the WP_ADMIN constant
     * 2. in memory - transients use autoloaded options by default
     * 3. from a database query - has_maximum_concurrent_batches() run the query
     *    $this->store->get_claim_count() to find the current number of claims in the DB.
     *
     * If all of these conditions are met, then we request an async runner check whether it
     * should dispatch a request to process pending actions.
     */
    public function maybe_dispatch_async_request()
{
}
    /**
     * Process actions in the queue. Attached to self::WP_CRON_HOOK i.e. 'action_scheduler_run_queue'
     *
     * The $context param of this method defaults to 'WP Cron', because prior to Action Scheduler 3.0.0
     * that was the only context in which this method was run, and the self::WP_CRON_HOOK hook had no context
     * passed along with it. New code calling this method directly, or by triggering the self::WP_CRON_HOOK,
     * should set a context as the first parameter. For an example of this, refer to the code seen in
     *
     * @see ActionScheduler_AsyncRequest_QueueRunner::handle()
     *
     * @param string $context Optional identifier for the context in which this action is being processed, e.g. 'WP CLI' or 'WP Cron'
     *        Generally, this should be capitalised and not localised as it's a proper noun.
     * @return int The number of actions processed.
     */
    public function run($context = 'WP Cron')
{
}
    /**
     * Process a batch of actions pending in the queue.
     *
     * Actions are processed by claiming a set of pending actions then processing each one until either the batch
     * size is completed, or memory or time limits are reached, defined by @see $this->batch_limits_exceeded().
     *
     * @param int    $size The maximum number of actions to process in the batch.
     * @param string $context Optional identifier for the context in which this action is being processed, e.g. 'WP CLI' or 'WP Cron'
     *                        Generally, this should be capitalised and not localised as it's a proper noun.
     * @return int The number of actions processed.
     */
    protected function do_batch($size = 100, $context = '')
{
}
    /**
     * Flush the cache if possible (intended for use after a batch of actions has been processed).
     *
     * This is useful because running large batches can eat up memory and because invalid data can accrue in the
     * runtime cache, which may lead to unexpected results.
     */
    protected function clear_caches()
{
}
    /**
     * Add schedule to WP cron.
     *
     * @param array<string, array<string, int|string>> $schedules Schedules.
     * @return array<string, array<string, int|string>>
     */
    public function add_wp_cron_schedule($schedules)
{
}
}
