<?php

namespace Automattic\WooCommerce\Internal\Admin\Logging\FileV2;

/**
 * FileController class.
 */
class FileController
{
    const MAX_FILE_ROTATIONS = 10;

    const DEFAULTS_GET_FILES = array (
  'date_end' => 0,
  'date_filter' => '',
  'date_start' => 0,
  'offset' => 0,
  'order' => 'desc',
  'orderby' => 'modified',
  'per_page' => 20,
  'source' => '',
);

    const DEFAULTS_SEARCH_WITHIN_FILES = array (
  'offset' => 0,
  'per_page' => 50,
);

    const SEARCH_MAX_FILES = 100;

    const SEARCH_MAX_RESULTS = 200;

    const CACHE_GROUP = 'log-files';

    const SEARCH_CACHE_KEY = 'logs_previous_search';

    /**
     * Get the file size limit that determines when to rotate a file.
     *
     * @return int
     */
    private function get_file_size_limit(): int
{
}
    /**
     * Write a log entry to the appropriate file, after rotating the file if necessary.
     *
     * @param string   $source The source property of the log entry, which determines which file to write to.
     * @param string   $text   The contents of the log entry to add to a file.
     * @param int|null $time   Optional. The time of the log entry as a Unix timestamp. Defaults to the current time.
     *
     * @return bool True if the contents were successfully written to the file.
     */
    public function write_to_file(string $source, string $text, int|null $time = null): bool
{
}
    /**
     * Generate the full name of a file based on source and date values.
     *
     * @param string $source The source property of a log entry, which determines the filename.
     * @param int    $time   The time of the log entry as a Unix timestamp.
     *
     * @return string
     */
    private function generate_filename(string $source, int $time): string
{
}
    /**
     * Get all the rotations of a file and increment them, so that they overwrite the previous file with that rotation.
     *
     * @param string $file_id A file ID (file basename without the hash).
     *
     * @return bool True if the file and all its rotations were successfully rotated.
     */
    private function rotate_file($file_id): bool
{
}
    /**
     * Get an array of log files.
     *
     * @param array $args      {
     *     Optional. Arguments to filter and sort the files that are returned.
     *
     *     @type int    $date_end    The end of the date range to filter by, as a Unix timestamp.
     *     @type string $date_filter Filter files by one of the date props. 'created' or 'modified'.
     *     @type int    $date_start  The beginning of the date range to filter by, as a Unix timestamp.
     *     @type int    $offset      Omit this number of files from the beginning of the list. Works with $per_page to do pagination.
     *     @type string $order       The sort direction. 'asc' or 'desc'. Defaults to 'desc'.
     *     @type string $orderby     The property to sort the list by. 'created', 'modified', 'source', 'size'. Defaults to 'modified'.
     *     @type int    $per_page    The number of files to include in the list. Works with $offset to do pagination.
     *     @type string $source      Only include files from this source.
     * }
     * @param bool  $count_only Optional. True to return a total count of the files.
     *
     * @return File[]|int|WP_Error
     */
    public function get_files(array $args = array(), bool $count_only = false)
{
}
    /**
     * Get one or more File instances from an array of file IDs.
     *
     * @param array $file_ids An array of file IDs (file basename without the hash).
     *
     * @return File[]
     */
    public function get_files_by_id(array $file_ids): array
{
}
    /**
     * Get a File instance from a file ID.
     *
     * @param string $file_id A file ID (file basename without the hash).
     *
     * @return File|WP_Error
     */
    public function get_file_by_id(string $file_id)
{
}
    /**
     * Get File instances for a given file ID and all of its related rotations.
     *
     * @param string $file_id A file ID (file basename without the hash).
     *
     * @return File[]|WP_Error An associative array where the rotation integer of the file is the key, and a "current"
     *                         key for the iteration of the file that hasn't been rotated (if it exists).
     */
    public function get_file_rotations(string $file_id)
{
}
    /**
     * Helper method to get an array of File instances.
     *
     * @param array $paths An array of absolute file paths.
     *
     * @return File[]
     */
    private function convert_paths_to_objects(array $paths): array
{
}
    /**
     * Get a list of sources for existing log files.
     *
     * @return array|WP_Error
     */
    public function get_file_sources()
{
}
    /**
     * Delete one or more files from the filesystem.
     *
     * @param array $file_ids An array of file IDs (file basename without the hash).
     *
     * @return int The number of files that were deleted.
     */
    public function delete_files(array $file_ids): int
{
}
    /**
     * Stream a single file to the browser without zipping it first.
     *
     * @param string $file_id A file ID (file basename without the hash).
     *
     * @return WP_Error|void Only returns something if there is an error.
     */
    public function export_single_file($file_id)
{
}
    /**
     * Create a zip archive of log files and stream it to the browser.
     *
     * @param array $file_ids An array of file IDs (file basename without the hash).
     *
     * @return WP_Error|void Only returns something if there is an error.
     */
    public function export_multiple_files(array $file_ids)
{
}
    /**
     * Search within a set of log files for a particular string.
     *
     * @param string $search     The string to search for.
     * @param array  $args       Optional. Arguments for pagination of search results.
     * @param array  $file_args  Optional. Arguments to filter and sort the files that are returned. See get_files().
     * @param bool   $count_only Optional. True to return a total count of the matches.
     *
     * @return array|int|WP_Error When matches are found, each array item is an associative array that includes the
     *                            file ID, line number, and the matched string with HTML markup around the matched parts.
     */
    public function search_within_files(string $search, array $args = array(), array $file_args = array(), bool $count_only = false)
{
}
    /**
     * Calculate the size, in bytes, of the log directory.
     *
     * @return int
     */
    public function get_log_directory_size(): int
{
}
    /**
     * Invalidate the cache group related to log file data.
     *
     * @return bool True on successfully invalidating the cache.
     */
    public function invalidate_cache(): bool
{
}
}