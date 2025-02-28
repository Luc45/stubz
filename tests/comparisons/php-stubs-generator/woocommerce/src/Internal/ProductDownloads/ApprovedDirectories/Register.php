<?php

namespace Automattic\WooCommerce\Internal\ProductDownloads\ApprovedDirectories;

/**
 * Maintains and manages the list of approved directories, within which product downloads can
 * be stored.
 */
class Register
{
    public const MODE_DISABLED = 'disabled';
    public const MODE_ENABLED = 'enabled';
    /**
     * Sets up the approved directories sub-system.
     *
     * @internal
     */
    final public function init()
    {
    }
    /**
     * Supplies the name of the database table used to store approved directories.
     *
     * @return string
     */
    public function get_table(): string
    {
    }
    /**
     * Returns a string indicating the current mode.
     *
     * May be one of: 'disabled', 'enabled', 'migrating'.
     *
     * @return string
     */
    public function get_mode(): string
    {
    }
    /**
     * Sets the mode. This effectively controls if approved directories are enforced or not.
     *
     * May be one of: 'disabled', 'enabled', 'migrating'.
     *
     * @param string $mode One of the values contained within self::MODES.
     *
     * @return bool
     */
    public function set_mode(string $mode): bool
    {
    }
    /**
     * Adds a new URL path.
     *
     * On success (or if the URL was already added) returns the URL ID, or else
     * returns boolean false.
     *
     * @throws URLException                 If the URL was invalid.
     * @throws ApprovedDirectoriesException If the operation could not be performed.
     *
     * @param string $url     The URL of the approved directory.
     * @param bool   $enabled If the rule is enabled.
     *
     * @return int
     */
    public function add_approved_directory(string $url, bool $enabled = true): int
    {
    }
    /**
     * Updates an existing approved directory.
     *
     * On success or if there is an existing entry for the same URL, returns true.
     *
     * @throws ApprovedDirectoriesException If the operation could not be performed.
     * @throws URLException                 If the URL was invalid.
     *
     * @param int    $id      The ID of the approved directory to be updated.
     * @param string $url     The new URL for the specified option.
     * @param bool   $enabled If the rule is enabled.
     *
     * @return bool
     */
    public function update_approved_directory(int $id, string $url, bool $enabled = true): bool
    {
    }
    /**
     * Indicates if the specified URL is already an approved directory.
     *
     * @param string $url The URL to check.
     *
     * @return bool
     */
    public function approved_directory_exists(string $url): bool
    {
    }
    /**
     * Returns the path identified by $id, or false if it does not exist.
     *
     * @param int $id The ID of the rule we are looking for.
     *
     * @return StoredUrl|false
     */
    public function get_by_id(int $id)
    {
    }
    /**
     * Returns the path identified by $url, or false if it does not exist.
     *
     * @param string $url The URL of the rule we are looking for.
     *
     * @return StoredUrl|false
     */
    public function get_by_url(string $url)
    {
    }
    /**
     * Indicates if the URL is within an approved directory. The approved directory must be enabled
     * (it is possible for individual approved directories to be disabled).
     *
     * For instance, for 'https://storage.king/12345/ebook.pdf' to be valid then 'https://storage.king/12345'
     * would need to be within our register.
     *
     * If the provided URL is a filepath it can be passed in without the 'file://' scheme.
     *
     * @throws URLException If the provided URL is badly formed.
     *
     * @param string $download_url The URL to check.
     *
     * @return bool
     */
    public function is_valid_path(string $download_url): bool
    {
    }
    /**
     * Lists currently approved directories.
     *
     * Returned array will have the following structure:
     *
     *     [
     *         'total_urls'  => 12345,
     *         'total_pages' => 123,
     *         'urls'        => [],  # StoredUrl[]
     *     ]
     *
     * @param array $args {
     *     Controls pagination and ordering.
     *
     *     @type null|bool $enabled  Controls if only enabled (true), disabled (false) or all rules (null) should be listed.
     *     @type string    $order    Ordering ('ASC' for ascending, 'DESC' for descending).
     *     @type string    $order_by Field to order by (one of 'url_id' or 'url').
     *     @type int       $page     The page of results to retrieve.
     *     @type int       $per_page The number of results to retrieve per page.
     *     @type string    $search   Term to search for.
     * }
     *
     * @return array
     */
    public function list(array $args): array
    {
    }
    /**
     * Delete the approved directory identitied by the supplied ID.
     *
     * @param int $id The ID of the rule to be deleted.
     *
     * @return bool
     */
    public function delete_by_id(int $id): bool
    {
    }
    /**
     * Delete the entirev approved directory list.
     *
     * @return bool
     */
    public function delete_all(): bool
    {
    }
    /**
     * Enable the approved directory identitied by the supplied ID.
     *
     * @param int $id The ID of the rule to be deleted.
     *
     * @return bool
     */
    public function enable_by_id(int $id): bool
    {
    }
    /**
     * Disable the approved directory identitied by the supplied ID.
     *
     * @param int $id The ID of the rule to be deleted.
     *
     * @return bool
     */
    public function disable_by_id(int $id): bool
    {
    }
    /**
     * Enables all Approved Download Directory rules in a single operation.
     *
     * @return bool
     */
    public function enable_all(): bool
    {
    }
    /**
     * Disables all Approved Download Directory rules in a single operation.
     *
     * @return bool
     */
    public function disable_all(): bool
    {
    }
    /**
     * Indicates the number of approved directories that are enabled (or disabled, if optional
     * param $enabled is set to false).
     *
     * @param bool $enabled Controls whether enabled or disabled directory rules are counted.
     *
     * @return int
     */
    public function count(bool $enabled = true): int
    {
    }
}
