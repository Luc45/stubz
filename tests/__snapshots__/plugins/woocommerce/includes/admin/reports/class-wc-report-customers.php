<?php

/**
 * WC_Report_Customers
 *
 * @package     WooCommerce\Admin\Reports
 * @version     2.1.0
 */
class WC_Report_Customers extends \WC_Admin_Report
{
    /**
     * Chart colors.
     *
     * @var array
     */
    public $chart_colours = array();

    /**
     * Customers.
     *
     * @var array
     */
    public $customers = array();

    /**
     * Get the legend for the main chart sidebar.
     *
     * @return array
     */
    public function get_chart_legend()
{
}
    /**
     * Get chart widgets.
     *
     * @return array
     */
    public function get_chart_widgets()
{
}
    /**
     * Output customers vs guests chart.
     */
    public function customers_vs_guests()
{
}
    /**
     * Output the report.
     */
    public function output_report()
{
}
    /**
     * Output an export link.
     */
    public function get_export_button()
{
}
    /**
     * Output the main chart.
     */
    public function get_main_chart()
{
}
}
