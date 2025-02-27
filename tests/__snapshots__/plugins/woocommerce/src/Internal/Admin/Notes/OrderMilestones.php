<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

/**
 * Order_Milestones
 */
class OrderMilestones
{
    const NOTE_NAME = 'wc-admin-orders-milestone';

    const LAST_ORDER_MILESTONE_OPTION_KEY = 'woocommerce_admin_last_orders_milestone';

    const PROCESS_ORDERS_MILESTONE_HOOK = 'wc_admin_process_orders_milestone';

    /**
     * Allowed order statuses for calculating milestones.
     *
     * @var array
     */
    protected $allowed_statuses = array (
  0 => 'pending',
  1 => 'processing',
  2 => 'completed',
);

    /**
     * Orders count cache.
     *
     * @var int
     */
    protected $orders_count = null;

    /**
     * Further order milestone thresholds.
     *
     * @var array
     */
    protected $milestones = array (
  0 => 1,
  1 => 10,
  2 => 100,
  3 => 250,
  4 => 500,
  5 => 1000,
  6 => 5000,
  7 => 10000,
  8 => 500000,
  9 => 1000000,
);

    /**
     * Delay hook attachment until after the WC post types have been registered.
     *
     * This is required for retrieving the order count.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Hook everything up.
     */
    public function init()
    {
        // stub
    }

    /**
     * Clear out our hourly milestone hook upon plugin deactivation.
     */
    public function clear_scheduled_event()
    {
        // stub
    }

    /**
     * Get the total count of orders (in the allowed statuses).
     *
     * @param bool $no_cache Optional. Skip cache.
     * @return int Total orders count.
     */
    public function get_orders_count($no_cache = false)
    {
        // stub
    }

    /**
     * Backfill the store's current milestone.
     *
     * Used to avoid celebrating milestones that were reached before plugin activation.
     */
    public function backfill_last_milestone()
    {
        // stub
    }

    /**
     * Get the store's last milestone.
     *
     * @return int Last milestone reached.
     */
    public function get_last_milestone()
    {
        // stub
    }

    /**
     * Update the last reached milestone.
     *
     * @param int $milestone Last milestone reached.
     */
    public function set_last_milestone($milestone)
    {
        // stub
    }

    /**
     * Calculate the current orders milestone.
     *
     * Based on the threshold values in $this->milestones.
     *
     * @return int Current orders milestone.
     */
    public function get_current_milestone()
    {
        // stub
    }

    /**
     * Get the appropriate note title for a given milestone.
     *
     * @param int $milestone Order milestone.
     * @return string Note title for the milestone.
     */
    public static function get_note_title_for_milestone($milestone)
    {
        // stub
    }

    /**
     * Get the appropriate note content for a given milestone.
     *
     * @param int $milestone Order milestone.
     * @return string Note content for the milestone.
     */
    public static function get_note_content_for_milestone($milestone)
    {
        // stub
    }

    /**
     * Get the appropriate note action for a given milestone.
     *
     * @param int $milestone Order milestone.
     * @return array Note actoion (name, label, query) for the milestone.
     */
    public static function get_note_action_for_milestone($milestone)
    {
        // stub
    }

    /**
     * Convenience method to see if the milestone notes are enabled.
     *
     * @return boolean True if milestone notifications are enabled.
     */
    public function are_milestones_enabled()
    {
        // stub
    }

    /**
     * Get the note. This is used for localizing the note.
     *
     * @return Note
     */
    public static function get_note()
    {
        // stub
    }

    /**
     * Get the note by milestones.
     *
     * @param int $current_milestone Current milestone.
     *
     * @return Note
     */
    public static function get_note_by_milestone($current_milestone)
    {
        // stub
    }

    /**
     * Checks if a note can and should be added.
     *
     * @return bool
     */
    public function can_be_added()
    {
        // stub
    }

    /**
     * Add milestone notes for other significant thresholds.
     */
    public function possibly_add_note()
    {
        // stub
    }

}