<?php

/**
 * WC_CSV_Exporter Class.
 */
abstract class WC_CSV_Batch_Exporter extends \WC_CSV_Exporter
{
    /**
     * Page being exported
     *
     * @var integer
     */
    protected $page = 1;
    /**
     * Constructor.
     */
    public function __construct()
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
     * Get CSV headers row file path to export to.
     *
     * @return string
     */
    protected function get_headers_row_file_path()
    {
    }
    /**
     * Get the contents of the CSV headers row file. Defaults to the original known headers.
     *
     * @since 3.1.0
     * @return string
     */
    public function get_headers_row_file()
    {
    }
    /**
     * Get the file contents.
     *
     * @since 3.1.0
     * @return string
     */
    public function get_file()
    {
    }
    /**
     * Serve the file and remove once sent to the client.
     *
     * @since 3.1.0
     */
    public function export()
    {
    }
    /**
     * Generate the CSV file.
     *
     * @since 3.1.0
     */
    public function generate_file()
    {
    }
    /**
     * Write data to the file.
     *
     * @since 3.1.0
     * @param string $data Data.
     */
    protected function write_csv_data($data)
    {
    }
    /**
     * Get page.
     *
     * @since 3.1.0
     * @return int
     */
    public function get_page()
    {
    }
    /**
     * Set page.
     *
     * @since 3.1.0
     * @param int $page Page Nr.
     */
    public function set_page($page)
    {
    }
    /**
     * Get count of records exported.
     *
     * @since 3.1.0
     * @return int
     */
    public function get_total_exported()
    {
    }
    /**
     * Get total % complete.
     *
     * @since 3.1.0
     * @return int
     */
    public function get_percent_complete()
    {
    }
}
