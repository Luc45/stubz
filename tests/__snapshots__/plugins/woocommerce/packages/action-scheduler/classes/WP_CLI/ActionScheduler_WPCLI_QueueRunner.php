<?php

namespace ;

/**
 * WP CLI Queue runner.
 *
 * This class can only be called from within a WP CLI instance.
 */
class ActionScheduler_WPCLI_QueueRunner extends \ActionScheduler_Abstract_QueueRunner
{
    /**
     * Claimed actions.
     *
     * @var array
     */
    protected $actions = null;

    /**
     * ActionScheduler_ActionClaim instance.
     *
     * @var ActionScheduler_ActionClaim
     */
    protected $claim = null;

    /**
     * Progress bar instance.
     *
     * @var \cli\progress\Bar
     */
    protected $progress_bar = null;

    /**
     * ActionScheduler_WPCLI_QueueRunner constructor.
     *
     * @param ActionScheduler_Store|null             $store Store object.
     * @param ActionScheduler_FatalErrorMonitor|null $monitor Monitor object.
     * @param ActionScheduler_QueueCleaner|null      $cleaner Cleaner object.
     *
     * @throws Exception When this is not run within WP CLI.
     */
    public function __construct(ActionScheduler_Store|null $store = null, ActionScheduler_FatalErrorMonitor|null $monitor = null, ActionScheduler_QueueCleaner|null $cleaner = null)
    {
        // stub
    }

    /**
     * Set up the Queue before processing.
     *
     * @param int    $batch_size The batch size to process.
     * @param array  $hooks      The hooks being used to filter the actions claimed in this batch.
     * @param string $group      The group of actions to claim with this batch.
     * @param bool   $force      Whether to force running even with too many concurrent processes.
     *
     * @return int The number of actions that will be run.
     * @throws \WP_CLI\ExitException When there are too many concurrent batches.
     */
    public function setup($batch_size, $hooks = array(
), $group = '', $force = false)
    {
        // stub
    }

    /**
     * Add our hooks to the appropriate actions.
     */
    protected function add_hooks()
    {
        // stub
    }

    /**
     * Set up the WP CLI progress bar.
     */
    protected function setup_progress_bar()
    {
        // stub
    }

    /**
     * Process actions in the queue.
     *
     * @param string $context Optional runner context. Default 'WP CLI'.
     *
     * @return int The number of actions processed.
     */
    public function run($context = 'WP CLI')
    {
        // stub
    }

    /**
     * Handle WP CLI message when the action is starting.
     *
     * @param int $action_id Action ID.
     */
    public function before_execute($action_id)
    {
        // stub
    }

    /**
     * Handle WP CLI message when the action has completed.
     *
     * @param int                         $action_id ActionID.
     * @param null|ActionScheduler_Action $action The instance of the action. Default to null for backward compatibility.
     */
    public function after_execute($action_id, $action = null)
    {
        // stub
    }

    /**
     * Handle WP CLI message when the action has failed.
     *
     * @param int       $action_id Action ID.
     * @param Exception $exception Exception.
     * @throws \WP_CLI\ExitException With failure message.
     */
    public function action_failed($action_id, $exception)
    {
        // stub
    }

    /**
     * Sleep and help avoid hitting memory limit
     *
     * @param int $sleep_time Amount of seconds to sleep.
     * @deprecated 3.0.0
     */
    protected function stop_the_insanity($sleep_time = 0)
    {
        // stub
    }

    /**
     * Maybe trigger the stop_the_insanity() method to free up memory.
     */
    protected function maybe_stop_the_insanity()
    {
        // stub
    }

}

