<?php

namespace Automattic\WooCommerce\Internal\ProductDownloads\ApprovedDirectories\Admin;

/**
 * Admin list table used to render our current list of approved directories.
 */
class Table extends \WP_List_Table
{
    /**
     * Initialize the webhook table list.
     */
    public function __construct()
{
}
    /**
     * Sets up an items-per-page control.
     */
    private function items_per_page()
{
}
    /**
     * Saves the items-per-page setting.
     *
     * @param mixed  $default The default value.
     * @param string $option  The option being configured.
     * @param int    $value   The submitted option value.
     *
     * @return mixed
     */
    public function set_items_per_page($default, string $option, int $value)
{
}
    /**
     * No items found text.
     */
    public function no_items()
{
}
    /**
     * Displays the list of views available on this table.
     */
    public function render_views()
{
}
    /**
     * Get list columns.
     *
     * @return array
     */
    public function get_columns()
{
}
    /**
     * Checklist column, used for selecting items for processing by a bulk action.
     *
     * @param StoredUrl $item The approved directory information for the current row.
     *
     * @return string
     */
    public function column_cb($item)
{
}
    /**
     * URL column.
     *
     * @param StoredUrl $item The approved directory information for the current row.
     *
     * @return string
     */
    public function column_title($item)
{
}
    /**
     * Rule-is-enabled column.
     *
     * @param StoredUrl $item The approved directory information for the current row.
     *
     * @return string
     */
    public function column_enabled(Automattic\WooCommerce\Internal\ProductDownloads\ApprovedDirectories\StoredUrl $item): string
{
}
    /**
     * Get bulk actions.
     *
     * @return array
     */
    protected function get_bulk_actions()
{
}
    /**
     * Builds an action URL (ie, to edit or delete a row).
     *
     * @param string $action       The action to be created.
     * @param int    $id           The ID that is the subject of the action.
     * @param string $nonce_action Action used to add a nonce to the URL.
     *
     * @return string
     */
    public function get_action_url(string $action, int $id, string $nonce_action = 'modify_approved_directories'): string
{
}
    /**
     * Supplies the 'base' admin URL for this admin table.
     *
     * @return string
     */
    public function get_base_url(): string
{
}
    /**
     * Generate the table navigation above or below the table.
     * Included to remove extra nonce input.
     *
     * @param string $which The location of the extra table nav markup: 'top' or 'bottom'.
     */
    protected function display_tablenav($which)
{
}
    /**
     * Prepare table list items.
     */
    public function prepare_items()
{
}
}