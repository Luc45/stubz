<?php

namespace Automattic\WooCommerce\Internal\Admin\Logging\FileV2;

/**
 * FileListTable class.
 */
class FileListTable extends \WP_List_Table
{
    public const PER_PAGE_USER_OPTION_KEY = 'woocommerce_logging_file_list_per_page';
    /**
     * FileListTable class.
     *
     * @param FileController $file_controller Instance of FileController.
     * @param PageController $page_controller Instance of PageController.
     */
    public function __construct(Automattic\WooCommerce\Internal\Admin\Logging\FileV2\FileController $file_controller, Automattic\WooCommerce\Internal\Admin\Logging\PageController $page_controller)
{
}
    /**
     * Render message when there are no items.
     *
     * @return void
     */
    public function no_items(): void
{
}
    /**
     * Retrieves the list of bulk actions available for this table.
     *
     * @return array
     */
    protected function get_bulk_actions(): array
{
}
    /**
     * Get the existing log sources for the filter dropdown.
     *
     * @return array
     */
    protected function get_sources_list(): array
{
}
    /**
     * Displays extra controls between bulk actions and pagination.
     *
     * @param string $which The location of the tablenav being rendered. 'top' or 'bottom'.
     *
     * @return void
     */
    protected function extra_tablenav($which): void
{
}
    /**
     * Set up the column header info.
     *
     * @return void
     */
    public function prepare_column_headers(): void
{
}
    /**
     * Prepares the list of items for displaying.
     *
     * @return void
     */
    public function prepare_items(): void
{
}
    /**
     * Gets a list of columns.
     *
     * @return array
     */
    public function get_columns(): array
{
}
    /**
     * Gets a list of sortable columns.
     *
     * @return array
     */
    protected function get_sortable_columns(): array
{
}
    /**
     * Render the checkbox column.
     *
     * @param File $item The current log file being rendered.
     *
     * @return string
     */
    public function column_cb($item): string
{
}
    /**
     * Render the source column.
     *
     * @param File $item The current log file being rendered.
     *
     * @return string
     */
    public function column_source($item): string
{
}
    /**
     * Render the created column.
     *
     * @param File $item The current log file being rendered.
     *
     * @return string
     */
    public function column_created($item): string
{
}
    /**
     * Render the modified column.
     *
     * @param File $item The current log file being rendered.
     *
     * @return string
     */
    public function column_modified($item): string
{
}
    /**
     * Render the size column.
     *
     * @param File $item The current log file being rendered.
     *
     * @return string
     */
    public function column_size($item): string
{
}
    /**
     * Helper to get the default value for the per_page arg.
     *
     * @return int
     */
    public function get_per_page_default(): int
{
}
}