<?php

/**
 * Class ActionScheduler_wpPostStore
 */
class ActionScheduler_wpPostStore
{
    const POST_TYPE = 'scheduled-action';

    const GROUP_TAXONOMY = 'action-group';

    const SCHEDULE_META_KEY = '_action_manager_schedule';

    const DEPENDENCIES_MET = 'as-post-store-dependencies-met';

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
     * Local Timezone.
     *
     * @var DateTimeZone
     */
    protected $local_timezone = null;

    /**
     * Save action.
     *
     * @param ActionScheduler_Action $action Scheduled Action.
     * @param DateTime|null          $scheduled_date Scheduled Date.
     *
     * @throws RuntimeException Throws an exception if the action could not be saved.
     * @return int
     */
    public function save_action(ActionScheduler_Action $action, DateTime|null $scheduled_date = null)
    {
        // stub
    }

    /**
     * Create post array.
     *
     * @param ActionScheduler_Action $action Scheduled Action.
     * @param DateTime|null          $scheduled_date Scheduled Date.
     *
     * @return array Returns an array of post data.
     */
    protected function create_post_array(ActionScheduler_Action $action, DateTime|null $scheduled_date = null)
    {
        // stub
    }

    /**
     * Save post array.
     *
     * @param array $post_array Post array.
     * @return int Returns the post ID.
     * @throws RuntimeException Throws an exception if the action could not be saved.
     */
    protected function save_post_array($post_array)
    {
        // stub
    }

    /**
     * Filter insert post data.
     *
     * @param array $postdata Post data to filter.
     *
     * @return array
     */
    public function filter_insert_post_data($postdata)
    {
        // stub
    }

    /**
     * Create a (probably unique) post name for scheduled actions in a more performant manner than wp_unique_post_slug().
     *
     * When an action's post status is transitioned to something other than 'draft', 'pending' or 'auto-draft, like 'publish'
     * or 'failed' or 'trash', WordPress will find a unique slug (stored in post_name column) using the wp_unique_post_slug()
     * function. This is done to ensure URL uniqueness. The approach taken by wp_unique_post_slug() is to iterate over existing
     * post_name values that match, and append a number 1 greater than the largest. This makes sense when manually creating a
     * post from the Edit Post screen. It becomes a bottleneck when automatically processing thousands of actions, with a
     * database containing thousands of related post_name values.
     *
     * WordPress 5.1 introduces the 'pre_wp_unique_post_slug' filter for plugins to address this issue.
     *
     * We can short-circuit WordPress's wp_unique_post_slug() approach using the 'pre_wp_unique_post_slug' filter. This
     * method is available to be used as a callback on that filter. It provides a more scalable approach to generating a
     * post_name/slug that is probably unique. Because Action Scheduler never actually uses the post_name field, or an
     * action's slug, being probably unique is good enough.
     *
     * For more backstory on this issue, see:
     * - https://github.com/woocommerce/action-scheduler/issues/44 and
     * - https://core.trac.wordpress.org/ticket/21112
     *
     * @param string $override_slug Short-circuit return value.
     * @param string $slug          The desired slug (post_name).
     * @param int    $post_ID       Post ID.
     * @param string $post_status   The post status.
     * @param string $post_type     Post type.
     * @return string
     */
    public function set_unique_post_slug($override_slug, $slug, $post_ID, $post_status, $post_type)
    {
        // stub
    }

    /**
     * Save post schedule.
     *
     * @param int    $post_id  Post ID of the scheduled action.
     * @param string $schedule Schedule to save.
     *
     * @return void
     */
    protected function save_post_schedule($post_id, $schedule)
    {
        // stub
    }

    /**
     * Save action group.
     *
     * @param int    $post_id Post ID.
     * @param string $group   Group to save.
     * @return void
     */
    protected function save_action_group($post_id, $group)
    {
        // stub
    }

    /**
     * Fetch actions.
     *
     * @param int $action_id Action ID.
     * @return object
     */
    public function fetch_action($action_id)
    {
        // stub
    }

    /**
     * Get post.
     *
     * @param string $action_id - Action ID.
     * @return WP_Post|null
     */
    protected function get_post($action_id)
    {
        // stub
    }

    /**
     * Get NULL action.
     *
     * @return ActionScheduler_NullAction
     */
    protected function get_null_action()
    {
        // stub
    }

    /**
     * Make action from post.
     *
     * @param WP_Post $post Post object.
     * @return WP_Post
     */
    protected function make_action_from_post($post)
    {
        // stub
    }

    /**
     * Get action status by post status.
     *
     * @param string $post_status Post status.
     *
     * @throws InvalidArgumentException Throw InvalidArgumentException if $post_status not in known status fields returned by $this->get_status_labels().
     * @return string
     */
    protected function get_action_status_by_post_status($post_status)
    {
        // stub
    }

    /**
     * Get post status by action status.
     *
     * @param string $action_status Action status.
     *
     * @throws InvalidArgumentException Throws InvalidArgumentException if $post_status not in known status fields returned by $this->get_status_labels().
     * @return string
     */
    protected function get_post_status_by_action_status($action_status)
    {
        // stub
    }

    /**
     * Returns the SQL statement to query (or count) actions.
     *
     * @param array  $query            - Filtering options.
     * @param string $select_or_count  - Whether the SQL should select and return the IDs or just the row count.
     *
     * @throws InvalidArgumentException - Throw InvalidArgumentException if $select_or_count not count or select.
     * @return string SQL statement. The returned SQL is already properly escaped.
     */
    protected function get_query_actions_sql(array $query, $select_or_count = 'select')
    {
        // stub
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
    public function query_actions($query = array (
), $query_type = 'select')
    {
        // stub
    }

    /**
     * Get a count of all actions in the store, grouped by status
     *
     * @return array
     */
    public function action_counts()
    {
        // stub
    }

    /**
     * Cancel action.
     *
     * @param int $action_id Action ID.
     *
     * @throws InvalidArgumentException If $action_id is not identified.
     */
    public function cancel_action($action_id)
    {
        // stub
    }

    /**
     * Delete action.
     *
     * @param int $action_id Action ID.
     * @return void
     * @throws InvalidArgumentException If action is not identified.
     */
    public function delete_action($action_id)
    {
        // stub
    }

    /**
     * Get date for claim id.
     *
     * @param int $action_id Action ID.
     * @return ActionScheduler_DateTime The date the action is schedule to run, or the date that it ran.
     */
    public function get_date($action_id)
    {
        // stub
    }

    /**
     * Get Date GMT.
     *
     * @param int $action_id Action ID.
     *
     * @throws InvalidArgumentException If $action_id is not identified.
     * @return ActionScheduler_DateTime The date the action is schedule to run, or the date that it ran.
     */
    public function get_date_gmt($action_id)
    {
        // stub
    }

    /**
     * Stake claim.
     *
     * @param int           $max_actions Maximum number of actions.
     * @param DateTime|null $before_date Jobs must be schedule before this date. Defaults to now.
     * @param array         $hooks       Claim only actions with a hook or hooks.
     * @param string        $group       Claim only actions in the given group.
     *
     * @return ActionScheduler_ActionClaim
     * @throws RuntimeException When there is an error staking a claim.
     * @throws InvalidArgumentException When the given group is not valid.
     */
    public function stake_claim($max_actions = 10, DateTime|null $before_date = null, $hooks = array (
), $group = '')
    {
        // stub
    }

    /**
     * Get claim count.
     *
     * @return int
     */
    public function get_claim_count()
    {
        // stub
    }

    /**
     * Generate claim id.
     *
     * @return string
     */
    protected function generate_claim_id()
    {
        // stub
    }

    /**
     * Claim actions.
     *
     * @param string        $claim_id    Claim ID.
     * @param int           $limit       Limit.
     * @param DateTime|null $before_date Should use UTC timezone.
     * @param array         $hooks       Claim only actions with a hook or hooks.
     * @param string        $group       Claim only actions in the given group.
     *
     * @return int The number of actions that were claimed.
     * @throws RuntimeException  When there is a database error.
     */
    protected function claim_actions($claim_id, $limit, DateTime|null $before_date = null, $hooks = array (
), $group = '')
    {
        // stub
    }

    /**
     * Get IDs of actions within a certain group and up to a certain date/time.
     *
     * @param string   $group The group to use in finding actions.
     * @param int      $limit The number of actions to retrieve.
     * @param DateTime $date  DateTime object representing cutoff time for actions. Actions retrieved will be
     *                        up to and including this DateTime.
     *
     * @return array IDs of actions in the appropriate group and before the appropriate time.
     * @throws InvalidArgumentException When the group does not exist.
     */
    protected function get_actions_by_group($group, $limit, DateTime $date)
    {
        // stub
    }

    /**
     * Find actions by claim ID.
     *
     * @param string $claim_id Claim ID.
     * @return array
     */
    public function find_actions_by_claim_id($claim_id)
    {
        // stub
    }

    /**
     * Release claim.
     *
     * @param ActionScheduler_ActionClaim $claim Claim object to release.
     * @return void
     * @throws RuntimeException When the claim is not unlocked.
     */
    public function release_claim(ActionScheduler_ActionClaim $claim)
    {
        // stub
    }

    /**
     * Unclaim action.
     *
     * @param string $action_id Action ID.
     * @throws RuntimeException When unable to unlock claim on action ID.
     */
    public function unclaim_action($action_id)
    {
        // stub
    }

    /**
     * Mark failure on action.
     *
     * @param int $action_id Action ID.
     *
     * @return void
     * @throws RuntimeException When unable to mark failure on action ID.
     */
    public function mark_failure($action_id)
    {
        // stub
    }

    /**
     * Return an action's claim ID, as stored in the post password column
     *
     * @param int $action_id Action ID.
     * @return mixed
     */
    public function get_claim_id($action_id)
    {
        // stub
    }

    /**
     * Return an action's status, as stored in the post status column
     *
     * @param int $action_id Action ID.
     *
     * @return mixed
     * @throws InvalidArgumentException When the action ID is invalid.
     */
    public function get_status($action_id)
    {
        // stub
    }

    /**
     * Get post column
     *
     * @param string $action_id Action ID.
     * @param string $column_name Column Name.
     *
     * @return string|null
     */
    private function get_post_column($action_id, $column_name)
    {
        // stub
    }

    /**
     * Log Execution.
     *
     * @throws Exception If the action status cannot be updated to self::STATUS_RUNNING ('in-progress').
     *
     * @param string $action_id Action ID.
     */
    public function log_execution($action_id)
    {
        // stub
    }

    /**
     * Record that an action was completed.
     *
     * @param string $action_id ID of the completed action.
     *
     * @throws InvalidArgumentException When the action ID is invalid.
     * @throws RuntimeException         When there was an error executing the action.
     */
    public function mark_complete($action_id)
    {
        // stub
    }

    /**
     * Mark action as migrated when there is an error deleting the action.
     *
     * @param int $action_id Action ID.
     */
    public function mark_migrated($action_id)
    {
        // stub
    }

    /**
     * Determine whether the post store can be migrated.
     *
     * @param [type] $setting - Setting value.
     * @return bool
     */
    public function migration_dependencies_met($setting)
    {
        // stub
    }

    /**
     * InnoDB indexes have a maximum size of 767 bytes by default, which is only 191 characters with utf8mb4.
     *
     * Previously, AS wasn't concerned about args length, as we used the (unindex) post_content column. However,
     * as we prepare to move to custom tables, and can use an indexed VARCHAR column instead, we want to warn
     * developers of this impending requirement.
     *
     * @param ActionScheduler_Action $action Action object.
     */
    protected function validate_action(ActionScheduler_Action $action)
    {
        // stub
    }

    /**
     * (@codeCoverageIgnore)
     */
    public function init()
    {
        // stub
    }

}
