<?php
/**
 * API Keys table list class.
 */
class WC_Admin_API_Keys_Table_List extends \WP_List_Table
{
    /**
     * Initialize the API key table list.
     */
    public function __construct()
{
}
    /**
     * No items found text.
     */
    public function no_items()
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
     * Column cb.
     *
     * @param  array $key Key data.
     * @return string
     */
    public function column_cb($key)
{
}
    /**
     * Return title column.
     *
     * @param  array $key Key data.
     * @return string
     */
    public function column_title($key)
{
}
    /**
     * Return truncated consumer key column.
     *
     * @param  array $key Key data.
     * @return string
     */
    public function column_truncated_key($key)
{
}
    /**
     * Return user column.
     *
     * @param  array $key Key data.
     * @return string
     */
    public function column_user($key)
{
}
    /**
     * Return permissions column.
     *
     * @param  array $key Key data.
     * @return string
     */
    public function column_permissions($key)
{
}
    /**
     * Return last access column.
     *
     * @param  array $key Key data.
     * @return string
     */
    public function column_last_access($key)
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
     * Search box.
     *
     * @param  string $text     Button text.
     * @param  string $input_id Input ID.
     */
    public function search_box($text, $input_id)
{
}
    /**
     * Prepare table list items.
     */
    public function prepare_items()
{
}
}
