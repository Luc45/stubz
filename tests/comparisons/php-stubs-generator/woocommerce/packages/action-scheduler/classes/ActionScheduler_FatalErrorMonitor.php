<?php

/**
 * Class ActionScheduler_FatalErrorMonitor
 */
class ActionScheduler_FatalErrorMonitor
{
    /**
     * Construct.
     *
     * @param ActionScheduler_Store $store Action store.
     */
    public function __construct(\ActionScheduler_Store $store)
    {
    }
    /**
     * Start monitoring.
     *
     * @param ActionScheduler_ActionClaim $claim Claimed actions.
     */
    public function attach(\ActionScheduler_ActionClaim $claim)
    {
    }
    /**
     * Stop monitoring.
     */
    public function detach()
    {
    }
    /**
     * Track specified action.
     *
     * @param int $action_id Action ID to track.
     */
    public function track_current_action($action_id)
    {
    }
    /**
     * Un-track action.
     */
    public function untrack_action()
    {
    }
    /**
     * Handle unexpected shutdown.
     */
    public function handle_unexpected_shutdown()
    {
    }
}
