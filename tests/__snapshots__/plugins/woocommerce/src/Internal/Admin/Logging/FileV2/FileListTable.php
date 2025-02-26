<?php

namespace Automattic\WooCommerce\Internal\Admin\Logging\FileV2;

/**
 * FileListTable class.
 */
class FileListTable
{
    const PER_PAGE_USER_OPTION_KEY = 'woocommerce_logging_file_list_per_page';

    /**
     * Instance of FileController.
     *
     * @var FileController
     */
    private $file_controller = null;

    /**
     * Instance of PageController.
     *
     * @var PageController
     */
    private $page_controller = null;

    /**
     * FileListTable class.
     *
     * @param FileController $file_controller Instance of FileController.
     * @param PageController $page_controller Instance of PageController.
     */
    public function __construct(Automattic\WooCommerce\Internal\Admin\Logging\FileV2\FileController $file_controller, Automattic\WooCommerce\Internal\Admin\Logging\PageController $page_controller)
    {
        // stub
    }

    /**
     * Render message when there are no items.
     *
     * @return void
     */
    public function no_items(): void
    {
        // stub
    }

    /**
     * Retrieves the list of bulk actions available for this table.
     *
     * @return array
     */
    protected function get_bulk_actions(): array
    {
        // stub
    }

    /**
     * Get the existing log sources for the filter dropdown.
     *
     * @return array
     */
    protected function get_sources_list(): array
    {
        // stub
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
        // stub
    }

    /**
     * Set up the column header info.
     *
     * @return void
     */
    public function prepare_column_headers(): void
    {
        // stub
    }

    /**
     * Prepares the list of items for displaying.
     *
     * @return void
     */
    public function prepare_items(): void
    {
        // stub
    }

    /**
     * Gets a list of columns.
     *
     * @return array
     */
    public function get_columns(): array
    {
        // stub
    }

    /**
     * Gets a list of sortable columns.
     *
     * @return array
     */
    protected function get_sortable_columns(): array
    {
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Helper to get the default value for the per_page arg.
     *
     * @return int
     */
    public function get_per_page_default(): int
    {
        // stub
    }

}

