<?php

/**
 * Class ActionScheduler_DBStore
 *
 * Action data table data store.
 *
 * @since 3.0.0
 */
class ActionScheduler_DBStore
{
    /**
     * Used to share information about the before_date property of claims internally.
     *
     * This is used in preference to passing the same information as a method param
     * for backwards-compatibility reasons.
     *
     * @var DateTime|null
     */
    private $claim_before_date = null;

    /**
     * Maximum length of args.
     *
     * @var int
     */
    protected static $max_args_length = 8000;

    /**
     * Maximum length of index.
     *
     * @var int
     */
    protected static $max_index_length = 191;

    /**
     * List of claim filters.
     *
     * @var array
     */
    protected $claim_filters = array (
  'group' => '',
  'hooks' => '',
  'exclude-groups' => '',
);

    /**
     * Initialize the data store
     *
     * @codeCoverageIgnore
     */
    public function init()
{
}
    /**
     * Save an action, checks if this is a unique action before actually saving.
     *
     * @param ActionScheduler_Action $action         Action object.
     * @param DateTime|null          $scheduled_date Optional schedule date. Default null.
     *
     * @return int                  Action ID.
     * @throws RuntimeException     Throws exception when saving the action fails.
     */
    public function save_unique_action(ActionScheduler_Action $action, DateTime|null $scheduled_date = null)
{
}
    /**
     * Save an action. Can save duplicate action as well, prefer using `save_unique_action` instead.
     *
     * @param ActionScheduler_Action $action Action object.
     * @param DateTime|null          $scheduled_date Optional schedule date. Default null.
     *
     * @return int Action ID.
     * @throws RuntimeException     Throws exception when saving the action fails.
     */
    public function save_action(ActionScheduler_Action $action, DateTime|null $scheduled_date = null)
{
}
    /**
     * Save an action.
     *
     * @param ActionScheduler_Action $action Action object.
     * @param ?DateTime              $date Optional schedule date. Default null.
     * @param bool                   $unique Whether the action should be unique.
     *
     * @return int Action ID.
     * @throws \RuntimeException     Throws exception when saving the action fails.
     */
    private function save_action_to_db(ActionScheduler_Action $action, DateTime|null $date = null, $unique = false)
{
}
    /**
     * Helper function to build insert query.
     *
     * @param array $data Row data for action.
     * @param bool  $unique Whether the action should be unique.
     *
     * @return string Insert query.
     */
    private function build_insert_sql(array $data, $unique)
{
}
    /**
     * Helper method to build where clause for action insert statement.
     *
     * @param array  $data Row data for action.
     * @param string $table_name Action table name.
     * @param bool   $unique Where action should be unique.
     *
     * @return string Where clause to be used with insert.
     */
    private function build_where_clause_for_insert($data, $table_name, $unique)
{
}
    /**
     * Helper method to get $wpdb->prepare placeholder for a given column name.
     *
     * @param string $column_name Name of column in actions table.
     *
     * @return string Placeholder to use for given column.
     */
    private function get_placeholder_for_column($column_name)
{
}
    /**
     * Generate a hash from json_encoded $args using MD5 as this isn't for security.
     *
     * @param string $args JSON encoded action args.
     * @return string
     */
    protected function hash_args($args)
{
}
    /**
     * Get action args query param value from action args.
     *
     * @param array $args Action args.
     * @return string
     */
    protected function get_args_for_query($args)
{
}
    /**
     * Get a group's ID based on its name/slug.
     *
     * @param string|array $slugs                The string name of a group, or names for several groups.
     * @param bool         $create_if_not_exists Whether to create the group if it does not already exist. Default, true - create the group.
     *
     * @return array The group IDs, if they exist or were successfully created. May be empty.
     */
    protected function get_group_ids($slugs, $create_if_not_exists = true)
{
}
    /**
     * Create an action group.
     *
     * @param string $slug Group slug.
     *
     * @return int Group ID.
     */
    protected function create_group($slug)
{
}
    /**
     * Retrieve an action.
     *
     * @param int $action_id Action ID.
     *
     * @return ActionScheduler_Action
     */
    public function fetch_action($action_id)
{
}
    /**
     * Create a null action.
     *
     * @return ActionScheduler_NullAction
     */
    protected function get_null_action()
{
}
    /**
     * Create an action from a database record.
     *
     * @param object $data Action database record.
     *
     * @return ActionScheduler_Action|ActionScheduler_CanceledAction|ActionScheduler_FinishedAction
     */
    protected function make_action_from_db_record($data)
{
}
    /**
     * Returns the SQL statement to query (or count) actions.
     *
     * @since 3.3.0 $query['status'] accepts array of statuses instead of a single status.
     *
     * @param array  $query Filtering options.
     * @param string $select_or_count  Whether the SQL should select and return the IDs or just the row count.
     *
     * @return string SQL statement already properly escaped.
     * @throws \InvalidArgumentException If the query is invalid.
     * @throws \RuntimeException When "unknown partial args matching value".
     */
    protected function get_query_actions_sql(array $query, $select_or_count = 'select')
{
}
    /**
     * Query for action count or list of action IDs.
     *
     * @since 3.3.0 $query['status'] accepts array of statuses instead of a single status.
     *
     * @see ActionScheduler_Store::query_actions for $query arg usage.
     *
     * @param array  $query      Query filtering options.
     * @param string $query_type Whether to select or count the results. Defaults to select.
     *
     * @return string|array|null The IDs of actions matching the query. Null on failure.
     */
    public function query_actions($query = array(), $query_type = 'select')
{
}
    /**
     * Get a count of all actions in the store, grouped by status.
     *
     * @return array Set of 'status' => int $count pairs for statuses with 1 or more actions of that status.
     */
    public function action_counts()
{
}
    /**
     * Cancel an action.
     *
     * @param int $action_id Action ID.
     *
     * @return void
     * @throws \InvalidArgumentException If the action update failed.
     */
    public function cancel_action($action_id)
{
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
}
    /**
     * Cancel pending actions by group.
     *
     * @param string $group Group slug.
     *
     * @return void
     */
    public function cancel_actions_by_group($group)
{
}
    /**
     * Bulk cancel actions.
     *
     * @since 3.0.0
     *
     * @param array $query_args Query parameters.
     */
    protected function bulk_cancel_actions($query_args)
{
}
    /**
     * Delete an action.
     *
     * @param int $action_id Action ID.
     * @throws \InvalidArgumentException If the action deletion failed.
     */
    public function delete_action($action_id)
{
}
    /**
     * Get the schedule date for an action.
     *
     * @param string $action_id Action ID.
     *
     * @return \DateTime The local date the action is scheduled to run, or the date that it ran.
     */
    public function get_date($action_id)
{
}
    /**
     * Get the GMT schedule date for an action.
     *
     * @param int $action_id Action ID.
     *
     * @throws \InvalidArgumentException If action cannot be identified.
     * @return \DateTime The GMT date the action is scheduled to run, or the date that it ran.
     */
    protected function get_date_gmt($action_id)
{
}
    /**
     * Stake a claim on actions.
     *
     * @param int           $max_actions Maximum number of action to include in claim.
     * @param DateTime|null $before_date Jobs must be schedule before this date. Defaults to now.
     * @param array         $hooks Hooks to filter for.
     * @param string        $group Group to filter for.
     *
     * @return ActionScheduler_ActionClaim
     */
    public function stake_claim($max_actions = 10, DateTime|null $before_date = null, $hooks = array(), $group = '')
{
}
    /**
     * Generate a new action claim.
     *
     * @return int Claim ID.
     */
    protected function generate_claim_id()
{
}
    /**
     * Set a claim filter.
     *
     * @param string $filter_name Claim filter name.
     * @param mixed  $filter_values Values to filter.
     * @return void
     */
    public function set_claim_filter($filter_name, $filter_values)
{
}
    /**
     * Get the claim filter value.
     *
     * @param string $filter_name Claim filter name.
     * @return mixed
     */
    public function get_claim_filter($filter_name)
{
}
    /**
     * Mark actions claimed.
     *
     * @param string        $claim_id Claim Id.
     * @param int           $limit Number of action to include in claim.
     * @param DateTime|null $before_date Should use UTC timezone.
     * @param array         $hooks Hooks to filter for.
     * @param string        $group Group to filter for.
     *
     * @return int The number of actions that were claimed.
     * @throws \InvalidArgumentException Throws InvalidArgumentException if group doesn't exist.
     * @throws \RuntimeException Throws RuntimeException if unable to claim action.
     */
    protected function claim_actions($claim_id, $limit, DateTime|null $before_date = null, $hooks = array(), $group = '')
{
}
    /**
     * Get the number of active claims.
     *
     * @return int
     */
    public function get_claim_count()
{
}
    /**
     * Return an action's claim ID, as stored in the claim_id column.
     *
     * @param string $action_id Action ID.
     * @return mixed
     */
    public function get_claim_id($action_id)
{
}
    /**
     * Retrieve the action IDs of action in a claim.
     *
     * @param  int $claim_id Claim ID.
     * @return int[]
     */
    public function find_actions_by_claim_id($claim_id)
{
}
    /**
     * Release actions from a claim and delete the claim.
     *
     * @param ActionScheduler_ActionClaim $claim Claim object.
     * @throws \RuntimeException When unable to release actions from claim.
     */
    public function release_claim(ActionScheduler_ActionClaim $claim)
{
}
    /**
     * Remove the claim from an action.
     *
     * @param int $action_id Action ID.
     *
     * @return void
     */
    public function unclaim_action($action_id)
{
}
    /**
     * Mark an action as failed.
     *
     * @param int $action_id Action ID.
     * @throws \InvalidArgumentException Throw an exception if action was not updated.
     */
    public function mark_failure($action_id)
{
}
    /**
     * Add execution message to action log.
     *
     * @throws Exception If the action status cannot be updated to self::STATUS_RUNNING ('in-progress').
     *
     * @param int $action_id Action ID.
     *
     * @return void
     */
    public function log_execution($action_id)
{
}
    /**
     * Mark an action as complete.
     *
     * @param int $action_id Action ID.
     *
     * @return void
     * @throws \InvalidArgumentException Throw an exception if action was not updated.
     */
    public function mark_complete($action_id)
{
}
    /**
     * Get an action's status.
     *
     * @param int $action_id Action ID.
     *
     * @return string
     * @throws \InvalidArgumentException Throw an exception if not status was found for action_id.
     * @throws \RuntimeException Throw an exception if action status could not be retrieved.
     */
    public function get_status($action_id)
{
}
}
