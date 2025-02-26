<?php

namespace ;

/**
 * Product importer controller - handles file upload and forms in admin.
 *
 * @package     WooCommerce\Admin\Importers
 * @version     3.1.0
 */
class WC_Product_CSV_Importer_Controller extends \
{
    /**
     * The path to the current file.
     *
     * @var string
     */
    protected $file = '';

    /**
     * The current import step.
     *
     * @var string
     */
    protected $step = '';

    /**
     * Progress steps.
     *
     * @var array
     */
    protected $steps = array(
);

    /**
     * Errors.
     *
     * @var array
     */
    protected $errors = array(
);

    /**
     * The current delimiter for the file being read.
     *
     * @var string
     */
    protected $delimiter = ',';

    /**
     * Whether to use previous mapping selections.
     *
     * @var bool
     */
    protected $map_preferences = false;

    /**
     * Whether to skip existing products.
     *
     * @var bool
     */
    protected $update_existing = false;

    /**
     * The character encoding to use to interpret the input file, or empty string for autodetect.
     *
     * @var string
     */
    protected $character_encoding = 'UTF-8';

    /**
     * Get importer instance.
     *
     * @param  string $file File to import.
     * @param  array  $args Importer arguments.
     * @return WC_Product_CSV_Importer
     */
    public static function get_importer($file, $args = array(
))
    {
        // stub
    }

    /**
     * Check whether a file is a valid CSV file.
     *
     * @param string $file File path.
     * @param bool   $check_path Whether to also check the file is located in a valid location (Default: true).
     * @return bool
     */
    public static function is_file_valid_csv($file, $check_path = true)
    {
        // stub
    }

    /**
     * Runs before controller actions to check that the file used during the import is valid.
     *
     * @since 9.3.0
     *
     * @param string $path Path to test.
     *
     * @throws \Exception When file validation fails.
     */
    protected static function check_file_path(string $path): void
    {
        // stub
    }

    /**
     * Check if a given file is inside a given directory.
     *
     * @param string $file_path The full path of the file to check.
     * @param string $directory The path of the directory to check.
     * @return bool True if the file is inside the directory.
     */
    private static function file_is_in_directory(string $file_path, string $directory): bool
    {
        // stub
    }

    /**
     * Get all the valid filetypes for a CSV file.
     *
     * @return array
     */
    protected static function get_valid_csv_filetypes()
    {
        // stub
    }

    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Get the URL for the next step's screen.
     *
     * @param string $step  slug (default: current step).
     * @return string       URL for next step if a next step exists.
     *                      Admin URL if it's the last step.
     *                      Empty string on failure.
     */
    public function get_next_step_link($step = '')
    {
        // stub
    }

    /**
     * Output header view.
     */
    protected function output_header()
    {
        // stub
    }

    /**
     * Output steps view.
     */
    protected function output_steps()
    {
        // stub
    }

    /**
     * Output footer view.
     */
    protected function output_footer()
    {
        // stub
    }

    /**
     * Add error message.
     *
     * @param string $message Error message.
     * @param array  $actions List of actions with 'url' and 'label'.
     */
    protected function add_error($message, $actions = array(
))
    {
        // stub
    }

    /**
     * Add error message.
     */
    protected function output_errors()
    {
        // stub
    }

    /**
     * Dispatch current step and show correct view.
     */
    public function dispatch()
    {
        // stub
    }

    /**
     * Processes AJAX requests related to a product CSV import.
     *
     * @since 9.3.0
     */
    public static function dispatch_ajax()
    {
        // stub
    }

    /**
     * Output information about the uploading process.
     */
    protected function upload_form()
    {
        // stub
    }

    /**
     * Handle the upload form and store options.
     */
    public function upload_form_handler()
    {
        // stub
    }

    /**
     * Handles the CSV upload and initial parsing of the file to prepare for
     * displaying author import options.
     *
     * @return string|WP_Error
     */
    public function handle_upload()
    {
        // stub
    }

    /**
     * Mapping step.
     */
    protected function mapping_form()
    {
        // stub
    }

    /**
     * Import the file if it exists and is valid.
     */
    public function import()
    {
        // stub
    }

    /**
     * Done step.
     */
    protected function done()
    {
        // stub
    }

    /**
     * Columns to normalize.
     *
     * @param  array $columns List of columns names and keys.
     * @return array
     */
    protected function normalize_columns_names($columns)
    {
        // stub
    }

    /**
     * Auto map column names.
     *
     * @param  array $raw_headers Raw header columns.
     * @param  bool  $num_indexes If should use numbers or raw header columns as indexes.
     * @return array
     */
    protected function auto_map_columns($raw_headers, $num_indexes = true)
    {
        // stub
    }

    /**
     * Map columns using the user's latest import mappings.
     *
     * @param  array $headers Header columns.
     * @return array
     */
    public function auto_map_user_preferences($headers)
    {
        // stub
    }

    /**
     * Sanitize special column name regex.
     *
     * @param  string $value Raw special column name.
     * @return string
     */
    protected function sanitize_special_column_name_regex($value)
    {
        // stub
    }

    /**
     * Get special columns.
     *
     * @param  array $columns Raw special columns.
     * @return array
     */
    protected function get_special_columns($columns)
    {
        // stub
    }

    /**
     * Get mapping options.
     *
     * @param  string $item Item name.
     * @return array
     */
    protected function get_mapping_options($item = '')
    {
        // stub
    }

}

