<?php

namespace Automattic\WooCommerce\Admin;

/**
 * ReportCSVExporter Class.
 */
class ReportCSVExporter extends \WC_CSV_Batch_Exporter
{
    /**
     * Type of report being exported.
     *
     * @var string
     */
    protected $report_type;
    /**
     * Parameters for the report query.
     *
     * @var array
     */
    protected $report_args;
    /**
     * REST controller for the report.
     *
     * @var WC_REST_Reports_Controller
     */
    protected $controller;
    /**
     * Constructor.
     *
     * @param string $type Report type. E.g. 'customers'.
     * @param array  $args Report parameters.
     */
    public function __construct($type = false, $args = array())
    {
    }
    /**
     * Create the directory for reports if it does not yet exist.
     */
    public static function maybe_create_directory()
    {
    }
    /**
     * Get report uploads directory.
     *
     * @return string
     */
    public static function get_reports_directory()
    {
    }
    /**
     * Get file path to export to.
     *
     * @return string
     */
    protected function get_file_path()
    {
    }
    /**
     * Setter for report type.
     *
     * @param string $type The report type. E.g. customers.
     */
    public function set_report_type($type)
    {
    }
    /**
     * Setter for report args.
     *
     * @param array $args The report args.
     */
    public function set_report_args($args)
    {
    }
    /**
     * Get a REST controller instance for the report type.
     *
     * @return bool|WC_REST_Reports_Controller Report controller instance or boolean false on error.
     */
    protected function map_report_controller()
    {
    }
    /**
     * Get the report columns from the controller.
     *
     * @return array Array of report column names.
     */
    protected function get_report_columns()
    {
    }
    /**
     * Get total % complete.
     *
     * Forces an int from parent::get_percent_complete(), which can return a float.
     *
     * @return int Percent complete.
     */
    public function get_percent_complete()
    {
    }
    /**
     * Get total number of rows in export.
     *
     * @return int Number of rows to export.
     */
    public function get_total_rows()
    {
    }
    /**
     * Prepare data for export.
     */
    public function prepare_data_to_export()
    {
    }
    /**
     * Generate row data from a raw report item.
     *
     * @param object $item Report item data.
     * @return array CSV row data.
     */
    protected function get_raw_row_data($item)
    {
    }
    /**
     * Get the export row for a given report item.
     *
     * @param object $item Report item data.
     * @return array CSV row data.
     */
    protected function generate_row_data($item)
    {
    }
}