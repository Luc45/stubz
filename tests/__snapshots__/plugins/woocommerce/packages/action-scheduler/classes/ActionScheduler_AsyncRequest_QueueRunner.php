<?php
/**
 * ActionScheduler_AsyncRequest_QueueRunner class.
 */
class ActionScheduler_AsyncRequest_QueueRunner extends \WP_Async_Request
{
    /**
     * Data store for querying actions
     *
     * @var ActionScheduler_Store
     */
    protected $store;
    /**
     * Prefix for ajax hooks
     *
     * @var string
     */
    protected $prefix = 'as';
    /**
     * Action for ajax hooks
     *
     * @var string
     */
    protected $action = 'async_request_queue_runner';
    /**
     * Initiate new async request.
     *
     * @param ActionScheduler_Store $store Store object.
     */
    public function __construct(ActionScheduler_Store $store)
{
}
    /**
     * Handle async requests
     *
     * Run a queue, and maybe dispatch another async request to run another queue
     * if there are still pending actions after completing a queue in this request.
     */
    protected function handle()
{
}
    /**
     * If the async request runner is needed and allowed to run, dispatch a request.
     */
    public function maybe_dispatch()
{
}
    /**
     * Only allow async requests when needed.
     *
     * Also allow 3rd party code to disable running actions via async requests.
     */
    protected function allow()
{
}
    /**
     * Chaining async requests can crash MySQL. A brief sleep call in PHP prevents that.
     */
    protected function get_sleep_seconds()
{
}
}
