<?php

namespace Automattic\WooCommerce\Internal\Admin\Logging\FileV2;

/**
 * SearchListTable class.
 */
class SearchListTable extends \WP_List_Table
{
    const PER_PAGE_USER_OPTION_KEY = 'woocommerce_logging_search_results_per_page';

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
     * SearchListTable class.
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
     * Render the file_id column.
     *
     * @param array $item The current search result being rendered.
     *
     * @return string
     */
    public function column_file_id(array $item): string
    {
        // stub
    }

    /**
     * Render the line_number column.
     *
     * @param array $item The current search result being rendered.
     *
     * @return string
     */
    public function column_line_number(array $item): string
    {
        // stub
    }

    /**
     * Render the line column.
     *
     * @param array $item The current search result being rendered.
     *
     * @return string
     */
    public function column_line(array $item): string
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

