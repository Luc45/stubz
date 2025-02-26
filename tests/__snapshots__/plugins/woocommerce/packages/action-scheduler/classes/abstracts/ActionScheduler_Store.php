<?php

namespace ;

/**
 * Class ActionScheduler_Store
 *
 * @codeCoverageIgnore
 */
abstract class ActionScheduler_Store extends \ActionScheduler_Store_Deprecated
{
    const STATUS_COMPLETE = 'complete';

    const STATUS_PENDING = 'pending';

    const STATUS_RUNNING = 'in-progress';

    const STATUS_FAILED = 'failed';

    const STATUS_CANCELED = 'canceled';

    const DEFAULT_CLASS = 'ActionScheduler_wpPostStore';

    /**
     * ActionScheduler_Store instance.
     *
     * @var ActionScheduler_Store
     */
    private static $store = null;

    /**
     * Maximum length of args.
     *
     * @var int
     */
    protected static $max_args_length = 191;

    /**
     * Save action.
     *
     * @param ActionScheduler_Action $action Action to save.
     * @param null|DateTime          $scheduled_date Optional Date of the first instance
     *                                               to store. Otherwise uses the first date of the action's
     *                                               schedule.
     *
     * @return int The action ID
     */
    public abstract function save_action(ActionScheduler_Action $action, DateTime|null $scheduled_date = null);

    /**
     * Get action.
     *
     * @param string $action_id Action ID.
     *
     * @return ActionScheduler_Action
     */
    public abstract function fetch_action($action_id);

    /**
     * Find an action.
     *
     * Note: the query ordering changes based on the passed 'status' value.
     *
     * @param string $hook Action hook.
     * @param array  $params Parameters of the action to find.
     *
     * @return string|null ID of the next action matching the criteria or NULL if not found.
     */
    public function find_action($hook, $params = array(
))
    {
        // stub
    }

    /**
     * Query for action count or list of action IDs.
     *
     * @since 3.3.0 $query['status'] accepts array of statuses instead of a single status.
     *
     * @param array  $query {
     *      Query filtering options.
     *
     *      @type string       $hook             The name of the actions. Optional.
     *      @type string|array $status           The status or statuses of the actions. Optional.
     *      @type array        $args             The args array of the actions. Optional.
     *      @type DateTime     $date             The scheduled date of the action. Used in UTC timezone. Optional.
     *      @type string       $date_compare     Operator for selecting by $date param. Accepted values are '!=', '>', '>=', '<', '<=', '='. Defaults to '<='.
     *      @type DateTime     $modified         The last modified date of the action. Used in UTC timezone. Optional.
     *      @type string       $modified_compare Operator for comparing $modified param. Accepted values are '!=', '>', '>=', '<', '<=', '='. Defaults to '<='.
     *      @type string       $group            The group the action belongs to. Optional.
     *      @type bool|int     $claimed          TRUE to find claimed actions, FALSE to find unclaimed actions, an int to find a specific claim ID. Optional.
     *      @type int          $per_page         Number of results to return. Defaults to 5.
     *      @type int          $offset           The query pagination offset. Defaults to 0.
     *      @type int          $orderby          Accepted values are 'hook', 'group', 'modified', 'date' or 'none'. Defaults to 'date'.
     *      @type string       $order            Accepted values are 'ASC' or 'DESC'. Defaults to 'ASC'.
     * }
     * @param string $query_type Whether to select or count the results. Default, select.
     *
     * @return string|array|null The IDs of actions matching the query. Null on failure.
     */
    public abstract function query_actions($query = array(
), $query_type = 'select');

    /**
     * Run query to get a single action ID.
     *
     * @since 3.3.0
     *
     * @see ActionScheduler_Store::query_actions for $query arg usage but 'per_page' and 'offset' can't be used.
     *
     * @param array $query Query parameters.
     *
     * @return int|null
     */
    public function query_action($query)
    {
        // stub
    }

    /**
     * Get a count of all actions in the store, grouped by status
     *
     * @return array
     */
    public abstract function action_counts();

    /**
     * Get additional action counts.
     *
     * - add past-due actions
     *
     * @return array
     */
    public function extra_action_counts()
    {
        // stub
    }

    /**
     * Cancel action.
     *
     * @param string $action_id Action ID.
     */
    public abstract function cancel_action($action_id);

    /**
     * Delete action.
     *
     * @param string $action_id Action ID.
     */
    public abstract function delete_action($action_id);

    /**
     * Get action's schedule or run timestamp.
     *
     * @param string $action_id Action ID.
     *
     * @return DateTime The date the action is schedule to run, or the date that it ran.
     */
    public abstract function get_date($action_id);

    /**
     * Make a claim.
     *
     * @param int           $max_actions Maximum number of actions to claim.
     * @param DateTime|null $before_date Claim only actions schedule before the given date. Defaults to now.
     * @param array         $hooks       Claim only actions with a hook or hooks.
     * @param string        $group       Claim only actions in the given group.
     *
     * @return ActionScheduler_ActionClaim
     */
    public abstract function stake_claim($max_actions = 10, DateTime|null $before_date = null, $hooks = array(
), $group = '');

    /**
     * Get claim count.
     *
     * @return int
     */
    public abstract function get_claim_count();

    /**
     * Release the claim.
     *
     * @param ActionScheduler_ActionClaim $claim Claim object.
     */
    public abstract function release_claim(ActionScheduler_ActionClaim $claim);

    /**
     * Un-claim the action.
     *
     * @param string $action_id Action ID.
     */
    public abstract function unclaim_action($action_id);

    /**
     * Mark action as failed.
     *
     * @param string $action_id Action ID.
     */
    public abstract function mark_failure($action_id);

    /**
     * Log action's execution.
     *
     * @param string $action_id Actoin ID.
     */
    public abstract function log_execution($action_id);

    /**
     * Mark action as complete.
     *
     * @param string $action_id Action ID.
     */
    public abstract function mark_complete($action_id);

    /**
     * Get action's status.
     *
     * @param string $action_id Action ID.
     * @return string
     */
    public abstract function get_status($action_id);

    /**
     * Get action's claim ID.
     *
     * @param string $action_id Action ID.
     * @return mixed
     */
    public abstract function get_claim_id($action_id);

    /**
     * Find actions by claim ID.
     *
     * @param string $claim_id Claim ID.
     * @return array
     */
    public abstract function find_actions_by_claim_id($claim_id);

    /**
     * Validate SQL operator.
     *
     * @param string $comparison_operator Operator.
     * @return string
     */
    protected function validate_sql_comparator($comparison_operator)
    {
        // stub
    }

    /**
     * Get the time MySQL formatted date/time string for an action's (next) scheduled date.
     *
     * @param ActionScheduler_Action $action Action.
     * @param null|DateTime          $scheduled_date Action's schedule date (optional).
     * @return string
     */
    protected function get_scheduled_date_string(ActionScheduler_Action $action, DateTime|null $scheduled_date = null)
    {
        // stub
    }

    /**
     * Get the time MySQL formatted date/time string for an action's (next) scheduled date.
     *
     * @param ActionScheduler_Action|null $action Action.
     * @param null|DateTime               $scheduled_date Action's scheduled date (optional).
     * @return string
     */
    protected function get_scheduled_date_string_local(ActionScheduler_Action $action, DateTime|null $scheduled_date = null)
    {
        // stub
    }

    /**
     * Validate that we could decode action arguments.
     *
     * @param mixed $args      The decoded arguments.
     * @param int   $action_id The action ID.
     *
     * @throws ActionScheduler_InvalidActionException When the decoded arguments are invalid.
     */
    protected function validate_args($args, $action_id)
    {
        // stub
    }

    /**
     * Validate a ActionScheduler_Schedule object.
     *
     * @param mixed $schedule  The unserialized ActionScheduler_Schedule object.
     * @param int   $action_id The action ID.
     *
     * @throws ActionScheduler_InvalidActionException When the schedule is invalid.
     */
    protected function validate_schedule($schedule, $action_id)
    {
        // stub
    }

    /**
     * InnoDB indexes have a maximum size of 767 bytes by default, which is only 191 characters with utf8mb4.
     *
     * Previously, AS wasn't concerned about args length, as we used the (unindex) post_content column. However,
     * with custom tables, we use an indexed VARCHAR column instead.
     *
     * @param  ActionScheduler_Action $action Action to be validated.
     * @throws InvalidArgumentException When json encoded args is too long.
     */
    protected function validate_action(ActionScheduler_Action $action)
    {
        // stub
    }

    /**
     * Cancel pending actions by hook.
     *
     * @since 3.0.0
     *
     * @param string $hook Hook name.
     *
     * @return void
     */
    public function cancel_actions_by_hook($hook)
    {
        // stub
    }

    /**
     * Cancel pending actions by group.
     *
     * @since 3.0.0
     *
     * @param string $group Group slug.
     *
     * @return void
     */
    public function cancel_actions_by_group($group)
    {
        // stub
    }

    /**
     * Cancel a set of action IDs.
     *
     * @since 3.0.0
     *
     * @param int[] $action_ids List of action IDs.
     *
     * @return void
     */
    private function bulk_cancel_actions($action_ids)
    {
        // stub
    }

    /**
     * Get status labels.
     *
     * @return array<string, string>
     */
    public function get_status_labels()
    {
        // stub
    }

    /**
     * Check if there are any pending scheduled actions due to run.
     *
     * @return string
     */
    public function has_pending_actions_due()
    {
        // stub
    }

    /**
     * Callable initialization function optionally overridden in derived classes.
     */
    public function init()
    {
        // stub
    }

    /**
     * Callable function to mark an action as migrated optionally overridden in derived classes.
     *
     * @param int $action_id Action ID.
     */
    public function mark_migrated($action_id)
    {
        // stub
    }

    /**
     * Get instance.
     *
     * @return ActionScheduler_Store
     */
    public static function instance()
    {
        // stub
    }

}

