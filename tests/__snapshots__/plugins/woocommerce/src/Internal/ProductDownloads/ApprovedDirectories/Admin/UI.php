<?php

namespace Automattic\WooCommerce\Internal\ProductDownloads\ApprovedDirectories\Admin;

/**
 * Manages user interactions for product download URL safety.
 */
class UI
{
    /**
     * The active register of approved directories.
     *
     * @var Register
     */
    private $register = null;

    /**
     * The WP_List_Table instance used to display approved directories.
     *
     * @var Table
     */
    private $table = null;

    /**
     * Sets up UI controls for product download URLs.
     *
     * @internal
     *
     * @param Register $register Register of approved directories.
     */
    final public function init(Automattic\WooCommerce\Internal\ProductDownloads\ApprovedDirectories\Register $register)
{
}
    /**
     * Performs any work needed to add hooks and otherwise integrate with the wider system,
     * except in the case where the current user is not a site administrator, no hooks will
     * be initialized.
     */
    final public function init_hooks()
{
}
    /**
     * Injects our new settings section (when approved directory rules are disabled, it will not show).
     *
     * @param array $sections Other admin settings sections.
     *
     * @return array
     */
    public function add_section(array $sections): array
{
}
    /**
     * Sets up the table, renders any notices and processes actions as needed.
     */
    public function setup()
{
}
    /**
     * Renders the UI.
     */
    public function render()
{
}
    /**
     * Indicates if we are currently on the download URLs admin screen.
     *
     * @return bool
     */
    private function is_download_urls_screen(): bool
{
}
    /**
     * Process bulk and single-row actions.
     */
    private function process_actions()
{
}
    /**
     * Support pagination across search results.
     *
     * In the context of the WC settings screen, form data is submitted by the post method: that poses
     * a problem for the default WP_List_Table pagination logic which expects the search value to live
     * as part of the URL query. This method is a simple shim to bridge the resulting gap.
     */
    private function handle_search()
{
}
    /**
     * Handles updating or adding a new URL to the list of approved directories.
     *
     * @param int $url_id The ID of the rule to be edited/created. Zero if we are creating a new entry.
     */
    private function process_edits(int $url_id)
{
}
    /**
     * Processes actions that can be applied in bulk (requests to delete, enable
     * or disable).
     *
     * @param int[]  $ids    The ID(s) to be updates.
     * @param string $action The action to be applied.
     */
    private function process_bulk_actions(array $ids, string $action)
{
}
    /**
     * Handles the enable/disable-all actions.
     *
     * @param string $action The action to be applied.
     */
    private function process_all_actions(string $action)
{
}
    /**
     * Handles turning on/off the entire approved download directory system (vs enabling
     * and disabling of individual rules).
     *
     * @param string $action Whether the feature should be turned on or off.
     */
    private function process_on_off(string $action)
{
}
    /**
     * Displays the screen title, etc.
     */
    private function display_title()
{
}
    /**
     * Renders the editor screen for approved directory URLs.
     *
     * @param int $url_id The ID of the rule to be edited (may be zero for new rules).
     */
    private function edit_screen(int $url_id)
{
}
    /**
     * Displays any admin notices that might be needed.
     */
    private function admin_notices()
{
}
    /**
     * Makes sure the user has appropriate permissions and that we have a valid nonce.
     */
    private function security_check()
{
}
}