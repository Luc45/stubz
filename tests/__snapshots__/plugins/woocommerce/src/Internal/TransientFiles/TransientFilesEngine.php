<?php

namespace Automattic\WooCommerce\Internal\TransientFiles;

/**
 * Transient files engine class.
 *
 * This class contains methods that allow creating files that have an expiration date.
 *
 * A transient file is created by invoking the create_transient_file method, which accepts the file contents
 * and the expiration date as arguments. Transient file names are composed by concatenating the expiration date
 * encoded in hexadecimal (3 digits for the year, 1 for the month and 2 for the day) and a random string
 * of hexadecimal digits.
 *
 * Transient files are stored in a directory whose default route is
 * wp-content/uploads/woocommerce_transient_files/yyyy-mm-dd, where "yyyy-mm-dd" is the expiration date
 * (year, month and day). The base route (minus the expiration date part) can be changed via a dedicated hook.
 *
 * Transient files that haven't expired (the expiration date is today or in the future) can be obtained remotely
 * via a dedicated URL, <server root>/wc/file/transient/<file name>. This URL is public (no authentication is required).
 * The content type of the response will always be "text/html".
 *
 * Cleanup of expired files is handled by the delete_expired_files method, which can be invoked manually
 * but there's a dedicated scheduled action that will invoke it that can be started and stopped via a dedicated tool
 * available in the WooCommerce tools page. The action runs once per day but this can be customized
 * via a dedicated hook.
 */
class TransientFilesEngine
{
    const CLEANUP_ACTION_NAME = 'woocommerce_expired_transient_files_cleanup';

    const CLEANUP_ACTION_GROUP = 'wc_batch_processes';

    /**
     * The instance of LegacyProxy to use.
     *
     * @var LegacyProxy
     */
    private $legacy_proxy = null;

    /**
     * Register hooks.
     */
    public function register()
    {
        // stub
    }

    /**
     * Class initialization, to be executed when the class is resolved by the container.
     *
     * @internal
     *
     * @param LegacyProxy $legacy_proxy The instance of LegacyProxy to use.
     */
    public final function init(Automattic\WooCommerce\Proxies\LegacyProxy $legacy_proxy)
    {
        // stub
    }

    /**
     * Get the base directory where transient files are stored.
     *
     * The default base directory is the WordPress uploads directory plus "woocommerce_transient_files". This can
     * be changed by using the woocommerce_transient_files_directory filter.
     *
     * If the woocommerce_transient_files_directory filter is not used and the default base directory
     * doesn't exist, it will be created. If the filter is used it's the responsibility of the caller
     * to ensure that the custom directory exists, otherwise an exception will be thrown.
     *
     * The actual directory for each existing file will be the base directory plus the expiration date
     * of the file formatted as 'yyyy-mm-dd'.
     *
     * @return string Effective base directory where transient files are stored.
     * @throws Exception The custom base directory (as specified via filter) doesn't exist, or the default base directory can't be created.
     */
    public function get_transient_files_directory(): string
    {
        // stub
    }

    /**
     * Create a transient file.
     *
     * @param string     $file_contents The contents of the file.
     * @param string|int $expiration_date A string representing the expiration date formatted as "yyyy-mm-dd", or a number representing the expiration date as a timestamp (the time of day part will be ignored).
     * @return string The name of the transient file created (without path information).
     * @throws \InvalidArgumentException Invalid expiration date (wrongly formatted, or it's a date in the past).
     * @throws \Exception The directory to store the file doesn't exist and can't be created.
     */
    public function create_transient_file(string $file_contents, $expiration_date): string
    {
        // stub
    }

    /**
     * Get the full physical path of a transient file given its name.
     *
     * @param string $filename The name of the transient file to locate.
     * @return string|null The full physical path of the file, or null if the files doesn't exist.
     */
    public function get_transient_file_path(string $filename): string|null
    {
        // stub
    }

    /**
     * Get the expiration date of a transient file based on its file name. The actual existence of the file is NOT checked.
     *
     * @param string $filename The name of the transient file to get the expiration date for.
     * @return string|null Expiration date formatted as Y-m-d, null if the file name isn't encoding a proper date.
     */
    public static function get_expiration_date(string $filename): string|null
    {
        // stub
    }

    /**
     * Get the public URL of a transient file. The file name is NOT checked for validity or actual existence.
     *
     * @param string $filename The name of the transient file to get the public URL for.
     * @return string The public URL of the file.
     */
    public function get_public_url(string $filename)
    {
        // stub
    }

    /**
     * Verify if a file has expired, given its full physical file path.
     *
     * Given a file name returned by 'create_transient_file', the procedure to check if it has expired is as follows:
     *
     * 1. Use 'get_transient_file_path' to obtain the full file path.
     * 2. If the above returns null, the file doesn't exist anymore (likely it expired and was deleted by the cleanup process).
     * 3. Otherwise, use 'file_has_expired' passing the obtained full file path.
     *
     * @param string $file_path The full file path to check.
     * @return bool True if the file has expired, false otherwise.
     * @throws \Exception Thrown by DateTime if a wrong file path is passed.
     */
    public function file_has_expired(string $file_path): bool
    {
        // stub
    }

    /**
     * Delete an existing transient file.
     *
     * @param string $filename The name of the file to delete.
     * @return bool True if the file has been deleted, false otherwise (the file didn't exist).
     */
    public function delete_transient_file(string $filename): bool
    {
        // stub
    }

    /**
     * Delete expired transient files from the filesystem.
     *
     * @param int $limit Maximum number of files to delete.
     * @return array "deleted_count" with the number of files actually deleted, "files_remain" that will be true if there are still files left to delete.
     * @throws Exception The base directory for transient files (possibly changed via filter) doesn't exist.
     */
    public function delete_expired_files(int $limit = 1000): array
    {
        // stub
    }

    /**
     * Is the expired files cleanup action currently scheduled?
     *
     * @return bool True if the expired files cleanup action is currently scheduled, false otherwise.
     */
    public function expired_files_cleanup_is_scheduled(): bool
    {
        // stub
    }

    /**
     * Schedule an action that will do one round of expired files cleanup.
     * The action is scheduled to run immediately. If a previous pending action exists, it's unscheduled first.
     */
    public function schedule_expired_files_cleanup(): void
    {
        // stub
    }

    /**
     * Remove the scheduled action that does the expired files cleanup, if it's scheduled.
     */
    public function unschedule_expired_files_cleanup(): void
    {
        // stub
    }

    /**
     * Run the expired files cleanup action and schedule a new one.
     *
     * If files are actually deleted then we assume that more files are pending deletion and schedule the next
     * action to run immediately. Otherwise (nothing was deleted) we schedule the next action for one day later
     * (but this can be changed via the 'woocommerce_delete_expired_transient_files_interval' filter).
     *
     * If the actual deletion process fails the next action is scheduled anyway for one day later
     * or for the interval given by the filter.
     *
     * NOTE: If the default interval is changed to something different from DAY_IN_SECONDS, please adjust the
     * "every 24h" text in add_debug_tools_entries too.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function handle_expired_files_cleanup_action(): void
    {
        // stub
    }

    /**
     * Add the tools to (re)schedule and un-schedule the expired files cleanup actions in the WooCommerce debug tools page.
     *
     * @param array $tools_array Original debug tools array.
     * @return array Updated debug tools array
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function add_debug_tools_entries(array $tools_array): array
    {
        // stub
    }

    /**
     * Delete a directory if it isn't empty.
     *
     * @param string $directory Full directory path.
     */
    private function delete_directory_if_not_empty(string $directory)
    {
        // stub
    }

    /**
     * Handle the "init" action, add rewrite rules for the "wc/file" endpoint.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public static function add_endpoint()
    {
        // stub
    }

    /**
     * Handle the "query_vars" action, add the "wc-transient-file-name" variable for the "wc/file/transient" endpoint.
     *
     * @param array $vars The original query variables.
     * @return array The updated query variables.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function handle_query_vars($vars)
    {
        // stub
    }

    /**
     * Handle the "parse_request" action for the "wc/file/transient" endpoint.
     *
     * If the request is not for "/wc/file/transient/<filename>" or "index.php?wc-transient-file-name=filename",
     * it returns without doing anything. Otherwise, it will serve the contents of the file with the provided name
     * if it exists, is public and has not expired; or will return a "Not found" status otherwise.
     *
     * The file will be served with a content type header of "text/html".
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function handle_parse_request()
    {
        // stub
    }

    /**
     * Core method to serve the contents of a transient file.
     *
     * @param string $file_name Transient file id or filename.
     */
    private function serve_file_contents(string $file_name)
    {
        // stub
    }

}