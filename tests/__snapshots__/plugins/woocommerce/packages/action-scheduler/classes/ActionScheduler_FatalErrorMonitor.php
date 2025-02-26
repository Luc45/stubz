<?php

namespace ;

/**
 * Class ActionScheduler_FatalErrorMonitor
 */
class ActionScheduler_FatalErrorMonitor extends \
{
    /**
     * ActionScheduler_ActionClaim instance.
     *
     * @var ActionScheduler_ActionClaim
     */
    private $claim = null;

    /**
     * ActionScheduler_Store instance.
     *
     * @var ActionScheduler_Store
     */
    private $store = null;

    /**
     * Current action's ID.
     *
     * @var int
     */
    private $action_id = 0;

    /**
     * Construct.
     *
     * @param ActionScheduler_Store $store Action store.
     */
    public function __construct(ActionScheduler_Store $store)
    {
        // stub
    }

    /**
     * Start monitoring.
     *
     * @param ActionScheduler_ActionClaim $claim Claimed actions.
     */
    public function attach(ActionScheduler_ActionClaim $claim)
    {
        // stub
    }

    /**
     * Stop monitoring.
     */
    public function detach()
    {
        // stub
    }

    /**
     * Track specified action.
     *
     * @param int $action_id Action ID to track.
     */
    public function track_current_action($action_id)
    {
        // stub
    }

    /**
     * Un-track action.
     */
    public function untrack_action()
    {
        // stub
    }

    /**
     * Handle unexpected shutdown.
     */
    public function handle_unexpected_shutdown()
    {
        // stub
    }

}

