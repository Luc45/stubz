<?php

namespace Automattic\WooCommerce\Utilities;

/**
 * A class of utilities for dealing with logging.
 */
final class LoggingUtil extends \
{
    /**
     * Get the canonical URL for the Logs tab of the Status admin page.
     *
     * @return string
     */
    public static function get_logs_tab_url(): string
    {
        // stub
    }

    /**
     * Determine the current value of the logging_enabled setting.
     *
     * @return bool
     */
    public static function logging_is_enabled(): bool
    {
        // stub
    }

    /**
     * Determine the current value of the default_handler setting.
     *
     * @return string
     */
    public static function get_default_handler(): string
    {
        // stub
    }

    /**
     * Determine the current value of the retention_period_days setting.
     *
     * @return int
     */
    public static function get_retention_period(): int
    {
        // stub
    }

    /**
     * Determine the current value of the level_threshold setting.
     *
     * @return string
     */
    public static function get_level_threshold(): string
    {
        // stub
    }

    /**
     * Generate a public ID for a log file based on its properties.
     *
     * The file ID is the basename of the file without the hash part. It allows us to identify a file without revealing
     * its full name in the filesystem, so that it's difficult to access the file directly with an HTTP request.
     *
     * @param string   $source   The source of the log entries contained in the file.
     * @param int|null $rotation Optional. The 0-based incremental rotation marker, if the file has been rotated.
     *                           Should only be a single digit.
     * @param int      $created  Optional. The date the file was created, as a Unix timestamp.
     *
     * @return string
     */
    public static function generate_log_file_id(string $source, int|null $rotation = null, int $created = 0): string
    {
        // stub
    }

    /**
     * Generate a hash to use as the suffix on a log filename.
     *
     * @param string $file_id A file ID (file basename without the hash).
     *
     * @return string
     */
    public static function generate_log_file_hash(string $file_id): string
    {
        // stub
    }

    /**
     * Get the directory for storing log files.
     *
     * @param bool $create_dir Optional. True to attempt to create the log directory if it doesn't exist. Default true.
     *
     * @return string The full directory path, with trailing slash.
     */
    public static function get_log_directory(bool $create_dir = true): string
    {
        // stub
    }

    /**
     * Calculate the size, in bytes, of the log directory.
     *
     * @return int
     */
    public static function get_log_directory_size(): int
    {
        // stub
    }

}

