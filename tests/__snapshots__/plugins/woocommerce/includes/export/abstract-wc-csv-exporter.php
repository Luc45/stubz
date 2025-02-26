<?php

namespace ;

/**
 * WC_CSV_Exporter Class.
 */
abstract class WC_CSV_Exporter
{
    /**
     * Type of export used in filter names.
     *
     * @var string
     */
    protected $export_type = '';

    /**
     * Filename to export to.
     *
     * @var string
     */
    protected $filename = 'wc-export.csv';

    /**
     * Batch limit.
     *
     * @var integer
     */
    protected $limit = 50;

    /**
     * Number exported.
     *
     * @var integer
     */
    protected $exported_row_count = 0;

    /**
     * Raw data to export.
     *
     * @var array
     */
    protected $row_data = array (
);

    /**
     * Total rows to export.
     *
     * @var integer
     */
    protected $total_rows = 0;

    /**
     * Columns ids and names.
     *
     * @var array
     */
    protected $column_names = array (
);

    /**
     * List of columns to export, or empty for all.
     *
     * @var array
     */
    protected $columns_to_export = array (
);

    /**
     * The delimiter parameter sets the field delimiter (one character only).
     *
     * @var string
     */
    protected $delimiter = ',';

    /**
     * Prepare data that will be exported.
     */
    public abstract function prepare_data_to_export();

    /**
     * Return an array of supported column names and ids.
     *
     * @since 3.1.0
     * @return array
     */
    public function get_column_names()
    {
        // stub
    }

    /**
     * Set column names.
     *
     * @since 3.1.0
     * @param array $column_names Column names array.
     */
    public function set_column_names($column_names)
    {
        // stub
    }

    /**
     * Return an array of columns to export.
     *
     * @since 3.1.0
     * @return array
     */
    public function get_columns_to_export()
    {
        // stub
    }

    /**
     * Return the delimiter to use in CSV file
     *
     * @since 3.9.0
     * @return string
     */
    public function get_delimiter()
    {
        // stub
    }

    /**
     * Set columns to export.
     *
     * @since 3.1.0
     * @param array $columns Columns array.
     */
    public function set_columns_to_export($columns)
    {
        // stub
    }

    /**
     * See if a column is to be exported or not.
     *
     * @since 3.1.0
     * @param  string $column_id ID of the column being exported.
     * @return boolean
     */
    public function is_column_exporting($column_id)
    {
        // stub
    }

    /**
     * Return default columns.
     *
     * @since 3.1.0
     * @return array
     */
    public function get_default_column_names()
    {
        // stub
    }

    /**
     * Do the export.
     *
     * @since 3.1.0
     */
    public function export()
    {
        // stub
    }

    /**
     * Set the export headers.
     *
     * @since 3.1.0
     */
    public function send_headers()
    {
        // stub
    }

    /**
     * Set filename to export to.
     *
     * @param  string $filename Filename to export to.
     */
    public function set_filename($filename)
    {
        // stub
    }

    /**
     * Generate and return a filename.
     *
     * @return string
     */
    public function get_filename()
    {
        // stub
    }

    /**
     * Set the export content.
     *
     * @since 3.1.0
     * @param string $csv_data All CSV content.
     */
    public function send_content($csv_data)
    {
        // stub
    }

    /**
     * Get CSV data for this export.
     *
     * @since 3.1.0
     * @return string
     */
    protected function get_csv_data()
    {
        // stub
    }

    /**
     * Export column headers in CSV format.
     *
     * @since 3.1.0
     * @return string
     */
    protected function export_column_headers()
    {
        // stub
    }

    /**
     * Get data that will be exported.
     *
     * @since 3.1.0
     * @return array
     */
    protected function get_data_to_export()
    {
        // stub
    }

    /**
     * Export rows in CSV format.
     *
     * @since 3.1.0
     * @return string
     */
    protected function export_rows()
    {
        // stub
    }

    /**
     * Export rows to an array ready for the CSV.
     *
     * @since 3.1.0
     * @param array    $row_data Data to export.
     * @param string   $key Column being exported.
     * @param resource $buffer Output buffer.
     */
    protected function export_row($row_data, $key, $buffer)
    {
        // stub
    }

    /**
     * Get batch limit.
     *
     * @since 3.1.0
     * @return int
     */
    public function get_limit()
    {
        // stub
    }

    /**
     * Set batch limit.
     *
     * @since 3.1.0
     * @param int $limit Limit to export.
     */
    public function set_limit($limit)
    {
        // stub
    }

    /**
     * Get count of records exported.
     *
     * @since 3.1.0
     * @return int
     */
    public function get_total_exported()
    {
        // stub
    }

    /**
     * Escape a string to be used in a CSV context
     *
     * Malicious input can inject formulas into CSV files, opening up the possibility
     * for phishing attacks and disclosure of sensitive information.
     *
     * Additionally, Excel exposes the ability to launch arbitrary commands through
     * the DDE protocol.
     *
     * Number values are not escaped since a pure numeric value cannot form a valid formula to be injected.
     * This preserves negative numeric values (e.g. `-42`) as numbers in the CSV output.
     *
     * @see https://owasp.org/www-community/attacks/CSV_Injection
     * @see https://hackerone.com/reports/72785
     *
     * @since 3.1.0
     * @param string $data CSV field to escape.
     * @return string
     */
    public function escape_data($data)
    {
        // stub
    }

    /**
     * Format and escape data ready for the CSV file.
     *
     * @since 3.1.0
     * @param  string $data Data to format.
     * @return string
     */
    public function format_data($data)
    {
        // stub
    }

    /**
     * Format term ids to names.
     *
     * @since 3.1.0
     * @param  array  $term_ids Term IDs to format.
     * @param  string $taxonomy Taxonomy name.
     * @return string
     */
    public function format_term_ids($term_ids, $taxonomy)
    {
        // stub
    }

    /**
     * Implode CSV cell values using commas by default, and wrapping values
     * which contain the separator.
     *
     * @since  3.2.0
     * @param  array $values Values to implode.
     * @return string
     */
    protected function implode_values($values)
    {
        // stub
    }

    /**
     * Write to the CSV file.
     *
     * @since 3.4.0
     * @param resource $buffer Resource we are writing to.
     * @param array    $export_row Row to export.
     */
    protected function fputcsv($buffer, $export_row)
    {
        // stub
    }

}

