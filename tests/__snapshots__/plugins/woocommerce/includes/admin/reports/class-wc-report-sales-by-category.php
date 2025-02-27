<?php

/**
 * WC_Report_Sales_By_Category
 *
 * @package     WooCommerce\Admin\Reports
 * @version     2.1.0
 */
class WC_Report_Sales_By_Category
{
    /**
     * Chart colors.
     *
     * @var array
     */
    public $chart_colours = array (
);

    /**
     * Categories ids.
     *
     * @var array
     */
    public $show_categories = array (
);

    /**
     * Item sales.
     *
     * @var array
     */
    private $item_sales = array (
);

    /**
     * Item sales and times.
     *
     * @var array
     */
    private $item_sales_and_times = array (
);

    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Get all product ids in a category (and its children).
     *
     * @param  int $category_id Category ID.
     * @return array
     */
    public function get_products_in_category($category_id)
    {
        // stub
    }

    /**
     * Get the legend for the main chart sidebar.
     *
     * @return array
     */
    public function get_chart_legend()
    {
        // stub
    }

    /**
     * Output the report.
     */
    public function output_report()
    {
        // stub
    }

    /**
     * Get chart widgets.
     *
     * @return array
     */
    public function get_chart_widgets()
    {
        // stub
    }

    /**
     * Output category widget.
     */
    public function category_widget()
    {
        // stub
    }

    /**
     * Output an export link.
     */
    public function get_export_button()
    {
        // stub
    }

    /**
     * Get the main chart.
     */
    public function get_main_chart()
    {
        // stub
    }

}
