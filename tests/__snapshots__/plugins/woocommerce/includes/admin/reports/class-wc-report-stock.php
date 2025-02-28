<?php
/**
 * WC_Report_Stock.
 *
 * @author      WooThemes
 * @category    Admin
 * @package     WooCommerce\Admin\Reports
 * @version     2.1.0
 */
class WC_Report_Stock extends \WP_List_Table
{
    /**
     * Max items.
     *
     * @var int
     */
    protected $max_items = null;
    /**
     * Constructor.
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
     * Don't need this.
     *
     * @param string $position
     */
    public function display_tablenav($position)
{
}
    /**
     * Output the report.
     */
    public function output_report()
{
}
    /**
     * Get column value.
     *
     * @param mixed  $item
     * @param string $column_name
     */
    public function column_default($item, $column_name)
{
}
    /**
     * Get columns.
     *
     * @return array
     */
    public function get_columns()
{
}
    /**
     * Prepare customer list items.
     */
    public function prepare_items()
{
}
}
