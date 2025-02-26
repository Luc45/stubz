<?php

namespace ;

/**
 * Tax Rates importer - import tax rates and local tax rates into WooCommerce.
 *
 * @package     WooCommerce\Admin\Importers
 * @version     2.3.0
 */
class WC_Tax_Rate_Importer
{
    /**
     * The current file id.
     *
     * @var int
     */
    public $id = null;

    /**
     * The current file url.
     *
     * @var string
     */
    public $file_url = null;

    /**
     * The current import page.
     *
     * @var string
     */
    public $import_page = null;

    /**
     * The current delimiter.
     *
     * @var string
     */
    public $delimiter = null;

    /**
     * Error message for import.
     *
     * @var string
     */
    public $import_error_message = null;

    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Registered callback function for the WordPress Importer.
     *
     * Manages the three separate stages of the CSV import process.
     */
    public function dispatch()
    {
        // stub
    }

    /**
     * Import is starting.
     */
    private function import_start()
    {
        // stub
    }

    /**
     * UTF-8 encode the data if `$enc` value isn't UTF-8.
     *
     * @param mixed  $data Data.
     * @param string $enc Encoding.
     * @return string
     */
    public function format_data_from_csv($data, $enc)
    {
        // stub
    }

    /**
     * Import the file if it exists and is valid.
     *
     * @param mixed $file File.
     */
    public function import($file)
    {
        // stub
    }

    /**
     * Performs post-import cleanup of files and the cache.
     */
    public function import_end()
    {
        // stub
    }

    /**
     * Set the import error message.
     *
     * @param string $message Error message.
     */
    protected function set_import_error_message($message)
    {
        // stub
    }

    /**
     * Handles the CSV upload and initial parsing of the file to prepare for.
     * displaying author import options.
     *
     * @return bool False if error uploading or invalid file, true otherwise
     */
    public function handle_upload()
    {
        // stub
    }

    /**
     * Output header html.
     */
    public function header()
    {
        // stub
    }

    /**
     * Output footer html.
     */
    public function footer()
    {
        // stub
    }

    /**
     * Output information about the uploading process.
     */
    public function greet()
    {
        // stub
    }

    /**
     * Show import error and quit.
     *
     * @param  string $message Error message.
     */
    private function import_error($message = '')
    {
        // stub
    }

    /**
     * Added to http_request_timeout filter to force timeout at 60 seconds during import.
     *
     * @param  int $val Value.
     * @return int 60
     */
    public function bump_request_timeout($val)
    {
        // stub
    }

}

