<?php

/**
 * WC_Report_Downloads.
 */
class WC_Report_Downloads
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
     * Don't need this.
     *
     * @param string $position Top or bottom.
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
     * @param mixed  $item Item being displayed.
     * @param string $column_name Column name.
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
     * Prepare download list items.
     */
    public function prepare_items()
{
}
    /**
     * No items found text.
     */
    public function no_items()
{
}
    /**
     * Get filters from querystring.
     *
     * @return object
     */
    protected function get_filter_vars()
{
}
    /**
     * Get downloads matching criteria.
     *
     * @param int $current_page Current viewed page.
     * @param int $per_page How many results to show per page.
     */
    public function get_items($current_page, $per_page)
{
}
}
