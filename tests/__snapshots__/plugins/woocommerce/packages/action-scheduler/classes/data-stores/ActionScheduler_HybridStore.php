<?php

/**
 * Class ActionScheduler_HybridStore
 *
 * A wrapper around multiple stores that fetches data from both.
 *
 * @since 3.0.0
 */
class ActionScheduler_HybridStore extends \ActionScheduler_Store
{
    const DEMARKATION_OPTION = 'action_scheduler_hybrid_store_demarkation';

    /**
     * Primary store instance.
     *
     * @var ActionScheduler_Store
     */
    private $primary_store = null;

    /**
     * Secondary store instance.
     *
     * @var ActionScheduler_Store
     */
    private $secondary_store = null;

    /**
     * Runner instance.
     *
     * @var Action_Scheduler\Migration\Runner
     */
    private $migration_runner = null;

    /**
     * The dividing line between IDs of actions created
     * by the primary and secondary stores.
     *
     * @var int
     *
     * Methods that accept an action ID will compare the ID against
     * this to determine which store will contain that ID. In almost
     * all cases, the ID should come from the primary store, but if
     * client code is bypassing the API functions and fetching IDs
     * from elsewhere, then there is a chance that an unmigrated ID
     * might be requested.
     */
    private $demarkation_id = 0;

    /**
     * ActionScheduler_HybridStore constructor.
     *
     * @param Config|null $config Migration config object.
     */
    public function __construct(Action_Scheduler\Migration\Config|null $config = null)
{
}
    /**
     * Initialize the table data store tables.
     *
     * @codeCoverageIgnore
     */
    public function init()
{
}
    /**
     * When the actions table is created, set its autoincrement
     * value to be one higher than the posts table to ensure that
     * there are no ID collisions.
     *
     * @param string $table_name Table name.
     * @param string $table_suffix Suffix of table name.
     *
     * @return void
     * @codeCoverageIgnore
     */
    public function set_autoincrement($table_name, $table_suffix)
{
}
    /**
     * Store the demarkation id in WP options.
     *
     * @param int $id The ID to set as the demarkation point between the two stores
     *                Leave null to use the next ID from the WP posts table.
     *
     * @return int The new ID.
     *
     * @codeCoverageIgnore
     */
    private function set_demarkation_id($id = null)
{
}
    /**
     * Find the first matching action from the secondary store.
     * If it exists, migrate it to the primary store immediately.
     * After it migrates, the secondary store will logically contain
     * the next matching action, so return the result thence.
     *
     * @param string $hook Action's hook.
     * @param array  $params Action's arguments.
     *
     * @return string
     */
    public function find_action($hook, $params = array())
{
}
    /**
     * Find actions matching the query in the secondary source first.
     * If any are found, migrate them immediately. Then the secondary
     * store will contain the canonical results.
     *
     * @param array  $query Query arguments.
     * @param string $query_type Whether to select or count the results. Default, select.
     *
     * @return int[]
     */
    public function query_actions($query = array(), $query_type = 'select')
{
}
    /**
     * Get a count of all actions in the store, grouped by status
     *
     * @return array Set of 'status' => int $count pairs for statuses with 1 or more actions of that status.
     */
    public function action_counts()
{
}
    /**
     * If any actions would have been claimed by the secondary store,
     * migrate them immediately, then ask the primary store for the
     * canonical claim.
     *
     * @param int           $max_actions Maximum number of actions to claim.
     * @param null|DateTime $before_date Latest timestamp of actions to claim.
     * @param string[]      $hooks Hook of actions to claim.
     * @param string        $group Group of actions to claim.
     *
     * @return ActionScheduler_ActionClaim
     */
    public function stake_claim($max_actions = 10, DateTime|null $before_date = null, $hooks = array(), $group = '')
{
}
    /**
     * Migrate a list of actions to the table data store.
     *
     * @param array $action_ids List of action IDs.
     */
    private function migrate($action_ids)
{
}
    /**
     * Save an action to the primary store.
     *
     * @param ActionScheduler_Action $action Action object to be saved.
     * @param DateTime|null          $date Optional. Schedule date. Default null.
     *
     * @return int The action ID
     */
    public function save_action(ActionScheduler_Action $action, DateTime|null $date = null)
{
}
    /**
     * Retrieve an existing action whether migrated or not.
     *
     * @param int $action_id Action ID.
     */
    public function fetch_action($action_id)
{
}
    /**
     * Cancel an existing action whether migrated or not.
     *
     * @param int $action_id Action ID.
     */
    public function cancel_action($action_id)
{
}
    /**
     * Delete an existing action whether migrated or not.
     *
     * @param int $action_id Action ID.
     */
    public function delete_action($action_id)
{
}
    /**
     * Get the schedule date an existing action whether migrated or not.
     *
     * @param int $action_id Action ID.
     */
    public function get_date($action_id)
{
}
    /**
     * Mark an existing action as failed whether migrated or not.
     *
     * @param int $action_id Action ID.
     */
    public function mark_failure($action_id)
{
}
    /**
     * Log the execution of an existing action whether migrated or not.
     *
     * @param int $action_id Action ID.
     */
    public function log_execution($action_id)
{
}
    /**
     * Mark an existing action complete whether migrated or not.
     *
     * @param int $action_id Action ID.
     */
    public function mark_complete($action_id)
{
}
    /**
     * Get an existing action status whether migrated or not.
     *
     * @param int $action_id Action ID.
     */
    public function get_status($action_id)
{
}
    /**
     * Return which store an action is stored in.
     *
     * @param int  $action_id ID of the action.
     * @param bool $primary_first Optional flag indicating search the primary store first.
     * @return ActionScheduler_Store
     */
    protected function get_store_from_action_id($action_id, $primary_first = false)
{
}
    /**
     * Get the claim count from the table data store.
     */
    public function get_claim_count()
{
}
    /**
     * Retrieve the claim ID for an action from the table data store.
     *
     * @param int $action_id Action ID.
     */
    public function get_claim_id($action_id)
{
}
    /**
     * Release a claim in the table data store.
     *
     * @param ActionScheduler_ActionClaim $claim Claim object.
     */
    public function release_claim(ActionScheduler_ActionClaim $claim)
{
}
    /**
     * Release claims on an action in the table data store.
     *
     * @param int $action_id Action ID.
     */
    public function unclaim_action($action_id)
{
}
    /**
     * Retrieve a list of action IDs by claim.
     *
     * @param int $claim_id Claim ID.
     */
    public function find_actions_by_claim_id($claim_id)
{
}
}
