<?php

/**
 * Class ActionScheduler_AdminView
 *
 * @codeCoverageIgnore
 */
class ActionScheduler_AdminView extends \ActionScheduler_AdminView_Deprecated
{
    /**
     * ActionScheduler_ListTable instance.
     *
     * @var ActionScheduler_ListTable
     */
    protected $list_table;
    /**
     * Get instance.
     *
     * @return ActionScheduler_AdminView
     * @codeCoverageIgnore
     */
    public static function instance()
    {
    }
    /**
     * Initialize.
     *
     * @codeCoverageIgnore
     */
    public function init()
    {
    }
    /**
     * Print system status report.
     */
    public function system_status_report()
    {
    }
    /**
     * Registers action-scheduler into WooCommerce > System status.
     *
     * @param array $tabs An associative array of tab key => label.
     * @return array $tabs An associative array of tab key => label, including Action Scheduler's tabs
     */
    public function register_system_status_tab(array $tabs)
    {
    }
    /**
     * Include Action Scheduler's administration under the Tools menu.
     *
     * A menu under the Tools menu is important for backward compatibility (as that's
     * where it started), and also provides more convenient access than the WooCommerce
     * System Status page, and for sites where WooCommerce isn't active.
     */
    public function register_menu()
    {
    }
    /**
     * Triggers processing of any pending actions.
     */
    public function process_admin_ui()
    {
    }
    /**
     * Renders the Admin UI
     */
    public function render_admin_ui()
    {
    }
    /**
     * Get the admin UI object and process any requested actions.
     *
     * @return ActionScheduler_ListTable
     */
    protected function get_list_table()
    {
    }
    /**
     * Action: admin_notices
     *
     * Maybe check past-due actions, and print notice.
     *
     * @uses $this->check_pastdue_actions()
     */
    public function maybe_check_pastdue_actions()
    {
    }
    /**
     * Check past-due actions, and print notice.
     */
    protected function check_pastdue_actions()
    {
    }
    /**
     * Provide more information about the screen and its data in the help tab.
     */
    public function add_help_tabs()
    {
    }
}
