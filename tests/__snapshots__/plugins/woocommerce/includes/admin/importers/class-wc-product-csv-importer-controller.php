<?php
/**
 * Product importer controller - handles file upload and forms in admin.
 *
 * @package     WooCommerce\Admin\Importers
 * @version     3.1.0
 */
class WC_Product_CSV_Importer_Controller
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
    protected $steps = array();
    /**
     * Errors.
     *
     * @var array
     */
    protected $errors = array();
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
    public static function get_importer($file, $args = array())
{
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
}
    /**
     * Get all the valid filetypes for a CSV file.
     *
     * @return array
     */
    protected static function get_valid_csv_filetypes()
{
}
    /**
     * Constructor.
     */
    public function __construct()
{
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
}
    /**
     * Output header view.
     */
    protected function output_header()
{
}
    /**
     * Output steps view.
     */
    protected function output_steps()
{
}
    /**
     * Output footer view.
     */
    protected function output_footer()
{
}
    /**
     * Add error message.
     *
     * @param string $message Error message.
     * @param array  $actions List of actions with 'url' and 'label'.
     */
    protected function add_error($message, $actions = array())
{
}
    /**
     * Add error message.
     */
    protected function output_errors()
{
}
    /**
     * Dispatch current step and show correct view.
     */
    public function dispatch()
{
}
    /**
     * Processes AJAX requests related to a product CSV import.
     *
     * @since 9.3.0
     */
    public static function dispatch_ajax()
{
}
    /**
     * Output information about the uploading process.
     */
    protected function upload_form()
{
}
    /**
     * Handle the upload form and store options.
     */
    public function upload_form_handler()
{
}
    /**
     * Handles the CSV upload and initial parsing of the file to prepare for
     * displaying author import options.
     *
     * @return string|WP_Error
     */
    public function handle_upload()
{
}
    /**
     * Mapping step.
     */
    protected function mapping_form()
{
}
    /**
     * Import the file if it exists and is valid.
     */
    public function import()
{
}
    /**
     * Done step.
     */
    protected function done()
{
}
    /**
     * Columns to normalize.
     *
     * @param  array $columns List of columns names and keys.
     * @return array
     */
    protected function normalize_columns_names($columns)
{
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
}
    /**
     * Map columns using the user's latest import mappings.
     *
     * @param  array $headers Header columns.
     * @return array
     */
    public function auto_map_user_preferences($headers)
{
}
    /**
     * Sanitize special column name regex.
     *
     * @param  string $value Raw special column name.
     * @return string
     */
    protected function sanitize_special_column_name_regex($value)
{
}
    /**
     * Get special columns.
     *
     * @param  array $columns Raw special columns.
     * @return array
     */
    protected function get_special_columns($columns)
{
}
    /**
     * Get mapping options.
     *
     * @param  string $item Item name.
     * @return array
     */
    protected function get_mapping_options($item = '')
{
}
}
