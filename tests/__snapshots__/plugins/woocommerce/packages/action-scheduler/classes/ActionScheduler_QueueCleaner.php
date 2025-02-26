<?php

namespace ;

/**
 * Class ActionScheduler_QueueCleaner
 */
class ActionScheduler_QueueCleaner
{
    /**
     * The batch size.
     *
     * @var int
     */
    protected $batch_size = null;

    /**
     * ActionScheduler_Store instance.
     *
     * @var ActionScheduler_Store
     */
    private $store = null;

    /**
     * 31 days in seconds.
     *
     * @var int
     */
    private $month_in_seconds = 2678400;

    /**
     * Default list of statuses purged by the cleaner process.
     *
     * @var string[]
     */
    private $default_statuses_to_purge;

    /**
     * ActionScheduler_QueueCleaner constructor.
     *
     * @param ActionScheduler_Store|null $store      The store instance.
     * @param int                        $batch_size The batch size.
     */
    public function __construct(ActionScheduler_Store|null $store = null, $batch_size = 20)
    {
        // stub
    }

    /**
     * Default queue cleaner process used by queue runner.
     *
     * @return array
     */
    public function delete_old_actions()
    {
        // stub
    }

    /**
     * Delete selected actions limited by status and date.
     *
     * @param string[] $statuses_to_purge List of action statuses to purge. Defaults to canceled, complete.
     * @param DateTime $cutoff_date Date limit for selecting actions. Defaults to 31 days ago.
     * @param int|null $batch_size Maximum number of actions per status to delete. Defaults to 20.
     * @param string   $context Calling process context. Defaults to `old`.
     * @return array Actions deleted.
     */
    public function clean_actions(array $statuses_to_purge, DateTime $cutoff_date, $batch_size = null, $context = 'old')
    {
        // stub
    }

    /**
     * Delete actions.
     *
     * @param int[]  $actions_to_delete List of action IDs to delete.
     * @param int    $lifespan Minimum scheduled age in seconds of the actions being deleted.
     * @param string $context Context of the delete request.
     * @return array Deleted action IDs.
     */
    private function delete_actions(array $actions_to_delete, $lifespan = null, $context = 'old')
    {
        // stub
    }

    /**
     * Unclaim pending actions that have not been run within a given time limit.
     *
     * When called by ActionScheduler_Abstract_QueueRunner::run_cleanup(), the time limit passed
     * as a parameter is 10x the time limit used for queue processing.
     *
     * @param int $time_limit The number of seconds to allow a queue to run before unclaiming its pending actions. Default 300 (5 minutes).
     */
    public function reset_timeouts($time_limit = 300)
    {
        // stub
    }

    /**
     * Mark actions that have been running for more than a given time limit as failed, based on
     * the assumption some uncatchable and unloggable fatal error occurred during processing.
     *
     * When called by ActionScheduler_Abstract_QueueRunner::run_cleanup(), the time limit passed
     * as a parameter is 10x the time limit used for queue processing.
     *
     * @param int $time_limit The number of seconds to allow an action to run before it is considered to have failed. Default 300 (5 minutes).
     */
    public function mark_failures($time_limit = 300)
    {
        // stub
    }

    /**
     * Do all of the cleaning actions.
     *
     * @param int $time_limit The number of seconds to use as the timeout and failure period. Default 300 (5 minutes).
     */
    public function clean($time_limit = 300)
    {
        // stub
    }

    /**
     * Get the batch size for cleaning the queue.
     *
     * @return int
     */
    protected function get_batch_size()
    {
        // stub
    }

}

